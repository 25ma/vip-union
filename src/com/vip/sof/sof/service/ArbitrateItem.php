<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ArbitrateItem {
	
	static $_TSPEC;
	public $transactionId = null;
	public $orderSn = null;
	public $otherNo = null;
	public $arbitrateResultName = null;
	public $transportNo = null;
	public $arbitrateType = null;
	public $arbitrateTypeName = null;
	public $arbitrateOption = null;
	public $arbitrateOptionName = null;
	public $storeId = null;
	public $storeName = null;
	public $applyTime = null;
	public $auditTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transactionId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'otherNo'
			),
			4 => array(
			'var' => 'arbitrateResultName'
			),
			5 => array(
			'var' => 'transportNo'
			),
			6 => array(
			'var' => 'arbitrateType'
			),
			7 => array(
			'var' => 'arbitrateTypeName'
			),
			8 => array(
			'var' => 'arbitrateOption'
			),
			9 => array(
			'var' => 'arbitrateOptionName'
			),
			10 => array(
			'var' => 'storeId'
			),
			11 => array(
			'var' => 'storeName'
			),
			12 => array(
			'var' => 'applyTime'
			),
			13 => array(
			'var' => 'auditTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transactionId'])){
				
				$this->transactionId = $vals['transactionId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['otherNo'])){
				
				$this->otherNo = $vals['otherNo'];
			}
			
			
			if (isset($vals['arbitrateResultName'])){
				
				$this->arbitrateResultName = $vals['arbitrateResultName'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['arbitrateType'])){
				
				$this->arbitrateType = $vals['arbitrateType'];
			}
			
			
			if (isset($vals['arbitrateTypeName'])){
				
				$this->arbitrateTypeName = $vals['arbitrateTypeName'];
			}
			
			
			if (isset($vals['arbitrateOption'])){
				
				$this->arbitrateOption = $vals['arbitrateOption'];
			}
			
			
			if (isset($vals['arbitrateOptionName'])){
				
				$this->arbitrateOptionName = $vals['arbitrateOptionName'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
			if (isset($vals['applyTime'])){
				
				$this->applyTime = $vals['applyTime'];
			}
			
			
			if (isset($vals['auditTime'])){
				
				$this->auditTime = $vals['auditTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ArbitrateItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transactionId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionId);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("otherNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->otherNo);
				
			}
			
			
			
			
			if ("arbitrateResultName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arbitrateResultName);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("arbitrateType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->arbitrateType); 
				
			}
			
			
			
			
			if ("arbitrateTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arbitrateTypeName);
				
			}
			
			
			
			
			if ("arbitrateOption" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->arbitrateOption); 
				
			}
			
			
			
			
			if ("arbitrateOptionName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arbitrateOptionName);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeName);
				
			}
			
			
			
			
			if ("applyTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->applyTime);
				
			}
			
			
			
			
			if ("auditTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditTime);
				
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
		
		if($this->transactionId !== null) {
			
			$xfer += $output->writeFieldBegin('transactionId');
			$xfer += $output->writeString($this->transactionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->otherNo !== null) {
			
			$xfer += $output->writeFieldBegin('otherNo');
			$xfer += $output->writeString($this->otherNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arbitrateResultName !== null) {
			
			$xfer += $output->writeFieldBegin('arbitrateResultName');
			$xfer += $output->writeString($this->arbitrateResultName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arbitrateType !== null) {
			
			$xfer += $output->writeFieldBegin('arbitrateType');
			$xfer += $output->writeByte($this->arbitrateType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arbitrateTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('arbitrateTypeName');
			$xfer += $output->writeString($this->arbitrateTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arbitrateOption !== null) {
			
			$xfer += $output->writeFieldBegin('arbitrateOption');
			$xfer += $output->writeByte($this->arbitrateOption);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arbitrateOptionName !== null) {
			
			$xfer += $output->writeFieldBegin('arbitrateOptionName');
			$xfer += $output->writeString($this->arbitrateOptionName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeName !== null) {
			
			$xfer += $output->writeFieldBegin('storeName');
			$xfer += $output->writeString($this->storeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyTime !== null) {
			
			$xfer += $output->writeFieldBegin('applyTime');
			$xfer += $output->writeString($this->applyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditTime !== null) {
			
			$xfer += $output->writeFieldBegin('auditTime');
			$xfer += $output->writeString($this->auditTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>