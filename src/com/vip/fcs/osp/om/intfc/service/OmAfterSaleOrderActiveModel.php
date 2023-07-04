<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmAfterSaleOrderActiveModel {
	
	static $_TSPEC;
	public $id = null;
	public $ebsOrderReturnId = null;
	public $activeType = null;
	public $activeField = null;
	public $activeNo = null;
	public $couponList = null;
	public $activeDiscountMoney = null;
	public $createTime = null;
	public $updateTime = null;
	public $barcode = null;
	public $activeSource = null;
	public $businessCode = null;
	public $goodsDiscountDetails = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'ebsOrderReturnId'
			),
			3 => array(
			'var' => 'activeType'
			),
			4 => array(
			'var' => 'activeField'
			),
			5 => array(
			'var' => 'activeNo'
			),
			6 => array(
			'var' => 'couponList'
			),
			7 => array(
			'var' => 'activeDiscountMoney'
			),
			8 => array(
			'var' => 'createTime'
			),
			9 => array(
			'var' => 'updateTime'
			),
			10 => array(
			'var' => 'barcode'
			),
			11 => array(
			'var' => 'activeSource'
			),
			12 => array(
			'var' => 'businessCode'
			),
			13 => array(
			'var' => 'goodsDiscountDetails'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['ebsOrderReturnId'])){
				
				$this->ebsOrderReturnId = $vals['ebsOrderReturnId'];
			}
			
			
			if (isset($vals['activeType'])){
				
				$this->activeType = $vals['activeType'];
			}
			
			
			if (isset($vals['activeField'])){
				
				$this->activeField = $vals['activeField'];
			}
			
			
			if (isset($vals['activeNo'])){
				
				$this->activeNo = $vals['activeNo'];
			}
			
			
			if (isset($vals['couponList'])){
				
				$this->couponList = $vals['couponList'];
			}
			
			
			if (isset($vals['activeDiscountMoney'])){
				
				$this->activeDiscountMoney = $vals['activeDiscountMoney'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['activeSource'])){
				
				$this->activeSource = $vals['activeSource'];
			}
			
			
			if (isset($vals['businessCode'])){
				
				$this->businessCode = $vals['businessCode'];
			}
			
			
			if (isset($vals['goodsDiscountDetails'])){
				
				$this->goodsDiscountDetails = $vals['goodsDiscountDetails'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmAfterSaleOrderActiveModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("ebsOrderReturnId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ebsOrderReturnId); 
				
			}
			
			
			
			
			if ("activeType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->activeType); 
				
			}
			
			
			
			
			if ("activeField" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->activeField); 
				
			}
			
			
			
			
			if ("activeNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeNo);
				
			}
			
			
			
			
			if ("couponList" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponList);
				
			}
			
			
			
			
			if ("activeDiscountMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeDiscountMoney);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("activeSource" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activeSource); 
				
			}
			
			
			
			
			if ("businessCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->businessCode); 
				
			}
			
			
			
			
			if ("goodsDiscountDetails" == $schemeField){
				
				$needSkip = false;
				
				$this->goodsDiscountDetails = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\osp\om\intfc\service\EbsOfcGoodsDiscountDetailModel();
						$elem0->read($input);
						
						$this->goodsDiscountDetails[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ebsOrderReturnId !== null) {
			
			$xfer += $output->writeFieldBegin('ebsOrderReturnId');
			$xfer += $output->writeI64($this->ebsOrderReturnId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeType !== null) {
			
			$xfer += $output->writeFieldBegin('activeType');
			$xfer += $output->writeI32($this->activeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeField !== null) {
			
			$xfer += $output->writeFieldBegin('activeField');
			$xfer += $output->writeI32($this->activeField);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeNo !== null) {
			
			$xfer += $output->writeFieldBegin('activeNo');
			$xfer += $output->writeString($this->activeNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponList !== null) {
			
			$xfer += $output->writeFieldBegin('couponList');
			$xfer += $output->writeString($this->couponList);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeDiscountMoney !== null) {
			
			$xfer += $output->writeFieldBegin('activeDiscountMoney');
			$xfer += $output->writeString($this->activeDiscountMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeSource !== null) {
			
			$xfer += $output->writeFieldBegin('activeSource');
			$xfer += $output->writeI64($this->activeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessCode !== null) {
			
			$xfer += $output->writeFieldBegin('businessCode');
			$xfer += $output->writeI32($this->businessCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsDiscountDetails !== null) {
			
			$xfer += $output->writeFieldBegin('goodsDiscountDetails');
			
			if (!is_array($this->goodsDiscountDetails)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goodsDiscountDetails as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>