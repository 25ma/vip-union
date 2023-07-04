<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleOpParam {
	
	static $_TSPEC;
	public $requestInfo = null;
	public $backSn = null;
	public $opType = null;
	public $opResult = null;
	public $opinion = null;
	public $transportInfo = null;
	public $afterSaleOpDetailList = null;
	public $fids = null;
	public $option = null;
	public $optionId = null;
	public $orderSn = null;
	public $uiTxt = null;
	
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
			'var' => 'afterSaleOpDetailList'
			),
			8 => array(
			'var' => 'fids'
			),
			9 => array(
			'var' => 'option'
			),
			10 => array(
			'var' => 'optionId'
			),
			11 => array(
			'var' => 'orderSn'
			),
			12 => array(
			'var' => 'uiTxt'
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
			
			
			if (isset($vals['afterSaleOpDetailList'])){
				
				$this->afterSaleOpDetailList = $vals['afterSaleOpDetailList'];
			}
			
			
			if (isset($vals['fids'])){
				
				$this->fids = $vals['fids'];
			}
			
			
			if (isset($vals['option'])){
				
				$this->option = $vals['option'];
			}
			
			
			if (isset($vals['optionId'])){
				
				$this->optionId = $vals['optionId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['uiTxt'])){
				
				$this->uiTxt = $vals['uiTxt'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleOpParam';
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
			
			
			
			
			if ("afterSaleOpDetailList" == $schemeField){
				
				$needSkip = false;
				
				$this->afterSaleOpDetailList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\AfterSaleOpDetail();
						$elem0->read($input);
						
						$this->afterSaleOpDetailList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("fids" == $schemeField){
				
				$needSkip = false;
				
				$this->fids = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->fids[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("option" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->option);
				
			}
			
			
			
			
			if ("optionId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->optionId); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("uiTxt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uiTxt);
				
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
		
		
		if($this->afterSaleOpDetailList !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleOpDetailList');
			
			if (!is_array($this->afterSaleOpDetailList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->afterSaleOpDetailList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
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
		
		
		if($this->option !== null) {
			
			$xfer += $output->writeFieldBegin('option');
			$xfer += $output->writeString($this->option);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->optionId !== null) {
			
			$xfer += $output->writeFieldBegin('optionId');
			$xfer += $output->writeI32($this->optionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uiTxt !== null) {
			
			$xfer += $output->writeFieldBegin('uiTxt');
			$xfer += $output->writeString($this->uiTxt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>