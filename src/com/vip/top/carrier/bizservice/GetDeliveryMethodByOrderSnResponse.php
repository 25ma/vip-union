<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class GetDeliveryMethodByOrderSnResponse {
	
	static $_TSPEC;
	public $responseHeader = null;
	public $responseDetail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'responseHeader'
			),
			2 => array(
			'var' => 'responseDetail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['responseHeader'])){
				
				$this->responseHeader = $vals['responseHeader'];
			}
			
			
			if (isset($vals['responseDetail'])){
				
				$this->responseDetail = $vals['responseDetail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetDeliveryMethodByOrderSnResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("responseHeader" == $schemeField){
				
				$needSkip = false;
				
				$this->responseHeader = new \com\vip\top\carrier\service\TmsResponseHeader();
				$this->responseHeader->read($input);
				
			}
			
			
			
			
			if ("responseDetail" == $schemeField){
				
				$needSkip = false;
				
				$this->responseDetail = new \com\vip\top\carrier\bizservice\GetDeliveryMethodByOrderSnResponseDetail();
				$this->responseDetail->read($input);
				
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
		
		if($this->responseHeader !== null) {
			
			$xfer += $output->writeFieldBegin('responseHeader');
			
			if (!is_object($this->responseHeader)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->responseHeader->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->responseDetail !== null) {
			
			$xfer += $output->writeFieldBegin('responseDetail');
			
			if (!is_object($this->responseDetail)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->responseDetail->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>