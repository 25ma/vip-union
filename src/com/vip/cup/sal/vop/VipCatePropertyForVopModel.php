<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class VipCatePropertyForVopModel {
	
	static $_TSPEC;
	public $attributeId = null;
	public $attributeName = null;
	public $attributeValue = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attributeId'
			),
			2 => array(
			'var' => 'attributeName'
			),
			3 => array(
			'var' => 'attributeValue'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attributeId'])){
				
				$this->attributeId = $vals['attributeId'];
			}
			
			
			if (isset($vals['attributeName'])){
				
				$this->attributeName = $vals['attributeName'];
			}
			
			
			if (isset($vals['attributeValue'])){
				
				$this->attributeValue = $vals['attributeValue'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipCatePropertyForVopModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attributeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attributeId);
				
			}
			
			
			
			
			if ("attributeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attributeName);
				
			}
			
			
			
			
			if ("attributeValue" == $schemeField){
				
				$needSkip = false;
				
				$this->attributeValue = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\cup\sal\vop\VipCatePropertyValueForVopModel();
						$elem0->read($input);
						
						$this->attributeValue[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->attributeId !== null) {
			
			$xfer += $output->writeFieldBegin('attributeId');
			$xfer += $output->writeString($this->attributeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributeName !== null) {
			
			$xfer += $output->writeFieldBegin('attributeName');
			$xfer += $output->writeString($this->attributeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributeValue !== null) {
			
			$xfer += $output->writeFieldBegin('attributeValue');
			
			if (!is_array($this->attributeValue)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attributeValue as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>