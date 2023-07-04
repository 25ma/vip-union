<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class GetDeliveryMethodByOrderSnResponseDetail {
	
	static $_TSPEC;
	public $orderSn = null;
	public $custNo = null;
	public $areaId = null;
	public $supportBizCode = null;
	public $supportBizMsg = null;
	public $deliveryMethodCodes = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'custNo'
			),
			3 => array(
			'var' => 'areaId'
			),
			4 => array(
			'var' => 'supportBizCode'
			),
			5 => array(
			'var' => 'supportBizMsg'
			),
			6 => array(
			'var' => 'deliveryMethodCodes'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['custNo'])){
				
				$this->custNo = $vals['custNo'];
			}
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['supportBizCode'])){
				
				$this->supportBizCode = $vals['supportBizCode'];
			}
			
			
			if (isset($vals['supportBizMsg'])){
				
				$this->supportBizMsg = $vals['supportBizMsg'];
			}
			
			
			if (isset($vals['deliveryMethodCodes'])){
				
				$this->deliveryMethodCodes = $vals['deliveryMethodCodes'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetDeliveryMethodByOrderSnResponseDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("custNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->custNo); 
				
			}
			
			
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("supportBizCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->supportBizCode); 
				
			}
			
			
			
			
			if ("supportBizMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supportBizMsg);
				
			}
			
			
			
			
			if ("deliveryMethodCodes" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryMethodCodes);
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custNo !== null) {
			
			$xfer += $output->writeFieldBegin('custNo');
			$xfer += $output->writeI64($this->custNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supportBizCode !== null) {
			
			$xfer += $output->writeFieldBegin('supportBizCode');
			$xfer += $output->writeI32($this->supportBizCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supportBizMsg !== null) {
			
			$xfer += $output->writeFieldBegin('supportBizMsg');
			$xfer += $output->writeString($this->supportBizMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryMethodCodes !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryMethodCodes');
			$xfer += $output->writeString($this->deliveryMethodCodes);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>