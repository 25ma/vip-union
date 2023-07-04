<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class InvoiceListParam {
	
	static $_TSPEC;
	public $appName = null;
	public $orderSn = null;
	public $addTimeStart = null;
	public $addTimeEnd = null;
	public $type = null;
	public $stat = null;
	public $page = null;
	public $pageSize = null;
	public $storeId = null;
	public $invoiceUploadStat = null;
	public $createType = null;
	public $redPunchingInvoice = null;
	public $applyTimeStart = null;
	public $applyTimeEnd = null;
	public $isOvertime = null;
	public $firstTrackTimeStart = null;
	public $firstTrackTimeEnd = null;
	public $thresholdUploadTimeStart = null;
	public $thresholdUploadTimeEnd = null;
	public $isBaiwang = null;
	public $isAfterSale = null;
	public $isThresholdUploadTime = null;
	public $createTypeList = null;
	public $statList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appName'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'addTimeStart'
			),
			4 => array(
			'var' => 'addTimeEnd'
			),
			5 => array(
			'var' => 'type'
			),
			6 => array(
			'var' => 'stat'
			),
			7 => array(
			'var' => 'page'
			),
			8 => array(
			'var' => 'pageSize'
			),
			9 => array(
			'var' => 'storeId'
			),
			10 => array(
			'var' => 'invoiceUploadStat'
			),
			11 => array(
			'var' => 'createType'
			),
			12 => array(
			'var' => 'redPunchingInvoice'
			),
			13 => array(
			'var' => 'applyTimeStart'
			),
			14 => array(
			'var' => 'applyTimeEnd'
			),
			15 => array(
			'var' => 'isOvertime'
			),
			16 => array(
			'var' => 'firstTrackTimeStart'
			),
			17 => array(
			'var' => 'firstTrackTimeEnd'
			),
			18 => array(
			'var' => 'thresholdUploadTimeStart'
			),
			19 => array(
			'var' => 'thresholdUploadTimeEnd'
			),
			20 => array(
			'var' => 'isBaiwang'
			),
			21 => array(
			'var' => 'isAfterSale'
			),
			22 => array(
			'var' => 'isThresholdUploadTime'
			),
			23 => array(
			'var' => 'createTypeList'
			),
			24 => array(
			'var' => 'statList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['addTimeStart'])){
				
				$this->addTimeStart = $vals['addTimeStart'];
			}
			
			
			if (isset($vals['addTimeEnd'])){
				
				$this->addTimeEnd = $vals['addTimeEnd'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['invoiceUploadStat'])){
				
				$this->invoiceUploadStat = $vals['invoiceUploadStat'];
			}
			
			
			if (isset($vals['createType'])){
				
				$this->createType = $vals['createType'];
			}
			
			
			if (isset($vals['redPunchingInvoice'])){
				
				$this->redPunchingInvoice = $vals['redPunchingInvoice'];
			}
			
			
			if (isset($vals['applyTimeStart'])){
				
				$this->applyTimeStart = $vals['applyTimeStart'];
			}
			
			
			if (isset($vals['applyTimeEnd'])){
				
				$this->applyTimeEnd = $vals['applyTimeEnd'];
			}
			
			
			if (isset($vals['isOvertime'])){
				
				$this->isOvertime = $vals['isOvertime'];
			}
			
			
			if (isset($vals['firstTrackTimeStart'])){
				
				$this->firstTrackTimeStart = $vals['firstTrackTimeStart'];
			}
			
			
			if (isset($vals['firstTrackTimeEnd'])){
				
				$this->firstTrackTimeEnd = $vals['firstTrackTimeEnd'];
			}
			
			
			if (isset($vals['thresholdUploadTimeStart'])){
				
				$this->thresholdUploadTimeStart = $vals['thresholdUploadTimeStart'];
			}
			
			
			if (isset($vals['thresholdUploadTimeEnd'])){
				
				$this->thresholdUploadTimeEnd = $vals['thresholdUploadTimeEnd'];
			}
			
			
			if (isset($vals['isBaiwang'])){
				
				$this->isBaiwang = $vals['isBaiwang'];
			}
			
			
			if (isset($vals['isAfterSale'])){
				
				$this->isAfterSale = $vals['isAfterSale'];
			}
			
			
			if (isset($vals['isThresholdUploadTime'])){
				
				$this->isThresholdUploadTime = $vals['isThresholdUploadTime'];
			}
			
			
			if (isset($vals['createTypeList'])){
				
				$this->createTypeList = $vals['createTypeList'];
			}
			
			
			if (isset($vals['statList'])){
				
				$this->statList = $vals['statList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvoiceListParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("addTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addTimeStart);
				
			}
			
			
			
			
			if ("addTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addTimeEnd);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stat);
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("invoiceUploadStat" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->invoiceUploadStat); 
				
			}
			
			
			
			
			if ("createType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->createType); 
				
			}
			
			
			
			
			if ("redPunchingInvoice" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->redPunchingInvoice); 
				
			}
			
			
			
			
			if ("applyTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->applyTimeStart);
				
			}
			
			
			
			
			if ("applyTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->applyTimeEnd);
				
			}
			
			
			
			
			if ("isOvertime" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isOvertime); 
				
			}
			
			
			
			
			if ("firstTrackTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->firstTrackTimeStart);
				
			}
			
			
			
			
			if ("firstTrackTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->firstTrackTimeEnd);
				
			}
			
			
			
			
			if ("thresholdUploadTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->thresholdUploadTimeStart);
				
			}
			
			
			
			
			if ("thresholdUploadTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->thresholdUploadTimeEnd);
				
			}
			
			
			
			
			if ("isBaiwang" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isBaiwang); 
				
			}
			
			
			
			
			if ("isAfterSale" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isAfterSale); 
				
			}
			
			
			
			
			if ("isThresholdUploadTime" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isThresholdUploadTime); 
				
			}
			
			
			
			
			if ("createTypeList" == $schemeField){
				
				$needSkip = false;
				
				$this->createTypeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readByte($elem0); 
						
						$this->createTypeList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("statList" == $schemeField){
				
				$needSkip = false;
				
				$this->statList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readByte($elem1); 
						
						$this->statList[$_size1++] = $elem1;
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
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('addTimeStart');
			$xfer += $output->writeString($this->addTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('addTimeEnd');
			$xfer += $output->writeString($this->addTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeString($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceUploadStat !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceUploadStat');
			$xfer += $output->writeI32($this->invoiceUploadStat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createType !== null) {
			
			$xfer += $output->writeFieldBegin('createType');
			$xfer += $output->writeI32($this->createType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->redPunchingInvoice !== null) {
			
			$xfer += $output->writeFieldBegin('redPunchingInvoice');
			$xfer += $output->writeI32($this->redPunchingInvoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('applyTimeStart');
			$xfer += $output->writeString($this->applyTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('applyTimeEnd');
			$xfer += $output->writeString($this->applyTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isOvertime !== null) {
			
			$xfer += $output->writeFieldBegin('isOvertime');
			$xfer += $output->writeByte($this->isOvertime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->firstTrackTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('firstTrackTimeStart');
			$xfer += $output->writeString($this->firstTrackTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->firstTrackTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('firstTrackTimeEnd');
			$xfer += $output->writeString($this->firstTrackTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thresholdUploadTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('thresholdUploadTimeStart');
			$xfer += $output->writeString($this->thresholdUploadTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thresholdUploadTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('thresholdUploadTimeEnd');
			$xfer += $output->writeString($this->thresholdUploadTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isBaiwang !== null) {
			
			$xfer += $output->writeFieldBegin('isBaiwang');
			$xfer += $output->writeByte($this->isBaiwang);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isAfterSale !== null) {
			
			$xfer += $output->writeFieldBegin('isAfterSale');
			$xfer += $output->writeByte($this->isAfterSale);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isThresholdUploadTime !== null) {
			
			$xfer += $output->writeFieldBegin('isThresholdUploadTime');
			$xfer += $output->writeByte($this->isThresholdUploadTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTypeList !== null) {
			
			$xfer += $output->writeFieldBegin('createTypeList');
			
			if (!is_array($this->createTypeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->createTypeList as $iter0){
				
				$xfer += $output->writeByte($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statList !== null) {
			
			$xfer += $output->writeFieldBegin('statList');
			
			if (!is_array($this->statList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->statList as $iter0){
				
				$xfer += $output->writeByte($iter0);
				
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