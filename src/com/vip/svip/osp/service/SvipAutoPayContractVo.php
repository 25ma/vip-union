<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipAutoPayContractVo {
	
	static $_TSPEC;
	public $user_id = null;
	public $contract_sn = null;
	public $wx_order_sn = null;
	public $status = null;
	public $open_goods_id = null;
	public $open_goods_price = null;
	public $auto_goods_id = null;
	public $auto_goods_price = null;
	public $default_price = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'user_id'
			),
			2 => array(
			'var' => 'contract_sn'
			),
			3 => array(
			'var' => 'wx_order_sn'
			),
			4 => array(
			'var' => 'status'
			),
			5 => array(
			'var' => 'open_goods_id'
			),
			6 => array(
			'var' => 'open_goods_price'
			),
			7 => array(
			'var' => 'auto_goods_id'
			),
			8 => array(
			'var' => 'auto_goods_price'
			),
			9 => array(
			'var' => 'default_price'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['user_id'])){
				
				$this->user_id = $vals['user_id'];
			}
			
			
			if (isset($vals['contract_sn'])){
				
				$this->contract_sn = $vals['contract_sn'];
			}
			
			
			if (isset($vals['wx_order_sn'])){
				
				$this->wx_order_sn = $vals['wx_order_sn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['open_goods_id'])){
				
				$this->open_goods_id = $vals['open_goods_id'];
			}
			
			
			if (isset($vals['open_goods_price'])){
				
				$this->open_goods_price = $vals['open_goods_price'];
			}
			
			
			if (isset($vals['auto_goods_id'])){
				
				$this->auto_goods_id = $vals['auto_goods_id'];
			}
			
			
			if (isset($vals['auto_goods_price'])){
				
				$this->auto_goods_price = $vals['auto_goods_price'];
			}
			
			
			if (isset($vals['default_price'])){
				
				$this->default_price = $vals['default_price'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipAutoPayContractVo';
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
			
			
			
			
			if ("contract_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contract_sn);
				
			}
			
			
			
			
			if ("wx_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wx_order_sn);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("open_goods_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->open_goods_id);
				
			}
			
			
			
			
			if ("open_goods_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->open_goods_price);
				
			}
			
			
			
			
			if ("auto_goods_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auto_goods_id);
				
			}
			
			
			
			
			if ("auto_goods_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auto_goods_price);
				
			}
			
			
			
			
			if ("default_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->default_price);
				
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
		
		if($this->user_id !== null) {
			
			$xfer += $output->writeFieldBegin('user_id');
			$xfer += $output->writeI64($this->user_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contract_sn !== null) {
			
			$xfer += $output->writeFieldBegin('contract_sn');
			$xfer += $output->writeString($this->contract_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wx_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('wx_order_sn');
			$xfer += $output->writeString($this->wx_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->open_goods_id !== null) {
			
			$xfer += $output->writeFieldBegin('open_goods_id');
			$xfer += $output->writeString($this->open_goods_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->open_goods_price !== null) {
			
			$xfer += $output->writeFieldBegin('open_goods_price');
			$xfer += $output->writeString($this->open_goods_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auto_goods_id !== null) {
			
			$xfer += $output->writeFieldBegin('auto_goods_id');
			$xfer += $output->writeString($this->auto_goods_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auto_goods_price !== null) {
			
			$xfer += $output->writeFieldBegin('auto_goods_price');
			$xfer += $output->writeString($this->auto_goods_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->default_price !== null) {
			
			$xfer += $output->writeFieldBegin('default_price');
			$xfer += $output->writeString($this->default_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>