<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillProductInfo {
	
	static $_TSPEC;
	public $product_code = null;
	public $product_name = null;
	public $product_desc = null;
	public $service_infos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'product_code'
			),
			2 => array(
			'var' => 'product_name'
			),
			3 => array(
			'var' => 'product_desc'
			),
			4 => array(
			'var' => 'service_infos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['product_code'])){
				
				$this->product_code = $vals['product_code'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['product_desc'])){
				
				$this->product_desc = $vals['product_desc'];
			}
			
			
			if (isset($vals['service_infos'])){
				
				$this->service_infos = $vals['service_infos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillProductInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("product_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_code);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("product_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_desc);
				
			}
			
			
			
			
			if ("service_infos" == $schemeField){
				
				$needSkip = false;
				
				$this->service_infos = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tms\vop\service\WaybillServiceInfo();
						$elem1->read($input);
						
						$this->service_infos[$_size1++] = $elem1;
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
		
		if($this->product_code !== null) {
			
			$xfer += $output->writeFieldBegin('product_code');
			$xfer += $output->writeString($this->product_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_name !== null) {
			
			$xfer += $output->writeFieldBegin('product_name');
			$xfer += $output->writeString($this->product_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_desc !== null) {
			
			$xfer += $output->writeFieldBegin('product_desc');
			$xfer += $output->writeString($this->product_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->service_infos !== null) {
			
			$xfer += $output->writeFieldBegin('service_infos');
			
			if (!is_array($this->service_infos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->service_infos as $iter0){
				
				
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