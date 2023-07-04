<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillServiceInfo {
	
	static $_TSPEC;
	public $service_code = null;
	public $service_name = null;
	public $service_desc = null;
	public $service_field_configs = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'service_code'
			),
			2 => array(
			'var' => 'service_name'
			),
			3 => array(
			'var' => 'service_desc'
			),
			4 => array(
			'var' => 'service_field_configs'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['service_code'])){
				
				$this->service_code = $vals['service_code'];
			}
			
			
			if (isset($vals['service_name'])){
				
				$this->service_name = $vals['service_name'];
			}
			
			
			if (isset($vals['service_desc'])){
				
				$this->service_desc = $vals['service_desc'];
			}
			
			
			if (isset($vals['service_field_configs'])){
				
				$this->service_field_configs = $vals['service_field_configs'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillServiceInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("service_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->service_code);
				
			}
			
			
			
			
			if ("service_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->service_name);
				
			}
			
			
			
			
			if ("service_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->service_desc);
				
			}
			
			
			
			
			if ("service_field_configs" == $schemeField){
				
				$needSkip = false;
				
				$this->service_field_configs = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\tms\pegasus\service\FieldConfig();
						$elem0->read($input);
						
						$this->service_field_configs[$_size0++] = $elem0;
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
		
		if($this->service_code !== null) {
			
			$xfer += $output->writeFieldBegin('service_code');
			$xfer += $output->writeString($this->service_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->service_name !== null) {
			
			$xfer += $output->writeFieldBegin('service_name');
			$xfer += $output->writeString($this->service_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->service_desc !== null) {
			
			$xfer += $output->writeFieldBegin('service_desc');
			$xfer += $output->writeString($this->service_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->service_field_configs !== null) {
			
			$xfer += $output->writeFieldBegin('service_field_configs');
			
			if (!is_array($this->service_field_configs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->service_field_configs as $iter0){
				
				
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