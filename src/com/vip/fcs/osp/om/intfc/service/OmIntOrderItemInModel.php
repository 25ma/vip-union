<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmIntOrderItemInModel {
	
	static $_TSPEC;
	public $id = null;
	public $globalId = null;
	public $dbNo = null;
	public $sourceName = null;
	public $headerId = null;
	public $orderNum = null;
	public $sizeId = null;
	public $qty = null;
	public $price = null;
	public $amount = null;
	public $vSkuId = null;
	public $vSkuVersion = null;
	public $priceId = null;
	public $itemNo = null;
	public $orderGoodsExtFlags = null;
	public $goodsType = null;
	public $brandId = null;
	public $pricetime = null;
	public $deliverTime = null;
	public $versionNumber = null;
	public $createTime = null;
	public $createdBy = null;
	public $updateTime = null;
	public $updatedBy = null;
	public $attributeCategory = null;
	public $attribute1 = null;
	public $attribute2 = null;
	public $attribute3 = null;
	public $attribute4 = null;
	public $attribute5 = null;
	public $attribute6 = null;
	public $attribute7 = null;
	public $attribute8 = null;
	public $attribute9 = null;
	public $attribute10 = null;
	public $isDeleted = null;
	public $favPrice = null;
	public $productSkuId = null;
	public $scheduledInfoList = null;
	public $lineId = null;
	public $singleGoodsCommodityTax = null;
	public $subExtOrderSn = null;
	public $yardNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'globalId'
			),
			3 => array(
			'var' => 'dbNo'
			),
			4 => array(
			'var' => 'sourceName'
			),
			5 => array(
			'var' => 'headerId'
			),
			6 => array(
			'var' => 'orderNum'
			),
			7 => array(
			'var' => 'sizeId'
			),
			8 => array(
			'var' => 'qty'
			),
			9 => array(
			'var' => 'price'
			),
			10 => array(
			'var' => 'amount'
			),
			11 => array(
			'var' => 'vSkuId'
			),
			12 => array(
			'var' => 'vSkuVersion'
			),
			13 => array(
			'var' => 'priceId'
			),
			14 => array(
			'var' => 'itemNo'
			),
			15 => array(
			'var' => 'orderGoodsExtFlags'
			),
			16 => array(
			'var' => 'goodsType'
			),
			17 => array(
			'var' => 'brandId'
			),
			18 => array(
			'var' => 'pricetime'
			),
			19 => array(
			'var' => 'deliverTime'
			),
			20 => array(
			'var' => 'versionNumber'
			),
			21 => array(
			'var' => 'createTime'
			),
			22 => array(
			'var' => 'createdBy'
			),
			23 => array(
			'var' => 'updateTime'
			),
			24 => array(
			'var' => 'updatedBy'
			),
			25 => array(
			'var' => 'attributeCategory'
			),
			26 => array(
			'var' => 'attribute1'
			),
			27 => array(
			'var' => 'attribute2'
			),
			28 => array(
			'var' => 'attribute3'
			),
			29 => array(
			'var' => 'attribute4'
			),
			30 => array(
			'var' => 'attribute5'
			),
			31 => array(
			'var' => 'attribute6'
			),
			32 => array(
			'var' => 'attribute7'
			),
			33 => array(
			'var' => 'attribute8'
			),
			34 => array(
			'var' => 'attribute9'
			),
			35 => array(
			'var' => 'attribute10'
			),
			36 => array(
			'var' => 'isDeleted'
			),
			37 => array(
			'var' => 'favPrice'
			),
			38 => array(
			'var' => 'productSkuId'
			),
			39 => array(
			'var' => 'scheduledInfoList'
			),
			40 => array(
			'var' => 'lineId'
			),
			41 => array(
			'var' => 'singleGoodsCommodityTax'
			),
			42 => array(
			'var' => 'subExtOrderSn'
			),
			43 => array(
			'var' => 'yardNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['globalId'])){
				
				$this->globalId = $vals['globalId'];
			}
			
			
			if (isset($vals['dbNo'])){
				
				$this->dbNo = $vals['dbNo'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
			if (isset($vals['headerId'])){
				
				$this->headerId = $vals['headerId'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['vSkuVersion'])){
				
				$this->vSkuVersion = $vals['vSkuVersion'];
			}
			
			
			if (isset($vals['priceId'])){
				
				$this->priceId = $vals['priceId'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['orderGoodsExtFlags'])){
				
				$this->orderGoodsExtFlags = $vals['orderGoodsExtFlags'];
			}
			
			
			if (isset($vals['goodsType'])){
				
				$this->goodsType = $vals['goodsType'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['pricetime'])){
				
				$this->pricetime = $vals['pricetime'];
			}
			
			
			if (isset($vals['deliverTime'])){
				
				$this->deliverTime = $vals['deliverTime'];
			}
			
			
			if (isset($vals['versionNumber'])){
				
				$this->versionNumber = $vals['versionNumber'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['updatedBy'])){
				
				$this->updatedBy = $vals['updatedBy'];
			}
			
			
			if (isset($vals['attributeCategory'])){
				
				$this->attributeCategory = $vals['attributeCategory'];
			}
			
			
			if (isset($vals['attribute1'])){
				
				$this->attribute1 = $vals['attribute1'];
			}
			
			
			if (isset($vals['attribute2'])){
				
				$this->attribute2 = $vals['attribute2'];
			}
			
			
			if (isset($vals['attribute3'])){
				
				$this->attribute3 = $vals['attribute3'];
			}
			
			
			if (isset($vals['attribute4'])){
				
				$this->attribute4 = $vals['attribute4'];
			}
			
			
			if (isset($vals['attribute5'])){
				
				$this->attribute5 = $vals['attribute5'];
			}
			
			
			if (isset($vals['attribute6'])){
				
				$this->attribute6 = $vals['attribute6'];
			}
			
			
			if (isset($vals['attribute7'])){
				
				$this->attribute7 = $vals['attribute7'];
			}
			
			
			if (isset($vals['attribute8'])){
				
				$this->attribute8 = $vals['attribute8'];
			}
			
			
			if (isset($vals['attribute9'])){
				
				$this->attribute9 = $vals['attribute9'];
			}
			
			
			if (isset($vals['attribute10'])){
				
				$this->attribute10 = $vals['attribute10'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['favPrice'])){
				
				$this->favPrice = $vals['favPrice'];
			}
			
			
			if (isset($vals['productSkuId'])){
				
				$this->productSkuId = $vals['productSkuId'];
			}
			
			
			if (isset($vals['scheduledInfoList'])){
				
				$this->scheduledInfoList = $vals['scheduledInfoList'];
			}
			
			
			if (isset($vals['lineId'])){
				
				$this->lineId = $vals['lineId'];
			}
			
			
			if (isset($vals['singleGoodsCommodityTax'])){
				
				$this->singleGoodsCommodityTax = $vals['singleGoodsCommodityTax'];
			}
			
			
			if (isset($vals['subExtOrderSn'])){
				
				$this->subExtOrderSn = $vals['subExtOrderSn'];
			}
			
			
			if (isset($vals['yardNoList'])){
				
				$this->yardNoList = $vals['yardNoList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmIntOrderItemInModel';
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
			
			
			
			
			if ("globalId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->globalId); 
				
			}
			
			
			
			
			if ("dbNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dbNo);
				
			}
			
			
			
			
			if ("sourceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceName);
				
			}
			
			
			
			
			if ("headerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->headerId); 
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizeId); 
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->qty);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("vSkuVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuVersion); 
				
			}
			
			
			
			
			if ("priceId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceId); 
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("orderGoodsExtFlags" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderGoodsExtFlags);
				
			}
			
			
			
			
			if ("goodsType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsType);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("pricetime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->pricetime); 
				
			}
			
			
			
			
			if ("deliverTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->deliverTime); 
				
			}
			
			
			
			
			if ("versionNumber" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->versionNumber); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdBy);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("updatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedBy);
				
			}
			
			
			
			
			if ("attributeCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attributeCategory);
				
			}
			
			
			
			
			if ("attribute1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute1);
				
			}
			
			
			
			
			if ("attribute2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute2);
				
			}
			
			
			
			
			if ("attribute3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute3);
				
			}
			
			
			
			
			if ("attribute4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute4);
				
			}
			
			
			
			
			if ("attribute5" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute5);
				
			}
			
			
			
			
			if ("attribute6" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute6);
				
			}
			
			
			
			
			if ("attribute7" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute7);
				
			}
			
			
			
			
			if ("attribute8" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute8);
				
			}
			
			
			
			
			if ("attribute9" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute9);
				
			}
			
			
			
			
			if ("attribute10" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute10);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->isDeleted); 
				
			}
			
			
			
			
			if ("favPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->favPrice);
				
			}
			
			
			
			
			if ("productSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productSkuId);
				
			}
			
			
			
			
			if ("scheduledInfoList" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduledInfoList);
				
			}
			
			
			
			
			if ("lineId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lineId); 
				
			}
			
			
			
			
			if ("singleGoodsCommodityTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->singleGoodsCommodityTax);
				
			}
			
			
			
			
			if ("subExtOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subExtOrderSn);
				
			}
			
			
			
			
			if ("yardNoList" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->yardNoList);
				
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
		
		
		if($this->globalId !== null) {
			
			$xfer += $output->writeFieldBegin('globalId');
			$xfer += $output->writeI64($this->globalId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dbNo !== null) {
			
			$xfer += $output->writeFieldBegin('dbNo');
			$xfer += $output->writeString($this->dbNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceName !== null) {
			
			$xfer += $output->writeFieldBegin('sourceName');
			$xfer += $output->writeString($this->sourceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerId !== null) {
			
			$xfer += $output->writeFieldBegin('headerId');
			$xfer += $output->writeI64($this->headerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeI64($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeString($this->qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeString($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeI64($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuVersion !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuVersion');
			$xfer += $output->writeI64($this->vSkuVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceId !== null) {
			
			$xfer += $output->writeFieldBegin('priceId');
			$xfer += $output->writeI64($this->priceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNo !== null) {
			
			$xfer += $output->writeFieldBegin('itemNo');
			$xfer += $output->writeString($this->itemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderGoodsExtFlags !== null) {
			
			$xfer += $output->writeFieldBegin('orderGoodsExtFlags');
			$xfer += $output->writeString($this->orderGoodsExtFlags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsType !== null) {
			
			$xfer += $output->writeFieldBegin('goodsType');
			$xfer += $output->writeString($this->goodsType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pricetime !== null) {
			
			$xfer += $output->writeFieldBegin('pricetime');
			$xfer += $output->writeI64($this->pricetime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliverTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliverTime');
			$xfer += $output->writeI64($this->deliverTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->versionNumber !== null) {
			
			$xfer += $output->writeFieldBegin('versionNumber');
			$xfer += $output->writeI64($this->versionNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdBy !== null) {
			
			$xfer += $output->writeFieldBegin('createdBy');
			$xfer += $output->writeString($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('updatedBy');
			$xfer += $output->writeString($this->updatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributeCategory !== null) {
			
			$xfer += $output->writeFieldBegin('attributeCategory');
			$xfer += $output->writeString($this->attributeCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute1 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute1');
			$xfer += $output->writeString($this->attribute1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute2 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute2');
			$xfer += $output->writeString($this->attribute2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute3 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute3');
			$xfer += $output->writeString($this->attribute3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute4 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute4');
			$xfer += $output->writeString($this->attribute4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute5 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute5');
			$xfer += $output->writeString($this->attribute5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute6 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute6');
			$xfer += $output->writeString($this->attribute6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute7 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute7');
			$xfer += $output->writeString($this->attribute7);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute8 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute8');
			$xfer += $output->writeString($this->attribute8);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute9 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute9');
			$xfer += $output->writeString($this->attribute9);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute10 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute10');
			$xfer += $output->writeString($this->attribute10);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeI64($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favPrice !== null) {
			
			$xfer += $output->writeFieldBegin('favPrice');
			$xfer += $output->writeString($this->favPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('productSkuId');
			$xfer += $output->writeString($this->productSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduledInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('scheduledInfoList');
			$xfer += $output->writeString($this->scheduledInfoList);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineId !== null) {
			
			$xfer += $output->writeFieldBegin('lineId');
			$xfer += $output->writeI64($this->lineId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->singleGoodsCommodityTax !== null) {
			
			$xfer += $output->writeFieldBegin('singleGoodsCommodityTax');
			$xfer += $output->writeString($this->singleGoodsCommodityTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subExtOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subExtOrderSn');
			$xfer += $output->writeString($this->subExtOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->yardNoList !== null) {
			
			$xfer += $output->writeFieldBegin('yardNoList');
			$xfer += $output->writeString($this->yardNoList);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>