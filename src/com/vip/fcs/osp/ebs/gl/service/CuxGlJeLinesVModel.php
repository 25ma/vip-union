<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\gl\service;

class CuxGlJeLinesVModel {
	
	static $_TSPEC;
	public $jeHeaderId = null;
	public $jeLineNum = null;
	public $ledgerId = null;
	public $codeCombinationId = null;
	public $ccidCode = null;
	public $ccidName = null;
	public $periodName = null;
	public $effectiveDate = null;
	public $status = null;
	public $enteredDr = null;
	public $enteredCr = null;
	public $accountedDr = null;
	public $accountedCr = null;
	public $description = null;
	public $lineTypeCode = null;
	public $updateBy = null;
	public $rowNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'jeHeaderId'
			),
			2 => array(
			'var' => 'jeLineNum'
			),
			3 => array(
			'var' => 'ledgerId'
			),
			4 => array(
			'var' => 'codeCombinationId'
			),
			5 => array(
			'var' => 'ccidCode'
			),
			6 => array(
			'var' => 'ccidName'
			),
			7 => array(
			'var' => 'periodName'
			),
			8 => array(
			'var' => 'effectiveDate'
			),
			9 => array(
			'var' => 'status'
			),
			10 => array(
			'var' => 'enteredDr'
			),
			11 => array(
			'var' => 'enteredCr'
			),
			12 => array(
			'var' => 'accountedDr'
			),
			13 => array(
			'var' => 'accountedCr'
			),
			14 => array(
			'var' => 'description'
			),
			15 => array(
			'var' => 'lineTypeCode'
			),
			16 => array(
			'var' => 'updateBy'
			),
			17 => array(
			'var' => 'rowNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['jeHeaderId'])){
				
				$this->jeHeaderId = $vals['jeHeaderId'];
			}
			
			
			if (isset($vals['jeLineNum'])){
				
				$this->jeLineNum = $vals['jeLineNum'];
			}
			
			
			if (isset($vals['ledgerId'])){
				
				$this->ledgerId = $vals['ledgerId'];
			}
			
			
			if (isset($vals['codeCombinationId'])){
				
				$this->codeCombinationId = $vals['codeCombinationId'];
			}
			
			
			if (isset($vals['ccidCode'])){
				
				$this->ccidCode = $vals['ccidCode'];
			}
			
			
			if (isset($vals['ccidName'])){
				
				$this->ccidName = $vals['ccidName'];
			}
			
			
			if (isset($vals['periodName'])){
				
				$this->periodName = $vals['periodName'];
			}
			
			
			if (isset($vals['effectiveDate'])){
				
				$this->effectiveDate = $vals['effectiveDate'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['enteredDr'])){
				
				$this->enteredDr = $vals['enteredDr'];
			}
			
			
			if (isset($vals['enteredCr'])){
				
				$this->enteredCr = $vals['enteredCr'];
			}
			
			
			if (isset($vals['accountedDr'])){
				
				$this->accountedDr = $vals['accountedDr'];
			}
			
			
			if (isset($vals['accountedCr'])){
				
				$this->accountedCr = $vals['accountedCr'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['lineTypeCode'])){
				
				$this->lineTypeCode = $vals['lineTypeCode'];
			}
			
			
			if (isset($vals['updateBy'])){
				
				$this->updateBy = $vals['updateBy'];
			}
			
			
			if (isset($vals['rowNum'])){
				
				$this->rowNum = $vals['rowNum'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CuxGlJeLinesVModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("jeHeaderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->jeHeaderId); 
				
			}
			
			
			
			
			if ("jeLineNum" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->jeLineNum); 
				
			}
			
			
			
			
			if ("ledgerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ledgerId); 
				
			}
			
			
			
			
			if ("codeCombinationId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->codeCombinationId); 
				
			}
			
			
			
			
			if ("ccidCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ccidCode);
				
			}
			
			
			
			
			if ("ccidName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ccidName);
				
			}
			
			
			
			
			if ("periodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->periodName);
				
			}
			
			
			
			
			if ("effectiveDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->effectiveDate);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("enteredDr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->enteredDr);
				
			}
			
			
			
			
			if ("enteredCr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->enteredCr);
				
			}
			
			
			
			
			if ("accountedDr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->accountedDr);
				
			}
			
			
			
			
			if ("accountedCr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->accountedCr);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("lineTypeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lineTypeCode);
				
			}
			
			
			
			
			if ("updateBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateBy); 
				
			}
			
			
			
			
			if ("rowNum" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->rowNum); 
				
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
		
		if($this->jeHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('jeHeaderId');
			$xfer += $output->writeI64($this->jeHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jeLineNum !== null) {
			
			$xfer += $output->writeFieldBegin('jeLineNum');
			$xfer += $output->writeI64($this->jeLineNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ledgerId !== null) {
			
			$xfer += $output->writeFieldBegin('ledgerId');
			$xfer += $output->writeI64($this->ledgerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->codeCombinationId !== null) {
			
			$xfer += $output->writeFieldBegin('codeCombinationId');
			$xfer += $output->writeI64($this->codeCombinationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ccidCode !== null) {
			
			$xfer += $output->writeFieldBegin('ccidCode');
			$xfer += $output->writeString($this->ccidCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ccidName !== null) {
			
			$xfer += $output->writeFieldBegin('ccidName');
			$xfer += $output->writeString($this->ccidName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->periodName !== null) {
			
			$xfer += $output->writeFieldBegin('periodName');
			$xfer += $output->writeString($this->periodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->effectiveDate !== null) {
			
			$xfer += $output->writeFieldBegin('effectiveDate');
			$xfer += $output->writeI64($this->effectiveDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enteredDr !== null) {
			
			$xfer += $output->writeFieldBegin('enteredDr');
			$xfer += $output->writeDouble($this->enteredDr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enteredCr !== null) {
			
			$xfer += $output->writeFieldBegin('enteredCr');
			$xfer += $output->writeDouble($this->enteredCr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountedDr !== null) {
			
			$xfer += $output->writeFieldBegin('accountedDr');
			$xfer += $output->writeDouble($this->accountedDr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountedCr !== null) {
			
			$xfer += $output->writeFieldBegin('accountedCr');
			$xfer += $output->writeDouble($this->accountedCr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineTypeCode !== null) {
			
			$xfer += $output->writeFieldBegin('lineTypeCode');
			$xfer += $output->writeString($this->lineTypeCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateBy !== null) {
			
			$xfer += $output->writeFieldBegin('updateBy');
			$xfer += $output->writeI64($this->updateBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rowNum !== null) {
			
			$xfer += $output->writeFieldBegin('rowNum');
			$xfer += $output->writeI64($this->rowNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>