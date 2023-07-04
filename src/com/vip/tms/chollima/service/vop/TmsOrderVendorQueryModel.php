<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\chollima\service\vop;

class TmsOrderVendorQueryModel {
	
	static $_TSPEC;
	public $tms_order_no = null;
	public $order_type = null;
	public $order_status = null;
	public $vendor_code = null;
	public $vendor_name = null;
	public $vendor_order_no = null;
	public $delivery_node_code_from = null;
	public $delivery_node_code_to = null;
	public $add_time = null;
	public $merchandise_qty = null;
	public $route_transportation_type = null;
	public $box_qty = null;
	public $actual_weight = null;
	public $volume = null;
	public $commodity_brand = null;
	public $commodity_type = null;
	public $pay_type = null;
	public $cod_price = null;
	public $cycle_box_num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tms_order_no'
			),
			2 => array(
			'var' => 'order_type'
			),
			3 => array(
			'var' => 'order_status'
			),
			4 => array(
			'var' => 'vendor_code'
			),
			5 => array(
			'var' => 'vendor_name'
			),
			6 => array(
			'var' => 'vendor_order_no'
			),
			7 => array(
			'var' => 'delivery_node_code_from'
			),
			8 => array(
			'var' => 'delivery_node_code_to'
			),
			9 => array(
			'var' => 'add_time'
			),
			10 => array(
			'var' => 'merchandise_qty'
			),
			11 => array(
			'var' => 'route_transportation_type'
			),
			12 => array(
			'var' => 'box_qty'
			),
			13 => array(
			'var' => 'actual_weight'
			),
			14 => array(
			'var' => 'volume'
			),
			15 => array(
			'var' => 'commodity_brand'
			),
			16 => array(
			'var' => 'commodity_type'
			),
			17 => array(
			'var' => 'pay_type'
			),
			18 => array(
			'var' => 'cod_price'
			),
			19 => array(
			'var' => 'cycle_box_num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tms_order_no'])){
				
				$this->tms_order_no = $vals['tms_order_no'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['vendor_order_no'])){
				
				$this->vendor_order_no = $vals['vendor_order_no'];
			}
			
			
			if (isset($vals['delivery_node_code_from'])){
				
				$this->delivery_node_code_from = $vals['delivery_node_code_from'];
			}
			
			
			if (isset($vals['delivery_node_code_to'])){
				
				$this->delivery_node_code_to = $vals['delivery_node_code_to'];
			}
			
			
			if (isset($vals['add_time'])){
				
				$this->add_time = $vals['add_time'];
			}
			
			
			if (isset($vals['merchandise_qty'])){
				
				$this->merchandise_qty = $vals['merchandise_qty'];
			}
			
			
			if (isset($vals['route_transportation_type'])){
				
				$this->route_transportation_type = $vals['route_transportation_type'];
			}
			
			
			if (isset($vals['box_qty'])){
				
				$this->box_qty = $vals['box_qty'];
			}
			
			
			if (isset($vals['actual_weight'])){
				
				$this->actual_weight = $vals['actual_weight'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['commodity_brand'])){
				
				$this->commodity_brand = $vals['commodity_brand'];
			}
			
			
			if (isset($vals['commodity_type'])){
				
				$this->commodity_type = $vals['commodity_type'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
			}
			
			
			if (isset($vals['cod_price'])){
				
				$this->cod_price = $vals['cod_price'];
			}
			
			
			if (isset($vals['cycle_box_num'])){
				
				$this->cycle_box_num = $vals['cycle_box_num'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsOrderVendorQueryModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tms_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tms_order_no);
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_type);
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("vendor_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_order_no);
				
			}
			
			
			
			
			if ("delivery_node_code_from" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_node_code_from);
				
			}
			
			
			
			
			if ("delivery_node_code_to" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_node_code_to);
				
			}
			
			
			
			
			if ("add_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->add_time);
				
			}
			
			
			
			
			if ("merchandise_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->merchandise_qty); 
				
			}
			
			
			
			
			if ("route_transportation_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->route_transportation_type); 
				
			}
			
			
			
			
			if ("box_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->box_qty); 
				
			}
			
			
			
			
			if ("actual_weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actual_weight);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->volume);
				
			}
			
			
			
			
			if ("commodity_brand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commodity_brand);
				
			}
			
			
			
			
			if ("commodity_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commodity_type);
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->pay_type); 
				
			}
			
			
			
			
			if ("cod_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->cod_price);
				
			}
			
			
			
			
			if ("cycle_box_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cycle_box_num); 
				
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
		
		if($this->tms_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('tms_order_no');
			$xfer += $output->writeString($this->tms_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_type !== null) {
			
			$xfer += $output->writeFieldBegin('order_type');
			$xfer += $output->writeString($this->order_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeString($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_name');
			$xfer += $output->writeString($this->vendor_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_order_no');
			$xfer += $output->writeString($this->vendor_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_node_code_from !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_node_code_from');
			$xfer += $output->writeString($this->delivery_node_code_from);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_node_code_to !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_node_code_to');
			$xfer += $output->writeString($this->delivery_node_code_to);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->add_time !== null) {
			
			$xfer += $output->writeFieldBegin('add_time');
			$xfer += $output->writeI64($this->add_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merchandise_qty !== null) {
			
			$xfer += $output->writeFieldBegin('merchandise_qty');
			$xfer += $output->writeI32($this->merchandise_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->route_transportation_type !== null) {
			
			$xfer += $output->writeFieldBegin('route_transportation_type');
			$xfer += $output->writeI32($this->route_transportation_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->box_qty !== null) {
			
			$xfer += $output->writeFieldBegin('box_qty');
			$xfer += $output->writeI32($this->box_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actual_weight !== null) {
			
			$xfer += $output->writeFieldBegin('actual_weight');
			$xfer += $output->writeDouble($this->actual_weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volume !== null) {
			
			$xfer += $output->writeFieldBegin('volume');
			$xfer += $output->writeDouble($this->volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commodity_brand !== null) {
			
			$xfer += $output->writeFieldBegin('commodity_brand');
			$xfer += $output->writeString($this->commodity_brand);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commodity_type !== null) {
			
			$xfer += $output->writeFieldBegin('commodity_type');
			$xfer += $output->writeString($this->commodity_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_type !== null) {
			
			$xfer += $output->writeFieldBegin('pay_type');
			$xfer += $output->writeByte($this->pay_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cod_price !== null) {
			
			$xfer += $output->writeFieldBegin('cod_price');
			$xfer += $output->writeDouble($this->cod_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cycle_box_num !== null) {
			
			$xfer += $output->writeFieldBegin('cycle_box_num');
			$xfer += $output->writeI32($this->cycle_box_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>