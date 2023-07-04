<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class ApPreOccupyInvPriceResponseDetail {
	
	static $_TSPEC;
	public $taxRate = null;
	public $grossMarginRate = null;
	public $billPrice = null;
	public $billTaxPrice = null;
	public $activeOrderPrice = null;
	public $sumVendorFavPrice = null;
	public $sumFavPrice = null;
	public $originalPrice = null;
	public $discountDetailList = null;
	public $activeNewRuleFlag = null;
	public $cooperationType = null;
	public $orderNum = null;
	public $itemNo = null;
	public $allocateId = null;
	public $shopCode = null;
	public $quantity = null;
	public $pickNo = null;
	public $orderPrice = null;
	public $addTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'taxRate'
			),
			2 => array(
			'var' => 'grossMarginRate'
			),
			3 => array(
			'var' => 'billPrice'
			),
			4 => array(
			'var' => 'billTaxPrice'
			),
			5 => array(
			'var' => 'activeOrderPrice'
			),
			6 => array(
			'var' => 'sumVendorFavPrice'
			),
			7 => array(
			'var' => 'sumFavPrice'
			),
			8 => array(
			'var' => 'originalPrice'
			),
			9 => array(
			'var' => 'discountDetailList'
			),
			10 => array(
			'var' => 'activeNewRuleFlag'
			),
			11 => array(
			'var' => 'cooperationType'
			),
			12 => array(
			'var' => 'orderNum'
			),
			13 => array(
			'var' => 'itemNo'
			),
			14 => array(
			'var' => 'allocateId'
			),
			15 => array(
			'var' => 'shopCode'
			),
			16 => array(
			'var' => 'quantity'
			),
			17 => array(
			'var' => 'pickNo'
			),
			18 => array(
			'var' => 'orderPrice'
			),
			19 => array(
			'var' => 'addTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['grossMarginRate'])){
				
				$this->grossMarginRate = $vals['grossMarginRate'];
			}
			
			
			if (isset($vals['billPrice'])){
				
				$this->billPrice = $vals['billPrice'];
			}
			
			
			if (isset($vals['billTaxPrice'])){
				
				$this->billTaxPrice = $vals['billTaxPrice'];
			}
			
			
			if (isset($vals['activeOrderPrice'])){
				
				$this->activeOrderPrice = $vals['activeOrderPrice'];
			}
			
			
			if (isset($vals['sumVendorFavPrice'])){
				
				$this->sumVendorFavPrice = $vals['sumVendorFavPrice'];
			}
			
			
			if (isset($vals['sumFavPrice'])){
				
				$this->sumFavPrice = $vals['sumFavPrice'];
			}
			
			
			if (isset($vals['originalPrice'])){
				
				$this->originalPrice = $vals['originalPrice'];
			}
			
			
			if (isset($vals['discountDetailList'])){
				
				$this->discountDetailList = $vals['discountDetailList'];
			}
			
			
			if (isset($vals['activeNewRuleFlag'])){
				
				$this->activeNewRuleFlag = $vals['activeNewRuleFlag'];
			}
			
			
			if (isset($vals['cooperationType'])){
				
				$this->cooperationType = $vals['cooperationType'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['allocateId'])){
				
				$this->allocateId = $vals['allocateId'];
			}
			
			
			if (isset($vals['shopCode'])){
				
				$this->shopCode = $vals['shopCode'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['pickNo'])){
				
				$this->pickNo = $vals['pickNo'];
			}
			
			
			if (isset($vals['orderPrice'])){
				
				$this->orderPrice = $vals['orderPrice'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ApPreOccupyInvPriceResponseDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRate);
				
			}
			
			
			
			
			if ("grossMarginRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grossMarginRate);
				
			}
			
			
			
			
			if ("billPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billPrice);
				
			}
			
			
			
			
			if ("billTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billTaxPrice);
				
			}
			
			
			
			
			if ("activeOrderPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeOrderPrice);
				
			}
			
			
			
			
			if ("sumVendorFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sumVendorFavPrice);
				
			}
			
			
			
			
			if ("sumFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sumFavPrice);
				
			}
			
			
			
			
			if ("originalPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalPrice);
				
			}
			
			
			
			
			if ("discountDetailList" == $schemeField){
				
				$needSkip = false;
				
				$this->discountDetailList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\ap\service\JitxSettlementDiscountDetail();
						$elem0->read($input);
						
						$this->discountDetailList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("activeNewRuleFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeNewRuleFlag);
				
			}
			
			
			
			
			if ("cooperationType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->cooperationType); 
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("allocateId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->allocateId);
				
			}
			
			
			
			
			if ("shopCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shopCode);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->quantity);
				
			}
			
			
			
			
			if ("pickNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickNo);
				
			}
			
			
			
			
			if ("orderPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderPrice);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->addTime);
				
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
		
		$xfer += $output->writeFieldBegin('taxRate');
		$xfer += $output->writeString($this->taxRate);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->grossMarginRate !== null) {
			
			$xfer += $output->writeFieldBegin('grossMarginRate');
			$xfer += $output->writeString($this->grossMarginRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('billPrice');
		$xfer += $output->writeString($this->billPrice);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('billTaxPrice');
		$xfer += $output->writeString($this->billTaxPrice);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('activeOrderPrice');
		$xfer += $output->writeString($this->activeOrderPrice);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sumVendorFavPrice');
		$xfer += $output->writeString($this->sumVendorFavPrice);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sumFavPrice');
		$xfer += $output->writeString($this->sumFavPrice);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->originalPrice !== null) {
			
			$xfer += $output->writeFieldBegin('originalPrice');
			$xfer += $output->writeString($this->originalPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountDetailList !== null) {
			
			$xfer += $output->writeFieldBegin('discountDetailList');
			
			if (!is_array($this->discountDetailList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->discountDetailList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeNewRuleFlag !== null) {
			
			$xfer += $output->writeFieldBegin('activeNewRuleFlag');
			$xfer += $output->writeString($this->activeNewRuleFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationType !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationType');
			$xfer += $output->writeByte($this->cooperationType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNo !== null) {
			
			$xfer += $output->writeFieldBegin('itemNo');
			$xfer += $output->writeString($this->itemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->allocateId !== null) {
			
			$xfer += $output->writeFieldBegin('allocateId');
			$xfer += $output->writeString($this->allocateId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shopCode !== null) {
			
			$xfer += $output->writeFieldBegin('shopCode');
			$xfer += $output->writeString($this->shopCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeString($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pickNo !== null) {
			
			$xfer += $output->writeFieldBegin('pickNo');
			$xfer += $output->writeString($this->pickNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderPrice !== null) {
			
			$xfer += $output->writeFieldBegin('orderPrice');
			$xfer += $output->writeString($this->orderPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeI64($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>