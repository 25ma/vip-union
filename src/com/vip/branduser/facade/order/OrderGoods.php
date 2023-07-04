<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\branduser\facade\order;

class OrderGoods {
	
	static $_TSPEC;
	public $order_sn = null;
	public $open_id = null;
	public $bar_code = null;
	public $unit_price = null;
	public $num = null;
	public $order_goods_state = null;
	public $order_goods_state_time = null;
	public $order_goods_real_amount = null;
	public $order_date = null;
	public $order_goods_unique_id = null;
	public $order_goods_carriage = null;
	public $goods_name = null;
	public $refund_order_sn = null;
	public $gift_flag = null;
	public $consume_point = null;
	public $point_id = null;
	public $order_payment_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'open_id'
			),
			3 => array(
			'var' => 'bar_code'
			),
			4 => array(
			'var' => 'unit_price'
			),
			5 => array(
			'var' => 'num'
			),
			6 => array(
			'var' => 'order_goods_state'
			),
			7 => array(
			'var' => 'order_goods_state_time'
			),
			8 => array(
			'var' => 'order_goods_real_amount'
			),
			9 => array(
			'var' => 'order_date'
			),
			10 => array(
			'var' => 'order_goods_unique_id'
			),
			11 => array(
			'var' => 'order_goods_carriage'
			),
			12 => array(
			'var' => 'goods_name'
			),
			13 => array(
			'var' => 'refund_order_sn'
			),
			14 => array(
			'var' => 'gift_flag'
			),
			15 => array(
			'var' => 'consume_point'
			),
			16 => array(
			'var' => 'point_id'
			),
			17 => array(
			'var' => 'order_payment_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['open_id'])){
				
				$this->open_id = $vals['open_id'];
			}
			
			
			if (isset($vals['bar_code'])){
				
				$this->bar_code = $vals['bar_code'];
			}
			
			
			if (isset($vals['unit_price'])){
				
				$this->unit_price = $vals['unit_price'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['order_goods_state'])){
				
				$this->order_goods_state = $vals['order_goods_state'];
			}
			
			
			if (isset($vals['order_goods_state_time'])){
				
				$this->order_goods_state_time = $vals['order_goods_state_time'];
			}
			
			
			if (isset($vals['order_goods_real_amount'])){
				
				$this->order_goods_real_amount = $vals['order_goods_real_amount'];
			}
			
			
			if (isset($vals['order_date'])){
				
				$this->order_date = $vals['order_date'];
			}
			
			
			if (isset($vals['order_goods_unique_id'])){
				
				$this->order_goods_unique_id = $vals['order_goods_unique_id'];
			}
			
			
			if (isset($vals['order_goods_carriage'])){
				
				$this->order_goods_carriage = $vals['order_goods_carriage'];
			}
			
			
			if (isset($vals['goods_name'])){
				
				$this->goods_name = $vals['goods_name'];
			}
			
			
			if (isset($vals['refund_order_sn'])){
				
				$this->refund_order_sn = $vals['refund_order_sn'];
			}
			
			
			if (isset($vals['gift_flag'])){
				
				$this->gift_flag = $vals['gift_flag'];
			}
			
			
			if (isset($vals['consume_point'])){
				
				$this->consume_point = $vals['consume_point'];
			}
			
			
			if (isset($vals['point_id'])){
				
				$this->point_id = $vals['point_id'];
			}
			
			
			if (isset($vals['order_payment_time'])){
				
				$this->order_payment_time = $vals['order_payment_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderGoods';
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
			
			
			
			
			if ("open_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->open_id);
				
			}
			
			
			
			
			if ("bar_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bar_code);
				
			}
			
			
			
			
			if ("unit_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit_price);
				
			}
			
			
			
			
			if ("num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->num); 
				
			}
			
			
			
			
			if ("order_goods_state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_goods_state);
				
			}
			
			
			
			
			if ("order_goods_state_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_goods_state_time);
				
			}
			
			
			
			
			if ("order_goods_real_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_goods_real_amount);
				
			}
			
			
			
			
			if ("order_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_date);
				
			}
			
			
			
			
			if ("order_goods_unique_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_goods_unique_id);
				
			}
			
			
			
			
			if ("order_goods_carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_goods_carriage);
				
			}
			
			
			
			
			if ("goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_name);
				
			}
			
			
			
			
			if ("refund_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refund_order_sn);
				
			}
			
			
			
			
			if ("gift_flag" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->gift_flag);
				
			}
			
			
			
			
			if ("consume_point" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consume_point);
				
			}
			
			
			
			
			if ("point_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->point_id);
				
			}
			
			
			
			
			if ("order_payment_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_payment_time);
				
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
		
		$xfer += $output->writeFieldBegin('open_id');
		$xfer += $output->writeString($this->open_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bar_code');
		$xfer += $output->writeString($this->bar_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('unit_price');
		$xfer += $output->writeString($this->unit_price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('num');
		$xfer += $output->writeI32($this->num);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_goods_state');
		$xfer += $output->writeString($this->order_goods_state);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_goods_state_time');
		$xfer += $output->writeString($this->order_goods_state_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_goods_real_amount');
		$xfer += $output->writeString($this->order_goods_real_amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_date');
		$xfer += $output->writeString($this->order_date);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_goods_unique_id');
		$xfer += $output->writeString($this->order_goods_unique_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_goods_carriage');
		$xfer += $output->writeString($this->order_goods_carriage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_name');
		$xfer += $output->writeString($this->goods_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->refund_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('refund_order_sn');
			$xfer += $output->writeString($this->refund_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gift_flag !== null) {
			
			$xfer += $output->writeFieldBegin('gift_flag');
			$xfer += $output->writeBool($this->gift_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consume_point !== null) {
			
			$xfer += $output->writeFieldBegin('consume_point');
			$xfer += $output->writeString($this->consume_point);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->point_id !== null) {
			
			$xfer += $output->writeFieldBegin('point_id');
			$xfer += $output->writeString($this->point_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_payment_time !== null) {
			
			$xfer += $output->writeFieldBegin('order_payment_time');
			$xfer += $output->writeString($this->order_payment_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>