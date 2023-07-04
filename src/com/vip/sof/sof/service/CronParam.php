<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CronParam {
	
	static $_TSPEC;
	public $appName = null;
	public $count = null;
	public $orderSn = null;
	public $times = null;
	public $autoRefuseRejectTime = null;
	public $autoRefuseRejectStartTime = null;
	public $startCheckTime = null;
	public $opType = null;
	public $autoRefuseReRejectTime = null;
	
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
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'times'
			),
			5 => array(
			'var' => 'autoRefuseRejectTime'
			),
			6 => array(
			'var' => 'autoRefuseRejectStartTime'
			),
			7 => array(
			'var' => 'startCheckTime'
			),
			8 => array(
			'var' => 'opType'
			),
			9 => array(
			'var' => 'autoRefuseReRejectTime'
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
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['times'])){
				
				$this->times = $vals['times'];
			}
			
			
			if (isset($vals['autoRefuseRejectTime'])){
				
				$this->autoRefuseRejectTime = $vals['autoRefuseRejectTime'];
			}
			
			
			if (isset($vals['autoRefuseRejectStartTime'])){
				
				$this->autoRefuseRejectStartTime = $vals['autoRefuseRejectStartTime'];
			}
			
			
			if (isset($vals['startCheckTime'])){
				
				$this->startCheckTime = $vals['startCheckTime'];
			}
			
			
			if (isset($vals['opType'])){
				
				$this->opType = $vals['opType'];
			}
			
			
			if (isset($vals['autoRefuseReRejectTime'])){
				
				$this->autoRefuseReRejectTime = $vals['autoRefuseReRejectTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CronParam';
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
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("times" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->times); 
				
			}
			
			
			
			
			if ("autoRefuseRejectTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->autoRefuseRejectTime); 
				
			}
			
			
			
			
			if ("autoRefuseRejectStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->autoRefuseRejectStartTime);
				
			}
			
			
			
			
			if ("startCheckTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->startCheckTime); 
				
			}
			
			
			
			
			if ("opType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->opType); 
				
			}
			
			
			
			
			if ("autoRefuseReRejectTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->autoRefuseReRejectTime); 
				
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
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->times !== null) {
			
			$xfer += $output->writeFieldBegin('times');
			$xfer += $output->writeI32($this->times);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoRefuseRejectTime !== null) {
			
			$xfer += $output->writeFieldBegin('autoRefuseRejectTime');
			$xfer += $output->writeI32($this->autoRefuseRejectTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoRefuseRejectStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('autoRefuseRejectStartTime');
			$xfer += $output->writeString($this->autoRefuseRejectStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startCheckTime !== null) {
			
			$xfer += $output->writeFieldBegin('startCheckTime');
			$xfer += $output->writeI32($this->startCheckTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opType !== null) {
			
			$xfer += $output->writeFieldBegin('opType');
			$xfer += $output->writeByte($this->opType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoRefuseReRejectTime !== null) {
			
			$xfer += $output->writeFieldBegin('autoRefuseReRejectTime');
			$xfer += $output->writeI32($this->autoRefuseReRejectTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>