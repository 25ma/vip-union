<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class CreateVipcardQueryReqModel {
	
	static $_TSPEC;
	public $merchant_code = null;
	public $requestId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			11 => array(
			'var' => 'merchant_code'
			),
			13 => array(
			'var' => 'requestId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateVipcardQueryReqModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("merchant_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchant_code);
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
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
		
		$xfer += $output->writeFieldBegin('merchant_code');
		$xfer += $output->writeString($this->merchant_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>