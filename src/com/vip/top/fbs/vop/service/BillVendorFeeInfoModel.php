<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\fbs\vop\service;

class BillVendorFeeInfoModel {
	
	static $_TSPEC;
	public $serial_id = null;
	public $transport_no = null;
	public $delivery_type = null;
	public $cust_name = null;
	public $biz_date = null;
	public $fee_item = null;
	public $fee_money = null;
	public $need_fee_sub_order_info_list = null;
	public $expand_field = null;
	public $assist_verify_info = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serial_id'
			),
			2 => array(
			'var' => 'transport_no'
			),
			3 => array(
			'var' => 'delivery_type'
			),
			4 => array(
			'var' => 'cust_name'
			),
			5 => array(
			'var' => 'biz_date'
			),
			6 => array(
			'var' => 'fee_item'
			),
			7 => array(
			'var' => 'fee_money'
			),
			8 => array(
			'var' => 'need_fee_sub_order_info_list'
			),
			9 => array(
			'var' => 'expand_field'
			),
			10 => array(
			'var' => 'assist_verify_info'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serial_id'])){
				
				$this->serial_id = $vals['serial_id'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['delivery_type'])){
				
				$this->delivery_type = $vals['delivery_type'];
			}
			
			
			if (isset($vals['cust_name'])){
				
				$this->cust_name = $vals['cust_name'];
			}
			
			
			if (isset($vals['biz_date'])){
				
				$this->biz_date = $vals['biz_date'];
			}
			
			
			if (isset($vals['fee_item'])){
				
				$this->fee_item = $vals['fee_item'];
			}
			
			
			if (isset($vals['fee_money'])){
				
				$this->fee_money = $vals['fee_money'];
			}
			
			
			if (isset($vals['need_fee_sub_order_info_list'])){
				
				$this->need_fee_sub_order_info_list = $vals['need_fee_sub_order_info_list'];
			}
			
			
			if (isset($vals['expand_field'])){
				
				$this->expand_field = $vals['expand_field'];
			}
			
			
			if (isset($vals['assist_verify_info'])){
				
				$this->assist_verify_info = $vals['assist_verify_info'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BillVendorFeeInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("serial_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serial_id);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("delivery_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_type);
				
			}
			
			
			
			
			if ("cust_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cust_name);
				
			}
			
			
			
			
			if ("biz_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->biz_date);
				
			}
			
			
			
			
			if ("fee_item" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fee_item);
				
			}
			
			
			
			
			if ("fee_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fee_money);
				
			}
			
			
			
			
			if ("need_fee_sub_order_info_list" == $schemeField){
				
				$needSkip = false;
				
				$this->need_fee_sub_order_info_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\top\fbs\vop\service\BillVendorNeedFeeSubOrderInfo();
						$elem0->read($input);
						
						$this->need_fee_sub_order_info_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("expand_field" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expand_field);
				
			}
			
			
			
			
			if ("assist_verify_info" == $schemeField){
				
				$needSkip = false;
				
				$this->assist_verify_info = new \com\vip\top\fbs\vop\service\BillVendorFeeAssistVerifyInfo();
				$this->assist_verify_info->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('serial_id');
		$xfer += $output->writeString($this->serial_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery_type');
		$xfer += $output->writeString($this->delivery_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cust_name !== null) {
			
			$xfer += $output->writeFieldBegin('cust_name');
			$xfer += $output->writeString($this->cust_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('biz_date');
		$xfer += $output->writeString($this->biz_date);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('fee_item');
		$xfer += $output->writeString($this->fee_item);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('fee_money');
		$xfer += $output->writeString($this->fee_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('need_fee_sub_order_info_list');
		
		if (!is_array($this->need_fee_sub_order_info_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->need_fee_sub_order_info_list as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->expand_field !== null) {
			
			$xfer += $output->writeFieldBegin('expand_field');
			$xfer += $output->writeString($this->expand_field);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->assist_verify_info !== null) {
			
			$xfer += $output->writeFieldBegin('assist_verify_info');
			
			if (!is_object($this->assist_verify_info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->assist_verify_info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>