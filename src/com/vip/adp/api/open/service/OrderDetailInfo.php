<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class OrderDetailInfo {
	
	static $_TSPEC;
	public $goodsId = null;
	public $goodsName = null;
	public $goodsThumb = null;
	public $goodsCount = null;
	public $commissionTotalCost = null;
	public $commissionRate = null;
	public $commission = null;
	public $commCode = null;
	public $commName = null;
	public $orderSource = null;
	public $afterSaleInfo = null;
	public $sizeId = null;
	public $status = null;
	public $brandStoreSn = null;
	public $brandStoreName = null;
	public $spuId = null;
	public $goodsFinalPrice = null;
	public $isSubsidyTaskOrder = null;
	public $subsidyTaskOrderStatus = null;
	public $subsidyTaskGoodsAward = null;
	public $cat1Code = null;
	public $cat1Name = null;
	public $cat2Code = null;
	public $cat2Name = null;
	public $cat3Code = null;
	public $cat3Name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsId'
			),
			2 => array(
			'var' => 'goodsName'
			),
			3 => array(
			'var' => 'goodsThumb'
			),
			4 => array(
			'var' => 'goodsCount'
			),
			5 => array(
			'var' => 'commissionTotalCost'
			),
			6 => array(
			'var' => 'commissionRate'
			),
			7 => array(
			'var' => 'commission'
			),
			8 => array(
			'var' => 'commCode'
			),
			9 => array(
			'var' => 'commName'
			),
			10 => array(
			'var' => 'orderSource'
			),
			11 => array(
			'var' => 'afterSaleInfo'
			),
			12 => array(
			'var' => 'sizeId'
			),
			13 => array(
			'var' => 'status'
			),
			14 => array(
			'var' => 'brandStoreSn'
			),
			15 => array(
			'var' => 'brandStoreName'
			),
			16 => array(
			'var' => 'spuId'
			),
			17 => array(
			'var' => 'goodsFinalPrice'
			),
			18 => array(
			'var' => 'isSubsidyTaskOrder'
			),
			19 => array(
			'var' => 'subsidyTaskOrderStatus'
			),
			20 => array(
			'var' => 'subsidyTaskGoodsAward'
			),
			21 => array(
			'var' => 'cat1Code'
			),
			22 => array(
			'var' => 'cat1Name'
			),
			23 => array(
			'var' => 'cat2Code'
			),
			24 => array(
			'var' => 'cat2Name'
			),
			25 => array(
			'var' => 'cat3Code'
			),
			26 => array(
			'var' => 'cat3Name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['goodsThumb'])){
				
				$this->goodsThumb = $vals['goodsThumb'];
			}
			
			
			if (isset($vals['goodsCount'])){
				
				$this->goodsCount = $vals['goodsCount'];
			}
			
			
			if (isset($vals['commissionTotalCost'])){
				
				$this->commissionTotalCost = $vals['commissionTotalCost'];
			}
			
			
			if (isset($vals['commissionRate'])){
				
				$this->commissionRate = $vals['commissionRate'];
			}
			
			
			if (isset($vals['commission'])){
				
				$this->commission = $vals['commission'];
			}
			
			
			if (isset($vals['commCode'])){
				
				$this->commCode = $vals['commCode'];
			}
			
			
			if (isset($vals['commName'])){
				
				$this->commName = $vals['commName'];
			}
			
			
			if (isset($vals['orderSource'])){
				
				$this->orderSource = $vals['orderSource'];
			}
			
			
			if (isset($vals['afterSaleInfo'])){
				
				$this->afterSaleInfo = $vals['afterSaleInfo'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['brandStoreSn'])){
				
				$this->brandStoreSn = $vals['brandStoreSn'];
			}
			
			
			if (isset($vals['brandStoreName'])){
				
				$this->brandStoreName = $vals['brandStoreName'];
			}
			
			
			if (isset($vals['spuId'])){
				
				$this->spuId = $vals['spuId'];
			}
			
			
			if (isset($vals['goodsFinalPrice'])){
				
				$this->goodsFinalPrice = $vals['goodsFinalPrice'];
			}
			
			
			if (isset($vals['isSubsidyTaskOrder'])){
				
				$this->isSubsidyTaskOrder = $vals['isSubsidyTaskOrder'];
			}
			
			
			if (isset($vals['subsidyTaskOrderStatus'])){
				
				$this->subsidyTaskOrderStatus = $vals['subsidyTaskOrderStatus'];
			}
			
			
			if (isset($vals['subsidyTaskGoodsAward'])){
				
				$this->subsidyTaskGoodsAward = $vals['subsidyTaskGoodsAward'];
			}
			
			
			if (isset($vals['cat1Code'])){
				
				$this->cat1Code = $vals['cat1Code'];
			}
			
			
			if (isset($vals['cat1Name'])){
				
				$this->cat1Name = $vals['cat1Name'];
			}
			
			
			if (isset($vals['cat2Code'])){
				
				$this->cat2Code = $vals['cat2Code'];
			}
			
			
			if (isset($vals['cat2Name'])){
				
				$this->cat2Name = $vals['cat2Name'];
			}
			
			
			if (isset($vals['cat3Code'])){
				
				$this->cat3Code = $vals['cat3Code'];
			}
			
			
			if (isset($vals['cat3Name'])){
				
				$this->cat3Name = $vals['cat3Name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderDetailInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsId);
				
			}
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("goodsThumb" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsThumb);
				
			}
			
			
			
			
			if ("goodsCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsCount); 
				
			}
			
			
			
			
			if ("commissionTotalCost" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commissionTotalCost);
				
			}
			
			
			
			
			if ("commissionRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commissionRate);
				
			}
			
			
			
			
			if ("commission" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commission);
				
			}
			
			
			
			
			if ("commCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commCode);
				
			}
			
			
			
			
			if ("commName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commName);
				
			}
			
			
			
			
			if ("orderSource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSource);
				
			}
			
			
			
			
			if ("afterSaleInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->afterSaleInfo = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\adp\api\open\service\AfterSaleDetailInfo();
						$elem0->read($input);
						
						$this->afterSaleInfo[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeId);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->status); 
				
			}
			
			
			
			
			if ("brandStoreSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandStoreSn);
				
			}
			
			
			
			
			if ("brandStoreName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandStoreName);
				
			}
			
			
			
			
			if ("spuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spuId);
				
			}
			
			
			
			
			if ("goodsFinalPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsFinalPrice);
				
			}
			
			
			
			
			if ("isSubsidyTaskOrder" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isSubsidyTaskOrder);
				
			}
			
			
			
			
			if ("subsidyTaskOrderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->subsidyTaskOrderStatus); 
				
			}
			
			
			
			
			if ("subsidyTaskGoodsAward" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subsidyTaskGoodsAward);
				
			}
			
			
			
			
			if ("cat1Code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cat1Code);
				
			}
			
			
			
			
			if ("cat1Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cat1Name);
				
			}
			
			
			
			
			if ("cat2Code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cat2Code);
				
			}
			
			
			
			
			if ("cat2Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cat2Name);
				
			}
			
			
			
			
			if ("cat3Code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cat3Code);
				
			}
			
			
			
			
			if ("cat3Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cat3Name);
				
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
		
		if($this->goodsId !== null) {
			
			$xfer += $output->writeFieldBegin('goodsId');
			$xfer += $output->writeString($this->goodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsThumb !== null) {
			
			$xfer += $output->writeFieldBegin('goodsThumb');
			$xfer += $output->writeString($this->goodsThumb);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsCount !== null) {
			
			$xfer += $output->writeFieldBegin('goodsCount');
			$xfer += $output->writeI32($this->goodsCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commissionTotalCost !== null) {
			
			$xfer += $output->writeFieldBegin('commissionTotalCost');
			$xfer += $output->writeString($this->commissionTotalCost);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commissionRate !== null) {
			
			$xfer += $output->writeFieldBegin('commissionRate');
			$xfer += $output->writeString($this->commissionRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commission !== null) {
			
			$xfer += $output->writeFieldBegin('commission');
			$xfer += $output->writeString($this->commission);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commCode !== null) {
			
			$xfer += $output->writeFieldBegin('commCode');
			$xfer += $output->writeString($this->commCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commName !== null) {
			
			$xfer += $output->writeFieldBegin('commName');
			$xfer += $output->writeString($this->commName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSource !== null) {
			
			$xfer += $output->writeFieldBegin('orderSource');
			$xfer += $output->writeString($this->orderSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleInfo !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleInfo');
			
			if (!is_array($this->afterSaleInfo)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->afterSaleInfo as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeString($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI16($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandStoreSn !== null) {
			
			$xfer += $output->writeFieldBegin('brandStoreSn');
			$xfer += $output->writeString($this->brandStoreSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandStoreName !== null) {
			
			$xfer += $output->writeFieldBegin('brandStoreName');
			$xfer += $output->writeString($this->brandStoreName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spuId !== null) {
			
			$xfer += $output->writeFieldBegin('spuId');
			$xfer += $output->writeString($this->spuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsFinalPrice !== null) {
			
			$xfer += $output->writeFieldBegin('goodsFinalPrice');
			$xfer += $output->writeString($this->goodsFinalPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isSubsidyTaskOrder');
		$xfer += $output->writeBool($this->isSubsidyTaskOrder);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->subsidyTaskOrderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('subsidyTaskOrderStatus');
			$xfer += $output->writeI32($this->subsidyTaskOrderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subsidyTaskGoodsAward !== null) {
			
			$xfer += $output->writeFieldBegin('subsidyTaskGoodsAward');
			$xfer += $output->writeString($this->subsidyTaskGoodsAward);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cat1Code !== null) {
			
			$xfer += $output->writeFieldBegin('cat1Code');
			$xfer += $output->writeString($this->cat1Code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cat1Name !== null) {
			
			$xfer += $output->writeFieldBegin('cat1Name');
			$xfer += $output->writeString($this->cat1Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cat2Code !== null) {
			
			$xfer += $output->writeFieldBegin('cat2Code');
			$xfer += $output->writeString($this->cat2Code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cat2Name !== null) {
			
			$xfer += $output->writeFieldBegin('cat2Name');
			$xfer += $output->writeString($this->cat2Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cat3Code !== null) {
			
			$xfer += $output->writeFieldBegin('cat3Code');
			$xfer += $output->writeString($this->cat3Code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cat3Name !== null) {
			
			$xfer += $output->writeFieldBegin('cat3Name');
			$xfer += $output->writeString($this->cat3Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>