<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\JitXOrderInfo;

class JitxOrder {
	
	static $_TSPEC;
	public $order_sn = null;
	public $delivery_warehouse = null;
	public $add_time = null;
	public $buyer = null;
	public $buyer_address = null;
	public $buyer_mobile = null;
	public $buyer_tel = null;
	public $buyer_postcode = null;
	public $buyer_city = null;
	public $buyer_province = null;
	public $buyer_county = null;
	public $buyer_country_id = null;
	public $pay_type = null;
	public $cod_type = null;
	public $cod_money = null;
	public $remark = null;
	public $transport_time = null;
	public $transport_day = null;
	public $vendor_id = null;
	public $vendor_name = null;
	public $transport_no = null;
	public $carrier_code = null;
	public $carrier_name = null;
	public $order_status = null;
	public $last_update_time = null;
	public $package_received_time = null;
	public $order_type = null;
	public $is_forbidden_delivery = null;
	public $delivery_kpi_start_time = null;
	public $is_store_delivery = null;
	public $merged_code = null;
	public $merged_sn = null;
	public $is_pre_transport_no = null;
	public $parent_order_sn = null;
	public $old_order_sn = null;
	public $forbidden_reason = null;
	public $order_goods = null;
	public $is_province_dw_order = null;
	public $is_customize_goods = null;
	public $regular_delivery = null;
	public $regular_delivery_total = null;
	public $regular_delivery_period = null;
	public $plan_delivery_time = null;
	public $is_vendor_logistics = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'delivery_warehouse'
			),
			3 => array(
			'var' => 'add_time'
			),
			4 => array(
			'var' => 'buyer'
			),
			5 => array(
			'var' => 'buyer_address'
			),
			6 => array(
			'var' => 'buyer_mobile'
			),
			7 => array(
			'var' => 'buyer_tel'
			),
			8 => array(
			'var' => 'buyer_postcode'
			),
			9 => array(
			'var' => 'buyer_city'
			),
			10 => array(
			'var' => 'buyer_province'
			),
			11 => array(
			'var' => 'buyer_county'
			),
			12 => array(
			'var' => 'buyer_country_id'
			),
			13 => array(
			'var' => 'pay_type'
			),
			14 => array(
			'var' => 'cod_type'
			),
			15 => array(
			'var' => 'cod_money'
			),
			16 => array(
			'var' => 'remark'
			),
			17 => array(
			'var' => 'transport_time'
			),
			18 => array(
			'var' => 'transport_day'
			),
			19 => array(
			'var' => 'vendor_id'
			),
			20 => array(
			'var' => 'vendor_name'
			),
			21 => array(
			'var' => 'transport_no'
			),
			22 => array(
			'var' => 'carrier_code'
			),
			23 => array(
			'var' => 'carrier_name'
			),
			24 => array(
			'var' => 'order_status'
			),
			25 => array(
			'var' => 'last_update_time'
			),
			26 => array(
			'var' => 'package_received_time'
			),
			27 => array(
			'var' => 'order_type'
			),
			28 => array(
			'var' => 'is_forbidden_delivery'
			),
			29 => array(
			'var' => 'delivery_kpi_start_time'
			),
			30 => array(
			'var' => 'is_store_delivery'
			),
			31 => array(
			'var' => 'merged_code'
			),
			32 => array(
			'var' => 'merged_sn'
			),
			33 => array(
			'var' => 'is_pre_transport_no'
			),
			34 => array(
			'var' => 'parent_order_sn'
			),
			35 => array(
			'var' => 'old_order_sn'
			),
			36 => array(
			'var' => 'forbidden_reason'
			),
			37 => array(
			'var' => 'order_goods'
			),
			38 => array(
			'var' => 'is_province_dw_order'
			),
			39 => array(
			'var' => 'is_customize_goods'
			),
			40 => array(
			'var' => 'regular_delivery'
			),
			41 => array(
			'var' => 'regular_delivery_total'
			),
			42 => array(
			'var' => 'regular_delivery_period'
			),
			43 => array(
			'var' => 'plan_delivery_time'
			),
			44 => array(
			'var' => 'is_vendor_logistics'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['delivery_warehouse'])){
				
				$this->delivery_warehouse = $vals['delivery_warehouse'];
			}
			
			
			if (isset($vals['add_time'])){
				
				$this->add_time = $vals['add_time'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['buyer_address'])){
				
				$this->buyer_address = $vals['buyer_address'];
			}
			
			
			if (isset($vals['buyer_mobile'])){
				
				$this->buyer_mobile = $vals['buyer_mobile'];
			}
			
			
			if (isset($vals['buyer_tel'])){
				
				$this->buyer_tel = $vals['buyer_tel'];
			}
			
			
			if (isset($vals['buyer_postcode'])){
				
				$this->buyer_postcode = $vals['buyer_postcode'];
			}
			
			
			if (isset($vals['buyer_city'])){
				
				$this->buyer_city = $vals['buyer_city'];
			}
			
			
			if (isset($vals['buyer_province'])){
				
				$this->buyer_province = $vals['buyer_province'];
			}
			
			
			if (isset($vals['buyer_county'])){
				
				$this->buyer_county = $vals['buyer_county'];
			}
			
			
			if (isset($vals['buyer_country_id'])){
				
				$this->buyer_country_id = $vals['buyer_country_id'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
			}
			
			
			if (isset($vals['cod_type'])){
				
				$this->cod_type = $vals['cod_type'];
			}
			
			
			if (isset($vals['cod_money'])){
				
				$this->cod_money = $vals['cod_money'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['transport_time'])){
				
				$this->transport_time = $vals['transport_time'];
			}
			
			
			if (isset($vals['transport_day'])){
				
				$this->transport_day = $vals['transport_day'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['last_update_time'])){
				
				$this->last_update_time = $vals['last_update_time'];
			}
			
			
			if (isset($vals['package_received_time'])){
				
				$this->package_received_time = $vals['package_received_time'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['is_forbidden_delivery'])){
				
				$this->is_forbidden_delivery = $vals['is_forbidden_delivery'];
			}
			
			
			if (isset($vals['delivery_kpi_start_time'])){
				
				$this->delivery_kpi_start_time = $vals['delivery_kpi_start_time'];
			}
			
			
			if (isset($vals['is_store_delivery'])){
				
				$this->is_store_delivery = $vals['is_store_delivery'];
			}
			
			
			if (isset($vals['merged_code'])){
				
				$this->merged_code = $vals['merged_code'];
			}
			
			
			if (isset($vals['merged_sn'])){
				
				$this->merged_sn = $vals['merged_sn'];
			}
			
			
			if (isset($vals['is_pre_transport_no'])){
				
				$this->is_pre_transport_no = $vals['is_pre_transport_no'];
			}
			
			
			if (isset($vals['parent_order_sn'])){
				
				$this->parent_order_sn = $vals['parent_order_sn'];
			}
			
			
			if (isset($vals['old_order_sn'])){
				
				$this->old_order_sn = $vals['old_order_sn'];
			}
			
			
			if (isset($vals['forbidden_reason'])){
				
				$this->forbidden_reason = $vals['forbidden_reason'];
			}
			
			
			if (isset($vals['order_goods'])){
				
				$this->order_goods = $vals['order_goods'];
			}
			
			
			if (isset($vals['is_province_dw_order'])){
				
				$this->is_province_dw_order = $vals['is_province_dw_order'];
			}
			
			
			if (isset($vals['is_customize_goods'])){
				
				$this->is_customize_goods = $vals['is_customize_goods'];
			}
			
			
			if (isset($vals['regular_delivery'])){
				
				$this->regular_delivery = $vals['regular_delivery'];
			}
			
			
			if (isset($vals['regular_delivery_total'])){
				
				$this->regular_delivery_total = $vals['regular_delivery_total'];
			}
			
			
			if (isset($vals['regular_delivery_period'])){
				
				$this->regular_delivery_period = $vals['regular_delivery_period'];
			}
			
			
			if (isset($vals['plan_delivery_time'])){
				
				$this->plan_delivery_time = $vals['plan_delivery_time'];
			}
			
			
			if (isset($vals['is_vendor_logistics'])){
				
				$this->is_vendor_logistics = $vals['is_vendor_logistics'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'JitxOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse);
				
			}
			
			
			
			
			if ("add_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->add_time);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("buyer_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_address);
				
			}
			
			
			
			
			if ("buyer_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_mobile);
				
			}
			
			
			
			
			if ("buyer_tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_tel);
				
			}
			
			
			
			
			if ("buyer_postcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_postcode);
				
			}
			
			
			
			
			if ("buyer_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_city);
				
			}
			
			
			
			
			if ("buyer_province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_province);
				
			}
			
			
			
			
			if ("buyer_county" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_county);
				
			}
			
			
			
			
			if ("buyer_country_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_country_id);
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_type);
				
			}
			
			
			
			
			if ("cod_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cod_type);
				
			}
			
			
			
			
			if ("cod_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cod_money);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("transport_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_time);
				
			}
			
			
			
			
			if ("transport_day" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_day);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("last_update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->last_update_time);
				
			}
			
			
			
			
			if ("package_received_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_received_time);
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->order_type); 
				
			}
			
			
			
			
			if ("is_forbidden_delivery" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_forbidden_delivery); 
				
			}
			
			
			
			
			if ("delivery_kpi_start_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_kpi_start_time);
				
			}
			
			
			
			
			if ("is_store_delivery" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_store_delivery); 
				
			}
			
			
			
			
			if ("merged_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merged_code);
				
			}
			
			
			
			
			if ("merged_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merged_sn);
				
			}
			
			
			
			
			if ("is_pre_transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_pre_transport_no);
				
			}
			
			
			
			
			if ("parent_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parent_order_sn);
				
			}
			
			
			
			
			if ("old_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->old_order_sn);
				
			}
			
			
			
			
			if ("forbidden_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->forbidden_reason);
				
			}
			
			
			
			
			if ("order_goods" == $schemeField){
				
				$needSkip = false;
				
				$this->order_goods = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\order\jit\service\JitXOrderInfo\JitxOrderGood();
						$elem0->read($input);
						
						$this->order_goods[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("is_province_dw_order" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_province_dw_order); 
				
			}
			
			
			
			
			if ("is_customize_goods" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_customize_goods); 
				
			}
			
			
			
			
			if ("regular_delivery" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->regular_delivery); 
				
			}
			
			
			
			
			if ("regular_delivery_total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->regular_delivery_total); 
				
			}
			
			
			
			
			if ("regular_delivery_period" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->regular_delivery_period); 
				
			}
			
			
			
			
			if ("plan_delivery_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->plan_delivery_time);
				
			}
			
			
			
			
			if ("is_vendor_logistics" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_vendor_logistics); 
				
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
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse');
			$xfer += $output->writeString($this->delivery_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->add_time !== null) {
			
			$xfer += $output->writeFieldBegin('add_time');
			$xfer += $output->writeString($this->add_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_address !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_address');
			$xfer += $output->writeString($this->buyer_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_mobile !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_mobile');
			$xfer += $output->writeString($this->buyer_mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_tel !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_tel');
			$xfer += $output->writeString($this->buyer_tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_postcode !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_postcode');
			$xfer += $output->writeString($this->buyer_postcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_city !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_city');
			$xfer += $output->writeString($this->buyer_city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_province !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_province');
			$xfer += $output->writeString($this->buyer_province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_county !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_county');
			$xfer += $output->writeString($this->buyer_county);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_country_id !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_country_id');
			$xfer += $output->writeString($this->buyer_country_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_type !== null) {
			
			$xfer += $output->writeFieldBegin('pay_type');
			$xfer += $output->writeString($this->pay_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cod_type !== null) {
			
			$xfer += $output->writeFieldBegin('cod_type');
			$xfer += $output->writeString($this->cod_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cod_money !== null) {
			
			$xfer += $output->writeFieldBegin('cod_money');
			$xfer += $output->writeString($this->cod_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_time !== null) {
			
			$xfer += $output->writeFieldBegin('transport_time');
			$xfer += $output->writeString($this->transport_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_day !== null) {
			
			$xfer += $output->writeFieldBegin('transport_day');
			$xfer += $output->writeString($this->transport_day);
			
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
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_name');
			$xfer += $output->writeString($this->carrier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeString($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->last_update_time !== null) {
			
			$xfer += $output->writeFieldBegin('last_update_time');
			$xfer += $output->writeString($this->last_update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_received_time !== null) {
			
			$xfer += $output->writeFieldBegin('package_received_time');
			$xfer += $output->writeString($this->package_received_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_type !== null) {
			
			$xfer += $output->writeFieldBegin('order_type');
			$xfer += $output->writeI32($this->order_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_forbidden_delivery !== null) {
			
			$xfer += $output->writeFieldBegin('is_forbidden_delivery');
			$xfer += $output->writeI32($this->is_forbidden_delivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_kpi_start_time !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_kpi_start_time');
			$xfer += $output->writeString($this->delivery_kpi_start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_store_delivery !== null) {
			
			$xfer += $output->writeFieldBegin('is_store_delivery');
			$xfer += $output->writeI32($this->is_store_delivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merged_code !== null) {
			
			$xfer += $output->writeFieldBegin('merged_code');
			$xfer += $output->writeString($this->merged_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merged_sn !== null) {
			
			$xfer += $output->writeFieldBegin('merged_sn');
			$xfer += $output->writeString($this->merged_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_pre_transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('is_pre_transport_no');
			$xfer += $output->writeString($this->is_pre_transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parent_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('parent_order_sn');
			$xfer += $output->writeString($this->parent_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->old_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('old_order_sn');
			$xfer += $output->writeString($this->old_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->forbidden_reason !== null) {
			
			$xfer += $output->writeFieldBegin('forbidden_reason');
			$xfer += $output->writeString($this->forbidden_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_goods !== null) {
			
			$xfer += $output->writeFieldBegin('order_goods');
			
			if (!is_array($this->order_goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->order_goods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_province_dw_order !== null) {
			
			$xfer += $output->writeFieldBegin('is_province_dw_order');
			$xfer += $output->writeI32($this->is_province_dw_order);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_customize_goods !== null) {
			
			$xfer += $output->writeFieldBegin('is_customize_goods');
			$xfer += $output->writeByte($this->is_customize_goods);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->regular_delivery !== null) {
			
			$xfer += $output->writeFieldBegin('regular_delivery');
			$xfer += $output->writeByte($this->regular_delivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->regular_delivery_total !== null) {
			
			$xfer += $output->writeFieldBegin('regular_delivery_total');
			$xfer += $output->writeI32($this->regular_delivery_total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->regular_delivery_period !== null) {
			
			$xfer += $output->writeFieldBegin('regular_delivery_period');
			$xfer += $output->writeI32($this->regular_delivery_period);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->plan_delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('plan_delivery_time');
			$xfer += $output->writeString($this->plan_delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_vendor_logistics !== null) {
			
			$xfer += $output->writeFieldBegin('is_vendor_logistics');
			$xfer += $output->writeByte($this->is_vendor_logistics);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>