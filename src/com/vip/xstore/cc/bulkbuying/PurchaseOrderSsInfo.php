<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying;

class PurchaseOrderSsInfo {
	
	static $_TSPEC;
	public $purchaseNo = null;
	public $poAlias = null;
	public $bizNo = null;
	public $bizName = null;
	public $isSupplement = null;
	public $supplementPo = null;
	public $approvalStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseNo'
			),
			2 => array(
			'var' => 'poAlias'
			),
			3 => array(
			'var' => 'bizNo'
			),
			4 => array(
			'var' => 'bizName'
			),
			5 => array(
			'var' => 'isSupplement'
			),
			6 => array(
			'var' => 'supplementPo'
			),
			7 => array(
			'var' => 'approvalStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['poAlias'])){
				
				$this->poAlias = $vals['poAlias'];
			}
			
			
			if (isset($vals['bizNo'])){
				
				$this->bizNo = $vals['bizNo'];
			}
			
			
			if (isset($vals['bizName'])){
				
				$this->bizName = $vals['bizName'];
			}
			
			
			if (isset($vals['isSupplement'])){
				
				$this->isSupplement = $vals['isSupplement'];
			}
			
			
			if (isset($vals['supplementPo'])){
				
				$this->supplementPo = $vals['supplementPo'];
			}
			
			
			if (isset($vals['approvalStatus'])){
				
				$this->approvalStatus = $vals['approvalStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseOrderSsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("purchaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseNo);
				
			}
			
			
			
			
			if ("poAlias" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poAlias);
				
			}
			
			
			
			
			if ("bizNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizNo);
				
			}
			
			
			
			
			if ("bizName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizName);
				
			}
			
			
			
			
			if ("isSupplement" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isSupplement); 
				
			}
			
			
			
			
			if ("supplementPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplementPo);
				
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
		
		if($this->purchaseNo !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseNo');
			$xfer += $output->writeString($this->purchaseNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poAlias !== null) {
			
			$xfer += $output->writeFieldBegin('poAlias');
			$xfer += $output->writeString($this->poAlias);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizNo !== null) {
			
			$xfer += $output->writeFieldBegin('bizNo');
			$xfer += $output->writeString($this->bizNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizName !== null) {
			
			$xfer += $output->writeFieldBegin('bizName');
			$xfer += $output->writeString($this->bizName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSupplement !== null) {
			
			$xfer += $output->writeFieldBegin('isSupplement');
			$xfer += $output->writeByte($this->isSupplement);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplementPo !== null) {
			
			$xfer += $output->writeFieldBegin('supplementPo');
			$xfer += $output->writeString($this->supplementPo);
			
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