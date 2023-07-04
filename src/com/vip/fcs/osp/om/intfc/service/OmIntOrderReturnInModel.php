<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmIntOrderReturnInModel {
	
	static $_TSPEC;
	public $id = null;
	public $globalId = null;
	public $dbNo = null;
	public $headerId = null;
	public $sourceName = null;
	public $orderScenario = null;
	public $orderReturnApplyId = null;
	public $returnDate = null;
	public $returnClass = null;
	public $returnWarehouse = null;
	public $orderSn = null;
	public $orderNum = null;
	public $ctReference = null;
	public $userId = null;
	public $storeId = null;
	public $storeSource = null;
	public $refundAmount = null;
	public $carriageAmount = null;
	public $deliveryAmount = null;
	public $adjustAmount = null;
	public $diffAmount = null;
	public $carrierName = null;
	public $transTime = null;
	public $detailedStatus = null;
	public $detailedMessage = null;
	public $processDate = null;
	public $processFlag = null;
	public $errorMessage = null;
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
	public $channelStoreId = null;
	public $specialType = null;
	public $channel = null;
	public $channelCoopId = null;
	public $vipPaidBackCarriage = null;
	public $noNeedRefundAmount = null;
	public $abnormalAmount = null;
	public $customerRefundSubsidies = null;
	public $isPremium = null;
	public $carriagePayWay = null;
	public $extAppId = null;
	public $withdrawRewardedPoint = null;
	
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
			'var' => 'orderScenario'
			),
			7 => array(
			'var' => 'orderReturnApplyId'
			),
			8 => array(
			'var' => 'returnDate'
			),
			9 => array(
			'var' => 'returnClass'
			),
			10 => array(
			'var' => 'returnWarehouse'
			),
			11 => array(
			'var' => 'orderSn'
			),
			12 => array(
			'var' => 'orderNum'
			),
			13 => array(
			'var' => 'ctReference'
			),
			14 => array(
			'var' => 'userId'
			),
			15 => array(
			'var' => 'storeId'
			),
			16 => array(
			'var' => 'storeSource'
			),
			17 => array(
			'var' => 'refundAmount'
			),
			18 => array(
			'var' => 'carriageAmount'
			),
			19 => array(
			'var' => 'deliveryAmount'
			),
			20 => array(
			'var' => 'adjustAmount'
			),
			21 => array(
			'var' => 'diffAmount'
			),
			22 => array(
			'var' => 'carrierName'
			),
			23 => array(
			'var' => 'transTime'
			),
			24 => array(
			'var' => 'detailedStatus'
			),
			25 => array(
			'var' => 'detailedMessage'
			),
			26 => array(
			'var' => 'processDate'
			),
			27 => array(
			'var' => 'processFlag'
			),
			28 => array(
			'var' => 'errorMessage'
			),
			29 => array(
			'var' => 'versionNumber'
			),
			30 => array(
			'var' => 'createTime'
			),
			31 => array(
			'var' => 'createdBy'
			),
			32 => array(
			'var' => 'updateTime'
			),
			33 => array(
			'var' => 'updatedBy'
			),
			34 => array(
			'var' => 'requestId'
			),
			35 => array(
			'var' => 'attributeCategory'
			),
			36 => array(
			'var' => 'attribute1'
			),
			37 => array(
			'var' => 'attribute2'
			),
			38 => array(
			'var' => 'attribute3'
			),
			39 => array(
			'var' => 'attribute4'
			),
			40 => array(
			'var' => 'attribute5'
			),
			41 => array(
			'var' => 'attribute6'
			),
			42 => array(
			'var' => 'attribute7'
			),
			43 => array(
			'var' => 'attribute8'
			),
			44 => array(
			'var' => 'attribute9'
			),
			45 => array(
			'var' => 'attribute10'
			),
			46 => array(
			'var' => 'isDeleted'
			),
			47 => array(
			'var' => 'channelStoreId'
			),
			48 => array(
			'var' => 'specialType'
			),
			49 => array(
			'var' => 'channel'
			),
			50 => array(
			'var' => 'channelCoopId'
			),
			51 => array(
			'var' => 'vipPaidBackCarriage'
			),
			52 => array(
			'var' => 'noNeedRefundAmount'
			),
			53 => array(
			'var' => 'abnormalAmount'
			),
			54 => array(
			'var' => 'customerRefundSubsidies'
			),
			55 => array(
			'var' => 'isPremium'
			),
			56 => array(
			'var' => 'carriagePayWay'
			),
			57 => array(
			'var' => 'extAppId'
			),
			58 => array(
			'var' => 'withdrawRewardedPoint'
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
			
			
			if (isset($vals['orderScenario'])){
				
				$this->orderScenario = $vals['orderScenario'];
			}
			
			
			if (isset($vals['orderReturnApplyId'])){
				
				$this->orderReturnApplyId = $vals['orderReturnApplyId'];
			}
			
			
			if (isset($vals['returnDate'])){
				
				$this->returnDate = $vals['returnDate'];
			}
			
			
			if (isset($vals['returnClass'])){
				
				$this->returnClass = $vals['returnClass'];
			}
			
			
			if (isset($vals['returnWarehouse'])){
				
				$this->returnWarehouse = $vals['returnWarehouse'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['ctReference'])){
				
				$this->ctReference = $vals['ctReference'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['refundAmount'])){
				
				$this->refundAmount = $vals['refundAmount'];
			}
			
			
			if (isset($vals['carriageAmount'])){
				
				$this->carriageAmount = $vals['carriageAmount'];
			}
			
			
			if (isset($vals['deliveryAmount'])){
				
				$this->deliveryAmount = $vals['deliveryAmount'];
			}
			
			
			if (isset($vals['adjustAmount'])){
				
				$this->adjustAmount = $vals['adjustAmount'];
			}
			
			
			if (isset($vals['diffAmount'])){
				
				$this->diffAmount = $vals['diffAmount'];
			}
			
			
			if (isset($vals['carrierName'])){
				
				$this->carrierName = $vals['carrierName'];
			}
			
			
			if (isset($vals['transTime'])){
				
				$this->transTime = $vals['transTime'];
			}
			
			
			if (isset($vals['detailedStatus'])){
				
				$this->detailedStatus = $vals['detailedStatus'];
			}
			
			
			if (isset($vals['detailedMessage'])){
				
				$this->detailedMessage = $vals['detailedMessage'];
			}
			
			
			if (isset($vals['processDate'])){
				
				$this->processDate = $vals['processDate'];
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
			
			
			if (isset($vals['channelStoreId'])){
				
				$this->channelStoreId = $vals['channelStoreId'];
			}
			
			
			if (isset($vals['specialType'])){
				
				$this->specialType = $vals['specialType'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['channelCoopId'])){
				
				$this->channelCoopId = $vals['channelCoopId'];
			}
			
			
			if (isset($vals['vipPaidBackCarriage'])){
				
				$this->vipPaidBackCarriage = $vals['vipPaidBackCarriage'];
			}
			
			
			if (isset($vals['noNeedRefundAmount'])){
				
				$this->noNeedRefundAmount = $vals['noNeedRefundAmount'];
			}
			
			
			if (isset($vals['abnormalAmount'])){
				
				$this->abnormalAmount = $vals['abnormalAmount'];
			}
			
			
			if (isset($vals['customerRefundSubsidies'])){
				
				$this->customerRefundSubsidies = $vals['customerRefundSubsidies'];
			}
			
			
			if (isset($vals['isPremium'])){
				
				$this->isPremium = $vals['isPremium'];
			}
			
			
			if (isset($vals['carriagePayWay'])){
				
				$this->carriagePayWay = $vals['carriagePayWay'];
			}
			
			
			if (isset($vals['extAppId'])){
				
				$this->extAppId = $vals['extAppId'];
			}
			
			
			if (isset($vals['withdrawRewardedPoint'])){
				
				$this->withdrawRewardedPoint = $vals['withdrawRewardedPoint'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmIntOrderReturnInModel';
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
			
			
			
			
			if ("orderScenario" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderScenario);
				
			}
			
			
			
			
			if ("orderReturnApplyId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderReturnApplyId);
				
			}
			
			
			
			
			if ("returnDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->returnDate); 
				
			}
			
			
			
			
			if ("returnClass" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnClass);
				
			}
			
			
			
			
			if ("returnWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnWarehouse);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("ctReference" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ctReference);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->storeSource); 
				
			}
			
			
			
			
			if ("refundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundAmount);
				
			}
			
			
			
			
			if ("carriageAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriageAmount);
				
			}
			
			
			
			
			if ("deliveryAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryAmount);
				
			}
			
			
			
			
			if ("adjustAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->adjustAmount);
				
			}
			
			
			
			
			if ("diffAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->diffAmount);
				
			}
			
			
			
			
			if ("carrierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierName);
				
			}
			
			
			
			
			if ("transTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transTime); 
				
			}
			
			
			
			
			if ("detailedStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailedStatus);
				
			}
			
			
			
			
			if ("detailedMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailedMessage);
				
			}
			
			
			
			
			if ("processDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->processDate); 
				
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
			
			
			
			
			if ("channelStoreId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelStoreId);
				
			}
			
			
			
			
			if ("specialType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialType);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("channelCoopId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelCoopId);
				
			}
			
			
			
			
			if ("vipPaidBackCarriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipPaidBackCarriage);
				
			}
			
			
			
			
			if ("noNeedRefundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->noNeedRefundAmount);
				
			}
			
			
			
			
			if ("abnormalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->abnormalAmount);
				
			}
			
			
			
			
			if ("customerRefundSubsidies" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerRefundSubsidies);
				
			}
			
			
			
			
			if ("isPremium" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->isPremium); 
				
			}
			
			
			
			
			if ("carriagePayWay" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->carriagePayWay); 
				
			}
			
			
			
			
			if ("extAppId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extAppId);
				
			}
			
			
			
			
			if ("withdrawRewardedPoint" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->withdrawRewardedPoint);
				
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
		
		
		if($this->orderScenario !== null) {
			
			$xfer += $output->writeFieldBegin('orderScenario');
			$xfer += $output->writeString($this->orderScenario);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderReturnApplyId !== null) {
			
			$xfer += $output->writeFieldBegin('orderReturnApplyId');
			$xfer += $output->writeString($this->orderReturnApplyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnDate !== null) {
			
			$xfer += $output->writeFieldBegin('returnDate');
			$xfer += $output->writeI64($this->returnDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnClass !== null) {
			
			$xfer += $output->writeFieldBegin('returnClass');
			$xfer += $output->writeString($this->returnClass);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('returnWarehouse');
			$xfer += $output->writeString($this->returnWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
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
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSource !== null) {
			
			$xfer += $output->writeFieldBegin('storeSource');
			$xfer += $output->writeI64($this->storeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('refundAmount');
			$xfer += $output->writeString($this->refundAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriageAmount !== null) {
			
			$xfer += $output->writeFieldBegin('carriageAmount');
			$xfer += $output->writeString($this->carriageAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryAmount !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryAmount');
			$xfer += $output->writeString($this->deliveryAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adjustAmount !== null) {
			
			$xfer += $output->writeFieldBegin('adjustAmount');
			$xfer += $output->writeString($this->adjustAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diffAmount !== null) {
			
			$xfer += $output->writeFieldBegin('diffAmount');
			$xfer += $output->writeString($this->diffAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierName !== null) {
			
			$xfer += $output->writeFieldBegin('carrierName');
			$xfer += $output->writeString($this->carrierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transTime !== null) {
			
			$xfer += $output->writeFieldBegin('transTime');
			$xfer += $output->writeI64($this->transTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailedStatus !== null) {
			
			$xfer += $output->writeFieldBegin('detailedStatus');
			$xfer += $output->writeString($this->detailedStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailedMessage !== null) {
			
			$xfer += $output->writeFieldBegin('detailedMessage');
			$xfer += $output->writeString($this->detailedMessage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processDate !== null) {
			
			$xfer += $output->writeFieldBegin('processDate');
			$xfer += $output->writeI64($this->processDate);
			
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
		
		
		if($this->channelStoreId !== null) {
			
			$xfer += $output->writeFieldBegin('channelStoreId');
			$xfer += $output->writeString($this->channelStoreId);
			
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
		
		
		if($this->channelCoopId !== null) {
			
			$xfer += $output->writeFieldBegin('channelCoopId');
			$xfer += $output->writeString($this->channelCoopId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipPaidBackCarriage !== null) {
			
			$xfer += $output->writeFieldBegin('vipPaidBackCarriage');
			$xfer += $output->writeString($this->vipPaidBackCarriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->noNeedRefundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('noNeedRefundAmount');
			$xfer += $output->writeString($this->noNeedRefundAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->abnormalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('abnormalAmount');
			$xfer += $output->writeString($this->abnormalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerRefundSubsidies !== null) {
			
			$xfer += $output->writeFieldBegin('customerRefundSubsidies');
			$xfer += $output->writeString($this->customerRefundSubsidies);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPremium !== null) {
			
			$xfer += $output->writeFieldBegin('isPremium');
			$xfer += $output->writeI64($this->isPremium);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriagePayWay !== null) {
			
			$xfer += $output->writeFieldBegin('carriagePayWay');
			$xfer += $output->writeI64($this->carriagePayWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extAppId !== null) {
			
			$xfer += $output->writeFieldBegin('extAppId');
			$xfer += $output->writeString($this->extAppId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->withdrawRewardedPoint !== null) {
			
			$xfer += $output->writeFieldBegin('withdrawRewardedPoint');
			$xfer += $output->writeString($this->withdrawRewardedPoint);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>