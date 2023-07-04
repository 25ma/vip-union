<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\freight\service\entity;

class FlightInfoPushModel {
	
	static $_TSPEC;
	public $skid = null;
	public $flightNo = null;
	public $mark = null;
	public $depCode = null;
	public $arrCode = null;
	public $depCity = null;
	public $arrCity = null;
	public $depCityCode = null;
	public $arrCityCode = null;
	public $depCountryCode = null;
	public $arrCountryCode = null;
	public $depCountry = null;
	public $arrCountry = null;
	public $depTimeString = null;
	public $arrTimeString = null;
	public $depTimezone = null;
	public $arrTimezone = null;
	public $arrTimeMark = null;
	public $flightDay = null;
	public $sactiveString = null;
	public $eactiveString = null;
	public $aircraft = null;
	public $share = null;
	public $carryNo = null;
	public $stop = null;
	public $stopCode = null;
	public $distance = null;
	public $ontimeArrRate = null;
	public $avgArrDelayTime = null;
	public $passenger = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'skid'
			),
			2 => array(
			'var' => 'flightNo'
			),
			3 => array(
			'var' => 'mark'
			),
			4 => array(
			'var' => 'depCode'
			),
			5 => array(
			'var' => 'arrCode'
			),
			6 => array(
			'var' => 'depCity'
			),
			7 => array(
			'var' => 'arrCity'
			),
			8 => array(
			'var' => 'depCityCode'
			),
			9 => array(
			'var' => 'arrCityCode'
			),
			10 => array(
			'var' => 'depCountryCode'
			),
			11 => array(
			'var' => 'arrCountryCode'
			),
			12 => array(
			'var' => 'depCountry'
			),
			13 => array(
			'var' => 'arrCountry'
			),
			14 => array(
			'var' => 'depTimeString'
			),
			15 => array(
			'var' => 'arrTimeString'
			),
			16 => array(
			'var' => 'depTimezone'
			),
			17 => array(
			'var' => 'arrTimezone'
			),
			18 => array(
			'var' => 'arrTimeMark'
			),
			19 => array(
			'var' => 'flightDay'
			),
			20 => array(
			'var' => 'sactiveString'
			),
			21 => array(
			'var' => 'eactiveString'
			),
			22 => array(
			'var' => 'aircraft'
			),
			23 => array(
			'var' => 'share'
			),
			24 => array(
			'var' => 'carryNo'
			),
			25 => array(
			'var' => 'stop'
			),
			26 => array(
			'var' => 'stopCode'
			),
			27 => array(
			'var' => 'distance'
			),
			28 => array(
			'var' => 'ontimeArrRate'
			),
			29 => array(
			'var' => 'avgArrDelayTime'
			),
			30 => array(
			'var' => 'passenger'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['skid'])){
				
				$this->skid = $vals['skid'];
			}
			
			
			if (isset($vals['flightNo'])){
				
				$this->flightNo = $vals['flightNo'];
			}
			
			
			if (isset($vals['mark'])){
				
				$this->mark = $vals['mark'];
			}
			
			
			if (isset($vals['depCode'])){
				
				$this->depCode = $vals['depCode'];
			}
			
			
			if (isset($vals['arrCode'])){
				
				$this->arrCode = $vals['arrCode'];
			}
			
			
			if (isset($vals['depCity'])){
				
				$this->depCity = $vals['depCity'];
			}
			
			
			if (isset($vals['arrCity'])){
				
				$this->arrCity = $vals['arrCity'];
			}
			
			
			if (isset($vals['depCityCode'])){
				
				$this->depCityCode = $vals['depCityCode'];
			}
			
			
			if (isset($vals['arrCityCode'])){
				
				$this->arrCityCode = $vals['arrCityCode'];
			}
			
			
			if (isset($vals['depCountryCode'])){
				
				$this->depCountryCode = $vals['depCountryCode'];
			}
			
			
			if (isset($vals['arrCountryCode'])){
				
				$this->arrCountryCode = $vals['arrCountryCode'];
			}
			
			
			if (isset($vals['depCountry'])){
				
				$this->depCountry = $vals['depCountry'];
			}
			
			
			if (isset($vals['arrCountry'])){
				
				$this->arrCountry = $vals['arrCountry'];
			}
			
			
			if (isset($vals['depTimeString'])){
				
				$this->depTimeString = $vals['depTimeString'];
			}
			
			
			if (isset($vals['arrTimeString'])){
				
				$this->arrTimeString = $vals['arrTimeString'];
			}
			
			
			if (isset($vals['depTimezone'])){
				
				$this->depTimezone = $vals['depTimezone'];
			}
			
			
			if (isset($vals['arrTimezone'])){
				
				$this->arrTimezone = $vals['arrTimezone'];
			}
			
			
			if (isset($vals['arrTimeMark'])){
				
				$this->arrTimeMark = $vals['arrTimeMark'];
			}
			
			
			if (isset($vals['flightDay'])){
				
				$this->flightDay = $vals['flightDay'];
			}
			
			
			if (isset($vals['sactiveString'])){
				
				$this->sactiveString = $vals['sactiveString'];
			}
			
			
			if (isset($vals['eactiveString'])){
				
				$this->eactiveString = $vals['eactiveString'];
			}
			
			
			if (isset($vals['aircraft'])){
				
				$this->aircraft = $vals['aircraft'];
			}
			
			
			if (isset($vals['share'])){
				
				$this->share = $vals['share'];
			}
			
			
			if (isset($vals['carryNo'])){
				
				$this->carryNo = $vals['carryNo'];
			}
			
			
			if (isset($vals['stop'])){
				
				$this->stop = $vals['stop'];
			}
			
			
			if (isset($vals['stopCode'])){
				
				$this->stopCode = $vals['stopCode'];
			}
			
			
			if (isset($vals['distance'])){
				
				$this->distance = $vals['distance'];
			}
			
			
			if (isset($vals['ontimeArrRate'])){
				
				$this->ontimeArrRate = $vals['ontimeArrRate'];
			}
			
			
			if (isset($vals['avgArrDelayTime'])){
				
				$this->avgArrDelayTime = $vals['avgArrDelayTime'];
			}
			
			
			if (isset($vals['passenger'])){
				
				$this->passenger = $vals['passenger'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FlightInfoPushModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("skid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->skid);
				
			}
			
			
			
			
			if ("flightNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->flightNo);
				
			}
			
			
			
			
			if ("mark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mark);
				
			}
			
			
			
			
			if ("depCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->depCode);
				
			}
			
			
			
			
			if ("arrCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrCode);
				
			}
			
			
			
			
			if ("depCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->depCity);
				
			}
			
			
			
			
			if ("arrCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrCity);
				
			}
			
			
			
			
			if ("depCityCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->depCityCode);
				
			}
			
			
			
			
			if ("arrCityCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrCityCode);
				
			}
			
			
			
			
			if ("depCountryCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->depCountryCode);
				
			}
			
			
			
			
			if ("arrCountryCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrCountryCode);
				
			}
			
			
			
			
			if ("depCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->depCountry);
				
			}
			
			
			
			
			if ("arrCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrCountry);
				
			}
			
			
			
			
			if ("depTimeString" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->depTimeString);
				
			}
			
			
			
			
			if ("arrTimeString" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrTimeString);
				
			}
			
			
			
			
			if ("depTimezone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->depTimezone);
				
			}
			
			
			
			
			if ("arrTimezone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrTimezone);
				
			}
			
			
			
			
			if ("arrTimeMark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrTimeMark);
				
			}
			
			
			
			
			if ("flightDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->flightDay);
				
			}
			
			
			
			
			if ("sactiveString" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sactiveString);
				
			}
			
			
			
			
			if ("eactiveString" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->eactiveString);
				
			}
			
			
			
			
			if ("aircraft" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->aircraft);
				
			}
			
			
			
			
			if ("share" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->share);
				
			}
			
			
			
			
			if ("carryNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carryNo);
				
			}
			
			
			
			
			if ("stop" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stop);
				
			}
			
			
			
			
			if ("stopCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stopCode);
				
			}
			
			
			
			
			if ("distance" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->distance);
				
			}
			
			
			
			
			if ("ontimeArrRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ontimeArrRate);
				
			}
			
			
			
			
			if ("avgArrDelayTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->avgArrDelayTime);
				
			}
			
			
			
			
			if ("passenger" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->passenger);
				
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
		
		if($this->skid !== null) {
			
			$xfer += $output->writeFieldBegin('skid');
			$xfer += $output->writeString($this->skid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flightNo !== null) {
			
			$xfer += $output->writeFieldBegin('flightNo');
			$xfer += $output->writeString($this->flightNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mark !== null) {
			
			$xfer += $output->writeFieldBegin('mark');
			$xfer += $output->writeString($this->mark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->depCode !== null) {
			
			$xfer += $output->writeFieldBegin('depCode');
			$xfer += $output->writeString($this->depCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrCode !== null) {
			
			$xfer += $output->writeFieldBegin('arrCode');
			$xfer += $output->writeString($this->arrCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->depCity !== null) {
			
			$xfer += $output->writeFieldBegin('depCity');
			$xfer += $output->writeString($this->depCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrCity !== null) {
			
			$xfer += $output->writeFieldBegin('arrCity');
			$xfer += $output->writeString($this->arrCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->depCityCode !== null) {
			
			$xfer += $output->writeFieldBegin('depCityCode');
			$xfer += $output->writeString($this->depCityCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrCityCode !== null) {
			
			$xfer += $output->writeFieldBegin('arrCityCode');
			$xfer += $output->writeString($this->arrCityCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->depCountryCode !== null) {
			
			$xfer += $output->writeFieldBegin('depCountryCode');
			$xfer += $output->writeString($this->depCountryCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrCountryCode !== null) {
			
			$xfer += $output->writeFieldBegin('arrCountryCode');
			$xfer += $output->writeString($this->arrCountryCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->depCountry !== null) {
			
			$xfer += $output->writeFieldBegin('depCountry');
			$xfer += $output->writeString($this->depCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrCountry !== null) {
			
			$xfer += $output->writeFieldBegin('arrCountry');
			$xfer += $output->writeString($this->arrCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->depTimeString !== null) {
			
			$xfer += $output->writeFieldBegin('depTimeString');
			$xfer += $output->writeString($this->depTimeString);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrTimeString !== null) {
			
			$xfer += $output->writeFieldBegin('arrTimeString');
			$xfer += $output->writeString($this->arrTimeString);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->depTimezone !== null) {
			
			$xfer += $output->writeFieldBegin('depTimezone');
			$xfer += $output->writeString($this->depTimezone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrTimezone !== null) {
			
			$xfer += $output->writeFieldBegin('arrTimezone');
			$xfer += $output->writeString($this->arrTimezone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrTimeMark !== null) {
			
			$xfer += $output->writeFieldBegin('arrTimeMark');
			$xfer += $output->writeString($this->arrTimeMark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flightDay !== null) {
			
			$xfer += $output->writeFieldBegin('flightDay');
			$xfer += $output->writeString($this->flightDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sactiveString !== null) {
			
			$xfer += $output->writeFieldBegin('sactiveString');
			$xfer += $output->writeString($this->sactiveString);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eactiveString !== null) {
			
			$xfer += $output->writeFieldBegin('eactiveString');
			$xfer += $output->writeString($this->eactiveString);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->aircraft !== null) {
			
			$xfer += $output->writeFieldBegin('aircraft');
			$xfer += $output->writeString($this->aircraft);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->share !== null) {
			
			$xfer += $output->writeFieldBegin('share');
			$xfer += $output->writeString($this->share);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carryNo !== null) {
			
			$xfer += $output->writeFieldBegin('carryNo');
			$xfer += $output->writeString($this->carryNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stop !== null) {
			
			$xfer += $output->writeFieldBegin('stop');
			$xfer += $output->writeString($this->stop);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stopCode !== null) {
			
			$xfer += $output->writeFieldBegin('stopCode');
			$xfer += $output->writeString($this->stopCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->distance !== null) {
			
			$xfer += $output->writeFieldBegin('distance');
			$xfer += $output->writeString($this->distance);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ontimeArrRate !== null) {
			
			$xfer += $output->writeFieldBegin('ontimeArrRate');
			$xfer += $output->writeString($this->ontimeArrRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->avgArrDelayTime !== null) {
			
			$xfer += $output->writeFieldBegin('avgArrDelayTime');
			$xfer += $output->writeString($this->avgArrDelayTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->passenger !== null) {
			
			$xfer += $output->writeFieldBegin('passenger');
			$xfer += $output->writeString($this->passenger);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>