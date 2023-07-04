<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ExportTransportNoResult {
	
	static $_TSPEC;
	public $id = null;
	public $opResult = null;
	public $orderSn = null;
	public $transportNo = null;
	public $carriersCode = null;
	public $carriersName = null;
	public $errorMsg = null;
	public $newTransportNo = null;
	public $newCarriersCode = null;
	public $alreadyTransportNoList = null;
	public $newCarriersName = null;
	public $subTransportNo = null;
	public $warnMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'opResult'
			),
			3 => array(
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'transportNo'
			),
			5 => array(
			'var' => 'carriersCode'
			),
			6 => array(
			'var' => 'carriersName'
			),
			7 => array(
			'var' => 'errorMsg'
			),
			8 => array(
			'var' => 'newTransportNo'
			),
			9 => array(
			'var' => 'newCarriersCode'
			),
			10 => array(
			'var' => 'alreadyTransportNoList'
			),
			11 => array(
			'var' => 'newCarriersName'
			),
			12 => array(
			'var' => 'subTransportNo'
			),
			13 => array(
			'var' => 'warnMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['opResult'])){
				
				$this->opResult = $vals['opResult'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['carriersName'])){
				
				$this->carriersName = $vals['carriersName'];
			}
			
			
			if (isset($vals['errorMsg'])){
				
				$this->errorMsg = $vals['errorMsg'];
			}
			
			
			if (isset($vals['newTransportNo'])){
				
				$this->newTransportNo = $vals['newTransportNo'];
			}
			
			
			if (isset($vals['newCarriersCode'])){
				
				$this->newCarriersCode = $vals['newCarriersCode'];
			}
			
			
			if (isset($vals['alreadyTransportNoList'])){
				
				$this->alreadyTransportNoList = $vals['alreadyTransportNoList'];
			}
			
			
			if (isset($vals['newCarriersName'])){
				
				$this->newCarriersName = $vals['newCarriersName'];
			}
			
			
			if (isset($vals['subTransportNo'])){
				
				$this->subTransportNo = $vals['subTransportNo'];
			}
			
			
			if (isset($vals['warnMsg'])){
				
				$this->warnMsg = $vals['warnMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExportTransportNoResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("opResult" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->opResult); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("carriersName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersName);
				
			}
			
			
			
			
			if ("errorMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorMsg);
				
			}
			
			
			
			
			if ("newTransportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newTransportNo);
				
			}
			
			
			
			
			if ("newCarriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newCarriersCode);
				
			}
			
			
			
			
			if ("alreadyTransportNoList" == $schemeField){
				
				$needSkip = false;
				
				$this->alreadyTransportNoList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\AlreadyTransportNo();
						$elem1->read($input);
						
						$this->alreadyTransportNoList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("newCarriersName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newCarriersName);
				
			}
			
			
			
			
			if ("subTransportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subTransportNo);
				
			}
			
			
			
			
			if ("warnMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warnMsg);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opResult !== null) {
			
			$xfer += $output->writeFieldBegin('opResult');
			$xfer += $output->writeByte($this->opResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersName !== null) {
			
			$xfer += $output->writeFieldBegin('carriersName');
			$xfer += $output->writeString($this->carriersName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorMsg !== null) {
			
			$xfer += $output->writeFieldBegin('errorMsg');
			$xfer += $output->writeString($this->errorMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newTransportNo !== null) {
			
			$xfer += $output->writeFieldBegin('newTransportNo');
			$xfer += $output->writeString($this->newTransportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newCarriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('newCarriersCode');
			$xfer += $output->writeString($this->newCarriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->alreadyTransportNoList !== null) {
			
			$xfer += $output->writeFieldBegin('alreadyTransportNoList');
			
			if (!is_array($this->alreadyTransportNoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->alreadyTransportNoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newCarriersName !== null) {
			
			$xfer += $output->writeFieldBegin('newCarriersName');
			$xfer += $output->writeString($this->newCarriersName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subTransportNo !== null) {
			
			$xfer += $output->writeFieldBegin('subTransportNo');
			$xfer += $output->writeString($this->subTransportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warnMsg !== null) {
			
			$xfer += $output->writeFieldBegin('warnMsg');
			$xfer += $output->writeString($this->warnMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>