<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\response;

class VendorReturnUniqueInfo {
	
	static $_TSPEC;
	public $box_no = null;
	public $po_no = null;
	public $schedule_id = null;
	public $barcode = null;
	public $order_sn = null;
	public $qty = null;
	public $unique_code = null;
	public $unique_code_type = null;
	public $unique_code_material = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'box_no'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'schedule_id'
			),
			4 => array(
			'var' => 'barcode'
			),
			5 => array(
			'var' => 'order_sn'
			),
			6 => array(
			'var' => 'qty'
			),
			7 => array(
			'var' => 'unique_code'
			),
			8 => array(
			'var' => 'unique_code_type'
			),
			9 => array(
			'var' => 'unique_code_material'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['unique_code'])){
				
				$this->unique_code = $vals['unique_code'];
			}
			
			
			if (isset($vals['unique_code_type'])){
				
				$this->unique_code_type = $vals['unique_code_type'];
			}
			
			
			if (isset($vals['unique_code_material'])){
				
				$this->unique_code_material = $vals['unique_code_material'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorReturnUniqueInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_no);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schedule_id);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
			}
			
			
			
			
			if ("unique_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unique_code);
				
			}
			
			
			
			
			if ("unique_code_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unique_code_type);
				
			}
			
			
			
			
			if ("unique_code_material" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unique_code_material);
				
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
		
		if($this->box_no !== null) {
			
			$xfer += $output->writeFieldBegin('box_no');
			$xfer += $output->writeString($this->box_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->schedule_id !== null) {
			
			$xfer += $output->writeFieldBegin('schedule_id');
			$xfer += $output->writeString($this->schedule_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeI32($this->qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unique_code !== null) {
			
			$xfer += $output->writeFieldBegin('unique_code');
			$xfer += $output->writeString($this->unique_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unique_code_type !== null) {
			
			$xfer += $output->writeFieldBegin('unique_code_type');
			$xfer += $output->writeString($this->unique_code_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unique_code_material !== null) {
			
			$xfer += $output->writeFieldBegin('unique_code_material');
			$xfer += $output->writeString($this->unique_code_material);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>