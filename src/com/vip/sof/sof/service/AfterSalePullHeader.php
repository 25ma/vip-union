<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSalePullHeader {
	
	static $_TSPEC;
	public $backSn = null;
	public $orderSn = null;
	public $shipToName = null;
	public $shipToAddr = null;
	public $postalCode = null;
	public $shipToCity = null;
	public $shipToState = null;
	public $shipToCountry = null;
	public $shipToTel = null;
	public $customerPhoneNum = null;
	public $remark = null;
	public $b2cWarehouseCode = null;
	public $b2cReturnType = null;
	public $b2cReturnMethod = null;
	public $returnReason = null;
	public $cmdType = null;
	public $b2cReturnClass = null;
	public $isSpecialReturn = null;
	public $transportNo = null;
	public $carrier = null;
	public $carriersCode = null;
	public $transportRemark = null;
	public $storeId = null;
	public $storeSource = null;
	public $b2cSoReturnId = null;
	public $b2cCreateTime = null;
	public $transportSource = null;
	public $afterSaleSn = null;
	public $lbsSubFlag = null;
	public $userRejectFlag = null;
	public $userId = null;
	public $pickingDate = null;
	public $pickingTime = null;
	public $operTime = null;
	public $fastRefundFlag = null;
	public $areaId = null;
	public $qualityProblem = null;
	public $refundInUnpackByDeliveryFetchReturn = null;
	public $shipToNameEncrypt = null;
	public $shipToAddrEncrypt = null;
	public $shipToTelEncrypt = null;
	public $customerPhoneNumEncrypt = null;
	public $sourceType = null;
	public $largeGood = null;
	public $freightBearer = null;
	public $backWarehousePhoneEncrypt = null;
	public $returnBizFlags = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'backSn'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'shipToName'
			),
			4 => array(
			'var' => 'shipToAddr'
			),
			6 => array(
			'var' => 'postalCode'
			),
			7 => array(
			'var' => 'shipToCity'
			),
			8 => array(
			'var' => 'shipToState'
			),
			9 => array(
			'var' => 'shipToCountry'
			),
			10 => array(
			'var' => 'shipToTel'
			),
			11 => array(
			'var' => 'customerPhoneNum'
			),
			12 => array(
			'var' => 'remark'
			),
			13 => array(
			'var' => 'b2cWarehouseCode'
			),
			14 => array(
			'var' => 'b2cReturnType'
			),
			15 => array(
			'var' => 'b2cReturnMethod'
			),
			16 => array(
			'var' => 'returnReason'
			),
			17 => array(
			'var' => 'cmdType'
			),
			18 => array(
			'var' => 'b2cReturnClass'
			),
			19 => array(
			'var' => 'isSpecialReturn'
			),
			20 => array(
			'var' => 'transportNo'
			),
			21 => array(
			'var' => 'carrier'
			),
			22 => array(
			'var' => 'carriersCode'
			),
			23 => array(
			'var' => 'transportRemark'
			),
			24 => array(
			'var' => 'storeId'
			),
			25 => array(
			'var' => 'storeSource'
			),
			26 => array(
			'var' => 'b2cSoReturnId'
			),
			27 => array(
			'var' => 'b2cCreateTime'
			),
			28 => array(
			'var' => 'transportSource'
			),
			29 => array(
			'var' => 'afterSaleSn'
			),
			30 => array(
			'var' => 'lbsSubFlag'
			),
			31 => array(
			'var' => 'userRejectFlag'
			),
			32 => array(
			'var' => 'userId'
			),
			33 => array(
			'var' => 'pickingDate'
			),
			34 => array(
			'var' => 'pickingTime'
			),
			35 => array(
			'var' => 'operTime'
			),
			36 => array(
			'var' => 'fastRefundFlag'
			),
			37 => array(
			'var' => 'areaId'
			),
			38 => array(
			'var' => 'qualityProblem'
			),
			39 => array(
			'var' => 'refundInUnpackByDeliveryFetchReturn'
			),
			40 => array(
			'var' => 'shipToNameEncrypt'
			),
			41 => array(
			'var' => 'shipToAddrEncrypt'
			),
			42 => array(
			'var' => 'shipToTelEncrypt'
			),
			43 => array(
			'var' => 'customerPhoneNumEncrypt'
			),
			44 => array(
			'var' => 'sourceType'
			),
			45 => array(
			'var' => 'largeGood'
			),
			46 => array(
			'var' => 'freightBearer'
			),
			47 => array(
			'var' => 'backWarehousePhoneEncrypt'
			),
			48 => array(
			'var' => 'returnBizFlags'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['backSn'])){
				
				$this->backSn = $vals['backSn'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['shipToName'])){
				
				$this->shipToName = $vals['shipToName'];
			}
			
			
			if (isset($vals['shipToAddr'])){
				
				$this->shipToAddr = $vals['shipToAddr'];
			}
			
			
			if (isset($vals['postalCode'])){
				
				$this->postalCode = $vals['postalCode'];
			}
			
			
			if (isset($vals['shipToCity'])){
				
				$this->shipToCity = $vals['shipToCity'];
			}
			
			
			if (isset($vals['shipToState'])){
				
				$this->shipToState = $vals['shipToState'];
			}
			
			
			if (isset($vals['shipToCountry'])){
				
				$this->shipToCountry = $vals['shipToCountry'];
			}
			
			
			if (isset($vals['shipToTel'])){
				
				$this->shipToTel = $vals['shipToTel'];
			}
			
			
			if (isset($vals['customerPhoneNum'])){
				
				$this->customerPhoneNum = $vals['customerPhoneNum'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['b2cWarehouseCode'])){
				
				$this->b2cWarehouseCode = $vals['b2cWarehouseCode'];
			}
			
			
			if (isset($vals['b2cReturnType'])){
				
				$this->b2cReturnType = $vals['b2cReturnType'];
			}
			
			
			if (isset($vals['b2cReturnMethod'])){
				
				$this->b2cReturnMethod = $vals['b2cReturnMethod'];
			}
			
			
			if (isset($vals['returnReason'])){
				
				$this->returnReason = $vals['returnReason'];
			}
			
			
			if (isset($vals['cmdType'])){
				
				$this->cmdType = $vals['cmdType'];
			}
			
			
			if (isset($vals['b2cReturnClass'])){
				
				$this->b2cReturnClass = $vals['b2cReturnClass'];
			}
			
			
			if (isset($vals['isSpecialReturn'])){
				
				$this->isSpecialReturn = $vals['isSpecialReturn'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['transportRemark'])){
				
				$this->transportRemark = $vals['transportRemark'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['b2cSoReturnId'])){
				
				$this->b2cSoReturnId = $vals['b2cSoReturnId'];
			}
			
			
			if (isset($vals['b2cCreateTime'])){
				
				$this->b2cCreateTime = $vals['b2cCreateTime'];
			}
			
			
			if (isset($vals['transportSource'])){
				
				$this->transportSource = $vals['transportSource'];
			}
			
			
			if (isset($vals['afterSaleSn'])){
				
				$this->afterSaleSn = $vals['afterSaleSn'];
			}
			
			
			if (isset($vals['lbsSubFlag'])){
				
				$this->lbsSubFlag = $vals['lbsSubFlag'];
			}
			
			
			if (isset($vals['userRejectFlag'])){
				
				$this->userRejectFlag = $vals['userRejectFlag'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['pickingDate'])){
				
				$this->pickingDate = $vals['pickingDate'];
			}
			
			
			if (isset($vals['pickingTime'])){
				
				$this->pickingTime = $vals['pickingTime'];
			}
			
			
			if (isset($vals['operTime'])){
				
				$this->operTime = $vals['operTime'];
			}
			
			
			if (isset($vals['fastRefundFlag'])){
				
				$this->fastRefundFlag = $vals['fastRefundFlag'];
			}
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['qualityProblem'])){
				
				$this->qualityProblem = $vals['qualityProblem'];
			}
			
			
			if (isset($vals['refundInUnpackByDeliveryFetchReturn'])){
				
				$this->refundInUnpackByDeliveryFetchReturn = $vals['refundInUnpackByDeliveryFetchReturn'];
			}
			
			
			if (isset($vals['shipToNameEncrypt'])){
				
				$this->shipToNameEncrypt = $vals['shipToNameEncrypt'];
			}
			
			
			if (isset($vals['shipToAddrEncrypt'])){
				
				$this->shipToAddrEncrypt = $vals['shipToAddrEncrypt'];
			}
			
			
			if (isset($vals['shipToTelEncrypt'])){
				
				$this->shipToTelEncrypt = $vals['shipToTelEncrypt'];
			}
			
			
			if (isset($vals['customerPhoneNumEncrypt'])){
				
				$this->customerPhoneNumEncrypt = $vals['customerPhoneNumEncrypt'];
			}
			
			
			if (isset($vals['sourceType'])){
				
				$this->sourceType = $vals['sourceType'];
			}
			
			
			if (isset($vals['largeGood'])){
				
				$this->largeGood = $vals['largeGood'];
			}
			
			
			if (isset($vals['freightBearer'])){
				
				$this->freightBearer = $vals['freightBearer'];
			}
			
			
			if (isset($vals['backWarehousePhoneEncrypt'])){
				
				$this->backWarehousePhoneEncrypt = $vals['backWarehousePhoneEncrypt'];
			}
			
			
			if (isset($vals['returnBizFlags'])){
				
				$this->returnBizFlags = $vals['returnBizFlags'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSalePullHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("backSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backSn);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("shipToName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipToName);
				
			}
			
			
			
			
			if ("shipToAddr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipToAddr);
				
			}
			
			
			
			
			if ("postalCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postalCode);
				
			}
			
			
			
			
			if ("shipToCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipToCity);
				
			}
			
			
			
			
			if ("shipToState" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipToState);
				
			}
			
			
			
			
			if ("shipToCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipToCountry);
				
			}
			
			
			
			
			if ("shipToTel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipToTel);
				
			}
			
			
			
			
			if ("customerPhoneNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerPhoneNum);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("b2cWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->b2cWarehouseCode);
				
			}
			
			
			
			
			if ("b2cReturnType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->b2cReturnType); 
				
			}
			
			
			
			
			if ("b2cReturnMethod" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->b2cReturnMethod); 
				
			}
			
			
			
			
			if ("returnReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnReason);
				
			}
			
			
			
			
			if ("cmdType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cmdType);
				
			}
			
			
			
			
			if ("b2cReturnClass" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->b2cReturnClass); 
				
			}
			
			
			
			
			if ("isSpecialReturn" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isSpecialReturn); 
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("transportRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportRemark);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->storeSource); 
				
			}
			
			
			
			
			if ("b2cSoReturnId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->b2cSoReturnId); 
				
			}
			
			
			
			
			if ("b2cCreateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->b2cCreateTime);
				
			}
			
			
			
			
			if ("transportSource" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transportSource); 
				
			}
			
			
			
			
			if ("afterSaleSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->afterSaleSn);
				
			}
			
			
			
			
			if ("lbsSubFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->lbsSubFlag); 
				
			}
			
			
			
			
			if ("userRejectFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->userRejectFlag); 
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("pickingDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickingDate);
				
			}
			
			
			
			
			if ("pickingTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickingTime);
				
			}
			
			
			
			
			if ("operTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->operTime); 
				
			}
			
			
			
			
			if ("fastRefundFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->fastRefundFlag); 
				
			}
			
			
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("qualityProblem" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qualityProblem); 
				
			}
			
			
			
			
			if ("refundInUnpackByDeliveryFetchReturn" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->refundInUnpackByDeliveryFetchReturn); 
				
			}
			
			
			
			
			if ("shipToNameEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipToNameEncrypt);
				
			}
			
			
			
			
			if ("shipToAddrEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipToAddrEncrypt);
				
			}
			
			
			
			
			if ("shipToTelEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipToTelEncrypt);
				
			}
			
			
			
			
			if ("customerPhoneNumEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerPhoneNumEncrypt);
				
			}
			
			
			
			
			if ("sourceType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sourceType); 
				
			}
			
			
			
			
			if ("largeGood" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->largeGood); 
				
			}
			
			
			
			
			if ("freightBearer" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->freightBearer); 
				
			}
			
			
			
			
			if ("backWarehousePhoneEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backWarehousePhoneEncrypt);
				
			}
			
			
			
			
			if ("returnBizFlags" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->returnBizFlags); 
				
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
		
		if($this->backSn !== null) {
			
			$xfer += $output->writeFieldBegin('backSn');
			$xfer += $output->writeString($this->backSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipToName !== null) {
			
			$xfer += $output->writeFieldBegin('shipToName');
			$xfer += $output->writeString($this->shipToName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipToAddr !== null) {
			
			$xfer += $output->writeFieldBegin('shipToAddr');
			$xfer += $output->writeString($this->shipToAddr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postalCode !== null) {
			
			$xfer += $output->writeFieldBegin('postalCode');
			$xfer += $output->writeString($this->postalCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipToCity !== null) {
			
			$xfer += $output->writeFieldBegin('shipToCity');
			$xfer += $output->writeString($this->shipToCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipToState !== null) {
			
			$xfer += $output->writeFieldBegin('shipToState');
			$xfer += $output->writeString($this->shipToState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipToCountry !== null) {
			
			$xfer += $output->writeFieldBegin('shipToCountry');
			$xfer += $output->writeString($this->shipToCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipToTel !== null) {
			
			$xfer += $output->writeFieldBegin('shipToTel');
			$xfer += $output->writeString($this->shipToTel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerPhoneNum !== null) {
			
			$xfer += $output->writeFieldBegin('customerPhoneNum');
			$xfer += $output->writeString($this->customerPhoneNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cWarehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('b2cWarehouseCode');
			$xfer += $output->writeString($this->b2cWarehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cReturnType !== null) {
			
			$xfer += $output->writeFieldBegin('b2cReturnType');
			$xfer += $output->writeByte($this->b2cReturnType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cReturnMethod !== null) {
			
			$xfer += $output->writeFieldBegin('b2cReturnMethod');
			$xfer += $output->writeByte($this->b2cReturnMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnReason !== null) {
			
			$xfer += $output->writeFieldBegin('returnReason');
			$xfer += $output->writeString($this->returnReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cmdType !== null) {
			
			$xfer += $output->writeFieldBegin('cmdType');
			$xfer += $output->writeString($this->cmdType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cReturnClass !== null) {
			
			$xfer += $output->writeFieldBegin('b2cReturnClass');
			$xfer += $output->writeByte($this->b2cReturnClass);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSpecialReturn !== null) {
			
			$xfer += $output->writeFieldBegin('isSpecialReturn');
			$xfer += $output->writeByte($this->isSpecialReturn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportRemark !== null) {
			
			$xfer += $output->writeFieldBegin('transportRemark');
			$xfer += $output->writeString($this->transportRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSource !== null) {
			
			$xfer += $output->writeFieldBegin('storeSource');
			$xfer += $output->writeByte($this->storeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cSoReturnId !== null) {
			
			$xfer += $output->writeFieldBegin('b2cSoReturnId');
			$xfer += $output->writeI32($this->b2cSoReturnId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cCreateTime !== null) {
			
			$xfer += $output->writeFieldBegin('b2cCreateTime');
			$xfer += $output->writeString($this->b2cCreateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportSource !== null) {
			
			$xfer += $output->writeFieldBegin('transportSource');
			$xfer += $output->writeByte($this->transportSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleSn !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleSn');
			$xfer += $output->writeString($this->afterSaleSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lbsSubFlag !== null) {
			
			$xfer += $output->writeFieldBegin('lbsSubFlag');
			$xfer += $output->writeByte($this->lbsSubFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userRejectFlag !== null) {
			
			$xfer += $output->writeFieldBegin('userRejectFlag');
			$xfer += $output->writeByte($this->userRejectFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pickingDate !== null) {
			
			$xfer += $output->writeFieldBegin('pickingDate');
			$xfer += $output->writeString($this->pickingDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pickingTime !== null) {
			
			$xfer += $output->writeFieldBegin('pickingTime');
			$xfer += $output->writeString($this->pickingTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operTime !== null) {
			
			$xfer += $output->writeFieldBegin('operTime');
			$xfer += $output->writeI64($this->operTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fastRefundFlag !== null) {
			
			$xfer += $output->writeFieldBegin('fastRefundFlag');
			$xfer += $output->writeByte($this->fastRefundFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qualityProblem !== null) {
			
			$xfer += $output->writeFieldBegin('qualityProblem');
			$xfer += $output->writeI32($this->qualityProblem);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundInUnpackByDeliveryFetchReturn !== null) {
			
			$xfer += $output->writeFieldBegin('refundInUnpackByDeliveryFetchReturn');
			$xfer += $output->writeByte($this->refundInUnpackByDeliveryFetchReturn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipToNameEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('shipToNameEncrypt');
			$xfer += $output->writeString($this->shipToNameEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipToAddrEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('shipToAddrEncrypt');
			$xfer += $output->writeString($this->shipToAddrEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipToTelEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('shipToTelEncrypt');
			$xfer += $output->writeString($this->shipToTelEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerPhoneNumEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('customerPhoneNumEncrypt');
			$xfer += $output->writeString($this->customerPhoneNumEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceType !== null) {
			
			$xfer += $output->writeFieldBegin('sourceType');
			$xfer += $output->writeI32($this->sourceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->largeGood !== null) {
			
			$xfer += $output->writeFieldBegin('largeGood');
			$xfer += $output->writeI32($this->largeGood);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->freightBearer !== null) {
			
			$xfer += $output->writeFieldBegin('freightBearer');
			$xfer += $output->writeI32($this->freightBearer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backWarehousePhoneEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('backWarehousePhoneEncrypt');
			$xfer += $output->writeString($this->backWarehousePhoneEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnBizFlags !== null) {
			
			$xfer += $output->writeFieldBegin('returnBizFlags');
			$xfer += $output->writeI64($this->returnBizFlags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>