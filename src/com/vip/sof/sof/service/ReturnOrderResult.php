<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ReturnOrderResult {
	
	static $_TSPEC;
	public $transportNo = null;
	public $backSn = null;
	public $typeName = null;
	public $stateName = null;
	public $refundMoney = null;
	public $refundStatusName = null;
	public $carrier = null;
	public $createTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'backSn'
			),
			3 => array(
			'var' => 'typeName'
			),
			4 => array(
			'var' => 'stateName'
			),
			5 => array(
			'var' => 'refundMoney'
			),
			6 => array(
			'var' => 'refundStatusName'
			),
			7 => array(
			'var' => 'carrier'
			),
			8 => array(
			'var' => 'createTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['backSn'])){
				
				$this->backSn = $vals['backSn'];
			}
			
			
			if (isset($vals['typeName'])){
				
				$this->typeName = $vals['typeName'];
			}
			
			
			if (isset($vals['stateName'])){
				
				$this->stateName = $vals['stateName'];
			}
			
			
			if (isset($vals['refundMoney'])){
				
				$this->refundMoney = $vals['refundMoney'];
			}
			
			
			if (isset($vals['refundStatusName'])){
				
				$this->refundStatusName = $vals['refundStatusName'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnOrderResult';
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
			
			
			
			
			if ("backSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backSn);
				
			}
			
			
			
			
			if ("typeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->typeName);
				
			}
			
			
			
			
			if ("stateName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stateName);
				
			}
			
			
			
			
			if ("refundMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundMoney);
				
			}
			
			
			
			
			if ("refundStatusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundStatusName);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
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
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backSn !== null) {
			
			$xfer += $output->writeFieldBegin('backSn');
			$xfer += $output->writeString($this->backSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->typeName !== null) {
			
			$xfer += $output->writeFieldBegin('typeName');
			$xfer += $output->writeString($this->typeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stateName !== null) {
			
			$xfer += $output->writeFieldBegin('stateName');
			$xfer += $output->writeString($this->stateName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundMoney !== null) {
			
			$xfer += $output->writeFieldBegin('refundMoney');
			$xfer += $output->writeString($this->refundMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundStatusName !== null) {
			
			$xfer += $output->writeFieldBegin('refundStatusName');
			$xfer += $output->writeString($this->refundStatusName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
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