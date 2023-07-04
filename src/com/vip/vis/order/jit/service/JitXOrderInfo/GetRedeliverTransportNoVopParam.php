<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\JitXOrderInfo;

class GetRedeliverTransportNoVopParam {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_sn = null;
	public $third_cust_code = null;
	public $address = null;
	public $delivery_warehouse = null;
	public $is_pre_transport = null;
	public $transport_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'third_cust_code'
			),
			4 => array(
			'var' => 'address'
			),
			5 => array(
			'var' => 'delivery_warehouse'
			),
			7 => array(
			'var' => 'is_pre_transport'
			),
			8 => array(
			'var' => 'transport_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['third_cust_code'])){
				
				$this->third_cust_code = $vals['third_cust_code'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['delivery_warehouse'])){
				
				$this->delivery_warehouse = $vals['delivery_warehouse'];
			}
			
			
			if (isset($vals['is_pre_transport'])){
				
				$this->is_pre_transport = $vals['is_pre_transport'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetRedeliverTransportNoVopParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("third_cust_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_cust_code);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse);
				
			}
			
			
			
			
			if ("is_pre_transport" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_pre_transport); 
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('third_cust_code');
		$xfer += $output->writeString($this->third_cust_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse');
			$xfer += $output->writeString($this->delivery_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('is_pre_transport');
		$xfer += $output->writeI32($this->is_pre_transport);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>