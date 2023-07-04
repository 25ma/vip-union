<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmIntOrderPayReturnInModel {
	
	static $_TSPEC;
	public $id = null;
	public $globalId = null;
	public $dbNo = null;
	public $headerId = null;
	public $sourceName = null;
	public $refundId = null;
	public $orderRefundId = null;
	public $refundOrder = null;
	public $orderReturnApplyId = null;
	public $refundClass = null;
	public $refundDate = null;
	public $refundAmount = null;
	public $currencyCode = null;
	public $exchangeDate = null;
	public $exchangeType = null;
	public $exchangeRate = null;
	public $refundWay = null;
	public $orderNum = null;
	public $ctReference = null;
	public $payType = null;
	public $discType = null;
	public $payMethod = null;
	public $payTrn = null;
	public $payNumber = null;
	public $returnAmount = null;
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
	public $refundRequestDetailSn = null;
	public $invoiceDeductMoney = null;
	public $taxMoneyFlag = null;
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
			'var' => 'headerId'
			),
			5 => array(
			'var' => 'sourceName'
			),
			6 => array(
			'var' => 'refundId'
			),
			7 => array(
			'var' => 'orderRefundId'
			),
			8 => array(
			'var' => 'refundOrder'
			),
			9 => array(
			'var' => 'orderReturnApplyId'
			),
			10 => array(
			'var' => 'refundClass'
			),
			11 => array(
			'var' => 'refundDate'
			),
			12 => array(
			'var' => 'refundAmount'
			),
			13 => array(
			'var' => 'currencyCode'
			),
			14 => array(
			'var' => 'exchangeDate'
			),
			15 => array(
			'var' => 'exchangeType'
			),
			16 => array(
			'var' => 'exchangeRate'
			),
			17 => array(
			'var' => 'refundWay'
			),
			18 => array(
			'var' => 'orderNum'
			),
			19 => array(
			'var' => 'ctReference'
			),
			20 => array(
			'var' => 'payType'
			),
			21 => array(
			'var' => 'discType'
			),
			22 => array(
			'var' => 'payMethod'
			),
			23 => array(
			'var' => 'payTrn'
			),
			24 => array(
			'var' => 'payNumber'
			),
			25 => array(
			'var' => 'returnAmount'
			),
			26 => array(
			'var' => 'versionNumber'
			),
			27 => array(
			'var' => 'createTime'
			),
			28 => array(
			'var' => 'createdBy'
			),
			29 => array(
			'var' => 'updateTime'
			),
			30 => array(
			'var' => 'updatedBy'
			),
			31 => array(
			'var' => 'requestId'
			),
			32 => array(
			'var' => 'attributeCategory'
			),
			33 => array(
			'var' => 'attribute1'
			),
			34 => array(
			'var' => 'attribute2'
			),
			35 => array(
			'var' => 'attribute3'
			),
			36 => array(
			'var' => 'attribute4'
			),
			37 => array(
			'var' => 'attribute5'
			),
			38 => array(
			'var' => 'attribute6'
			),
			39 => array(
			'var' => 'attribute7'
			),
			40 => array(
			'var' => 'attribute8'
			),
			41 => array(
			'var' => 'attribute9'
			),
			42 => array(
			'var' => 'attribute10'
			),
			43 => array(
			'var' => 'isDeleted'
			),
			44 => array(
			'var' => 'refundRequestDetailSn'
			),
			45 => array(
			'var' => 'invoiceDeductMoney'
			),
			46 => array(
			'var' => 'taxMoneyFlag'
			),
			47 => array(
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
			
			
			if (isset($vals['headerId'])){
				
				$this->headerId = $vals['headerId'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
			if (isset($vals['refundId'])){
				
				$this->refundId = $vals['refundId'];
			}
			
			
			if (isset($vals['orderRefundId'])){
				
				$this->orderRefundId = $vals['orderRefundId'];
			}
			
			
			if (isset($vals['refundOrder'])){
				
				$this->refundOrder = $vals['refundOrder'];
			}
			
			
			if (isset($vals['orderReturnApplyId'])){
				
				$this->orderReturnApplyId = $vals['orderReturnApplyId'];
			}
			
			
			if (isset($vals['refundClass'])){
				
				$this->refundClass = $vals['refundClass'];
			}
			
			
			if (isset($vals['refundDate'])){
				
				$this->refundDate = $vals['refundDate'];
			}
			
			
			if (isset($vals['refundAmount'])){
				
				$this->refundAmount = $vals['refundAmount'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['exchangeDate'])){
				
				$this->exchangeDate = $vals['exchangeDate'];
			}
			
			
			if (isset($vals['exchangeType'])){
				
				$this->exchangeType = $vals['exchangeType'];
			}
			
			
			if (isset($vals['exchangeRate'])){
				
				$this->exchangeRate = $vals['exchangeRate'];
			}
			
			
			if (isset($vals['refundWay'])){
				
				$this->refundWay = $vals['refundWay'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['ctReference'])){
				
				$this->ctReference = $vals['ctReference'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['discType'])){
				
				$this->discType = $vals['discType'];
			}
			
			
			if (isset($vals['payMethod'])){
				
				$this->payMethod = $vals['payMethod'];
			}
			
			
			if (isset($vals['payTrn'])){
				
				$this->payTrn = $vals['payTrn'];
			}
			
			
			if (isset($vals['payNumber'])){
				
				$this->payNumber = $vals['payNumber'];
			}
			
			
			if (isset($vals['returnAmount'])){
				
				$this->returnAmount = $vals['returnAmount'];
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
			
			
			if (isset($vals['refundRequestDetailSn'])){
				
				$this->refundRequestDetailSn = $vals['refundRequestDetailSn'];
			}
			
			
			if (isset($vals['invoiceDeductMoney'])){
				
				$this->invoiceDeductMoney = $vals['invoiceDeductMoney'];
			}
			
			
			if (isset($vals['taxMoneyFlag'])){
				
				$this->taxMoneyFlag = $vals['taxMoneyFlag'];
			}
			
			
			if (isset($vals['payAccount'])){
				
				$this->payAccount = $vals['payAccount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmIntOrderPayReturnInModel';
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
			
			
			
			
			if ("headerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->headerId); 
				
			}
			
			
			
			
			if ("sourceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceName);
				
			}
			
			
			
			
			if ("refundId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refundId); 
				
			}
			
			
			
			
			if ("orderRefundId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderRefundId); 
				
			}
			
			
			
			
			if ("refundOrder" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundOrder);
				
			}
			
			
			
			
			if ("orderReturnApplyId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderReturnApplyId);
				
			}
			
			
			
			
			if ("refundClass" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundClass);
				
			}
			
			
			
			
			if ("refundDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refundDate); 
				
			}
			
			
			
			
			if ("refundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundAmount);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("exchangeDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->exchangeDate); 
				
			}
			
			
			
			
			if ("exchangeType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchangeType);
				
			}
			
			
			
			
			if ("exchangeRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchangeRate);
				
			}
			
			
			
			
			if ("refundWay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundWay);
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("ctReference" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ctReference);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("discType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discType);
				
			}
			
			
			
			
			if ("payMethod" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payMethod);
				
			}
			
			
			
			
			if ("payTrn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payTrn);
				
			}
			
			
			
			
			if ("payNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payNumber);
				
			}
			
			
			
			
			if ("returnAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnAmount);
				
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
			
			
			
			
			if ("refundRequestDetailSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundRequestDetailSn);
				
			}
			
			
			
			
			if ("invoiceDeductMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceDeductMoney);
				
			}
			
			
			
			
			if ("taxMoneyFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->taxMoneyFlag); 
				
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
		
		
		if($this->headerId !== null) {
			
			$xfer += $output->writeFieldBegin('headerId');
			$xfer += $output->writeI64($this->headerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceName !== null) {
			
			$xfer += $output->writeFieldBegin('sourceName');
			$xfer += $output->writeString($this->sourceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundId !== null) {
			
			$xfer += $output->writeFieldBegin('refundId');
			$xfer += $output->writeI64($this->refundId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderRefundId !== null) {
			
			$xfer += $output->writeFieldBegin('orderRefundId');
			$xfer += $output->writeI64($this->orderRefundId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundOrder !== null) {
			
			$xfer += $output->writeFieldBegin('refundOrder');
			$xfer += $output->writeString($this->refundOrder);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderReturnApplyId !== null) {
			
			$xfer += $output->writeFieldBegin('orderReturnApplyId');
			$xfer += $output->writeString($this->orderReturnApplyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundClass !== null) {
			
			$xfer += $output->writeFieldBegin('refundClass');
			$xfer += $output->writeString($this->refundClass);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundDate !== null) {
			
			$xfer += $output->writeFieldBegin('refundDate');
			$xfer += $output->writeI64($this->refundDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('refundAmount');
			$xfer += $output->writeString($this->refundAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchangeDate !== null) {
			
			$xfer += $output->writeFieldBegin('exchangeDate');
			$xfer += $output->writeI64($this->exchangeDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchangeType !== null) {
			
			$xfer += $output->writeFieldBegin('exchangeType');
			$xfer += $output->writeString($this->exchangeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchangeRate !== null) {
			
			$xfer += $output->writeFieldBegin('exchangeRate');
			$xfer += $output->writeString($this->exchangeRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundWay !== null) {
			
			$xfer += $output->writeFieldBegin('refundWay');
			$xfer += $output->writeString($this->refundWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ctReference !== null) {
			
			$xfer += $output->writeFieldBegin('ctReference');
			$xfer += $output->writeString($this->ctReference);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discType !== null) {
			
			$xfer += $output->writeFieldBegin('discType');
			$xfer += $output->writeString($this->discType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payMethod !== null) {
			
			$xfer += $output->writeFieldBegin('payMethod');
			$xfer += $output->writeString($this->payMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTrn !== null) {
			
			$xfer += $output->writeFieldBegin('payTrn');
			$xfer += $output->writeString($this->payTrn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payNumber !== null) {
			
			$xfer += $output->writeFieldBegin('payNumber');
			$xfer += $output->writeString($this->payNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnAmount !== null) {
			
			$xfer += $output->writeFieldBegin('returnAmount');
			$xfer += $output->writeString($this->returnAmount);
			
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
		
		
		if($this->taxMoneyFlag !== null) {
			
			$xfer += $output->writeFieldBegin('taxMoneyFlag');
			$xfer += $output->writeI64($this->taxMoneyFlag);
			
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