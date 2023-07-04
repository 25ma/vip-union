<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class CarrierBillCheckModel {
	
	static $_TSPEC;
	public $carrierSerialNo = null;
	public $transportNo = null;
	public $deliveryType = null;
	public $happenedTime = null;
	public $freight = null;
	public $weight = null;
	public $volume = null;
	public $actionType = null;
	public $bizType = null;
	public $custCardNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrierSerialNo'
			),
			2 => array(
			'var' => 'transportNo'
			),
			3 => array(
			'var' => 'deliveryType'
			),
			4 => array(
			'var' => 'happenedTime'
			),
			5 => array(
			'var' => 'freight'
			),
			6 => array(
			'var' => 'weight'
			),
			7 => array(
			'var' => 'volume'
			),
			8 => array(
			'var' => 'actionType'
			),
			9 => array(
			'var' => 'bizType'
			),
			10 => array(
			'var' => 'custCardNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrierSerialNo'])){
				
				$this->carrierSerialNo = $vals['carrierSerialNo'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['deliveryType'])){
				
				$this->deliveryType = $vals['deliveryType'];
			}
			
			
			if (isset($vals['happenedTime'])){
				
				$this->happenedTime = $vals['happenedTime'];
			}
			
			
			if (isset($vals['freight'])){
				
				$this->freight = $vals['freight'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['actionType'])){
				
				$this->actionType = $vals['actionType'];
			}
			
			
			if (isset($vals['bizType'])){
				
				$this->bizType = $vals['bizType'];
			}
			
			
			if (isset($vals['custCardNo'])){
				
				$this->custCardNo = $vals['custCardNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CarrierBillCheckModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrierSerialNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierSerialNo);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("deliveryType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->deliveryType); 
				
			}
			
			
			
			
			if ("happenedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->happenedTime); 
				
			}
			
			
			
			
			if ("freight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->freight);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->weight);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->volume);
				
			}
			
			
			
			
			if ("actionType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actionType); 
				
			}
			
			
			
			
			if ("bizType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bizType); 
				
			}
			
			
			
			
			if ("custCardNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCardNo);
				
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
		
		if($this->carrierSerialNo !== null) {
			
			$xfer += $output->writeFieldBegin('carrierSerialNo');
			$xfer += $output->writeString($this->carrierSerialNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('transportNo');
		$xfer += $output->writeString($this->transportNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('deliveryType');
		$xfer += $output->writeI32($this->deliveryType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('happenedTime');
		$xfer += $output->writeI64($this->happenedTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->freight !== null) {
			
			$xfer += $output->writeFieldBegin('freight');
			$xfer += $output->writeDouble($this->freight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeDouble($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volume !== null) {
			
			$xfer += $output->writeFieldBegin('volume');
			$xfer += $output->writeDouble($this->volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('actionType');
		$xfer += $output->writeI32($this->actionType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->bizType !== null) {
			
			$xfer += $output->writeFieldBegin('bizType');
			$xfer += $output->writeI32($this->bizType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCardNo !== null) {
			
			$xfer += $output->writeFieldBegin('custCardNo');
			$xfer += $output->writeString($this->custCardNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>