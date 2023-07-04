<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class PickProduct {
	
	static $_TSPEC;
	public $stock = null;
	public $barcode = null;
	public $art_no = null;
	public $product_name = null;
	public $size = null;
	public $actual_unit_price = null;
	public $actual_market_price = null;
	public $not_delivery_num = null;
	public $is_attended_activities = null;
	public $security_type = null;
	public $quality_check_flag = null;
	public $check_items = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'stock'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'art_no'
			),
			4 => array(
			'var' => 'product_name'
			),
			5 => array(
			'var' => 'size'
			),
			6 => array(
			'var' => 'actual_unit_price'
			),
			7 => array(
			'var' => 'actual_market_price'
			),
			8 => array(
			'var' => 'not_delivery_num'
			),
			9 => array(
			'var' => 'is_attended_activities'
			),
			10 => array(
			'var' => 'security_type'
			),
			11 => array(
			'var' => 'quality_check_flag'
			),
			12 => array(
			'var' => 'check_items'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['stock'])){
				
				$this->stock = $vals['stock'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['art_no'])){
				
				$this->art_no = $vals['art_no'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['actual_unit_price'])){
				
				$this->actual_unit_price = $vals['actual_unit_price'];
			}
			
			
			if (isset($vals['actual_market_price'])){
				
				$this->actual_market_price = $vals['actual_market_price'];
			}
			
			
			if (isset($vals['not_delivery_num'])){
				
				$this->not_delivery_num = $vals['not_delivery_num'];
			}
			
			
			if (isset($vals['is_attended_activities'])){
				
				$this->is_attended_activities = $vals['is_attended_activities'];
			}
			
			
			if (isset($vals['security_type'])){
				
				$this->security_type = $vals['security_type'];
			}
			
			
			if (isset($vals['quality_check_flag'])){
				
				$this->quality_check_flag = $vals['quality_check_flag'];
			}
			
			
			if (isset($vals['check_items'])){
				
				$this->check_items = $vals['check_items'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PickProduct';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("stock" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->stock); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("art_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->art_no);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("actual_unit_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actual_unit_price);
				
			}
			
			
			
			
			if ("actual_market_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actual_market_price);
				
			}
			
			
			
			
			if ("not_delivery_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->not_delivery_num); 
				
			}
			
			
			
			
			if ("is_attended_activities" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is_attended_activities);
				
			}
			
			
			
			
			if ("security_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->security_type); 
				
			}
			
			
			
			
			if ("quality_check_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quality_check_flag); 
				
			}
			
			
			
			
			if ("check_items" == $schemeField){
				
				$needSkip = false;
				
				$this->check_items = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\delivery\ExchangeOrderCheckItem();
						$elem0->read($input);
						
						$this->check_items[$_size0++] = $elem0;
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
		
		if($this->stock !== null) {
			
			$xfer += $output->writeFieldBegin('stock');
			$xfer += $output->writeI32($this->stock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->art_no !== null) {
			
			$xfer += $output->writeFieldBegin('art_no');
			$xfer += $output->writeString($this->art_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_name !== null) {
			
			$xfer += $output->writeFieldBegin('product_name');
			$xfer += $output->writeString($this->product_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actual_unit_price !== null) {
			
			$xfer += $output->writeFieldBegin('actual_unit_price');
			$xfer += $output->writeString($this->actual_unit_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actual_market_price !== null) {
			
			$xfer += $output->writeFieldBegin('actual_market_price');
			$xfer += $output->writeString($this->actual_market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->not_delivery_num !== null) {
			
			$xfer += $output->writeFieldBegin('not_delivery_num');
			$xfer += $output->writeI32($this->not_delivery_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_attended_activities !== null) {
			
			$xfer += $output->writeFieldBegin('is_attended_activities');
			$xfer += $output->writeBool($this->is_attended_activities);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->security_type !== null) {
			
			$xfer += $output->writeFieldBegin('security_type');
			$xfer += $output->writeI32($this->security_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quality_check_flag !== null) {
			
			$xfer += $output->writeFieldBegin('quality_check_flag');
			$xfer += $output->writeI32($this->quality_check_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->check_items !== null) {
			
			$xfer += $output->writeFieldBegin('check_items');
			
			if (!is_array($this->check_items)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->check_items as $iter0){
				
				
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