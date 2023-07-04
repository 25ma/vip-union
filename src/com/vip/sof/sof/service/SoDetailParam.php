<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class SoDetailParam {
	
	static $_TSPEC;
	public $stat = null;
	public $orderSn = null;
	public $edbPopOrderInfoId = null;
	public $po = null;
	public $barcode = null;
	public $goodName = null;
	public $goodNo = null;
	public $size = null;
	public $brandId = null;
	public $brandName = null;
	public $amount = null;
	public $price = null;
	public $isGift = null;
	public $unit = null;
	public $isVip = null;
	public $goodsPic = null;
	public $vendorCode = null;
	public $vendorId = null;
	public $vendorName = null;
	public $fetchAddress = null;
	public $customizedInfo = null;
	public $warehouse = null;
	public $goodsRemark = null;
	public $orderId = null;
	public $storeId = null;
	public $storeSource = null;
	public $posNo = null;
	public $vSkuId = null;
	public $goodsVersion = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'stat'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'edbPopOrderInfoId'
			),
			4 => array(
			'var' => 'po'
			),
			5 => array(
			'var' => 'barcode'
			),
			6 => array(
			'var' => 'goodName'
			),
			7 => array(
			'var' => 'goodNo'
			),
			8 => array(
			'var' => 'size'
			),
			9 => array(
			'var' => 'brandId'
			),
			10 => array(
			'var' => 'brandName'
			),
			11 => array(
			'var' => 'amount'
			),
			12 => array(
			'var' => 'price'
			),
			13 => array(
			'var' => 'isGift'
			),
			14 => array(
			'var' => 'unit'
			),
			15 => array(
			'var' => 'isVip'
			),
			16 => array(
			'var' => 'goodsPic'
			),
			17 => array(
			'var' => 'vendorCode'
			),
			18 => array(
			'var' => 'vendorId'
			),
			19 => array(
			'var' => 'vendorName'
			),
			20 => array(
			'var' => 'fetchAddress'
			),
			21 => array(
			'var' => 'customizedInfo'
			),
			22 => array(
			'var' => 'warehouse'
			),
			23 => array(
			'var' => 'goodsRemark'
			),
			24 => array(
			'var' => 'orderId'
			),
			25 => array(
			'var' => 'storeId'
			),
			26 => array(
			'var' => 'storeSource'
			),
			27 => array(
			'var' => 'posNo'
			),
			28 => array(
			'var' => 'vSkuId'
			),
			29 => array(
			'var' => 'goodsVersion'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['edbPopOrderInfoId'])){
				
				$this->edbPopOrderInfoId = $vals['edbPopOrderInfoId'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['goodName'])){
				
				$this->goodName = $vals['goodName'];
			}
			
			
			if (isset($vals['goodNo'])){
				
				$this->goodNo = $vals['goodNo'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['isGift'])){
				
				$this->isGift = $vals['isGift'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['isVip'])){
				
				$this->isVip = $vals['isVip'];
			}
			
			
			if (isset($vals['goodsPic'])){
				
				$this->goodsPic = $vals['goodsPic'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['fetchAddress'])){
				
				$this->fetchAddress = $vals['fetchAddress'];
			}
			
			
			if (isset($vals['customizedInfo'])){
				
				$this->customizedInfo = $vals['customizedInfo'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['goodsRemark'])){
				
				$this->goodsRemark = $vals['goodsRemark'];
			}
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['posNo'])){
				
				$this->posNo = $vals['posNo'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['goodsVersion'])){
				
				$this->goodsVersion = $vals['goodsVersion'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SoDetailParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stat);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("edbPopOrderInfoId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->edbPopOrderInfoId); 
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("goodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodName);
				
			}
			
			
			
			
			if ("goodNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodNo);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("isGift" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isGift);
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("isVip" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isVip); 
				
			}
			
			
			
			
			if ("goodsPic" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsPic);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("fetchAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fetchAddress);
				
			}
			
			
			
			
			if ("customizedInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customizedInfo);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("goodsRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsRemark);
				
			}
			
			
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderId); 
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->storeSource); 
				
			}
			
			
			
			
			if ("posNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posNo);
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("goodsVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsVersion); 
				
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
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeString($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->edbPopOrderInfoId !== null) {
			
			$xfer += $output->writeFieldBegin('edbPopOrderInfoId');
			$xfer += $output->writeI32($this->edbPopOrderInfoId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodName !== null) {
			
			$xfer += $output->writeFieldBegin('goodName');
			$xfer += $output->writeString($this->goodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodNo');
			$xfer += $output->writeString($this->goodNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isGift !== null) {
			
			$xfer += $output->writeFieldBegin('isGift');
			$xfer += $output->writeString($this->isGift);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isVip !== null) {
			
			$xfer += $output->writeFieldBegin('isVip');
			$xfer += $output->writeI32($this->isVip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsPic !== null) {
			
			$xfer += $output->writeFieldBegin('goodsPic');
			$xfer += $output->writeString($this->goodsPic);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI32($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fetchAddress !== null) {
			
			$xfer += $output->writeFieldBegin('fetchAddress');
			$xfer += $output->writeString($this->fetchAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customizedInfo !== null) {
			
			$xfer += $output->writeFieldBegin('customizedInfo');
			$xfer += $output->writeString($this->customizedInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsRemark !== null) {
			
			$xfer += $output->writeFieldBegin('goodsRemark');
			$xfer += $output->writeString($this->goodsRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeI64($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSource !== null) {
			
			$xfer += $output->writeFieldBegin('storeSource');
			$xfer += $output->writeI32($this->storeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->posNo !== null) {
			
			$xfer += $output->writeFieldBegin('posNo');
			$xfer += $output->writeString($this->posNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeI64($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsVersion !== null) {
			
			$xfer += $output->writeFieldBegin('goodsVersion');
			$xfer += $output->writeI32($this->goodsVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>