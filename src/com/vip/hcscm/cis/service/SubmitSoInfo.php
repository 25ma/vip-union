<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SubmitSoInfo {
	
	static $_TSPEC;
	public $soNo = null;
	public $rdcCode = null;
	public $warehouseCode = null;
	public $storeCode = null;
	public $salesChannel = null;
	public $channelSoNo = null;
	public $parentSoNo = null;
	public $payTime = null;
	public $qty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'soNo'
			),
			2 => array(
			'var' => 'rdcCode'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'storeCode'
			),
			5 => array(
			'var' => 'salesChannel'
			),
			6 => array(
			'var' => 'channelSoNo'
			),
			7 => array(
			'var' => 'parentSoNo'
			),
			8 => array(
			'var' => 'payTime'
			),
			9 => array(
			'var' => 'qty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['soNo'])){
				
				$this->soNo = $vals['soNo'];
			}
			
			
			if (isset($vals['rdcCode'])){
				
				$this->rdcCode = $vals['rdcCode'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['storeCode'])){
				
				$this->storeCode = $vals['storeCode'];
			}
			
			
			if (isset($vals['salesChannel'])){
				
				$this->salesChannel = $vals['salesChannel'];
			}
			
			
			if (isset($vals['channelSoNo'])){
				
				$this->channelSoNo = $vals['channelSoNo'];
			}
			
			
			if (isset($vals['parentSoNo'])){
				
				$this->parentSoNo = $vals['parentSoNo'];
			}
			
			
			if (isset($vals['payTime'])){
				
				$this->payTime = $vals['payTime'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubmitSoInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("soNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->soNo);
				
			}
			
			
			
			
			if ("rdcCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rdcCode);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("storeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeCode);
				
			}
			
			
			
			
			if ("salesChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesChannel);
				
			}
			
			
			
			
			if ("channelSoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelSoNo);
				
			}
			
			
			
			
			if ("parentSoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentSoNo);
				
			}
			
			
			
			
			if ("payTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payTime);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
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
		
		$xfer += $output->writeFieldBegin('soNo');
		$xfer += $output->writeString($this->soNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->rdcCode !== null) {
			
			$xfer += $output->writeFieldBegin('rdcCode');
			$xfer += $output->writeString($this->rdcCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('storeCode');
		$xfer += $output->writeString($this->storeCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('salesChannel');
		$xfer += $output->writeString($this->salesChannel);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->channelSoNo !== null) {
			
			$xfer += $output->writeFieldBegin('channelSoNo');
			$xfer += $output->writeString($this->channelSoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentSoNo !== null) {
			
			$xfer += $output->writeFieldBegin('parentSoNo');
			$xfer += $output->writeString($this->parentSoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTime !== null) {
			
			$xfer += $output->writeFieldBegin('payTime');
			$xfer += $output->writeI64($this->payTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('qty');
		$xfer += $output->writeI32($this->qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>