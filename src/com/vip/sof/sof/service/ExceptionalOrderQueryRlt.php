<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ExceptionalOrderQueryRlt {
	
	static $_TSPEC;
	public $orderSn = null;
	public $stateName = null;
	public $storeId = null;
	public $storeName = null;
	public $transportNo = null;
	public $carrier = null;
	public $transportStatusName = null;
	public $orderTime = null;
	public $state = null;
	public $transportStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'stateName'
			),
			3 => array(
			'var' => 'storeId'
			),
			4 => array(
			'var' => 'storeName'
			),
			5 => array(
			'var' => 'transportNo'
			),
			6 => array(
			'var' => 'carrier'
			),
			7 => array(
			'var' => 'transportStatusName'
			),
			8 => array(
			'var' => 'orderTime'
			),
			9 => array(
			'var' => 'state'
			),
			10 => array(
			'var' => 'transportStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['stateName'])){
				
				$this->stateName = $vals['stateName'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['transportStatusName'])){
				
				$this->transportStatusName = $vals['transportStatusName'];
			}
			
			
			if (isset($vals['orderTime'])){
				
				$this->orderTime = $vals['orderTime'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['transportStatus'])){
				
				$this->transportStatus = $vals['transportStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExceptionalOrderQueryRlt';
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
			
			
			
			
			if ("stateName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stateName);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeName);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("transportStatusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportStatusName);
				
			}
			
			
			
			
			if ("orderTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderTime);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("transportStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportStatus);
				
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
		
		
		if($this->stateName !== null) {
			
			$xfer += $output->writeFieldBegin('stateName');
			$xfer += $output->writeString($this->stateName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportStatusName !== null) {
			
			$xfer += $output->writeFieldBegin('transportStatusName');
			$xfer += $output->writeString($this->transportStatusName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderTime !== null) {
			
			$xfer += $output->writeFieldBegin('orderTime');
			$xfer += $output->writeString($this->orderTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeString($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportStatus !== null) {
			
			$xfer += $output->writeFieldBegin('transportStatus');
			$xfer += $output->writeString($this->transportStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>