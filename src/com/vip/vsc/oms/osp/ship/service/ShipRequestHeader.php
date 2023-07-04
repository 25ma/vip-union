<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vsc\oms\osp\ship\service;

class ShipRequestHeader {
	
	static $_TSPEC;
	public $language = null;
	public $bizOwner = null;
	public $sourceSys = null;
	public $operatorId = null;
	public $operatorName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'language'
			),
			2 => array(
			'var' => 'bizOwner'
			),
			3 => array(
			'var' => 'sourceSys'
			),
			4 => array(
			'var' => 'operatorId'
			),
			5 => array(
			'var' => 'operatorName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['language'])){
				
				$this->language = $vals['language'];
			}
			
			
			if (isset($vals['bizOwner'])){
				
				$this->bizOwner = $vals['bizOwner'];
			}
			
			
			if (isset($vals['sourceSys'])){
				
				$this->sourceSys = $vals['sourceSys'];
			}
			
			
			if (isset($vals['operatorId'])){
				
				$this->operatorId = $vals['operatorId'];
			}
			
			
			if (isset($vals['operatorName'])){
				
				$this->operatorName = $vals['operatorName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipRequestHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("language" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->language);
				
			}
			
			
			
			
			if ("bizOwner" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizOwner);
				
			}
			
			
			
			
			if ("sourceSys" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceSys);
				
			}
			
			
			
			
			if ("operatorId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatorId);
				
			}
			
			
			
			
			if ("operatorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatorName);
				
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
		
		if($this->language !== null) {
			
			$xfer += $output->writeFieldBegin('language');
			$xfer += $output->writeString($this->language);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizOwner !== null) {
			
			$xfer += $output->writeFieldBegin('bizOwner');
			$xfer += $output->writeString($this->bizOwner);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceSys !== null) {
			
			$xfer += $output->writeFieldBegin('sourceSys');
			$xfer += $output->writeString($this->sourceSys);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operatorId !== null) {
			
			$xfer += $output->writeFieldBegin('operatorId');
			$xfer += $output->writeString($this->operatorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operatorName !== null) {
			
			$xfer += $output->writeFieldBegin('operatorName');
			$xfer += $output->writeString($this->operatorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>