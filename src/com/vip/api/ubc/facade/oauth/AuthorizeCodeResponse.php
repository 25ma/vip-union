<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\ubc\facade\oauth;

class AuthorizeCodeResponse {
	
	static $_TSPEC;
	public $business_result_code = null;
	public $business_result_msg = null;
	public $auth_code = null;
	public $state = null;
	public $redirect_url = null;
	
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
			'var' => 'auth_code'
			),
			4 => array(
			'var' => 'state'
			),
			5 => array(
			'var' => 'redirect_url'
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
			
			
			if (isset($vals['auth_code'])){
				
				$this->auth_code = $vals['auth_code'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['redirect_url'])){
				
				$this->redirect_url = $vals['redirect_url'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AuthorizeCodeResponse';
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
			
			
			
			
			if ("auth_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auth_code);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("redirect_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->redirect_url);
				
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
		
		
		if($this->auth_code !== null) {
			
			$xfer += $output->writeFieldBegin('auth_code');
			$xfer += $output->writeString($this->auth_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeString($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->redirect_url !== null) {
			
			$xfer += $output->writeFieldBegin('redirect_url');
			$xfer += $output->writeString($this->redirect_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>