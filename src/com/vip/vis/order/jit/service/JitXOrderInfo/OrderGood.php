<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\JitXOrderInfo;

class OrderGood {
	
	static $_TSPEC;
	public $barcode = null;
	public $quantity = null;
	public $price = null;
	public $brand_name = null;
	public $product_name = null;
	public $size = null;
	public $sn = null;
	public $po_no = null;
	public $cooperation_no = null;
	public $promotion_price = null;
	public $vendor_id = null;
	public $vendor_code = null;
	public $anti_theft_flag = null;
	public $tax_rate = null;
	public $gross_margin_rate = null;
	public $bill_price = null;
	public $bill_tax_price = null;
	public $active_order_price = null;
	public $sum_vendor_fav_price = null;
	public $sum_fav_price = null;
	public $original_price = null;
	public $discount_detail = null;
	public $security_type = null;
	public $active_new_rule_flag = null;
	public $cooperation_type = null;
	public $net_bill_tax_price = null;
	public $market_price = null;
	public $check_items = null;
	public $quality_check_type = null;
	
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
			'var' => 'price'
			),
			4 => array(
			'var' => 'brand_name'
			),
			5 => array(
			'var' => 'product_name'
			),
			6 => array(
			'var' => 'size'
			),
			7 => array(
			'var' => 'sn'
			),
			8 => array(
			'var' => 'po_no'
			),
			9 => array(
			'var' => 'cooperation_no'
			),
			10 => array(
			'var' => 'promotion_price'
			),
			11 => array(
			'var' => 'vendor_id'
			),
			12 => array(
			'var' => 'vendor_code'
			),
			13 => array(
			'var' => 'anti_theft_flag'
			),
			14 => array(
			'var' => 'tax_rate'
			),
			15 => array(
			'var' => 'gross_margin_rate'
			),
			16 => array(
			'var' => 'bill_price'
			),
			17 => array(
			'var' => 'bill_tax_price'
			),
			18 => array(
			'var' => 'active_order_price'
			),
			19 => array(
			'var' => 'sum_vendor_fav_price'
			),
			20 => array(
			'var' => 'sum_fav_price'
			),
			21 => array(
			'var' => 'original_price'
			),
			22 => array(
			'var' => 'discount_detail'
			),
			23 => array(
			'var' => 'security_type'
			),
			24 => array(
			'var' => 'active_new_rule_flag'
			),
			25 => array(
			'var' => 'cooperation_type'
			),
			26 => array(
			'var' => 'net_bill_tax_price'
			),
			27 => array(
			'var' => 'market_price'
			),
			28 => array(
			'var' => 'check_items'
			),
			29 => array(
			'var' => 'quality_check_type'
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
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
			if (isset($vals['promotion_price'])){
				
				$this->promotion_price = $vals['promotion_price'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['anti_theft_flag'])){
				
				$this->anti_theft_flag = $vals['anti_theft_flag'];
			}
			
			
			if (isset($vals['tax_rate'])){
				
				$this->tax_rate = $vals['tax_rate'];
			}
			
			
			if (isset($vals['gross_margin_rate'])){
				
				$this->gross_margin_rate = $vals['gross_margin_rate'];
			}
			
			
			if (isset($vals['bill_price'])){
				
				$this->bill_price = $vals['bill_price'];
			}
			
			
			if (isset($vals['bill_tax_price'])){
				
				$this->bill_tax_price = $vals['bill_tax_price'];
			}
			
			
			if (isset($vals['active_order_price'])){
				
				$this->active_order_price = $vals['active_order_price'];
			}
			
			
			if (isset($vals['sum_vendor_fav_price'])){
				
				$this->sum_vendor_fav_price = $vals['sum_vendor_fav_price'];
			}
			
			
			if (isset($vals['sum_fav_price'])){
				
				$this->sum_fav_price = $vals['sum_fav_price'];
			}
			
			
			if (isset($vals['original_price'])){
				
				$this->original_price = $vals['original_price'];
			}
			
			
			if (isset($vals['discount_detail'])){
				
				$this->discount_detail = $vals['discount_detail'];
			}
			
			
			if (isset($vals['security_type'])){
				
				$this->security_type = $vals['security_type'];
			}
			
			
			if (isset($vals['active_new_rule_flag'])){
				
				$this->active_new_rule_flag = $vals['active_new_rule_flag'];
			}
			
			
			if (isset($vals['cooperation_type'])){
				
				$this->cooperation_type = $vals['cooperation_type'];
			}
			
			
			if (isset($vals['net_bill_tax_price'])){
				
				$this->net_bill_tax_price = $vals['net_bill_tax_price'];
			}
			
			
			if (isset($vals['market_price'])){
				
				$this->market_price = $vals['market_price'];
			}
			
			
			if (isset($vals['check_items'])){
				
				$this->check_items = $vals['check_items'];
			}
			
			
			if (isset($vals['quality_check_type'])){
				
				$this->quality_check_type = $vals['quality_check_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderGood';
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
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("cooperation_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cooperation_no);
				
			}
			
			
			
			
			if ("promotion_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promotion_price);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("anti_theft_flag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->anti_theft_flag);
				
			}
			
			
			
			
			if ("tax_rate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_rate);
				
			}
			
			
			
			
			if ("gross_margin_rate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->gross_margin_rate);
				
			}
			
			
			
			
			if ("bill_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bill_price);
				
			}
			
			
			
			
			if ("bill_tax_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bill_tax_price);
				
			}
			
			
			
			
			if ("active_order_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->active_order_price);
				
			}
			
			
			
			
			if ("sum_vendor_fav_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sum_vendor_fav_price);
				
			}
			
			
			
			
			if ("sum_fav_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sum_fav_price);
				
			}
			
			
			
			
			if ("original_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->original_price);
				
			}
			
			
			
			
			if ("discount_detail" == $schemeField){
				
				$needSkip = false;
				
				$this->discount_detail = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vis\order\jit\service\JitXOrderInfo\JitxSettlementDiscountDetail();
						$elem1->read($input);
						
						$this->discount_detail[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("security_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->security_type); 
				
			}
			
			
			
			
			if ("active_new_rule_flag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->active_new_rule_flag);
				
			}
			
			
			
			
			if ("cooperation_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->cooperation_type); 
				
			}
			
			
			
			
			if ("net_bill_tax_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->net_bill_tax_price);
				
			}
			
			
			
			
			if ("market_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->market_price);
				
			}
			
			
			
			
			if ("check_items" == $schemeField){
				
				$needSkip = false;
				
				$this->check_items = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\vis\order\jit\service\JitXOrderInfo\OrderCheckItem();
						$elem2->read($input);
						
						$this->check_items[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("quality_check_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->quality_check_type); 
				
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
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_name !== null) {
			
			$xfer += $output->writeFieldBegin('product_name');
			$xfer += $output->writeString($this->product_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperation_no !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_no');
			$xfer += $output->writeString($this->cooperation_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotion_price !== null) {
			
			$xfer += $output->writeFieldBegin('promotion_price');
			$xfer += $output->writeString($this->promotion_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->anti_theft_flag !== null) {
			
			$xfer += $output->writeFieldBegin('anti_theft_flag');
			$xfer += $output->writeString($this->anti_theft_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tax_rate !== null) {
			
			$xfer += $output->writeFieldBegin('tax_rate');
			$xfer += $output->writeString($this->tax_rate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gross_margin_rate !== null) {
			
			$xfer += $output->writeFieldBegin('gross_margin_rate');
			$xfer += $output->writeString($this->gross_margin_rate);
			
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
		
		
		if($this->active_order_price !== null) {
			
			$xfer += $output->writeFieldBegin('active_order_price');
			$xfer += $output->writeString($this->active_order_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sum_vendor_fav_price !== null) {
			
			$xfer += $output->writeFieldBegin('sum_vendor_fav_price');
			$xfer += $output->writeString($this->sum_vendor_fav_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sum_fav_price !== null) {
			
			$xfer += $output->writeFieldBegin('sum_fav_price');
			$xfer += $output->writeString($this->sum_fav_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->original_price !== null) {
			
			$xfer += $output->writeFieldBegin('original_price');
			$xfer += $output->writeString($this->original_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount_detail !== null) {
			
			$xfer += $output->writeFieldBegin('discount_detail');
			
			if (!is_array($this->discount_detail)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->discount_detail as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->security_type !== null) {
			
			$xfer += $output->writeFieldBegin('security_type');
			$xfer += $output->writeI32($this->security_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->active_new_rule_flag !== null) {
			
			$xfer += $output->writeFieldBegin('active_new_rule_flag');
			$xfer += $output->writeString($this->active_new_rule_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperation_type !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_type');
			$xfer += $output->writeByte($this->cooperation_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->net_bill_tax_price !== null) {
			
			$xfer += $output->writeFieldBegin('net_bill_tax_price');
			$xfer += $output->writeString($this->net_bill_tax_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->market_price !== null) {
			
			$xfer += $output->writeFieldBegin('market_price');
			$xfer += $output->writeString($this->market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->check_items !== null) {
			
			$xfer += $output->writeFieldBegin('check_items');
			
			if (!is_array($this->check_items)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->check_items as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quality_check_type !== null) {
			
			$xfer += $output->writeFieldBegin('quality_check_type');
			$xfer += $output->writeByte($this->quality_check_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>