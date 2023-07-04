<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\gl\service;

class CuxGlPeriodBalancesDetialModel {
	
	static $_TSPEC;
	public $ledgerName = null;
	public $ledgerId = null;
	public $currencyCode = null;
	public $periodName = null;
	public $codeCombinationId = null;
	public $segment1 = null;
	public $segment2 = null;
	public $segment3 = null;
	public $segment4 = null;
	public $segment5 = null;
	public $segment6 = null;
	public $sgm1 = null;
	public $sgm2 = null;
	public $sgm3 = null;
	public $sgm4 = null;
	public $sgm5 = null;
	public $sgm6 = null;
	public $beginBalanceDr = null;
	public $beginBalanceCr = null;
	public $periodNetDr = null;
	public $periodNetCr = null;
	public $endBalanceDr = null;
	public $endBalanceCr = null;
	public $id = null;
	public $rowNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ledgerName'
			),
			2 => array(
			'var' => 'ledgerId'
			),
			3 => array(
			'var' => 'currencyCode'
			),
			4 => array(
			'var' => 'periodName'
			),
			5 => array(
			'var' => 'codeCombinationId'
			),
			6 => array(
			'var' => 'segment1'
			),
			7 => array(
			'var' => 'segment2'
			),
			8 => array(
			'var' => 'segment3'
			),
			9 => array(
			'var' => 'segment4'
			),
			10 => array(
			'var' => 'segment5'
			),
			11 => array(
			'var' => 'segment6'
			),
			12 => array(
			'var' => 'sgm1'
			),
			13 => array(
			'var' => 'sgm2'
			),
			14 => array(
			'var' => 'sgm3'
			),
			15 => array(
			'var' => 'sgm4'
			),
			16 => array(
			'var' => 'sgm5'
			),
			17 => array(
			'var' => 'sgm6'
			),
			18 => array(
			'var' => 'beginBalanceDr'
			),
			19 => array(
			'var' => 'beginBalanceCr'
			),
			20 => array(
			'var' => 'periodNetDr'
			),
			21 => array(
			'var' => 'periodNetCr'
			),
			22 => array(
			'var' => 'endBalanceDr'
			),
			23 => array(
			'var' => 'endBalanceCr'
			),
			24 => array(
			'var' => 'id'
			),
			25 => array(
			'var' => 'rowNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ledgerName'])){
				
				$this->ledgerName = $vals['ledgerName'];
			}
			
			
			if (isset($vals['ledgerId'])){
				
				$this->ledgerId = $vals['ledgerId'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['periodName'])){
				
				$this->periodName = $vals['periodName'];
			}
			
			
			if (isset($vals['codeCombinationId'])){
				
				$this->codeCombinationId = $vals['codeCombinationId'];
			}
			
			
			if (isset($vals['segment1'])){
				
				$this->segment1 = $vals['segment1'];
			}
			
			
			if (isset($vals['segment2'])){
				
				$this->segment2 = $vals['segment2'];
			}
			
			
			if (isset($vals['segment3'])){
				
				$this->segment3 = $vals['segment3'];
			}
			
			
			if (isset($vals['segment4'])){
				
				$this->segment4 = $vals['segment4'];
			}
			
			
			if (isset($vals['segment5'])){
				
				$this->segment5 = $vals['segment5'];
			}
			
			
			if (isset($vals['segment6'])){
				
				$this->segment6 = $vals['segment6'];
			}
			
			
			if (isset($vals['sgm1'])){
				
				$this->sgm1 = $vals['sgm1'];
			}
			
			
			if (isset($vals['sgm2'])){
				
				$this->sgm2 = $vals['sgm2'];
			}
			
			
			if (isset($vals['sgm3'])){
				
				$this->sgm3 = $vals['sgm3'];
			}
			
			
			if (isset($vals['sgm4'])){
				
				$this->sgm4 = $vals['sgm4'];
			}
			
			
			if (isset($vals['sgm5'])){
				
				$this->sgm5 = $vals['sgm5'];
			}
			
			
			if (isset($vals['sgm6'])){
				
				$this->sgm6 = $vals['sgm6'];
			}
			
			
			if (isset($vals['beginBalanceDr'])){
				
				$this->beginBalanceDr = $vals['beginBalanceDr'];
			}
			
			
			if (isset($vals['beginBalanceCr'])){
				
				$this->beginBalanceCr = $vals['beginBalanceCr'];
			}
			
			
			if (isset($vals['periodNetDr'])){
				
				$this->periodNetDr = $vals['periodNetDr'];
			}
			
			
			if (isset($vals['periodNetCr'])){
				
				$this->periodNetCr = $vals['periodNetCr'];
			}
			
			
			if (isset($vals['endBalanceDr'])){
				
				$this->endBalanceDr = $vals['endBalanceDr'];
			}
			
			
			if (isset($vals['endBalanceCr'])){
				
				$this->endBalanceCr = $vals['endBalanceCr'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['rowNum'])){
				
				$this->rowNum = $vals['rowNum'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CuxGlPeriodBalancesDetialModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ledgerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ledgerName);
				
			}
			
			
			
			
			if ("ledgerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ledgerId); 
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("periodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->periodName);
				
			}
			
			
			
			
			if ("codeCombinationId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->codeCombinationId); 
				
			}
			
			
			
			
			if ("segment1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment1);
				
			}
			
			
			
			
			if ("segment2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment2);
				
			}
			
			
			
			
			if ("segment3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment3);
				
			}
			
			
			
			
			if ("segment4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment4);
				
			}
			
			
			
			
			if ("segment5" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment5);
				
			}
			
			
			
			
			if ("segment6" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment6);
				
			}
			
			
			
			
			if ("sgm1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sgm1);
				
			}
			
			
			
			
			if ("sgm2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sgm2);
				
			}
			
			
			
			
			if ("sgm3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sgm3);
				
			}
			
			
			
			
			if ("sgm4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sgm4);
				
			}
			
			
			
			
			if ("sgm5" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sgm5);
				
			}
			
			
			
			
			if ("sgm6" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sgm6);
				
			}
			
			
			
			
			if ("beginBalanceDr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->beginBalanceDr);
				
			}
			
			
			
			
			if ("beginBalanceCr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->beginBalanceCr);
				
			}
			
			
			
			
			if ("periodNetDr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->periodNetDr);
				
			}
			
			
			
			
			if ("periodNetCr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->periodNetCr);
				
			}
			
			
			
			
			if ("endBalanceDr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->endBalanceDr);
				
			}
			
			
			
			
			if ("endBalanceCr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->endBalanceCr);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
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
		
		if($this->ledgerName !== null) {
			
			$xfer += $output->writeFieldBegin('ledgerName');
			$xfer += $output->writeString($this->ledgerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ledgerId !== null) {
			
			$xfer += $output->writeFieldBegin('ledgerId');
			$xfer += $output->writeI64($this->ledgerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->periodName !== null) {
			
			$xfer += $output->writeFieldBegin('periodName');
			$xfer += $output->writeString($this->periodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->codeCombinationId !== null) {
			
			$xfer += $output->writeFieldBegin('codeCombinationId');
			$xfer += $output->writeI64($this->codeCombinationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment1 !== null) {
			
			$xfer += $output->writeFieldBegin('segment1');
			$xfer += $output->writeString($this->segment1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment2 !== null) {
			
			$xfer += $output->writeFieldBegin('segment2');
			$xfer += $output->writeString($this->segment2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment3 !== null) {
			
			$xfer += $output->writeFieldBegin('segment3');
			$xfer += $output->writeString($this->segment3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment4 !== null) {
			
			$xfer += $output->writeFieldBegin('segment4');
			$xfer += $output->writeString($this->segment4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment5 !== null) {
			
			$xfer += $output->writeFieldBegin('segment5');
			$xfer += $output->writeString($this->segment5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment6 !== null) {
			
			$xfer += $output->writeFieldBegin('segment6');
			$xfer += $output->writeString($this->segment6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sgm1 !== null) {
			
			$xfer += $output->writeFieldBegin('sgm1');
			$xfer += $output->writeString($this->sgm1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sgm2 !== null) {
			
			$xfer += $output->writeFieldBegin('sgm2');
			$xfer += $output->writeString($this->sgm2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sgm3 !== null) {
			
			$xfer += $output->writeFieldBegin('sgm3');
			$xfer += $output->writeString($this->sgm3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sgm4 !== null) {
			
			$xfer += $output->writeFieldBegin('sgm4');
			$xfer += $output->writeString($this->sgm4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sgm5 !== null) {
			
			$xfer += $output->writeFieldBegin('sgm5');
			$xfer += $output->writeString($this->sgm5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sgm6 !== null) {
			
			$xfer += $output->writeFieldBegin('sgm6');
			$xfer += $output->writeString($this->sgm6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->beginBalanceDr !== null) {
			
			$xfer += $output->writeFieldBegin('beginBalanceDr');
			$xfer += $output->writeDouble($this->beginBalanceDr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->beginBalanceCr !== null) {
			
			$xfer += $output->writeFieldBegin('beginBalanceCr');
			$xfer += $output->writeDouble($this->beginBalanceCr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->periodNetDr !== null) {
			
			$xfer += $output->writeFieldBegin('periodNetDr');
			$xfer += $output->writeDouble($this->periodNetDr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->periodNetCr !== null) {
			
			$xfer += $output->writeFieldBegin('periodNetCr');
			$xfer += $output->writeDouble($this->periodNetCr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endBalanceDr !== null) {
			
			$xfer += $output->writeFieldBegin('endBalanceDr');
			$xfer += $output->writeDouble($this->endBalanceDr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endBalanceCr !== null) {
			
			$xfer += $output->writeFieldBegin('endBalanceCr');
			$xfer += $output->writeDouble($this->endBalanceCr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
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