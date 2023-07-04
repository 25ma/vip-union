<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;

class PurchaseRespData {
	
	static $_TSPEC;
	public $sellingMode = null;
	public $isHt = null;
	public $brandAdminUserId = null;
	public $brandAdminName = null;
	public $brandAdminUserJobnumber = null;
	public $brandAdminDepName = null;
	public $brandAdminDepId = null;
	public $sellingAction = null;
	public $shopCode = null;
	public $sellTimeFromStr = null;
	public $sellTimeToStr = null;
	public $cooperationType = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $dataAreaId = null;
	public $dataAreaName = null;
	public $dataAreaDivide = null;
	public $isMarketPlace = null;
	public $scheduleInfoList = null;
	public $brandAdminUserEmail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sellingMode'
			),
			2 => array(
			'var' => 'isHt'
			),
			3 => array(
			'var' => 'brandAdminUserId'
			),
			4 => array(
			'var' => 'brandAdminName'
			),
			5 => array(
			'var' => 'brandAdminUserJobnumber'
			),
			6 => array(
			'var' => 'brandAdminDepName'
			),
			7 => array(
			'var' => 'brandAdminDepId'
			),
			8 => array(
			'var' => 'sellingAction'
			),
			9 => array(
			'var' => 'shopCode'
			),
			10 => array(
			'var' => 'sellTimeFromStr'
			),
			11 => array(
			'var' => 'sellTimeToStr'
			),
			12 => array(
			'var' => 'cooperationType'
			),
			13 => array(
			'var' => 'vendorCode'
			),
			14 => array(
			'var' => 'vendorName'
			),
			15 => array(
			'var' => 'dataAreaId'
			),
			16 => array(
			'var' => 'dataAreaName'
			),
			17 => array(
			'var' => 'dataAreaDivide'
			),
			18 => array(
			'var' => 'isMarketPlace'
			),
			19 => array(
			'var' => 'scheduleInfoList'
			),
			20 => array(
			'var' => 'brandAdminUserEmail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sellingMode'])){
				
				$this->sellingMode = $vals['sellingMode'];
			}
			
			
			if (isset($vals['isHt'])){
				
				$this->isHt = $vals['isHt'];
			}
			
			
			if (isset($vals['brandAdminUserId'])){
				
				$this->brandAdminUserId = $vals['brandAdminUserId'];
			}
			
			
			if (isset($vals['brandAdminName'])){
				
				$this->brandAdminName = $vals['brandAdminName'];
			}
			
			
			if (isset($vals['brandAdminUserJobnumber'])){
				
				$this->brandAdminUserJobnumber = $vals['brandAdminUserJobnumber'];
			}
			
			
			if (isset($vals['brandAdminDepName'])){
				
				$this->brandAdminDepName = $vals['brandAdminDepName'];
			}
			
			
			if (isset($vals['brandAdminDepId'])){
				
				$this->brandAdminDepId = $vals['brandAdminDepId'];
			}
			
			
			if (isset($vals['sellingAction'])){
				
				$this->sellingAction = $vals['sellingAction'];
			}
			
			
			if (isset($vals['shopCode'])){
				
				$this->shopCode = $vals['shopCode'];
			}
			
			
			if (isset($vals['sellTimeFromStr'])){
				
				$this->sellTimeFromStr = $vals['sellTimeFromStr'];
			}
			
			
			if (isset($vals['sellTimeToStr'])){
				
				$this->sellTimeToStr = $vals['sellTimeToStr'];
			}
			
			
			if (isset($vals['cooperationType'])){
				
				$this->cooperationType = $vals['cooperationType'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['dataAreaId'])){
				
				$this->dataAreaId = $vals['dataAreaId'];
			}
			
			
			if (isset($vals['dataAreaName'])){
				
				$this->dataAreaName = $vals['dataAreaName'];
			}
			
			
			if (isset($vals['dataAreaDivide'])){
				
				$this->dataAreaDivide = $vals['dataAreaDivide'];
			}
			
			
			if (isset($vals['isMarketPlace'])){
				
				$this->isMarketPlace = $vals['isMarketPlace'];
			}
			
			
			if (isset($vals['scheduleInfoList'])){
				
				$this->scheduleInfoList = $vals['scheduleInfoList'];
			}
			
			
			if (isset($vals['brandAdminUserEmail'])){
				
				$this->brandAdminUserEmail = $vals['brandAdminUserEmail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseRespData';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sellingMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->sellingMode); 
				
			}
			
			
			
			
			if ("isHt" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isHt); 
				
			}
			
			
			
			
			if ("brandAdminUserId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brandAdminUserId); 
				
			}
			
			
			
			
			if ("brandAdminName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandAdminName);
				
			}
			
			
			
			
			if ("brandAdminUserJobnumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandAdminUserJobnumber);
				
			}
			
			
			
			
			if ("brandAdminDepName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandAdminDepName);
				
			}
			
			
			
			
			if ("brandAdminDepId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brandAdminDepId); 
				
			}
			
			
			
			
			if ("sellingAction" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellingAction);
				
			}
			
			
			
			
			if ("shopCode" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->shopCode); 
				
			}
			
			
			
			
			if ("sellTimeFromStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellTimeFromStr);
				
			}
			
			
			
			
			if ("sellTimeToStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellTimeToStr);
				
			}
			
			
			
			
			if ("cooperationType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->cooperationType); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorCode); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("dataAreaId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dataAreaId); 
				
			}
			
			
			
			
			if ("dataAreaName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dataAreaName);
				
			}
			
			
			
			
			if ("dataAreaDivide" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dataAreaDivide); 
				
			}
			
			
			
			
			if ("isMarketPlace" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isMarketPlace); 
				
			}
			
			
			
			
			if ("scheduleInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->scheduleInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\purchase\schedules\service\query\ScheduleInfoItem();
						$elem0->read($input);
						
						$this->scheduleInfoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("brandAdminUserEmail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandAdminUserEmail);
				
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
		
		if($this->sellingMode !== null) {
			
			$xfer += $output->writeFieldBegin('sellingMode');
			$xfer += $output->writeByte($this->sellingMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isHt !== null) {
			
			$xfer += $output->writeFieldBegin('isHt');
			$xfer += $output->writeByte($this->isHt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdminUserId !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminUserId');
			$xfer += $output->writeI32($this->brandAdminUserId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdminName !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminName');
			$xfer += $output->writeString($this->brandAdminName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdminUserJobnumber !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminUserJobnumber');
			$xfer += $output->writeString($this->brandAdminUserJobnumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdminDepName !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminDepName');
			$xfer += $output->writeString($this->brandAdminDepName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdminDepId !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminDepId');
			$xfer += $output->writeI32($this->brandAdminDepId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingAction !== null) {
			
			$xfer += $output->writeFieldBegin('sellingAction');
			$xfer += $output->writeString($this->sellingAction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shopCode !== null) {
			
			$xfer += $output->writeFieldBegin('shopCode');
			$xfer += $output->writeI64($this->shopCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeFromStr !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeFromStr');
			$xfer += $output->writeString($this->sellTimeFromStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeToStr !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeToStr');
			$xfer += $output->writeString($this->sellTimeToStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationType !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationType');
			$xfer += $output->writeByte($this->cooperationType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeI32($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataAreaId !== null) {
			
			$xfer += $output->writeFieldBegin('dataAreaId');
			$xfer += $output->writeI32($this->dataAreaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataAreaName !== null) {
			
			$xfer += $output->writeFieldBegin('dataAreaName');
			$xfer += $output->writeString($this->dataAreaName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataAreaDivide !== null) {
			
			$xfer += $output->writeFieldBegin('dataAreaDivide');
			$xfer += $output->writeI32($this->dataAreaDivide);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isMarketPlace !== null) {
			
			$xfer += $output->writeFieldBegin('isMarketPlace');
			$xfer += $output->writeByte($this->isMarketPlace);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleInfoList');
			
			if (!is_array($this->scheduleInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->scheduleInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdminUserEmail !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminUserEmail');
			$xfer += $output->writeString($this->brandAdminUserEmail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>