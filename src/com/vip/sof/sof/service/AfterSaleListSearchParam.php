<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleListSearchParam {
	
	static $_TSPEC;
	public $orderSn = null;
	public $type = null;
	public $afterSaleTimeBegin = null;
	public $afterSaleTimeEnd = null;
	public $pageInfo = null;
	public $requestInfo = null;
	public $refundStatus = null;
	public $status = null;
	public $transportNo = null;
	public $createTime = null;
	public $autoApplyStatus = null;
	public $trackStat = null;
	public $signedTime = null;
	public $autoRefundFlag = null;
	public $backSn = null;
	public $userRejectFlag = null;
	public $fillTransport = null;
	public $auditEfficacy = null;
	public $whiteRefundStore = null;
	public $returnType = null;
	public $startCheckTime = null;
	public $storeIdList = null;
	public $returnMethodList = null;
	public $fastRefundTag = null;
	public $receiptStatus = null;
	public $refundTimeBegin = null;
	public $refundTimeEnd = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'type'
			),
			3 => array(
			'var' => 'afterSaleTimeBegin'
			),
			4 => array(
			'var' => 'afterSaleTimeEnd'
			),
			5 => array(
			'var' => 'pageInfo'
			),
			6 => array(
			'var' => 'requestInfo'
			),
			7 => array(
			'var' => 'refundStatus'
			),
			8 => array(
			'var' => 'status'
			),
			9 => array(
			'var' => 'transportNo'
			),
			10 => array(
			'var' => 'createTime'
			),
			11 => array(
			'var' => 'autoApplyStatus'
			),
			12 => array(
			'var' => 'trackStat'
			),
			13 => array(
			'var' => 'signedTime'
			),
			14 => array(
			'var' => 'autoRefundFlag'
			),
			15 => array(
			'var' => 'backSn'
			),
			16 => array(
			'var' => 'userRejectFlag'
			),
			17 => array(
			'var' => 'fillTransport'
			),
			18 => array(
			'var' => 'auditEfficacy'
			),
			19 => array(
			'var' => 'whiteRefundStore'
			),
			20 => array(
			'var' => 'returnType'
			),
			21 => array(
			'var' => 'startCheckTime'
			),
			22 => array(
			'var' => 'storeIdList'
			),
			23 => array(
			'var' => 'returnMethodList'
			),
			24 => array(
			'var' => 'fastRefundTag'
			),
			25 => array(
			'var' => 'receiptStatus'
			),
			26 => array(
			'var' => 'refundTimeBegin'
			),
			27 => array(
			'var' => 'refundTimeEnd'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['afterSaleTimeBegin'])){
				
				$this->afterSaleTimeBegin = $vals['afterSaleTimeBegin'];
			}
			
			
			if (isset($vals['afterSaleTimeEnd'])){
				
				$this->afterSaleTimeEnd = $vals['afterSaleTimeEnd'];
			}
			
			
			if (isset($vals['pageInfo'])){
				
				$this->pageInfo = $vals['pageInfo'];
			}
			
			
			if (isset($vals['requestInfo'])){
				
				$this->requestInfo = $vals['requestInfo'];
			}
			
			
			if (isset($vals['refundStatus'])){
				
				$this->refundStatus = $vals['refundStatus'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['autoApplyStatus'])){
				
				$this->autoApplyStatus = $vals['autoApplyStatus'];
			}
			
			
			if (isset($vals['trackStat'])){
				
				$this->trackStat = $vals['trackStat'];
			}
			
			
			if (isset($vals['signedTime'])){
				
				$this->signedTime = $vals['signedTime'];
			}
			
			
			if (isset($vals['autoRefundFlag'])){
				
				$this->autoRefundFlag = $vals['autoRefundFlag'];
			}
			
			
			if (isset($vals['backSn'])){
				
				$this->backSn = $vals['backSn'];
			}
			
			
			if (isset($vals['userRejectFlag'])){
				
				$this->userRejectFlag = $vals['userRejectFlag'];
			}
			
			
			if (isset($vals['fillTransport'])){
				
				$this->fillTransport = $vals['fillTransport'];
			}
			
			
			if (isset($vals['auditEfficacy'])){
				
				$this->auditEfficacy = $vals['auditEfficacy'];
			}
			
			
			if (isset($vals['whiteRefundStore'])){
				
				$this->whiteRefundStore = $vals['whiteRefundStore'];
			}
			
			
			if (isset($vals['returnType'])){
				
				$this->returnType = $vals['returnType'];
			}
			
			
			if (isset($vals['startCheckTime'])){
				
				$this->startCheckTime = $vals['startCheckTime'];
			}
			
			
			if (isset($vals['storeIdList'])){
				
				$this->storeIdList = $vals['storeIdList'];
			}
			
			
			if (isset($vals['returnMethodList'])){
				
				$this->returnMethodList = $vals['returnMethodList'];
			}
			
			
			if (isset($vals['fastRefundTag'])){
				
				$this->fastRefundTag = $vals['fastRefundTag'];
			}
			
			
			if (isset($vals['receiptStatus'])){
				
				$this->receiptStatus = $vals['receiptStatus'];
			}
			
			
			if (isset($vals['refundTimeBegin'])){
				
				$this->refundTimeBegin = $vals['refundTimeBegin'];
			}
			
			
			if (isset($vals['refundTimeEnd'])){
				
				$this->refundTimeEnd = $vals['refundTimeEnd'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleListSearchParam';
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
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->type); 
				
			}
			
			
			
			
			if ("afterSaleTimeBegin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->afterSaleTimeBegin);
				
			}
			
			
			
			
			if ("afterSaleTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->afterSaleTimeEnd);
				
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
			
			
			
			
			if ("refundStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refundStatus); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("autoApplyStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->autoApplyStatus); 
				
			}
			
			
			
			
			if ("trackStat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trackStat);
				
			}
			
			
			
			
			if ("signedTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->signedTime);
				
			}
			
			
			
			
			if ("autoRefundFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->autoRefundFlag); 
				
			}
			
			
			
			
			if ("backSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backSn);
				
			}
			
			
			
			
			if ("userRejectFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->userRejectFlag); 
				
			}
			
			
			
			
			if ("fillTransport" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->fillTransport); 
				
			}
			
			
			
			
			if ("auditEfficacy" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->auditEfficacy); 
				
			}
			
			
			
			
			if ("whiteRefundStore" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->whiteRefundStore); 
				
			}
			
			
			
			
			if ("returnType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnType);
				
			}
			
			
			
			
			if ("startCheckTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->startCheckTime); 
				
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
			
			
			
			
			if ("returnMethodList" == $schemeField){
				
				$needSkip = false;
				
				$this->returnMethodList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->returnMethodList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("fastRefundTag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->fastRefundTag); 
				
			}
			
			
			
			
			if ("receiptStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->receiptStatus); 
				
			}
			
			
			
			
			if ("refundTimeBegin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundTimeBegin);
				
			}
			
			
			
			
			if ("refundTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundTimeEnd);
				
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
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeByte($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleTimeBegin !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleTimeBegin');
			$xfer += $output->writeString($this->afterSaleTimeBegin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleTimeEnd');
			$xfer += $output->writeString($this->afterSaleTimeEnd);
			
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
		
		
		if($this->refundStatus !== null) {
			
			$xfer += $output->writeFieldBegin('refundStatus');
			$xfer += $output->writeI32($this->refundStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoApplyStatus !== null) {
			
			$xfer += $output->writeFieldBegin('autoApplyStatus');
			$xfer += $output->writeByte($this->autoApplyStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trackStat !== null) {
			
			$xfer += $output->writeFieldBegin('trackStat');
			$xfer += $output->writeString($this->trackStat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signedTime !== null) {
			
			$xfer += $output->writeFieldBegin('signedTime');
			$xfer += $output->writeString($this->signedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoRefundFlag !== null) {
			
			$xfer += $output->writeFieldBegin('autoRefundFlag');
			$xfer += $output->writeByte($this->autoRefundFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backSn !== null) {
			
			$xfer += $output->writeFieldBegin('backSn');
			$xfer += $output->writeString($this->backSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userRejectFlag !== null) {
			
			$xfer += $output->writeFieldBegin('userRejectFlag');
			$xfer += $output->writeByte($this->userRejectFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fillTransport !== null) {
			
			$xfer += $output->writeFieldBegin('fillTransport');
			$xfer += $output->writeByte($this->fillTransport);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditEfficacy !== null) {
			
			$xfer += $output->writeFieldBegin('auditEfficacy');
			$xfer += $output->writeByte($this->auditEfficacy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->whiteRefundStore !== null) {
			
			$xfer += $output->writeFieldBegin('whiteRefundStore');
			$xfer += $output->writeByte($this->whiteRefundStore);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnType !== null) {
			
			$xfer += $output->writeFieldBegin('returnType');
			$xfer += $output->writeString($this->returnType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startCheckTime !== null) {
			
			$xfer += $output->writeFieldBegin('startCheckTime');
			$xfer += $output->writeI32($this->startCheckTime);
			
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
		
		
		if($this->returnMethodList !== null) {
			
			$xfer += $output->writeFieldBegin('returnMethodList');
			
			if (!is_array($this->returnMethodList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->returnMethodList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fastRefundTag !== null) {
			
			$xfer += $output->writeFieldBegin('fastRefundTag');
			$xfer += $output->writeByte($this->fastRefundTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiptStatus !== null) {
			
			$xfer += $output->writeFieldBegin('receiptStatus');
			$xfer += $output->writeByte($this->receiptStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundTimeBegin !== null) {
			
			$xfer += $output->writeFieldBegin('refundTimeBegin');
			$xfer += $output->writeString($this->refundTimeBegin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('refundTimeEnd');
			$xfer += $output->writeString($this->refundTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>