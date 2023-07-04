<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\da\service;

class ExpressCabinetEventReq {
	
	static $_TSPEC;
	public $tid = null;
	public $expresseId = null;
	public $edCode = null;
	public $receiverMobile = null;
	public $lockerCode = null;
	public $statusCode = null;
	public $actionCode = null;
	public $actionTm = null;
	public $position = null;
	public $stateName = null;
	public $cityName = null;
	public $districtName = null;
	public $street = null;
	public $address = null;
	public $expressCompanyName = null;
	public $courierName = null;
	public $courierMobile = null;
	public $longitude = null;
	public $latitude = null;
	public $remark = null;
	public $lockerCodeHash = null;
	public $collectionType = null;
	public $collectionName = null;
	public $supportScanCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tid'
			),
			2 => array(
			'var' => 'expresseId'
			),
			3 => array(
			'var' => 'edCode'
			),
			4 => array(
			'var' => 'receiverMobile'
			),
			5 => array(
			'var' => 'lockerCode'
			),
			6 => array(
			'var' => 'statusCode'
			),
			7 => array(
			'var' => 'actionCode'
			),
			8 => array(
			'var' => 'actionTm'
			),
			9 => array(
			'var' => 'position'
			),
			10 => array(
			'var' => 'stateName'
			),
			11 => array(
			'var' => 'cityName'
			),
			12 => array(
			'var' => 'districtName'
			),
			13 => array(
			'var' => 'street'
			),
			14 => array(
			'var' => 'address'
			),
			15 => array(
			'var' => 'expressCompanyName'
			),
			16 => array(
			'var' => 'courierName'
			),
			17 => array(
			'var' => 'courierMobile'
			),
			18 => array(
			'var' => 'longitude'
			),
			19 => array(
			'var' => 'latitude'
			),
			20 => array(
			'var' => 'remark'
			),
			21 => array(
			'var' => 'lockerCodeHash'
			),
			22 => array(
			'var' => 'collectionType'
			),
			23 => array(
			'var' => 'collectionName'
			),
			24 => array(
			'var' => 'supportScanCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tid'])){
				
				$this->tid = $vals['tid'];
			}
			
			
			if (isset($vals['expresseId'])){
				
				$this->expresseId = $vals['expresseId'];
			}
			
			
			if (isset($vals['edCode'])){
				
				$this->edCode = $vals['edCode'];
			}
			
			
			if (isset($vals['receiverMobile'])){
				
				$this->receiverMobile = $vals['receiverMobile'];
			}
			
			
			if (isset($vals['lockerCode'])){
				
				$this->lockerCode = $vals['lockerCode'];
			}
			
			
			if (isset($vals['statusCode'])){
				
				$this->statusCode = $vals['statusCode'];
			}
			
			
			if (isset($vals['actionCode'])){
				
				$this->actionCode = $vals['actionCode'];
			}
			
			
			if (isset($vals['actionTm'])){
				
				$this->actionTm = $vals['actionTm'];
			}
			
			
			if (isset($vals['position'])){
				
				$this->position = $vals['position'];
			}
			
			
			if (isset($vals['stateName'])){
				
				$this->stateName = $vals['stateName'];
			}
			
			
			if (isset($vals['cityName'])){
				
				$this->cityName = $vals['cityName'];
			}
			
			
			if (isset($vals['districtName'])){
				
				$this->districtName = $vals['districtName'];
			}
			
			
			if (isset($vals['street'])){
				
				$this->street = $vals['street'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['expressCompanyName'])){
				
				$this->expressCompanyName = $vals['expressCompanyName'];
			}
			
			
			if (isset($vals['courierName'])){
				
				$this->courierName = $vals['courierName'];
			}
			
			
			if (isset($vals['courierMobile'])){
				
				$this->courierMobile = $vals['courierMobile'];
			}
			
			
			if (isset($vals['longitude'])){
				
				$this->longitude = $vals['longitude'];
			}
			
			
			if (isset($vals['latitude'])){
				
				$this->latitude = $vals['latitude'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['lockerCodeHash'])){
				
				$this->lockerCodeHash = $vals['lockerCodeHash'];
			}
			
			
			if (isset($vals['collectionType'])){
				
				$this->collectionType = $vals['collectionType'];
			}
			
			
			if (isset($vals['collectionName'])){
				
				$this->collectionName = $vals['collectionName'];
			}
			
			
			if (isset($vals['supportScanCode'])){
				
				$this->supportScanCode = $vals['supportScanCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExpressCabinetEventReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tid);
				
			}
			
			
			
			
			if ("expresseId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expresseId);
				
			}
			
			
			
			
			if ("edCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->edCode);
				
			}
			
			
			
			
			if ("receiverMobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverMobile);
				
			}
			
			
			
			
			if ("lockerCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lockerCode);
				
			}
			
			
			
			
			if ("statusCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusCode);
				
			}
			
			
			
			
			if ("actionCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actionCode);
				
			}
			
			
			
			
			if ("actionTm" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->actionTm); 
				
			}
			
			
			
			
			if ("position" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->position);
				
			}
			
			
			
			
			if ("stateName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stateName);
				
			}
			
			
			
			
			if ("cityName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityName);
				
			}
			
			
			
			
			if ("districtName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->districtName);
				
			}
			
			
			
			
			if ("street" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->street);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("expressCompanyName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expressCompanyName);
				
			}
			
			
			
			
			if ("courierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->courierName);
				
			}
			
			
			
			
			if ("courierMobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->courierMobile);
				
			}
			
			
			
			
			if ("longitude" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->longitude);
				
			}
			
			
			
			
			if ("latitude" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->latitude);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("lockerCodeHash" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lockerCodeHash);
				
			}
			
			
			
			
			if ("collectionType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->collectionType);
				
			}
			
			
			
			
			if ("collectionName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->collectionName);
				
			}
			
			
			
			
			if ("supportScanCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->supportScanCode); 
				
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
		
		if($this->tid !== null) {
			
			$xfer += $output->writeFieldBegin('tid');
			$xfer += $output->writeString($this->tid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expresseId !== null) {
			
			$xfer += $output->writeFieldBegin('expresseId');
			$xfer += $output->writeString($this->expresseId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->edCode !== null) {
			
			$xfer += $output->writeFieldBegin('edCode');
			$xfer += $output->writeString($this->edCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverMobile !== null) {
			
			$xfer += $output->writeFieldBegin('receiverMobile');
			$xfer += $output->writeString($this->receiverMobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lockerCode !== null) {
			
			$xfer += $output->writeFieldBegin('lockerCode');
			$xfer += $output->writeString($this->lockerCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusCode !== null) {
			
			$xfer += $output->writeFieldBegin('statusCode');
			$xfer += $output->writeString($this->statusCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actionCode !== null) {
			
			$xfer += $output->writeFieldBegin('actionCode');
			$xfer += $output->writeString($this->actionCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actionTm !== null) {
			
			$xfer += $output->writeFieldBegin('actionTm');
			$xfer += $output->writeI64($this->actionTm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->position !== null) {
			
			$xfer += $output->writeFieldBegin('position');
			$xfer += $output->writeString($this->position);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stateName !== null) {
			
			$xfer += $output->writeFieldBegin('stateName');
			$xfer += $output->writeString($this->stateName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityName !== null) {
			
			$xfer += $output->writeFieldBegin('cityName');
			$xfer += $output->writeString($this->cityName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->districtName !== null) {
			
			$xfer += $output->writeFieldBegin('districtName');
			$xfer += $output->writeString($this->districtName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->street !== null) {
			
			$xfer += $output->writeFieldBegin('street');
			$xfer += $output->writeString($this->street);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expressCompanyName !== null) {
			
			$xfer += $output->writeFieldBegin('expressCompanyName');
			$xfer += $output->writeString($this->expressCompanyName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->courierName !== null) {
			
			$xfer += $output->writeFieldBegin('courierName');
			$xfer += $output->writeString($this->courierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->courierMobile !== null) {
			
			$xfer += $output->writeFieldBegin('courierMobile');
			$xfer += $output->writeString($this->courierMobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->longitude !== null) {
			
			$xfer += $output->writeFieldBegin('longitude');
			$xfer += $output->writeString($this->longitude);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->latitude !== null) {
			
			$xfer += $output->writeFieldBegin('latitude');
			$xfer += $output->writeString($this->latitude);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lockerCodeHash !== null) {
			
			$xfer += $output->writeFieldBegin('lockerCodeHash');
			$xfer += $output->writeString($this->lockerCodeHash);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->collectionType !== null) {
			
			$xfer += $output->writeFieldBegin('collectionType');
			$xfer += $output->writeString($this->collectionType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->collectionName !== null) {
			
			$xfer += $output->writeFieldBegin('collectionName');
			$xfer += $output->writeString($this->collectionName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supportScanCode !== null) {
			
			$xfer += $output->writeFieldBegin('supportScanCode');
			$xfer += $output->writeI32($this->supportScanCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>