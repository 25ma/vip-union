<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class GoodsItem {
	
	static $_TSPEC;
	public $orderSn = null;
	public $goodsId = null;
	public $pdcBarCode = null;
	public $sizeId = null;
	public $vSkuId = null;
	public $barcode = null;
	public $name = null;
	public $size = null;
	public $amount = null;
	public $unit = null;
	public $price = null;
	public $priceId = null;
	public $goodsVersion = null;
	public $goodsPic = null;
	public $tradeMarkSn = null;
	public $tradeMarkName = null;
	public $brandId = null;
	public $brandName = null;
	public $warehouse = null;
	public $isGift = null;
	public $goodsLineMoney = null;
	public $shoppingGuider = null;
	public $posNo = null;
	public $exAllSubtotal = null;
	public $exActSubtotal = null;
	public $exPaySubtotal = null;
	public $exCouponSubtotal = null;
	public $goodsRemark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'goodsId'
			),
			3 => array(
			'var' => 'pdcBarCode'
			),
			4 => array(
			'var' => 'sizeId'
			),
			5 => array(
			'var' => 'vSkuId'
			),
			6 => array(
			'var' => 'barcode'
			),
			7 => array(
			'var' => 'name'
			),
			8 => array(
			'var' => 'size'
			),
			9 => array(
			'var' => 'amount'
			),
			10 => array(
			'var' => 'unit'
			),
			11 => array(
			'var' => 'price'
			),
			12 => array(
			'var' => 'priceId'
			),
			13 => array(
			'var' => 'goodsVersion'
			),
			14 => array(
			'var' => 'goodsPic'
			),
			15 => array(
			'var' => 'tradeMarkSn'
			),
			16 => array(
			'var' => 'tradeMarkName'
			),
			17 => array(
			'var' => 'brandId'
			),
			18 => array(
			'var' => 'brandName'
			),
			19 => array(
			'var' => 'warehouse'
			),
			20 => array(
			'var' => 'isGift'
			),
			21 => array(
			'var' => 'goodsLineMoney'
			),
			22 => array(
			'var' => 'shoppingGuider'
			),
			23 => array(
			'var' => 'posNo'
			),
			24 => array(
			'var' => 'exAllSubtotal'
			),
			25 => array(
			'var' => 'exActSubtotal'
			),
			26 => array(
			'var' => 'exPaySubtotal'
			),
			27 => array(
			'var' => 'exCouponSubtotal'
			),
			28 => array(
			'var' => 'goodsRemark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['pdcBarCode'])){
				
				$this->pdcBarCode = $vals['pdcBarCode'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['priceId'])){
				
				$this->priceId = $vals['priceId'];
			}
			
			
			if (isset($vals['goodsVersion'])){
				
				$this->goodsVersion = $vals['goodsVersion'];
			}
			
			
			if (isset($vals['goodsPic'])){
				
				$this->goodsPic = $vals['goodsPic'];
			}
			
			
			if (isset($vals['tradeMarkSn'])){
				
				$this->tradeMarkSn = $vals['tradeMarkSn'];
			}
			
			
			if (isset($vals['tradeMarkName'])){
				
				$this->tradeMarkName = $vals['tradeMarkName'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['isGift'])){
				
				$this->isGift = $vals['isGift'];
			}
			
			
			if (isset($vals['goodsLineMoney'])){
				
				$this->goodsLineMoney = $vals['goodsLineMoney'];
			}
			
			
			if (isset($vals['shoppingGuider'])){
				
				$this->shoppingGuider = $vals['shoppingGuider'];
			}
			
			
			if (isset($vals['posNo'])){
				
				$this->posNo = $vals['posNo'];
			}
			
			
			if (isset($vals['exAllSubtotal'])){
				
				$this->exAllSubtotal = $vals['exAllSubtotal'];
			}
			
			
			if (isset($vals['exActSubtotal'])){
				
				$this->exActSubtotal = $vals['exActSubtotal'];
			}
			
			
			if (isset($vals['exPaySubtotal'])){
				
				$this->exPaySubtotal = $vals['exPaySubtotal'];
			}
			
			
			if (isset($vals['exCouponSubtotal'])){
				
				$this->exCouponSubtotal = $vals['exCouponSubtotal'];
			}
			
			
			if (isset($vals['goodsRemark'])){
				
				$this->goodsRemark = $vals['goodsRemark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodsItem';
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
			
			
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsId);
				
			}
			
			
			
			
			if ("pdcBarCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdcBarCode);
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizeId); 
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("priceId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceId); 
				
			}
			
			
			
			
			if ("goodsVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsVersion); 
				
			}
			
			
			
			
			if ("goodsPic" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsPic);
				
			}
			
			
			
			
			if ("tradeMarkSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tradeMarkSn);
				
			}
			
			
			
			
			if ("tradeMarkName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tradeMarkName);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brandId); 
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("isGift" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isGift);
				
			}
			
			
			
			
			if ("goodsLineMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsLineMoney);
				
			}
			
			
			
			
			if ("shoppingGuider" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shoppingGuider);
				
			}
			
			
			
			
			if ("posNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posNo);
				
			}
			
			
			
			
			if ("exAllSubtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exAllSubtotal);
				
			}
			
			
			
			
			if ("exActSubtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exActSubtotal);
				
			}
			
			
			
			
			if ("exPaySubtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exPaySubtotal);
				
			}
			
			
			
			
			if ("exCouponSubtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exCouponSubtotal);
				
			}
			
			
			
			
			if ("goodsRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsRemark);
				
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
		
		
		if($this->goodsId !== null) {
			
			$xfer += $output->writeFieldBegin('goodsId');
			$xfer += $output->writeString($this->goodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pdcBarCode !== null) {
			
			$xfer += $output->writeFieldBegin('pdcBarCode');
			$xfer += $output->writeString($this->pdcBarCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeI64($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeI64($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceId !== null) {
			
			$xfer += $output->writeFieldBegin('priceId');
			$xfer += $output->writeI64($this->priceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsVersion !== null) {
			
			$xfer += $output->writeFieldBegin('goodsVersion');
			$xfer += $output->writeI32($this->goodsVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsPic !== null) {
			
			$xfer += $output->writeFieldBegin('goodsPic');
			$xfer += $output->writeString($this->goodsPic);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tradeMarkSn !== null) {
			
			$xfer += $output->writeFieldBegin('tradeMarkSn');
			$xfer += $output->writeString($this->tradeMarkSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tradeMarkName !== null) {
			
			$xfer += $output->writeFieldBegin('tradeMarkName');
			$xfer += $output->writeString($this->tradeMarkName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI32($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isGift !== null) {
			
			$xfer += $output->writeFieldBegin('isGift');
			$xfer += $output->writeString($this->isGift);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsLineMoney !== null) {
			
			$xfer += $output->writeFieldBegin('goodsLineMoney');
			$xfer += $output->writeString($this->goodsLineMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shoppingGuider !== null) {
			
			$xfer += $output->writeFieldBegin('shoppingGuider');
			$xfer += $output->writeString($this->shoppingGuider);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->posNo !== null) {
			
			$xfer += $output->writeFieldBegin('posNo');
			$xfer += $output->writeString($this->posNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exAllSubtotal !== null) {
			
			$xfer += $output->writeFieldBegin('exAllSubtotal');
			$xfer += $output->writeString($this->exAllSubtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exActSubtotal !== null) {
			
			$xfer += $output->writeFieldBegin('exActSubtotal');
			$xfer += $output->writeString($this->exActSubtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exPaySubtotal !== null) {
			
			$xfer += $output->writeFieldBegin('exPaySubtotal');
			$xfer += $output->writeString($this->exPaySubtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exCouponSubtotal !== null) {
			
			$xfer += $output->writeFieldBegin('exCouponSubtotal');
			$xfer += $output->writeString($this->exCouponSubtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsRemark !== null) {
			
			$xfer += $output->writeFieldBegin('goodsRemark');
			$xfer += $output->writeString($this->goodsRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>