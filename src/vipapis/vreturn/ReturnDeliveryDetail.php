<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vreturn;

class ReturnDeliveryDetail {
	
	static $_TSPEC;
	public $barcode = null;
	public $product_name = null;
	public $grade = null;
	public $po_no = null;
	public $qty = null;
	public $box_no = null;
	public $storage_no = null;
	public $storage_box_no = null;
	public $origin_po_no = null;
	public $origin_return_no = null;
	public $difference_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'product_name'
			),
			3 => array(
			'var' => 'grade'
			),
			4 => array(
			'var' => 'po_no'
			),
			5 => array(
			'var' => 'qty'
			),
			6 => array(
			'var' => 'box_no'
			),
			7 => array(
			'var' => 'storage_no'
			),
			8 => array(
			'var' => 'storage_box_no'
			),
			9 => array(
			'var' => 'origin_po_no'
			),
			10 => array(
			'var' => 'origin_return_no'
			),
			11 => array(
			'var' => 'difference_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['grade'])){
				
				$this->grade = $vals['grade'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
			if (isset($vals['storage_box_no'])){
				
				$this->storage_box_no = $vals['storage_box_no'];
			}
			
			
			if (isset($vals['origin_po_no'])){
				
				$this->origin_po_no = $vals['origin_po_no'];
			}
			
			
			if (isset($vals['origin_return_no'])){
				
				$this->origin_return_no = $vals['origin_return_no'];
			}
			
			
			if (isset($vals['difference_no'])){
				
				$this->difference_no = $vals['difference_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDeliveryDetail';
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
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("grade" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->grade); 
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->qty);
				
			}
			
			
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_no);
				
			}
			
			
			
			
			if ("storage_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storage_no);
				
			}
			
			
			
			
			if ("storage_box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storage_box_no);
				
			}
			
			
			
			
			if ("origin_po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->origin_po_no);
				
			}
			
			
			
			
			if ("origin_return_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->origin_return_no);
				
			}
			
			
			
			
			if ("difference_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->difference_no);
				
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
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_name !== null) {
			
			$xfer += $output->writeFieldBegin('product_name');
			$xfer += $output->writeString($this->product_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grade !== null) {
			
			$xfer += $output->writeFieldBegin('grade');
			$xfer += $output->writeI32($this->grade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeDouble($this->qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->box_no !== null) {
			
			$xfer += $output->writeFieldBegin('box_no');
			$xfer += $output->writeString($this->box_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storage_no !== null) {
			
			$xfer += $output->writeFieldBegin('storage_no');
			$xfer += $output->writeString($this->storage_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storage_box_no !== null) {
			
			$xfer += $output->writeFieldBegin('storage_box_no');
			$xfer += $output->writeString($this->storage_box_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->origin_po_no !== null) {
			
			$xfer += $output->writeFieldBegin('origin_po_no');
			$xfer += $output->writeString($this->origin_po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->origin_return_no !== null) {
			
			$xfer += $output->writeFieldBegin('origin_return_no');
			$xfer += $output->writeString($this->origin_return_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->difference_no !== null) {
			
			$xfer += $output->writeFieldBegin('difference_no');
			$xfer += $output->writeString($this->difference_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>