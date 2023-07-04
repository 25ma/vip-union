<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class CreateSupplierSettlementParam {
	
	static $_TSPEC;
	public $id = null;
	public $supplierCode = null;
	public $defaultStatus = null;
	public $accountType = null;
	public $accountName = null;
	public $payeeName = null;
	public $payeeIdcard = null;
	public $phone = null;
	public $province = null;
	public $city = null;
	public $depositaryBank = null;
	public $depositaryBankBranch = null;
	public $account = null;
	public $swiftCode = null;
	public $bankConnectionNo = null;
	public $bankAddress = null;
	public $country = null;
	public $district = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'supplierCode'
			),
			3 => array(
			'var' => 'defaultStatus'
			),
			4 => array(
			'var' => 'accountType'
			),
			5 => array(
			'var' => 'accountName'
			),
			6 => array(
			'var' => 'payeeName'
			),
			7 => array(
			'var' => 'payeeIdcard'
			),
			8 => array(
			'var' => 'phone'
			),
			9 => array(
			'var' => 'province'
			),
			10 => array(
			'var' => 'city'
			),
			11 => array(
			'var' => 'depositaryBank'
			),
			12 => array(
			'var' => 'depositaryBankBranch'
			),
			13 => array(
			'var' => 'account'
			),
			14 => array(
			'var' => 'swiftCode'
			),
			15 => array(
			'var' => 'bankConnectionNo'
			),
			16 => array(
			'var' => 'bankAddress'
			),
			17 => array(
			'var' => 'country'
			),
			18 => array(
			'var' => 'district'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['supplierCode'])){
				
				$this->supplierCode = $vals['supplierCode'];
			}
			
			
			if (isset($vals['defaultStatus'])){
				
				$this->defaultStatus = $vals['defaultStatus'];
			}
			
			
			if (isset($vals['accountType'])){
				
				$this->accountType = $vals['accountType'];
			}
			
			
			if (isset($vals['accountName'])){
				
				$this->accountName = $vals['accountName'];
			}
			
			
			if (isset($vals['payeeName'])){
				
				$this->payeeName = $vals['payeeName'];
			}
			
			
			if (isset($vals['payeeIdcard'])){
				
				$this->payeeIdcard = $vals['payeeIdcard'];
			}
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['depositaryBank'])){
				
				$this->depositaryBank = $vals['depositaryBank'];
			}
			
			
			if (isset($vals['depositaryBankBranch'])){
				
				$this->depositaryBankBranch = $vals['depositaryBankBranch'];
			}
			
			
			if (isset($vals['account'])){
				
				$this->account = $vals['account'];
			}
			
			
			if (isset($vals['swiftCode'])){
				
				$this->swiftCode = $vals['swiftCode'];
			}
			
			
			if (isset($vals['bankConnectionNo'])){
				
				$this->bankConnectionNo = $vals['bankConnectionNo'];
			}
			
			
			if (isset($vals['bankAddress'])){
				
				$this->bankAddress = $vals['bankAddress'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['district'])){
				
				$this->district = $vals['district'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateSupplierSettlementParam';
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
			
			
			
			
			if ("supplierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplierCode);
				
			}
			
			
			
			
			if ("defaultStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->defaultStatus); 
				
			}
			
			
			
			
			if ("accountType" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->accountType); 
				
			}
			
			
			
			
			if ("accountName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accountName);
				
			}
			
			
			
			
			if ("payeeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payeeName);
				
			}
			
			
			
			
			if ("payeeIdcard" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payeeIdcard);
				
			}
			
			
			
			
			if ("phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("depositaryBank" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->depositaryBank);
				
			}
			
			
			
			
			if ("depositaryBankBranch" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->depositaryBankBranch);
				
			}
			
			
			
			
			if ("account" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->account);
				
			}
			
			
			
			
			if ("swiftCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->swiftCode);
				
			}
			
			
			
			
			if ("bankConnectionNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bankConnectionNo);
				
			}
			
			
			
			
			if ("bankAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bankAddress);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("district" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district);
				
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
		
		
		if($this->supplierCode !== null) {
			
			$xfer += $output->writeFieldBegin('supplierCode');
			$xfer += $output->writeString($this->supplierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('defaultStatus');
		$xfer += $output->writeI64($this->defaultStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('accountType');
		$xfer += $output->writeI64($this->accountType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('accountName');
		$xfer += $output->writeString($this->accountName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('payeeName');
		$xfer += $output->writeString($this->payeeName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('payeeIdcard');
		$xfer += $output->writeString($this->payeeIdcard);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('phone');
		$xfer += $output->writeString($this->phone);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('province');
		$xfer += $output->writeString($this->province);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('city');
		$xfer += $output->writeString($this->city);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('depositaryBank');
		$xfer += $output->writeString($this->depositaryBank);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('depositaryBankBranch');
		$xfer += $output->writeString($this->depositaryBankBranch);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('account');
		$xfer += $output->writeString($this->account);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->swiftCode !== null) {
			
			$xfer += $output->writeFieldBegin('swiftCode');
			$xfer += $output->writeString($this->swiftCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('bankConnectionNo');
		$xfer += $output->writeString($this->bankConnectionNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->bankAddress !== null) {
			
			$xfer += $output->writeFieldBegin('bankAddress');
			$xfer += $output->writeString($this->bankAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->district !== null) {
			
			$xfer += $output->writeFieldBegin('district');
			$xfer += $output->writeString($this->district);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>