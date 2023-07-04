<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\goodsExt;

class QueryGoodsIdentityItem {
	
	static $_TSPEC;
	public $order_sn = null;
	public $bar_code = null;
	public $raw_barcode = null;
	public $serial_no = null;
	public $update_time = null;
	public $data_source = null;
	public $data_source_str = null;
	public $security_type = null;
	public $material_type = null;
	public $security_type_str = null;
	public $material_type_str = null;
	public $seal_verify_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'bar_code'
			),
			3 => array(
			'var' => 'raw_barcode'
			),
			4 => array(
			'var' => 'serial_no'
			),
			5 => array(
			'var' => 'update_time'
			),
			6 => array(
			'var' => 'data_source'
			),
			7 => array(
			'var' => 'data_source_str'
			),
			8 => array(
			'var' => 'security_type'
			),
			9 => array(
			'var' => 'material_type'
			),
			10 => array(
			'var' => 'security_type_str'
			),
			11 => array(
			'var' => 'material_type_str'
			),
			12 => array(
			'var' => 'seal_verify_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['bar_code'])){
				
				$this->bar_code = $vals['bar_code'];
			}
			
			
			if (isset($vals['raw_barcode'])){
				
				$this->raw_barcode = $vals['raw_barcode'];
			}
			
			
			if (isset($vals['serial_no'])){
				
				$this->serial_no = $vals['serial_no'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['data_source'])){
				
				$this->data_source = $vals['data_source'];
			}
			
			
			if (isset($vals['data_source_str'])){
				
				$this->data_source_str = $vals['data_source_str'];
			}
			
			
			if (isset($vals['security_type'])){
				
				$this->security_type = $vals['security_type'];
			}
			
			
			if (isset($vals['material_type'])){
				
				$this->material_type = $vals['material_type'];
			}
			
			
			if (isset($vals['security_type_str'])){
				
				$this->security_type_str = $vals['security_type_str'];
			}
			
			
			if (isset($vals['material_type_str'])){
				
				$this->material_type_str = $vals['material_type_str'];
			}
			
			
			if (isset($vals['seal_verify_no'])){
				
				$this->seal_verify_no = $vals['seal_verify_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryGoodsIdentityItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("bar_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bar_code);
				
			}
			
			
			
			
			if ("raw_barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->raw_barcode);
				
			}
			
			
			
			
			if ("serial_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serial_no);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time);
				
			}
			
			
			
			
			if ("data_source" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->data_source); 
				
			}
			
			
			
			
			if ("data_source_str" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->data_source_str);
				
			}
			
			
			
			
			if ("security_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->security_type); 
				
			}
			
			
			
			
			if ("material_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->material_type); 
				
			}
			
			
			
			
			if ("security_type_str" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->security_type_str);
				
			}
			
			
			
			
			if ("material_type_str" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->material_type_str);
				
			}
			
			
			
			
			if ("seal_verify_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seal_verify_no);
				
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
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bar_code !== null) {
			
			$xfer += $output->writeFieldBegin('bar_code');
			$xfer += $output->writeString($this->bar_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->raw_barcode !== null) {
			
			$xfer += $output->writeFieldBegin('raw_barcode');
			$xfer += $output->writeString($this->raw_barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serial_no !== null) {
			
			$xfer += $output->writeFieldBegin('serial_no');
			$xfer += $output->writeString($this->serial_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeI64($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->data_source !== null) {
			
			$xfer += $output->writeFieldBegin('data_source');
			$xfer += $output->writeByte($this->data_source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->data_source_str !== null) {
			
			$xfer += $output->writeFieldBegin('data_source_str');
			$xfer += $output->writeString($this->data_source_str);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->security_type !== null) {
			
			$xfer += $output->writeFieldBegin('security_type');
			$xfer += $output->writeI32($this->security_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->material_type !== null) {
			
			$xfer += $output->writeFieldBegin('material_type');
			$xfer += $output->writeI32($this->material_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->security_type_str !== null) {
			
			$xfer += $output->writeFieldBegin('security_type_str');
			$xfer += $output->writeString($this->security_type_str);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->material_type_str !== null) {
			
			$xfer += $output->writeFieldBegin('material_type_str');
			$xfer += $output->writeString($this->material_type_str);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seal_verify_no !== null) {
			
			$xfer += $output->writeFieldBegin('seal_verify_no');
			$xfer += $output->writeString($this->seal_verify_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>