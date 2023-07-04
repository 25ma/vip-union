<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\admin\csc\vo;

class WpcAdminChildCscVo {
	
	static $_TSPEC;
	public $cscNo = null;
	public $cscType = null;
	public $groupName = null;
	public $upgradeStatus = null;
	public $readStatus = null;
	public $vipCscNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			11000 => array(
			'var' => 'cscNo'
			),
			11001 => array(
			'var' => 'cscType'
			),
			11002 => array(
			'var' => 'groupName'
			),
			11003 => array(
			'var' => 'upgradeStatus'
			),
			11004 => array(
			'var' => 'readStatus'
			),
			11005 => array(
			'var' => 'vipCscNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cscNo'])){
				
				$this->cscNo = $vals['cscNo'];
			}
			
			
			if (isset($vals['cscType'])){
				
				$this->cscType = $vals['cscType'];
			}
			
			
			if (isset($vals['groupName'])){
				
				$this->groupName = $vals['groupName'];
			}
			
			
			if (isset($vals['upgradeStatus'])){
				
				$this->upgradeStatus = $vals['upgradeStatus'];
			}
			
			
			if (isset($vals['readStatus'])){
				
				$this->readStatus = $vals['readStatus'];
			}
			
			
			if (isset($vals['vipCscNo'])){
				
				$this->vipCscNo = $vals['vipCscNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcAdminChildCscVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("cscNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cscNo);
				
			}
			
			
			
			
			if ("cscType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cscType); 
				
			}
			
			
			
			
			if ("groupName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->groupName);
				
			}
			
			
			
			
			if ("upgradeStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->upgradeStatus); 
				
			}
			
			
			
			
			if ("readStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->readStatus); 
				
			}
			
			
			
			
			if ("vipCscNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipCscNo);
				
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
		
		if($this->cscNo !== null) {
			
			$xfer += $output->writeFieldBegin('cscNo');
			$xfer += $output->writeString($this->cscNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cscType !== null) {
			
			$xfer += $output->writeFieldBegin('cscType');
			$xfer += $output->writeI32($this->cscType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->groupName !== null) {
			
			$xfer += $output->writeFieldBegin('groupName');
			$xfer += $output->writeString($this->groupName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->upgradeStatus !== null) {
			
			$xfer += $output->writeFieldBegin('upgradeStatus');
			$xfer += $output->writeI32($this->upgradeStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->readStatus !== null) {
			
			$xfer += $output->writeFieldBegin('readStatus');
			$xfer += $output->writeI32($this->readStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipCscNo !== null) {
			
			$xfer += $output->writeFieldBegin('vipCscNo');
			$xfer += $output->writeString($this->vipCscNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>