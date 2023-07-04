<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\pg;

class BrandOrderGoods {
	
	static $_TSPEC;
	public $barcode = null;
	public $vendor_id = null;
	public $vendor_name = null;
	public $return_quantity = null;
	public $return_amount = null;
	public $brand_store_name = null;
	public $quantity = null;
	public $sn = null;
	public $size = null;
	public $mid = null;
	public $unit_price = null;
	public $pay_amount = null;
	public $discount_vendor_amount = null;
	public $discount_vip_amount = null;
	public $discount_total_amount = null;
	public $goods_name = null;
	public $gift_flag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'vendor_id'
			),
			3 => array(
			'var' => 'vendor_name'
			),
			4 => array(
			'var' => 'return_quantity'
			),
			5 => array(
			'var' => 'return_amount'
			),
			6 => array(
			'var' => 'brand_store_name'
			),
			7 => array(
			'var' => 'quantity'
			),
			8 => array(
			'var' => 'sn'
			),
			9 => array(
			'var' => 'size'
			),
			10 => array(
			'var' => 'mid'
			),
			11 => array(
			'var' => 'unit_price'
			),
			12 => array(
			'var' => 'pay_amount'
			),
			13 => array(
			'var' => 'discount_vendor_amount'
			),
			14 => array(
			'var' => 'discount_vip_amount'
			),
			15 => array(
			'var' => 'discount_total_amount'
			),
			16 => array(
			'var' => 'goods_name'
			),
			17 => array(
			'var' => 'gift_flag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['return_quantity'])){
				
				$this->return_quantity = $vals['return_quantity'];
			}
			
			
			if (isset($vals['return_amount'])){
				
				$this->return_amount = $vals['return_amount'];
			}
			
			
			if (isset($vals['brand_store_name'])){
				
				$this->brand_store_name = $vals['brand_store_name'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
			if (isset($vals['unit_price'])){
				
				$this->unit_price = $vals['unit_price'];
			}
			
			
			if (isset($vals['pay_amount'])){
				
				$this->pay_amount = $vals['pay_amount'];
			}
			
			
			if (isset($vals['discount_vendor_amount'])){
				
				$this->discount_vendor_amount = $vals['discount_vendor_amount'];
			}
			
			
			if (isset($vals['discount_vip_amount'])){
				
				$this->discount_vip_amount = $vals['discount_vip_amount'];
			}
			
			
			if (isset($vals['discount_total_amount'])){
				
				$this->discount_total_amount = $vals['discount_total_amount'];
			}
			
			
			if (isset($vals['goods_name'])){
				
				$this->goods_name = $vals['goods_name'];
			}
			
			
			if (isset($vals['gift_flag'])){
				
				$this->gift_flag = $vals['gift_flag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandOrderGoods';
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
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("return_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->return_quantity); 
				
			}
			
			
			
			
			if ("return_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->return_amount);
				
			}
			
			
			
			
			if ("brand_store_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_store_name);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->size); 
				
			}
			
			
			
			
			if ("mid" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->mid); 
				
			}
			
			
			
			
			if ("unit_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->unit_price);
				
			}
			
			
			
			
			if ("pay_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->pay_amount);
				
			}
			
			
			
			
			if ("discount_vendor_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discount_vendor_amount);
				
			}
			
			
			
			
			if ("discount_vip_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discount_vip_amount);
				
			}
			
			
			
			
			if ("discount_total_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discount_total_amount);
				
			}
			
			
			
			
			if ("goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_name);
				
			}
			
			
			
			
			if ("gift_flag" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->gift_flag);
				
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
		
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_name');
			$xfer += $output->writeString($this->vendor_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('return_quantity');
			$xfer += $output->writeI32($this->return_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_amount !== null) {
			
			$xfer += $output->writeFieldBegin('return_amount');
			$xfer += $output->writeDouble($this->return_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_store_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_store_name');
			$xfer += $output->writeString($this->brand_store_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeI64($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mid !== null) {
			
			$xfer += $output->writeFieldBegin('mid');
			$xfer += $output->writeI64($this->mid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit_price !== null) {
			
			$xfer += $output->writeFieldBegin('unit_price');
			$xfer += $output->writeDouble($this->unit_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_amount !== null) {
			
			$xfer += $output->writeFieldBegin('pay_amount');
			$xfer += $output->writeDouble($this->pay_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount_vendor_amount !== null) {
			
			$xfer += $output->writeFieldBegin('discount_vendor_amount');
			$xfer += $output->writeDouble($this->discount_vendor_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount_vip_amount !== null) {
			
			$xfer += $output->writeFieldBegin('discount_vip_amount');
			$xfer += $output->writeDouble($this->discount_vip_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount_total_amount !== null) {
			
			$xfer += $output->writeFieldBegin('discount_total_amount');
			$xfer += $output->writeDouble($this->discount_total_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_name !== null) {
			
			$xfer += $output->writeFieldBegin('goods_name');
			$xfer += $output->writeString($this->goods_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gift_flag !== null) {
			
			$xfer += $output->writeFieldBegin('gift_flag');
			$xfer += $output->writeBool($this->gift_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>