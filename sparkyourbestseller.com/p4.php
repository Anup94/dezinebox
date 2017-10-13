<?php include 'analyticstracking.php' ?>
<?php
  $id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
  <meta name="author" content="#Sparkyourbestseller">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://developer.mozilla.org/en-US/docs/Template:CustomSampleCSS?raw=1" />
  <style>
      .container{
          padding-top:2%;
      }
      .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
  </style>
    
</head>
<body>
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="img/logo.png" class="logo" style="height: 188%;"></a>
      </div>
      <ul class="nav navbar-nav navbar-right">

        <li style="font-size: 26px;font-weight: 900;"><a href="#">Login</a></li>
      </ul>
    </div>
  </nav>



  <div class="container">


    <div class="col-xs-12 yk_panel_background">


<div id="tab4">
     
       <div class="row">

         <div class="col-xs-1" style="padding-left: 0px">
            <div id="prev_book_section4"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 110%;  -ms-transform:rotate(180deg); -webkit-transform:rotate(180deg); transform:rotate(180deg);">navigate_next</i></a></div>
         </div>


        <div class="col-xs-10" style="padding-right: 0px" >

                  <div class="row">
                               <div class="col-xs-3 " style="padding-left: 30px; padding-top: 15px">
                                 <strong style="color: orange;font-size: 24px">Preview </strong>
                               </div> 

                                                    
                  </div>


                    <div class="row">

                     <div class="col-xs-3 col-xs-offset-2 " id="book_tab4_maindiv" >

                       <div class="" id="downimage" style="margin-top: 25px; ">
                         
                           
                           
                           
                           <?php
                $connect = mysqli_connect("localhost", "root", "", "test");
                
                $res = mysqli_query($connect, "SELECT * FROM scollable where temp_id='$id' ORDER BY id DESC LIMIT 1  ");
                while($r= mysqli_fetch_array($res))
                {
                     echo '<center><img src="data:image/jpg;base64,'.base64_encode($r['name'] ).'" width="200%" height="300%" style="margin-left:-50%;"><p style="position: absolute;margin-top:-80%;z-index:5; color:#black;">
                     <font face="Century Gothic" size="10" color="black">' .$r["title"].'</font><br><br><font size="+3" face="Comic Sans MS">'.$r["aname"].'
                     </font></p></img></center>';
                }
                ?>
                       
                    </div>        
                         
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
                    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://files.codepedia.info/uploads/iScripts/html2canvas.js"></script>
	
	 <input id="btn-Preview-Image" type="button" value="Preview"/>
                         
                         <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
      <a id="btn-Convert-Html2Image" href="#">Download</a></div></div>
    <br/>
    <div id="down">
    </div>


<script>
$(document).ready(function(){

	
var element = $("#downimage"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
             }
         });
    });

	$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
	});

});

</script>
                         
                      
  
                     </div>

                       <div class="col-xs-7 yk_last_icons">

                     <div class="col-xs-2 ">
                       <img src="img/2.png" class="section1_icon  invert">
                     </div>

                     <div class="col-xs-2 ">
                       <img src="img/3.png" class="section1_icon  invert">
                     </div>


                     <div class="col-xs-2 ">
                       <img src="img/9.png" class="section1_icon  invert">
                     </div>


                     <div class="col-xs-2 ">
                       <img src="img/5.png" class="section1_icon  invert">
                     </div>
                     </div>

                   </div>

         </div>
       </div>

</div>
    </div>

    <div class="col-xs-12 yk_panel_bottom_background">
      <div class="row">

        <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom " id="yk_button_panel_bottom_1">

         <img src="img/8.png" class="section1_icon yk_top_margin15">

       </div>

       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom " id="yk_button_panel_bottom_2">

         <img src="img/2.png" class="section1_icon yk_top_margin15">

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom " id="yk_button_panel_bottom_3">

         <img src="img/1.png" class="section1_icon yk_top_margin15">

       </div>

           <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom active " id="yk_button_panel_bottom_4">

         <img src="img/6.png" class="section1_icon yk_top_margin15 invert" style="color: rgba(0, 0, 0, 0.54)">

       </div>

     </div>

   </div>

 </div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("btn-Preview-Image");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
 <script src="jquery-2.2.4.min.js" type="text/javascript"></script>
 <script src="javascript.js" type="text/javascript"></script>
</html>
