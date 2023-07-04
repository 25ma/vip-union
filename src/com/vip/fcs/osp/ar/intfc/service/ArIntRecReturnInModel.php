<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ar\intfc\service;

class ArIntRecReturnInModel {
	
	static $_TSPEC;
	public $id = null;
	public $globalId = null;
	public $dbNo = null;
	public $sourceName = null;
	public $groupId = null;
	public $retId = null;
	public $sourceOu = null;
	public $ouName = null;
	public $orderNum = null;
	public $returnNum = null;
	public $recNumber = null;
	public $orderId = null;
	public $recDate = null;
	public $glDate = null;
	public $trxGlDate = null;
	public $payMethod = null;
	public $payType = null;
	public $shipper = null;
	public $returnStatus = null;
	public $returnType = null;
	public $amount = null;
	public $returnPath = null;
	public $specialType = null;
	public $channel = null;
	public $currencyCode = null;
	public $exchangeType = null;
	public $exchangeRate = null;
	public $exchangeDate = null;
	public $invoiceType = null;
	public $processFlag = null;
	public $errorMessage = null;
	public $wareHouse = null;
	public $shipAddriess = null;
	public $lfCardId = null;
	public $payId = null;
	public $parentOrderNum = null;
	public $smlFlag = null;
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
	public $batchName = null;
	public $reportsFlag = null;
	public $refundRequestDetailSn = null;
	public $irefundRemark = null;
	public $sourceTable = null;
	public $storeType = null;
	public $intGlobalId = null;
	public $originalOrderSn = null;
	public $versionNumber = null;
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
			'var' => 'sourceName'
			),
			5 => array(
			'var' => 'groupId'
			),
			6 => array(
			'var' => 'retId'
			),
			7 => array(
			'var' => 'sourceOu'
			),
			8 => array(
			'var' => 'ouName'
			),
			9 => array(
			'var' => 'orderNum'
			),
			10 => array(
			'var' => 'returnNum'
			),
			11 => array(
			'var' => 'recNumber'
			),
			12 => array(
			'var' => 'orderId'
			),
			13 => array(
			'var' => 'recDate'
			),
			14 => array(
			'var' => 'glDate'
			),
			15 => array(
			'var' => 'trxGlDate'
			),
			16 => array(
			'var' => 'payMethod'
			),
			17 => array(
			'var' => 'payType'
			),
			18 => array(
			'var' => 'shipper'
			),
			19 => array(
			'var' => 'returnStatus'
			),
			20 => array(
			'var' => 'returnType'
			),
			21 => array(
			'var' => 'amount'
			),
			22 => array(
			'var' => 'returnPath'
			),
			23 => array(
			'var' => 'specialType'
			),
			24 => array(
			'var' => 'channel'
			),
			25 => array(
			'var' => 'currencyCode'
			),
			26 => array(
			'var' => 'exchangeType'
			),
			27 => array(
			'var' => 'exchangeRate'
			),
			28 => array(
			'var' => 'exchangeDate'
			),
			29 => array(
			'var' => 'invoiceType'
			),
			30 => array(
			'var' => 'processFlag'
			),
			31 => array(
			'var' => 'errorMessage'
			),
			32 => array(
			'var' => 'wareHouse'
			),
			33 => array(
			'var' => 'shipAddriess'
			),
			34 => array(
			'var' => 'lfCardId'
			),
			35 => array(
			'var' => 'payId'
			),
			36 => array(
			'var' => 'parentOrderNum'
			),
			37 => array(
			'var' => 'smlFlag'
			),
			38 => array(
			'var' => 'requestId'
			),
			39 => array(
			'var' => 'attributeCategory'
			),
			40 => array(
			'var' => 'attribute1'
			),
			41 => array(
			'var' => 'attribute2'
			),
			42 => array(
			'var' => 'attribute3'
			),
			43 => array(
			'var' => 'attribute4'
			),
			44 => array(
			'var' => 'attribute5'
			),
			45 => array(
			'var' => 'attribute6'
			),
			46 => array(
			'var' => 'attribute7'
			),
			47 => array(
			'var' => 'attribute8'
			),
			48 => array(
			'var' => 'attribute9'
			),
			49 => array(
			'var' => 'attribute10'
			),
			50 => array(
			'var' => 'storeId'
			),
			51 => array(
			'var' => 'storeSource'
			),
			52 => array(
			'var' => 'successUpdateTime'
			),
			53 => array(
			'var' => 'extOrderSn'
			),
			54 => array(
			'var' => 'batchName'
			),
			55 => array(
			'var' => 'reportsFlag'
			),
			56 => array(
			'var' => 'refundRequestDetailSn'
			),
			57 => array(
			'var' => 'irefundRemark'
			),
			58 => array(
			'var' => 'sourceTable'
			),
			59 => array(
			'var' => 'storeType'
			),
			60 => array(
			'var' => 'intGlobalId'
			),
			61 => array(
			'var' => 'originalOrderSn'
			),
			62 => array(
			'var' => 'versionNumber'
			),
			63 => array(
			'var' => 'createTime'
			),
			64 => array(
			'var' => 'createdBy'
			),
			65 => array(
			'var' => 'updateTime'
			),
			66 => array(
			'var' => 'updatedBy'
			),
			67 => array(
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
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
			if (isset($vals['groupId'])){
				
				$this->groupId = $vals['groupId'];
			}
			
			
			if (isset($vals['retId'])){
				
				$this->retId = $vals['retId'];
			}
			
			
			if (isset($vals['sourceOu'])){
				
				$this->sourceOu = $vals['sourceOu'];
			}
			
			
			if (isset($vals['ouName'])){
				
				$this->ouName = $vals['ouName'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['returnNum'])){
				
				$this->returnNum = $vals['returnNum'];
			}
			
			
			if (isset($vals['recNumber'])){
				
				$this->recNumber = $vals['recNumber'];
			}
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['recDate'])){
				
				$this->recDate = $vals['recDate'];
			}
			
			
			if (isset($vals['glDate'])){
				
				$this->glDate = $vals['glDate'];
			}
			
			
			if (isset($vals['trxGlDate'])){
				
				$this->trxGlDate = $vals['trxGlDate'];
			}
			
			
			if (isset($vals['payMethod'])){
				
				$this->payMethod = $vals['payMethod'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['shipper'])){
				
				$this->shipper = $vals['shipper'];
			}
			
			
			if (isset($vals['returnStatus'])){
				
				$this->returnStatus = $vals['returnStatus'];
			}
			
			
			if (isset($vals['returnType'])){
				
				$this->returnType = $vals['returnType'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['returnPath'])){
				
				$this->returnPath = $vals['returnPath'];
			}
			
			
			if (isset($vals['specialType'])){
				
				$this->specialType = $vals['specialType'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
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
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['processFlag'])){
				
				$this->processFlag = $vals['processFlag'];
			}
			
			
			if (isset($vals['errorMessage'])){
				
				$this->errorMessage = $vals['errorMessage'];
			}
			
			
			if (isset($vals['wareHouse'])){
				
				$this->wareHouse = $vals['wareHouse'];
			}
			
			
			if (isset($vals['shipAddriess'])){
				
				$this->shipAddriess = $vals['shipAddriess'];
			}
			
			
			if (isset($vals['lfCardId'])){
				
				$this->lfCardId = $vals['lfCardId'];
			}
			
			
			if (isset($vals['payId'])){
				
				$this->payId = $vals['payId'];
			}
			
			
			if (isset($vals['parentOrderNum'])){
				
				$this->parentOrderNum = $vals['parentOrderNum'];
			}
			
			
			if (isset($vals['smlFlag'])){
				
				$this->smlFlag = $vals['smlFlag'];
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
			
			
			if (isset($vals['batchName'])){
				
				$this->batchName = $vals['batchName'];
			}
			
			
			if (isset($vals['reportsFlag'])){
				
				$this->reportsFlag = $vals['reportsFlag'];
			}
			
			
			if (isset($vals['refundRequestDetailSn'])){
				
				$this->refundRequestDetailSn = $vals['refundRequestDetailSn'];
			}
			
			
			if (isset($vals['irefundRemark'])){
				
				$this->irefundRemark = $vals['irefundRemark'];
			}
			
			
			if (isset($vals['sourceTable'])){
				
				$this->sourceTable = $vals['sourceTable'];
			}
			
			
			if (isset($vals['storeType'])){
				
				$this->storeType = $vals['storeType'];
			}
			
			
			if (isset($vals['intGlobalId'])){
				
				$this->intGlobalId = $vals['intGlobalId'];
			}
			
			
			if (isset($vals['originalOrderSn'])){
				
				$this->originalOrderSn = $vals['originalOrderSn'];
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
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ArIntRecReturnInModel';
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
			
			
			
			
			if ("groupId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->groupId); 
				
			}
			
			
			
			
			if ("retId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->retId); 
				
			}
			
			
			
			
			if ("sourceOu" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceOu);
				
			}
			
			
			
			
			if ("ouName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ouName);
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("returnNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnNum);
				
			}
			
			
			
			
			if ("recNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recNumber);
				
			}
			
			
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderId); 
				
			}
			
			
			
			
			if ("recDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->recDate); 
				
			}
			
			
			
			
			if ("glDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->glDate); 
				
			}
			
			
			
			
			if ("trxGlDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->trxGlDate); 
				
			}
			
			
			
			
			if ("payMethod" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payMethod);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("shipper" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipper);
				
			}
			
			
			
			
			if ("returnStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnStatus);
				
			}
			
			
			
			
			if ("returnType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnType);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("returnPath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnPath);
				
			}
			
			
			
			
			if ("specialType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialType);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
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
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceType);
				
			}
			
			
			
			
			if ("processFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processFlag);
				
			}
			
			
			
			
			if ("errorMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorMessage);
				
			}
			
			
			
			
			if ("wareHouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wareHouse);
				
			}
			
			
			
			
			if ("shipAddriess" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipAddriess);
				
			}
			
			
			
			
			if ("lfCardId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lfCardId);
				
			}
			
			
			
			
			if ("payId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payId);
				
			}
			
			
			
			
			if ("parentOrderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentOrderNum);
				
			}
			
			
			
			
			if ("smlFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->smlFlag);
				
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
			
			
			
			
			if ("batchName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchName);
				
			}
			
			
			
			
			if ("reportsFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reportsFlag);
				
			}
			
			
			
			
			if ("refundRequestDetailSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundRequestDetailSn);
				
			}
			
			
			
			
			if ("irefundRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->irefundRemark);
				
			}
			
			
			
			
			if ("sourceTable" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceTable);
				
			}
			
			
			
			
			if ("storeType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeType);
				
			}
			
			
			
			
			if ("intGlobalId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->intGlobalId);
				
			}
			
			
			
			
			if ("originalOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalOrderSn);
				
			}
			
			
			
			
			if ("versionNumber" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->versionNumber); 
				
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
		
		
		if($this->sourceName !== null) {
			
			$xfer += $output->writeFieldBegin('sourceName');
			$xfer += $output->writeString($this->sourceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->groupId !== null) {
			
			$xfer += $output->writeFieldBegin('groupId');
			$xfer += $output->writeI64($this->groupId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retId !== null) {
			
			$xfer += $output->writeFieldBegin('retId');
			$xfer += $output->writeI64($this->retId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceOu !== null) {
			
			$xfer += $output->writeFieldBegin('sourceOu');
			$xfer += $output->writeString($this->sourceOu);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ouName !== null) {
			
			$xfer += $output->writeFieldBegin('ouName');
			$xfer += $output->writeString($this->ouName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnNum !== null) {
			
			$xfer += $output->writeFieldBegin('returnNum');
			$xfer += $output->writeString($this->returnNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recNumber !== null) {
			
			$xfer += $output->writeFieldBegin('recNumber');
			$xfer += $output->writeString($this->recNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeI64($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recDate !== null) {
			
			$xfer += $output->writeFieldBegin('recDate');
			$xfer += $output->writeI64($this->recDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->glDate !== null) {
			
			$xfer += $output->writeFieldBegin('glDate');
			$xfer += $output->writeI64($this->glDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trxGlDate !== null) {
			
			$xfer += $output->writeFieldBegin('trxGlDate');
			$xfer += $output->writeI64($this->trxGlDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payMethod !== null) {
			
			$xfer += $output->writeFieldBegin('payMethod');
			$xfer += $output->writeString($this->payMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipper !== null) {
			
			$xfer += $output->writeFieldBegin('shipper');
			$xfer += $output->writeString($this->shipper);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnStatus !== null) {
			
			$xfer += $output->writeFieldBegin('returnStatus');
			$xfer += $output->writeString($this->returnStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnType !== null) {
			
			$xfer += $output->writeFieldBegin('returnType');
			$xfer += $output->writeString($this->returnType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeString($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnPath !== null) {
			
			$xfer += $output->writeFieldBegin('returnPath');
			$xfer += $output->writeString($this->returnPath);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialType !== null) {
			
			$xfer += $output->writeFieldBegin('specialType');
			$xfer += $output->writeString($this->specialType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
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
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeString($this->invoiceType);
			
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
		
		
		if($this->wareHouse !== null) {
			
			$xfer += $output->writeFieldBegin('wareHouse');
			$xfer += $output->writeString($this->wareHouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipAddriess !== null) {
			
			$xfer += $output->writeFieldBegin('shipAddriess');
			$xfer += $output->writeString($this->shipAddriess);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lfCardId !== null) {
			
			$xfer += $output->writeFieldBegin('lfCardId');
			$xfer += $output->writeString($this->lfCardId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payId !== null) {
			
			$xfer += $output->writeFieldBegin('payId');
			$xfer += $output->writeString($this->payId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentOrderNum !== null) {
			
			$xfer += $output->writeFieldBegin('parentOrderNum');
			$xfer += $output->writeString($this->parentOrderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->smlFlag !== null) {
			
			$xfer += $output->writeFieldBegin('smlFlag');
			$xfer += $output->writeString($this->smlFlag);
			
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
		
		
		if($this->batchName !== null) {
			
			$xfer += $output->writeFieldBegin('batchName');
			$xfer += $output->writeString($this->batchName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reportsFlag !== null) {
			
			$xfer += $output->writeFieldBegin('reportsFlag');
			$xfer += $output->writeString($this->reportsFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundRequestDetailSn !== null) {
			
			$xfer += $output->writeFieldBegin('refundRequestDetailSn');
			$xfer += $output->writeString($this->refundRequestDetailSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->irefundRemark !== null) {
			
			$xfer += $output->writeFieldBegin('irefundRemark');
			$xfer += $output->writeString($this->irefundRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceTable !== null) {
			
			$xfer += $output->writeFieldBegin('sourceTable');
			$xfer += $output->writeString($this->sourceTable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeType !== null) {
			
			$xfer += $output->writeFieldBegin('storeType');
			$xfer += $output->writeString($this->storeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->intGlobalId !== null) {
			
			$xfer += $output->writeFieldBegin('intGlobalId');
			$xfer += $output->writeString($this->intGlobalId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('originalOrderSn');
			$xfer += $output->writeString($this->originalOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->versionNumber !== null) {
			
			$xfer += $output->writeFieldBegin('versionNumber');
			$xfer += $output->writeI32($this->versionNumber);
			
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