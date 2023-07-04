<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleHeaderBrief {
	
	static $_TSPEC;
	public $orderSn = null;
	public $backSn = null;
	public $type = null;
	public $typeName = null;
	public $returnTime = null;
	public $stateName = null;
	public $availOpType = null;
	public $refundStatusName = null;
	public $userRemark = null;
	public $imageUrls = null;
	public $autoApplyStatus = null;
	public $state = null;
	public $refundStatus = null;
	public $transportNo = null;
	public $storeSource = null;
	public $closeTime = null;
	public $cancelReason = null;
	public $trackStat = null;
	public $carrier = null;
	public $storeId = null;
	public $storeName = null;
	public $rejectReason = null;
	public $userRejectFlag = null;
	public $returnTypeName = null;
	public $finalStatus = null;
	public $hasOpereateArbitration = null;
	public $receiptTime = null;
	public $refundTime = null;
	public $operatorRole = null;
	public $returnBizFlags = null;
	public $refundMode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'backSn'
			),
			3 => array(
			'var' => 'type'
			),
			4 => array(
			'var' => 'typeName'
			),
			5 => array(
			'var' => 'returnTime'
			),
			8 => array(
			'var' => 'stateName'
			),
			9 => array(
			'var' => 'availOpType'
			),
			10 => array(
			'var' => 'refundStatusName'
			),
			12 => array(
			'var' => 'userRemark'
			),
			13 => array(
			'var' => 'imageUrls'
			),
			14 => array(
			'var' => 'autoApplyStatus'
			),
			15 => array(
			'var' => 'state'
			),
			16 => array(
			'var' => 'refundStatus'
			),
			17 => array(
			'var' => 'transportNo'
			),
			18 => array(
			'var' => 'storeSource'
			),
			19 => array(
			'var' => 'closeTime'
			),
			20 => array(
			'var' => 'cancelReason'
			),
			21 => array(
			'var' => 'trackStat'
			),
			22 => array(
			'var' => 'carrier'
			),
			23 => array(
			'var' => 'storeId'
			),
			24 => array(
			'var' => 'storeName'
			),
			25 => array(
			'var' => 'rejectReason'
			),
			26 => array(
			'var' => 'userRejectFlag'
			),
			27 => array(
			'var' => 'returnTypeName'
			),
			28 => array(
			'var' => 'finalStatus'
			),
			29 => array(
			'var' => 'hasOpereateArbitration'
			),
			30 => array(
			'var' => 'receiptTime'
			),
			31 => array(
			'var' => 'refundTime'
			),
			32 => array(
			'var' => 'operatorRole'
			),
			33 => array(
			'var' => 'returnBizFlags'
			),
			34 => array(
			'var' => 'refundMode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['backSn'])){
				
				$this->backSn = $vals['backSn'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['typeName'])){
				
				$this->typeName = $vals['typeName'];
			}
			
			
			if (isset($vals['returnTime'])){
				
				$this->returnTime = $vals['returnTime'];
			}
			
			
			if (isset($vals['stateName'])){
				
				$this->stateName = $vals['stateName'];
			}
			
			
			if (isset($vals['availOpType'])){
				
				$this->availOpType = $vals['availOpType'];
			}
			
			
			if (isset($vals['refundStatusName'])){
				
				$this->refundStatusName = $vals['refundStatusName'];
			}
			
			
			if (isset($vals['userRemark'])){
				
				$this->userRemark = $vals['userRemark'];
			}
			
			
			if (isset($vals['imageUrls'])){
				
				$this->imageUrls = $vals['imageUrls'];
			}
			
			
			if (isset($vals['autoApplyStatus'])){
				
				$this->autoApplyStatus = $vals['autoApplyStatus'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['refundStatus'])){
				
				$this->refundStatus = $vals['refundStatus'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['closeTime'])){
				
				$this->closeTime = $vals['closeTime'];
			}
			
			
			if (isset($vals['cancelReason'])){
				
				$this->cancelReason = $vals['cancelReason'];
			}
			
			
			if (isset($vals['trackStat'])){
				
				$this->trackStat = $vals['trackStat'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
			if (isset($vals['rejectReason'])){
				
				$this->rejectReason = $vals['rejectReason'];
			}
			
			
			if (isset($vals['userRejectFlag'])){
				
				$this->userRejectFlag = $vals['userRejectFlag'];
			}
			
			
			if (isset($vals['returnTypeName'])){
				
				$this->returnTypeName = $vals['returnTypeName'];
			}
			
			
			if (isset($vals['finalStatus'])){
				
				$this->finalStatus = $vals['finalStatus'];
			}
			
			
			if (isset($vals['hasOpereateArbitration'])){
				
				$this->hasOpereateArbitration = $vals['hasOpereateArbitration'];
			}
			
			
			if (isset($vals['receiptTime'])){
				
				$this->receiptTime = $vals['receiptTime'];
			}
			
			
			if (isset($vals['refundTime'])){
				
				$this->refundTime = $vals['refundTime'];
			}
			
			
			if (isset($vals['operatorRole'])){
				
				$this->operatorRole = $vals['operatorRole'];
			}
			
			
			if (isset($vals['returnBizFlags'])){
				
				$this->returnBizFlags = $vals['returnBizFlags'];
			}
			
			
			if (isset($vals['refundMode'])){
				
				$this->refundMode = $vals['refundMode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleHeaderBrief';
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
			
			
			
			
			if ("backSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backSn);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->type); 
				
			}
			
			
			
			
			if ("typeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->typeName);
				
			}
			
			
			
			
			if ("returnTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnTime);
				
			}
			
			
			
			
			if ("stateName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stateName);
				
			}
			
			
			
			
			if ("availOpType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->availOpType); 
				
			}
			
			
			
			
			if ("refundStatusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundStatusName);
				
			}
			
			
			
			
			if ("userRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userRemark);
				
			}
			
			
			
			
			if ("imageUrls" == $schemeField){
				
				$needSkip = false;
				
				$this->imageUrls = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->imageUrls[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("autoApplyStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->autoApplyStatus); 
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->state); 
				
			}
			
			
			
			
			if ("refundStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refundStatus); 
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->storeSource); 
				
			}
			
			
			
			
			if ("closeTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->closeTime);
				
			}
			
			
			
			
			if ("cancelReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cancelReason);
				
			}
			
			
			
			
			if ("trackStat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trackStat);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeName);
				
			}
			
			
			
			
			if ("rejectReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rejectReason);
				
			}
			
			
			
			
			if ("userRejectFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userRejectFlag); 
				
			}
			
			
			
			
			if ("returnTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnTypeName);
				
			}
			
			
			
			
			if ("finalStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->finalStatus); 
				
			}
			
			
			
			
			if ("hasOpereateArbitration" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->hasOpereateArbitration); 
				
			}
			
			
			
			
			if ("receiptTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiptTime);
				
			}
			
			
			
			
			if ("refundTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundTime);
				
			}
			
			
			
			
			if ("operatorRole" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->operatorRole); 
				
			}
			
			
			
			
			if ("returnBizFlags" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->returnBizFlags); 
				
			}
			
			
			
			
			if ("refundMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->refundMode); 
				
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
		
		
		if($this->backSn !== null) {
			
			$xfer += $output->writeFieldBegin('backSn');
			$xfer += $output->writeString($this->backSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeByte($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->typeName !== null) {
			
			$xfer += $output->writeFieldBegin('typeName');
			$xfer += $output->writeString($this->typeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnTime !== null) {
			
			$xfer += $output->writeFieldBegin('returnTime');
			$xfer += $output->writeString($this->returnTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stateName !== null) {
			
			$xfer += $output->writeFieldBegin('stateName');
			$xfer += $output->writeString($this->stateName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->availOpType !== null) {
			
			$xfer += $output->writeFieldBegin('availOpType');
			$xfer += $output->writeByte($this->availOpType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundStatusName !== null) {
			
			$xfer += $output->writeFieldBegin('refundStatusName');
			$xfer += $output->writeString($this->refundStatusName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userRemark !== null) {
			
			$xfer += $output->writeFieldBegin('userRemark');
			$xfer += $output->writeString($this->userRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageUrls !== null) {
			
			$xfer += $output->writeFieldBegin('imageUrls');
			
			if (!is_array($this->imageUrls)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->imageUrls as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoApplyStatus !== null) {
			
			$xfer += $output->writeFieldBegin('autoApplyStatus');
			$xfer += $output->writeByte($this->autoApplyStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeByte($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundStatus !== null) {
			
			$xfer += $output->writeFieldBegin('refundStatus');
			$xfer += $output->writeI32($this->refundStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeSource !== null) {
			
			$xfer += $output->writeFieldBegin('storeSource');
			$xfer += $output->writeI32($this->storeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->closeTime !== null) {
			
			$xfer += $output->writeFieldBegin('closeTime');
			$xfer += $output->writeString($this->closeTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelReason !== null) {
			
			$xfer += $output->writeFieldBegin('cancelReason');
			$xfer += $output->writeString($this->cancelReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trackStat !== null) {
			
			$xfer += $output->writeFieldBegin('trackStat');
			$xfer += $output->writeString($this->trackStat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
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
		
		
		if($this->rejectReason !== null) {
			
			$xfer += $output->writeFieldBegin('rejectReason');
			$xfer += $output->writeString($this->rejectReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userRejectFlag !== null) {
			
			$xfer += $output->writeFieldBegin('userRejectFlag');
			$xfer += $output->writeI32($this->userRejectFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('returnTypeName');
			$xfer += $output->writeString($this->returnTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->finalStatus !== null) {
			
			$xfer += $output->writeFieldBegin('finalStatus');
			$xfer += $output->writeI32($this->finalStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hasOpereateArbitration !== null) {
			
			$xfer += $output->writeFieldBegin('hasOpereateArbitration');
			$xfer += $output->writeI32($this->hasOpereateArbitration);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiptTime !== null) {
			
			$xfer += $output->writeFieldBegin('receiptTime');
			$xfer += $output->writeString($this->receiptTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundTime !== null) {
			
			$xfer += $output->writeFieldBegin('refundTime');
			$xfer += $output->writeString($this->refundTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operatorRole !== null) {
			
			$xfer += $output->writeFieldBegin('operatorRole');
			$xfer += $output->writeByte($this->operatorRole);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnBizFlags !== null) {
			
			$xfer += $output->writeFieldBegin('returnBizFlags');
			$xfer += $output->writeI64($this->returnBizFlags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundMode !== null) {
			
			$xfer += $output->writeFieldBegin('refundMode');
			$xfer += $output->writeByte($this->refundMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>