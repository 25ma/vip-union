<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\app\rbp\fin\service;

class RbpFnExpenseInfImportDetailRequest {
	
	static $_TSPEC;
	public $detailNo = null;
	public $operStoreCode = null;
	public $rentContractNo = null;
	public $glDate = null;
	public $settleCode = null;
	public $expenseStartTime = null;
	public $expenseEndTime = null;
	public $amount = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'detailNo'
			),
			2 => array(
			'var' => 'operStoreCode'
			),
			3 => array(
			'var' => 'rentContractNo'
			),
			4 => array(
			'var' => 'glDate'
			),
			5 => array(
			'var' => 'settleCode'
			),
			6 => array(
			'var' => 'expenseStartTime'
			),
			7 => array(
			'var' => 'expenseEndTime'
			),
			8 => array(
			'var' => 'amount'
			),
			9 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['detailNo'])){
				
				$this->detailNo = $vals['detailNo'];
			}
			
			
			if (isset($vals['operStoreCode'])){
				
				$this->operStoreCode = $vals['operStoreCode'];
			}
			
			
			if (isset($vals['rentContractNo'])){
				
				$this->rentContractNo = $vals['rentContractNo'];
			}
			
			
			if (isset($vals['glDate'])){
				
				$this->glDate = $vals['glDate'];
			}
			
			
			if (isset($vals['settleCode'])){
				
				$this->settleCode = $vals['settleCode'];
			}
			
			
			if (isset($vals['expenseStartTime'])){
				
				$this->expenseStartTime = $vals['expenseStartTime'];
			}
			
			
			if (isset($vals['expenseEndTime'])){
				
				$this->expenseEndTime = $vals['expenseEndTime'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpFnExpenseInfImportDetailRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("detailNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailNo);
				
			}
			
			
			
			
			if ("operStoreCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operStoreCode);
				
			}
			
			
			
			
			if ("rentContractNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rentContractNo);
				
			}
			
			
			
			
			if ("glDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->glDate);
				
			}
			
			
			
			
			if ("settleCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->settleCode);
				
			}
			
			
			
			
			if ("expenseStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expenseStartTime);
				
			}
			
			
			
			
			if ("expenseEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expenseEndTime);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		$xfer += $output->writeFieldBegin('detailNo');
		$xfer += $output->writeString($this->detailNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->operStoreCode !== null) {
			
			$xfer += $output->writeFieldBegin('operStoreCode');
			$xfer += $output->writeString($this->operStoreCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('rentContractNo');
		$xfer += $output->writeString($this->rentContractNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('glDate');
		$xfer += $output->writeString($this->glDate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('settleCode');
		$xfer += $output->writeString($this->settleCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('expenseStartTime');
		$xfer += $output->writeI64($this->expenseStartTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('expenseEndTime');
		$xfer += $output->writeI64($this->expenseEndTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeString($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>