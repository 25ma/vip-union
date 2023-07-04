<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class GetDeliveryMethodByOrderSnRequest {
	
	static $_TSPEC;
	public $requestHeader = null;
	public $requestDetail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestHeader'
			),
			2 => array(
			'var' => 'requestDetail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestHeader'])){
				
				$this->requestHeader = $vals['requestHeader'];
			}
			
			
			if (isset($vals['requestDetail'])){
				
				$this->requestDetail = $vals['requestDetail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetDeliveryMethodByOrderSnRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("requestHeader" == $schemeField){
				
				$needSkip = false;
				
				$this->requestHeader = new \com\vip\top\carrier\service\TmsRequestHeader();
				$this->requestHeader->read($input);
				
			}
			
			
			
			
			if ("requestDetail" == $schemeField){
				
				$needSkip = false;
				
				$this->requestDetail = new \com\vip\top\carrier\bizservice\GetDeliveryMethodByOrderSnRequestDetail();
				$this->requestDetail->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('requestHeader');
		
		if (!is_object($this->requestHeader)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->requestHeader->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('requestDetail');
		
		if (!is_object($this->requestDetail)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->requestDetail->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>