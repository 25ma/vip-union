<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class InvoiceDetail {
	
	static $_TSPEC;
	public $orderSn = null;
	public $type = null;
	public $invoice = null;
	public $invoiceNum = null;
	public $invoiceCode = null;
	public $url = null;
	public $redPunchingInvoice = null;
	public $carrier = null;
	public $transportNo = null;
	public $oldInvoiceNum = null;
	public $oldInvoiceCode = null;
	public $exPayMoney = null;
	public $createType = null;
	public $invoiceContentType = null;
	public $invoiceContent = null;
	public $xmlUrl = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'type'
			),
			3 => array(
			'var' => 'invoice'
			),
			4 => array(
			'var' => 'invoiceNum'
			),
			5 => array(
			'var' => 'invoiceCode'
			),
			6 => array(
			'var' => 'url'
			),
			7 => array(
			'var' => 'redPunchingInvoice'
			),
			8 => array(
			'var' => 'carrier'
			),
			9 => array(
			'var' => 'transportNo'
			),
			10 => array(
			'var' => 'oldInvoiceNum'
			),
			11 => array(
			'var' => 'oldInvoiceCode'
			),
			12 => array(
			'var' => 'exPayMoney'
			),
			13 => array(
			'var' => 'createType'
			),
			14 => array(
			'var' => 'invoiceContentType'
			),
			15 => array(
			'var' => 'invoiceContent'
			),
			16 => array(
			'var' => 'xmlUrl'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['invoice'])){
				
				$this->invoice = $vals['invoice'];
			}
			
			
			if (isset($vals['invoiceNum'])){
				
				$this->invoiceNum = $vals['invoiceNum'];
			}
			
			
			if (isset($vals['invoiceCode'])){
				
				$this->invoiceCode = $vals['invoiceCode'];
			}
			
			
			if (isset($vals['url'])){
				
				$this->url = $vals['url'];
			}
			
			
			if (isset($vals['redPunchingInvoice'])){
				
				$this->redPunchingInvoice = $vals['redPunchingInvoice'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['oldInvoiceNum'])){
				
				$this->oldInvoiceNum = $vals['oldInvoiceNum'];
			}
			
			
			if (isset($vals['oldInvoiceCode'])){
				
				$this->oldInvoiceCode = $vals['oldInvoiceCode'];
			}
			
			
			if (isset($vals['exPayMoney'])){
				
				$this->exPayMoney = $vals['exPayMoney'];
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
			
			
			if (isset($vals['xmlUrl'])){
				
				$this->xmlUrl = $vals['xmlUrl'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvoiceDetail';
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
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice);
				
			}
			
			
			
			
			if ("invoiceNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceNum);
				
			}
			
			
			
			
			if ("invoiceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceCode);
				
			}
			
			
			
			
			if ("url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->url);
				
			}
			
			
			
			
			if ("redPunchingInvoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->redPunchingInvoice);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("oldInvoiceNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oldInvoiceNum);
				
			}
			
			
			
			
			if ("oldInvoiceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oldInvoiceCode);
				
			}
			
			
			
			
			if ("exPayMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exPayMoney);
				
			}
			
			
			
			
			if ("createType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createType);
				
			}
			
			
			
			
			if ("invoiceContentType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceContentType);
				
			}
			
			
			
			
			if ("invoiceContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceContent);
				
			}
			
			
			
			
			if ("xmlUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->xmlUrl);
				
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
		
		
		if($this->invoiceNum !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceNum');
			$xfer += $output->writeString($this->invoiceNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceCode !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceCode');
			$xfer += $output->writeString($this->invoiceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->url !== null) {
			
			$xfer += $output->writeFieldBegin('url');
			$xfer += $output->writeString($this->url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->redPunchingInvoice !== null) {
			
			$xfer += $output->writeFieldBegin('redPunchingInvoice');
			$xfer += $output->writeString($this->redPunchingInvoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oldInvoiceNum !== null) {
			
			$xfer += $output->writeFieldBegin('oldInvoiceNum');
			$xfer += $output->writeString($this->oldInvoiceNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oldInvoiceCode !== null) {
			
			$xfer += $output->writeFieldBegin('oldInvoiceCode');
			$xfer += $output->writeString($this->oldInvoiceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exPayMoney !== null) {
			
			$xfer += $output->writeFieldBegin('exPayMoney');
			$xfer += $output->writeString($this->exPayMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createType !== null) {
			
			$xfer += $output->writeFieldBegin('createType');
			$xfer += $output->writeString($this->createType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceContentType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceContentType');
			$xfer += $output->writeString($this->invoiceContentType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceContent !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceContent');
			$xfer += $output->writeString($this->invoiceContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->xmlUrl !== null) {
			
			$xfer += $output->writeFieldBegin('xmlUrl');
			$xfer += $output->writeString($this->xmlUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>