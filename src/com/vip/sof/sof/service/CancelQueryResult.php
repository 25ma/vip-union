<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CancelQueryResult {
	
	static $_TSPEC;
	public $orderSn = null;
	public $applySn = null;
	public $reasonChoiceRemark = null;
	public $reasonRemark = null;
	public $operatorRoleName = null;
	public $auditStatusName = null;
	public $storeOpioion = null;
	public $storeUserId = null;
	public $orderStat = null;
	public $auditStatus = null;
	public $isSystem = null;
	public $createTime = null;
	public $fids = null;
	public $isArbitrate = null;
	public $refundMode = null;
	
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
			'var' => 'reasonChoiceRemark'
			),
			4 => array(
			'var' => 'reasonRemark'
			),
			5 => array(
			'var' => 'operatorRoleName'
			),
			6 => array(
			'var' => 'auditStatusName'
			),
			7 => array(
			'var' => 'storeOpioion'
			),
			8 => array(
			'var' => 'storeUserId'
			),
			9 => array(
			'var' => 'orderStat'
			),
			10 => array(
			'var' => 'auditStatus'
			),
			11 => array(
			'var' => 'isSystem'
			),
			12 => array(
			'var' => 'createTime'
			),
			13 => array(
			'var' => 'fids'
			),
			14 => array(
			'var' => 'isArbitrate'
			),
			15 => array(
			'var' => 'refundMode'
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
			
			
			if (isset($vals['reasonChoiceRemark'])){
				
				$this->reasonChoiceRemark = $vals['reasonChoiceRemark'];
			}
			
			
			if (isset($vals['reasonRemark'])){
				
				$this->reasonRemark = $vals['reasonRemark'];
			}
			
			
			if (isset($vals['operatorRoleName'])){
				
				$this->operatorRoleName = $vals['operatorRoleName'];
			}
			
			
			if (isset($vals['auditStatusName'])){
				
				$this->auditStatusName = $vals['auditStatusName'];
			}
			
			
			if (isset($vals['storeOpioion'])){
				
				$this->storeOpioion = $vals['storeOpioion'];
			}
			
			
			if (isset($vals['storeUserId'])){
				
				$this->storeUserId = $vals['storeUserId'];
			}
			
			
			if (isset($vals['orderStat'])){
				
				$this->orderStat = $vals['orderStat'];
			}
			
			
			if (isset($vals['auditStatus'])){
				
				$this->auditStatus = $vals['auditStatus'];
			}
			
			
			if (isset($vals['isSystem'])){
				
				$this->isSystem = $vals['isSystem'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['fids'])){
				
				$this->fids = $vals['fids'];
			}
			
			
			if (isset($vals['isArbitrate'])){
				
				$this->isArbitrate = $vals['isArbitrate'];
			}
			
			
			if (isset($vals['refundMode'])){
				
				$this->refundMode = $vals['refundMode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelQueryResult';
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
			
			
			
			
			if ("reasonChoiceRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonChoiceRemark);
				
			}
			
			
			
			
			if ("reasonRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonRemark);
				
			}
			
			
			
			
			if ("operatorRoleName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatorRoleName);
				
			}
			
			
			
			
			if ("auditStatusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditStatusName);
				
			}
			
			
			
			
			if ("storeOpioion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeOpioion);
				
			}
			
			
			
			
			if ("storeUserId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeUserId);
				
			}
			
			
			
			
			if ("orderStat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderStat);
				
			}
			
			
			
			
			if ("auditStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditStatus);
				
			}
			
			
			
			
			if ("isSystem" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isSystem);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("fids" == $schemeField){
				
				$needSkip = false;
				
				$this->fids = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->fids[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("isArbitrate" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isArbitrate); 
				
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
		
		
		if($this->applySn !== null) {
			
			$xfer += $output->writeFieldBegin('applySn');
			$xfer += $output->writeString($this->applySn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonChoiceRemark !== null) {
			
			$xfer += $output->writeFieldBegin('reasonChoiceRemark');
			$xfer += $output->writeString($this->reasonChoiceRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonRemark !== null) {
			
			$xfer += $output->writeFieldBegin('reasonRemark');
			$xfer += $output->writeString($this->reasonRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operatorRoleName !== null) {
			
			$xfer += $output->writeFieldBegin('operatorRoleName');
			$xfer += $output->writeString($this->operatorRoleName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditStatusName !== null) {
			
			$xfer += $output->writeFieldBegin('auditStatusName');
			$xfer += $output->writeString($this->auditStatusName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeOpioion !== null) {
			
			$xfer += $output->writeFieldBegin('storeOpioion');
			$xfer += $output->writeString($this->storeOpioion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeUserId !== null) {
			
			$xfer += $output->writeFieldBegin('storeUserId');
			$xfer += $output->writeString($this->storeUserId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStat !== null) {
			
			$xfer += $output->writeFieldBegin('orderStat');
			$xfer += $output->writeString($this->orderStat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditStatus !== null) {
			
			$xfer += $output->writeFieldBegin('auditStatus');
			$xfer += $output->writeString($this->auditStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSystem !== null) {
			
			$xfer += $output->writeFieldBegin('isSystem');
			$xfer += $output->writeString($this->isSystem);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fids !== null) {
			
			$xfer += $output->writeFieldBegin('fids');
			
			if (!is_array($this->fids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->fids as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isArbitrate !== null) {
			
			$xfer += $output->writeFieldBegin('isArbitrate');
			$xfer += $output->writeByte($this->isArbitrate);
			
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