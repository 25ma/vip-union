<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\da\service;

class ExpressCabinetEventRes {
	
	static $_TSPEC;
	public $tid = null;
	public $expresseId = null;
	public $statusCode = null;
	public $actionCode = null;
	public $retCode = null;
	public $retMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tid'
			),
			2 => array(
			'var' => 'expresseId'
			),
			3 => array(
			'var' => 'statusCode'
			),
			4 => array(
			'var' => 'actionCode'
			),
			5 => array(
			'var' => 'retCode'
			),
			6 => array(
			'var' => 'retMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tid'])){
				
				$this->tid = $vals['tid'];
			}
			
			
			if (isset($vals['expresseId'])){
				
				$this->expresseId = $vals['expresseId'];
			}
			
			
			if (isset($vals['statusCode'])){
				
				$this->statusCode = $vals['statusCode'];
			}
			
			
			if (isset($vals['actionCode'])){
				
				$this->actionCode = $vals['actionCode'];
			}
			
			
			if (isset($vals['retCode'])){
				
				$this->retCode = $vals['retCode'];
			}
			
			
			if (isset($vals['retMsg'])){
				
				$this->retMsg = $vals['retMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExpressCabinetEventRes';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tid);
				
			}
			
			
			
			
			if ("expresseId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expresseId);
				
			}
			
			
			
			
			if ("statusCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusCode);
				
			}
			
			
			
			
			if ("actionCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actionCode);
				
			}
			
			
			
			
			if ("retCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->retCode);
				
			}
			
			
			
			
			if ("retMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->retMsg);
				
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
		
		if($this->tid !== null) {
			
			$xfer += $output->writeFieldBegin('tid');
			$xfer += $output->writeString($this->tid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expresseId !== null) {
			
			$xfer += $output->writeFieldBegin('expresseId');
			$xfer += $output->writeString($this->expresseId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusCode !== null) {
			
			$xfer += $output->writeFieldBegin('statusCode');
			$xfer += $output->writeString($this->statusCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actionCode !== null) {
			
			$xfer += $output->writeFieldBegin('actionCode');
			$xfer += $output->writeString($this->actionCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retCode !== null) {
			
			$xfer += $output->writeFieldBegin('retCode');
			$xfer += $output->writeString($this->retCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retMsg !== null) {
			
			$xfer += $output->writeFieldBegin('retMsg');
			$xfer += $output->writeString($this->retMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>