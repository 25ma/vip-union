<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class OrderRefundInfo {
	
	static $_TSPEC;
	public $refundApplyNum = null;
	public $payType = null;
	public $sendToBackTime = null;
	public $refundAccount = null;
	public $transactionNum = null;
	public $auditStatus = null;
	public $refundStatus = null;
	public $refundBankNum = null;
	public $supposedRefundSendTime = null;
	public $supposedRefundAccountTime = null;
	public $refundAmount = null;
	public $auditRequestReceivedTime = null;
	public $refundReceivedTime = null;
	public $channelRefundNum = null;
	public $progressInfoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refundApplyNum'
			),
			2 => array(
			'var' => 'payType'
			),
			3 => array(
			'var' => 'sendToBackTime'
			),
			4 => array(
			'var' => 'refundAccount'
			),
			5 => array(
			'var' => 'transactionNum'
			),
			6 => array(
			'var' => 'auditStatus'
			),
			7 => array(
			'var' => 'refundStatus'
			),
			8 => array(
			'var' => 'refundBankNum'
			),
			9 => array(
			'var' => 'supposedRefundSendTime'
			),
			10 => array(
			'var' => 'supposedRefundAccountTime'
			),
			11 => array(
			'var' => 'refundAmount'
			),
			12 => array(
			'var' => 'auditRequestReceivedTime'
			),
			13 => array(
			'var' => 'refundReceivedTime'
			),
			14 => array(
			'var' => 'channelRefundNum'
			),
			15 => array(
			'var' => 'progressInfoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['refundApplyNum'])){
				
				$this->refundApplyNum = $vals['refundApplyNum'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['sendToBackTime'])){
				
				$this->sendToBackTime = $vals['sendToBackTime'];
			}
			
			
			if (isset($vals['refundAccount'])){
				
				$this->refundAccount = $vals['refundAccount'];
			}
			
			
			if (isset($vals['transactionNum'])){
				
				$this->transactionNum = $vals['transactionNum'];
			}
			
			
			if (isset($vals['auditStatus'])){
				
				$this->auditStatus = $vals['auditStatus'];
			}
			
			
			if (isset($vals['refundStatus'])){
				
				$this->refundStatus = $vals['refundStatus'];
			}
			
			
			if (isset($vals['refundBankNum'])){
				
				$this->refundBankNum = $vals['refundBankNum'];
			}
			
			
			if (isset($vals['supposedRefundSendTime'])){
				
				$this->supposedRefundSendTime = $vals['supposedRefundSendTime'];
			}
			
			
			if (isset($vals['supposedRefundAccountTime'])){
				
				$this->supposedRefundAccountTime = $vals['supposedRefundAccountTime'];
			}
			
			
			if (isset($vals['refundAmount'])){
				
				$this->refundAmount = $vals['refundAmount'];
			}
			
			
			if (isset($vals['auditRequestReceivedTime'])){
				
				$this->auditRequestReceivedTime = $vals['auditRequestReceivedTime'];
			}
			
			
			if (isset($vals['refundReceivedTime'])){
				
				$this->refundReceivedTime = $vals['refundReceivedTime'];
			}
			
			
			if (isset($vals['channelRefundNum'])){
				
				$this->channelRefundNum = $vals['channelRefundNum'];
			}
			
			
			if (isset($vals['progressInfoList'])){
				
				$this->progressInfoList = $vals['progressInfoList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderRefundInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("refundApplyNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundApplyNum);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("sendToBackTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sendToBackTime);
				
			}
			
			
			
			
			if ("refundAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundAccount);
				
			}
			
			
			
			
			if ("transactionNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionNum);
				
			}
			
			
			
			
			if ("auditStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditStatus);
				
			}
			
			
			
			
			if ("refundStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundStatus);
				
			}
			
			
			
			
			if ("refundBankNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundBankNum);
				
			}
			
			
			
			
			if ("supposedRefundSendTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supposedRefundSendTime);
				
			}
			
			
			
			
			if ("supposedRefundAccountTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supposedRefundAccountTime);
				
			}
			
			
			
			
			if ("refundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundAmount);
				
			}
			
			
			
			
			if ("auditRequestReceivedTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditRequestReceivedTime);
				
			}
			
			
			
			
			if ("refundReceivedTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundReceivedTime);
				
			}
			
			
			
			
			if ("channelRefundNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelRefundNum);
				
			}
			
			
			
			
			if ("progressInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->progressInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\RefundProgressInfo();
						$elem0->read($input);
						
						$this->progressInfoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->refundApplyNum !== null) {
			
			$xfer += $output->writeFieldBegin('refundApplyNum');
			$xfer += $output->writeString($this->refundApplyNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sendToBackTime !== null) {
			
			$xfer += $output->writeFieldBegin('sendToBackTime');
			$xfer += $output->writeString($this->sendToBackTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundAccount !== null) {
			
			$xfer += $output->writeFieldBegin('refundAccount');
			$xfer += $output->writeString($this->refundAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionNum !== null) {
			
			$xfer += $output->writeFieldBegin('transactionNum');
			$xfer += $output->writeString($this->transactionNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditStatus !== null) {
			
			$xfer += $output->writeFieldBegin('auditStatus');
			$xfer += $output->writeString($this->auditStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundStatus !== null) {
			
			$xfer += $output->writeFieldBegin('refundStatus');
			$xfer += $output->writeString($this->refundStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundBankNum !== null) {
			
			$xfer += $output->writeFieldBegin('refundBankNum');
			$xfer += $output->writeString($this->refundBankNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supposedRefundSendTime !== null) {
			
			$xfer += $output->writeFieldBegin('supposedRefundSendTime');
			$xfer += $output->writeString($this->supposedRefundSendTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supposedRefundAccountTime !== null) {
			
			$xfer += $output->writeFieldBegin('supposedRefundAccountTime');
			$xfer += $output->writeString($this->supposedRefundAccountTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('refundAmount');
			$xfer += $output->writeString($this->refundAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditRequestReceivedTime !== null) {
			
			$xfer += $output->writeFieldBegin('auditRequestReceivedTime');
			$xfer += $output->writeString($this->auditRequestReceivedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundReceivedTime !== null) {
			
			$xfer += $output->writeFieldBegin('refundReceivedTime');
			$xfer += $output->writeString($this->refundReceivedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelRefundNum !== null) {
			
			$xfer += $output->writeFieldBegin('channelRefundNum');
			$xfer += $output->writeString($this->channelRefundNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->progressInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('progressInfoList');
			
			if (!is_array($this->progressInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->progressInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>