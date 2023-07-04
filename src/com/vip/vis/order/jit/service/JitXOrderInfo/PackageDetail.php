<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\JitXOrderInfo;

class PackageDetail {
	
	static $_TSPEC;
	public $barcode = null;
	public $quantity = null;
	public $trade_id = null;
	public $serial_nos = null;
	public $material_type = null;
	public $serial_no_ext_list = null;
	public $raw_barcode_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'quantity'
			),
			3 => array(
			'var' => 'trade_id'
			),
			4 => array(
			'var' => 'serial_nos'
			),
			5 => array(
			'var' => 'material_type'
			),
			6 => array(
			'var' => 'serial_no_ext_list'
			),
			7 => array(
			'var' => 'raw_barcode_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['trade_id'])){
				
				$this->trade_id = $vals['trade_id'];
			}
			
			
			if (isset($vals['serial_nos'])){
				
				$this->serial_nos = $vals['serial_nos'];
			}
			
			
			if (isset($vals['material_type'])){
				
				$this->material_type = $vals['material_type'];
			}
			
			
			if (isset($vals['serial_no_ext_list'])){
				
				$this->serial_no_ext_list = $vals['serial_no_ext_list'];
			}
			
			
			if (isset($vals['raw_barcode_list'])){
				
				$this->raw_barcode_list = $vals['raw_barcode_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PackageDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("trade_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade_id);
				
			}
			
			
			
			
			if ("serial_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->serial_nos = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->serial_nos[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("material_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->material_type); 
				
			}
			
			
			
			
			if ("serial_no_ext_list" == $schemeField){
				
				$needSkip = false;
				
				$this->serial_no_ext_list = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\vis\order\jit\service\goodsExt\SerialNoExt();
						$elem2->read($input);
						
						$this->serial_no_ext_list[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("raw_barcode_list" == $schemeField){
				
				$needSkip = false;
				
				$this->raw_barcode_list = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readString($elem3);
						
						$this->raw_barcode_list[$_size3++] = $elem3;
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
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->trade_id !== null) {
			
			$xfer += $output->writeFieldBegin('trade_id');
			$xfer += $output->writeString($this->trade_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serial_nos !== null) {
			
			$xfer += $output->writeFieldBegin('serial_nos');
			
			if (!is_array($this->serial_nos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->serial_nos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->material_type !== null) {
			
			$xfer += $output->writeFieldBegin('material_type');
			$xfer += $output->writeI32($this->material_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serial_no_ext_list !== null) {
			
			$xfer += $output->writeFieldBegin('serial_no_ext_list');
			
			if (!is_array($this->serial_no_ext_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->serial_no_ext_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->raw_barcode_list !== null) {
			
			$xfer += $output->writeFieldBegin('raw_barcode_list');
			
			if (!is_array($this->raw_barcode_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->raw_barcode_list as $iter0){
				
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