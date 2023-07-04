<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service\vip;

class VposAccessTokenResponse {
	
	static $_TSPEC;
	public $code = null;
	public $msg = null;
	public $access_token = null;
	public $expires_in = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			10000 => array(
			'var' => 'code'
			),
			10001 => array(
			'var' => 'msg'
			),
			11 => array(
			'var' => 'access_token'
			),
			12 => array(
			'var' => 'expires_in'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['access_token'])){
				
				$this->access_token = $vals['access_token'];
			}
			
			
			if (isset($vals['expires_in'])){
				
				$this->expires_in = $vals['expires_in'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VposAccessTokenResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("access_token" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->access_token);
				
			}
			
			
			
			
			if ("expires_in" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->expires_in); 
				
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
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeString($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->access_token !== null) {
			
			$xfer += $output->writeFieldBegin('access_token');
			$xfer += $output->writeString($this->access_token);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('expires_in');
		$xfer += $output->writeI32($this->expires_in);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>