<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\pg;

class BrandOrder {
	
	static $_TSPEC;
	public $root_order_sn = null;
	public $order_sn = null;
	public $open_id = null;
	public $create_time = null;
	public $sign_time = null;
	public $pay_time = null;
	public $order_source = null;
	public $order_status = null;
	public $order_type = null;
	public $transportation_fee = null;
	public $goods = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'root_order_sn'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'open_id'
			),
			4 => array(
			'var' => 'create_time'
			),
			5 => array(
			'var' => 'sign_time'
			),
			6 => array(
			'var' => 'pay_time'
			),
			7 => array(
			'var' => 'order_source'
			),
			8 => array(
			'var' => 'order_status'
			),
			9 => array(
			'var' => 'order_type'
			),
			10 => array(
			'var' => 'transportation_fee'
			),
			11 => array(
			'var' => 'goods'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['root_order_sn'])){
				
				$this->root_order_sn = $vals['root_order_sn'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['open_id'])){
				
				$this->open_id = $vals['open_id'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['sign_time'])){
				
				$this->sign_time = $vals['sign_time'];
			}
			
			
			if (isset($vals['pay_time'])){
				
				$this->pay_time = $vals['pay_time'];
			}
			
			
			if (isset($vals['order_source'])){
				
				$this->order_source = $vals['order_source'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['transportation_fee'])){
				
				$this->transportation_fee = $vals['transportation_fee'];
			}
			
			
			if (isset($vals['goods'])){
				
				$this->goods = $vals['goods'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("root_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->root_order_sn);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("open_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->open_id);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time); 
				
			}
			
			
			
			
			if ("sign_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sign_time); 
				
			}
			
			
			
			
			if ("pay_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->pay_time); 
				
			}
			
			
			
			
			if ("order_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_source);
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->order_status); 
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->order_type); 
				
			}
			
			
			
			
			if ("transportation_fee" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->transportation_fee);
				
			}
			
			
			
			
			if ("goods" == $schemeField){
				
				$needSkip = false;
				
				$this->goods = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\pg\BrandOrderGoods();
						$elem0->read($input);
						
						$this->goods[$_size0++] = $elem0;
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
		
		if($this->root_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('root_order_sn');
			$xfer += $output->writeString($this->root_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->open_id !== null) {
			
			$xfer += $output->writeFieldBegin('open_id');
			$xfer += $output->writeString($this->open_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sign_time !== null) {
			
			$xfer += $output->writeFieldBegin('sign_time');
			$xfer += $output->writeI64($this->sign_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_time !== null) {
			
			$xfer += $output->writeFieldBegin('pay_time');
			$xfer += $output->writeI64($this->pay_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_source !== null) {
			
			$xfer += $output->writeFieldBegin('order_source');
			$xfer += $output->writeString($this->order_source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeI32($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_type !== null) {
			
			$xfer += $output->writeFieldBegin('order_type');
			$xfer += $output->writeI32($this->order_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportation_fee !== null) {
			
			$xfer += $output->writeFieldBegin('transportation_fee');
			$xfer += $output->writeDouble($this->transportation_fee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods !== null) {
			
			$xfer += $output->writeFieldBegin('goods');
			
			if (!is_array($this->goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods as $iter0){
				
				
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