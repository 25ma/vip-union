<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\request;

class ReturnInParam {
	
	static $_TSPEC;
	public $request_time = null;
	public $from_source = null;
	public $vendor_id = null;
	public $trans_id = null;
	public $return_sn = null;
	public $item_code = null;
	public $quantity = null;
	public $order_sn = null;
	public $po_no = null;
	public $create_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request_time'
			),
			2 => array(
			'var' => 'from_source'
			),
			3 => array(
			'var' => 'vendor_id'
			),
			4 => array(
			'var' => 'trans_id'
			),
			5 => array(
			'var' => 'return_sn'
			),
			6 => array(
			'var' => 'item_code'
			),
			7 => array(
			'var' => 'quantity'
			),
			8 => array(
			'var' => 'order_sn'
			),
			9 => array(
			'var' => 'po_no'
			),
			10 => array(
			'var' => 'create_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request_time'])){
				
				$this->request_time = $vals['request_time'];
			}
			
			
			if (isset($vals['from_source'])){
				
				$this->from_source = $vals['from_source'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['trans_id'])){
				
				$this->trans_id = $vals['trans_id'];
			}
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
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
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnInParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("request_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->request_time);
				
			}
			
			
			
			
			if ("from_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->from_source);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("trans_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trans_id);
				
			}
			
			
			
			
			if ("return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_sn);
				
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
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
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
		
		if($this->request_time !== null) {
			
			$xfer += $output->writeFieldBegin('request_time');
			$xfer += $output->writeString($this->request_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('from_source');
		$xfer += $output->writeString($this->from_source);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trans_id');
		$xfer += $output->writeString($this->trans_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_sn');
		$xfer += $output->writeString($this->return_sn);
		
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
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('create_time');
		$xfer += $output->writeString($this->create_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>