<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class ReturnedOrderModel {
	
	static $_TSPEC;
	public $order_sn = null;
	public $order_status = null;
	public $platform_order_sn = null;
	public $vendor_id = null;
	public $special_return = null;
	public $appointment_time = null;
	public $pay_type = null;
	public $freight = null;
	public $return_type = null;
	public $relation_order_sn = null;
	public $create_time = null;
	public $update_time = null;
	public $sender_name = null;
	public $sender_mobile = null;
	public $sender_tel = null;
	public $sender_province = null;
	public $sender_city = null;
	public $sender_region = null;
	public $sender_town = null;
	public $sender_address = null;
	public $receiver_name = null;
	public $receiver_mobile = null;
	public $receiver_tel = null;
	public $receiver_province = null;
	public $receiver_city = null;
	public $receiver_region = null;
	public $receiver_town = null;
	public $receiver_address = null;
	public $returned_task_goods = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'order_status'
			),
			3 => array(
			'var' => 'platform_order_sn'
			),
			4 => array(
			'var' => 'vendor_id'
			),
			5 => array(
			'var' => 'special_return'
			),
			6 => array(
			'var' => 'appointment_time'
			),
			7 => array(
			'var' => 'pay_type'
			),
			8 => array(
			'var' => 'freight'
			),
			9 => array(
			'var' => 'return_type'
			),
			10 => array(
			'var' => 'relation_order_sn'
			),
			11 => array(
			'var' => 'create_time'
			),
			12 => array(
			'var' => 'update_time'
			),
			13 => array(
			'var' => 'sender_name'
			),
			14 => array(
			'var' => 'sender_mobile'
			),
			15 => array(
			'var' => 'sender_tel'
			),
			16 => array(
			'var' => 'sender_province'
			),
			17 => array(
			'var' => 'sender_city'
			),
			18 => array(
			'var' => 'sender_region'
			),
			19 => array(
			'var' => 'sender_town'
			),
			20 => array(
			'var' => 'sender_address'
			),
			21 => array(
			'var' => 'receiver_name'
			),
			22 => array(
			'var' => 'receiver_mobile'
			),
			23 => array(
			'var' => 'receiver_tel'
			),
			24 => array(
			'var' => 'receiver_province'
			),
			25 => array(
			'var' => 'receiver_city'
			),
			26 => array(
			'var' => 'receiver_region'
			),
			27 => array(
			'var' => 'receiver_town'
			),
			28 => array(
			'var' => 'receiver_address'
			),
			29 => array(
			'var' => 'returned_task_goods'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['platform_order_sn'])){
				
				$this->platform_order_sn = $vals['platform_order_sn'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['special_return'])){
				
				$this->special_return = $vals['special_return'];
			}
			
			
			if (isset($vals['appointment_time'])){
				
				$this->appointment_time = $vals['appointment_time'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
			}
			
			
			if (isset($vals['freight'])){
				
				$this->freight = $vals['freight'];
			}
			
			
			if (isset($vals['return_type'])){
				
				$this->return_type = $vals['return_type'];
			}
			
			
			if (isset($vals['relation_order_sn'])){
				
				$this->relation_order_sn = $vals['relation_order_sn'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['sender_name'])){
				
				$this->sender_name = $vals['sender_name'];
			}
			
			
			if (isset($vals['sender_mobile'])){
				
				$this->sender_mobile = $vals['sender_mobile'];
			}
			
			
			if (isset($vals['sender_tel'])){
				
				$this->sender_tel = $vals['sender_tel'];
			}
			
			
			if (isset($vals['sender_province'])){
				
				$this->sender_province = $vals['sender_province'];
			}
			
			
			if (isset($vals['sender_city'])){
				
				$this->sender_city = $vals['sender_city'];
			}
			
			
			if (isset($vals['sender_region'])){
				
				$this->sender_region = $vals['sender_region'];
			}
			
			
			if (isset($vals['sender_town'])){
				
				$this->sender_town = $vals['sender_town'];
			}
			
			
			if (isset($vals['sender_address'])){
				
				$this->sender_address = $vals['sender_address'];
			}
			
			
			if (isset($vals['receiver_name'])){
				
				$this->receiver_name = $vals['receiver_name'];
			}
			
			
			if (isset($vals['receiver_mobile'])){
				
				$this->receiver_mobile = $vals['receiver_mobile'];
			}
			
			
			if (isset($vals['receiver_tel'])){
				
				$this->receiver_tel = $vals['receiver_tel'];
			}
			
			
			if (isset($vals['receiver_province'])){
				
				$this->receiver_province = $vals['receiver_province'];
			}
			
			
			if (isset($vals['receiver_city'])){
				
				$this->receiver_city = $vals['receiver_city'];
			}
			
			
			if (isset($vals['receiver_region'])){
				
				$this->receiver_region = $vals['receiver_region'];
			}
			
			
			if (isset($vals['receiver_town'])){
				
				$this->receiver_town = $vals['receiver_town'];
			}
			
			
			if (isset($vals['receiver_address'])){
				
				$this->receiver_address = $vals['receiver_address'];
			}
			
			
			if (isset($vals['returned_task_goods'])){
				
				$this->returned_task_goods = $vals['returned_task_goods'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnedOrderModel';
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
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("platform_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->platform_order_sn);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_id);
				
			}
			
			
			
			
			if ("special_return" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->special_return); 
				
			}
			
			
			
			
			if ("appointment_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appointment_time);
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pay_type); 
				
			}
			
			
			
			
			if ("freight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->freight);
				
			}
			
			
			
			
			if ("return_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->return_type); 
				
			}
			
			
			
			
			if ("relation_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->relation_order_sn);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time); 
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time); 
				
			}
			
			
			
			
			if ("sender_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_name);
				
			}
			
			
			
			
			if ("sender_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_mobile);
				
			}
			
			
			
			
			if ("sender_tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_tel);
				
			}
			
			
			
			
			if ("sender_province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_province);
				
			}
			
			
			
			
			if ("sender_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_city);
				
			}
			
			
			
			
			if ("sender_region" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_region);
				
			}
			
			
			
			
			if ("sender_town" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_town);
				
			}
			
			
			
			
			if ("sender_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_address);
				
			}
			
			
			
			
			if ("receiver_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_name);
				
			}
			
			
			
			
			if ("receiver_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_mobile);
				
			}
			
			
			
			
			if ("receiver_tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_tel);
				
			}
			
			
			
			
			if ("receiver_province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_province);
				
			}
			
			
			
			
			if ("receiver_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_city);
				
			}
			
			
			
			
			if ("receiver_region" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_region);
				
			}
			
			
			
			
			if ("receiver_town" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_town);
				
			}
			
			
			
			
			if ("receiver_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_address);
				
			}
			
			
			
			
			if ("returned_task_goods" == $schemeField){
				
				$needSkip = false;
				
				$this->returned_task_goods = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\tpc\api\model\ReturnedGoodsModel();
						$elem0->read($input);
						
						$this->returned_task_goods[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_status');
		$xfer += $output->writeString($this->order_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('platform_order_sn');
		$xfer += $output->writeString($this->platform_order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('special_return');
		$xfer += $output->writeI32($this->special_return);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->appointment_time !== null) {
			
			$xfer += $output->writeFieldBegin('appointment_time');
			$xfer += $output->writeString($this->appointment_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pay_type');
		$xfer += $output->writeI32($this->pay_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('freight');
		$xfer += $output->writeString($this->freight);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_type');
		$xfer += $output->writeI32($this->return_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->relation_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('relation_order_sn');
			$xfer += $output->writeString($this->relation_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('create_time');
		$xfer += $output->writeI64($this->create_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('update_time');
		$xfer += $output->writeI64($this->update_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sender_name');
		$xfer += $output->writeString($this->sender_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sender_mobile');
		$xfer += $output->writeString($this->sender_mobile);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sender_tel');
		$xfer += $output->writeString($this->sender_tel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sender_province');
		$xfer += $output->writeString($this->sender_province);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sender_city');
		$xfer += $output->writeString($this->sender_city);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sender_region');
		$xfer += $output->writeString($this->sender_region);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sender_town !== null) {
			
			$xfer += $output->writeFieldBegin('sender_town');
			$xfer += $output->writeString($this->sender_town);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('sender_address');
		$xfer += $output->writeString($this->sender_address);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->receiver_name !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_name');
			$xfer += $output->writeString($this->receiver_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_mobile !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_mobile');
			$xfer += $output->writeString($this->receiver_mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_tel !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_tel');
			$xfer += $output->writeString($this->receiver_tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_province !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_province');
			$xfer += $output->writeString($this->receiver_province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_city !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_city');
			$xfer += $output->writeString($this->receiver_city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_region !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_region');
			$xfer += $output->writeString($this->receiver_region);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_town !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_town');
			$xfer += $output->writeString($this->receiver_town);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_address !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_address');
			$xfer += $output->writeString($this->receiver_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returned_task_goods !== null) {
			
			$xfer += $output->writeFieldBegin('returned_task_goods');
			
			if (!is_array($this->returned_task_goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->returned_task_goods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>