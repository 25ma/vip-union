<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TransportserviceFieldVop {
	
	static $_TSPEC;
	public $service_code = null;
	public $service_field_map = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'service_code'
			),
			2 => array(
			'var' => 'service_field_map'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['service_code'])){
				
				$this->service_code = $vals['service_code'];
			}
			
			
			if (isset($vals['service_field_map'])){
				
				$this->service_field_map = $vals['service_field_map'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportserviceFieldVop';
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
			
			
			
			
			if ("service_field_map" == $schemeField){
				
				$needSkip = false;
				
				$this->service_field_map = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = '';
						$input->readString($val1);
						
						$this->service_field_map[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		
		if($this->service_field_map !== null) {
			
			$xfer += $output->writeFieldBegin('service_field_map');
			
			if (!is_array($this->service_field_map)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->service_field_map as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>