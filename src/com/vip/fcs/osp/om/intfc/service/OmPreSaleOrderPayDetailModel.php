<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmPreSaleOrderPayDetailModel {
	
	static $_TSPEC;
	public $ebsOrderId = null;
	public $payType = null;
	public $payId = null;
	public $paySn = null;
	public $payTime = null;
	public $payMoney = null;
	public $originalOrderSn = null;
	public $period = null;
	public $refundWay = null;
	public $createTime = null;
	public $payTypeName = null;
	public $refundId = null;
	public $refundRequestDetailSn = null;
	public $invoiceDeductMoney = null;
	public $serviceNo = null;
	public $payAccount = null;
	public $payStatus = null;
	public $extraData = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ebsOrderId'
			),
			2 => array(
			'var' => 'payType'
			),
			3 => array(
			'var' => 'payId'
			),
			4 => array(
			'var' => 'paySn'
			),
			5 => array(
			'var' => 'payTime'
			),
			6 => array(
			'var' => 'payMoney'
			),
			7 => array(
			'var' => 'originalOrderSn'
			),
			8 => array(
			'var' => 'period'
			),
			9 => array(
			'var' => 'refundWay'
			),
			10 => array(
			'var' => 'createTime'
			),
			11 => array(
			'var' => 'payTypeName'
			),
			12 => array(
			'var' => 'refundId'
			),
			13 => array(
			'var' => 'refundRequestDetailSn'
			),
			14 => array(
			'var' => 'invoiceDeductMoney'
			),
			15 => array(
			'var' => 'serviceNo'
			),
			16 => array(
			'var' => 'payAccount'
			),
			17 => array(
			'var' => 'payStatus'
			),
			18 => array(
			'var' => 'extraData'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ebsOrderId'])){
				
				$this->ebsOrderId = $vals['ebsOrderId'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['payId'])){
				
				$this->payId = $vals['payId'];
			}
			
			
			if (isset($vals['paySn'])){
				
				$this->paySn = $vals['paySn'];
			}
			
			
			if (isset($vals['payTime'])){
				
				$this->payTime = $vals['payTime'];
			}
			
			
			if (isset($vals['payMoney'])){
				
				$this->payMoney = $vals['payMoney'];
			}
			
			
			if (isset($vals['originalOrderSn'])){
				
				$this->originalOrderSn = $vals['originalOrderSn'];
			}
			
			
			if (isset($vals['period'])){
				
				$this->period = $vals['period'];
			}
			
			
			if (isset($vals['refundWay'])){
				
				$this->refundWay = $vals['refundWay'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['payTypeName'])){
				
				$this->payTypeName = $vals['payTypeName'];
			}
			
			
			if (isset($vals['refundId'])){
				
				$this->refundId = $vals['refundId'];
			}
			
			
			if (isset($vals['refundRequestDetailSn'])){
				
				$this->refundRequestDetailSn = $vals['refundRequestDetailSn'];
			}
			
			
			if (isset($vals['invoiceDeductMoney'])){
				
				$this->invoiceDeductMoney = $vals['invoiceDeductMoney'];
			}
			
			
			if (isset($vals['serviceNo'])){
				
				$this->serviceNo = $vals['serviceNo'];
			}
			
			
			if (isset($vals['payAccount'])){
				
				$this->payAccount = $vals['payAccount'];
			}
			
			
			if (isset($vals['payStatus'])){
				
				$this->payStatus = $vals['payStatus'];
			}
			
			
			if (isset($vals['extraData'])){
				
				$this->extraData = $vals['extraData'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmPreSaleOrderPayDetailModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ebsOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ebsOrderId); 
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->payType); 
				
			}
			
			
			
			
			if ("payId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payId); 
				
			}
			
			
			
			
			if ("paySn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paySn);
				
			}
			
			
			
			
			if ("payTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payTime); 
				
			}
			
			
			
			
			if ("payMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payMoney);
				
			}
			
			
			
			
			if ("originalOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalOrderSn);
				
			}
			
			
			
			
			if ("period" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->period); 
				
			}
			
			
			
			
			if ("refundWay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refundWay); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("payTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payTypeName);
				
			}
			
			
			
			
			if ("refundId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refundId); 
				
			}
			
			
			
			
			if ("refundRequestDetailSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundRequestDetailSn);
				
			}
			
			
			
			
			if ("invoiceDeductMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceDeductMoney);
				
			}
			
			
			
			
			if ("serviceNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->serviceNo); 
				
			}
			
			
			
			
			if ("payAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payAccount);
				
			}
			
			
			
			
			if ("payStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payStatus);
				
			}
			
			
			
			
			if ("extraData" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extraData);
				
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
		
		if($this->ebsOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('ebsOrderId');
			$xfer += $output->writeI64($this->ebsOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeI32($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payId !== null) {
			
			$xfer += $output->writeFieldBegin('payId');
			$xfer += $output->writeI64($this->payId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paySn !== null) {
			
			$xfer += $output->writeFieldBegin('paySn');
			$xfer += $output->writeString($this->paySn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTime !== null) {
			
			$xfer += $output->writeFieldBegin('payTime');
			$xfer += $output->writeI64($this->payTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payMoney !== null) {
			
			$xfer += $output->writeFieldBegin('payMoney');
			$xfer += $output->writeString($this->payMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('originalOrderSn');
			$xfer += $output->writeString($this->originalOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->period !== null) {
			
			$xfer += $output->writeFieldBegin('period');
			$xfer += $output->writeI32($this->period);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundWay !== null) {
			
			$xfer += $output->writeFieldBegin('refundWay');
			$xfer += $output->writeI32($this->refundWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('payTypeName');
			$xfer += $output->writeString($this->payTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundId !== null) {
			
			$xfer += $output->writeFieldBegin('refundId');
			$xfer += $output->writeI64($this->refundId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundRequestDetailSn !== null) {
			
			$xfer += $output->writeFieldBegin('refundRequestDetailSn');
			$xfer += $output->writeString($this->refundRequestDetailSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceDeductMoney !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDeductMoney');
			$xfer += $output->writeString($this->invoiceDeductMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serviceNo !== null) {
			
			$xfer += $output->writeFieldBegin('serviceNo');
			$xfer += $output->writeI64($this->serviceNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payAccount !== null) {
			
			$xfer += $output->writeFieldBegin('payAccount');
			$xfer += $output->writeString($this->payAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payStatus !== null) {
			
			$xfer += $output->writeFieldBegin('payStatus');
			$xfer += $output->writeString($this->payStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extraData !== null) {
			
			$xfer += $output->writeFieldBegin('extraData');
			$xfer += $output->writeString($this->extraData);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>