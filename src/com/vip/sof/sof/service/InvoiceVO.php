<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class InvoiceVO {
	
	static $_TSPEC;
	public $orderSn = null;
	public $orderStat = null;
	public $addTime = null;
	public $stat = null;
	public $type = null;
	public $invoice = null;
	public $taxPayerNo = null;
	public $exPayMoney = null;
	public $transportNo = null;
	public $url = null;
	public $invoiceCode = null;
	public $invoiceNum = null;
	public $carrier = null;
	public $createTime = null;
	public $id = null;
	public $uploadTime = null;
	public $errorMsg = null;
	public $redPunchingInvoice = null;
	public $redPunchingInvoiceName = null;
	public $redPunchingStatus = null;
	public $seqNo = null;
	public $seqDesc = null;
	public $errorCode = null;
	public $createType = null;
	public $invoiceContentType = null;
	public $invoiceContent = null;
	public $invoiceContentList = null;
	public $applyTime = null;
	public $invoiceEncrypt = null;
	public $storeId = null;
	public $storeName = null;
	public $companyName = null;
	public $isBaiwang = null;
	public $departmentName = null;
	public $isOvertime = null;
	public $firstTrackTime = null;
	public $thresholdUploadTime = null;
	public $isAfterSale = null;
	public $firstUploadTime = null;
	public $electronicInvoiceType = null;
	public $subType = null;
	public $xmlUrl = null;
	public $firstXmlUploadTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'orderStat'
			),
			3 => array(
			'var' => 'addTime'
			),
			4 => array(
			'var' => 'stat'
			),
			5 => array(
			'var' => 'type'
			),
			6 => array(
			'var' => 'invoice'
			),
			7 => array(
			'var' => 'taxPayerNo'
			),
			8 => array(
			'var' => 'exPayMoney'
			),
			9 => array(
			'var' => 'transportNo'
			),
			10 => array(
			'var' => 'url'
			),
			11 => array(
			'var' => 'invoiceCode'
			),
			12 => array(
			'var' => 'invoiceNum'
			),
			13 => array(
			'var' => 'carrier'
			),
			14 => array(
			'var' => 'createTime'
			),
			15 => array(
			'var' => 'id'
			),
			16 => array(
			'var' => 'uploadTime'
			),
			17 => array(
			'var' => 'errorMsg'
			),
			18 => array(
			'var' => 'redPunchingInvoice'
			),
			19 => array(
			'var' => 'redPunchingInvoiceName'
			),
			20 => array(
			'var' => 'redPunchingStatus'
			),
			21 => array(
			'var' => 'seqNo'
			),
			22 => array(
			'var' => 'seqDesc'
			),
			23 => array(
			'var' => 'errorCode'
			),
			24 => array(
			'var' => 'createType'
			),
			25 => array(
			'var' => 'invoiceContentType'
			),
			26 => array(
			'var' => 'invoiceContent'
			),
			27 => array(
			'var' => 'invoiceContentList'
			),
			28 => array(
			'var' => 'applyTime'
			),
			29 => array(
			'var' => 'invoiceEncrypt'
			),
			30 => array(
			'var' => 'storeId'
			),
			31 => array(
			'var' => 'storeName'
			),
			32 => array(
			'var' => 'companyName'
			),
			33 => array(
			'var' => 'isBaiwang'
			),
			34 => array(
			'var' => 'departmentName'
			),
			35 => array(
			'var' => 'isOvertime'
			),
			36 => array(
			'var' => 'firstTrackTime'
			),
			37 => array(
			'var' => 'thresholdUploadTime'
			),
			38 => array(
			'var' => 'isAfterSale'
			),
			39 => array(
			'var' => 'firstUploadTime'
			),
			40 => array(
			'var' => 'electronicInvoiceType'
			),
			41 => array(
			'var' => 'subType'
			),
			42 => array(
			'var' => 'xmlUrl'
			),
			43 => array(
			'var' => 'firstXmlUploadTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['orderStat'])){
				
				$this->orderStat = $vals['orderStat'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['invoice'])){
				
				$this->invoice = $vals['invoice'];
			}
			
			
			if (isset($vals['taxPayerNo'])){
				
				$this->taxPayerNo = $vals['taxPayerNo'];
			}
			
			
			if (isset($vals['exPayMoney'])){
				
				$this->exPayMoney = $vals['exPayMoney'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['url'])){
				
				$this->url = $vals['url'];
			}
			
			
			if (isset($vals['invoiceCode'])){
				
				$this->invoiceCode = $vals['invoiceCode'];
			}
			
			
			if (isset($vals['invoiceNum'])){
				
				$this->invoiceNum = $vals['invoiceNum'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['uploadTime'])){
				
				$this->uploadTime = $vals['uploadTime'];
			}
			
			
			if (isset($vals['errorMsg'])){
				
				$this->errorMsg = $vals['errorMsg'];
			}
			
			
			if (isset($vals['redPunchingInvoice'])){
				
				$this->redPunchingInvoice = $vals['redPunchingInvoice'];
			}
			
			
			if (isset($vals['redPunchingInvoiceName'])){
				
				$this->redPunchingInvoiceName = $vals['redPunchingInvoiceName'];
			}
			
			
			if (isset($vals['redPunchingStatus'])){
				
				$this->redPunchingStatus = $vals['redPunchingStatus'];
			}
			
			
			if (isset($vals['seqNo'])){
				
				$this->seqNo = $vals['seqNo'];
			}
			
			
			if (isset($vals['seqDesc'])){
				
				$this->seqDesc = $vals['seqDesc'];
			}
			
			
			if (isset($vals['errorCode'])){
				
				$this->errorCode = $vals['errorCode'];
			}
			
			
			if (isset($vals['createType'])){
				
				$this->createType = $vals['createType'];
			}
			
			
			if (isset($vals['invoiceContentType'])){
				
				$this->invoiceContentType = $vals['invoiceContentType'];
			}
			
			
			if (isset($vals['invoiceContent'])){
				
				$this->invoiceContent = $vals['invoiceContent'];
			}
			
			
			if (isset($vals['invoiceContentList'])){
				
				$this->invoiceContentList = $vals['invoiceContentList'];
			}
			
			
			if (isset($vals['applyTime'])){
				
				$this->applyTime = $vals['applyTime'];
			}
			
			
			if (isset($vals['invoiceEncrypt'])){
				
				$this->invoiceEncrypt = $vals['invoiceEncrypt'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
			if (isset($vals['companyName'])){
				
				$this->companyName = $vals['companyName'];
			}
			
			
			if (isset($vals['isBaiwang'])){
				
				$this->isBaiwang = $vals['isBaiwang'];
			}
			
			
			if (isset($vals['departmentName'])){
				
				$this->departmentName = $vals['departmentName'];
			}
			
			
			if (isset($vals['isOvertime'])){
				
				$this->isOvertime = $vals['isOvertime'];
			}
			
			
			if (isset($vals['firstTrackTime'])){
				
				$this->firstTrackTime = $vals['firstTrackTime'];
			}
			
			
			if (isset($vals['thresholdUploadTime'])){
				
				$this->thresholdUploadTime = $vals['thresholdUploadTime'];
			}
			
			
			if (isset($vals['isAfterSale'])){
				
				$this->isAfterSale = $vals['isAfterSale'];
			}
			
			
			if (isset($vals['firstUploadTime'])){
				
				$this->firstUploadTime = $vals['firstUploadTime'];
			}
			
			
			if (isset($vals['electronicInvoiceType'])){
				
				$this->electronicInvoiceType = $vals['electronicInvoiceType'];
			}
			
			
			if (isset($vals['subType'])){
				
				$this->subType = $vals['subType'];
			}
			
			
			if (isset($vals['xmlUrl'])){
				
				$this->xmlUrl = $vals['xmlUrl'];
			}
			
			
			if (isset($vals['firstXmlUploadTime'])){
				
				$this->firstXmlUploadTime = $vals['firstXmlUploadTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvoiceVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("orderStat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderStat);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addTime);
				
			}
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stat);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice);
				
			}
			
			
			
			
			if ("taxPayerNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxPayerNo);
				
			}
			
			
			
			
			if ("exPayMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exPayMoney);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->url);
				
			}
			
			
			
			
			if ("invoiceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceCode);
				
			}
			
			
			
			
			if ("invoiceNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceNum);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("uploadTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uploadTime);
				
			}
			
			
			
			
			if ("errorMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorMsg);
				
			}
			
			
			
			
			if ("redPunchingInvoice" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->redPunchingInvoice); 
				
			}
			
			
			
			
			if ("redPunchingInvoiceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->redPunchingInvoiceName);
				
			}
			
			
			
			
			if ("redPunchingStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->redPunchingStatus);
				
			}
			
			
			
			
			if ("seqNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->seqNo); 
				
			}
			
			
			
			
			if ("seqDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seqDesc);
				
			}
			
			
			
			
			if ("errorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorCode);
				
			}
			
			
			
			
			if ("createType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->createType); 
				
			}
			
			
			
			
			if ("invoiceContentType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->invoiceContentType); 
				
			}
			
			
			
			
			if ("invoiceContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceContent);
				
			}
			
			
			
			
			if ("invoiceContentList" == $schemeField){
				
				$needSkip = false;
				
				$this->invoiceContentList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->invoiceContentList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("applyTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->applyTime);
				
			}
			
			
			
			
			if ("invoiceEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceEncrypt);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeName);
				
			}
			
			
			
			
			if ("companyName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyName);
				
			}
			
			
			
			
			if ("isBaiwang" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isBaiwang); 
				
			}
			
			
			
			
			if ("departmentName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->departmentName);
				
			}
			
			
			
			
			if ("isOvertime" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isOvertime); 
				
			}
			
			
			
			
			if ("firstTrackTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->firstTrackTime);
				
			}
			
			
			
			
			if ("thresholdUploadTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->thresholdUploadTime);
				
			}
			
			
			
			
			if ("isAfterSale" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isAfterSale); 
				
			}
			
			
			
			
			if ("firstUploadTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->firstUploadTime);
				
			}
			
			
			
			
			if ("electronicInvoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->electronicInvoiceType); 
				
			}
			
			
			
			
			if ("subType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subType);
				
			}
			
			
			
			
			if ("xmlUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->xmlUrl);
				
			}
			
			
			
			
			if ("firstXmlUploadTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->firstXmlUploadTime);
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStat !== null) {
			
			$xfer += $output->writeFieldBegin('orderStat');
			$xfer += $output->writeString($this->orderStat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeString($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeString($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice !== null) {
			
			$xfer += $output->writeFieldBegin('invoice');
			$xfer += $output->writeString($this->invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxPayerNo !== null) {
			
			$xfer += $output->writeFieldBegin('taxPayerNo');
			$xfer += $output->writeString($this->taxPayerNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exPayMoney !== null) {
			
			$xfer += $output->writeFieldBegin('exPayMoney');
			$xfer += $output->writeString($this->exPayMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->url !== null) {
			
			$xfer += $output->writeFieldBegin('url');
			$xfer += $output->writeString($this->url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceCode !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceCode');
			$xfer += $output->writeString($this->invoiceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceNum !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceNum');
			$xfer += $output->writeString($this->invoiceNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uploadTime !== null) {
			
			$xfer += $output->writeFieldBegin('uploadTime');
			$xfer += $output->writeString($this->uploadTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorMsg !== null) {
			
			$xfer += $output->writeFieldBegin('errorMsg');
			$xfer += $output->writeString($this->errorMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->redPunchingInvoice !== null) {
			
			$xfer += $output->writeFieldBegin('redPunchingInvoice');
			$xfer += $output->writeByte($this->redPunchingInvoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->redPunchingInvoiceName !== null) {
			
			$xfer += $output->writeFieldBegin('redPunchingInvoiceName');
			$xfer += $output->writeString($this->redPunchingInvoiceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->redPunchingStatus !== null) {
			
			$xfer += $output->writeFieldBegin('redPunchingStatus');
			$xfer += $output->writeString($this->redPunchingStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seqNo !== null) {
			
			$xfer += $output->writeFieldBegin('seqNo');
			$xfer += $output->writeI64($this->seqNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seqDesc !== null) {
			
			$xfer += $output->writeFieldBegin('seqDesc');
			$xfer += $output->writeString($this->seqDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorCode !== null) {
			
			$xfer += $output->writeFieldBegin('errorCode');
			$xfer += $output->writeString($this->errorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createType !== null) {
			
			$xfer += $output->writeFieldBegin('createType');
			$xfer += $output->writeByte($this->createType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceContentType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceContentType');
			$xfer += $output->writeI32($this->invoiceContentType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceContent !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceContent');
			$xfer += $output->writeString($this->invoiceContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceContentList !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceContentList');
			
			if (!is_array($this->invoiceContentList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->invoiceContentList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyTime !== null) {
			
			$xfer += $output->writeFieldBegin('applyTime');
			$xfer += $output->writeString($this->applyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceEncrypt');
			$xfer += $output->writeString($this->invoiceEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeName !== null) {
			
			$xfer += $output->writeFieldBegin('storeName');
			$xfer += $output->writeString($this->storeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->companyName !== null) {
			
			$xfer += $output->writeFieldBegin('companyName');
			$xfer += $output->writeString($this->companyName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isBaiwang !== null) {
			
			$xfer += $output->writeFieldBegin('isBaiwang');
			$xfer += $output->writeByte($this->isBaiwang);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->departmentName !== null) {
			
			$xfer += $output->writeFieldBegin('departmentName');
			$xfer += $output->writeString($this->departmentName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isOvertime !== null) {
			
			$xfer += $output->writeFieldBegin('isOvertime');
			$xfer += $output->writeByte($this->isOvertime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->firstTrackTime !== null) {
			
			$xfer += $output->writeFieldBegin('firstTrackTime');
			$xfer += $output->writeString($this->firstTrackTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thresholdUploadTime !== null) {
			
			$xfer += $output->writeFieldBegin('thresholdUploadTime');
			$xfer += $output->writeString($this->thresholdUploadTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isAfterSale !== null) {
			
			$xfer += $output->writeFieldBegin('isAfterSale');
			$xfer += $output->writeByte($this->isAfterSale);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->firstUploadTime !== null) {
			
			$xfer += $output->writeFieldBegin('firstUploadTime');
			$xfer += $output->writeString($this->firstUploadTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->electronicInvoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('electronicInvoiceType');
			$xfer += $output->writeByte($this->electronicInvoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subType !== null) {
			
			$xfer += $output->writeFieldBegin('subType');
			$xfer += $output->writeString($this->subType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->xmlUrl !== null) {
			
			$xfer += $output->writeFieldBegin('xmlUrl');
			$xfer += $output->writeString($this->xmlUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->firstXmlUploadTime !== null) {
			
			$xfer += $output->writeFieldBegin('firstXmlUploadTime');
			$xfer += $output->writeString($this->firstXmlUploadTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>