<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipRightsTookRecord {
	
	static $_TSPEC;
	public $record_id = null;
	public $goods_name = null;
	public $picture = null;
	public $market_price = null;
	public $vip_price = null;
	public $rights_flow = null;
	public $flow = null;
	public $rights_range = null;
	public $act_code = null;
	public $rights_code = null;
	public $coupon = null;
	public $start_time = null;
	public $end_time = null;
	public $create_time = null;
	public $third_acct = null;
	public $third_acctHash = null;
	public $third_acctEncrypt = null;
	public $button_type = null;
	public $third_rights = null;
	public $rights_name = null;
	public $rights_desc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'record_id'
			),
			2 => array(
			'var' => 'goods_name'
			),
			3 => array(
			'var' => 'picture'
			),
			4 => array(
			'var' => 'market_price'
			),
			5 => array(
			'var' => 'vip_price'
			),
			6 => array(
			'var' => 'rights_flow'
			),
			7 => array(
			'var' => 'flow'
			),
			8 => array(
			'var' => 'rights_range'
			),
			9 => array(
			'var' => 'act_code'
			),
			10 => array(
			'var' => 'rights_code'
			),
			11 => array(
			'var' => 'coupon'
			),
			12 => array(
			'var' => 'start_time'
			),
			13 => array(
			'var' => 'end_time'
			),
			14 => array(
			'var' => 'create_time'
			),
			15 => array(
			'var' => 'third_acct'
			),
			16 => array(
			'var' => 'third_acctHash'
			),
			17 => array(
			'var' => 'third_acctEncrypt'
			),
			18 => array(
			'var' => 'button_type'
			),
			19 => array(
			'var' => 'third_rights'
			),
			20 => array(
			'var' => 'rights_name'
			),
			21 => array(
			'var' => 'rights_desc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['record_id'])){
				
				$this->record_id = $vals['record_id'];
			}
			
			
			if (isset($vals['goods_name'])){
				
				$this->goods_name = $vals['goods_name'];
			}
			
			
			if (isset($vals['picture'])){
				
				$this->picture = $vals['picture'];
			}
			
			
			if (isset($vals['market_price'])){
				
				$this->market_price = $vals['market_price'];
			}
			
			
			if (isset($vals['vip_price'])){
				
				$this->vip_price = $vals['vip_price'];
			}
			
			
			if (isset($vals['rights_flow'])){
				
				$this->rights_flow = $vals['rights_flow'];
			}
			
			
			if (isset($vals['flow'])){
				
				$this->flow = $vals['flow'];
			}
			
			
			if (isset($vals['rights_range'])){
				
				$this->rights_range = $vals['rights_range'];
			}
			
			
			if (isset($vals['act_code'])){
				
				$this->act_code = $vals['act_code'];
			}
			
			
			if (isset($vals['rights_code'])){
				
				$this->rights_code = $vals['rights_code'];
			}
			
			
			if (isset($vals['coupon'])){
				
				$this->coupon = $vals['coupon'];
			}
			
			
			if (isset($vals['start_time'])){
				
				$this->start_time = $vals['start_time'];
			}
			
			
			if (isset($vals['end_time'])){
				
				$this->end_time = $vals['end_time'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['third_acct'])){
				
				$this->third_acct = $vals['third_acct'];
			}
			
			
			if (isset($vals['third_acctHash'])){
				
				$this->third_acctHash = $vals['third_acctHash'];
			}
			
			
			if (isset($vals['third_acctEncrypt'])){
				
				$this->third_acctEncrypt = $vals['third_acctEncrypt'];
			}
			
			
			if (isset($vals['button_type'])){
				
				$this->button_type = $vals['button_type'];
			}
			
			
			if (isset($vals['third_rights'])){
				
				$this->third_rights = $vals['third_rights'];
			}
			
			
			if (isset($vals['rights_name'])){
				
				$this->rights_name = $vals['rights_name'];
			}
			
			
			if (isset($vals['rights_desc'])){
				
				$this->rights_desc = $vals['rights_desc'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipRightsTookRecord';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("record_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->record_id); 
				
			}
			
			
			
			
			if ("goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_name);
				
			}
			
			
			
			
			if ("picture" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->picture);
				
			}
			
			
			
			
			if ("market_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->market_price);
				
			}
			
			
			
			
			if ("vip_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_price);
				
			}
			
			
			
			
			if ("rights_flow" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rights_flow);
				
			}
			
			
			
			
			if ("flow" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->flow);
				
			}
			
			
			
			
			if ("rights_range" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rights_range);
				
			}
			
			
			
			
			if ("act_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->act_code);
				
			}
			
			
			
			
			if ("rights_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rights_code);
				
			}
			
			
			
			
			if ("coupon" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->coupon);
				
			}
			
			
			
			
			if ("start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_time);
				
			}
			
			
			
			
			if ("end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_time);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time);
				
			}
			
			
			
			
			if ("third_acct" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_acct);
				
			}
			
			
			
			
			if ("third_acctHash" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_acctHash);
				
			}
			
			
			
			
			if ("third_acctEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_acctEncrypt);
				
			}
			
			
			
			
			if ("button_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->button_type); 
				
			}
			
			
			
			
			if ("third_rights" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_rights);
				
			}
			
			
			
			
			if ("rights_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rights_name);
				
			}
			
			
			
			
			if ("rights_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rights_desc);
				
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
		
		$xfer += $output->writeFieldBegin('record_id');
		$xfer += $output->writeI64($this->record_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->goods_name !== null) {
			
			$xfer += $output->writeFieldBegin('goods_name');
			$xfer += $output->writeString($this->goods_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->picture !== null) {
			
			$xfer += $output->writeFieldBegin('picture');
			$xfer += $output->writeString($this->picture);
			
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
		
		
		if($this->rights_flow !== null) {
			
			$xfer += $output->writeFieldBegin('rights_flow');
			$xfer += $output->writeString($this->rights_flow);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flow !== null) {
			
			$xfer += $output->writeFieldBegin('flow');
			$xfer += $output->writeString($this->flow);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rights_range !== null) {
			
			$xfer += $output->writeFieldBegin('rights_range');
			$xfer += $output->writeString($this->rights_range);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->act_code !== null) {
			
			$xfer += $output->writeFieldBegin('act_code');
			$xfer += $output->writeString($this->act_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rights_code !== null) {
			
			$xfer += $output->writeFieldBegin('rights_code');
			$xfer += $output->writeString($this->rights_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coupon !== null) {
			
			$xfer += $output->writeFieldBegin('coupon');
			$xfer += $output->writeString($this->coupon);
			
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
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_acct !== null) {
			
			$xfer += $output->writeFieldBegin('third_acct');
			$xfer += $output->writeString($this->third_acct);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_acctHash !== null) {
			
			$xfer += $output->writeFieldBegin('third_acctHash');
			$xfer += $output->writeString($this->third_acctHash);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_acctEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('third_acctEncrypt');
			$xfer += $output->writeString($this->third_acctEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('button_type');
		$xfer += $output->writeI32($this->button_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->third_rights !== null) {
			
			$xfer += $output->writeFieldBegin('third_rights');
			$xfer += $output->writeString($this->third_rights);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rights_name !== null) {
			
			$xfer += $output->writeFieldBegin('rights_name');
			$xfer += $output->writeString($this->rights_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rights_desc !== null) {
			
			$xfer += $output->writeFieldBegin('rights_desc');
			$xfer += $output->writeString($this->rights_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>