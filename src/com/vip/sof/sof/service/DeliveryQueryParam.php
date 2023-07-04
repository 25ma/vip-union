<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class DeliveryQueryParam {
	
	static $_TSPEC;
	public $id = null;
	public $opName = null;
	public $opResult = null;
	public $orderSn = null;
	public $carrierName = null;
	public $carrierCode = null;
	public $transportNo = null;
	public $operator = null;
	public $createTime = null;
	public $pageInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'opName'
			),
			3 => array(
			'var' => 'opResult'
			),
			4 => array(
			'var' => 'orderSn'
			),
			5 => array(
			'var' => 'carrierName'
			),
			6 => array(
			'var' => 'carrierCode'
			),
			7 => array(
			'var' => 'transportNo'
			),
			8 => array(
			'var' => 'operator'
			),
			9 => array(
			'var' => 'createTime'
			),
			10 => array(
			'var' => 'pageInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['opName'])){
				
				$this->opName = $vals['opName'];
			}
			
			
			if (isset($vals['opResult'])){
				
				$this->opResult = $vals['opResult'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['carrierName'])){
				
				$this->carrierName = $vals['carrierName'];
			}
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['pageInfo'])){
				
				$this->pageInfo = $vals['pageInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DeliveryQueryParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("opName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opName);
				
			}
			
			
			
			
			if ("opResult" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->opResult); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("carrierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierName);
				
			}
			
			
			
			
			if ("carrierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierCode);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("pageInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->pageInfo = new \com\vip\sof\sof\service\PageInfo();
				$this->pageInfo->read($input);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opName !== null) {
			
			$xfer += $output->writeFieldBegin('opName');
			$xfer += $output->writeString($this->opName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opResult !== null) {
			
			$xfer += $output->writeFieldBegin('opResult');
			$xfer += $output->writeI32($this->opResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierName !== null) {
			
			$xfer += $output->writeFieldBegin('carrierName');
			$xfer += $output->writeString($this->carrierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierCode');
			$xfer += $output->writeString($this->carrierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageInfo !== null) {
			
			$xfer += $output->writeFieldBegin('pageInfo');
			
			if (!is_object($this->pageInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pageInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>