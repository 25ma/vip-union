<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class OrderDetail {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_code = null;
	public $order_source_type = null;
	public $order_sn = null;
	public $ori_order_sn = null;
	public $barcode = null;
	public $goods_name = null;
	public $brand_store_sn = null;
	public $brand_store_name = null;
	public $first_cate_name = null;
	public $sec_cate_name = null;
	public $third_cate_name = null;
	public $create_time = null;
	public $pay_time = null;
	public $delivery_time = null;
	public $cancel_time = null;
	public $sign_time = null;
	public $unit_price = null;
	public $total_goods_cnt = null;
	public $is_gift_flag = null;
	public $order_acture_amt = null;
	public $goods_acture_amt = null;
	public $fav_amt = null;
	public $promo_fav_amt = null;
	
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
			'var' => 'order_source_type'
			),
			4 => array(
			'var' => 'order_sn'
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
			'var' => 'pay_time'
			),
			15 => array(
			'var' => 'delivery_time'
			),
			16 => array(
			'var' => 'cancel_time'
			),
			17 => array(
			'var' => 'sign_time'
			),
			18 => array(
			'var' => 'unit_price'
			),
			19 => array(
			'var' => 'total_goods_cnt'
			),
			20 => array(
			'var' => 'is_gift_flag'
			),
			21 => array(
			'var' => 'order_acture_amt'
			),
			22 => array(
			'var' => 'goods_acture_amt'
			),
			23 => array(
			'var' => 'fav_amt'
			),
			24 => array(
			'var' => 'promo_fav_amt'
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
			
			
			if (isset($vals['order_source_type'])){
				
				$this->order_source_type = $vals['order_source_type'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
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
			
			
			if (isset($vals['pay_time'])){
				
				$this->pay_time = $vals['pay_time'];
			}
			
			
			if (isset($vals['delivery_time'])){
				
				$this->delivery_time = $vals['delivery_time'];
			}
			
			
			if (isset($vals['cancel_time'])){
				
				$this->cancel_time = $vals['cancel_time'];
			}
			
			
			if (isset($vals['sign_time'])){
				
				$this->sign_time = $vals['sign_time'];
			}
			
			
			if (isset($vals['unit_price'])){
				
				$this->unit_price = $vals['unit_price'];
			}
			
			
			if (isset($vals['total_goods_cnt'])){
				
				$this->total_goods_cnt = $vals['total_goods_cnt'];
			}
			
			
			if (isset($vals['is_gift_flag'])){
				
				$this->is_gift_flag = $vals['is_gift_flag'];
			}
			
			
			if (isset($vals['order_acture_amt'])){
				
				$this->order_acture_amt = $vals['order_acture_amt'];
			}
			
			
			if (isset($vals['goods_acture_amt'])){
				
				$this->goods_acture_amt = $vals['goods_acture_amt'];
			}
			
			
			if (isset($vals['fav_amt'])){
				
				$this->fav_amt = $vals['fav_amt'];
			}
			
			
			if (isset($vals['promo_fav_amt'])){
				
				$this->promo_fav_amt = $vals['promo_fav_amt'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderDetail';
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
			
			
			
			
			if ("order_source_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_source_type);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
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
			
			
			
			
			if ("pay_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->pay_time); 
				
			}
			
			
			
			
			if ("delivery_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->delivery_time); 
				
			}
			
			
			
			
			if ("cancel_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cancel_time); 
				
			}
			
			
			
			
			if ("sign_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sign_time); 
				
			}
			
			
			
			
			if ("unit_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->unit_price);
				
			}
			
			
			
			
			if ("total_goods_cnt" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->total_goods_cnt); 
				
			}
			
			
			
			
			if ("is_gift_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_gift_flag); 
				
			}
			
			
			
			
			if ("order_acture_amt" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->order_acture_amt);
				
			}
			
			
			
			
			if ("goods_acture_amt" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->goods_acture_amt);
				
			}
			
			
			
			
			if ("fav_amt" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->fav_amt);
				
			}
			
			
			
			
			if ("promo_fav_amt" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->promo_fav_amt);
				
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
		
		
		if($this->order_source_type !== null) {
			
			$xfer += $output->writeFieldBegin('order_source_type');
			$xfer += $output->writeString($this->order_source_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
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
		
		
		if($this->pay_time !== null) {
			
			$xfer += $output->writeFieldBegin('pay_time');
			$xfer += $output->writeI64($this->pay_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_time');
			$xfer += $output->writeI64($this->delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancel_time !== null) {
			
			$xfer += $output->writeFieldBegin('cancel_time');
			$xfer += $output->writeI64($this->cancel_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sign_time !== null) {
			
			$xfer += $output->writeFieldBegin('sign_time');
			$xfer += $output->writeI64($this->sign_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit_price !== null) {
			
			$xfer += $output->writeFieldBegin('unit_price');
			$xfer += $output->writeDouble($this->unit_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_goods_cnt !== null) {
			
			$xfer += $output->writeFieldBegin('total_goods_cnt');
			$xfer += $output->writeI64($this->total_goods_cnt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_gift_flag !== null) {
			
			$xfer += $output->writeFieldBegin('is_gift_flag');
			$xfer += $output->writeI32($this->is_gift_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_acture_amt !== null) {
			
			$xfer += $output->writeFieldBegin('order_acture_amt');
			$xfer += $output->writeDouble($this->order_acture_amt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_acture_amt !== null) {
			
			$xfer += $output->writeFieldBegin('goods_acture_amt');
			$xfer += $output->writeDouble($this->goods_acture_amt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fav_amt !== null) {
			
			$xfer += $output->writeFieldBegin('fav_amt');
			$xfer += $output->writeDouble($this->fav_amt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promo_fav_amt !== null) {
			
			$xfer += $output->writeFieldBegin('promo_fav_amt');
			$xfer += $output->writeDouble($this->promo_fav_amt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>