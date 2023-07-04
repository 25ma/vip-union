<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class FieldConfig {
	
	static $_TSPEC;
	public $fieldName = null;
	public $defaultValue = null;
	public $isRequiredField = null;
	public $isScopeField = null;
	public $scopeList = null;
	public $fieldDesc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'fieldName'
			),
			2 => array(
			'var' => 'defaultValue'
			),
			3 => array(
			'var' => 'isRequiredField'
			),
			4 => array(
			'var' => 'isScopeField'
			),
			5 => array(
			'var' => 'scopeList'
			),
			6 => array(
			'var' => 'fieldDesc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['fieldName'])){
				
				$this->fieldName = $vals['fieldName'];
			}
			
			
			if (isset($vals['defaultValue'])){
				
				$this->defaultValue = $vals['defaultValue'];
			}
			
			
			if (isset($vals['isRequiredField'])){
				
				$this->isRequiredField = $vals['isRequiredField'];
			}
			
			
			if (isset($vals['isScopeField'])){
				
				$this->isScopeField = $vals['isScopeField'];
			}
			
			
			if (isset($vals['scopeList'])){
				
				$this->scopeList = $vals['scopeList'];
			}
			
			
			if (isset($vals['fieldDesc'])){
				
				$this->fieldDesc = $vals['fieldDesc'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FieldConfig';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("fieldName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fieldName);
				
			}
			
			
			
			
			if ("defaultValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->defaultValue);
				
			}
			
			
			
			
			if ("isRequiredField" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isRequiredField); 
				
			}
			
			
			
			
			if ("isScopeField" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isScopeField); 
				
			}
			
			
			
			
			if ("scopeList" == $schemeField){
				
				$needSkip = false;
				
				$this->scopeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\FieldConfigScope();
						$elem0->read($input);
						
						$this->scopeList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("fieldDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fieldDesc);
				
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
		
		if($this->fieldName !== null) {
			
			$xfer += $output->writeFieldBegin('fieldName');
			$xfer += $output->writeString($this->fieldName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defaultValue !== null) {
			
			$xfer += $output->writeFieldBegin('defaultValue');
			$xfer += $output->writeString($this->defaultValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isRequiredField !== null) {
			
			$xfer += $output->writeFieldBegin('isRequiredField');
			$xfer += $output->writeI32($this->isRequiredField);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isScopeField !== null) {
			
			$xfer += $output->writeFieldBegin('isScopeField');
			$xfer += $output->writeI32($this->isScopeField);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scopeList !== null) {
			
			$xfer += $output->writeFieldBegin('scopeList');
			
			if (!is_array($this->scopeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->scopeList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fieldDesc !== null) {
			
			$xfer += $output->writeFieldBegin('fieldDesc');
			$xfer += $output->writeString($this->fieldDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>