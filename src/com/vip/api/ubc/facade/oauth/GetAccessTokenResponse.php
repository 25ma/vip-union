<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\ubc\facade\oauth;

class GetAccessTokenResponse {
	
	static $_TSPEC;
	public $business_result_code = null;
	public $business_result_msg = null;
	public $out_access_token = null;
	public $expire_in = null;
	public $open_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'business_result_code'
			),
			2 => array(
			'var' => 'business_result_msg'
			),
			3 => array(
			'var' => 'out_access_token'
			),
			4 => array(
			'var' => 'expire_in'
			),
			5 => array(
			'var' => 'open_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['business_result_code'])){
				
				$this->business_result_code = $vals['business_result_code'];
			}
			
			
			if (isset($vals['business_result_msg'])){
				
				$this->business_result_msg = $vals['business_result_msg'];
			}
			
			
			if (isset($vals['out_access_token'])){
				
				$this->out_access_token = $vals['out_access_token'];
			}
			
			
			if (isset($vals['expire_in'])){
				
				$this->expire_in = $vals['expire_in'];
			}
			
			
			if (isset($vals['open_id'])){
				
				$this->open_id = $vals['open_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetAccessTokenResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("business_result_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->business_result_code);
				
			}
			
			
			
			
			if ("business_result_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->business_result_msg);
				
			}
			
			
			
			
			if ("out_access_token" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_access_token);
				
			}
			
			
			
			
			if ("expire_in" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expire_in);
				
			}
			
			
			
			
			if ("open_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->open_id);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->business_result_code !== null) {
			
			$xfer += $output->writeFieldBegin('business_result_code');
			$xfer += $output->writeString($this->business_result_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->business_result_msg !== null) {
			
			$xfer += $output->writeFieldBegin('business_result_msg');
			$xfer += $output->writeString($this->business_result_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_access_token !== null) {
			
			$xfer += $output->writeFieldBegin('out_access_token');
			$xfer += $output->writeString($this->out_access_token);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expire_in !== null) {
			
			$xfer += $output->writeFieldBegin('expire_in');
			$xfer += $output->writeString($this->expire_in);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->open_id !== null) {
			
			$xfer += $output->writeFieldBegin('open_id');
			$xfer += $output->writeString($this->open_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>