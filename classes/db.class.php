<?php
require_once($_SERVER['DOCUMENT_ROOT']."/dbconfig.php");
require_once($_SERVER['DOCUMENT_ROOT']."/classes/constants.class.php");
class dbConnect {
	// public $tPrefix="test_app_";
	public $tPrefix="";
	public $pcLength=4;
	public $res=array("status"=>0);
	function dbConnect($hostname=null,$dbName=null,$username=null,$password=null) {
		$dbConfig= new dbConfig();
		$this->conn = new mysqli($dbConfig->hostname, $dbConfig->username, $dbConfig->password, $dbConfig->dbName);
		$this->const=new constClass();
		if (mysqli_connect_errno()) {
			return $this->connErr=mysqli_connect_error();
		} else {
			// $query="SELECT * FROM smsgateway";
			// $this->setQuery($query);
			// $result=$this->conn->query($query);
			// if(mysqli_num_rows($result)>0) {
			// 	$this->smsgateway=$result->fetch_array(MYSQLI_ASSOC);
			// }
			$query="SET SESSION SQL_BIG_SELECTS=1";
			$this->conn->query($query);
			return $this->conn;
		}
	}
	function insertObject($table, &$object, $keyName = NULL ) {
		$fmtsql = 'INSERT INTO '.$this->nameQuote($table).' ( %s ) VALUES ( %s ) ';
		$fields = array();
		foreach (get_object_vars( $object ) as $k => $v) {
			if (is_array($v) or is_object($v) or $v === NULL) {
				continue;
			}
			if ($k[0] == '_') {	// internal field
				continue;
			}
			$fields[] = $this->nameQuote( $k );
			$values[] = "'".$this->conn->real_escape_string($v)."'";
		}
		$query=sprintf( $fmtsql, implode( ",", $fields ) ,  implode( ",", $values ) );
		$this->setQuery($query);
		// echo "<br>".$query."<br>";
		$result=$this->conn->query( $query);
		if (!$result) {
			return false;
		}
		$id = $this->conn->insert_id;
		if ($keyName && $id) {
			$object->$keyName = $id;
		}
		return $id;
	}
	function updateObject( $table, &$object, $keyName, $updateNulls=true ) {
		$fmtsql = 'UPDATE '.$this->nameQuote($table).' SET %s WHERE %s';
		$tmp = array();
		foreach (get_object_vars( $object ) as $k => $v) {
			if( is_array($v) or is_object($v) or $k[0] == '_' ) { // internal or NA field
				continue;
			}
			if( $k == $keyName ) { // PK not to be updated
				$where = $keyName . '="' . $v .'"';
				continue;
			}
			if ($v === null)
			{
				if ($updateNulls) {
					$val = 'NULL';
				} else {
					continue;
				}
			} else {
				$val = '"'.$this->conn->real_escape_string($v).'"';
			}
			$tmp[] = $this->nameQuote( $k ) . '=' . $val;
		}
		if(!empty($where)) {
			$query=sprintf( $fmtsql, implode( ",", $tmp ) , $where );
			// echo $query;
			$this->setQuery($query);
			return $this->conn->query($query);			
		}
		return false;
	}
	function nameQuote($s) {
		$q="`";
		if (strpos($s, '.') === false) {
			return $q . $s . $q;
		} else {
			return $s;
		}
	}
	function escQuote($s) {
		return "'".$this->conn->real_escape_string($s)."'";
	}
	function moneyFormatIndia($num){
	    $explrestunits = "" ;
	    if($num>0) {
	    	$num=round($num);
	    }
	    if(strlen($num)>3){
	        $lastthree = substr($num, strlen($num)-3, strlen($num));
	        $restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
	        $restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
	        $expunit = str_split($restunits, 2);
	        for($i=0; $i<sizeof($expunit); $i++){
	            // creates each of the 2's group and adds a comma to the end
	            if($i==0)
	            {
	                $explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
	            }else{
	                $explrestunits .= $expunit[$i].",";
	            }
	        }
	        $thecash = $explrestunits.$lastthree;
	    } else {
	        $thecash = $num;
	    }
	    return $thecash; // writes the final format where $currency is the currency symbol.
	}
	function setQuery(&$query) {
		$query=str_replace("#__", $this->tPrefix, $query);
		return $query;
	}
	function set_big_select() {
		$query="SET OPTION SQL_BIG_SELECTS = 1";
		$this->setQuery($query);
		$this->conn->query($query);
	}
	function send_as_json($data,$exit=false) {
		if (!headers_sent()) {
			header('Content-Type: application/json');
		}
		echo json_encode($data);
		if($exit) {
			exit();
		}
	}
}
?>