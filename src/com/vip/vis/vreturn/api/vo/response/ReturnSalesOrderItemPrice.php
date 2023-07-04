<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\response;

class ReturnSalesOrderItemPrice {
	
	static $_TSPEC;
	public $item_code = null;
	public $item_desc = null;
	public $po_no = null;
	public $box_id = null;
	public $order_sn = null;
	public $quantity = null;
	public $rate = null;
	public $bill_tax_price = null;
	public $bill_tax_cost = null;
	public $net_bill_tax_price = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'item_code'
			),
			2 => array(
			'var' => 'item_desc'
			),
			3 => array(
			'var' => 'po_no'
			),
			4 => array(
			'var' => 'box_id'
			),
			5 => array(
			'var' => 'order_sn'
			),
			6 => array(
			'var' => 'quantity'
			),
			7 => array(
			'var' => 'rate'
			),
			8 => array(
			'var' => 'bill_tax_price'
			),
			9 => array(
			'var' => 'bill_tax_cost'
			),
			10 => array(
			'var' => 'net_bill_tax_price'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
			}
			
			
			if (isset($vals['item_desc'])){
				
				$this->item_desc = $vals['item_desc'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['box_id'])){
				
				$this->box_id = $vals['box_id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['rate'])){
				
				$this->rate = $vals['rate'];
			}
			
			
			if (isset($vals['bill_tax_price'])){
				
				$this->bill_tax_price = $vals['bill_tax_price'];
			}
			
			
			if (isset($vals['bill_tax_cost'])){
				
				$this->bill_tax_cost = $vals['bill_tax_cost'];
			}
			
			
			if (isset($vals['net_bill_tax_price'])){
				
				$this->net_bill_tax_price = $vals['net_bill_tax_price'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnSalesOrderItemPrice';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
			}
			
			
			
			
			if ("item_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_desc);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("box_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_id);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("rate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->rate);
				
			}
			
			
			
			
			if ("bill_tax_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->bill_tax_price);
				
			}
			
			
			
			
			if ("bill_tax_cost" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->bill_tax_cost);
				
			}
			
			
			
			
			if ("net_bill_tax_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->net_bill_tax_price);
				
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
		
		$xfer += $output->writeFieldBegin('item_code');
		$xfer += $output->writeString($this->item_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('item_desc');
		$xfer += $output->writeString($this->item_desc);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('box_id');
		$xfer += $output->writeString($this->box_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('rate');
		$xfer += $output->writeDouble($this->rate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bill_tax_price');
		$xfer += $output->writeDouble($this->bill_tax_price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bill_tax_cost');
		$xfer += $output->writeDouble($this->bill_tax_cost);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('net_bill_tax_price');
		$xfer += $output->writeDouble($this->net_bill_tax_price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>