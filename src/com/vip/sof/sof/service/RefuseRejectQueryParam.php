<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class RefuseRejectQueryParam {
	
	static $_TSPEC;
	public $auditType = null;
	public $requestInfo = null;
	public $pageInfo = null;
	public $lessRejectTime = null;
	public $greaterRejectTime = null;
	public $storeId = null;
	public $backSn = null;
	public $transportNo = null;
	public $orderSn = null;
	public $storeIdList = null;
	public $optionId = null;
	public $lessApplyTime = null;
	public $greaterApplyTime = null;
	public $isSecondReview = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'auditType'
			),
			2 => array(
			'var' => 'requestInfo'
			),
			3 => array(
			'var' => 'pageInfo'
			),
			4 => array(
			'var' => 'lessRejectTime'
			),
			5 => array(
			'var' => 'greaterRejectTime'
			),
			6 => array(
			'var' => 'storeId'
			),
			7 => array(
			'var' => 'backSn'
			),
			8 => array(
			'var' => 'transportNo'
			),
			9 => array(
			'var' => 'orderSn'
			),
			10 => array(
			'var' => 'storeIdList'
			),
			11 => array(
			'var' => 'optionId'
			),
			12 => array(
			'var' => 'lessApplyTime'
			),
			13 => array(
			'var' => 'greaterApplyTime'
			),
			14 => array(
			'var' => 'isSecondReview'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['auditType'])){
				
				$this->auditType = $vals['auditType'];
			}
			
			
			if (isset($vals['requestInfo'])){
				
				$this->requestInfo = $vals['requestInfo'];
			}
			
			
			if (isset($vals['pageInfo'])){
				
				$this->pageInfo = $vals['pageInfo'];
			}
			
			
			if (isset($vals['lessRejectTime'])){
				
				$this->lessRejectTime = $vals['lessRejectTime'];
			}
			
			
			if (isset($vals['greaterRejectTime'])){
				
				$this->greaterRejectTime = $vals['greaterRejectTime'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['backSn'])){
				
				$this->backSn = $vals['backSn'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['storeIdList'])){
				
				$this->storeIdList = $vals['storeIdList'];
			}
			
			
			if (isset($vals['optionId'])){
				
				$this->optionId = $vals['optionId'];
			}
			
			
			if (isset($vals['lessApplyTime'])){
				
				$this->lessApplyTime = $vals['lessApplyTime'];
			}
			
			
			if (isset($vals['greaterApplyTime'])){
				
				$this->greaterApplyTime = $vals['greaterApplyTime'];
			}
			
			
			if (isset($vals['isSecondReview'])){
				
				$this->isSecondReview = $vals['isSecondReview'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RefuseRejectQueryParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("auditType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->auditType); 
				
			}
			
			
			
			
			if ("requestInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->requestInfo = new \com\vip\sof\sof\service\RequestInfo();
				$this->requestInfo->read($input);
				
			}
			
			
			
			
			if ("pageInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->pageInfo = new \com\vip\sof\sof\service\PageInfo();
				$this->pageInfo->read($input);
				
			}
			
			
			
			
			if ("lessRejectTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lessRejectTime);
				
			}
			
			
			
			
			if ("greaterRejectTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greaterRejectTime);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("backSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backSn);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("storeIdList" == $schemeField){
				
				$needSkip = false;
				
				$this->storeIdList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->storeIdList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("optionId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->optionId); 
				
			}
			
			
			
			
			if ("lessApplyTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lessApplyTime);
				
			}
			
			
			
			
			if ("greaterApplyTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greaterApplyTime);
				
			}
			
			
			
			
			if ("isSecondReview" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isSecondReview); 
				
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
		
		if($this->auditType !== null) {
			
			$xfer += $output->writeFieldBegin('auditType');
			$xfer += $output->writeI32($this->auditType);
			
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
		
		
		if($this->pageInfo !== null) {
			
			$xfer += $output->writeFieldBegin('pageInfo');
			
			if (!is_object($this->pageInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pageInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lessRejectTime !== null) {
			
			$xfer += $output->writeFieldBegin('lessRejectTime');
			$xfer += $output->writeString($this->lessRejectTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->greaterRejectTime !== null) {
			
			$xfer += $output->writeFieldBegin('greaterRejectTime');
			$xfer += $output->writeString($this->greaterRejectTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backSn !== null) {
			
			$xfer += $output->writeFieldBegin('backSn');
			$xfer += $output->writeString($this->backSn);
			
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
		
		
		if($this->storeIdList !== null) {
			
			$xfer += $output->writeFieldBegin('storeIdList');
			
			if (!is_array($this->storeIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->storeIdList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->optionId !== null) {
			
			$xfer += $output->writeFieldBegin('optionId');
			$xfer += $output->writeI32($this->optionId);
			
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
		
		
		if($this->isSecondReview !== null) {
			
			$xfer += $output->writeFieldBegin('isSecondReview');
			$xfer += $output->writeByte($this->isSecondReview);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>