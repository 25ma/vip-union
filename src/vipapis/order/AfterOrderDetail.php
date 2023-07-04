<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class AfterOrderDetail {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_code = null;
	public $after_sale_flag = null;
	public $after_sale_sn = null;
	public $ori_order_sn = null;
	public $barcode = null;
	public $goods_name = null;
	public $brand_store_sn = null;
	public $brand_store_name = null;
	public $first_cate_name = null;
	public $sec_cate_name = null;
	public $third_cate_name = null;
	public $create_time = null;
	public $refund_finish_time = null;
	public $goods_num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vendor_code'
			),
			3 => array(
			'var' => 'after_sale_flag'
			),
			4 => array(
			'var' => 'after_sale_sn'
			),
			5 => array(
			'var' => 'ori_order_sn'
			),
			6 => array(
			'var' => 'barcode'
			),
			7 => array(
			'var' => 'goods_name'
			),
			8 => array(
			'var' => 'brand_store_sn'
			),
			9 => array(
			'var' => 'brand_store_name'
			),
			10 => array(
			'var' => 'first_cate_name'
			),
			11 => array(
			'var' => 'sec_cate_name'
			),
			12 => array(
			'var' => 'third_cate_name'
			),
			13 => array(
			'var' => 'create_time'
			),
			14 => array(
			'var' => 'refund_finish_time'
			),
			15 => array(
			'var' => 'goods_num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['after_sale_flag'])){
				
				$this->after_sale_flag = $vals['after_sale_flag'];
			}
			
			
			if (isset($vals['after_sale_sn'])){
				
				$this->after_sale_sn = $vals['after_sale_sn'];
			}
			
			
			if (isset($vals['ori_order_sn'])){
				
				$this->ori_order_sn = $vals['ori_order_sn'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['goods_name'])){
				
				$this->goods_name = $vals['goods_name'];
			}
			
			
			if (isset($vals['brand_store_sn'])){
				
				$this->brand_store_sn = $vals['brand_store_sn'];
			}
			
			
			if (isset($vals['brand_store_name'])){
				
				$this->brand_store_name = $vals['brand_store_name'];
			}
			
			
			if (isset($vals['first_cate_name'])){
				
				$this->first_cate_name = $vals['first_cate_name'];
			}
			
			
			if (isset($vals['sec_cate_name'])){
				
				$this->sec_cate_name = $vals['sec_cate_name'];
			}
			
			
			if (isset($vals['third_cate_name'])){
				
				$this->third_cate_name = $vals['third_cate_name'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['refund_finish_time'])){
				
				$this->refund_finish_time = $vals['refund_finish_time'];
			}
			
			
			if (isset($vals['goods_num'])){
				
				$this->goods_num = $vals['goods_num'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterOrderDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_code); 
				
			}
			
			
			
			
			if ("after_sale_flag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->after_sale_flag);
				
			}
			
			
			
			
			if ("after_sale_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->after_sale_sn);
				
			}
			
			
			
			
			if ("ori_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ori_order_sn);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_name);
				
			}
			
			
			
			
			if ("brand_store_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_store_sn);
				
			}
			
			
			
			
			if ("brand_store_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_store_name);
				
			}
			
			
			
			
			if ("first_cate_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->first_cate_name);
				
			}
			
			
			
			
			if ("sec_cate_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sec_cate_name);
				
			}
			
			
			
			
			if ("third_cate_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_cate_name);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time); 
				
			}
			
			
			
			
			if ("refund_finish_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refund_finish_time); 
				
			}
			
			
			
			
			if ("goods_num" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->goods_num); 
				
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
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeI32($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->after_sale_flag !== null) {
			
			$xfer += $output->writeFieldBegin('after_sale_flag');
			$xfer += $output->writeString($this->after_sale_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->after_sale_sn !== null) {
			
			$xfer += $output->writeFieldBegin('after_sale_sn');
			$xfer += $output->writeString($this->after_sale_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ori_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('ori_order_sn');
			$xfer += $output->writeString($this->ori_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_name !== null) {
			
			$xfer += $output->writeFieldBegin('goods_name');
			$xfer += $output->writeString($this->goods_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('brand_store_sn');
			$xfer += $output->writeString($this->brand_store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_store_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_store_name');
			$xfer += $output->writeString($this->brand_store_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->first_cate_name !== null) {
			
			$xfer += $output->writeFieldBegin('first_cate_name');
			$xfer += $output->writeString($this->first_cate_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sec_cate_name !== null) {
			
			$xfer += $output->writeFieldBegin('sec_cate_name');
			$xfer += $output->writeString($this->sec_cate_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_cate_name !== null) {
			
			$xfer += $output->writeFieldBegin('third_cate_name');
			$xfer += $output->writeString($this->third_cate_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refund_finish_time !== null) {
			
			$xfer += $output->writeFieldBegin('refund_finish_time');
			$xfer += $output->writeI64($this->refund_finish_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_num !== null) {
			
			$xfer += $output->writeFieldBegin('goods_num');
			$xfer += $output->writeI64($this->goods_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>