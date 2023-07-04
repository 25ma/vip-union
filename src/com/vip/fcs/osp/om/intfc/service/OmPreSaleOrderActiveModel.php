<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmPreSaleOrderActiveModel {
	
	static $_TSPEC;
	public $ebsOrderId = null;
	public $activeType = null;
	public $activeField = null;
	public $activeNo = null;
	public $activeDiscountMoney = null;
	public $diffDiscountMoney = null;
	public $barcode = null;
	public $activeSource = null;
	public $businessCode = null;
	public $createTime = null;
	public $couponNo = null;
	public $goodsDiscountDetails = null;
	public $promCouponList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ebsOrderId'
			),
			2 => array(
			'var' => 'activeType'
			),
			3 => array(
			'var' => 'activeField'
			),
			4 => array(
			'var' => 'activeNo'
			),
			5 => array(
			'var' => 'activeDiscountMoney'
			),
			6 => array(
			'var' => 'diffDiscountMoney'
			),
			7 => array(
			'var' => 'barcode'
			),
			8 => array(
			'var' => 'activeSource'
			),
			9 => array(
			'var' => 'businessCode'
			),
			10 => array(
			'var' => 'createTime'
			),
			11 => array(
			'var' => 'couponNo'
			),
			12 => array(
			'var' => 'goodsDiscountDetails'
			),
			13 => array(
			'var' => 'promCouponList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ebsOrderId'])){
				
				$this->ebsOrderId = $vals['ebsOrderId'];
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
			
			
			if (isset($vals['activeDiscountMoney'])){
				
				$this->activeDiscountMoney = $vals['activeDiscountMoney'];
			}
			
			
			if (isset($vals['diffDiscountMoney'])){
				
				$this->diffDiscountMoney = $vals['diffDiscountMoney'];
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
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['couponNo'])){
				
				$this->couponNo = $vals['couponNo'];
			}
			
			
			if (isset($vals['goodsDiscountDetails'])){
				
				$this->goodsDiscountDetails = $vals['goodsDiscountDetails'];
			}
			
			
			if (isset($vals['promCouponList'])){
				
				$this->promCouponList = $vals['promCouponList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmPreSaleOrderActiveModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ebsOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ebsOrderId); 
				
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
			
			
			
			
			if ("activeDiscountMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeDiscountMoney);
				
			}
			
			
			
			
			if ("diffDiscountMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->diffDiscountMoney);
				
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
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("couponNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponNo);
				
			}
			
			
			
			
			if ("goodsDiscountDetails" == $schemeField){
				
				$needSkip = false;
				
				$this->goodsDiscountDetails = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\osp\om\intfc\service\OmPreSaleItemDiscountDetail();
						$elem0->read($input);
						
						$this->goodsDiscountDetails[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("promCouponList" == $schemeField){
				
				$needSkip = false;
				
				$this->promCouponList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\fcs\osp\om\intfc\service\OmPreSalePromCouponInfo();
						$elem1->read($input);
						
						$this->promCouponList[$_size1++] = $elem1;
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
		
		if($this->ebsOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('ebsOrderId');
			$xfer += $output->writeI64($this->ebsOrderId);
			
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
		
		
		if($this->activeDiscountMoney !== null) {
			
			$xfer += $output->writeFieldBegin('activeDiscountMoney');
			$xfer += $output->writeString($this->activeDiscountMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diffDiscountMoney !== null) {
			
			$xfer += $output->writeFieldBegin('diffDiscountMoney');
			$xfer += $output->writeString($this->diffDiscountMoney);
			
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
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponNo !== null) {
			
			$xfer += $output->writeFieldBegin('couponNo');
			$xfer += $output->writeString($this->couponNo);
			
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
		
		
		if($this->promCouponList !== null) {
			
			$xfer += $output->writeFieldBegin('promCouponList');
			
			if (!is_array($this->promCouponList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->promCouponList as $iter0){
				
				
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