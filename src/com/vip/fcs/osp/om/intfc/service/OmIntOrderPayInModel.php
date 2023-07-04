<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmIntOrderPayInModel {
	
	static $_TSPEC;
	public $id = null;
	public $globalId = null;
	public $dbNo = null;
	public $sourceName = null;
	public $headerId = null;
	public $orderNum = null;
	public $originalOrderSn = null;
	public $lineType = null;
	public $payType = null;
	public $payMethod = null;
	public $period = null;
	public $paySn = null;
	public $payTime = null;
	public $payMoney = null;
	public $refundWay = null;
	public $refundId = null;
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
	public $attribute11 = null;
	public $attribute12 = null;
	public $attribute13 = null;
	public $attribute14 = null;
	public $attribute15 = null;
	public $isDeleted = null;
	public $refundRequestDetailSn = null;
	public $invoiceDeductMoney = null;
	public $payAccount = null;
	
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
			'var' => 'originalOrderSn'
			),
			8 => array(
			'var' => 'lineType'
			),
			9 => array(
			'var' => 'payType'
			),
			10 => array(
			'var' => 'payMethod'
			),
			11 => array(
			'var' => 'period'
			),
			12 => array(
			'var' => 'paySn'
			),
			13 => array(
			'var' => 'payTime'
			),
			14 => array(
			'var' => 'payMoney'
			),
			15 => array(
			'var' => 'refundWay'
			),
			16 => array(
			'var' => 'refundId'
			),
			17 => array(
			'var' => 'versionNumber'
			),
			18 => array(
			'var' => 'createTime'
			),
			19 => array(
			'var' => 'createdBy'
			),
			20 => array(
			'var' => 'updateTime'
			),
			21 => array(
			'var' => 'updatedBy'
			),
			22 => array(
			'var' => 'requestId'
			),
			23 => array(
			'var' => 'attributeCategory'
			),
			24 => array(
			'var' => 'attribute1'
			),
			25 => array(
			'var' => 'attribute2'
			),
			26 => array(
			'var' => 'attribute3'
			),
			27 => array(
			'var' => 'attribute4'
			),
			28 => array(
			'var' => 'attribute5'
			),
			29 => array(
			'var' => 'attribute6'
			),
			30 => array(
			'var' => 'attribute7'
			),
			31 => array(
			'var' => 'attribute8'
			),
			32 => array(
			'var' => 'attribute9'
			),
			33 => array(
			'var' => 'attribute10'
			),
			34 => array(
			'var' => 'attribute11'
			),
			35 => array(
			'var' => 'attribute12'
			),
			36 => array(
			'var' => 'attribute13'
			),
			37 => array(
			'var' => 'attribute14'
			),
			38 => array(
			'var' => 'attribute15'
			),
			39 => array(
			'var' => 'isDeleted'
			),
			40 => array(
			'var' => 'refundRequestDetailSn'
			),
			41 => array(
			'var' => 'invoiceDeductMoney'
			),
			42 => array(
			'var' => 'payAccount'
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
			
			
			if (isset($vals['originalOrderSn'])){
				
				$this->originalOrderSn = $vals['originalOrderSn'];
			}
			
			
			if (isset($vals['lineType'])){
				
				$this->lineType = $vals['lineType'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['payMethod'])){
				
				$this->payMethod = $vals['payMethod'];
			}
			
			
			if (isset($vals['period'])){
				
				$this->period = $vals['period'];
			}
			
			
			if (isset($vals['paySn'])){
				
				$this->paySn = $vals['paySn'];
			}
			
			
			if (isset($vals['payTime'])){
				
				$this->payTime = $vals['payTime'];
			}
			
			
			if (isset($vals['payMoney'])){
				
				$this->payMoney = $vals['payMoney'];
			}
			
			
			if (isset($vals['refundWay'])){
				
				$this->refundWay = $vals['refundWay'];
			}
			
			
			if (isset($vals['refundId'])){
				
				$this->refundId = $vals['refundId'];
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
			
			
			if (isset($vals['attribute11'])){
				
				$this->attribute11 = $vals['attribute11'];
			}
			
			
			if (isset($vals['attribute12'])){
				
				$this->attribute12 = $vals['attribute12'];
			}
			
			
			if (isset($vals['attribute13'])){
				
				$this->attribute13 = $vals['attribute13'];
			}
			
			
			if (isset($vals['attribute14'])){
				
				$this->attribute14 = $vals['attribute14'];
			}
			
			
			if (isset($vals['attribute15'])){
				
				$this->attribute15 = $vals['attribute15'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['refundRequestDetailSn'])){
				
				$this->refundRequestDetailSn = $vals['refundRequestDetailSn'];
			}
			
			
			if (isset($vals['invoiceDeductMoney'])){
				
				$this->invoiceDeductMoney = $vals['invoiceDeductMoney'];
			}
			
			
			if (isset($vals['payAccount'])){
				
				$this->payAccount = $vals['payAccount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmIntOrderPayInModel';
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
			
			
			
			
			if ("originalOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalOrderSn);
				
			}
			
			
			
			
			if ("lineType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lineType);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("payMethod" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payMethod);
				
			}
			
			
			
			
			if ("period" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->period);
				
			}
			
			
			
			
			if ("paySn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paySn);
				
			}
			
			
			
			
			if ("payTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payTime); 
				
			}
			
			
			
			
			if ("payMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payMoney);
				
			}
			
			
			
			
			if ("refundWay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundWay);
				
			}
			
			
			
			
			if ("refundId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refundId); 
				
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
			
			
			
			
			if ("attribute11" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute11);
				
			}
			
			
			
			
			if ("attribute12" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute12);
				
			}
			
			
			
			
			if ("attribute13" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute13);
				
			}
			
			
			
			
			if ("attribute14" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute14);
				
			}
			
			
			
			
			if ("attribute15" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute15);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->isDeleted); 
				
			}
			
			
			
			
			if ("refundRequestDetailSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundRequestDetailSn);
				
			}
			
			
			
			
			if ("invoiceDeductMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceDeductMoney);
				
			}
			
			
			
			
			if ("payAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payAccount);
				
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
		
		
		if($this->originalOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('originalOrderSn');
			$xfer += $output->writeString($this->originalOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineType !== null) {
			
			$xfer += $output->writeFieldBegin('lineType');
			$xfer += $output->writeString($this->lineType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payMethod !== null) {
			
			$xfer += $output->writeFieldBegin('payMethod');
			$xfer += $output->writeString($this->payMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->period !== null) {
			
			$xfer += $output->writeFieldBegin('period');
			$xfer += $output->writeString($this->period);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paySn !== null) {
			
			$xfer += $output->writeFieldBegin('paySn');
			$xfer += $output->writeString($this->paySn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTime !== null) {
			
			$xfer += $output->writeFieldBegin('payTime');
			$xfer += $output->writeI64($this->payTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payMoney !== null) {
			
			$xfer += $output->writeFieldBegin('payMoney');
			$xfer += $output->writeString($this->payMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundWay !== null) {
			
			$xfer += $output->writeFieldBegin('refundWay');
			$xfer += $output->writeString($this->refundWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundId !== null) {
			
			$xfer += $output->writeFieldBegin('refundId');
			$xfer += $output->writeI64($this->refundId);
			
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
		
		
		if($this->attribute11 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute11');
			$xfer += $output->writeString($this->attribute11);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute12 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute12');
			$xfer += $output->writeString($this->attribute12);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute13 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute13');
			$xfer += $output->writeString($this->attribute13);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute14 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute14');
			$xfer += $output->writeString($this->attribute14);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute15 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute15');
			$xfer += $output->writeString($this->attribute15);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeI64($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundRequestDetailSn !== null) {
			
			$xfer += $output->writeFieldBegin('refundRequestDetailSn');
			$xfer += $output->writeString($this->refundRequestDetailSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceDeductMoney !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDeductMoney');
			$xfer += $output->writeString($this->invoiceDeductMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payAccount !== null) {
			
			$xfer += $output->writeFieldBegin('payAccount');
			$xfer += $output->writeString($this->payAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>