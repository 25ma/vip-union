<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TransportInfoResult {
	
	static $_TSPEC;
	public $transportNo = null;
	public $carriersShortname = null;
	public $carriersName = null;
	public $carriersCode = null;
	public $packageType = null;
	public $packageSn = null;
	public $deliveryTime = null;
	public $amount = null;
	public $barcode = null;
	public $stat = null;
	public $transportStatus = null;
	public $transportStatusTime = null;
	public $deliverTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'carriersShortname'
			),
			3 => array(
			'var' => 'carriersName'
			),
			4 => array(
			'var' => 'carriersCode'
			),
			5 => array(
			'var' => 'packageType'
			),
			6 => array(
			'var' => 'packageSn'
			),
			7 => array(
			'var' => 'deliveryTime'
			),
			8 => array(
			'var' => 'amount'
			),
			9 => array(
			'var' => 'barcode'
			),
			10 => array(
			'var' => 'stat'
			),
			11 => array(
			'var' => 'transportStatus'
			),
			12 => array(
			'var' => 'transportStatusTime'
			),
			13 => array(
			'var' => 'deliverTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carriersShortname'])){
				
				$this->carriersShortname = $vals['carriersShortname'];
			}
			
			
			if (isset($vals['carriersName'])){
				
				$this->carriersName = $vals['carriersName'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['packageType'])){
				
				$this->packageType = $vals['packageType'];
			}
			
			
			if (isset($vals['packageSn'])){
				
				$this->packageSn = $vals['packageSn'];
			}
			
			
			if (isset($vals['deliveryTime'])){
				
				$this->deliveryTime = $vals['deliveryTime'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['transportStatus'])){
				
				$this->transportStatus = $vals['transportStatus'];
			}
			
			
			if (isset($vals['transportStatusTime'])){
				
				$this->transportStatusTime = $vals['transportStatusTime'];
			}
			
			
			if (isset($vals['deliverTime'])){
				
				$this->deliverTime = $vals['deliverTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportInfoResult';
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
			
			
			
			
			if ("carriersShortname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersShortname);
				
			}
			
			
			
			
			if ("carriersName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersName);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("packageType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageType);
				
			}
			
			
			
			
			if ("packageSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageSn);
				
			}
			
			
			
			
			if ("deliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryTime);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stat);
				
			}
			
			
			
			
			if ("transportStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportStatus);
				
			}
			
			
			
			
			if ("transportStatusTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportStatusTime);
				
			}
			
			
			
			
			if ("deliverTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliverTime);
				
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
		
		
		if($this->carriersShortname !== null) {
			
			$xfer += $output->writeFieldBegin('carriersShortname');
			$xfer += $output->writeString($this->carriersShortname);
			
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
		
		
		if($this->packageType !== null) {
			
			$xfer += $output->writeFieldBegin('packageType');
			$xfer += $output->writeString($this->packageType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageSn !== null) {
			
			$xfer += $output->writeFieldBegin('packageSn');
			$xfer += $output->writeString($this->packageSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryTime');
			$xfer += $output->writeString($this->deliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeString($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeString($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportStatus !== null) {
			
			$xfer += $output->writeFieldBegin('transportStatus');
			$xfer += $output->writeString($this->transportStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportStatusTime !== null) {
			
			$xfer += $output->writeFieldBegin('transportStatusTime');
			$xfer += $output->writeString($this->transportStatusTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliverTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliverTime');
			$xfer += $output->writeString($this->deliverTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>