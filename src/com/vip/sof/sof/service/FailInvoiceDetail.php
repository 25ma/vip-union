<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class FailInvoiceDetail {
	
	static $_TSPEC;
	public $invoiceDetail = null;
	public $resultList = null;
	public $lineNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'invoiceDetail'
			),
			2 => array(
			'var' => 'resultList'
			),
			3 => array(
			'var' => 'lineNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['invoiceDetail'])){
				
				$this->invoiceDetail = $vals['invoiceDetail'];
			}
			
			
			if (isset($vals['resultList'])){
				
				$this->resultList = $vals['resultList'];
			}
			
			
			if (isset($vals['lineNo'])){
				
				$this->lineNo = $vals['lineNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FailInvoiceDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("invoiceDetail" == $schemeField){
				
				$needSkip = false;
				
				$this->invoiceDetail = new \com\vip\sof\sof\service\InvoiceDetail();
				$this->invoiceDetail->read($input);
				
			}
			
			
			
			
			if ("resultList" == $schemeField){
				
				$needSkip = false;
				
				$this->resultList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->resultList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("lineNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lineNo);
				
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
		
		if($this->invoiceDetail !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDetail');
			
			if (!is_object($this->invoiceDetail)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->invoiceDetail->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resultList !== null) {
			
			$xfer += $output->writeFieldBegin('resultList');
			
			if (!is_array($this->resultList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->resultList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineNo !== null) {
			
			$xfer += $output->writeFieldBegin('lineNo');
			$xfer += $output->writeString($this->lineNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>