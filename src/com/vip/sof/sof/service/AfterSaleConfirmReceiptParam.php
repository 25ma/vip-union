<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleConfirmReceiptParam {
	
	static $_TSPEC;
	public $requestInfo = null;
	public $backSn = null;
	public $opType = null;
	public $reason = null;
	public $fids = null;
	public $unPackInfoParam = null;
	public $returnType = null;
	public $applySn = null;
	
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
			'var' => 'reason'
			),
			5 => array(
			'var' => 'fids'
			),
			6 => array(
			'var' => 'unPackInfoParam'
			),
			7 => array(
			'var' => 'returnType'
			),
			8 => array(
			'var' => 'applySn'
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
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
			if (isset($vals['fids'])){
				
				$this->fids = $vals['fids'];
			}
			
			
			if (isset($vals['unPackInfoParam'])){
				
				$this->unPackInfoParam = $vals['unPackInfoParam'];
			}
			
			
			if (isset($vals['returnType'])){
				
				$this->returnType = $vals['returnType'];
			}
			
			
			if (isset($vals['applySn'])){
				
				$this->applySn = $vals['applySn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleConfirmReceiptParam';
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
			
			
			
			
			if ("reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason);
				
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
			
			
			
			
			if ("unPackInfoParam" == $schemeField){
				
				$needSkip = false;
				
				$this->unPackInfoParam = new \com\vip\sof\sof\service\UnPackInfoInputParam();
				$this->unPackInfoParam->read($input);
				
			}
			
			
			
			
			if ("returnType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnType);
				
			}
			
			
			
			
			if ("applySn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->applySn);
				
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
		
		
		if($this->reason !== null) {
			
			$xfer += $output->writeFieldBegin('reason');
			$xfer += $output->writeString($this->reason);
			
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
		
		
		if($this->unPackInfoParam !== null) {
			
			$xfer += $output->writeFieldBegin('unPackInfoParam');
			
			if (!is_object($this->unPackInfoParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->unPackInfoParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnType !== null) {
			
			$xfer += $output->writeFieldBegin('returnType');
			$xfer += $output->writeString($this->returnType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applySn !== null) {
			
			$xfer += $output->writeFieldBegin('applySn');
			$xfer += $output->writeString($this->applySn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>