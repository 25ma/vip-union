<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class InvoiceImportResult {
	
	static $_TSPEC;
	public $list = null;
	public $ocrTaxPayerNo = null;
	public $ocrInvoiceMoney = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'list'
			),
			2 => array(
			'var' => 'ocrTaxPayerNo'
			),
			3 => array(
			'var' => 'ocrInvoiceMoney'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['list'])){
				
				$this->list = $vals['list'];
			}
			
			
			if (isset($vals['ocrTaxPayerNo'])){
				
				$this->ocrTaxPayerNo = $vals['ocrTaxPayerNo'];
			}
			
			
			if (isset($vals['ocrInvoiceMoney'])){
				
				$this->ocrInvoiceMoney = $vals['ocrInvoiceMoney'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvoiceImportResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("list" == $schemeField){
				
				$needSkip = false;
				
				$this->list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->list[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("ocrTaxPayerNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ocrTaxPayerNo);
				
			}
			
			
			
			
			if ("ocrInvoiceMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ocrInvoiceMoney);
				
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
		
		if($this->list !== null) {
			
			$xfer += $output->writeFieldBegin('list');
			
			if (!is_array($this->list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->list as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ocrTaxPayerNo !== null) {
			
			$xfer += $output->writeFieldBegin('ocrTaxPayerNo');
			$xfer += $output->writeString($this->ocrTaxPayerNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ocrInvoiceMoney !== null) {
			
			$xfer += $output->writeFieldBegin('ocrInvoiceMoney');
			$xfer += $output->writeString($this->ocrInvoiceMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>