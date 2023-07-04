<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;

class CancelWorkOrderRequestForVop {
	
	static $_TSPEC;
	public $wd_no = null;
	public $wd_src = null;
	public $remark = null;
	public $vendor_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'wd_no'
			),
			2 => array(
			'var' => 'wd_src'
			),
			3 => array(
			'var' => 'remark'
			),
			4 => array(
			'var' => 'vendor_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wd_no'])){
				
				$this->wd_no = $vals['wd_no'];
			}
			
			
			if (isset($vals['wd_src'])){
				
				$this->wd_src = $vals['wd_src'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelWorkOrderRequestForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("wd_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wd_no);
				
			}
			
			
			
			
			if ("wd_src" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->wd_src); 
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
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
		
		if($this->wd_no !== null) {
			
			$xfer += $output->writeFieldBegin('wd_no');
			$xfer += $output->writeString($this->wd_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wd_src !== null) {
			
			$xfer += $output->writeFieldBegin('wd_src');
			$xfer += $output->writeByte($this->wd_src);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>