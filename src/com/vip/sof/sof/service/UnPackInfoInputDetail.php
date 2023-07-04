<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class UnPackInfoInputDetail {
	
	static $_TSPEC;
	public $complainNum = null;
	public $goodsName = null;
	public $price = null;
	public $favour = null;
	public $sku = null;
	public $points = null;
	public $refundType = null;
	public $depreciationRate = null;
	public $lost = null;
	public $refundValue = null;
	public $detailId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'complainNum'
			),
			2 => array(
			'var' => 'goodsName'
			),
			3 => array(
			'var' => 'price'
			),
			4 => array(
			'var' => 'favour'
			),
			5 => array(
			'var' => 'sku'
			),
			6 => array(
			'var' => 'points'
			),
			7 => array(
			'var' => 'refundType'
			),
			8 => array(
			'var' => 'depreciationRate'
			),
			9 => array(
			'var' => 'lost'
			),
			10 => array(
			'var' => 'refundValue'
			),
			11 => array(
			'var' => 'detailId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['complainNum'])){
				
				$this->complainNum = $vals['complainNum'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['favour'])){
				
				$this->favour = $vals['favour'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['points'])){
				
				$this->points = $vals['points'];
			}
			
			
			if (isset($vals['refundType'])){
				
				$this->refundType = $vals['refundType'];
			}
			
			
			if (isset($vals['depreciationRate'])){
				
				$this->depreciationRate = $vals['depreciationRate'];
			}
			
			
			if (isset($vals['lost'])){
				
				$this->lost = $vals['lost'];
			}
			
			
			if (isset($vals['refundValue'])){
				
				$this->refundValue = $vals['refundValue'];
			}
			
			
			if (isset($vals['detailId'])){
				
				$this->detailId = $vals['detailId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UnPackInfoInputDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("complainNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->complainNum);
				
			}
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("favour" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->favour);
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("points" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->points);
				
			}
			
			
			
			
			if ("refundType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refundType); 
				
			}
			
			
			
			
			if ("depreciationRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->depreciationRate);
				
			}
			
			
			
			
			if ("lost" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lost);
				
			}
			
			
			
			
			if ("refundValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundValue);
				
			}
			
			
			
			
			if ("detailId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailId);
				
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
		
		if($this->complainNum !== null) {
			
			$xfer += $output->writeFieldBegin('complainNum');
			$xfer += $output->writeString($this->complainNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favour !== null) {
			
			$xfer += $output->writeFieldBegin('favour');
			$xfer += $output->writeString($this->favour);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku !== null) {
			
			$xfer += $output->writeFieldBegin('sku');
			$xfer += $output->writeString($this->sku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->points !== null) {
			
			$xfer += $output->writeFieldBegin('points');
			$xfer += $output->writeString($this->points);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundType !== null) {
			
			$xfer += $output->writeFieldBegin('refundType');
			$xfer += $output->writeI32($this->refundType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->depreciationRate !== null) {
			
			$xfer += $output->writeFieldBegin('depreciationRate');
			$xfer += $output->writeString($this->depreciationRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lost !== null) {
			
			$xfer += $output->writeFieldBegin('lost');
			$xfer += $output->writeString($this->lost);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundValue !== null) {
			
			$xfer += $output->writeFieldBegin('refundValue');
			$xfer += $output->writeString($this->refundValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailId !== null) {
			
			$xfer += $output->writeFieldBegin('detailId');
			$xfer += $output->writeString($this->detailId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>