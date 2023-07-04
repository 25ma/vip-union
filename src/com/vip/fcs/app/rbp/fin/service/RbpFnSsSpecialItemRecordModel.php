<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\app\rbp\fin\service;

class RbpFnSsSpecialItemRecordModel {
	
	static $_TSPEC;
	public $seqNo = null;
	public $companyCode = null;
	public $glDate = null;
	public $orgSegCode = null;
	public $orgId = null;
	public $itemCode = null;
	public $posOrderNo = null;
	public $posOrderTime = null;
	public $counterpartyName = null;
	public $goodsDetail = null;
	public $goodsQuantity = null;
	public $amount = null;
	public $operatorName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'seqNo'
			),
			2 => array(
			'var' => 'companyCode'
			),
			3 => array(
			'var' => 'glDate'
			),
			4 => array(
			'var' => 'orgSegCode'
			),
			5 => array(
			'var' => 'orgId'
			),
			6 => array(
			'var' => 'itemCode'
			),
			7 => array(
			'var' => 'posOrderNo'
			),
			8 => array(
			'var' => 'posOrderTime'
			),
			9 => array(
			'var' => 'counterpartyName'
			),
			10 => array(
			'var' => 'goodsDetail'
			),
			11 => array(
			'var' => 'goodsQuantity'
			),
			12 => array(
			'var' => 'amount'
			),
			13 => array(
			'var' => 'operatorName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['seqNo'])){
				
				$this->seqNo = $vals['seqNo'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['glDate'])){
				
				$this->glDate = $vals['glDate'];
			}
			
			
			if (isset($vals['orgSegCode'])){
				
				$this->orgSegCode = $vals['orgSegCode'];
			}
			
			
			if (isset($vals['orgId'])){
				
				$this->orgId = $vals['orgId'];
			}
			
			
			if (isset($vals['itemCode'])){
				
				$this->itemCode = $vals['itemCode'];
			}
			
			
			if (isset($vals['posOrderNo'])){
				
				$this->posOrderNo = $vals['posOrderNo'];
			}
			
			
			if (isset($vals['posOrderTime'])){
				
				$this->posOrderTime = $vals['posOrderTime'];
			}
			
			
			if (isset($vals['counterpartyName'])){
				
				$this->counterpartyName = $vals['counterpartyName'];
			}
			
			
			if (isset($vals['goodsDetail'])){
				
				$this->goodsDetail = $vals['goodsDetail'];
			}
			
			
			if (isset($vals['goodsQuantity'])){
				
				$this->goodsQuantity = $vals['goodsQuantity'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['operatorName'])){
				
				$this->operatorName = $vals['operatorName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpFnSsSpecialItemRecordModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("seqNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seqNo);
				
			}
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("glDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->glDate);
				
			}
			
			
			
			
			if ("orgSegCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgSegCode);
				
			}
			
			
			
			
			if ("orgId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orgId); 
				
			}
			
			
			
			
			if ("itemCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemCode);
				
			}
			
			
			
			
			if ("posOrderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posOrderNo);
				
			}
			
			
			
			
			if ("posOrderTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->posOrderTime); 
				
			}
			
			
			
			
			if ("counterpartyName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->counterpartyName);
				
			}
			
			
			
			
			if ("goodsDetail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsDetail);
				
			}
			
			
			
			
			if ("goodsQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->goodsQuantity);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->amount);
				
			}
			
			
			
			
			if ("operatorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatorName);
				
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
		
		$xfer += $output->writeFieldBegin('seqNo');
		$xfer += $output->writeString($this->seqNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('companyCode');
		$xfer += $output->writeString($this->companyCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('glDate');
		$xfer += $output->writeString($this->glDate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orgSegCode');
		$xfer += $output->writeString($this->orgSegCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orgId');
		$xfer += $output->writeI64($this->orgId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('itemCode');
		$xfer += $output->writeString($this->itemCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->posOrderNo !== null) {
			
			$xfer += $output->writeFieldBegin('posOrderNo');
			$xfer += $output->writeString($this->posOrderNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->posOrderTime !== null) {
			
			$xfer += $output->writeFieldBegin('posOrderTime');
			$xfer += $output->writeI64($this->posOrderTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('counterpartyName');
		$xfer += $output->writeString($this->counterpartyName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goodsDetail');
		$xfer += $output->writeString($this->goodsDetail);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goodsQuantity');
		$xfer += $output->writeDouble($this->goodsQuantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeDouble($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->operatorName !== null) {
			
			$xfer += $output->writeFieldBegin('operatorName');
			$xfer += $output->writeString($this->operatorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>