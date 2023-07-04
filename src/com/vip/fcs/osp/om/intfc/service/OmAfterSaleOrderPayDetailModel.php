<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmAfterSaleOrderPayDetailModel {
	
	static $_TSPEC;
	public $id = null;
	public $ebsOrderReturnId = null;
	public $payType = null;
	public $payId = null;
	public $originalOrderSn = null;
	public $refundSn = null;
	public $paySn = null;
	public $refundTime = null;
	public $refundMoney = null;
	public $refundWay = null;
	public $createTime = null;
	public $updateTime = null;
	public $refundClass = null;
	public $ctReference = null;
	public $payMethod = null;
	public $invoiceDeductMoney = null;
	public $taxMoneyFlag = null;
	public $payAccount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'ebsOrderReturnId'
			),
			3 => array(
			'var' => 'payType'
			),
			4 => array(
			'var' => 'payId'
			),
			5 => array(
			'var' => 'originalOrderSn'
			),
			6 => array(
			'var' => 'refundSn'
			),
			7 => array(
			'var' => 'paySn'
			),
			8 => array(
			'var' => 'refundTime'
			),
			9 => array(
			'var' => 'refundMoney'
			),
			10 => array(
			'var' => 'refundWay'
			),
			11 => array(
			'var' => 'createTime'
			),
			12 => array(
			'var' => 'updateTime'
			),
			13 => array(
			'var' => 'refundClass'
			),
			14 => array(
			'var' => 'ctReference'
			),
			15 => array(
			'var' => 'payMethod'
			),
			16 => array(
			'var' => 'invoiceDeductMoney'
			),
			17 => array(
			'var' => 'taxMoneyFlag'
			),
			18 => array(
			'var' => 'payAccount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['ebsOrderReturnId'])){
				
				$this->ebsOrderReturnId = $vals['ebsOrderReturnId'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['payId'])){
				
				$this->payId = $vals['payId'];
			}
			
			
			if (isset($vals['originalOrderSn'])){
				
				$this->originalOrderSn = $vals['originalOrderSn'];
			}
			
			
			if (isset($vals['refundSn'])){
				
				$this->refundSn = $vals['refundSn'];
			}
			
			
			if (isset($vals['paySn'])){
				
				$this->paySn = $vals['paySn'];
			}
			
			
			if (isset($vals['refundTime'])){
				
				$this->refundTime = $vals['refundTime'];
			}
			
			
			if (isset($vals['refundMoney'])){
				
				$this->refundMoney = $vals['refundMoney'];
			}
			
			
			if (isset($vals['refundWay'])){
				
				$this->refundWay = $vals['refundWay'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['refundClass'])){
				
				$this->refundClass = $vals['refundClass'];
			}
			
			
			if (isset($vals['ctReference'])){
				
				$this->ctReference = $vals['ctReference'];
			}
			
			
			if (isset($vals['payMethod'])){
				
				$this->payMethod = $vals['payMethod'];
			}
			
			
			if (isset($vals['invoiceDeductMoney'])){
				
				$this->invoiceDeductMoney = $vals['invoiceDeductMoney'];
			}
			
			
			if (isset($vals['taxMoneyFlag'])){
				
				$this->taxMoneyFlag = $vals['taxMoneyFlag'];
			}
			
			
			if (isset($vals['payAccount'])){
				
				$this->payAccount = $vals['payAccount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmAfterSaleOrderPayDetailModel';
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
			
			
			
			
			if ("ebsOrderReturnId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ebsOrderReturnId); 
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->payType); 
				
			}
			
			
			
			
			if ("payId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->payId); 
				
			}
			
			
			
			
			if ("originalOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalOrderSn);
				
			}
			
			
			
			
			if ("refundSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundSn);
				
			}
			
			
			
			
			if ("paySn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paySn);
				
			}
			
			
			
			
			if ("refundTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refundTime); 
				
			}
			
			
			
			
			if ("refundMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundMoney);
				
			}
			
			
			
			
			if ("refundWay" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->refundWay); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("refundClass" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundClass);
				
			}
			
			
			
			
			if ("ctReference" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ctReference);
				
			}
			
			
			
			
			if ("payMethod" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payMethod);
				
			}
			
			
			
			
			if ("invoiceDeductMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceDeductMoney);
				
			}
			
			
			
			
			if ("taxMoneyFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->taxMoneyFlag); 
				
			}
			
			
			
			
			if ("payAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payAccount);
				
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
		
		
		if($this->ebsOrderReturnId !== null) {
			
			$xfer += $output->writeFieldBegin('ebsOrderReturnId');
			$xfer += $output->writeI64($this->ebsOrderReturnId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeI32($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payId !== null) {
			
			$xfer += $output->writeFieldBegin('payId');
			$xfer += $output->writeI32($this->payId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('originalOrderSn');
			$xfer += $output->writeString($this->originalOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundSn !== null) {
			
			$xfer += $output->writeFieldBegin('refundSn');
			$xfer += $output->writeString($this->refundSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paySn !== null) {
			
			$xfer += $output->writeFieldBegin('paySn');
			$xfer += $output->writeString($this->paySn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundTime !== null) {
			
			$xfer += $output->writeFieldBegin('refundTime');
			$xfer += $output->writeI64($this->refundTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundMoney !== null) {
			
			$xfer += $output->writeFieldBegin('refundMoney');
			$xfer += $output->writeString($this->refundMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundWay !== null) {
			
			$xfer += $output->writeFieldBegin('refundWay');
			$xfer += $output->writeByte($this->refundWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundClass !== null) {
			
			$xfer += $output->writeFieldBegin('refundClass');
			$xfer += $output->writeString($this->refundClass);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ctReference !== null) {
			
			$xfer += $output->writeFieldBegin('ctReference');
			$xfer += $output->writeString($this->ctReference);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payMethod !== null) {
			
			$xfer += $output->writeFieldBegin('payMethod');
			$xfer += $output->writeString($this->payMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceDeductMoney !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDeductMoney');
			$xfer += $output->writeString($this->invoiceDeductMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxMoneyFlag !== null) {
			
			$xfer += $output->writeFieldBegin('taxMoneyFlag');
			$xfer += $output->writeI32($this->taxMoneyFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payAccount !== null) {
			
			$xfer += $output->writeFieldBegin('payAccount');
			$xfer += $output->writeString($this->payAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>