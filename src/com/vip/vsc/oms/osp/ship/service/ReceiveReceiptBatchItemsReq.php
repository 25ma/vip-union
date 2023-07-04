<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vsc\oms\osp\ship\service;

class ReceiveReceiptBatchItemsReq {
	
	static $_TSPEC;
	public $billNo = null;
	public $billType = null;
	public $txId = null;
	public $carrierCode = null;
	public $transportNo = null;
	public $operationTime = null;
	public $receiptBatchItemInfos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'billNo'
			),
			2 => array(
			'var' => 'billType'
			),
			3 => array(
			'var' => 'txId'
			),
			4 => array(
			'var' => 'carrierCode'
			),
			5 => array(
			'var' => 'transportNo'
			),
			6 => array(
			'var' => 'operationTime'
			),
			7 => array(
			'var' => 'receiptBatchItemInfos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['billNo'])){
				
				$this->billNo = $vals['billNo'];
			}
			
			
			if (isset($vals['billType'])){
				
				$this->billType = $vals['billType'];
			}
			
			
			if (isset($vals['txId'])){
				
				$this->txId = $vals['txId'];
			}
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['operationTime'])){
				
				$this->operationTime = $vals['operationTime'];
			}
			
			
			if (isset($vals['receiptBatchItemInfos'])){
				
				$this->receiptBatchItemInfos = $vals['receiptBatchItemInfos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReceiveReceiptBatchItemsReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("billNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billNo);
				
			}
			
			
			
			
			if ("billType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billType);
				
			}
			
			
			
			
			if ("txId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txId);
				
			}
			
			
			
			
			if ("carrierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierCode);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("operationTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->operationTime); 
				
			}
			
			
			
			
			if ("receiptBatchItemInfos" == $schemeField){
				
				$needSkip = false;
				
				$this->receiptBatchItemInfos = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vsc\oms\osp\ship\service\ReceiptBatchItemInfo();
						$elem1->read($input);
						
						$this->receiptBatchItemInfos[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('billNo');
		$xfer += $output->writeString($this->billNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('billType');
		$xfer += $output->writeString($this->billType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('txId');
		$xfer += $output->writeString($this->txId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->carrierCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierCode');
			$xfer += $output->writeString($this->carrierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('operationTime');
		$xfer += $output->writeI64($this->operationTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->receiptBatchItemInfos !== null) {
			
			$xfer += $output->writeFieldBegin('receiptBatchItemInfos');
			
			if (!is_array($this->receiptBatchItemInfos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->receiptBatchItemInfos as $iter0){
				
				
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