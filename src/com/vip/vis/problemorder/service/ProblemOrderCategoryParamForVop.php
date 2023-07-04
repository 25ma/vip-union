<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;

class ProblemOrderCategoryParamForVop {
	
	static $_TSPEC;
	public $level = null;
	public $pid = null;
	public $is_for_create = null;
	public $vendor_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'level'
			),
			2 => array(
			'var' => 'pid'
			),
			3 => array(
			'var' => 'is_for_create'
			),
			4 => array(
			'var' => 'vendor_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['level'])){
				
				$this->level = $vals['level'];
			}
			
			
			if (isset($vals['pid'])){
				
				$this->pid = $vals['pid'];
			}
			
			
			if (isset($vals['is_for_create'])){
				
				$this->is_for_create = $vals['is_for_create'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProblemOrderCategoryParamForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("level" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->level); 
				
			}
			
			
			
			
			if ("pid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pid);
				
			}
			
			
			
			
			if ("is_for_create" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_for_create); 
				
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
		
		if($this->level !== null) {
			
			$xfer += $output->writeFieldBegin('level');
			$xfer += $output->writeI32($this->level);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pid !== null) {
			
			$xfer += $output->writeFieldBegin('pid');
			$xfer += $output->writeString($this->pid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_for_create !== null) {
			
			$xfer += $output->writeFieldBegin('is_for_create');
			$xfer += $output->writeByte($this->is_for_create);
			
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