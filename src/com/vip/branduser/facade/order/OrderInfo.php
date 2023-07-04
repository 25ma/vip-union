<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\branduser\facade\order;

class OrderInfo {
	
	static $_TSPEC;
	public $order_sn = null;
	public $brand_identify = null;
	public $goods_category_count = null;
	public $order_goods_total_amount = null;
	public $order_goods_state = null;
	public $order_goods_list = null;
	public $parent_order_sn = null;
	public $parent_order_info = null;
	public $second_encrypt_flag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'brand_identify'
			),
			3 => array(
			'var' => 'goods_category_count'
			),
			4 => array(
			'var' => 'order_goods_total_amount'
			),
			5 => array(
			'var' => 'order_goods_state'
			),
			6 => array(
			'var' => 'order_goods_list'
			),
			7 => array(
			'var' => 'parent_order_sn'
			),
			8 => array(
			'var' => 'parent_order_info'
			),
			9 => array(
			'var' => 'second_encrypt_flag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['brand_identify'])){
				
				$this->brand_identify = $vals['brand_identify'];
			}
			
			
			if (isset($vals['goods_category_count'])){
				
				$this->goods_category_count = $vals['goods_category_count'];
			}
			
			
			if (isset($vals['order_goods_total_amount'])){
				
				$this->order_goods_total_amount = $vals['order_goods_total_amount'];
			}
			
			
			if (isset($vals['order_goods_state'])){
				
				$this->order_goods_state = $vals['order_goods_state'];
			}
			
			
			if (isset($vals['order_goods_list'])){
				
				$this->order_goods_list = $vals['order_goods_list'];
			}
			
			
			if (isset($vals['parent_order_sn'])){
				
				$this->parent_order_sn = $vals['parent_order_sn'];
			}
			
			
			if (isset($vals['parent_order_info'])){
				
				$this->parent_order_info = $vals['parent_order_info'];
			}
			
			
			if (isset($vals['second_encrypt_flag'])){
				
				$this->second_encrypt_flag = $vals['second_encrypt_flag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderInfo';
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
			
			
			
			
			if ("brand_identify" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_identify);
				
			}
			
			
			
			
			if ("goods_category_count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goods_category_count); 
				
			}
			
			
			
			
			if ("order_goods_total_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_goods_total_amount);
				
			}
			
			
			
			
			if ("order_goods_state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_goods_state);
				
			}
			
			
			
			
			if ("order_goods_list" == $schemeField){
				
				$needSkip = false;
				
				$this->order_goods_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\branduser\facade\order\OrderGoods();
						$elem0->read($input);
						
						$this->order_goods_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("parent_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parent_order_sn);
				
			}
			
			
			
			
			if ("parent_order_info" == $schemeField){
				
				$needSkip = false;
				
				$this->parent_order_info = new \com\vip\branduser\facade\order\ParentOrderInfo();
				$this->parent_order_info->read($input);
				
			}
			
			
			
			
			if ("second_encrypt_flag" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->second_encrypt_flag);
				
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
		
		$xfer += $output->writeFieldBegin('brand_identify');
		$xfer += $output->writeString($this->brand_identify);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_category_count');
		$xfer += $output->writeI32($this->goods_category_count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_goods_total_amount');
		$xfer += $output->writeString($this->order_goods_total_amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_goods_state');
		$xfer += $output->writeString($this->order_goods_state);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_goods_list');
		
		if (!is_array($this->order_goods_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_goods_list as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->parent_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('parent_order_sn');
			$xfer += $output->writeString($this->parent_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parent_order_info !== null) {
			
			$xfer += $output->writeFieldBegin('parent_order_info');
			
			if (!is_object($this->parent_order_info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->parent_order_info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('second_encrypt_flag');
		$xfer += $output->writeBool($this->second_encrypt_flag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>