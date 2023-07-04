<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\JitXOrderInfo;

class JitxSettlementDiscountDetail {
	
	static $_TSPEC;
	public $act_parent_no = null;
	public $act_parent_name = null;
	public $active_type = null;
	public $active_type_name_str = null;
	public $fav_price = null;
	public $act_vendor_rate = null;
	public $vendor_fav_price = null;
	public $vendor_redpacket_count = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'act_parent_no'
			),
			2 => array(
			'var' => 'act_parent_name'
			),
			3 => array(
			'var' => 'active_type'
			),
			4 => array(
			'var' => 'active_type_name_str'
			),
			5 => array(
			'var' => 'fav_price'
			),
			6 => array(
			'var' => 'act_vendor_rate'
			),
			7 => array(
			'var' => 'vendor_fav_price'
			),
			8 => array(
			'var' => 'vendor_redpacket_count'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['act_parent_no'])){
				
				$this->act_parent_no = $vals['act_parent_no'];
			}
			
			
			if (isset($vals['act_parent_name'])){
				
				$this->act_parent_name = $vals['act_parent_name'];
			}
			
			
			if (isset($vals['active_type'])){
				
				$this->active_type = $vals['active_type'];
			}
			
			
			if (isset($vals['active_type_name_str'])){
				
				$this->active_type_name_str = $vals['active_type_name_str'];
			}
			
			
			if (isset($vals['fav_price'])){
				
				$this->fav_price = $vals['fav_price'];
			}
			
			
			if (isset($vals['act_vendor_rate'])){
				
				$this->act_vendor_rate = $vals['act_vendor_rate'];
			}
			
			
			if (isset($vals['vendor_fav_price'])){
				
				$this->vendor_fav_price = $vals['vendor_fav_price'];
			}
			
			
			if (isset($vals['vendor_redpacket_count'])){
				
				$this->vendor_redpacket_count = $vals['vendor_redpacket_count'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'JitxSettlementDiscountDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("act_parent_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->act_parent_no);
				
			}
			
			
			
			
			if ("act_parent_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->act_parent_name);
				
			}
			
			
			
			
			if ("active_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->active_type);
				
			}
			
			
			
			
			if ("active_type_name_str" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->active_type_name_str);
				
			}
			
			
			
			
			if ("fav_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fav_price);
				
			}
			
			
			
			
			if ("act_vendor_rate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->act_vendor_rate);
				
			}
			
			
			
			
			if ("vendor_fav_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_fav_price);
				
			}
			
			
			
			
			if ("vendor_redpacket_count" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_redpacket_count);
				
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
		
		if($this->act_parent_no !== null) {
			
			$xfer += $output->writeFieldBegin('act_parent_no');
			$xfer += $output->writeString($this->act_parent_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->act_parent_name !== null) {
			
			$xfer += $output->writeFieldBegin('act_parent_name');
			$xfer += $output->writeString($this->act_parent_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->active_type !== null) {
			
			$xfer += $output->writeFieldBegin('active_type');
			$xfer += $output->writeString($this->active_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->active_type_name_str !== null) {
			
			$xfer += $output->writeFieldBegin('active_type_name_str');
			$xfer += $output->writeString($this->active_type_name_str);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fav_price !== null) {
			
			$xfer += $output->writeFieldBegin('fav_price');
			$xfer += $output->writeString($this->fav_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->act_vendor_rate !== null) {
			
			$xfer += $output->writeFieldBegin('act_vendor_rate');
			$xfer += $output->writeString($this->act_vendor_rate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_fav_price !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_fav_price');
			$xfer += $output->writeString($this->vendor_fav_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_redpacket_count !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_redpacket_count');
			$xfer += $output->writeString($this->vendor_redpacket_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>