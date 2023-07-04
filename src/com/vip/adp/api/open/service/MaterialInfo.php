<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class MaterialInfo {
	
	static $_TSPEC;
	public $materialType = null;
	public $materialValue = null;
	public $weight = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'materialType'
			),
			2 => array(
			'var' => 'materialValue'
			),
			3 => array(
			'var' => 'weight'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['materialType'])){
				
				$this->materialType = $vals['materialType'];
			}
			
			
			if (isset($vals['materialValue'])){
				
				$this->materialValue = $vals['materialValue'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MaterialInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("materialType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->materialType);
				
			}
			
			
			
			
			if ("materialValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->materialValue);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->weight); 
				
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
		
		if($this->materialType !== null) {
			
			$xfer += $output->writeFieldBegin('materialType');
			$xfer += $output->writeString($this->materialType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->materialValue !== null) {
			
			$xfer += $output->writeFieldBegin('materialValue');
			$xfer += $output->writeString($this->materialValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeI32($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>