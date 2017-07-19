<?php
Class PGConfig {
	public function __construct($section=false) {
   		$prefix=((isset($_SERVER['HTTPS']) && (strcasecmp('off', $_SERVER['HTTPS']) !== 0))?'https://':'http://');
		$serverUrl=$prefix.$_SERVER['SERVER_NAME'].'/';
		/*production credentials*/
		$this->merchant_id='133278';
		$this->currency = 'INR';
		$this->language = 'EN';
		$this->working_key='6B36B0A00F773F509E0364195F998BAF';
		$this->access_code='AVUC70EE68AU36CUUA';
		if(empty($section)) {
			$this->success_url = $serverUrl.'payment-response.php?status=success';
			$this->cancel_url = $serverUrl.'payment-response.php?status=cancel';
		}
   }
}