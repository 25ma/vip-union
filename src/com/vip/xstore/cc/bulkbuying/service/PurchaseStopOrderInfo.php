<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class PurchaseStopOrderInfo {
	
	static $_TSPEC;
	public $companyCode = null;
	public $purchaseNo = null;
	public $crossdock = null;
	public $createTime = null;
	public $updateTime = null;
	public $distributeStatus = null;
	public $creator = null;
	public $creatorName = null;
	public $buyerId = null;
	public $buyerName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'companyCode'
			),
			2 => array(
			'var' => 'purchaseNo'
			),
			3 => array(
			'var' => 'crossdock'
			),
			4 => array(
			'var' => 'createTime'
			),
			5 => array(
			'var' => 'updateTime'
			),
			6 => array(
			'var' => 'distributeStatus'
			),
			7 => array(
			'var' => 'creator'
			),
			8 => array(
			'var' => 'creatorName'
			),
			9 => array(
			'var' => 'buyerId'
			),
			10 => array(
			'var' => 'buyerName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['crossdock'])){
				
				$this->crossdock = $vals['crossdock'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['distributeStatus'])){
				
				$this->distributeStatus = $vals['distributeStatus'];
			}
			
			
			if (isset($vals['creator'])){
				
				$this->creator = $vals['creator'];
			}
			
			
			if (isset($vals['creatorName'])){
				
				$this->creatorName = $vals['creatorName'];
			}
			
			
			if (isset($vals['buyerId'])){
				
				$this->buyerId = $vals['buyerId'];
			}
			
			
			if (isset($vals['buyerName'])){
				
				$this->buyerName = $vals['buyerName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseStopOrderInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("purchaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseNo);
				
			}
			
			
			
			
			if ("crossdock" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->crossdock); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("distributeStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->distributeStatus); 
				
			}
			
			
			
			
			if ("creator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->creator);
				
			}
			
			
			
			
			if ("creatorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->creatorName);
				
			}
			
			
			
			
			if ("buyerId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerId);
				
			}
			
			
			
			
			if ("buyerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerName);
				
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
		
		if($this->companyCode !== null) {
			
			$xfer += $output->writeFieldBegin('companyCode');
			$xfer += $output->writeString($this->companyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseNo !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseNo');
			$xfer += $output->writeString($this->purchaseNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->crossdock !== null) {
			
			$xfer += $output->writeFieldBegin('crossdock');
			$xfer += $output->writeByte($this->crossdock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('distributeStatus');
		$xfer += $output->writeByte($this->distributeStatus);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->creator !== null) {
			
			$xfer += $output->writeFieldBegin('creator');
			$xfer += $output->writeString($this->creator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->creatorName !== null) {
			
			$xfer += $output->writeFieldBegin('creatorName');
			$xfer += $output->writeString($this->creatorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerId !== null) {
			
			$xfer += $output->writeFieldBegin('buyerId');
			$xfer += $output->writeString($this->buyerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerName !== null) {
			
			$xfer += $output->writeFieldBegin('buyerName');
			$xfer += $output->writeString($this->buyerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>