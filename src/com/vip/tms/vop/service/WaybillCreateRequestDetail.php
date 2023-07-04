<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillCreateRequestDetail {
	
	static $_TSPEC;
	public $package_no = null;
	public $order_channel = null;
	public $owner_id = null;
	public $waybill_cust = null;
	public $waybill_package = null;
	public $sender_address = null;
	public $receiver_address = null;
	public $waybill_product_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'package_no'
			),
			2 => array(
			'var' => 'order_channel'
			),
			3 => array(
			'var' => 'owner_id'
			),
			4 => array(
			'var' => 'waybill_cust'
			),
			5 => array(
			'var' => 'waybill_package'
			),
			6 => array(
			'var' => 'sender_address'
			),
			7 => array(
			'var' => 'receiver_address'
			),
			8 => array(
			'var' => 'waybill_product_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['package_no'])){
				
				$this->package_no = $vals['package_no'];
			}
			
			
			if (isset($vals['order_channel'])){
				
				$this->order_channel = $vals['order_channel'];
			}
			
			
			if (isset($vals['owner_id'])){
				
				$this->owner_id = $vals['owner_id'];
			}
			
			
			if (isset($vals['waybill_cust'])){
				
				$this->waybill_cust = $vals['waybill_cust'];
			}
			
			
			if (isset($vals['waybill_package'])){
				
				$this->waybill_package = $vals['waybill_package'];
			}
			
			
			if (isset($vals['sender_address'])){
				
				$this->sender_address = $vals['sender_address'];
			}
			
			
			if (isset($vals['receiver_address'])){
				
				$this->receiver_address = $vals['receiver_address'];
			}
			
			
			if (isset($vals['waybill_product_list'])){
				
				$this->waybill_product_list = $vals['waybill_product_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillCreateRequestDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("package_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_no);
				
			}
			
			
			
			
			if ("order_channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_channel);
				
			}
			
			
			
			
			if ("owner_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->owner_id);
				
			}
			
			
			
			
			if ("waybill_cust" == $schemeField){
				
				$needSkip = false;
				
				$this->waybill_cust = new \com\vip\tms\vop\service\WaybillCustDto();
				$this->waybill_cust->read($input);
				
			}
			
			
			
			
			if ("waybill_package" == $schemeField){
				
				$needSkip = false;
				
				$this->waybill_package = new \com\vip\tms\vop\service\WaybillPackageDto();
				$this->waybill_package->read($input);
				
			}
			
			
			
			
			if ("sender_address" == $schemeField){
				
				$needSkip = false;
				
				$this->sender_address = new \com\vip\tms\vop\service\WaybillAddressDto();
				$this->sender_address->read($input);
				
			}
			
			
			
			
			if ("receiver_address" == $schemeField){
				
				$needSkip = false;
				
				$this->receiver_address = new \com\vip\tms\vop\service\WaybillAddressDto();
				$this->receiver_address->read($input);
				
			}
			
			
			
			
			if ("waybill_product_list" == $schemeField){
				
				$needSkip = false;
				
				$this->waybill_product_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tms\vop\service\WaybillProductDto();
						$elem1->read($input);
						
						$this->waybill_product_list[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('package_no');
		$xfer += $output->writeString($this->package_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_channel');
		$xfer += $output->writeString($this->order_channel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('owner_id');
		$xfer += $output->writeString($this->owner_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('waybill_cust');
		
		if (!is_object($this->waybill_cust)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_cust->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('waybill_package');
		
		if (!is_object($this->waybill_package)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->waybill_package->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sender_address');
		
		if (!is_object($this->sender_address)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->sender_address->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receiver_address');
		
		if (!is_object($this->receiver_address)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->receiver_address->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->waybill_product_list !== null) {
			
			$xfer += $output->writeFieldBegin('waybill_product_list');
			
			if (!is_array($this->waybill_product_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->waybill_product_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>