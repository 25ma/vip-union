<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class EinvoiceVo {
	
	static $_TSPEC;
	public $fpdm = null;
	public $fphm = null;
	public $pdfUrl = null;
	public $orderSn = null;
	public $taxRegisterNo = null;
	public $dataType = null;
	public $originFpdm = null;
	public $originFphm = null;
	public $seqNo = null;
	public $title = null;
	public $buyerTaxRegisterNo = null;
	public $mobileNumber = null;
	public $emailAddress = null;
	public $invoiceAddress = null;
	public $invoiceBank = null;
	public $invoiceBankAccount = null;
	public $invoicePhone = null;
	public $type = null;
	public $invoiceContentType = null;
	public $titleEncrypt = null;
	public $mobileNumberEncrypt = null;
	public $emailAddressEncrypt = null;
	public $invoiceAddressEncrypt = null;
	public $invoiceBankAccountEncrypt = null;
	public $invoicePhoneEncrypt = null;
	public $invoiceType = null;
	public $xmlUrl = null;
	public $userId = null;
	public $storeSource = null;
	public $storeId = null;
	public $sourceSys = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'fpdm'
			),
			2 => array(
			'var' => 'fphm'
			),
			3 => array(
			'var' => 'pdfUrl'
			),
			4 => array(
			'var' => 'orderSn'
			),
			5 => array(
			'var' => 'taxRegisterNo'
			),
			6 => array(
			'var' => 'dataType'
			),
			7 => array(
			'var' => 'originFpdm'
			),
			8 => array(
			'var' => 'originFphm'
			),
			9 => array(
			'var' => 'seqNo'
			),
			10 => array(
			'var' => 'title'
			),
			11 => array(
			'var' => 'buyerTaxRegisterNo'
			),
			12 => array(
			'var' => 'mobileNumber'
			),
			13 => array(
			'var' => 'emailAddress'
			),
			14 => array(
			'var' => 'invoiceAddress'
			),
			15 => array(
			'var' => 'invoiceBank'
			),
			16 => array(
			'var' => 'invoiceBankAccount'
			),
			17 => array(
			'var' => 'invoicePhone'
			),
			18 => array(
			'var' => 'type'
			),
			19 => array(
			'var' => 'invoiceContentType'
			),
			20 => array(
			'var' => 'titleEncrypt'
			),
			21 => array(
			'var' => 'mobileNumberEncrypt'
			),
			22 => array(
			'var' => 'emailAddressEncrypt'
			),
			23 => array(
			'var' => 'invoiceAddressEncrypt'
			),
			24 => array(
			'var' => 'invoiceBankAccountEncrypt'
			),
			25 => array(
			'var' => 'invoicePhoneEncrypt'
			),
			26 => array(
			'var' => 'invoiceType'
			),
			27 => array(
			'var' => 'xmlUrl'
			),
			28 => array(
			'var' => 'userId'
			),
			29 => array(
			'var' => 'storeSource'
			),
			30 => array(
			'var' => 'storeId'
			),
			31 => array(
			'var' => 'sourceSys'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['fpdm'])){
				
				$this->fpdm = $vals['fpdm'];
			}
			
			
			if (isset($vals['fphm'])){
				
				$this->fphm = $vals['fphm'];
			}
			
			
			if (isset($vals['pdfUrl'])){
				
				$this->pdfUrl = $vals['pdfUrl'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['taxRegisterNo'])){
				
				$this->taxRegisterNo = $vals['taxRegisterNo'];
			}
			
			
			if (isset($vals['dataType'])){
				
				$this->dataType = $vals['dataType'];
			}
			
			
			if (isset($vals['originFpdm'])){
				
				$this->originFpdm = $vals['originFpdm'];
			}
			
			
			if (isset($vals['originFphm'])){
				
				$this->originFphm = $vals['originFphm'];
			}
			
			
			if (isset($vals['seqNo'])){
				
				$this->seqNo = $vals['seqNo'];
			}
			
			
			if (isset($vals['title'])){
				
				$this->title = $vals['title'];
			}
			
			
			if (isset($vals['buyerTaxRegisterNo'])){
				
				$this->buyerTaxRegisterNo = $vals['buyerTaxRegisterNo'];
			}
			
			
			if (isset($vals['mobileNumber'])){
				
				$this->mobileNumber = $vals['mobileNumber'];
			}
			
			
			if (isset($vals['emailAddress'])){
				
				$this->emailAddress = $vals['emailAddress'];
			}
			
			
			if (isset($vals['invoiceAddress'])){
				
				$this->invoiceAddress = $vals['invoiceAddress'];
			}
			
			
			if (isset($vals['invoiceBank'])){
				
				$this->invoiceBank = $vals['invoiceBank'];
			}
			
			
			if (isset($vals['invoiceBankAccount'])){
				
				$this->invoiceBankAccount = $vals['invoiceBankAccount'];
			}
			
			
			if (isset($vals['invoicePhone'])){
				
				$this->invoicePhone = $vals['invoicePhone'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['invoiceContentType'])){
				
				$this->invoiceContentType = $vals['invoiceContentType'];
			}
			
			
			if (isset($vals['titleEncrypt'])){
				
				$this->titleEncrypt = $vals['titleEncrypt'];
			}
			
			
			if (isset($vals['mobileNumberEncrypt'])){
				
				$this->mobileNumberEncrypt = $vals['mobileNumberEncrypt'];
			}
			
			
			if (isset($vals['emailAddressEncrypt'])){
				
				$this->emailAddressEncrypt = $vals['emailAddressEncrypt'];
			}
			
			
			if (isset($vals['invoiceAddressEncrypt'])){
				
				$this->invoiceAddressEncrypt = $vals['invoiceAddressEncrypt'];
			}
			
			
			if (isset($vals['invoiceBankAccountEncrypt'])){
				
				$this->invoiceBankAccountEncrypt = $vals['invoiceBankAccountEncrypt'];
			}
			
			
			if (isset($vals['invoicePhoneEncrypt'])){
				
				$this->invoicePhoneEncrypt = $vals['invoicePhoneEncrypt'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['xmlUrl'])){
				
				$this->xmlUrl = $vals['xmlUrl'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['sourceSys'])){
				
				$this->sourceSys = $vals['sourceSys'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EinvoiceVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("fpdm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fpdm);
				
			}
			
			
			
			
			if ("fphm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fphm);
				
			}
			
			
			
			
			if ("pdfUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdfUrl);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("taxRegisterNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRegisterNo);
				
			}
			
			
			
			
			if ("dataType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->dataType); 
				
			}
			
			
			
			
			if ("originFpdm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originFpdm);
				
			}
			
			
			
			
			if ("originFphm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originFphm);
				
			}
			
			
			
			
			if ("seqNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seqNo);
				
			}
			
			
			
			
			if ("title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->title);
				
			}
			
			
			
			
			if ("buyerTaxRegisterNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerTaxRegisterNo);
				
			}
			
			
			
			
			if ("mobileNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobileNumber);
				
			}
			
			
			
			
			if ("emailAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->emailAddress);
				
			}
			
			
			
			
			if ("invoiceAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceAddress);
				
			}
			
			
			
			
			if ("invoiceBank" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceBank);
				
			}
			
			
			
			
			if ("invoiceBankAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceBankAccount);
				
			}
			
			
			
			
			if ("invoicePhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoicePhone);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("invoiceContentType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->invoiceContentType); 
				
			}
			
			
			
			
			if ("titleEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->titleEncrypt);
				
			}
			
			
			
			
			if ("mobileNumberEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobileNumberEncrypt);
				
			}
			
			
			
			
			if ("emailAddressEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->emailAddressEncrypt);
				
			}
			
			
			
			
			if ("invoiceAddressEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceAddressEncrypt);
				
			}
			
			
			
			
			if ("invoiceBankAccountEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceBankAccountEncrypt);
				
			}
			
			
			
			
			if ("invoicePhoneEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoicePhoneEncrypt);
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceType);
				
			}
			
			
			
			
			if ("xmlUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->xmlUrl);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeSource);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("sourceSys" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceSys);
				
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
		
		if($this->fpdm !== null) {
			
			$xfer += $output->writeFieldBegin('fpdm');
			$xfer += $output->writeString($this->fpdm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fphm !== null) {
			
			$xfer += $output->writeFieldBegin('fphm');
			$xfer += $output->writeString($this->fphm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pdfUrl !== null) {
			
			$xfer += $output->writeFieldBegin('pdfUrl');
			$xfer += $output->writeString($this->pdfUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->taxRegisterNo !== null) {
			
			$xfer += $output->writeFieldBegin('taxRegisterNo');
			$xfer += $output->writeString($this->taxRegisterNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('dataType');
		$xfer += $output->writeByte($this->dataType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->originFpdm !== null) {
			
			$xfer += $output->writeFieldBegin('originFpdm');
			$xfer += $output->writeString($this->originFpdm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originFphm !== null) {
			
			$xfer += $output->writeFieldBegin('originFphm');
			$xfer += $output->writeString($this->originFphm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seqNo !== null) {
			
			$xfer += $output->writeFieldBegin('seqNo');
			$xfer += $output->writeString($this->seqNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->title !== null) {
			
			$xfer += $output->writeFieldBegin('title');
			$xfer += $output->writeString($this->title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerTaxRegisterNo !== null) {
			
			$xfer += $output->writeFieldBegin('buyerTaxRegisterNo');
			$xfer += $output->writeString($this->buyerTaxRegisterNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobileNumber !== null) {
			
			$xfer += $output->writeFieldBegin('mobileNumber');
			$xfer += $output->writeString($this->mobileNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->emailAddress !== null) {
			
			$xfer += $output->writeFieldBegin('emailAddress');
			$xfer += $output->writeString($this->emailAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceAddress !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceAddress');
			$xfer += $output->writeString($this->invoiceAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceBank !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceBank');
			$xfer += $output->writeString($this->invoiceBank);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceBankAccount !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceBankAccount');
			$xfer += $output->writeString($this->invoiceBankAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoicePhone !== null) {
			
			$xfer += $output->writeFieldBegin('invoicePhone');
			$xfer += $output->writeString($this->invoicePhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceContentType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceContentType');
			$xfer += $output->writeI32($this->invoiceContentType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->titleEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('titleEncrypt');
			$xfer += $output->writeString($this->titleEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobileNumberEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('mobileNumberEncrypt');
			$xfer += $output->writeString($this->mobileNumberEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->emailAddressEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('emailAddressEncrypt');
			$xfer += $output->writeString($this->emailAddressEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceAddressEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceAddressEncrypt');
			$xfer += $output->writeString($this->invoiceAddressEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceBankAccountEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceBankAccountEncrypt');
			$xfer += $output->writeString($this->invoiceBankAccountEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoicePhoneEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('invoicePhoneEncrypt');
			$xfer += $output->writeString($this->invoicePhoneEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeString($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->xmlUrl !== null) {
			
			$xfer += $output->writeFieldBegin('xmlUrl');
			$xfer += $output->writeString($this->xmlUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSource !== null) {
			
			$xfer += $output->writeFieldBegin('storeSource');
			$xfer += $output->writeString($this->storeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceSys !== null) {
			
			$xfer += $output->writeFieldBegin('sourceSys');
			$xfer += $output->writeString($this->sourceSys);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>