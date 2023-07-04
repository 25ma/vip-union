<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\jitXReturn;

class OrderReturnGoods {
	
	static $_TSPEC;
	public $size_sn = null;
	public $quantity = null;
	public $unit = null;
	public $po = null;
	public $tax_rate = null;
	public $bill_price = null;
	public $bill_tax_price = null;
	public $net_bill_price = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'size_sn'
			),
			2 => array(
			'var' => 'quantity'
			),
			3 => array(
			'var' => 'unit'
			),
			4 => array(
			'var' => 'po'
			),
			5 => array(
			'var' => 'tax_rate'
			),
			6 => array(
			'var' => 'bill_price'
			),
			7 => array(
			'var' => 'bill_tax_price'
			),
			8 => array(
			'var' => 'net_bill_price'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['size_sn'])){
				
				$this->size_sn = $vals['size_sn'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['tax_rate'])){
				
				$this->tax_rate = $vals['tax_rate'];
			}
			
			
			if (isset($vals['bill_price'])){
				
				$this->bill_price = $vals['bill_price'];
			}
			
			
			if (isset($vals['bill_tax_price'])){
				
				$this->bill_tax_price = $vals['bill_tax_price'];
			}
			
			
			if (isset($vals['net_bill_price'])){
				
				$this->net_bill_price = $vals['net_bill_price'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderReturnGoods';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("size_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_sn);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("tax_rate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_rate);
				
			}
			
			
			
			
			if ("bill_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bill_price);
				
			}
			
			
			
			
			if ("bill_tax_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bill_tax_price);
				
			}
			
			
			
			
			if ("net_bill_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->net_bill_price);
				
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
		
		if($this->size_sn !== null) {
			
			$xfer += $output->writeFieldBegin('size_sn');
			$xfer += $output->writeString($this->size_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tax_rate !== null) {
			
			$xfer += $output->writeFieldBegin('tax_rate');
			$xfer += $output->writeString($this->tax_rate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bill_price !== null) {
			
			$xfer += $output->writeFieldBegin('bill_price');
			$xfer += $output->writeString($this->bill_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bill_tax_price !== null) {
			
			$xfer += $output->writeFieldBegin('bill_tax_price');
			$xfer += $output->writeString($this->bill_tax_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->net_bill_price !== null) {
			
			$xfer += $output->writeFieldBegin('net_bill_price');
			$xfer += $output->writeString($this->net_bill_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>