<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\service;

class TmsCarrierTrackInfo {
	
	static $_TSPEC;
	public $custDataId = null;
	public $orderSn = null;
	public $transportNo = null;
	public $orderStatus = null;
	public $orderStatusInfo = null;
	public $currentCityName = null;
	public $operatePerson = null;
	public $orderStatusTime = null;
	public $signMan = null;
	public $stationTel = null;
	public $deliverName = null;
	public $deliverMobile = null;
	public $station = null;
	public $remark = null;
	public $warehouse = null;
	public $boxNo = null;
	public $carNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custDataId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'transportNo'
			),
			4 => array(
			'var' => 'orderStatus'
			),
			5 => array(
			'var' => 'orderStatusInfo'
			),
			6 => array(
			'var' => 'currentCityName'
			),
			7 => array(
			'var' => 'operatePerson'
			),
			8 => array(
			'var' => 'orderStatusTime'
			),
			9 => array(
			'var' => 'signMan'
			),
			10 => array(
			'var' => 'stationTel'
			),
			11 => array(
			'var' => 'deliverName'
			),
			12 => array(
			'var' => 'deliverMobile'
			),
			13 => array(
			'var' => 'station'
			),
			14 => array(
			'var' => 'remark'
			),
			15 => array(
			'var' => 'warehouse'
			),
			16 => array(
			'var' => 'boxNo'
			),
			17 => array(
			'var' => 'carNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custDataId'])){
				
				$this->custDataId = $vals['custDataId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['orderStatus'])){
				
				$this->orderStatus = $vals['orderStatus'];
			}
			
			
			if (isset($vals['orderStatusInfo'])){
				
				$this->orderStatusInfo = $vals['orderStatusInfo'];
			}
			
			
			if (isset($vals['currentCityName'])){
				
				$this->currentCityName = $vals['currentCityName'];
			}
			
			
			if (isset($vals['operatePerson'])){
				
				$this->operatePerson = $vals['operatePerson'];
			}
			
			
			if (isset($vals['orderStatusTime'])){
				
				$this->orderStatusTime = $vals['orderStatusTime'];
			}
			
			
			if (isset($vals['signMan'])){
				
				$this->signMan = $vals['signMan'];
			}
			
			
			if (isset($vals['stationTel'])){
				
				$this->stationTel = $vals['stationTel'];
			}
			
			
			if (isset($vals['deliverName'])){
				
				$this->deliverName = $vals['deliverName'];
			}
			
			
			if (isset($vals['deliverMobile'])){
				
				$this->deliverMobile = $vals['deliverMobile'];
			}
			
			
			if (isset($vals['station'])){
				
				$this->station = $vals['station'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['boxNo'])){
				
				$this->boxNo = $vals['boxNo'];
			}
			
			
			if (isset($vals['carNo'])){
				
				$this->carNo = $vals['carNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsCarrierTrackInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("custDataId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custDataId);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("orderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderStatus);
				
			}
			
			
			
			
			if ("orderStatusInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderStatusInfo);
				
			}
			
			
			
			
			if ("currentCityName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currentCityName);
				
			}
			
			
			
			
			if ("operatePerson" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatePerson);
				
			}
			
			
			
			
			if ("orderStatusTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderStatusTime);
				
			}
			
			
			
			
			if ("signMan" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->signMan);
				
			}
			
			
			
			
			if ("stationTel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stationTel);
				
			}
			
			
			
			
			if ("deliverName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliverName);
				
			}
			
			
			
			
			if ("deliverMobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliverMobile);
				
			}
			
			
			
			
			if ("station" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->station);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("boxNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->boxNo);
				
			}
			
			
			
			
			if ("carNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carNo);
				
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
		
		if($this->custDataId !== null) {
			
			$xfer += $output->writeFieldBegin('custDataId');
			$xfer += $output->writeString($this->custDataId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatus');
			$xfer += $output->writeString($this->orderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStatusInfo !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatusInfo');
			$xfer += $output->writeString($this->orderStatusInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currentCityName !== null) {
			
			$xfer += $output->writeFieldBegin('currentCityName');
			$xfer += $output->writeString($this->currentCityName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operatePerson !== null) {
			
			$xfer += $output->writeFieldBegin('operatePerson');
			$xfer += $output->writeString($this->operatePerson);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStatusTime !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatusTime');
			$xfer += $output->writeString($this->orderStatusTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signMan !== null) {
			
			$xfer += $output->writeFieldBegin('signMan');
			$xfer += $output->writeString($this->signMan);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stationTel !== null) {
			
			$xfer += $output->writeFieldBegin('stationTel');
			$xfer += $output->writeString($this->stationTel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliverName !== null) {
			
			$xfer += $output->writeFieldBegin('deliverName');
			$xfer += $output->writeString($this->deliverName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliverMobile !== null) {
			
			$xfer += $output->writeFieldBegin('deliverMobile');
			$xfer += $output->writeString($this->deliverMobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->station !== null) {
			
			$xfer += $output->writeFieldBegin('station');
			$xfer += $output->writeString($this->station);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->boxNo !== null) {
			
			$xfer += $output->writeFieldBegin('boxNo');
			$xfer += $output->writeString($this->boxNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carNo !== null) {
			
			$xfer += $output->writeFieldBegin('carNo');
			$xfer += $output->writeString($this->carNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>