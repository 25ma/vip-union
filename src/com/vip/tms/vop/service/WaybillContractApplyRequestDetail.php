<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillContractApplyRequestDetail {
	
	static $_TSPEC;
	public $store_id = null;
	public $contract_id = null;
	public $apply_time = null;
	public $carrier_code = null;
	public $carrier_mode = null;
	public $carrier_card_no = null;
	public $carrier_node_code = null;
	public $store_address = null;
	public $linkman_name = null;
	public $linkman_tel = null;
	public $warehouse_code = null;
	public $address_code = null;
	public $extend_field_map = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'store_id'
			),
			2 => array(
			'var' => 'contract_id'
			),
			3 => array(
			'var' => 'apply_time'
			),
			4 => array(
			'var' => 'carrier_code'
			),
			5 => array(
			'var' => 'carrier_mode'
			),
			6 => array(
			'var' => 'carrier_card_no'
			),
			7 => array(
			'var' => 'carrier_node_code'
			),
			8 => array(
			'var' => 'store_address'
			),
			9 => array(
			'var' => 'linkman_name'
			),
			10 => array(
			'var' => 'linkman_tel'
			),
			11 => array(
			'var' => 'warehouse_code'
			),
			12 => array(
			'var' => 'address_code'
			),
			13 => array(
			'var' => 'extend_field_map'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['store_id'])){
				
				$this->store_id = $vals['store_id'];
			}
			
			
			if (isset($vals['contract_id'])){
				
				$this->contract_id = $vals['contract_id'];
			}
			
			
			if (isset($vals['apply_time'])){
				
				$this->apply_time = $vals['apply_time'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_mode'])){
				
				$this->carrier_mode = $vals['carrier_mode'];
			}
			
			
			if (isset($vals['carrier_card_no'])){
				
				$this->carrier_card_no = $vals['carrier_card_no'];
			}
			
			
			if (isset($vals['carrier_node_code'])){
				
				$this->carrier_node_code = $vals['carrier_node_code'];
			}
			
			
			if (isset($vals['store_address'])){
				
				$this->store_address = $vals['store_address'];
			}
			
			
			if (isset($vals['linkman_name'])){
				
				$this->linkman_name = $vals['linkman_name'];
			}
			
			
			if (isset($vals['linkman_tel'])){
				
				$this->linkman_tel = $vals['linkman_tel'];
			}
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['address_code'])){
				
				$this->address_code = $vals['address_code'];
			}
			
			
			if (isset($vals['extend_field_map'])){
				
				$this->extend_field_map = $vals['extend_field_map'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillContractApplyRequestDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("store_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_id);
				
			}
			
			
			
			
			if ("contract_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contract_id);
				
			}
			
			
			
			
			if ("apply_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->apply_time); 
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("carrier_mode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_mode);
				
			}
			
			
			
			
			if ("carrier_card_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_card_no);
				
			}
			
			
			
			
			if ("carrier_node_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_node_code);
				
			}
			
			
			
			
			if ("store_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_address);
				
			}
			
			
			
			
			if ("linkman_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->linkman_name);
				
			}
			
			
			
			
			if ("linkman_tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->linkman_tel);
				
			}
			
			
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("address_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address_code);
				
			}
			
			
			
			
			if ("extend_field_map" == $schemeField){
				
				$needSkip = false;
				
				$this->extend_field_map = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->extend_field_map[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		if($this->store_id !== null) {
			
			$xfer += $output->writeFieldBegin('store_id');
			$xfer += $output->writeString($this->store_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('contract_id');
		$xfer += $output->writeString($this->contract_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('apply_time');
		$xfer += $output->writeI64($this->apply_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_mode');
		$xfer += $output->writeString($this->carrier_mode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->carrier_card_no !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_card_no');
			$xfer += $output->writeString($this->carrier_card_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_node_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_node_code');
			$xfer += $output->writeString($this->carrier_node_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('store_address');
		$xfer += $output->writeString($this->store_address);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('linkman_name');
		$xfer += $output->writeString($this->linkman_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('linkman_tel');
		$xfer += $output->writeString($this->linkman_tel);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_code');
			$xfer += $output->writeString($this->warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address_code !== null) {
			
			$xfer += $output->writeFieldBegin('address_code');
			$xfer += $output->writeString($this->address_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extend_field_map !== null) {
			
			$xfer += $output->writeFieldBegin('extend_field_map');
			
			if (!is_array($this->extend_field_map)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->extend_field_map as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>