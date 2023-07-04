<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\request;

class ReturnDiffAddDetailParamModel {
	
	static $_TSPEC;
	public $po_no = null;
	public $item_code = null;
	public $quantity = null;
	public $order_sn = null;
	public $vendor_feedback = null;
	public $vendor_note = null;
	public $box_id = null;
	public $transport_box_id = null;
	public $is_complete = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_no'
			),
			2 => array(
			'var' => 'item_code'
			),
			3 => array(
			'var' => 'quantity'
			),
			5 => array(
			'var' => 'order_sn'
			),
			6 => array(
			'var' => 'vendor_feedback'
			),
			7 => array(
			'var' => 'vendor_note'
			),
			8 => array(
			'var' => 'box_id'
			),
			9 => array(
			'var' => 'transport_box_id'
			),
			10 => array(
			'var' => 'is_complete'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['vendor_feedback'])){
				
				$this->vendor_feedback = $vals['vendor_feedback'];
			}
			
			
			if (isset($vals['vendor_note'])){
				
				$this->vendor_note = $vals['vendor_note'];
			}
			
			
			if (isset($vals['box_id'])){
				
				$this->box_id = $vals['box_id'];
			}
			
			
			if (isset($vals['transport_box_id'])){
				
				$this->transport_box_id = $vals['transport_box_id'];
			}
			
			
			if (isset($vals['is_complete'])){
				
				$this->is_complete = $vals['is_complete'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDiffAddDetailParamModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("vendor_feedback" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_feedback);
				
			}
			
			
			
			
			if ("vendor_note" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_note);
				
			}
			
			
			
			
			if ("box_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_id);
				
			}
			
			
			
			
			if ("transport_box_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_box_id);
				
			}
			
			
			
			
			if ("is_complete" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_complete); 
				
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
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('item_code');
		$xfer += $output->writeString($this->item_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_feedback');
		$xfer += $output->writeString($this->vendor_feedback);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_note');
		$xfer += $output->writeString($this->vendor_note);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('box_id');
		$xfer += $output->writeString($this->box_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transport_box_id !== null) {
			
			$xfer += $output->writeFieldBegin('transport_box_id');
			$xfer += $output->writeString($this->transport_box_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('is_complete');
		$xfer += $output->writeI32($this->is_complete);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>