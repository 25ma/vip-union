<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ArbitrateQueryParam {
	
	static $_TSPEC;
	public $arbitrateType = null;
	public $arbitrateOption = null;
	public $arbitrateResult = null;
	public $pageInfo = null;
	public $lessAuditTime = null;
	public $greaterAuditTime = null;
	public $storeId = null;
	public $otherNo = null;
	public $transportNo = null;
	public $orderSn = null;
	public $isSecondAudit = null;
	public $lessApplyTime = null;
	public $greaterApplyTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'arbitrateType'
			),
			2 => array(
			'var' => 'arbitrateOption'
			),
			3 => array(
			'var' => 'arbitrateResult'
			),
			4 => array(
			'var' => 'pageInfo'
			),
			5 => array(
			'var' => 'lessAuditTime'
			),
			6 => array(
			'var' => 'greaterAuditTime'
			),
			7 => array(
			'var' => 'storeId'
			),
			8 => array(
			'var' => 'otherNo'
			),
			9 => array(
			'var' => 'transportNo'
			),
			10 => array(
			'var' => 'orderSn'
			),
			11 => array(
			'var' => 'isSecondAudit'
			),
			12 => array(
			'var' => 'lessApplyTime'
			),
			13 => array(
			'var' => 'greaterApplyTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['arbitrateType'])){
				
				$this->arbitrateType = $vals['arbitrateType'];
			}
			
			
			if (isset($vals['arbitrateOption'])){
				
				$this->arbitrateOption = $vals['arbitrateOption'];
			}
			
			
			if (isset($vals['arbitrateResult'])){
				
				$this->arbitrateResult = $vals['arbitrateResult'];
			}
			
			
			if (isset($vals['pageInfo'])){
				
				$this->pageInfo = $vals['pageInfo'];
			}
			
			
			if (isset($vals['lessAuditTime'])){
				
				$this->lessAuditTime = $vals['lessAuditTime'];
			}
			
			
			if (isset($vals['greaterAuditTime'])){
				
				$this->greaterAuditTime = $vals['greaterAuditTime'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['otherNo'])){
				
				$this->otherNo = $vals['otherNo'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['isSecondAudit'])){
				
				$this->isSecondAudit = $vals['isSecondAudit'];
			}
			
			
			if (isset($vals['lessApplyTime'])){
				
				$this->lessApplyTime = $vals['lessApplyTime'];
			}
			
			
			if (isset($vals['greaterApplyTime'])){
				
				$this->greaterApplyTime = $vals['greaterApplyTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ArbitrateQueryParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("arbitrateType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->arbitrateType); 
				
			}
			
			
			
			
			if ("arbitrateOption" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->arbitrateOption); 
				
			}
			
			
			
			
			if ("arbitrateResult" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->arbitrateResult); 
				
			}
			
			
			
			
			if ("pageInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->pageInfo = new \com\vip\sof\sof\service\PageInfo();
				$this->pageInfo->read($input);
				
			}
			
			
			
			
			if ("lessAuditTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lessAuditTime);
				
			}
			
			
			
			
			if ("greaterAuditTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greaterAuditTime);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("otherNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->otherNo);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("isSecondAudit" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isSecondAudit); 
				
			}
			
			
			
			
			if ("lessApplyTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lessApplyTime);
				
			}
			
			
			
			
			if ("greaterApplyTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greaterApplyTime);
				
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
		
		if($this->arbitrateType !== null) {
			
			$xfer += $output->writeFieldBegin('arbitrateType');
			$xfer += $output->writeByte($this->arbitrateType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arbitrateOption !== null) {
			
			$xfer += $output->writeFieldBegin('arbitrateOption');
			$xfer += $output->writeByte($this->arbitrateOption);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arbitrateResult !== null) {
			
			$xfer += $output->writeFieldBegin('arbitrateResult');
			$xfer += $output->writeByte($this->arbitrateResult);
			
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
		
		
		if($this->lessAuditTime !== null) {
			
			$xfer += $output->writeFieldBegin('lessAuditTime');
			$xfer += $output->writeString($this->lessAuditTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->greaterAuditTime !== null) {
			
			$xfer += $output->writeFieldBegin('greaterAuditTime');
			$xfer += $output->writeString($this->greaterAuditTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->otherNo !== null) {
			
			$xfer += $output->writeFieldBegin('otherNo');
			$xfer += $output->writeString($this->otherNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSecondAudit !== null) {
			
			$xfer += $output->writeFieldBegin('isSecondAudit');
			$xfer += $output->writeByte($this->isSecondAudit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lessApplyTime !== null) {
			
			$xfer += $output->writeFieldBegin('lessApplyTime');
			$xfer += $output->writeString($this->lessApplyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->greaterApplyTime !== null) {
			
			$xfer += $output->writeFieldBegin('greaterApplyTime');
			$xfer += $output->writeString($this->greaterApplyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>