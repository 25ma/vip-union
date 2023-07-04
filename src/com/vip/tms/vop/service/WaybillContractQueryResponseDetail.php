<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillContractQueryResponseDetail {
	
	static $_TSPEC;
	public $contract_id = null;
	public $store_id = null;
	public $apply_time = null;
	public $carrier_code = null;
	public $carrier_name = null;
	public $carrier_mode = null;
	public $carrier_card_no = null;
	public $carrier_node_code = null;
	public $carrier_node_name = null;
	public $store_address = null;
	public $linkman_name = null;
	public $linkman_tel = null;
	public $contract_status = null;
	public $feedback_man = null;
	public $feedback_time = null;
	public $feedback_remark = null;
	public $is_delete = null;
	public $extend_field_configs = null;
	public $extend_field_map = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'contract_id'
			),
			2 => array(
			'var' => 'store_id'
			),
			3 => array(
			'var' => 'apply_time'
			),
			4 => array(
			'var' => 'carrier_code'
			),
			5 => array(
			'var' => 'carrier_name'
			),
			6 => array(
			'var' => 'carrier_mode'
			),
			7 => array(
			'var' => 'carrier_card_no'
			),
			8 => array(
			'var' => 'carrier_node_code'
			),
			9 => array(
			'var' => 'carrier_node_name'
			),
			10 => array(
			'var' => 'store_address'
			),
			11 => array(
			'var' => 'linkman_name'
			),
			12 => array(
			'var' => 'linkman_tel'
			),
			13 => array(
			'var' => 'contract_status'
			),
			14 => array(
			'var' => 'feedback_man'
			),
			15 => array(
			'var' => 'feedback_time'
			),
			16 => array(
			'var' => 'feedback_remark'
			),
			17 => array(
			'var' => 'is_delete'
			),
			18 => array(
			'var' => 'extend_field_configs'
			),
			19 => array(
			'var' => 'extend_field_map'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['contract_id'])){
				
				$this->contract_id = $vals['contract_id'];
			}
			
			
			if (isset($vals['store_id'])){
				
				$this->store_id = $vals['store_id'];
			}
			
			
			if (isset($vals['apply_time'])){
				
				$this->apply_time = $vals['apply_time'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
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
			
			
			if (isset($vals['carrier_node_name'])){
				
				$this->carrier_node_name = $vals['carrier_node_name'];
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
			
			
			if (isset($vals['contract_status'])){
				
				$this->contract_status = $vals['contract_status'];
			}
			
			
			if (isset($vals['feedback_man'])){
				
				$this->feedback_man = $vals['feedback_man'];
			}
			
			
			if (isset($vals['feedback_time'])){
				
				$this->feedback_time = $vals['feedback_time'];
			}
			
			
			if (isset($vals['feedback_remark'])){
				
				$this->feedback_remark = $vals['feedback_remark'];
			}
			
			
			if (isset($vals['is_delete'])){
				
				$this->is_delete = $vals['is_delete'];
			}
			
			
			if (isset($vals['extend_field_configs'])){
				
				$this->extend_field_configs = $vals['extend_field_configs'];
			}
			
			
			if (isset($vals['extend_field_map'])){
				
				$this->extend_field_map = $vals['extend_field_map'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillContractQueryResponseDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("contract_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contract_id);
				
			}
			
			
			
			
			if ("store_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_id);
				
			}
			
			
			
			
			if ("apply_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->apply_time); 
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
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
			
			
			
			
			if ("carrier_node_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_node_name);
				
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
			
			
			
			
			if ("contract_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contract_status);
				
			}
			
			
			
			
			if ("feedback_man" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->feedback_man);
				
			}
			
			
			
			
			if ("feedback_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->feedback_time); 
				
			}
			
			
			
			
			if ("feedback_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->feedback_remark);
				
			}
			
			
			
			
			if ("is_delete" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_delete); 
				
			}
			
			
			
			
			if ("extend_field_configs" == $schemeField){
				
				$needSkip = false;
				
				$this->extend_field_configs = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tms\pegasus\service\FieldConfig();
						$elem1->read($input);
						
						$this->extend_field_configs[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("extend_field_map" == $schemeField){
				
				$needSkip = false;
				
				$this->extend_field_map = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key2 = '';
						$input->readString($key2);
						
						$val2 = '';
						$input->readString($val2);
						
						$this->extend_field_map[$key2] = $val2;
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
		
		if($this->contract_id !== null) {
			
			$xfer += $output->writeFieldBegin('contract_id');
			$xfer += $output->writeString($this->contract_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_id !== null) {
			
			$xfer += $output->writeFieldBegin('store_id');
			$xfer += $output->writeString($this->store_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->apply_time !== null) {
			
			$xfer += $output->writeFieldBegin('apply_time');
			$xfer += $output->writeI64($this->apply_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_name');
			$xfer += $output->writeString($this->carrier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_mode !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_mode');
			$xfer += $output->writeString($this->carrier_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->carrier_node_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_node_name');
			$xfer += $output->writeString($this->carrier_node_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_address !== null) {
			
			$xfer += $output->writeFieldBegin('store_address');
			$xfer += $output->writeString($this->store_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->linkman_name !== null) {
			
			$xfer += $output->writeFieldBegin('linkman_name');
			$xfer += $output->writeString($this->linkman_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->linkman_tel !== null) {
			
			$xfer += $output->writeFieldBegin('linkman_tel');
			$xfer += $output->writeString($this->linkman_tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contract_status !== null) {
			
			$xfer += $output->writeFieldBegin('contract_status');
			$xfer += $output->writeString($this->contract_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feedback_man !== null) {
			
			$xfer += $output->writeFieldBegin('feedback_man');
			$xfer += $output->writeString($this->feedback_man);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feedback_time !== null) {
			
			$xfer += $output->writeFieldBegin('feedback_time');
			$xfer += $output->writeI64($this->feedback_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feedback_remark !== null) {
			
			$xfer += $output->writeFieldBegin('feedback_remark');
			$xfer += $output->writeString($this->feedback_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_delete !== null) {
			
			$xfer += $output->writeFieldBegin('is_delete');
			$xfer += $output->writeI32($this->is_delete);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extend_field_configs !== null) {
			
			$xfer += $output->writeFieldBegin('extend_field_configs');
			
			if (!is_array($this->extend_field_configs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->extend_field_configs as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
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