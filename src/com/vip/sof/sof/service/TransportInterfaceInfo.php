<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TransportInterfaceInfo {
	
	static $_TSPEC;
	public $transportNo = null;
	public $carriersName = null;
	public $carriersCode = null;
	public $amount = null;
	public $isPrint = null;
	public $stat = null;
	public $transportConfirm = null;
	public $transportNoType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'carriersName'
			),
			3 => array(
			'var' => 'carriersCode'
			),
			4 => array(
			'var' => 'amount'
			),
			5 => array(
			'var' => 'isPrint'
			),
			6 => array(
			'var' => 'stat'
			),
			7 => array(
			'var' => 'transportConfirm'
			),
			8 => array(
			'var' => 'transportNoType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carriersName'])){
				
				$this->carriersName = $vals['carriersName'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['isPrint'])){
				
				$this->isPrint = $vals['isPrint'];
			}
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['transportConfirm'])){
				
				$this->transportConfirm = $vals['transportConfirm'];
			}
			
			
			if (isset($vals['transportNoType'])){
				
				$this->transportNoType = $vals['transportNoType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportInterfaceInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carriersName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersName);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("isPrint" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isPrint); 
				
			}
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stat); 
				
			}
			
			
			
			
			if ("transportConfirm" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transportConfirm); 
				
			}
			
			
			
			
			if ("transportNoType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transportNoType); 
				
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
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersName !== null) {
			
			$xfer += $output->writeFieldBegin('carriersName');
			$xfer += $output->writeString($this->carriersName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPrint !== null) {
			
			$xfer += $output->writeFieldBegin('isPrint');
			$xfer += $output->writeByte($this->isPrint);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeByte($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportConfirm !== null) {
			
			$xfer += $output->writeFieldBegin('transportConfirm');
			$xfer += $output->writeByte($this->transportConfirm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNoType !== null) {
			
			$xfer += $output->writeFieldBegin('transportNoType');
			$xfer += $output->writeByte($this->transportNoType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>