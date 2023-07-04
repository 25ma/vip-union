<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class Qualification {
	
	static $_TSPEC;
	public $id = null;
	public $qualificationName = null;
	public $type = null;
	public $isMandatory = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'qualificationName'
			),
			3 => array(
			'var' => 'type'
			),
			4 => array(
			'var' => 'isMandatory'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['qualificationName'])){
				
				$this->qualificationName = $vals['qualificationName'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['isMandatory'])){
				
				$this->isMandatory = $vals['isMandatory'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Qualification';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("qualificationName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->qualificationName);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->type); 
				
			}
			
			
			
			
			if ("isMandatory" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->isMandatory); 
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qualificationName !== null) {
			
			$xfer += $output->writeFieldBegin('qualificationName');
			$xfer += $output->writeString($this->qualificationName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeI32($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isMandatory !== null) {
			
			$xfer += $output->writeFieldBegin('isMandatory');
			$xfer += $output->writeI16($this->isMandatory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>