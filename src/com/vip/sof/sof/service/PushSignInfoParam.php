<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class PushSignInfoParam {
	
	static $_TSPEC;
	public $appName = null;
	public $count = null;
	public $times = null;
	public $shippingMethod = null;
	public $storeSource = null;
	public $deliveryDay = null;
	public $lastFlag = null;
	public $startDay = null;
	public $whiteTransportCodes = null;
	public $addDay = null;
	public $syncDay = null;
	public $bcDeliveryDay = null;
	public $bbcDeliveryDay = null;
	public $addEndDay = null;
	public $signType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appName'
			),
			2 => array(
			'var' => 'count'
			),
			3 => array(
			'var' => 'times'
			),
			4 => array(
			'var' => 'shippingMethod'
			),
			5 => array(
			'var' => 'storeSource'
			),
			6 => array(
			'var' => 'deliveryDay'
			),
			7 => array(
			'var' => 'lastFlag'
			),
			8 => array(
			'var' => 'startDay'
			),
			9 => array(
			'var' => 'whiteTransportCodes'
			),
			10 => array(
			'var' => 'addDay'
			),
			11 => array(
			'var' => 'syncDay'
			),
			12 => array(
			'var' => 'bcDeliveryDay'
			),
			13 => array(
			'var' => 'bbcDeliveryDay'
			),
			14 => array(
			'var' => 'addEndDay'
			),
			15 => array(
			'var' => 'signType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['times'])){
				
				$this->times = $vals['times'];
			}
			
			
			if (isset($vals['shippingMethod'])){
				
				$this->shippingMethod = $vals['shippingMethod'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['deliveryDay'])){
				
				$this->deliveryDay = $vals['deliveryDay'];
			}
			
			
			if (isset($vals['lastFlag'])){
				
				$this->lastFlag = $vals['lastFlag'];
			}
			
			
			if (isset($vals['startDay'])){
				
				$this->startDay = $vals['startDay'];
			}
			
			
			if (isset($vals['whiteTransportCodes'])){
				
				$this->whiteTransportCodes = $vals['whiteTransportCodes'];
			}
			
			
			if (isset($vals['addDay'])){
				
				$this->addDay = $vals['addDay'];
			}
			
			
			if (isset($vals['syncDay'])){
				
				$this->syncDay = $vals['syncDay'];
			}
			
			
			if (isset($vals['bcDeliveryDay'])){
				
				$this->bcDeliveryDay = $vals['bcDeliveryDay'];
			}
			
			
			if (isset($vals['bbcDeliveryDay'])){
				
				$this->bbcDeliveryDay = $vals['bbcDeliveryDay'];
			}
			
			
			if (isset($vals['addEndDay'])){
				
				$this->addEndDay = $vals['addEndDay'];
			}
			
			
			if (isset($vals['signType'])){
				
				$this->signType = $vals['signType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PushSignInfoParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->count); 
				
			}
			
			
			
			
			if ("times" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->times); 
				
			}
			
			
			
			
			if ("shippingMethod" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->shippingMethod); 
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->storeSource); 
				
			}
			
			
			
			
			if ("deliveryDay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->deliveryDay); 
				
			}
			
			
			
			
			if ("lastFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->lastFlag); 
				
			}
			
			
			
			
			if ("startDay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->startDay); 
				
			}
			
			
			
			
			if ("whiteTransportCodes" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->whiteTransportCodes);
				
			}
			
			
			
			
			if ("addDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addDay);
				
			}
			
			
			
			
			if ("syncDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->syncDay);
				
			}
			
			
			
			
			if ("bcDeliveryDay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bcDeliveryDay); 
				
			}
			
			
			
			
			if ("bbcDeliveryDay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bbcDeliveryDay); 
				
			}
			
			
			
			
			if ("addEndDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addEndDay);
				
			}
			
			
			
			
			if ("signType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->signType); 
				
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
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI32($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->times !== null) {
			
			$xfer += $output->writeFieldBegin('times');
			$xfer += $output->writeI32($this->times);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shippingMethod !== null) {
			
			$xfer += $output->writeFieldBegin('shippingMethod');
			$xfer += $output->writeI32($this->shippingMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSource !== null) {
			
			$xfer += $output->writeFieldBegin('storeSource');
			$xfer += $output->writeI32($this->storeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryDay !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryDay');
			$xfer += $output->writeI32($this->deliveryDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastFlag !== null) {
			
			$xfer += $output->writeFieldBegin('lastFlag');
			$xfer += $output->writeI32($this->lastFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startDay !== null) {
			
			$xfer += $output->writeFieldBegin('startDay');
			$xfer += $output->writeI32($this->startDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->whiteTransportCodes !== null) {
			
			$xfer += $output->writeFieldBegin('whiteTransportCodes');
			$xfer += $output->writeString($this->whiteTransportCodes);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addDay !== null) {
			
			$xfer += $output->writeFieldBegin('addDay');
			$xfer += $output->writeString($this->addDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->syncDay !== null) {
			
			$xfer += $output->writeFieldBegin('syncDay');
			$xfer += $output->writeString($this->syncDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bcDeliveryDay !== null) {
			
			$xfer += $output->writeFieldBegin('bcDeliveryDay');
			$xfer += $output->writeI32($this->bcDeliveryDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bbcDeliveryDay !== null) {
			
			$xfer += $output->writeFieldBegin('bbcDeliveryDay');
			$xfer += $output->writeI32($this->bbcDeliveryDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addEndDay !== null) {
			
			$xfer += $output->writeFieldBegin('addEndDay');
			$xfer += $output->writeString($this->addEndDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('signType');
		$xfer += $output->writeByte($this->signType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>