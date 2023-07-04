<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CancelListQueryParam {
	
	static $_TSPEC;
	public $orderSn = null;
	public $applySn = null;
	public $auditStatus = null;
	public $storeId = null;
	public $appName = null;
	public $startDate = null;
	public $endDate = null;
	public $pageInfo = null;
	public $requestInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'applySn'
			),
			3 => array(
			'var' => 'auditStatus'
			),
			4 => array(
			'var' => 'storeId'
			),
			5 => array(
			'var' => 'appName'
			),
			6 => array(
			'var' => 'startDate'
			),
			7 => array(
			'var' => 'endDate'
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
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['applySn'])){
				
				$this->applySn = $vals['applySn'];
			}
			
			
			if (isset($vals['auditStatus'])){
				
				$this->auditStatus = $vals['auditStatus'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['startDate'])){
				
				$this->startDate = $vals['startDate'];
			}
			
			
			if (isset($vals['endDate'])){
				
				$this->endDate = $vals['endDate'];
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
		
		return 'CancelListQueryParam';
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
			
			
			
			
			if ("applySn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->applySn);
				
			}
			
			
			
			
			if ("auditStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditStatus);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("startDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->startDate);
				
			}
			
			
			
			
			if ("endDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->endDate);
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applySn !== null) {
			
			$xfer += $output->writeFieldBegin('applySn');
			$xfer += $output->writeString($this->applySn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditStatus !== null) {
			
			$xfer += $output->writeFieldBegin('auditStatus');
			$xfer += $output->writeString($this->auditStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startDate !== null) {
			
			$xfer += $output->writeFieldBegin('startDate');
			$xfer += $output->writeString($this->startDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endDate !== null) {
			
			$xfer += $output->writeFieldBegin('endDate');
			$xfer += $output->writeString($this->endDate);
			
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