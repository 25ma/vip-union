<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ar\intfc\service;

class ArIntTrxhInModel {
	
	static $_TSPEC;
	public $id = null;
	public $globalId = null;
	public $dbNo = null;
	public $batchName = null;
	public $groupId = null;
	public $trxId = null;
	public $sourceName = null;
	public $sourceOu = null;
	public $ouName = null;
	public $cttType = null;
	public $orderId = null;
	public $orderNum = null;
	public $trxNumber = null;
	public $ctReference = null;
	public $trxDate = null;
	public $shipDate = null;
	public $glDate = null;
	public $payType = null;
	public $shipper = null;
	public $amount = null;
	public $specialType = null;
	public $channel = null;
	public $invoiceType = null;
	public $shipAddress = null;
	public $currencyCode = null;
	public $exchangeType = null;
	public $exchangeRate = null;
	public $exchangeDate = null;
	public $sourceCustomer = null;
	public $sourceTable = null;
	public $cancelFlag = null;
	public $accountFlag = null;
	public $accountMessage = null;
	public $processFlag = null;
	public $errorMessage = null;
	public $invoiceNum = null;
	public $invoiceDate = null;
	public $vcardReturnError = null;
	public $vendorCommission = null;
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
	public $commonFlag = null;
	public $storeId = null;
	public $storeSource = null;
	public $extOrderSn = null;
	public $invoiceDeductMoney = null;
	public $returnApplyId = null;
	public $orderExtFlags = null;
	public $createTime = null;
	public $createdBy = null;
	public $updateTime = null;
	public $updatedBy = null;
	public $isDeleted = null;
	public $arIntTrxlInModelList = null;
	
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
			'var' => 'batchName'
			),
			5 => array(
			'var' => 'groupId'
			),
			6 => array(
			'var' => 'trxId'
			),
			7 => array(
			'var' => 'sourceName'
			),
			8 => array(
			'var' => 'sourceOu'
			),
			9 => array(
			'var' => 'ouName'
			),
			10 => array(
			'var' => 'cttType'
			),
			11 => array(
			'var' => 'orderId'
			),
			12 => array(
			'var' => 'orderNum'
			),
			13 => array(
			'var' => 'trxNumber'
			),
			14 => array(
			'var' => 'ctReference'
			),
			15 => array(
			'var' => 'trxDate'
			),
			16 => array(
			'var' => 'shipDate'
			),
			17 => array(
			'var' => 'glDate'
			),
			18 => array(
			'var' => 'payType'
			),
			19 => array(
			'var' => 'shipper'
			),
			20 => array(
			'var' => 'amount'
			),
			21 => array(
			'var' => 'specialType'
			),
			22 => array(
			'var' => 'channel'
			),
			23 => array(
			'var' => 'invoiceType'
			),
			24 => array(
			'var' => 'shipAddress'
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
			'var' => 'sourceCustomer'
			),
			30 => array(
			'var' => 'sourceTable'
			),
			31 => array(
			'var' => 'cancelFlag'
			),
			32 => array(
			'var' => 'accountFlag'
			),
			33 => array(
			'var' => 'accountMessage'
			),
			34 => array(
			'var' => 'processFlag'
			),
			35 => array(
			'var' => 'errorMessage'
			),
			36 => array(
			'var' => 'invoiceNum'
			),
			37 => array(
			'var' => 'invoiceDate'
			),
			38 => array(
			'var' => 'vcardReturnError'
			),
			39 => array(
			'var' => 'vendorCommission'
			),
			40 => array(
			'var' => 'versionNumber'
			),
			41 => array(
			'var' => 'requestId'
			),
			42 => array(
			'var' => 'attributeCategory'
			),
			43 => array(
			'var' => 'attribute1'
			),
			44 => array(
			'var' => 'attribute2'
			),
			45 => array(
			'var' => 'attribute3'
			),
			46 => array(
			'var' => 'attribute4'
			),
			47 => array(
			'var' => 'attribute5'
			),
			48 => array(
			'var' => 'attribute6'
			),
			49 => array(
			'var' => 'attribute7'
			),
			50 => array(
			'var' => 'attribute8'
			),
			51 => array(
			'var' => 'attribute9'
			),
			52 => array(
			'var' => 'attribute10'
			),
			53 => array(
			'var' => 'commonFlag'
			),
			54 => array(
			'var' => 'storeId'
			),
			55 => array(
			'var' => 'storeSource'
			),
			56 => array(
			'var' => 'extOrderSn'
			),
			57 => array(
			'var' => 'invoiceDeductMoney'
			),
			58 => array(
			'var' => 'returnApplyId'
			),
			59 => array(
			'var' => 'orderExtFlags'
			),
			60 => array(
			'var' => 'createTime'
			),
			61 => array(
			'var' => 'createdBy'
			),
			62 => array(
			'var' => 'updateTime'
			),
			63 => array(
			'var' => 'updatedBy'
			),
			64 => array(
			'var' => 'isDeleted'
			),
			65 => array(
			'var' => 'arIntTrxlInModelList'
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
			
			
			if (isset($vals['batchName'])){
				
				$this->batchName = $vals['batchName'];
			}
			
			
			if (isset($vals['groupId'])){
				
				$this->groupId = $vals['groupId'];
			}
			
			
			if (isset($vals['trxId'])){
				
				$this->trxId = $vals['trxId'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
			if (isset($vals['sourceOu'])){
				
				$this->sourceOu = $vals['sourceOu'];
			}
			
			
			if (isset($vals['ouName'])){
				
				$this->ouName = $vals['ouName'];
			}
			
			
			if (isset($vals['cttType'])){
				
				$this->cttType = $vals['cttType'];
			}
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['trxNumber'])){
				
				$this->trxNumber = $vals['trxNumber'];
			}
			
			
			if (isset($vals['ctReference'])){
				
				$this->ctReference = $vals['ctReference'];
			}
			
			
			if (isset($vals['trxDate'])){
				
				$this->trxDate = $vals['trxDate'];
			}
			
			
			if (isset($vals['shipDate'])){
				
				$this->shipDate = $vals['shipDate'];
			}
			
			
			if (isset($vals['glDate'])){
				
				$this->glDate = $vals['glDate'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['shipper'])){
				
				$this->shipper = $vals['shipper'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['specialType'])){
				
				$this->specialType = $vals['specialType'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['shipAddress'])){
				
				$this->shipAddress = $vals['shipAddress'];
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
			
			
			if (isset($vals['sourceCustomer'])){
				
				$this->sourceCustomer = $vals['sourceCustomer'];
			}
			
			
			if (isset($vals['sourceTable'])){
				
				$this->sourceTable = $vals['sourceTable'];
			}
			
			
			if (isset($vals['cancelFlag'])){
				
				$this->cancelFlag = $vals['cancelFlag'];
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
			
			
			if (isset($vals['invoiceNum'])){
				
				$this->invoiceNum = $vals['invoiceNum'];
			}
			
			
			if (isset($vals['invoiceDate'])){
				
				$this->invoiceDate = $vals['invoiceDate'];
			}
			
			
			if (isset($vals['vcardReturnError'])){
				
				$this->vcardReturnError = $vals['vcardReturnError'];
			}
			
			
			if (isset($vals['vendorCommission'])){
				
				$this->vendorCommission = $vals['vendorCommission'];
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
			
			
			if (isset($vals['commonFlag'])){
				
				$this->commonFlag = $vals['commonFlag'];
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
			
			
			if (isset($vals['invoiceDeductMoney'])){
				
				$this->invoiceDeductMoney = $vals['invoiceDeductMoney'];
			}
			
			
			if (isset($vals['returnApplyId'])){
				
				$this->returnApplyId = $vals['returnApplyId'];
			}
			
			
			if (isset($vals['orderExtFlags'])){
				
				$this->orderExtFlags = $vals['orderExtFlags'];
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
			
			
			if (isset($vals['arIntTrxlInModelList'])){
				
				$this->arIntTrxlInModelList = $vals['arIntTrxlInModelList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ArIntTrxhInModel';
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
			
			
			
			
			if ("batchName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchName);
				
			}
			
			
			
			
			if ("groupId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->groupId); 
				
			}
			
			
			
			
			if ("trxId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->trxId); 
				
			}
			
			
			
			
			if ("sourceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceName);
				
			}
			
			
			
			
			if ("sourceOu" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceOu);
				
			}
			
			
			
			
			if ("ouName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ouName);
				
			}
			
			
			
			
			if ("cttType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cttType);
				
			}
			
			
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderId); 
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("trxNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trxNumber);
				
			}
			
			
			
			
			if ("ctReference" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ctReference);
				
			}
			
			
			
			
			if ("trxDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->trxDate); 
				
			}
			
			
			
			
			if ("shipDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->shipDate); 
				
			}
			
			
			
			
			if ("glDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->glDate); 
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("shipper" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipper);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->amount);
				
			}
			
			
			
			
			if ("specialType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialType);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceType);
				
			}
			
			
			
			
			if ("shipAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipAddress);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("exchangeType" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->exchangeType); 
				
			}
			
			
			
			
			if ("exchangeRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchangeRate);
				
			}
			
			
			
			
			if ("exchangeDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->exchangeDate); 
				
			}
			
			
			
			
			if ("sourceCustomer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceCustomer);
				
			}
			
			
			
			
			if ("sourceTable" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceTable);
				
			}
			
			
			
			
			if ("cancelFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cancelFlag);
				
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
			
			
			
			
			if ("invoiceNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceNum);
				
			}
			
			
			
			
			if ("invoiceDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->invoiceDate); 
				
			}
			
			
			
			
			if ("vcardReturnError" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vcardReturnError);
				
			}
			
			
			
			
			if ("vendorCommission" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCommission);
				
			}
			
			
			
			
			if ("versionNumber" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->versionNumber); 
				
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
			
			
			
			
			if ("commonFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commonFlag);
				
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
			
			
			
			
			if ("invoiceDeductMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceDeductMoney);
				
			}
			
			
			
			
			if ("returnApplyId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnApplyId);
				
			}
			
			
			
			
			if ("orderExtFlags" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderExtFlags);
				
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
			
			
			
			
			if ("arIntTrxlInModelList" == $schemeField){
				
				$needSkip = false;
				
				$this->arIntTrxlInModelList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxlInModel();
						$elem0->read($input);
						
						$this->arIntTrxlInModelList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		
		if($this->batchName !== null) {
			
			$xfer += $output->writeFieldBegin('batchName');
			$xfer += $output->writeString($this->batchName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->groupId !== null) {
			
			$xfer += $output->writeFieldBegin('groupId');
			$xfer += $output->writeI64($this->groupId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trxId !== null) {
			
			$xfer += $output->writeFieldBegin('trxId');
			$xfer += $output->writeI64($this->trxId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceName !== null) {
			
			$xfer += $output->writeFieldBegin('sourceName');
			$xfer += $output->writeString($this->sourceName);
			
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
		
		
		if($this->cttType !== null) {
			
			$xfer += $output->writeFieldBegin('cttType');
			$xfer += $output->writeString($this->cttType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeI64($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trxNumber !== null) {
			
			$xfer += $output->writeFieldBegin('trxNumber');
			$xfer += $output->writeString($this->trxNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ctReference !== null) {
			
			$xfer += $output->writeFieldBegin('ctReference');
			$xfer += $output->writeString($this->ctReference);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trxDate !== null) {
			
			$xfer += $output->writeFieldBegin('trxDate');
			$xfer += $output->writeI64($this->trxDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipDate !== null) {
			
			$xfer += $output->writeFieldBegin('shipDate');
			$xfer += $output->writeI64($this->shipDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->glDate !== null) {
			
			$xfer += $output->writeFieldBegin('glDate');
			$xfer += $output->writeI64($this->glDate);
			
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
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeDouble($this->amount);
			
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
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeString($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipAddress !== null) {
			
			$xfer += $output->writeFieldBegin('shipAddress');
			$xfer += $output->writeString($this->shipAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchangeType !== null) {
			
			$xfer += $output->writeFieldBegin('exchangeType');
			$xfer += $output->writeI64($this->exchangeType);
			
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
		
		
		if($this->sourceCustomer !== null) {
			
			$xfer += $output->writeFieldBegin('sourceCustomer');
			$xfer += $output->writeString($this->sourceCustomer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceTable !== null) {
			
			$xfer += $output->writeFieldBegin('sourceTable');
			$xfer += $output->writeString($this->sourceTable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelFlag !== null) {
			
			$xfer += $output->writeFieldBegin('cancelFlag');
			$xfer += $output->writeString($this->cancelFlag);
			
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
		
		
		if($this->invoiceNum !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceNum');
			$xfer += $output->writeString($this->invoiceNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceDate !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDate');
			$xfer += $output->writeI64($this->invoiceDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vcardReturnError !== null) {
			
			$xfer += $output->writeFieldBegin('vcardReturnError');
			$xfer += $output->writeString($this->vcardReturnError);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCommission !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCommission');
			$xfer += $output->writeString($this->vendorCommission);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->versionNumber !== null) {
			
			$xfer += $output->writeFieldBegin('versionNumber');
			$xfer += $output->writeI32($this->versionNumber);
			
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
		
		
		if($this->commonFlag !== null) {
			
			$xfer += $output->writeFieldBegin('commonFlag');
			$xfer += $output->writeString($this->commonFlag);
			
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
		
		
		if($this->invoiceDeductMoney !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDeductMoney');
			$xfer += $output->writeString($this->invoiceDeductMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnApplyId !== null) {
			
			$xfer += $output->writeFieldBegin('returnApplyId');
			$xfer += $output->writeString($this->returnApplyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderExtFlags !== null) {
			
			$xfer += $output->writeFieldBegin('orderExtFlags');
			$xfer += $output->writeString($this->orderExtFlags);
			
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
		
		
		if($this->arIntTrxlInModelList !== null) {
			
			$xfer += $output->writeFieldBegin('arIntTrxlInModelList');
			
			if (!is_array($this->arIntTrxlInModelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->arIntTrxlInModelList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>