<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class RejectDetailInfo {
	
	static $_TSPEC;
	public $transactionId = null;
	public $orderSn = null;
	public $backSn = null;
	public $returnCarrierCode = null;
	public $transportNo = null;
	public $returnType = null;
	public $returnMethod = null;
	public $storeId = null;
	public $storeName = null;
	public $auditType = null;
	public $optionId = null;
	public $option = null;
	public $reason = null;
	public $extra = null;
	public $rejectCertFile = null;
	public $operateTime = null;
	
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
			'var' => 'backSn'
			),
			4 => array(
			'var' => 'returnCarrierCode'
			),
			5 => array(
			'var' => 'transportNo'
			),
			6 => array(
			'var' => 'returnType'
			),
			7 => array(
			'var' => 'returnMethod'
			),
			8 => array(
			'var' => 'storeId'
			),
			9 => array(
			'var' => 'storeName'
			),
			10 => array(
			'var' => 'auditType'
			),
			11 => array(
			'var' => 'optionId'
			),
			12 => array(
			'var' => 'option'
			),
			13 => array(
			'var' => 'reason'
			),
			14 => array(
			'var' => 'extra'
			),
			15 => array(
			'var' => 'rejectCertFile'
			),
			16 => array(
			'var' => 'operateTime'
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
			
			
			if (isset($vals['backSn'])){
				
				$this->backSn = $vals['backSn'];
			}
			
			
			if (isset($vals['returnCarrierCode'])){
				
				$this->returnCarrierCode = $vals['returnCarrierCode'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['returnType'])){
				
				$this->returnType = $vals['returnType'];
			}
			
			
			if (isset($vals['returnMethod'])){
				
				$this->returnMethod = $vals['returnMethod'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
			if (isset($vals['auditType'])){
				
				$this->auditType = $vals['auditType'];
			}
			
			
			if (isset($vals['optionId'])){
				
				$this->optionId = $vals['optionId'];
			}
			
			
			if (isset($vals['option'])){
				
				$this->option = $vals['option'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
			if (isset($vals['extra'])){
				
				$this->extra = $vals['extra'];
			}
			
			
			if (isset($vals['rejectCertFile'])){
				
				$this->rejectCertFile = $vals['rejectCertFile'];
			}
			
			
			if (isset($vals['operateTime'])){
				
				$this->operateTime = $vals['operateTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RejectDetailInfo';
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
			
			
			
			
			if ("backSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backSn);
				
			}
			
			
			
			
			if ("returnCarrierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnCarrierCode);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("returnType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->returnType); 
				
			}
			
			
			
			
			if ("returnMethod" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->returnMethod); 
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeName);
				
			}
			
			
			
			
			if ("auditType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->auditType); 
				
			}
			
			
			
			
			if ("optionId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->optionId); 
				
			}
			
			
			
			
			if ("option" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->option);
				
			}
			
			
			
			
			if ("reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason);
				
			}
			
			
			
			
			if ("extra" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extra);
				
			}
			
			
			
			
			if ("rejectCertFile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rejectCertFile);
				
			}
			
			
			
			
			if ("operateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->operateTime);
				
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
		
		
		if($this->backSn !== null) {
			
			$xfer += $output->writeFieldBegin('backSn');
			$xfer += $output->writeString($this->backSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnCarrierCode !== null) {
			
			$xfer += $output->writeFieldBegin('returnCarrierCode');
			$xfer += $output->writeString($this->returnCarrierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnType !== null) {
			
			$xfer += $output->writeFieldBegin('returnType');
			$xfer += $output->writeByte($this->returnType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnMethod !== null) {
			
			$xfer += $output->writeFieldBegin('returnMethod');
			$xfer += $output->writeByte($this->returnMethod);
			
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
		
		
		if($this->auditType !== null) {
			
			$xfer += $output->writeFieldBegin('auditType');
			$xfer += $output->writeByte($this->auditType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->optionId !== null) {
			
			$xfer += $output->writeFieldBegin('optionId');
			$xfer += $output->writeI32($this->optionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->option !== null) {
			
			$xfer += $output->writeFieldBegin('option');
			$xfer += $output->writeString($this->option);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reason !== null) {
			
			$xfer += $output->writeFieldBegin('reason');
			$xfer += $output->writeString($this->reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extra !== null) {
			
			$xfer += $output->writeFieldBegin('extra');
			$xfer += $output->writeString($this->extra);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rejectCertFile !== null) {
			
			$xfer += $output->writeFieldBegin('rejectCertFile');
			$xfer += $output->writeString($this->rejectCertFile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateTime !== null) {
			
			$xfer += $output->writeFieldBegin('operateTime');
			$xfer += $output->writeI64($this->operateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>