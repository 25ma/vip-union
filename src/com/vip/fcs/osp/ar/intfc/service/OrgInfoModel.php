<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ar\intfc\service;

class OrgInfoModel {
	
	static $_TSPEC;
	public $orgId = null;
	public $orgCode = null;
	public $orgName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orgId'
			),
			2 => array(
			'var' => 'orgCode'
			),
			3 => array(
			'var' => 'orgName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orgId'])){
				
				$this->orgId = $vals['orgId'];
			}
			
			
			if (isset($vals['orgCode'])){
				
				$this->orgCode = $vals['orgCode'];
			}
			
			
			if (isset($vals['orgName'])){
				
				$this->orgName = $vals['orgName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrgInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orgId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orgId); 
				
			}
			
			
			
			
			if ("orgCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgCode);
				
			}
			
			
			
			
			if ("orgName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgName);
				
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
		
		if($this->orgId !== null) {
			
			$xfer += $output->writeFieldBegin('orgId');
			$xfer += $output->writeI64($this->orgId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgCode !== null) {
			
			$xfer += $output->writeFieldBegin('orgCode');
			$xfer += $output->writeString($this->orgCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgName !== null) {
			
			$xfer += $output->writeFieldBegin('orgName');
			$xfer += $output->writeString($this->orgName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>