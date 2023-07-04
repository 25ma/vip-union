<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class OrderPlanTime {
	
	static $_TSPEC;
	public $orderSn = null;
	public $planDeliveryTime = null;
	public $planPickTime = null;
	public $maxInvalidDate = null;
	public $deliveryType = null;
	public $appointDeliveryTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'planDeliveryTime'
			),
			3 => array(
			'var' => 'planPickTime'
			),
			4 => array(
			'var' => 'maxInvalidDate'
			),
			5 => array(
			'var' => 'deliveryType'
			),
			6 => array(
			'var' => 'appointDeliveryTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['planDeliveryTime'])){
				
				$this->planDeliveryTime = $vals['planDeliveryTime'];
			}
			
			
			if (isset($vals['planPickTime'])){
				
				$this->planPickTime = $vals['planPickTime'];
			}
			
			
			if (isset($vals['maxInvalidDate'])){
				
				$this->maxInvalidDate = $vals['maxInvalidDate'];
			}
			
			
			if (isset($vals['deliveryType'])){
				
				$this->deliveryType = $vals['deliveryType'];
			}
			
			
			if (isset($vals['appointDeliveryTime'])){
				
				$this->appointDeliveryTime = $vals['appointDeliveryTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderPlanTime';
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
			
			
			
			
			if ("planDeliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->planDeliveryTime);
				
			}
			
			
			
			
			if ("planPickTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->planPickTime);
				
			}
			
			
			
			
			if ("maxInvalidDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->maxInvalidDate);
				
			}
			
			
			
			
			if ("deliveryType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->deliveryType); 
				
			}
			
			
			
			
			if ("appointDeliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appointDeliveryTime);
				
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
		
		
		if($this->planDeliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('planDeliveryTime');
			$xfer += $output->writeString($this->planDeliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->planPickTime !== null) {
			
			$xfer += $output->writeFieldBegin('planPickTime');
			$xfer += $output->writeString($this->planPickTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxInvalidDate !== null) {
			
			$xfer += $output->writeFieldBegin('maxInvalidDate');
			$xfer += $output->writeString($this->maxInvalidDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryType !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryType');
			$xfer += $output->writeI32($this->deliveryType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appointDeliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('appointDeliveryTime');
			$xfer += $output->writeString($this->appointDeliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>