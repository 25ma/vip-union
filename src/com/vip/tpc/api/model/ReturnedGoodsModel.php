<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class ReturnedGoodsModel {
	
	static $_TSPEC;
	public $barcode = null;
	public $goods_name = null;
	public $quantity = null;
	public $unit = null;
	public $brand_name = null;
	public $po = null;
	public $vendor_code = null;
	public $tax_rate = null;
	public $bill_price = null;
	public $bill_tax_price = null;
	public $net_bill_price = null;
	public $goods_pic_url = null;
	public $return_reason = null;
	public $remark = null;
	public $task_goods_identification_infos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'goods_name'
			),
			3 => array(
			'var' => 'quantity'
			),
			4 => array(
			'var' => 'unit'
			),
			5 => array(
			'var' => 'brand_name'
			),
			6 => array(
			'var' => 'po'
			),
			7 => array(
			'var' => 'vendor_code'
			),
			8 => array(
			'var' => 'tax_rate'
			),
			9 => array(
			'var' => 'bill_price'
			),
			10 => array(
			'var' => 'bill_tax_price'
			),
			11 => array(
			'var' => 'net_bill_price'
			),
			12 => array(
			'var' => 'goods_pic_url'
			),
			13 => array(
			'var' => 'return_reason'
			),
			14 => array(
			'var' => 'remark'
			),
			15 => array(
			'var' => 'task_goods_identification_infos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['goods_name'])){
				
				$this->goods_name = $vals['goods_name'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['tax_rate'])){
				
				$this->tax_rate = $vals['tax_rate'];
			}
			
			
			if (isset($vals['bill_price'])){
				
				$this->bill_price = $vals['bill_price'];
			}
			
			
			if (isset($vals['bill_tax_price'])){
				
				$this->bill_tax_price = $vals['bill_tax_price'];
			}
			
			
			if (isset($vals['net_bill_price'])){
				
				$this->net_bill_price = $vals['net_bill_price'];
			}
			
			
			if (isset($vals['goods_pic_url'])){
				
				$this->goods_pic_url = $vals['goods_pic_url'];
			}
			
			
			if (isset($vals['return_reason'])){
				
				$this->return_reason = $vals['return_reason'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['task_goods_identification_infos'])){
				
				$this->task_goods_identification_infos = $vals['task_goods_identification_infos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnedGoodsModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_name);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("tax_rate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_rate);
				
			}
			
			
			
			
			if ("bill_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bill_price);
				
			}
			
			
			
			
			if ("bill_tax_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bill_tax_price);
				
			}
			
			
			
			
			if ("net_bill_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->net_bill_price);
				
			}
			
			
			
			
			if ("goods_pic_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_pic_url);
				
			}
			
			
			
			
			if ("return_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_reason);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("task_goods_identification_infos" == $schemeField){
				
				$needSkip = false;
				
				$this->task_goods_identification_infos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\tpc\api\model\TaskGoodsIdentificationInfo();
						$elem0->read($input);
						
						$this->task_goods_identification_infos[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_name');
		$xfer += $output->writeString($this->goods_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tax_rate !== null) {
			
			$xfer += $output->writeFieldBegin('tax_rate');
			$xfer += $output->writeString($this->tax_rate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bill_price !== null) {
			
			$xfer += $output->writeFieldBegin('bill_price');
			$xfer += $output->writeString($this->bill_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bill_tax_price !== null) {
			
			$xfer += $output->writeFieldBegin('bill_tax_price');
			$xfer += $output->writeString($this->bill_tax_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->net_bill_price !== null) {
			
			$xfer += $output->writeFieldBegin('net_bill_price');
			$xfer += $output->writeString($this->net_bill_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_pic_url !== null) {
			
			$xfer += $output->writeFieldBegin('goods_pic_url');
			$xfer += $output->writeString($this->goods_pic_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_reason !== null) {
			
			$xfer += $output->writeFieldBegin('return_reason');
			$xfer += $output->writeString($this->return_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->task_goods_identification_infos !== null) {
			
			$xfer += $output->writeFieldBegin('task_goods_identification_infos');
			
			if (!is_array($this->task_goods_identification_infos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->task_goods_identification_infos as $iter0){
				
				
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