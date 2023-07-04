<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class OrderModuleWOP {
	
	static $_TSPEC;
	public $vendor_ids = null;
	public $stats = null;
	public $order_sns = null;
	public $sale_types = null;
	public $buyer = null;
	public $mobile = null;
	public $need_invoice = null;
	public $invoice_status = null;
	public $is_export = null;
	public $less_last_modified_time = null;
	public $greater_last_modified_time = null;
	public $less_add_time = null;
	public $greater_add_time = null;
	public $pop_track_stat = null;
	public $carriers_code = null;
	public $store_id = null;
	public $invoice_type = null;
	public $waiting_refuse = null;
	public $store_id_list = null;
	public $encrypt_flag = null;
	public $yun_pei_type = null;
	public $ware_house = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_ids'
			),
			2 => array(
			'var' => 'stats'
			),
			3 => array(
			'var' => 'order_sns'
			),
			4 => array(
			'var' => 'sale_types'
			),
			5 => array(
			'var' => 'buyer'
			),
			6 => array(
			'var' => 'mobile'
			),
			7 => array(
			'var' => 'need_invoice'
			),
			8 => array(
			'var' => 'invoice_status'
			),
			9 => array(
			'var' => 'is_export'
			),
			10 => array(
			'var' => 'less_last_modified_time'
			),
			11 => array(
			'var' => 'greater_last_modified_time'
			),
			12 => array(
			'var' => 'less_add_time'
			),
			13 => array(
			'var' => 'greater_add_time'
			),
			14 => array(
			'var' => 'pop_track_stat'
			),
			15 => array(
			'var' => 'carriers_code'
			),
			16 => array(
			'var' => 'store_id'
			),
			17 => array(
			'var' => 'invoice_type'
			),
			18 => array(
			'var' => 'waiting_refuse'
			),
			19 => array(
			'var' => 'store_id_list'
			),
			20 => array(
			'var' => 'encrypt_flag'
			),
			21 => array(
			'var' => 'yun_pei_type'
			),
			22 => array(
			'var' => 'ware_house'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_ids'])){
				
				$this->vendor_ids = $vals['vendor_ids'];
			}
			
			
			if (isset($vals['stats'])){
				
				$this->stats = $vals['stats'];
			}
			
			
			if (isset($vals['order_sns'])){
				
				$this->order_sns = $vals['order_sns'];
			}
			
			
			if (isset($vals['sale_types'])){
				
				$this->sale_types = $vals['sale_types'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['need_invoice'])){
				
				$this->need_invoice = $vals['need_invoice'];
			}
			
			
			if (isset($vals['invoice_status'])){
				
				$this->invoice_status = $vals['invoice_status'];
			}
			
			
			if (isset($vals['is_export'])){
				
				$this->is_export = $vals['is_export'];
			}
			
			
			if (isset($vals['less_last_modified_time'])){
				
				$this->less_last_modified_time = $vals['less_last_modified_time'];
			}
			
			
			if (isset($vals['greater_last_modified_time'])){
				
				$this->greater_last_modified_time = $vals['greater_last_modified_time'];
			}
			
			
			if (isset($vals['less_add_time'])){
				
				$this->less_add_time = $vals['less_add_time'];
			}
			
			
			if (isset($vals['greater_add_time'])){
				
				$this->greater_add_time = $vals['greater_add_time'];
			}
			
			
			if (isset($vals['pop_track_stat'])){
				
				$this->pop_track_stat = $vals['pop_track_stat'];
			}
			
			
			if (isset($vals['carriers_code'])){
				
				$this->carriers_code = $vals['carriers_code'];
			}
			
			
			if (isset($vals['store_id'])){
				
				$this->store_id = $vals['store_id'];
			}
			
			
			if (isset($vals['invoice_type'])){
				
				$this->invoice_type = $vals['invoice_type'];
			}
			
			
			if (isset($vals['waiting_refuse'])){
				
				$this->waiting_refuse = $vals['waiting_refuse'];
			}
			
			
			if (isset($vals['store_id_list'])){
				
				$this->store_id_list = $vals['store_id_list'];
			}
			
			
			if (isset($vals['encrypt_flag'])){
				
				$this->encrypt_flag = $vals['encrypt_flag'];
			}
			
			
			if (isset($vals['yun_pei_type'])){
				
				$this->yun_pei_type = $vals['yun_pei_type'];
			}
			
			
			if (isset($vals['ware_house'])){
				
				$this->ware_house = $vals['ware_house'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderModuleWOP';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_ids" == $schemeField){
				
				$needSkip = false;
				
				$this->vendor_ids = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI32($elem0); 
						
						$this->vendor_ids[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("stats" == $schemeField){
				
				$needSkip = false;
				
				$this->stats = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->stats[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("order_sns" == $schemeField){
				
				$needSkip = false;
				
				$this->order_sns = array();
				$_size2 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->order_sns[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("sale_types" == $schemeField){
				
				$needSkip = false;
				
				$this->sale_types = array();
				$_size3 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readI32($elem3); 
						
						$this->sale_types[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("need_invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->need_invoice);
				
			}
			
			
			
			
			if ("invoice_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_status);
				
			}
			
			
			
			
			if ("is_export" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_export);
				
			}
			
			
			
			
			if ("less_last_modified_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->less_last_modified_time);
				
			}
			
			
			
			
			if ("greater_last_modified_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greater_last_modified_time);
				
			}
			
			
			
			
			if ("less_add_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->less_add_time);
				
			}
			
			
			
			
			if ("greater_add_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greater_add_time);
				
			}
			
			
			
			
			if ("pop_track_stat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pop_track_stat);
				
			}
			
			
			
			
			if ("carriers_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_code);
				
			}
			
			
			
			
			if ("store_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_id);
				
			}
			
			
			
			
			if ("invoice_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_type);
				
			}
			
			
			
			
			if ("waiting_refuse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->waiting_refuse);
				
			}
			
			
			
			
			if ("store_id_list" == $schemeField){
				
				$needSkip = false;
				
				$this->store_id_list = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readString($elem4);
						
						$this->store_id_list[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("encrypt_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->encrypt_flag); 
				
			}
			
			
			
			
			if ("yun_pei_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->yun_pei_type); 
				
			}
			
			
			
			
			if ("ware_house" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ware_house);
				
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
		
		if($this->vendor_ids !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_ids');
			
			if (!is_array($this->vendor_ids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->vendor_ids as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stats !== null) {
			
			$xfer += $output->writeFieldBegin('stats');
			
			if (!is_array($this->stats)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->stats as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sns !== null) {
			
			$xfer += $output->writeFieldBegin('order_sns');
			
			if (!is_array($this->order_sns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->order_sns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_types !== null) {
			
			$xfer += $output->writeFieldBegin('sale_types');
			
			if (!is_array($this->sale_types)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->sale_types as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->need_invoice !== null) {
			
			$xfer += $output->writeFieldBegin('need_invoice');
			$xfer += $output->writeString($this->need_invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_status !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_status');
			$xfer += $output->writeString($this->invoice_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_export !== null) {
			
			$xfer += $output->writeFieldBegin('is_export');
			$xfer += $output->writeString($this->is_export);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->less_last_modified_time !== null) {
			
			$xfer += $output->writeFieldBegin('less_last_modified_time');
			$xfer += $output->writeString($this->less_last_modified_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->greater_last_modified_time !== null) {
			
			$xfer += $output->writeFieldBegin('greater_last_modified_time');
			$xfer += $output->writeString($this->greater_last_modified_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->less_add_time !== null) {
			
			$xfer += $output->writeFieldBegin('less_add_time');
			$xfer += $output->writeString($this->less_add_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->greater_add_time !== null) {
			
			$xfer += $output->writeFieldBegin('greater_add_time');
			$xfer += $output->writeString($this->greater_add_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pop_track_stat !== null) {
			
			$xfer += $output->writeFieldBegin('pop_track_stat');
			$xfer += $output->writeString($this->pop_track_stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriers_code !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_code');
			$xfer += $output->writeString($this->carriers_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_id !== null) {
			
			$xfer += $output->writeFieldBegin('store_id');
			$xfer += $output->writeString($this->store_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_type !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_type');
			$xfer += $output->writeString($this->invoice_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->waiting_refuse !== null) {
			
			$xfer += $output->writeFieldBegin('waiting_refuse');
			$xfer += $output->writeString($this->waiting_refuse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_id_list !== null) {
			
			$xfer += $output->writeFieldBegin('store_id_list');
			
			if (!is_array($this->store_id_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->store_id_list as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->encrypt_flag !== null) {
			
			$xfer += $output->writeFieldBegin('encrypt_flag');
			$xfer += $output->writeI32($this->encrypt_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->yun_pei_type !== null) {
			
			$xfer += $output->writeFieldBegin('yun_pei_type');
			$xfer += $output->writeI32($this->yun_pei_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ware_house !== null) {
			
			$xfer += $output->writeFieldBegin('ware_house');
			$xfer += $output->writeString($this->ware_house);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>