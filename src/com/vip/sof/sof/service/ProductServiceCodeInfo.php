<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ProductServiceCodeInfo {
	
	static $_TSPEC;
	public $serviceName = null;
	public $serviceCode = null;
	public $serviceDesc = null;
	public $serviceFieldConfigList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serviceName'
			),
			2 => array(
			'var' => 'serviceCode'
			),
			3 => array(
			'var' => 'serviceDesc'
			),
			4 => array(
			'var' => 'serviceFieldConfigList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serviceName'])){
				
				$this->serviceName = $vals['serviceName'];
			}
			
			
			if (isset($vals['serviceCode'])){
				
				$this->serviceCode = $vals['serviceCode'];
			}
			
			
			if (isset($vals['serviceDesc'])){
				
				$this->serviceDesc = $vals['serviceDesc'];
			}
			
			
			if (isset($vals['serviceFieldConfigList'])){
				
				$this->serviceFieldConfigList = $vals['serviceFieldConfigList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductServiceCodeInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("serviceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serviceName);
				
			}
			
			
			
			
			if ("serviceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serviceCode);
				
			}
			
			
			
			
			if ("serviceDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serviceDesc);
				
			}
			
			
			
			
			if ("serviceFieldConfigList" == $schemeField){
				
				$needSkip = false;
				
				$this->serviceFieldConfigList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\FieldConfig();
						$elem0->read($input);
						
						$this->serviceFieldConfigList[$_size0++] = $elem0;
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
		
		if($this->serviceName !== null) {
			
			$xfer += $output->writeFieldBegin('serviceName');
			$xfer += $output->writeString($this->serviceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serviceCode !== null) {
			
			$xfer += $output->writeFieldBegin('serviceCode');
			$xfer += $output->writeString($this->serviceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serviceDesc !== null) {
			
			$xfer += $output->writeFieldBegin('serviceDesc');
			$xfer += $output->writeString($this->serviceDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serviceFieldConfigList !== null) {
			
			$xfer += $output->writeFieldBegin('serviceFieldConfigList');
			
			if (!is_array($this->serviceFieldConfigList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->serviceFieldConfigList as $iter0){
				
				
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