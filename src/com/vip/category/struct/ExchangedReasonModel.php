<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\struct;

class ExchangedReasonModel {
	
	static $_TSPEC;
	public $reasonId = null;
	public $reasonDesc = null;
	public $hierarchy = null;
	public $parentId = null;
	public $isDefault = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reasonId'
			),
			2 => array(
			'var' => 'reasonDesc'
			),
			3 => array(
			'var' => 'hierarchy'
			),
			4 => array(
			'var' => 'parentId'
			),
			5 => array(
			'var' => 'isDefault'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reasonId'])){
				
				$this->reasonId = $vals['reasonId'];
			}
			
			
			if (isset($vals['reasonDesc'])){
				
				$this->reasonDesc = $vals['reasonDesc'];
			}
			
			
			if (isset($vals['hierarchy'])){
				
				$this->hierarchy = $vals['hierarchy'];
			}
			
			
			if (isset($vals['parentId'])){
				
				$this->parentId = $vals['parentId'];
			}
			
			
			if (isset($vals['isDefault'])){
				
				$this->isDefault = $vals['isDefault'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExchangedReasonModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("reasonId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->reasonId); 
				
			}
			
			
			
			
			if ("reasonDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonDesc);
				
			}
			
			
			
			
			if ("hierarchy" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->hierarchy); 
				
			}
			
			
			
			
			if ("parentId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->parentId); 
				
			}
			
			
			
			
			if ("isDefault" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDefault); 
				
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
		
		if($this->reasonId !== null) {
			
			$xfer += $output->writeFieldBegin('reasonId');
			$xfer += $output->writeI64($this->reasonId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonDesc !== null) {
			
			$xfer += $output->writeFieldBegin('reasonDesc');
			$xfer += $output->writeString($this->reasonDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hierarchy !== null) {
			
			$xfer += $output->writeFieldBegin('hierarchy');
			$xfer += $output->writeByte($this->hierarchy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentId !== null) {
			
			$xfer += $output->writeFieldBegin('parentId');
			$xfer += $output->writeI64($this->parentId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDefault !== null) {
			
			$xfer += $output->writeFieldBegin('isDefault');
			$xfer += $output->writeI32($this->isDefault);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>