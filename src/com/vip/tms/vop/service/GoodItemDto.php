<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class GoodItemDto {
	
	static $_TSPEC;
	public $good_name = null;
	public $good_qty = null;
	public $size_sn = null;
	public $good_unit = null;
	public $good_brand = null;
	public $good_pic = null;
	public $sku_id = null;
	public $mer_item_no = null;
	public $color = null;
	public $goods_sn = null;
	public $vendor_sku = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'good_name'
			),
			2 => array(
			'var' => 'good_qty'
			),
			3 => array(
			'var' => 'size_sn'
			),
			4 => array(
			'var' => 'good_unit'
			),
			5 => array(
			'var' => 'good_brand'
			),
			6 => array(
			'var' => 'good_pic'
			),
			7 => array(
			'var' => 'sku_id'
			),
			8 => array(
			'var' => 'mer_item_no'
			),
			9 => array(
			'var' => 'color'
			),
			10 => array(
			'var' => 'goods_sn'
			),
			11 => array(
			'var' => 'vendor_sku'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['good_name'])){
				
				$this->good_name = $vals['good_name'];
			}
			
			
			if (isset($vals['good_qty'])){
				
				$this->good_qty = $vals['good_qty'];
			}
			
			
			if (isset($vals['size_sn'])){
				
				$this->size_sn = $vals['size_sn'];
			}
			
			
			if (isset($vals['good_unit'])){
				
				$this->good_unit = $vals['good_unit'];
			}
			
			
			if (isset($vals['good_brand'])){
				
				$this->good_brand = $vals['good_brand'];
			}
			
			
			if (isset($vals['good_pic'])){
				
				$this->good_pic = $vals['good_pic'];
			}
			
			
			if (isset($vals['sku_id'])){
				
				$this->sku_id = $vals['sku_id'];
			}
			
			
			if (isset($vals['mer_item_no'])){
				
				$this->mer_item_no = $vals['mer_item_no'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['goods_sn'])){
				
				$this->goods_sn = $vals['goods_sn'];
			}
			
			
			if (isset($vals['vendor_sku'])){
				
				$this->vendor_sku = $vals['vendor_sku'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodItemDto';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("good_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->good_name);
				
			}
			
			
			
			
			if ("good_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->good_qty); 
				
			}
			
			
			
			
			if ("size_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_sn);
				
			}
			
			
			
			
			if ("good_unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->good_unit);
				
			}
			
			
			
			
			if ("good_brand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->good_brand);
				
			}
			
			
			
			
			if ("good_pic" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->good_pic);
				
			}
			
			
			
			
			if ("sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku_id);
				
			}
			
			
			
			
			if ("mer_item_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mer_item_no);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("goods_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_sn);
				
			}
			
			
			
			
			if ("vendor_sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_sku);
				
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
		
		$xfer += $output->writeFieldBegin('good_name');
		$xfer += $output->writeString($this->good_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('good_qty');
		$xfer += $output->writeI32($this->good_qty);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->size_sn !== null) {
			
			$xfer += $output->writeFieldBegin('size_sn');
			$xfer += $output->writeString($this->size_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->good_unit !== null) {
			
			$xfer += $output->writeFieldBegin('good_unit');
			$xfer += $output->writeString($this->good_unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->good_brand !== null) {
			
			$xfer += $output->writeFieldBegin('good_brand');
			$xfer += $output->writeString($this->good_brand);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->good_pic !== null) {
			
			$xfer += $output->writeFieldBegin('good_pic');
			$xfer += $output->writeString($this->good_pic);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('sku_id');
			$xfer += $output->writeString($this->sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mer_item_no !== null) {
			
			$xfer += $output->writeFieldBegin('mer_item_no');
			$xfer += $output->writeString($this->mer_item_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_sn !== null) {
			
			$xfer += $output->writeFieldBegin('goods_sn');
			$xfer += $output->writeString($this->goods_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_sku !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_sku');
			$xfer += $output->writeString($this->vendor_sku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>