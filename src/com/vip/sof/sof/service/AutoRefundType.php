<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AutoRefundType {
	
	static $_TSPEC;
	public $rejectTimeStart = null;
	public $rejectTimeEnd = null;
	public $autoRefundTimeStart = null;
	public $autoRefundTimeEnd = null;
	public $orderSn = null;
	public $backSn = null;
	public $transportNu = null;
	public $pageInfo = null;
	public $requestInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'rejectTimeStart'
			),
			2 => array(
			'var' => 'rejectTimeEnd'
			),
			3 => array(
			'var' => 'autoRefundTimeStart'
			),
			4 => array(
			'var' => 'autoRefundTimeEnd'
			),
			5 => array(
			'var' => 'orderSn'
			),
			6 => array(
			'var' => 'backSn'
			),
			7 => array(
			'var' => 'transportNu'
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
			
			
			if (isset($vals['rejectTimeStart'])){
				
				$this->rejectTimeStart = $vals['rejectTimeStart'];
			}
			
			
			if (isset($vals['rejectTimeEnd'])){
				
				$this->rejectTimeEnd = $vals['rejectTimeEnd'];
			}
			
			
			if (isset($vals['autoRefundTimeStart'])){
				
				$this->autoRefundTimeStart = $vals['autoRefundTimeStart'];
			}
			
			
			if (isset($vals['autoRefundTimeEnd'])){
				
				$this->autoRefundTimeEnd = $vals['autoRefundTimeEnd'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['backSn'])){
				
				$this->backSn = $vals['backSn'];
			}
			
			
			if (isset($vals['transportNu'])){
				
				$this->transportNu = $vals['transportNu'];
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
		
		return 'AutoRefundType';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("rejectTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rejectTimeStart);
				
			}
			
			
			
			
			if ("rejectTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rejectTimeEnd);
				
			}
			
			
			
			
			if ("autoRefundTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->autoRefundTimeStart);
				
			}
			
			
			
			
			if ("autoRefundTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->autoRefundTimeEnd);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("backSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backSn);
				
			}
			
			
			
			
			if ("transportNu" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNu);
				
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
		
		if($this->rejectTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('rejectTimeStart');
			$xfer += $output->writeString($this->rejectTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rejectTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('rejectTimeEnd');
			$xfer += $output->writeString($this->rejectTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoRefundTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('autoRefundTimeStart');
			$xfer += $output->writeString($this->autoRefundTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoRefundTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('autoRefundTimeEnd');
			$xfer += $output->writeString($this->autoRefundTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backSn !== null) {
			
			$xfer += $output->writeFieldBegin('backSn');
			$xfer += $output->writeString($this->backSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNu !== null) {
			
			$xfer += $output->writeFieldBegin('transportNu');
			$xfer += $output->writeString($this->transportNu);
			
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