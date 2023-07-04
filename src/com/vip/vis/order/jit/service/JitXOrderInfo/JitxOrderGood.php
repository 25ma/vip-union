<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\JitXOrderInfo;

class JitxOrderGood {
	
	static $_TSPEC;
	public $barcode = null;
	public $quantity = null;
	public $price = null;
	public $brand_name = null;
	public $product_name = null;
	public $size = null;
	public $sn = null;
	public $po_no = null;
	public $cooperation_no = null;
	public $promotion_price = null;
	public $vendor_id = null;
	public $vendor_code = null;
	public $anti_theft_flag = null;
	public $security_type = null;
	public $redeliver_item_list = null;
	public $customize_status = null;
	public $customize_json_content = null;
	public $is_appoint_installation = null;
	public $quality_check_type = null;
	public $check_items = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'quantity'
			),
			3 => array(
			'var' => 'price'
			),
			4 => array(
			'var' => 'brand_name'
			),
			5 => array(
			'var' => 'product_name'
			),
			6 => array(
			'var' => 'size'
			),
			7 => array(
			'var' => 'sn'
			),
			8 => array(
			'var' => 'po_no'
			),
			9 => array(
			'var' => 'cooperation_no'
			),
			10 => array(
			'var' => 'promotion_price'
			),
			11 => array(
			'var' => 'vendor_id'
			),
			12 => array(
			'var' => 'vendor_code'
			),
			13 => array(
			'var' => 'anti_theft_flag'
			),
			14 => array(
			'var' => 'security_type'
			),
			15 => array(
			'var' => 'redeliver_item_list'
			),
			16 => array(
			'var' => 'customize_status'
			),
			17 => array(
			'var' => 'customize_json_content'
			),
			18 => array(
			'var' => 'is_appoint_installation'
			),
			19 => array(
			'var' => 'quality_check_type'
			),
			20 => array(
			'var' => 'check_items'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
			if (isset($vals['promotion_price'])){
				
				$this->promotion_price = $vals['promotion_price'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['anti_theft_flag'])){
				
				$this->anti_theft_flag = $vals['anti_theft_flag'];
			}
			
			
			if (isset($vals['security_type'])){
				
				$this->security_type = $vals['security_type'];
			}
			
			
			if (isset($vals['redeliver_item_list'])){
				
				$this->redeliver_item_list = $vals['redeliver_item_list'];
			}
			
			
			if (isset($vals['customize_status'])){
				
				$this->customize_status = $vals['customize_status'];
			}
			
			
			if (isset($vals['customize_json_content'])){
				
				$this->customize_json_content = $vals['customize_json_content'];
			}
			
			
			if (isset($vals['is_appoint_installation'])){
				
				$this->is_appoint_installation = $vals['is_appoint_installation'];
			}
			
			
			if (isset($vals['quality_check_type'])){
				
				$this->quality_check_type = $vals['quality_check_type'];
			}
			
			
			if (isset($vals['check_items'])){
				
				$this->check_items = $vals['check_items'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'JitxOrderGood';
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
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("cooperation_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cooperation_no);
				
			}
			
			
			
			
			if ("promotion_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promotion_price);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("anti_theft_flag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->anti_theft_flag);
				
			}
			
			
			
			
			if ("security_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->security_type); 
				
			}
			
			
			
			
			if ("redeliver_item_list" == $schemeField){
				
				$needSkip = false;
				
				$this->redeliver_item_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\order\jit\service\JitXOrderInfo\RedeliverItem();
						$elem0->read($input);
						
						$this->redeliver_item_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("customize_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->customize_status); 
				
			}
			
			
			
			
			if ("customize_json_content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customize_json_content);
				
			}
			
			
			
			
			if ("is_appoint_installation" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_appoint_installation); 
				
			}
			
			
			
			
			if ("quality_check_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->quality_check_type); 
				
			}
			
			
			
			
			if ("check_items" == $schemeField){
				
				$needSkip = false;
				
				$this->check_items = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vis\order\jit\service\JitXOrderInfo\OrderCheckItem();
						$elem1->read($input);
						
						$this->check_items[$_size1++] = $elem1;
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
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
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
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperation_no !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_no');
			$xfer += $output->writeString($this->cooperation_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotion_price !== null) {
			
			$xfer += $output->writeFieldBegin('promotion_price');
			$xfer += $output->writeString($this->promotion_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->anti_theft_flag !== null) {
			
			$xfer += $output->writeFieldBegin('anti_theft_flag');
			$xfer += $output->writeString($this->anti_theft_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->security_type !== null) {
			
			$xfer += $output->writeFieldBegin('security_type');
			$xfer += $output->writeI32($this->security_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->redeliver_item_list !== null) {
			
			$xfer += $output->writeFieldBegin('redeliver_item_list');
			
			if (!is_array($this->redeliver_item_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->redeliver_item_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customize_status !== null) {
			
			$xfer += $output->writeFieldBegin('customize_status');
			$xfer += $output->writeI32($this->customize_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customize_json_content !== null) {
			
			$xfer += $output->writeFieldBegin('customize_json_content');
			$xfer += $output->writeString($this->customize_json_content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_appoint_installation !== null) {
			
			$xfer += $output->writeFieldBegin('is_appoint_installation');
			$xfer += $output->writeByte($this->is_appoint_installation);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quality_check_type !== null) {
			
			$xfer += $output->writeFieldBegin('quality_check_type');
			$xfer += $output->writeByte($this->quality_check_type);
			
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