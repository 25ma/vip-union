<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TmsSoTransport {
	
	static $_TSPEC;
	public $orderSn = null;
	public $sn = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $transportNo = null;
	public $carriersCode = null;
	public $carriersShortname = null;
	public $carriersName = null;
	public $warehouse = null;
	public $opTime = null;
	public $edbId = null;
	public $userId = null;
	public $buyer = null;
	public $buyerAddress = null;
	public $buyerState = null;
	public $buyerCity = null;
	public $addTime = null;
	public $orderType = null;
	public $freightForwarderCode = null;
	public $orderStatus = null;
	public $buyerEncrypt = null;
	public $buyerAddressEncrypt = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'sn'
			),
			3 => array(
			'var' => 'vendorCode'
			),
			4 => array(
			'var' => 'vendorName'
			),
			5 => array(
			'var' => 'transportNo'
			),
			6 => array(
			'var' => 'carriersCode'
			),
			7 => array(
			'var' => 'carriersShortname'
			),
			8 => array(
			'var' => 'carriersName'
			),
			9 => array(
			'var' => 'warehouse'
			),
			10 => array(
			'var' => 'opTime'
			),
			11 => array(
			'var' => 'edbId'
			),
			12 => array(
			'var' => 'userId'
			),
			13 => array(
			'var' => 'buyer'
			),
			14 => array(
			'var' => 'buyerAddress'
			),
			15 => array(
			'var' => 'buyerState'
			),
			16 => array(
			'var' => 'buyerCity'
			),
			17 => array(
			'var' => 'addTime'
			),
			18 => array(
			'var' => 'orderType'
			),
			19 => array(
			'var' => 'freightForwarderCode'
			),
			20 => array(
			'var' => 'orderStatus'
			),
			21 => array(
			'var' => 'buyerEncrypt'
			),
			22 => array(
			'var' => 'buyerAddressEncrypt'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['carriersShortname'])){
				
				$this->carriersShortname = $vals['carriersShortname'];
			}
			
			
			if (isset($vals['carriersName'])){
				
				$this->carriersName = $vals['carriersName'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['opTime'])){
				
				$this->opTime = $vals['opTime'];
			}
			
			
			if (isset($vals['edbId'])){
				
				$this->edbId = $vals['edbId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['buyerAddress'])){
				
				$this->buyerAddress = $vals['buyerAddress'];
			}
			
			
			if (isset($vals['buyerState'])){
				
				$this->buyerState = $vals['buyerState'];
			}
			
			
			if (isset($vals['buyerCity'])){
				
				$this->buyerCity = $vals['buyerCity'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['freightForwarderCode'])){
				
				$this->freightForwarderCode = $vals['freightForwarderCode'];
			}
			
			
			if (isset($vals['orderStatus'])){
				
				$this->orderStatus = $vals['orderStatus'];
			}
			
			
			if (isset($vals['buyerEncrypt'])){
				
				$this->buyerEncrypt = $vals['buyerEncrypt'];
			}
			
			
			if (isset($vals['buyerAddressEncrypt'])){
				
				$this->buyerAddressEncrypt = $vals['buyerAddressEncrypt'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsSoTransport';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("carriersShortname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersShortname);
				
			}
			
			
			
			
			if ("carriersName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersName);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("opTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opTime);
				
			}
			
			
			
			
			if ("edbId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->edbId);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("buyerAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerAddress);
				
			}
			
			
			
			
			if ("buyerState" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerState);
				
			}
			
			
			
			
			if ("buyerCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerCity);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addTime);
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderType);
				
			}
			
			
			
			
			if ("freightForwarderCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->freightForwarderCode);
				
			}
			
			
			
			
			if ("orderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderStatus);
				
			}
			
			
			
			
			if ("buyerEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerEncrypt);
				
			}
			
			
			
			
			if ("buyerAddressEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerAddressEncrypt);
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
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
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opTime !== null) {
			
			$xfer += $output->writeFieldBegin('opTime');
			$xfer += $output->writeString($this->opTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->edbId !== null) {
			
			$xfer += $output->writeFieldBegin('edbId');
			$xfer += $output->writeString($this->edbId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerAddress !== null) {
			
			$xfer += $output->writeFieldBegin('buyerAddress');
			$xfer += $output->writeString($this->buyerAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerState !== null) {
			
			$xfer += $output->writeFieldBegin('buyerState');
			$xfer += $output->writeString($this->buyerState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerCity !== null) {
			
			$xfer += $output->writeFieldBegin('buyerCity');
			$xfer += $output->writeString($this->buyerCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeString($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeString($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->freightForwarderCode !== null) {
			
			$xfer += $output->writeFieldBegin('freightForwarderCode');
			$xfer += $output->writeString($this->freightForwarderCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatus');
			$xfer += $output->writeString($this->orderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('buyerEncrypt');
			$xfer += $output->writeString($this->buyerEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerAddressEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('buyerAddressEncrypt');
			$xfer += $output->writeString($this->buyerAddressEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>