<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class VendorInfoModel {
	
	static $_TSPEC;
	public $scheduledSellingId = null;
	public $num = null;
	public $vendorCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'scheduledSellingId'
			),
			2 => array(
			'var' => 'num'
			),
			3 => array(
			'var' => 'vendorCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['scheduledSellingId'])){
				
				$this->scheduledSellingId = $vals['scheduledSellingId'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("scheduledSellingId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->scheduledSellingId); 
				
			}
			
			
			
			
			if ("num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->num); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
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
		
		if($this->scheduledSellingId !== null) {
			
			$xfer += $output->writeFieldBegin('scheduledSellingId');
			$xfer += $output->writeI64($this->scheduledSellingId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->num !== null) {
			
			$xfer += $output->writeFieldBegin('num');
			$xfer += $output->writeI32($this->num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>