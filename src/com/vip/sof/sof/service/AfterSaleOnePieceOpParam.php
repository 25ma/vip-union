<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleOnePieceOpParam {
	
	static $_TSPEC;
	public $requestInfo = null;
	public $backSn = null;
	public $opType = null;
	public $opResult = null;
	public $opinion = null;
	public $transportInfo = null;
	public $returnAddressInfo = null;
	public $onePieceId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestInfo'
			),
			2 => array(
			'var' => 'backSn'
			),
			3 => array(
			'var' => 'opType'
			),
			4 => array(
			'var' => 'opResult'
			),
			5 => array(
			'var' => 'opinion'
			),
			6 => array(
			'var' => 'transportInfo'
			),
			7 => array(
			'var' => 'returnAddressInfo'
			),
			8 => array(
			'var' => 'onePieceId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestInfo'])){
				
				$this->requestInfo = $vals['requestInfo'];
			}
			
			
			if (isset($vals['backSn'])){
				
				$this->backSn = $vals['backSn'];
			}
			
			
			if (isset($vals['opType'])){
				
				$this->opType = $vals['opType'];
			}
			
			
			if (isset($vals['opResult'])){
				
				$this->opResult = $vals['opResult'];
			}
			
			
			if (isset($vals['opinion'])){
				
				$this->opinion = $vals['opinion'];
			}
			
			
			if (isset($vals['transportInfo'])){
				
				$this->transportInfo = $vals['transportInfo'];
			}
			
			
			if (isset($vals['returnAddressInfo'])){
				
				$this->returnAddressInfo = $vals['returnAddressInfo'];
			}
			
			
			if (isset($vals['onePieceId'])){
				
				$this->onePieceId = $vals['onePieceId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleOnePieceOpParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("requestInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->requestInfo = new \com\vip\sof\sof\service\RequestInfo();
				$this->requestInfo->read($input);
				
			}
			
			
			
			
			if ("backSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backSn);
				
			}
			
			
			
			
			if ("opType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->opType); 
				
			}
			
			
			
			
			if ("opResult" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->opResult); 
				
			}
			
			
			
			
			if ("opinion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opinion);
				
			}
			
			
			
			
			if ("transportInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->transportInfo = new \com\vip\sof\sof\service\TransportBaseInfo();
				$this->transportInfo->read($input);
				
			}
			
			
			
			
			if ("returnAddressInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->returnAddressInfo = new \com\vip\sof\sof\service\ReturnAddressInfo();
				$this->returnAddressInfo->read($input);
				
			}
			
			
			
			
			if ("onePieceId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onePieceId); 
				
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
		
		if($this->requestInfo !== null) {
			
			$xfer += $output->writeFieldBegin('requestInfo');
			
			if (!is_object($this->requestInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->requestInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backSn !== null) {
			
			$xfer += $output->writeFieldBegin('backSn');
			$xfer += $output->writeString($this->backSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opType !== null) {
			
			$xfer += $output->writeFieldBegin('opType');
			$xfer += $output->writeByte($this->opType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opResult !== null) {
			
			$xfer += $output->writeFieldBegin('opResult');
			$xfer += $output->writeByte($this->opResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opinion !== null) {
			
			$xfer += $output->writeFieldBegin('opinion');
			$xfer += $output->writeString($this->opinion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportInfo !== null) {
			
			$xfer += $output->writeFieldBegin('transportInfo');
			
			if (!is_object($this->transportInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->transportInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnAddressInfo !== null) {
			
			$xfer += $output->writeFieldBegin('returnAddressInfo');
			
			if (!is_object($this->returnAddressInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->returnAddressInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onePieceId !== null) {
			
			$xfer += $output->writeFieldBegin('onePieceId');
			$xfer += $output->writeI64($this->onePieceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>