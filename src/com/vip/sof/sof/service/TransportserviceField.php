<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TransportserviceField {
	
	static $_TSPEC;
	public $serviceCode = null;
	public $serviceFieldMap = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serviceCode'
			),
			2 => array(
			'var' => 'serviceFieldMap'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serviceCode'])){
				
				$this->serviceCode = $vals['serviceCode'];
			}
			
			
			if (isset($vals['serviceFieldMap'])){
				
				$this->serviceFieldMap = $vals['serviceFieldMap'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportserviceField';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("serviceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serviceCode);
				
			}
			
			
			
			
			if ("serviceFieldMap" == $schemeField){
				
				$needSkip = false;
				
				$this->serviceFieldMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->serviceFieldMap[$key0] = $val0;
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
		
		if($this->serviceCode !== null) {
			
			$xfer += $output->writeFieldBegin('serviceCode');
			$xfer += $output->writeString($this->serviceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serviceFieldMap !== null) {
			
			$xfer += $output->writeFieldBegin('serviceFieldMap');
			
			if (!is_array($this->serviceFieldMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->serviceFieldMap as $kiter0 => $viter0){
				
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