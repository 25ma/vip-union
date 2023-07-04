<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class InvoiceInfo {
	
	static $_TSPEC;
	public $invoiceType = null;
	public $invoice = null;
	public $invoiceMoney = null;
	public $taxPayerNo = null;
	public $invoiceDetailInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'invoiceType'
			),
			2 => array(
			'var' => 'invoice'
			),
			3 => array(
			'var' => 'invoiceMoney'
			),
			4 => array(
			'var' => 'taxPayerNo'
			),
			5 => array(
			'var' => 'invoiceDetailInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['invoice'])){
				
				$this->invoice = $vals['invoice'];
			}
			
			
			if (isset($vals['invoiceMoney'])){
				
				$this->invoiceMoney = $vals['invoiceMoney'];
			}
			
			
			if (isset($vals['taxPayerNo'])){
				
				$this->taxPayerNo = $vals['taxPayerNo'];
			}
			
			
			if (isset($vals['invoiceDetailInfo'])){
				
				$this->invoiceDetailInfo = $vals['invoiceDetailInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvoiceInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->invoiceType); 
				
			}
			
			
			
			
			if ("invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice);
				
			}
			
			
			
			
			if ("invoiceMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceMoney);
				
			}
			
			
			
			
			if ("taxPayerNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxPayerNo);
				
			}
			
			
			
			
			if ("invoiceDetailInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceDetailInfo);
				
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
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeI32($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice !== null) {
			
			$xfer += $output->writeFieldBegin('invoice');
			$xfer += $output->writeString($this->invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceMoney !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceMoney');
			$xfer += $output->writeString($this->invoiceMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxPayerNo !== null) {
			
			$xfer += $output->writeFieldBegin('taxPayerNo');
			$xfer += $output->writeString($this->taxPayerNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceDetailInfo !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDetailInfo');
			$xfer += $output->writeString($this->invoiceDetailInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>