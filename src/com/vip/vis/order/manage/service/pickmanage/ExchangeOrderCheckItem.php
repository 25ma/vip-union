<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\manage\service\pickmanage;

class ExchangeOrderCheckItem {
	
	static $_TSPEC;
	public $deliveryWarehouse = null;
	public $channel = null;
	public $firstClassification = null;
	public $secondClassification = null;
	public $thirdClassification = null;
	public $problemDesc = null;
	public $imageList = null;
	public $videoList = null;
	public $orderSn = null;
	public $po = null;
	public $goodSn = null;
	public $qualityCheckType = null;
	public $orderLabel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'deliveryWarehouse'
			),
			2 => array(
			'var' => 'channel'
			),
			3 => array(
			'var' => 'firstClassification'
			),
			4 => array(
			'var' => 'secondClassification'
			),
			5 => array(
			'var' => 'thirdClassification'
			),
			6 => array(
			'var' => 'problemDesc'
			),
			7 => array(
			'var' => 'imageList'
			),
			8 => array(
			'var' => 'videoList'
			),
			9 => array(
			'var' => 'orderSn'
			),
			10 => array(
			'var' => 'po'
			),
			11 => array(
			'var' => 'goodSn'
			),
			12 => array(
			'var' => 'qualityCheckType'
			),
			13 => array(
			'var' => 'orderLabel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['deliveryWarehouse'])){
				
				$this->deliveryWarehouse = $vals['deliveryWarehouse'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['firstClassification'])){
				
				$this->firstClassification = $vals['firstClassification'];
			}
			
			
			if (isset($vals['secondClassification'])){
				
				$this->secondClassification = $vals['secondClassification'];
			}
			
			
			if (isset($vals['thirdClassification'])){
				
				$this->thirdClassification = $vals['thirdClassification'];
			}
			
			
			if (isset($vals['problemDesc'])){
				
				$this->problemDesc = $vals['problemDesc'];
			}
			
			
			if (isset($vals['imageList'])){
				
				$this->imageList = $vals['imageList'];
			}
			
			
			if (isset($vals['videoList'])){
				
				$this->videoList = $vals['videoList'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['goodSn'])){
				
				$this->goodSn = $vals['goodSn'];
			}
			
			
			if (isset($vals['qualityCheckType'])){
				
				$this->qualityCheckType = $vals['qualityCheckType'];
			}
			
			
			if (isset($vals['orderLabel'])){
				
				$this->orderLabel = $vals['orderLabel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExchangeOrderCheckItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("deliveryWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouse);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("firstClassification" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->firstClassification);
				
			}
			
			
			
			
			if ("secondClassification" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->secondClassification);
				
			}
			
			
			
			
			if ("thirdClassification" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->thirdClassification);
				
			}
			
			
			
			
			if ("problemDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->problemDesc);
				
			}
			
			
			
			
			if ("imageList" == $schemeField){
				
				$needSkip = false;
				
				$this->imageList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->imageList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("videoList" == $schemeField){
				
				$needSkip = false;
				
				$this->videoList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->videoList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("goodSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodSn);
				
			}
			
			
			
			
			if ("qualityCheckType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->qualityCheckType); 
				
			}
			
			
			
			
			if ("orderLabel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderLabel);
				
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
		
		if($this->deliveryWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryWarehouse');
			$xfer += $output->writeString($this->deliveryWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->firstClassification !== null) {
			
			$xfer += $output->writeFieldBegin('firstClassification');
			$xfer += $output->writeString($this->firstClassification);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->secondClassification !== null) {
			
			$xfer += $output->writeFieldBegin('secondClassification');
			$xfer += $output->writeString($this->secondClassification);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdClassification !== null) {
			
			$xfer += $output->writeFieldBegin('thirdClassification');
			$xfer += $output->writeString($this->thirdClassification);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->problemDesc !== null) {
			
			$xfer += $output->writeFieldBegin('problemDesc');
			$xfer += $output->writeString($this->problemDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageList !== null) {
			
			$xfer += $output->writeFieldBegin('imageList');
			
			if (!is_array($this->imageList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->imageList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->videoList !== null) {
			
			$xfer += $output->writeFieldBegin('videoList');
			
			if (!is_array($this->videoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->videoList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodSn !== null) {
			
			$xfer += $output->writeFieldBegin('goodSn');
			$xfer += $output->writeString($this->goodSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qualityCheckType !== null) {
			
			$xfer += $output->writeFieldBegin('qualityCheckType');
			$xfer += $output->writeByte($this->qualityCheckType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderLabel !== null) {
			
			$xfer += $output->writeFieldBegin('orderLabel');
			$xfer += $output->writeString($this->orderLabel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>