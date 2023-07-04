<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class Accessory {
	
	static $_TSPEC;
	public $vendor_product_id = null;
	public $serial_no = null;
	public $accessory_name = null;
	public $accessory_num = null;
	public $has_accessory_image = null;
	public $is_affect_sales = null;
	public $accessory_image_list = null;
	public $operation_mode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_product_id'
			),
			2 => array(
			'var' => 'serial_no'
			),
			3 => array(
			'var' => 'accessory_name'
			),
			4 => array(
			'var' => 'accessory_num'
			),
			5 => array(
			'var' => 'has_accessory_image'
			),
			6 => array(
			'var' => 'is_affect_sales'
			),
			7 => array(
			'var' => 'accessory_image_list'
			),
			8 => array(
			'var' => 'operation_mode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_product_id'])){
				
				$this->vendor_product_id = $vals['vendor_product_id'];
			}
			
			
			if (isset($vals['serial_no'])){
				
				$this->serial_no = $vals['serial_no'];
			}
			
			
			if (isset($vals['accessory_name'])){
				
				$this->accessory_name = $vals['accessory_name'];
			}
			
			
			if (isset($vals['accessory_num'])){
				
				$this->accessory_num = $vals['accessory_num'];
			}
			
			
			if (isset($vals['has_accessory_image'])){
				
				$this->has_accessory_image = $vals['has_accessory_image'];
			}
			
			
			if (isset($vals['is_affect_sales'])){
				
				$this->is_affect_sales = $vals['is_affect_sales'];
			}
			
			
			if (isset($vals['accessory_image_list'])){
				
				$this->accessory_image_list = $vals['accessory_image_list'];
			}
			
			
			if (isset($vals['operation_mode'])){
				
				$this->operation_mode = $vals['operation_mode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Accessory';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_product_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendor_product_id); 
				
			}
			
			
			
			
			if ("serial_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->serial_no); 
				
			}
			
			
			
			
			if ("accessory_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accessory_name);
				
			}
			
			
			
			
			if ("accessory_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->accessory_num); 
				
			}
			
			
			
			
			if ("has_accessory_image" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->has_accessory_image); 
				
			}
			
			
			
			
			if ("is_affect_sales" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_affect_sales); 
				
			}
			
			
			
			
			if ("accessory_image_list" == $schemeField){
				
				$needSkip = false;
				
				$this->accessory_image_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\product\ItemImages();
						$elem0->read($input);
						
						$this->accessory_image_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("operation_mode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operation_mode); 
				
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
		
		if($this->vendor_product_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_product_id');
			$xfer += $output->writeI64($this->vendor_product_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serial_no !== null) {
			
			$xfer += $output->writeFieldBegin('serial_no');
			$xfer += $output->writeI32($this->serial_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accessory_name !== null) {
			
			$xfer += $output->writeFieldBegin('accessory_name');
			$xfer += $output->writeString($this->accessory_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accessory_num !== null) {
			
			$xfer += $output->writeFieldBegin('accessory_num');
			$xfer += $output->writeI32($this->accessory_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->has_accessory_image !== null) {
			
			$xfer += $output->writeFieldBegin('has_accessory_image');
			$xfer += $output->writeByte($this->has_accessory_image);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_affect_sales !== null) {
			
			$xfer += $output->writeFieldBegin('is_affect_sales');
			$xfer += $output->writeByte($this->is_affect_sales);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accessory_image_list !== null) {
			
			$xfer += $output->writeFieldBegin('accessory_image_list');
			
			if (!is_array($this->accessory_image_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->accessory_image_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operation_mode !== null) {
			
			$xfer += $output->writeFieldBegin('operation_mode');
			$xfer += $output->writeI32($this->operation_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>