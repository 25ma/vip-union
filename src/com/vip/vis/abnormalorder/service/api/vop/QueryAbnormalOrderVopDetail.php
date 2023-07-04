<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\abnormalorder\service\api\vop;

class QueryAbnormalOrderVopDetail {
	
	static $_TSPEC;
	public $abnormal_order_sn = null;
	public $id = null;
	public $status = null;
	public $status_name = null;
	public $type = null;
	public $type_name = null;
	public $delivery_warehouse = null;
	public $shop_code = null;
	public $reason = null;
	public $handle_time = null;
	public $lack_num = null;
	public $attach_name = null;
	public $remark = null;
	public $sys_remark = null;
	public $overtime_hour = null;
	public $order_sn = null;
	public $po = null;
	public $good_sn = null;
	public $good_name = null;
	public $amount = null;
	public $pick_no = null;
	public $lastest_delivery_time = null;
	public $wait_delivery_num = null;
	public $wait_out_delivery_no = null;
	public $warehouse = null;
	public $brand_name = null;
	public $transport_no = null;
	public $vis_create_time = null;
	public $vis_confirm = null;
	public $carrier_reply = null;
	public $warehouse_reply = null;
	public $warehouse_remark = null;
	public $carrier = null;
	public $create_time = null;
	public $update_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'abnormal_order_sn'
			),
			2 => array(
			'var' => 'id'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'status_name'
			),
			5 => array(
			'var' => 'type'
			),
			6 => array(
			'var' => 'type_name'
			),
			7 => array(
			'var' => 'delivery_warehouse'
			),
			8 => array(
			'var' => 'shop_code'
			),
			9 => array(
			'var' => 'reason'
			),
			10 => array(
			'var' => 'handle_time'
			),
			11 => array(
			'var' => 'lack_num'
			),
			12 => array(
			'var' => 'attach_name'
			),
			13 => array(
			'var' => 'remark'
			),
			14 => array(
			'var' => 'sys_remark'
			),
			15 => array(
			'var' => 'overtime_hour'
			),
			16 => array(
			'var' => 'order_sn'
			),
			17 => array(
			'var' => 'po'
			),
			18 => array(
			'var' => 'good_sn'
			),
			19 => array(
			'var' => 'good_name'
			),
			20 => array(
			'var' => 'amount'
			),
			21 => array(
			'var' => 'pick_no'
			),
			22 => array(
			'var' => 'lastest_delivery_time'
			),
			23 => array(
			'var' => 'wait_delivery_num'
			),
			24 => array(
			'var' => 'wait_out_delivery_no'
			),
			25 => array(
			'var' => 'warehouse'
			),
			26 => array(
			'var' => 'brand_name'
			),
			27 => array(
			'var' => 'transport_no'
			),
			28 => array(
			'var' => 'vis_create_time'
			),
			29 => array(
			'var' => 'vis_confirm'
			),
			30 => array(
			'var' => 'carrier_reply'
			),
			31 => array(
			'var' => 'warehouse_reply'
			),
			32 => array(
			'var' => 'warehouse_remark'
			),
			33 => array(
			'var' => 'carrier'
			),
			34 => array(
			'var' => 'create_time'
			),
			35 => array(
			'var' => 'update_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['abnormal_order_sn'])){
				
				$this->abnormal_order_sn = $vals['abnormal_order_sn'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['status_name'])){
				
				$this->status_name = $vals['status_name'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['type_name'])){
				
				$this->type_name = $vals['type_name'];
			}
			
			
			if (isset($vals['delivery_warehouse'])){
				
				$this->delivery_warehouse = $vals['delivery_warehouse'];
			}
			
			
			if (isset($vals['shop_code'])){
				
				$this->shop_code = $vals['shop_code'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
			if (isset($vals['handle_time'])){
				
				$this->handle_time = $vals['handle_time'];
			}
			
			
			if (isset($vals['lack_num'])){
				
				$this->lack_num = $vals['lack_num'];
			}
			
			
			if (isset($vals['attach_name'])){
				
				$this->attach_name = $vals['attach_name'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['sys_remark'])){
				
				$this->sys_remark = $vals['sys_remark'];
			}
			
			
			if (isset($vals['overtime_hour'])){
				
				$this->overtime_hour = $vals['overtime_hour'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['good_sn'])){
				
				$this->good_sn = $vals['good_sn'];
			}
			
			
			if (isset($vals['good_name'])){
				
				$this->good_name = $vals['good_name'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['pick_no'])){
				
				$this->pick_no = $vals['pick_no'];
			}
			
			
			if (isset($vals['lastest_delivery_time'])){
				
				$this->lastest_delivery_time = $vals['lastest_delivery_time'];
			}
			
			
			if (isset($vals['wait_delivery_num'])){
				
				$this->wait_delivery_num = $vals['wait_delivery_num'];
			}
			
			
			if (isset($vals['wait_out_delivery_no'])){
				
				$this->wait_out_delivery_no = $vals['wait_out_delivery_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['vis_create_time'])){
				
				$this->vis_create_time = $vals['vis_create_time'];
			}
			
			
			if (isset($vals['vis_confirm'])){
				
				$this->vis_confirm = $vals['vis_confirm'];
			}
			
			
			if (isset($vals['carrier_reply'])){
				
				$this->carrier_reply = $vals['carrier_reply'];
			}
			
			
			if (isset($vals['warehouse_reply'])){
				
				$this->warehouse_reply = $vals['warehouse_reply'];
			}
			
			
			if (isset($vals['warehouse_remark'])){
				
				$this->warehouse_remark = $vals['warehouse_remark'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryAbnormalOrderVopDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("abnormal_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->abnormal_order_sn);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("status_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status_name);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("type_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type_name);
				
			}
			
			
			
			
			if ("delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse);
				
			}
			
			
			
			
			if ("shop_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shop_code);
				
			}
			
			
			
			
			if ("reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason);
				
			}
			
			
			
			
			if ("handle_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->handle_time);
				
			}
			
			
			
			
			if ("lack_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->lack_num); 
				
			}
			
			
			
			
			if ("attach_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attach_name);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("sys_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sys_remark);
				
			}
			
			
			
			
			if ("overtime_hour" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->overtime_hour); 
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("good_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->good_sn);
				
			}
			
			
			
			
			if ("good_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->good_name);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("pick_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pick_no);
				
			}
			
			
			
			
			if ("lastest_delivery_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lastest_delivery_time);
				
			}
			
			
			
			
			if ("wait_delivery_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->wait_delivery_num); 
				
			}
			
			
			
			
			if ("wait_out_delivery_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wait_out_delivery_no);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("vis_create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vis_create_time);
				
			}
			
			
			
			
			if ("vis_confirm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vis_confirm);
				
			}
			
			
			
			
			if ("carrier_reply" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_reply);
				
			}
			
			
			
			
			if ("warehouse_reply" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_reply);
				
			}
			
			
			
			
			if ("warehouse_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_remark);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_time);
				
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
		
		if($this->abnormal_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('abnormal_order_sn');
			$xfer += $output->writeString($this->abnormal_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status_name !== null) {
			
			$xfer += $output->writeFieldBegin('status_name');
			$xfer += $output->writeString($this->status_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type_name !== null) {
			
			$xfer += $output->writeFieldBegin('type_name');
			$xfer += $output->writeString($this->type_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse');
			$xfer += $output->writeString($this->delivery_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shop_code !== null) {
			
			$xfer += $output->writeFieldBegin('shop_code');
			$xfer += $output->writeString($this->shop_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reason !== null) {
			
			$xfer += $output->writeFieldBegin('reason');
			$xfer += $output->writeString($this->reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->handle_time !== null) {
			
			$xfer += $output->writeFieldBegin('handle_time');
			$xfer += $output->writeString($this->handle_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lack_num !== null) {
			
			$xfer += $output->writeFieldBegin('lack_num');
			$xfer += $output->writeI32($this->lack_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attach_name !== null) {
			
			$xfer += $output->writeFieldBegin('attach_name');
			$xfer += $output->writeString($this->attach_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sys_remark !== null) {
			
			$xfer += $output->writeFieldBegin('sys_remark');
			$xfer += $output->writeString($this->sys_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->overtime_hour !== null) {
			
			$xfer += $output->writeFieldBegin('overtime_hour');
			$xfer += $output->writeI32($this->overtime_hour);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->good_sn !== null) {
			
			$xfer += $output->writeFieldBegin('good_sn');
			$xfer += $output->writeString($this->good_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->good_name !== null) {
			
			$xfer += $output->writeFieldBegin('good_name');
			$xfer += $output->writeString($this->good_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pick_no !== null) {
			
			$xfer += $output->writeFieldBegin('pick_no');
			$xfer += $output->writeString($this->pick_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastest_delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('lastest_delivery_time');
			$xfer += $output->writeString($this->lastest_delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wait_delivery_num !== null) {
			
			$xfer += $output->writeFieldBegin('wait_delivery_num');
			$xfer += $output->writeI32($this->wait_delivery_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wait_out_delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('wait_out_delivery_no');
			$xfer += $output->writeString($this->wait_out_delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vis_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('vis_create_time');
			$xfer += $output->writeString($this->vis_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vis_confirm !== null) {
			
			$xfer += $output->writeFieldBegin('vis_confirm');
			$xfer += $output->writeString($this->vis_confirm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_reply !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_reply');
			$xfer += $output->writeString($this->carrier_reply);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_reply !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_reply');
			$xfer += $output->writeString($this->warehouse_reply);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_remark !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_remark');
			$xfer += $output->writeString($this->warehouse_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeString($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>