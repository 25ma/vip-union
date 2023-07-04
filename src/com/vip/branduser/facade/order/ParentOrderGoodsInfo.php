<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\branduser\facade\order;

class ParentOrderGoodsInfo {
	
	static $_TSPEC;
	public $goods_name = null;
	public $num = null;
	public $parent_goods_real_amount = null;
	public $bar_code = null;
	public $unit_price = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goods_name'
			),
			2 => array(
			'var' => 'num'
			),
			3 => array(
			'var' => 'parent_goods_real_amount'
			),
			4 => array(
			'var' => 'bar_code'
			),
			5 => array(
			'var' => 'unit_price'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goods_name'])){
				
				$this->goods_name = $vals['goods_name'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['parent_goods_real_amount'])){
				
				$this->parent_goods_real_amount = $vals['parent_goods_real_amount'];
			}
			
			
			if (isset($vals['bar_code'])){
				
				$this->bar_code = $vals['bar_code'];
			}
			
			
			if (isset($vals['unit_price'])){
				
				$this->unit_price = $vals['unit_price'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ParentOrderGoodsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_name);
				
			}
			
			
			
			
			if ("num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->num); 
				
			}
			
			
			
			
			if ("parent_goods_real_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parent_goods_real_amount);
				
			}
			
			
			
			
			if ("bar_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bar_code);
				
			}
			
			
			
			
			if ("unit_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit_price);
				
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
		
		if($this->goods_name !== null) {
			
			$xfer += $output->writeFieldBegin('goods_name');
			$xfer += $output->writeString($this->goods_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->num !== null) {
			
			$xfer += $output->writeFieldBegin('num');
			$xfer += $output->writeI32($this->num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parent_goods_real_amount !== null) {
			
			$xfer += $output->writeFieldBegin('parent_goods_real_amount');
			$xfer += $output->writeString($this->parent_goods_real_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bar_code !== null) {
			
			$xfer += $output->writeFieldBegin('bar_code');
			$xfer += $output->writeString($this->bar_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit_price !== null) {
			
			$xfer += $output->writeFieldBegin('unit_price');
			$xfer += $output->writeString($this->unit_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>