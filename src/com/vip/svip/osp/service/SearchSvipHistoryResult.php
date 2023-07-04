<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SearchSvipHistoryResult {
	
	static $_TSPEC;
	public $user_id = null;
	public $level = null;
	public $exec_type = null;
	public $exec_source = null;
	public $exec_content = null;
	public $gift = null;
	public $start_time = null;
	public $end_time = null;
	public $operate_user = null;
	public $money = null;
	public $create_time = null;
	public $update_time = null;
	public $open_type = null;
	public $order_no = null;
	public $firstOpenRightsStatus = null;
	public $use_order_no = null;
	public $uds_unique_code = null;
	public $cancelStatus = null;
	public $orderFriendCardStatus = null;
	public $reason = null;
	public $hasPriceProtection = null;
	public $vipCoinNum = null;
	public $vipCoinCreateTime = null;
	public $normalPayAmount = null;
	public $svip_op_re_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'user_id'
			),
			2 => array(
			'var' => 'level'
			),
			3 => array(
			'var' => 'exec_type'
			),
			4 => array(
			'var' => 'exec_source'
			),
			5 => array(
			'var' => 'exec_content'
			),
			6 => array(
			'var' => 'gift'
			),
			7 => array(
			'var' => 'start_time'
			),
			8 => array(
			'var' => 'end_time'
			),
			9 => array(
			'var' => 'operate_user'
			),
			10 => array(
			'var' => 'money'
			),
			11 => array(
			'var' => 'create_time'
			),
			12 => array(
			'var' => 'update_time'
			),
			13 => array(
			'var' => 'open_type'
			),
			14 => array(
			'var' => 'order_no'
			),
			15 => array(
			'var' => 'firstOpenRightsStatus'
			),
			16 => array(
			'var' => 'use_order_no'
			),
			17 => array(
			'var' => 'uds_unique_code'
			),
			18 => array(
			'var' => 'cancelStatus'
			),
			19 => array(
			'var' => 'orderFriendCardStatus'
			),
			20 => array(
			'var' => 'reason'
			),
			21 => array(
			'var' => 'hasPriceProtection'
			),
			22 => array(
			'var' => 'vipCoinNum'
			),
			23 => array(
			'var' => 'vipCoinCreateTime'
			),
			24 => array(
			'var' => 'normalPayAmount'
			),
			25 => array(
			'var' => 'svip_op_re_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['user_id'])){
				
				$this->user_id = $vals['user_id'];
			}
			
			
			if (isset($vals['level'])){
				
				$this->level = $vals['level'];
			}
			
			
			if (isset($vals['exec_type'])){
				
				$this->exec_type = $vals['exec_type'];
			}
			
			
			if (isset($vals['exec_source'])){
				
				$this->exec_source = $vals['exec_source'];
			}
			
			
			if (isset($vals['exec_content'])){
				
				$this->exec_content = $vals['exec_content'];
			}
			
			
			if (isset($vals['gift'])){
				
				$this->gift = $vals['gift'];
			}
			
			
			if (isset($vals['start_time'])){
				
				$this->start_time = $vals['start_time'];
			}
			
			
			if (isset($vals['end_time'])){
				
				$this->end_time = $vals['end_time'];
			}
			
			
			if (isset($vals['operate_user'])){
				
				$this->operate_user = $vals['operate_user'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['open_type'])){
				
				$this->open_type = $vals['open_type'];
			}
			
			
			if (isset($vals['order_no'])){
				
				$this->order_no = $vals['order_no'];
			}
			
			
			if (isset($vals['firstOpenRightsStatus'])){
				
				$this->firstOpenRightsStatus = $vals['firstOpenRightsStatus'];
			}
			
			
			if (isset($vals['use_order_no'])){
				
				$this->use_order_no = $vals['use_order_no'];
			}
			
			
			if (isset($vals['uds_unique_code'])){
				
				$this->uds_unique_code = $vals['uds_unique_code'];
			}
			
			
			if (isset($vals['cancelStatus'])){
				
				$this->cancelStatus = $vals['cancelStatus'];
			}
			
			
			if (isset($vals['orderFriendCardStatus'])){
				
				$this->orderFriendCardStatus = $vals['orderFriendCardStatus'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
			if (isset($vals['hasPriceProtection'])){
				
				$this->hasPriceProtection = $vals['hasPriceProtection'];
			}
			
			
			if (isset($vals['vipCoinNum'])){
				
				$this->vipCoinNum = $vals['vipCoinNum'];
			}
			
			
			if (isset($vals['vipCoinCreateTime'])){
				
				$this->vipCoinCreateTime = $vals['vipCoinCreateTime'];
			}
			
			
			if (isset($vals['normalPayAmount'])){
				
				$this->normalPayAmount = $vals['normalPayAmount'];
			}
			
			
			if (isset($vals['svip_op_re_id'])){
				
				$this->svip_op_re_id = $vals['svip_op_re_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SearchSvipHistoryResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("user_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->user_id); 
				
			}
			
			
			
			
			if ("level" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->level);
				
			}
			
			
			
			
			if ("exec_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->exec_type); 
				
			}
			
			
			
			
			if ("exec_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exec_source);
				
			}
			
			
			
			
			if ("exec_content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exec_content);
				
			}
			
			
			
			
			if ("gift" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->gift);
				
			}
			
			
			
			
			if ("start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_time);
				
			}
			
			
			
			
			if ("end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_time);
				
			}
			
			
			
			
			if ("operate_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operate_user);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time);
				
			}
			
			
			
			
			if ("open_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->open_type); 
				
			}
			
			
			
			
			if ("order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_no);
				
			}
			
			
			
			
			if ("firstOpenRightsStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->firstOpenRightsStatus);
				
			}
			
			
			
			
			if ("use_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->use_order_no);
				
			}
			
			
			
			
			if ("uds_unique_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uds_unique_code);
				
			}
			
			
			
			
			if ("cancelStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cancelStatus); 
				
			}
			
			
			
			
			if ("orderFriendCardStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderFriendCardStatus); 
				
			}
			
			
			
			
			if ("reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason);
				
			}
			
			
			
			
			if ("hasPriceProtection" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->hasPriceProtection);
				
			}
			
			
			
			
			if ("vipCoinNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vipCoinNum); 
				
			}
			
			
			
			
			if ("vipCoinCreateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipCoinCreateTime);
				
			}
			
			
			
			
			if ("normalPayAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->normalPayAmount);
				
			}
			
			
			
			
			if ("svip_op_re_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->svip_op_re_id); 
				
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
		
		$xfer += $output->writeFieldBegin('user_id');
		$xfer += $output->writeI64($this->user_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->level !== null) {
			
			$xfer += $output->writeFieldBegin('level');
			$xfer += $output->writeString($this->level);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('exec_type');
		$xfer += $output->writeI32($this->exec_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->exec_source !== null) {
			
			$xfer += $output->writeFieldBegin('exec_source');
			$xfer += $output->writeString($this->exec_source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exec_content !== null) {
			
			$xfer += $output->writeFieldBegin('exec_content');
			$xfer += $output->writeString($this->exec_content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gift !== null) {
			
			$xfer += $output->writeFieldBegin('gift');
			$xfer += $output->writeString($this->gift);
			
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
		
		
		if($this->operate_user !== null) {
			
			$xfer += $output->writeFieldBegin('operate_user');
			$xfer += $output->writeString($this->operate_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeString($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeI64($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('open_type');
		$xfer += $output->writeI32($this->open_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_no !== null) {
			
			$xfer += $output->writeFieldBegin('order_no');
			$xfer += $output->writeString($this->order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->firstOpenRightsStatus !== null) {
			
			$xfer += $output->writeFieldBegin('firstOpenRightsStatus');
			$xfer += $output->writeString($this->firstOpenRightsStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->use_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('use_order_no');
			$xfer += $output->writeString($this->use_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uds_unique_code !== null) {
			
			$xfer += $output->writeFieldBegin('uds_unique_code');
			$xfer += $output->writeString($this->uds_unique_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('cancelStatus');
		$xfer += $output->writeI32($this->cancelStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderFriendCardStatus');
		$xfer += $output->writeI32($this->orderFriendCardStatus);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->reason !== null) {
			
			$xfer += $output->writeFieldBegin('reason');
			$xfer += $output->writeString($this->reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hasPriceProtection !== null) {
			
			$xfer += $output->writeFieldBegin('hasPriceProtection');
			$xfer += $output->writeBool($this->hasPriceProtection);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipCoinNum !== null) {
			
			$xfer += $output->writeFieldBegin('vipCoinNum');
			$xfer += $output->writeI32($this->vipCoinNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipCoinCreateTime !== null) {
			
			$xfer += $output->writeFieldBegin('vipCoinCreateTime');
			$xfer += $output->writeString($this->vipCoinCreateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->normalPayAmount !== null) {
			
			$xfer += $output->writeFieldBegin('normalPayAmount');
			$xfer += $output->writeString($this->normalPayAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->svip_op_re_id !== null) {
			
			$xfer += $output->writeFieldBegin('svip_op_re_id');
			$xfer += $output->writeI64($this->svip_op_re_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>