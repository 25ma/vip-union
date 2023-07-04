<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipActRightsInfo {
	
	static $_TSPEC;
	public $user_type = null;
	public $rights_name = null;
	public $rights_code = null;
	public $picture = null;
	public $goods_name = null;
	public $goods_short_name = null;
	public $goods_desc = null;
	public $market_price = null;
	public $vip_price = null;
	public $start_time = null;
	public $end_time = null;
	public $rights_range = null;
	public $rights_desc = null;
	public $rights_flow = null;
	public $priority = null;
	public $status = null;
	public $flow = null;
	public $issue = null;
	public $remark = null;
	public $v_start = null;
	public $coupon_batch = null;
	public $take_type = null;
	public $button_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'user_type'
			),
			2 => array(
			'var' => 'rights_name'
			),
			3 => array(
			'var' => 'rights_code'
			),
			4 => array(
			'var' => 'picture'
			),
			5 => array(
			'var' => 'goods_name'
			),
			6 => array(
			'var' => 'goods_short_name'
			),
			7 => array(
			'var' => 'goods_desc'
			),
			8 => array(
			'var' => 'market_price'
			),
			9 => array(
			'var' => 'vip_price'
			),
			10 => array(
			'var' => 'start_time'
			),
			11 => array(
			'var' => 'end_time'
			),
			12 => array(
			'var' => 'rights_range'
			),
			13 => array(
			'var' => 'rights_desc'
			),
			14 => array(
			'var' => 'rights_flow'
			),
			15 => array(
			'var' => 'priority'
			),
			16 => array(
			'var' => 'status'
			),
			17 => array(
			'var' => 'flow'
			),
			18 => array(
			'var' => 'issue'
			),
			19 => array(
			'var' => 'remark'
			),
			20 => array(
			'var' => 'v_start'
			),
			21 => array(
			'var' => 'coupon_batch'
			),
			22 => array(
			'var' => 'take_type'
			),
			23 => array(
			'var' => 'button_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['user_type'])){
				
				$this->user_type = $vals['user_type'];
			}
			
			
			if (isset($vals['rights_name'])){
				
				$this->rights_name = $vals['rights_name'];
			}
			
			
			if (isset($vals['rights_code'])){
				
				$this->rights_code = $vals['rights_code'];
			}
			
			
			if (isset($vals['picture'])){
				
				$this->picture = $vals['picture'];
			}
			
			
			if (isset($vals['goods_name'])){
				
				$this->goods_name = $vals['goods_name'];
			}
			
			
			if (isset($vals['goods_short_name'])){
				
				$this->goods_short_name = $vals['goods_short_name'];
			}
			
			
			if (isset($vals['goods_desc'])){
				
				$this->goods_desc = $vals['goods_desc'];
			}
			
			
			if (isset($vals['market_price'])){
				
				$this->market_price = $vals['market_price'];
			}
			
			
			if (isset($vals['vip_price'])){
				
				$this->vip_price = $vals['vip_price'];
			}
			
			
			if (isset($vals['start_time'])){
				
				$this->start_time = $vals['start_time'];
			}
			
			
			if (isset($vals['end_time'])){
				
				$this->end_time = $vals['end_time'];
			}
			
			
			if (isset($vals['rights_range'])){
				
				$this->rights_range = $vals['rights_range'];
			}
			
			
			if (isset($vals['rights_desc'])){
				
				$this->rights_desc = $vals['rights_desc'];
			}
			
			
			if (isset($vals['rights_flow'])){
				
				$this->rights_flow = $vals['rights_flow'];
			}
			
			
			if (isset($vals['priority'])){
				
				$this->priority = $vals['priority'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['flow'])){
				
				$this->flow = $vals['flow'];
			}
			
			
			if (isset($vals['issue'])){
				
				$this->issue = $vals['issue'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['v_start'])){
				
				$this->v_start = $vals['v_start'];
			}
			
			
			if (isset($vals['coupon_batch'])){
				
				$this->coupon_batch = $vals['coupon_batch'];
			}
			
			
			if (isset($vals['take_type'])){
				
				$this->take_type = $vals['take_type'];
			}
			
			
			if (isset($vals['button_type'])){
				
				$this->button_type = $vals['button_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipActRightsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("user_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->user_type); 
				
			}
			
			
			
			
			if ("rights_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rights_name);
				
			}
			
			
			
			
			if ("rights_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rights_code);
				
			}
			
			
			
			
			if ("picture" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->picture);
				
			}
			
			
			
			
			if ("goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_name);
				
			}
			
			
			
			
			if ("goods_short_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_short_name);
				
			}
			
			
			
			
			if ("goods_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_desc);
				
			}
			
			
			
			
			if ("market_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->market_price);
				
			}
			
			
			
			
			if ("vip_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_price);
				
			}
			
			
			
			
			if ("start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_time);
				
			}
			
			
			
			
			if ("end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_time);
				
			}
			
			
			
			
			if ("rights_range" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rights_range);
				
			}
			
			
			
			
			if ("rights_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rights_desc);
				
			}
			
			
			
			
			if ("rights_flow" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rights_flow);
				
			}
			
			
			
			
			if ("priority" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->priority); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("flow" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->flow);
				
			}
			
			
			
			
			if ("issue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->issue);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("v_start" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->v_start); 
				
			}
			
			
			
			
			if ("coupon_batch" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->coupon_batch); 
				
			}
			
			
			
			
			if ("take_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->take_type); 
				
			}
			
			
			
			
			if ("button_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->button_type); 
				
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
		
		$xfer += $output->writeFieldBegin('user_type');
		$xfer += $output->writeI32($this->user_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->rights_name !== null) {
			
			$xfer += $output->writeFieldBegin('rights_name');
			$xfer += $output->writeString($this->rights_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rights_code !== null) {
			
			$xfer += $output->writeFieldBegin('rights_code');
			$xfer += $output->writeString($this->rights_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->picture !== null) {
			
			$xfer += $output->writeFieldBegin('picture');
			$xfer += $output->writeString($this->picture);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_name !== null) {
			
			$xfer += $output->writeFieldBegin('goods_name');
			$xfer += $output->writeString($this->goods_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_short_name !== null) {
			
			$xfer += $output->writeFieldBegin('goods_short_name');
			$xfer += $output->writeString($this->goods_short_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_desc !== null) {
			
			$xfer += $output->writeFieldBegin('goods_desc');
			$xfer += $output->writeString($this->goods_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->market_price !== null) {
			
			$xfer += $output->writeFieldBegin('market_price');
			$xfer += $output->writeString($this->market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_price !== null) {
			
			$xfer += $output->writeFieldBegin('vip_price');
			$xfer += $output->writeString($this->vip_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->start_time !== null) {
			
			$xfer += $output->writeFieldBegin('start_time');
			$xfer += $output->writeI64($this->start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_time !== null) {
			
			$xfer += $output->writeFieldBegin('end_time');
			$xfer += $output->writeI64($this->end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rights_range !== null) {
			
			$xfer += $output->writeFieldBegin('rights_range');
			$xfer += $output->writeString($this->rights_range);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rights_desc !== null) {
			
			$xfer += $output->writeFieldBegin('rights_desc');
			$xfer += $output->writeString($this->rights_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rights_flow !== null) {
			
			$xfer += $output->writeFieldBegin('rights_flow');
			$xfer += $output->writeString($this->rights_flow);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('priority');
		$xfer += $output->writeI32($this->priority);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->flow !== null) {
			
			$xfer += $output->writeFieldBegin('flow');
			$xfer += $output->writeString($this->flow);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->issue !== null) {
			
			$xfer += $output->writeFieldBegin('issue');
			$xfer += $output->writeString($this->issue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('v_start');
		$xfer += $output->writeI32($this->v_start);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('coupon_batch');
		$xfer += $output->writeI64($this->coupon_batch);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('take_type');
		$xfer += $output->writeI32($this->take_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('button_type');
		$xfer += $output->writeI32($this->button_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>