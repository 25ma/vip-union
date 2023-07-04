<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class GetWarehousesRequest {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $warehouse_type = null;
	public $warehouse_codes = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'warehouse_type'
			),
			3 => array(
			'var' => 'warehouse_codes'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['warehouse_type'])){
				
				$this->warehouse_type = $vals['warehouse_type'];
			}
			
			
			if (isset($vals['warehouse_codes'])){
				
				$this->warehouse_codes = $vals['warehouse_codes'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetWarehousesRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("warehouse_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_type);
				
			}
			
			
			
			
			if ("warehouse_codes" == $schemeField){
				
				$needSkip = false;
				
				$this->warehouse_codes = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->warehouse_codes[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->warehouse_type !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_type');
			$xfer += $output->writeString($this->warehouse_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_codes !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_codes');
			
			if (!is_array($this->warehouse_codes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->warehouse_codes as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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