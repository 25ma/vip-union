<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class OrderProduct {
	
	static $_TSPEC;
	public $sku_id = null;
	public $spu_id = null;
	public $outer_spu_id = null;
	public $outer_sku_id = null;
	public $num = null;
	public $title = null;
	public $size = null;
	public $price = null;
	public $customization = null;
	public $color = null;
	public $goods_line_money = null;
	public $act_subtotal = null;
	public $coupon_subtotal = null;
	public $pay_subtotal = null;
	public $all_subtotal = null;
	public $goods_biz_flag_list = null;
	public $transport_interface_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sku_id'
			),
			2 => array(
			'var' => 'spu_id'
			),
			3 => array(
			'var' => 'outer_spu_id'
			),
			4 => array(
			'var' => 'outer_sku_id'
			),
			5 => array(
			'var' => 'num'
			),
			6 => array(
			'var' => 'title'
			),
			7 => array(
			'var' => 'size'
			),
			8 => array(
			'var' => 'price'
			),
			9 => array(
			'var' => 'customization'
			),
			10 => array(
			'var' => 'color'
			),
			11 => array(
			'var' => 'goods_line_money'
			),
			12 => array(
			'var' => 'act_subtotal'
			),
			13 => array(
			'var' => 'coupon_subtotal'
			),
			14 => array(
			'var' => 'pay_subtotal'
			),
			15 => array(
			'var' => 'all_subtotal'
			),
			16 => array(
			'var' => 'goods_biz_flag_list'
			),
			17 => array(
			'var' => 'transport_interface_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sku_id'])){
				
				$this->sku_id = $vals['sku_id'];
			}
			
			
			if (isset($vals['spu_id'])){
				
				$this->spu_id = $vals['spu_id'];
			}
			
			
			if (isset($vals['outer_spu_id'])){
				
				$this->outer_spu_id = $vals['outer_spu_id'];
			}
			
			
			if (isset($vals['outer_sku_id'])){
				
				$this->outer_sku_id = $vals['outer_sku_id'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['title'])){
				
				$this->title = $vals['title'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['customization'])){
				
				$this->customization = $vals['customization'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['goods_line_money'])){
				
				$this->goods_line_money = $vals['goods_line_money'];
			}
			
			
			if (isset($vals['act_subtotal'])){
				
				$this->act_subtotal = $vals['act_subtotal'];
			}
			
			
			if (isset($vals['coupon_subtotal'])){
				
				$this->coupon_subtotal = $vals['coupon_subtotal'];
			}
			
			
			if (isset($vals['pay_subtotal'])){
				
				$this->pay_subtotal = $vals['pay_subtotal'];
			}
			
			
			if (isset($vals['all_subtotal'])){
				
				$this->all_subtotal = $vals['all_subtotal'];
			}
			
			
			if (isset($vals['goods_biz_flag_list'])){
				
				$this->goods_biz_flag_list = $vals['goods_biz_flag_list'];
			}
			
			
			if (isset($vals['transport_interface_list'])){
				
				$this->transport_interface_list = $vals['transport_interface_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderProduct';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku_id);
				
			}
			
			
			
			
			if ("spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spu_id);
				
			}
			
			
			
			
			if ("outer_spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outer_spu_id);
				
			}
			
			
			
			
			if ("outer_sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outer_sku_id);
				
			}
			
			
			
			
			if ("num" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->num);
				
			}
			
			
			
			
			if ("title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->title);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("customization" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customization);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("goods_line_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_line_money);
				
			}
			
			
			
			
			if ("act_subtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->act_subtotal);
				
			}
			
			
			
			
			if ("coupon_subtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->coupon_subtotal);
				
			}
			
			
			
			
			if ("pay_subtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_subtotal);
				
			}
			
			
			
			
			if ("all_subtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->all_subtotal);
				
			}
			
			
			
			
			if ("goods_biz_flag_list" == $schemeField){
				
				$needSkip = false;
				
				$this->goods_biz_flag_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\marketplace\delivery\SovOrderBizFlag();
						$elem0->read($input);
						
						$this->goods_biz_flag_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("transport_interface_list" == $schemeField){
				
				$needSkip = false;
				
				$this->transport_interface_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\marketplace\delivery\SovOrderTransportInfo();
						$elem1->read($input);
						
						$this->transport_interface_list[$_size1++] = $elem1;
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
		
		if($this->sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('sku_id');
			$xfer += $output->writeString($this->sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('spu_id');
			$xfer += $output->writeString($this->spu_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->outer_spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('outer_spu_id');
			$xfer += $output->writeString($this->outer_spu_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->outer_sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('outer_sku_id');
			$xfer += $output->writeString($this->outer_sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->num !== null) {
			
			$xfer += $output->writeFieldBegin('num');
			$xfer += $output->writeString($this->num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->title !== null) {
			
			$xfer += $output->writeFieldBegin('title');
			$xfer += $output->writeString($this->title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customization !== null) {
			
			$xfer += $output->writeFieldBegin('customization');
			$xfer += $output->writeString($this->customization);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_line_money !== null) {
			
			$xfer += $output->writeFieldBegin('goods_line_money');
			$xfer += $output->writeString($this->goods_line_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->act_subtotal !== null) {
			
			$xfer += $output->writeFieldBegin('act_subtotal');
			$xfer += $output->writeString($this->act_subtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coupon_subtotal !== null) {
			
			$xfer += $output->writeFieldBegin('coupon_subtotal');
			$xfer += $output->writeString($this->coupon_subtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_subtotal !== null) {
			
			$xfer += $output->writeFieldBegin('pay_subtotal');
			$xfer += $output->writeString($this->pay_subtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->all_subtotal !== null) {
			
			$xfer += $output->writeFieldBegin('all_subtotal');
			$xfer += $output->writeString($this->all_subtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_biz_flag_list !== null) {
			
			$xfer += $output->writeFieldBegin('goods_biz_flag_list');
			
			if (!is_array($this->goods_biz_flag_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods_biz_flag_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_interface_list !== null) {
			
			$xfer += $output->writeFieldBegin('transport_interface_list');
			
			if (!is_array($this->transport_interface_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transport_interface_list as $iter0){
				
				
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