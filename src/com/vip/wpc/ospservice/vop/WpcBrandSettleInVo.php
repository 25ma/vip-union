<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcBrandSettleInVo {
	
	static $_TSPEC;
	public $storeId = null;
	public $storeName = null;
	public $storeStatus = null;
	public $storeProp = null;
	public $brandStoreName = null;
	public $cateName = null;
	public $actStatus = null;
	public $scheduleStatus = null;
	public $trade = null;
	public $createTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12001 => array(
			'var' => 'storeId'
			),
			12002 => array(
			'var' => 'storeName'
			),
			12004 => array(
			'var' => 'storeStatus'
			),
			12005 => array(
			'var' => 'storeProp'
			),
			12006 => array(
			'var' => 'brandStoreName'
			),
			12008 => array(
			'var' => 'cateName'
			),
			12010 => array(
			'var' => 'actStatus'
			),
			12011 => array(
			'var' => 'scheduleStatus'
			),
			12012 => array(
			'var' => 'trade'
			),
			12013 => array(
			'var' => 'createTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
			if (isset($vals['storeStatus'])){
				
				$this->storeStatus = $vals['storeStatus'];
			}
			
			
			if (isset($vals['storeProp'])){
				
				$this->storeProp = $vals['storeProp'];
			}
			
			
			if (isset($vals['brandStoreName'])){
				
				$this->brandStoreName = $vals['brandStoreName'];
			}
			
			
			if (isset($vals['cateName'])){
				
				$this->cateName = $vals['cateName'];
			}
			
			
			if (isset($vals['actStatus'])){
				
				$this->actStatus = $vals['actStatus'];
			}
			
			
			if (isset($vals['scheduleStatus'])){
				
				$this->scheduleStatus = $vals['scheduleStatus'];
			}
			
			
			if (isset($vals['trade'])){
				
				$this->trade = $vals['trade'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcBrandSettleInVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeName);
				
			}
			
			
			
			
			if ("storeStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeStatus);
				
			}
			
			
			
			
			if ("storeProp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeProp);
				
			}
			
			
			
			
			if ("brandStoreName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandStoreName);
				
			}
			
			
			
			
			if ("cateName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cateName);
				
			}
			
			
			
			
			if ("actStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actStatus);
				
			}
			
			
			
			
			if ("scheduleStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduleStatus);
				
			}
			
			
			
			
			if ("trade" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
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
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeName !== null) {
			
			$xfer += $output->writeFieldBegin('storeName');
			$xfer += $output->writeString($this->storeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeStatus !== null) {
			
			$xfer += $output->writeFieldBegin('storeStatus');
			$xfer += $output->writeString($this->storeStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeProp !== null) {
			
			$xfer += $output->writeFieldBegin('storeProp');
			$xfer += $output->writeString($this->storeProp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandStoreName !== null) {
			
			$xfer += $output->writeFieldBegin('brandStoreName');
			$xfer += $output->writeString($this->brandStoreName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cateName !== null) {
			
			$xfer += $output->writeFieldBegin('cateName');
			$xfer += $output->writeString($this->cateName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actStatus !== null) {
			
			$xfer += $output->writeFieldBegin('actStatus');
			$xfer += $output->writeString($this->actStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleStatus !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleStatus');
			$xfer += $output->writeString($this->scheduleStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trade !== null) {
			
			$xfer += $output->writeFieldBegin('trade');
			$xfer += $output->writeString($this->trade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>