<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class WaybillRiskInfoRequest {
	
	static $_TSPEC;
	public $carrier_code = null;
	public $transport_no = null;
	public $order_id = null;
	public $operate_flag = null;
	public $operate_time = null;
	public $forward_address = null;
	public $mobile = null;
	public $tel = null;
	public $consignee = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_code'
			),
			2 => array(
			'var' => 'transport_no'
			),
			3 => array(
			'var' => 'order_id'
			),
			4 => array(
			'var' => 'operate_flag'
			),
			5 => array(
			'var' => 'operate_time'
			),
			6 => array(
			'var' => 'forward_address'
			),
			7 => array(
			'var' => 'mobile'
			),
			8 => array(
			'var' => 'tel'
			),
			9 => array(
			'var' => 'consignee'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['operate_flag'])){
				
				$this->operate_flag = $vals['operate_flag'];
			}
			
			
			if (isset($vals['operate_time'])){
				
				$this->operate_time = $vals['operate_time'];
			}
			
			
			if (isset($vals['forward_address'])){
				
				$this->forward_address = $vals['forward_address'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['consignee'])){
				
				$this->consignee = $vals['consignee'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillRiskInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("operate_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operate_flag); 
				
			}
			
			
			
			
			if ("operate_time" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operate_time); 
				
			}
			
			
			
			
			if ("forward_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->forward_address);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("consignee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignee);
				
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
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operate_flag');
		$xfer += $output->writeI32($this->operate_flag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operate_time');
		$xfer += $output->writeI32($this->operate_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->forward_address !== null) {
			
			$xfer += $output->writeFieldBegin('forward_address');
			$xfer += $output->writeString($this->forward_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consignee !== null) {
			
			$xfer += $output->writeFieldBegin('consignee');
			$xfer += $output->writeString($this->consignee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>