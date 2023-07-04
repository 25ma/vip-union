<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class BaseBillAndDisCountExtSource {
	
	static $_TSPEC;
	public $dbNo = null;
	public $itemSize = null;
	public $vendorGoodsNo = null;
	public $poDeliveryType = null;
	public $priceTime = null;
	public $extOrderNum = null;
	public $deliveryWarehouseCode = null;
	public $deliveryWarehouseName = null;
	public $claimType = null;
	public $applyQuantity = null;
	public $actualQuantity = null;
	public $workNo = null;
	public $workSolvedTime = null;
	public $errorItemNo = null;
	public $judgedBy = null;
	public $extBillTaxPrice = null;
	public $extSumFavPrice = null;
	public $extSumVendorFavPrice = null;
	public $extBasePrice = null;
	public $extPoDeliveryTypeName = null;
	public $extGrossMarginRate = null;
	public $extWarehouseExt = null;
	public $specialOrderCategory = null;
	public $specialScheduleId = null;
	public $specialRelatedOrder = null;
	public $extendField = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			501 => array(
			'var' => 'dbNo'
			),
			502 => array(
			'var' => 'itemSize'
			),
			503 => array(
			'var' => 'vendorGoodsNo'
			),
			504 => array(
			'var' => 'poDeliveryType'
			),
			505 => array(
			'var' => 'priceTime'
			),
			506 => array(
			'var' => 'extOrderNum'
			),
			507 => array(
			'var' => 'deliveryWarehouseCode'
			),
			508 => array(
			'var' => 'deliveryWarehouseName'
			),
			509 => array(
			'var' => 'claimType'
			),
			510 => array(
			'var' => 'applyQuantity'
			),
			511 => array(
			'var' => 'actualQuantity'
			),
			512 => array(
			'var' => 'workNo'
			),
			513 => array(
			'var' => 'workSolvedTime'
			),
			514 => array(
			'var' => 'errorItemNo'
			),
			515 => array(
			'var' => 'judgedBy'
			),
			516 => array(
			'var' => 'extBillTaxPrice'
			),
			517 => array(
			'var' => 'extSumFavPrice'
			),
			518 => array(
			'var' => 'extSumVendorFavPrice'
			),
			519 => array(
			'var' => 'extBasePrice'
			),
			520 => array(
			'var' => 'extPoDeliveryTypeName'
			),
			521 => array(
			'var' => 'extGrossMarginRate'
			),
			522 => array(
			'var' => 'extWarehouseExt'
			),
			523 => array(
			'var' => 'specialOrderCategory'
			),
			524 => array(
			'var' => 'specialScheduleId'
			),
			525 => array(
			'var' => 'specialRelatedOrder'
			),
			526 => array(
			'var' => 'extendField'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['dbNo'])){
				
				$this->dbNo = $vals['dbNo'];
			}
			
			
			if (isset($vals['itemSize'])){
				
				$this->itemSize = $vals['itemSize'];
			}
			
			
			if (isset($vals['vendorGoodsNo'])){
				
				$this->vendorGoodsNo = $vals['vendorGoodsNo'];
			}
			
			
			if (isset($vals['poDeliveryType'])){
				
				$this->poDeliveryType = $vals['poDeliveryType'];
			}
			
			
			if (isset($vals['priceTime'])){
				
				$this->priceTime = $vals['priceTime'];
			}
			
			
			if (isset($vals['extOrderNum'])){
				
				$this->extOrderNum = $vals['extOrderNum'];
			}
			
			
			if (isset($vals['deliveryWarehouseCode'])){
				
				$this->deliveryWarehouseCode = $vals['deliveryWarehouseCode'];
			}
			
			
			if (isset($vals['deliveryWarehouseName'])){
				
				$this->deliveryWarehouseName = $vals['deliveryWarehouseName'];
			}
			
			
			if (isset($vals['claimType'])){
				
				$this->claimType = $vals['claimType'];
			}
			
			
			if (isset($vals['applyQuantity'])){
				
				$this->applyQuantity = $vals['applyQuantity'];
			}
			
			
			if (isset($vals['actualQuantity'])){
				
				$this->actualQuantity = $vals['actualQuantity'];
			}
			
			
			if (isset($vals['workNo'])){
				
				$this->workNo = $vals['workNo'];
			}
			
			
			if (isset($vals['workSolvedTime'])){
				
				$this->workSolvedTime = $vals['workSolvedTime'];
			}
			
			
			if (isset($vals['errorItemNo'])){
				
				$this->errorItemNo = $vals['errorItemNo'];
			}
			
			
			if (isset($vals['judgedBy'])){
				
				$this->judgedBy = $vals['judgedBy'];
			}
			
			
			if (isset($vals['extBillTaxPrice'])){
				
				$this->extBillTaxPrice = $vals['extBillTaxPrice'];
			}
			
			
			if (isset($vals['extSumFavPrice'])){
				
				$this->extSumFavPrice = $vals['extSumFavPrice'];
			}
			
			
			if (isset($vals['extSumVendorFavPrice'])){
				
				$this->extSumVendorFavPrice = $vals['extSumVendorFavPrice'];
			}
			
			
			if (isset($vals['extBasePrice'])){
				
				$this->extBasePrice = $vals['extBasePrice'];
			}
			
			
			if (isset($vals['extPoDeliveryTypeName'])){
				
				$this->extPoDeliveryTypeName = $vals['extPoDeliveryTypeName'];
			}
			
			
			if (isset($vals['extGrossMarginRate'])){
				
				$this->extGrossMarginRate = $vals['extGrossMarginRate'];
			}
			
			
			if (isset($vals['extWarehouseExt'])){
				
				$this->extWarehouseExt = $vals['extWarehouseExt'];
			}
			
			
			if (isset($vals['specialOrderCategory'])){
				
				$this->specialOrderCategory = $vals['specialOrderCategory'];
			}
			
			
			if (isset($vals['specialScheduleId'])){
				
				$this->specialScheduleId = $vals['specialScheduleId'];
			}
			
			
			if (isset($vals['specialRelatedOrder'])){
				
				$this->specialRelatedOrder = $vals['specialRelatedOrder'];
			}
			
			
			if (isset($vals['extendField'])){
				
				$this->extendField = $vals['extendField'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BaseBillAndDisCountExtSource';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("dbNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dbNo);
				
			}
			
			
			
			
			if ("itemSize" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemSize);
				
			}
			
			
			
			
			if ("vendorGoodsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorGoodsNo);
				
			}
			
			
			
			
			if ("poDeliveryType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poDeliveryType);
				
			}
			
			
			
			
			if ("priceTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceTime);
				
			}
			
			
			
			
			if ("extOrderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extOrderNum);
				
			}
			
			
			
			
			if ("deliveryWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouseCode);
				
			}
			
			
			
			
			if ("deliveryWarehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouseName);
				
			}
			
			
			
			
			if ("claimType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->claimType);
				
			}
			
			
			
			
			if ("applyQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->applyQuantity);
				
			}
			
			
			
			
			if ("actualQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actualQuantity);
				
			}
			
			
			
			
			if ("workNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->workNo);
				
			}
			
			
			
			
			if ("workSolvedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->workSolvedTime);
				
			}
			
			
			
			
			if ("errorItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorItemNo);
				
			}
			
			
			
			
			if ("judgedBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->judgedBy);
				
			}
			
			
			
			
			if ("extBillTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extBillTaxPrice);
				
			}
			
			
			
			
			if ("extSumFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extSumFavPrice);
				
			}
			
			
			
			
			if ("extSumVendorFavPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extSumVendorFavPrice);
				
			}
			
			
			
			
			if ("extBasePrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extBasePrice);
				
			}
			
			
			
			
			if ("extPoDeliveryTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extPoDeliveryTypeName);
				
			}
			
			
			
			
			if ("extGrossMarginRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->extGrossMarginRate);
				
			}
			
			
			
			
			if ("extWarehouseExt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extWarehouseExt);
				
			}
			
			
			
			
			if ("specialOrderCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialOrderCategory);
				
			}
			
			
			
			
			if ("specialScheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialScheduleId);
				
			}
			
			
			
			
			if ("specialRelatedOrder" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialRelatedOrder);
				
			}
			
			
			
			
			if ("extendField" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extendField);
				
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
		
		if($this->dbNo !== null) {
			
			$xfer += $output->writeFieldBegin('dbNo');
			$xfer += $output->writeString($this->dbNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemSize !== null) {
			
			$xfer += $output->writeFieldBegin('itemSize');
			$xfer += $output->writeString($this->itemSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorGoodsNo !== null) {
			
			$xfer += $output->writeFieldBegin('vendorGoodsNo');
			$xfer += $output->writeString($this->vendorGoodsNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poDeliveryType !== null) {
			
			$xfer += $output->writeFieldBegin('poDeliveryType');
			$xfer += $output->writeString($this->poDeliveryType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceTime !== null) {
			
			$xfer += $output->writeFieldBegin('priceTime');
			$xfer += $output->writeI64($this->priceTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extOrderNum !== null) {
			
			$xfer += $output->writeFieldBegin('extOrderNum');
			$xfer += $output->writeString($this->extOrderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryWarehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryWarehouseCode');
			$xfer += $output->writeString($this->deliveryWarehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryWarehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryWarehouseName');
			$xfer += $output->writeString($this->deliveryWarehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->claimType !== null) {
			
			$xfer += $output->writeFieldBegin('claimType');
			$xfer += $output->writeString($this->claimType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('applyQuantity');
			$xfer += $output->writeDouble($this->applyQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('actualQuantity');
			$xfer += $output->writeDouble($this->actualQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workNo !== null) {
			
			$xfer += $output->writeFieldBegin('workNo');
			$xfer += $output->writeString($this->workNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workSolvedTime !== null) {
			
			$xfer += $output->writeFieldBegin('workSolvedTime');
			$xfer += $output->writeI64($this->workSolvedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('errorItemNo');
			$xfer += $output->writeString($this->errorItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->judgedBy !== null) {
			
			$xfer += $output->writeFieldBegin('judgedBy');
			$xfer += $output->writeString($this->judgedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extBillTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extBillTaxPrice');
			$xfer += $output->writeDouble($this->extBillTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extSumFavPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extSumFavPrice');
			$xfer += $output->writeDouble($this->extSumFavPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extSumVendorFavPrice !== null) {
			
			$xfer += $output->writeFieldBegin('extSumVendorFavPrice');
			$xfer += $output->writeDouble($this->extSumVendorFavPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extBasePrice !== null) {
			
			$xfer += $output->writeFieldBegin('extBasePrice');
			$xfer += $output->writeDouble($this->extBasePrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extPoDeliveryTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('extPoDeliveryTypeName');
			$xfer += $output->writeString($this->extPoDeliveryTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extGrossMarginRate !== null) {
			
			$xfer += $output->writeFieldBegin('extGrossMarginRate');
			$xfer += $output->writeDouble($this->extGrossMarginRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extWarehouseExt !== null) {
			
			$xfer += $output->writeFieldBegin('extWarehouseExt');
			$xfer += $output->writeString($this->extWarehouseExt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialOrderCategory !== null) {
			
			$xfer += $output->writeFieldBegin('specialOrderCategory');
			$xfer += $output->writeString($this->specialOrderCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialScheduleId !== null) {
			
			$xfer += $output->writeFieldBegin('specialScheduleId');
			$xfer += $output->writeString($this->specialScheduleId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialRelatedOrder !== null) {
			
			$xfer += $output->writeFieldBegin('specialRelatedOrder');
			$xfer += $output->writeString($this->specialRelatedOrder);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extendField !== null) {
			
			$xfer += $output->writeFieldBegin('extendField');
			$xfer += $output->writeString($this->extendField);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>