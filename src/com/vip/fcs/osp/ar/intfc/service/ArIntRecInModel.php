<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ar\intfc\service;

class ArIntRecInModel {
	
	static $_TSPEC;
	public $id = null;
	public $globalId = null;
	public $dbNo = null;
	public $groupId = null;
	public $sourceName = null;
	public $payId = null;
	public $payNumber = null;
	public $transactionNum = null;
	public $sourceOu = null;
	public $orderId = null;
	public $orderNum = null;
	public $recNumber = null;
	public $payMethod = null;
	public $recMethod = null;
	public $payType = null;
	public $recId = null;
	public $payAmount = null;
	public $orderAmount = null;
	public $payTime = null;
	public $glDate = null;
	public $currencyCode = null;
	public $customerName = null;
	public $batchName = null;
	public $recType = null;
	public $specialType = null;
	public $recClass = null;
	public $channel = null;
	public $sourceTable = null;
	public $invoiceType = null;
	public $posSource = null;
	public $shipAddress = null;
	public $exchangeType = null;
	public $exchangeRate = null;
	public $exchangeDate = null;
	public $accountFlag = null;
	public $accountMessage = null;
	public $processFlag = null;
	public $errorMessage = null;
	public $versionNumber = null;
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
	public $storeId = null;
	public $storeSource = null;
	public $successUpdateTime = null;
	public $extOrderSn = null;
	public $revFlag = null;
	public $parentOrderSn = null;
	public $payClass = null;
	public $payReceipt = null;
	public $storeType = null;
	public $createTime = null;
	public $createdBy = null;
	public $updateTime = null;
	public $updatedBy = null;
	public $isDeleted = null;
	
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
			'var' => 'groupId'
			),
			5 => array(
			'var' => 'sourceName'
			),
			6 => array(
			'var' => 'payId'
			),
			7 => array(
			'var' => 'payNumber'
			),
			8 => array(
			'var' => 'transactionNum'
			),
			9 => array(
			'var' => 'sourceOu'
			),
			10 => array(
			'var' => 'orderId'
			),
			11 => array(
			'var' => 'orderNum'
			),
			12 => array(
			'var' => 'recNumber'
			),
			13 => array(
			'var' => 'payMethod'
			),
			14 => array(
			'var' => 'recMethod'
			),
			15 => array(
			'var' => 'payType'
			),
			16 => array(
			'var' => 'recId'
			),
			17 => array(
			'var' => 'payAmount'
			),
			18 => array(
			'var' => 'orderAmount'
			),
			19 => array(
			'var' => 'payTime'
			),
			20 => array(
			'var' => 'glDate'
			),
			21 => array(
			'var' => 'currencyCode'
			),
			22 => array(
			'var' => 'customerName'
			),
			23 => array(
			'var' => 'batchName'
			),
			24 => array(
			'var' => 'recType'
			),
			25 => array(
			'var' => 'specialType'
			),
			26 => array(
			'var' => 'recClass'
			),
			27 => array(
			'var' => 'channel'
			),
			28 => array(
			'var' => 'sourceTable'
			),
			29 => array(
			'var' => 'invoiceType'
			),
			30 => array(
			'var' => 'posSource'
			),
			31 => array(
			'var' => 'shipAddress'
			),
			32 => array(
			'var' => 'exchangeType'
			),
			33 => array(
			'var' => 'exchangeRate'
			),
			34 => array(
			'var' => 'exchangeDate'
			),
			35 => array(
			'var' => 'accountFlag'
			),
			36 => array(
			'var' => 'accountMessage'
			),
			37 => array(
			'var' => 'processFlag'
			),
			38 => array(
			'var' => 'errorMessage'
			),
			39 => array(
			'var' => 'versionNumber'
			),
			40 => array(
			'var' => 'requestId'
			),
			41 => array(
			'var' => 'attributeCategory'
			),
			42 => array(
			'var' => 'attribute1'
			),
			43 => array(
			'var' => 'attribute2'
			),
			44 => array(
			'var' => 'attribute3'
			),
			45 => array(
			'var' => 'attribute4'
			),
			46 => array(
			'var' => 'attribute5'
			),
			47 => array(
			'var' => 'attribute6'
			),
			48 => array(
			'var' => 'attribute7'
			),
			49 => array(
			'var' => 'attribute8'
			),
			50 => array(
			'var' => 'attribute9'
			),
			51 => array(
			'var' => 'attribute10'
			),
			52 => array(
			'var' => 'storeId'
			),
			53 => array(
			'var' => 'storeSource'
			),
			54 => array(
			'var' => 'successUpdateTime'
			),
			55 => array(
			'var' => 'extOrderSn'
			),
			56 => array(
			'var' => 'revFlag'
			),
			57 => array(
			'var' => 'parentOrderSn'
			),
			58 => array(
			'var' => 'payClass'
			),
			59 => array(
			'var' => 'payReceipt'
			),
			60 => array(
			'var' => 'storeType'
			),
			61 => array(
			'var' => 'createTime'
			),
			62 => array(
			'var' => 'createdBy'
			),
			63 => array(
			'var' => 'updateTime'
			),
			64 => array(
			'var' => 'updatedBy'
			),
			65 => array(
			'var' => 'isDeleted'
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
			
			
			if (isset($vals['groupId'])){
				
				$this->groupId = $vals['groupId'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
			if (isset($vals['payId'])){
				
				$this->payId = $vals['payId'];
			}
			
			
			if (isset($vals['payNumber'])){
				
				$this->payNumber = $vals['payNumber'];
			}
			
			
			if (isset($vals['transactionNum'])){
				
				$this->transactionNum = $vals['transactionNum'];
			}
			
			
			if (isset($vals['sourceOu'])){
				
				$this->sourceOu = $vals['sourceOu'];
			}
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['recNumber'])){
				
				$this->recNumber = $vals['recNumber'];
			}
			
			
			if (isset($vals['payMethod'])){
				
				$this->payMethod = $vals['payMethod'];
			}
			
			
			if (isset($vals['recMethod'])){
				
				$this->recMethod = $vals['recMethod'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['recId'])){
				
				$this->recId = $vals['recId'];
			}
			
			
			if (isset($vals['payAmount'])){
				
				$this->payAmount = $vals['payAmount'];
			}
			
			
			if (isset($vals['orderAmount'])){
				
				$this->orderAmount = $vals['orderAmount'];
			}
			
			
			if (isset($vals['payTime'])){
				
				$this->payTime = $vals['payTime'];
			}
			
			
			if (isset($vals['glDate'])){
				
				$this->glDate = $vals['glDate'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['customerName'])){
				
				$this->customerName = $vals['customerName'];
			}
			
			
			if (isset($vals['batchName'])){
				
				$this->batchName = $vals['batchName'];
			}
			
			
			if (isset($vals['recType'])){
				
				$this->recType = $vals['recType'];
			}
			
			
			if (isset($vals['specialType'])){
				
				$this->specialType = $vals['specialType'];
			}
			
			
			if (isset($vals['recClass'])){
				
				$this->recClass = $vals['recClass'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['sourceTable'])){
				
				$this->sourceTable = $vals['sourceTable'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['posSource'])){
				
				$this->posSource = $vals['posSource'];
			}
			
			
			if (isset($vals['shipAddress'])){
				
				$this->shipAddress = $vals['shipAddress'];
			}
			
			
			if (isset($vals['exchangeType'])){
				
				$this->exchangeType = $vals['exchangeType'];
			}
			
			
			if (isset($vals['exchangeRate'])){
				
				$this->exchangeRate = $vals['exchangeRate'];
			}
			
			
			if (isset($vals['exchangeDate'])){
				
				$this->exchangeDate = $vals['exchangeDate'];
			}
			
			
			if (isset($vals['accountFlag'])){
				
				$this->accountFlag = $vals['accountFlag'];
			}
			
			
			if (isset($vals['accountMessage'])){
				
				$this->accountMessage = $vals['accountMessage'];
			}
			
			
			if (isset($vals['processFlag'])){
				
				$this->processFlag = $vals['processFlag'];
			}
			
			
			if (isset($vals['errorMessage'])){
				
				$this->errorMessage = $vals['errorMessage'];
			}
			
			
			if (isset($vals['versionNumber'])){
				
				$this->versionNumber = $vals['versionNumber'];
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
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['successUpdateTime'])){
				
				$this->successUpdateTime = $vals['successUpdateTime'];
			}
			
			
			if (isset($vals['extOrderSn'])){
				
				$this->extOrderSn = $vals['extOrderSn'];
			}
			
			
			if (isset($vals['revFlag'])){
				
				$this->revFlag = $vals['revFlag'];
			}
			
			
			if (isset($vals['parentOrderSn'])){
				
				$this->parentOrderSn = $vals['parentOrderSn'];
			}
			
			
			if (isset($vals['payClass'])){
				
				$this->payClass = $vals['payClass'];
			}
			
			
			if (isset($vals['payReceipt'])){
				
				$this->payReceipt = $vals['payReceipt'];
			}
			
			
			if (isset($vals['storeType'])){
				
				$this->storeType = $vals['storeType'];
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
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ArIntRecInModel';
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
			
			
			
			
			if ("groupId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->groupId); 
				
			}
			
			
			
			
			if ("sourceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceName);
				
			}
			
			
			
			
			if ("payId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payId); 
				
			}
			
			
			
			
			if ("payNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payNumber);
				
			}
			
			
			
			
			if ("transactionNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionNum);
				
			}
			
			
			
			
			if ("sourceOu" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceOu);
				
			}
			
			
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderId);
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("recNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recNumber);
				
			}
			
			
			
			
			if ("payMethod" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payMethod);
				
			}
			
			
			
			
			if ("recMethod" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recMethod);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("recId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recId);
				
			}
			
			
			
			
			if ("payAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->payAmount);
				
			}
			
			
			
			
			if ("orderAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->orderAmount);
				
			}
			
			
			
			
			if ("payTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payTime); 
				
			}
			
			
			
			
			if ("glDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->glDate); 
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("customerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerName);
				
			}
			
			
			
			
			if ("batchName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchName);
				
			}
			
			
			
			
			if ("recType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recType);
				
			}
			
			
			
			
			if ("specialType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialType);
				
			}
			
			
			
			
			if ("recClass" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recClass);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("sourceTable" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceTable);
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceType);
				
			}
			
			
			
			
			if ("posSource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posSource);
				
			}
			
			
			
			
			if ("shipAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipAddress);
				
			}
			
			
			
			
			if ("exchangeType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchangeType);
				
			}
			
			
			
			
			if ("exchangeRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchangeRate);
				
			}
			
			
			
			
			if ("exchangeDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->exchangeDate); 
				
			}
			
			
			
			
			if ("accountFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accountFlag);
				
			}
			
			
			
			
			if ("accountMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accountMessage);
				
			}
			
			
			
			
			if ("processFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processFlag);
				
			}
			
			
			
			
			if ("errorMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorMessage);
				
			}
			
			
			
			
			if ("versionNumber" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->versionNumber); 
				
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
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeSource);
				
			}
			
			
			
			
			if ("successUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->successUpdateTime); 
				
			}
			
			
			
			
			if ("extOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extOrderSn);
				
			}
			
			
			
			
			if ("revFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->revFlag);
				
			}
			
			
			
			
			if ("parentOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentOrderSn);
				
			}
			
			
			
			
			if ("payClass" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payClass);
				
			}
			
			
			
			
			if ("payReceipt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payReceipt);
				
			}
			
			
			
			
			if ("storeType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeType);
				
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
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isDeleted); 
				
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
		
		
		if($this->groupId !== null) {
			
			$xfer += $output->writeFieldBegin('groupId');
			$xfer += $output->writeI64($this->groupId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceName !== null) {
			
			$xfer += $output->writeFieldBegin('sourceName');
			$xfer += $output->writeString($this->sourceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payId !== null) {
			
			$xfer += $output->writeFieldBegin('payId');
			$xfer += $output->writeI64($this->payId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payNumber !== null) {
			
			$xfer += $output->writeFieldBegin('payNumber');
			$xfer += $output->writeString($this->payNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionNum !== null) {
			
			$xfer += $output->writeFieldBegin('transactionNum');
			$xfer += $output->writeString($this->transactionNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceOu !== null) {
			
			$xfer += $output->writeFieldBegin('sourceOu');
			$xfer += $output->writeString($this->sourceOu);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeString($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recNumber !== null) {
			
			$xfer += $output->writeFieldBegin('recNumber');
			$xfer += $output->writeString($this->recNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payMethod !== null) {
			
			$xfer += $output->writeFieldBegin('payMethod');
			$xfer += $output->writeString($this->payMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recMethod !== null) {
			
			$xfer += $output->writeFieldBegin('recMethod');
			$xfer += $output->writeString($this->recMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recId !== null) {
			
			$xfer += $output->writeFieldBegin('recId');
			$xfer += $output->writeString($this->recId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payAmount !== null) {
			
			$xfer += $output->writeFieldBegin('payAmount');
			$xfer += $output->writeDouble($this->payAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderAmount !== null) {
			
			$xfer += $output->writeFieldBegin('orderAmount');
			$xfer += $output->writeDouble($this->orderAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTime !== null) {
			
			$xfer += $output->writeFieldBegin('payTime');
			$xfer += $output->writeI64($this->payTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->glDate !== null) {
			
			$xfer += $output->writeFieldBegin('glDate');
			$xfer += $output->writeI64($this->glDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerName !== null) {
			
			$xfer += $output->writeFieldBegin('customerName');
			$xfer += $output->writeString($this->customerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchName !== null) {
			
			$xfer += $output->writeFieldBegin('batchName');
			$xfer += $output->writeString($this->batchName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recType !== null) {
			
			$xfer += $output->writeFieldBegin('recType');
			$xfer += $output->writeString($this->recType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialType !== null) {
			
			$xfer += $output->writeFieldBegin('specialType');
			$xfer += $output->writeString($this->specialType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recClass !== null) {
			
			$xfer += $output->writeFieldBegin('recClass');
			$xfer += $output->writeString($this->recClass);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceTable !== null) {
			
			$xfer += $output->writeFieldBegin('sourceTable');
			$xfer += $output->writeString($this->sourceTable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeString($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->posSource !== null) {
			
			$xfer += $output->writeFieldBegin('posSource');
			$xfer += $output->writeString($this->posSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipAddress !== null) {
			
			$xfer += $output->writeFieldBegin('shipAddress');
			$xfer += $output->writeString($this->shipAddress);
			
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
		
		
		if($this->exchangeDate !== null) {
			
			$xfer += $output->writeFieldBegin('exchangeDate');
			$xfer += $output->writeI64($this->exchangeDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountFlag !== null) {
			
			$xfer += $output->writeFieldBegin('accountFlag');
			$xfer += $output->writeString($this->accountFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountMessage !== null) {
			
			$xfer += $output->writeFieldBegin('accountMessage');
			$xfer += $output->writeString($this->accountMessage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processFlag !== null) {
			
			$xfer += $output->writeFieldBegin('processFlag');
			$xfer += $output->writeString($this->processFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorMessage !== null) {
			
			$xfer += $output->writeFieldBegin('errorMessage');
			$xfer += $output->writeString($this->errorMessage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->versionNumber !== null) {
			
			$xfer += $output->writeFieldBegin('versionNumber');
			$xfer += $output->writeI64($this->versionNumber);
			
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
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSource !== null) {
			
			$xfer += $output->writeFieldBegin('storeSource');
			$xfer += $output->writeString($this->storeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->successUpdateTime !== null) {
			
			$xfer += $output->writeFieldBegin('successUpdateTime');
			$xfer += $output->writeI64($this->successUpdateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('extOrderSn');
			$xfer += $output->writeString($this->extOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->revFlag !== null) {
			
			$xfer += $output->writeFieldBegin('revFlag');
			$xfer += $output->writeString($this->revFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('parentOrderSn');
			$xfer += $output->writeString($this->parentOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payClass !== null) {
			
			$xfer += $output->writeFieldBegin('payClass');
			$xfer += $output->writeString($this->payClass);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payReceipt !== null) {
			
			$xfer += $output->writeFieldBegin('payReceipt');
			$xfer += $output->writeString($this->payReceipt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeType !== null) {
			
			$xfer += $output->writeFieldBegin('storeType');
			$xfer += $output->writeString($this->storeType);
			
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
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeByte($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>