<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\ubc\facade\oauth;

class GetUserInfoResponse {
	
	static $_TSPEC;
	public $business_result_code = null;
	public $business_result_msg = null;
	public $user_info = null;
	
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
			'var' => 'user_info'
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
			
			
			if (isset($vals['user_info'])){
				
				$this->user_info = $vals['user_info'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetUserInfoResponse';
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
			
			
			
			
			if ("user_info" == $schemeField){
				
				$needSkip = false;
				
				$this->user_info = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->user_info[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		
		if($this->user_info !== null) {
			
			$xfer += $output->writeFieldBegin('user_info');
			
			if (!is_array($this->user_info)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->user_info as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>