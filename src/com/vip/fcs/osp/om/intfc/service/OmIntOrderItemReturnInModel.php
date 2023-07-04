<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmIntOrderItemReturnInModel {
	
	static $_TSPEC;
	public $id = null;
	public $globalId = null;
	public $dbNo = null;
	public $sourceName = null;
	public $orderNum = null;
	public $orderReturnApplyId = null;
	public $headerId = null;
	public $lineId = null;
	public $sizeId = null;
	public $vSkuId = null;
	public $goodsId = null;
	public $priceId = null;
	public $priceTime = null;
	public $brandId = null;
	public $itemNo = null;
	public $qty = null;
	public $price = null;
	public $discountPrice = null;
	public $netPrice = null;
	public $returnMessage = null;
	public $packStatus = null;
	public $ourReason = null;
	public $imgReason = null;
	public $packDate = null;
	public $versionNumber = null;
	public $createTime = null;
	public $createdBy = null;
	public $updateTime = null;
	public $updatedBy = null;
	public $requestId = null;
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
	public $productSkuId = null;
	public $returnGoodsId = null;
	
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
			'var' => 'orderNum'
			),
			6 => array(
			'var' => 'orderReturnApplyId'
			),
			7 => array(
			'var' => 'headerId'
			),
			8 => array(
			'var' => 'lineId'
			),
			9 => array(
			'var' => 'sizeId'
			),
			10 => array(
			'var' => 'vSkuId'
			),
			11 => array(
			'var' => 'goodsId'
			),
			12 => array(
			'var' => 'priceId'
			),
			13 => array(
			'var' => 'priceTime'
			),
			14 => array(
			'var' => 'brandId'
			),
			15 => array(
			'var' => 'itemNo'
			),
			16 => array(
			'var' => 'qty'
			),
			17 => array(
			'var' => 'price'
			),
			18 => array(
			'var' => 'discountPrice'
			),
			19 => array(
			'var' => 'netPrice'
			),
			20 => array(
			'var' => 'returnMessage'
			),
			21 => array(
			'var' => 'packStatus'
			),
			22 => array(
			'var' => 'ourReason'
			),
			23 => array(
			'var' => 'imgReason'
			),
			24 => array(
			'var' => 'packDate'
			),
			25 => array(
			'var' => 'versionNumber'
			),
			26 => array(
			'var' => 'createTime'
			),
			27 => array(
			'var' => 'createdBy'
			),
			28 => array(
			'var' => 'updateTime'
			),
			29 => array(
			'var' => 'updatedBy'
			),
			30 => array(
			'var' => 'requestId'
			),
			31 => array(
			'var' => 'attributeCategory'
			),
			32 => array(
			'var' => 'attribute1'
			),
			33 => array(
			'var' => 'attribute2'
			),
			34 => array(
			'var' => 'attribute3'
			),
			35 => array(
			'var' => 'attribute4'
			),
			36 => array(
			'var' => 'attribute5'
			),
			37 => array(
			'var' => 'attribute6'
			),
			38 => array(
			'var' => 'attribute7'
			),
			39 => array(
			'var' => 'attribute8'
			),
			40 => array(
			'var' => 'attribute9'
			),
			41 => array(
			'var' => 'attribute10'
			),
			42 => array(
			'var' => 'isDeleted'
			),
			43 => array(
			'var' => 'productSkuId'
			),
			44 => array(
			'var' => 'returnGoodsId'
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
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['orderReturnApplyId'])){
				
				$this->orderReturnApplyId = $vals['orderReturnApplyId'];
			}
			
			
			if (isset($vals['headerId'])){
				
				$this->headerId = $vals['headerId'];
			}
			
			
			if (isset($vals['lineId'])){
				
				$this->lineId = $vals['lineId'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['priceId'])){
				
				$this->priceId = $vals['priceId'];
			}
			
			
			if (isset($vals['priceTime'])){
				
				$this->priceTime = $vals['priceTime'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['discountPrice'])){
				
				$this->discountPrice = $vals['discountPrice'];
			}
			
			
			if (isset($vals['netPrice'])){
				
				$this->netPrice = $vals['netPrice'];
			}
			
			
			if (isset($vals['returnMessage'])){
				
				$this->returnMessage = $vals['returnMessage'];
			}
			
			
			if (isset($vals['packStatus'])){
				
				$this->packStatus = $vals['packStatus'];
			}
			
			
			if (isset($vals['ourReason'])){
				
				$this->ourReason = $vals['ourReason'];
			}
			
			
			if (isset($vals['imgReason'])){
				
				$this->imgReason = $vals['imgReason'];
			}
			
			
			if (isset($vals['packDate'])){
				
				$this->packDate = $vals['packDate'];
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
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
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
			
			
			if (isset($vals['productSkuId'])){
				
				$this->productSkuId = $vals['productSkuId'];
			}
			
			
			if (isset($vals['returnGoodsId'])){
				
				$this->returnGoodsId = $vals['returnGoodsId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmIntOrderItemReturnInModel';
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
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("orderReturnApplyId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderReturnApplyId);
				
			}
			
			
			
			
			if ("headerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->headerId); 
				
			}
			
			
			
			
			if ("lineId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lineId); 
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizeId); 
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->goodsId); 
				
			}
			
			
			
			
			if ("priceId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceId); 
				
			}
			
			
			
			
			if ("priceTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceTime); 
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->qty);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("discountPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountPrice);
				
			}
			
			
			
			
			if ("netPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->netPrice);
				
			}
			
			
			
			
			if ("returnMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnMessage);
				
			}
			
			
			
			
			if ("packStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packStatus);
				
			}
			
			
			
			
			if ("ourReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ourReason);
				
			}
			
			
			
			
			if ("imgReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imgReason);
				
			}
			
			
			
			
			if ("packDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->packDate); 
				
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
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->requestId); 
				
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
			
			
			
			
			if ("productSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productSkuId);
				
			}
			
			
			
			
			if ("returnGoodsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnGoodsId);
				
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
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderReturnApplyId !== null) {
			
			$xfer += $output->writeFieldBegin('orderReturnApplyId');
			$xfer += $output->writeString($this->orderReturnApplyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerId !== null) {
			
			$xfer += $output->writeFieldBegin('headerId');
			$xfer += $output->writeI64($this->headerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineId !== null) {
			
			$xfer += $output->writeFieldBegin('lineId');
			$xfer += $output->writeI64($this->lineId);
			
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
		
		
		if($this->goodsId !== null) {
			
			$xfer += $output->writeFieldBegin('goodsId');
			$xfer += $output->writeI64($this->goodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceId !== null) {
			
			$xfer += $output->writeFieldBegin('priceId');
			$xfer += $output->writeI64($this->priceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceTime !== null) {
			
			$xfer += $output->writeFieldBegin('priceTime');
			$xfer += $output->writeI64($this->priceTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNo !== null) {
			
			$xfer += $output->writeFieldBegin('itemNo');
			$xfer += $output->writeString($this->itemNo);
			
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
		
		
		if($this->discountPrice !== null) {
			
			$xfer += $output->writeFieldBegin('discountPrice');
			$xfer += $output->writeString($this->discountPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->netPrice !== null) {
			
			$xfer += $output->writeFieldBegin('netPrice');
			$xfer += $output->writeString($this->netPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnMessage !== null) {
			
			$xfer += $output->writeFieldBegin('returnMessage');
			$xfer += $output->writeString($this->returnMessage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packStatus !== null) {
			
			$xfer += $output->writeFieldBegin('packStatus');
			$xfer += $output->writeString($this->packStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ourReason !== null) {
			
			$xfer += $output->writeFieldBegin('ourReason');
			$xfer += $output->writeString($this->ourReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imgReason !== null) {
			
			$xfer += $output->writeFieldBegin('imgReason');
			$xfer += $output->writeString($this->imgReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packDate !== null) {
			
			$xfer += $output->writeFieldBegin('packDate');
			$xfer += $output->writeI64($this->packDate);
			
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
		
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeI64($this->requestId);
			
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
		
		
		if($this->productSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('productSkuId');
			$xfer += $output->writeString($this->productSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnGoodsId !== null) {
			
			$xfer += $output->writeFieldBegin('returnGoodsId');
			$xfer += $output->writeString($this->returnGoodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>