<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\branduser\facade\order;

class ParentOrderInfo {
	
	static $_TSPEC;
	public $parent_goods_category_count = null;
	public $parent_goods_count = null;
	public $parent_order_goods_total_amount = null;
	public $parent_order_carriage_total_amount = null;
	public $parent_order_goods_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'parent_goods_category_count'
			),
			2 => array(
			'var' => 'parent_goods_count'
			),
			3 => array(
			'var' => 'parent_order_goods_total_amount'
			),
			4 => array(
			'var' => 'parent_order_carriage_total_amount'
			),
			5 => array(
			'var' => 'parent_order_goods_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['parent_goods_category_count'])){
				
				$this->parent_goods_category_count = $vals['parent_goods_category_count'];
			}
			
			
			if (isset($vals['parent_goods_count'])){
				
				$this->parent_goods_count = $vals['parent_goods_count'];
			}
			
			
			if (isset($vals['parent_order_goods_total_amount'])){
				
				$this->parent_order_goods_total_amount = $vals['parent_order_goods_total_amount'];
			}
			
			
			if (isset($vals['parent_order_carriage_total_amount'])){
				
				$this->parent_order_carriage_total_amount = $vals['parent_order_carriage_total_amount'];
			}
			
			
			if (isset($vals['parent_order_goods_list'])){
				
				$this->parent_order_goods_list = $vals['parent_order_goods_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ParentOrderInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("parent_goods_category_count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->parent_goods_category_count); 
				
			}
			
			
			
			
			if ("parent_goods_count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->parent_goods_count); 
				
			}
			
			
			
			
			if ("parent_order_goods_total_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parent_order_goods_total_amount);
				
			}
			
			
			
			
			if ("parent_order_carriage_total_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parent_order_carriage_total_amount);
				
			}
			
			
			
			
			if ("parent_order_goods_list" == $schemeField){
				
				$needSkip = false;
				
				$this->parent_order_goods_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\branduser\facade\order\ParentOrderGoodsInfo();
						$elem0->read($input);
						
						$this->parent_order_goods_list[$_size0++] = $elem0;
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
		
		if($this->parent_goods_category_count !== null) {
			
			$xfer += $output->writeFieldBegin('parent_goods_category_count');
			$xfer += $output->writeI32($this->parent_goods_category_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parent_goods_count !== null) {
			
			$xfer += $output->writeFieldBegin('parent_goods_count');
			$xfer += $output->writeI32($this->parent_goods_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parent_order_goods_total_amount !== null) {
			
			$xfer += $output->writeFieldBegin('parent_order_goods_total_amount');
			$xfer += $output->writeString($this->parent_order_goods_total_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parent_order_carriage_total_amount !== null) {
			
			$xfer += $output->writeFieldBegin('parent_order_carriage_total_amount');
			$xfer += $output->writeString($this->parent_order_carriage_total_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parent_order_goods_list !== null) {
			
			$xfer += $output->writeFieldBegin('parent_order_goods_list');
			
			if (!is_array($this->parent_order_goods_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->parent_order_goods_list as $iter0){
				
				
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