<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AutoCancelType {
	
	static $_TSPEC;
	public $orderTimeStart = null;
	public $orderTimeEnd = null;
	public $autoCancelTimeStart = null;
	public $autoCancelTimeEnd = null;
	public $orderSn = null;
	public $receiver = null;
	public $cellphone = null;
	public $pageInfo = null;
	public $requestInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderTimeStart'
			),
			2 => array(
			'var' => 'orderTimeEnd'
			),
			3 => array(
			'var' => 'autoCancelTimeStart'
			),
			4 => array(
			'var' => 'autoCancelTimeEnd'
			),
			5 => array(
			'var' => 'orderSn'
			),
			6 => array(
			'var' => 'receiver'
			),
			7 => array(
			'var' => 'cellphone'
			),
			8 => array(
			'var' => 'pageInfo'
			),
			9 => array(
			'var' => 'requestInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderTimeStart'])){
				
				$this->orderTimeStart = $vals['orderTimeStart'];
			}
			
			
			if (isset($vals['orderTimeEnd'])){
				
				$this->orderTimeEnd = $vals['orderTimeEnd'];
			}
			
			
			if (isset($vals['autoCancelTimeStart'])){
				
				$this->autoCancelTimeStart = $vals['autoCancelTimeStart'];
			}
			
			
			if (isset($vals['autoCancelTimeEnd'])){
				
				$this->autoCancelTimeEnd = $vals['autoCancelTimeEnd'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['receiver'])){
				
				$this->receiver = $vals['receiver'];
			}
			
			
			if (isset($vals['cellphone'])){
				
				$this->cellphone = $vals['cellphone'];
			}
			
			
			if (isset($vals['pageInfo'])){
				
				$this->pageInfo = $vals['pageInfo'];
			}
			
			
			if (isset($vals['requestInfo'])){
				
				$this->requestInfo = $vals['requestInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AutoCancelType';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderTimeStart);
				
			}
			
			
			
			
			if ("orderTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderTimeEnd);
				
			}
			
			
			
			
			if ("autoCancelTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->autoCancelTimeStart);
				
			}
			
			
			
			
			if ("autoCancelTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->autoCancelTimeEnd);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("receiver" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver);
				
			}
			
			
			
			
			if ("cellphone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cellphone);
				
			}
			
			
			
			
			if ("pageInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->pageInfo = new \com\vip\sof\sof\service\PageInfo();
				$this->pageInfo->read($input);
				
			}
			
			
			
			
			if ("requestInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->requestInfo = new \com\vip\sof\sof\service\RequestInfo();
				$this->requestInfo->read($input);
				
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
		
		if($this->orderTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('orderTimeStart');
			$xfer += $output->writeString($this->orderTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('orderTimeEnd');
			$xfer += $output->writeString($this->orderTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoCancelTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('autoCancelTimeStart');
			$xfer += $output->writeString($this->autoCancelTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoCancelTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('autoCancelTimeEnd');
			$xfer += $output->writeString($this->autoCancelTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver !== null) {
			
			$xfer += $output->writeFieldBegin('receiver');
			$xfer += $output->writeString($this->receiver);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cellphone !== null) {
			
			$xfer += $output->writeFieldBegin('cellphone');
			$xfer += $output->writeString($this->cellphone);
			
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
		
		
		if($this->requestInfo !== null) {
			
			$xfer += $output->writeFieldBegin('requestInfo');
			
			if (!is_object($this->requestInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->requestInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>