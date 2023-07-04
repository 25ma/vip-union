<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying;

class CcPoBasic {
	
	static $_TSPEC;
	public $groupCode = null;
	public $purchaseNo = null;
	public $createTime = null;
	public $approvalStatusDesc = null;
	public $approvalStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'groupCode'
			),
			2 => array(
			'var' => 'purchaseNo'
			),
			3 => array(
			'var' => 'createTime'
			),
			4 => array(
			'var' => 'approvalStatusDesc'
			),
			5 => array(
			'var' => 'approvalStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['groupCode'])){
				
				$this->groupCode = $vals['groupCode'];
			}
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['approvalStatusDesc'])){
				
				$this->approvalStatusDesc = $vals['approvalStatusDesc'];
			}
			
			
			if (isset($vals['approvalStatus'])){
				
				$this->approvalStatus = $vals['approvalStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CcPoBasic';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("groupCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->groupCode);
				
			}
			
			
			
			
			if ("purchaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseNo);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("approvalStatusDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approvalStatusDesc);
				
			}
			
			
			
			
			if ("approvalStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->approvalStatus); 
				
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
		
		if($this->groupCode !== null) {
			
			$xfer += $output->writeFieldBegin('groupCode');
			$xfer += $output->writeString($this->groupCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseNo !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseNo');
			$xfer += $output->writeString($this->purchaseNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approvalStatusDesc !== null) {
			
			$xfer += $output->writeFieldBegin('approvalStatusDesc');
			$xfer += $output->writeString($this->approvalStatusDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approvalStatus !== null) {
			
			$xfer += $output->writeFieldBegin('approvalStatus');
			$xfer += $output->writeByte($this->approvalStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>