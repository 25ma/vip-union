<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class GetReturnAddressNoAuthRequest {
	
	static $_TSPEC;
	public $carrier_code = null;
	public $logistics_nos = null;
	public $real_carrier_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_code'
			),
			2 => array(
			'var' => 'logistics_nos'
			),
			3 => array(
			'var' => 'real_carrier_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['logistics_nos'])){
				
				$this->logistics_nos = $vals['logistics_nos'];
			}
			
			
			if (isset($vals['real_carrier_code'])){
				
				$this->real_carrier_code = $vals['real_carrier_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetReturnAddressNoAuthRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("logistics_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->logistics_nos = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->logistics_nos[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("real_carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->real_carrier_code);
				
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
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->logistics_nos !== null) {
			
			$xfer += $output->writeFieldBegin('logistics_nos');
			
			if (!is_array($this->logistics_nos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->logistics_nos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->real_carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('real_carrier_code');
			$xfer += $output->writeString($this->real_carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>