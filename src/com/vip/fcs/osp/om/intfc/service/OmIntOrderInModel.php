<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmIntOrderInModel {
	
	static $_TSPEC;
	public $id = null;
	public $globalId = null;
	public $dbNo = null;
	public $sourceName = null;
	public $orderEbsScenario = null;
	public $headerId = null;
	public $orderNum = null;
	public $orderSn = null;
	public $ctReference = null;
	public $userId = null;
	public $orderAddTime = null;
	public $specialType = null;
	public $warehouse = null;
	public $channel = null;
	public $saleSite = null;
	public $carrierName = null;
	public $transportNumber = null;
	public $carriageAmount = null;
	public $deliveryAmount = null;
	public $orderAmount = null;
	public $diffAmount = null;
	public $invoiceType = null;
	public $invoiceTitle = null;
	public $invoiceAmount = null;
	public $currency = null;
	public $discountRate = null;
	public $detailedAddr = null;
	public $orderExtFlags = null;
	public $transTime = null;
	public $storeId = null;
	public $storeSource = null;
	public $extOrderSn = null;
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
	public $channelCoopId = null;
	public $invoiceDeductMoney = null;
	public $commodityTax = null;
	public $serviceNo = null;
	public $carriageApplyCancelReason = null;
	public $mallCode = null;
	public $rewardedPoint = null;
	public $eximType = null;
	
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
			'var' => 'orderEbsScenario'
			),
			6 => array(
			'var' => 'headerId'
			),
			7 => array(
			'var' => 'orderNum'
			),
			8 => array(
			'var' => 'orderSn'
			),
			9 => array(
			'var' => 'ctReference'
			),
			10 => array(
			'var' => 'userId'
			),
			11 => array(
			'var' => 'orderAddTime'
			),
			12 => array(
			'var' => 'specialType'
			),
			13 => array(
			'var' => 'warehouse'
			),
			14 => array(
			'var' => 'channel'
			),
			15 => array(
			'var' => 'saleSite'
			),
			16 => array(
			'var' => 'carrierName'
			),
			17 => array(
			'var' => 'transportNumber'
			),
			18 => array(
			'var' => 'carriageAmount'
			),
			19 => array(
			'var' => 'deliveryAmount'
			),
			20 => array(
			'var' => 'orderAmount'
			),
			21 => array(
			'var' => 'diffAmount'
			),
			22 => array(
			'var' => 'invoiceType'
			),
			23 => array(
			'var' => 'invoiceTitle'
			),
			24 => array(
			'var' => 'invoiceAmount'
			),
			25 => array(
			'var' => 'currency'
			),
			26 => array(
			'var' => 'discountRate'
			),
			27 => array(
			'var' => 'detailedAddr'
			),
			28 => array(
			'var' => 'orderExtFlags'
			),
			29 => array(
			'var' => 'transTime'
			),
			30 => array(
			'var' => 'storeId'
			),
			31 => array(
			'var' => 'storeSource'
			),
			32 => array(
			'var' => 'extOrderSn'
			),
			33 => array(
			'var' => 'processFlag'
			),
			34 => array(
			'var' => 'errorMessage'
			),
			35 => array(
			'var' => 'versionNumber'
			),
			36 => array(
			'var' => 'createTime'
			),
			37 => array(
			'var' => 'createdBy'
			),
			38 => array(
			'var' => 'updateTime'
			),
			39 => array(
			'var' => 'updatedBy'
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
			'var' => 'isDeleted'
			),
			53 => array(
			'var' => 'channelStoreId'
			),
			54 => array(
			'var' => 'channelCoopId'
			),
			55 => array(
			'var' => 'invoiceDeductMoney'
			),
			56 => array(
			'var' => 'commodityTax'
			),
			57 => array(
			'var' => 'serviceNo'
			),
			58 => array(
			'var' => 'carriageApplyCancelReason'
			),
			59 => array(
			'var' => 'mallCode'
			),
			60 => array(
			'var' => 'rewardedPoint'
			),
			61 => array(
			'var' => 'eximType'
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
			
			
			if (isset($vals['orderEbsScenario'])){
				
				$this->orderEbsScenario = $vals['orderEbsScenario'];
			}
			
			
			if (isset($vals['headerId'])){
				
				$this->headerId = $vals['headerId'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['ctReference'])){
				
				$this->ctReference = $vals['ctReference'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['orderAddTime'])){
				
				$this->orderAddTime = $vals['orderAddTime'];
			}
			
			
			if (isset($vals['specialType'])){
				
				$this->specialType = $vals['specialType'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['saleSite'])){
				
				$this->saleSite = $vals['saleSite'];
			}
			
			
			if (isset($vals['carrierName'])){
				
				$this->carrierName = $vals['carrierName'];
			}
			
			
			if (isset($vals['transportNumber'])){
				
				$this->transportNumber = $vals['transportNumber'];
			}
			
			
			if (isset($vals['carriageAmount'])){
				
				$this->carriageAmount = $vals['carriageAmount'];
			}
			
			
			if (isset($vals['deliveryAmount'])){
				
				$this->deliveryAmount = $vals['deliveryAmount'];
			}
			
			
			if (isset($vals['orderAmount'])){
				
				$this->orderAmount = $vals['orderAmount'];
			}
			
			
			if (isset($vals['diffAmount'])){
				
				$this->diffAmount = $vals['diffAmount'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['invoiceTitle'])){
				
				$this->invoiceTitle = $vals['invoiceTitle'];
			}
			
			
			if (isset($vals['invoiceAmount'])){
				
				$this->invoiceAmount = $vals['invoiceAmount'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['discountRate'])){
				
				$this->discountRate = $vals['discountRate'];
			}
			
			
			if (isset($vals['detailedAddr'])){
				
				$this->detailedAddr = $vals['detailedAddr'];
			}
			
			
			if (isset($vals['orderExtFlags'])){
				
				$this->orderExtFlags = $vals['orderExtFlags'];
			}
			
			
			if (isset($vals['transTime'])){
				
				$this->transTime = $vals['transTime'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['extOrderSn'])){
				
				$this->extOrderSn = $vals['extOrderSn'];
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
			
			
			if (isset($vals['channelCoopId'])){
				
				$this->channelCoopId = $vals['channelCoopId'];
			}
			
			
			if (isset($vals['invoiceDeductMoney'])){
				
				$this->invoiceDeductMoney = $vals['invoiceDeductMoney'];
			}
			
			
			if (isset($vals['commodityTax'])){
				
				$this->commodityTax = $vals['commodityTax'];
			}
			
			
			if (isset($vals['serviceNo'])){
				
				$this->serviceNo = $vals['serviceNo'];
			}
			
			
			if (isset($vals['carriageApplyCancelReason'])){
				
				$this->carriageApplyCancelReason = $vals['carriageApplyCancelReason'];
			}
			
			
			if (isset($vals['mallCode'])){
				
				$this->mallCode = $vals['mallCode'];
			}
			
			
			if (isset($vals['rewardedPoint'])){
				
				$this->rewardedPoint = $vals['rewardedPoint'];
			}
			
			
			if (isset($vals['eximType'])){
				
				$this->eximType = $vals['eximType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmIntOrderInModel';
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
			
			
			
			
			if ("orderEbsScenario" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderEbsScenario);
				
			}
			
			
			
			
			if ("headerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->headerId); 
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("ctReference" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ctReference);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("orderAddTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderAddTime); 
				
			}
			
			
			
			
			if ("specialType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialType);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("saleSite" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleSite);
				
			}
			
			
			
			
			if ("carrierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierName);
				
			}
			
			
			
			
			if ("transportNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNumber);
				
			}
			
			
			
			
			if ("carriageAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriageAmount);
				
			}
			
			
			
			
			if ("deliveryAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryAmount);
				
			}
			
			
			
			
			if ("orderAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderAmount);
				
			}
			
			
			
			
			if ("diffAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->diffAmount);
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceType);
				
			}
			
			
			
			
			if ("invoiceTitle" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceTitle);
				
			}
			
			
			
			
			if ("invoiceAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceAmount);
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency);
				
			}
			
			
			
			
			if ("discountRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountRate);
				
			}
			
			
			
			
			if ("detailedAddr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailedAddr);
				
			}
			
			
			
			
			if ("orderExtFlags" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderExtFlags);
				
			}
			
			
			
			
			if ("transTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transTime); 
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->storeSource); 
				
			}
			
			
			
			
			if ("extOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extOrderSn);
				
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
			
			
			
			
			if ("channelCoopId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelCoopId);
				
			}
			
			
			
			
			if ("invoiceDeductMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceDeductMoney);
				
			}
			
			
			
			
			if ("commodityTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commodityTax);
				
			}
			
			
			
			
			if ("serviceNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->serviceNo); 
				
			}
			
			
			
			
			if ("carriageApplyCancelReason" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->carriageApplyCancelReason); 
				
			}
			
			
			
			
			if ("mallCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mallCode);
				
			}
			
			
			
			
			if ("rewardedPoint" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rewardedPoint);
				
			}
			
			
			
			
			if ("eximType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->eximType);
				
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
		
		
		if($this->orderEbsScenario !== null) {
			
			$xfer += $output->writeFieldBegin('orderEbsScenario');
			$xfer += $output->writeString($this->orderEbsScenario);
			
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
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
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
		
		
		if($this->orderAddTime !== null) {
			
			$xfer += $output->writeFieldBegin('orderAddTime');
			$xfer += $output->writeI64($this->orderAddTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialType !== null) {
			
			$xfer += $output->writeFieldBegin('specialType');
			$xfer += $output->writeString($this->specialType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleSite !== null) {
			
			$xfer += $output->writeFieldBegin('saleSite');
			$xfer += $output->writeString($this->saleSite);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierName !== null) {
			
			$xfer += $output->writeFieldBegin('carrierName');
			$xfer += $output->writeString($this->carrierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNumber !== null) {
			
			$xfer += $output->writeFieldBegin('transportNumber');
			$xfer += $output->writeString($this->transportNumber);
			
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
		
		
		if($this->orderAmount !== null) {
			
			$xfer += $output->writeFieldBegin('orderAmount');
			$xfer += $output->writeString($this->orderAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diffAmount !== null) {
			
			$xfer += $output->writeFieldBegin('diffAmount');
			$xfer += $output->writeString($this->diffAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeString($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceTitle !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceTitle');
			$xfer += $output->writeString($this->invoiceTitle);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceAmount !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceAmount');
			$xfer += $output->writeString($this->invoiceAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currency !== null) {
			
			$xfer += $output->writeFieldBegin('currency');
			$xfer += $output->writeString($this->currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountRate !== null) {
			
			$xfer += $output->writeFieldBegin('discountRate');
			$xfer += $output->writeString($this->discountRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailedAddr !== null) {
			
			$xfer += $output->writeFieldBegin('detailedAddr');
			$xfer += $output->writeString($this->detailedAddr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderExtFlags !== null) {
			
			$xfer += $output->writeFieldBegin('orderExtFlags');
			$xfer += $output->writeString($this->orderExtFlags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transTime !== null) {
			
			$xfer += $output->writeFieldBegin('transTime');
			$xfer += $output->writeI64($this->transTime);
			
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
		
		
		if($this->extOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('extOrderSn');
			$xfer += $output->writeString($this->extOrderSn);
			
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
		
		
		if($this->channelCoopId !== null) {
			
			$xfer += $output->writeFieldBegin('channelCoopId');
			$xfer += $output->writeString($this->channelCoopId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceDeductMoney !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDeductMoney');
			$xfer += $output->writeString($this->invoiceDeductMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commodityTax !== null) {
			
			$xfer += $output->writeFieldBegin('commodityTax');
			$xfer += $output->writeString($this->commodityTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serviceNo !== null) {
			
			$xfer += $output->writeFieldBegin('serviceNo');
			$xfer += $output->writeI64($this->serviceNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriageApplyCancelReason !== null) {
			
			$xfer += $output->writeFieldBegin('carriageApplyCancelReason');
			$xfer += $output->writeI64($this->carriageApplyCancelReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mallCode !== null) {
			
			$xfer += $output->writeFieldBegin('mallCode');
			$xfer += $output->writeString($this->mallCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rewardedPoint !== null) {
			
			$xfer += $output->writeFieldBegin('rewardedPoint');
			$xfer += $output->writeString($this->rewardedPoint);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eximType !== null) {
			
			$xfer += $output->writeFieldBegin('eximType');
			$xfer += $output->writeString($this->eximType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>