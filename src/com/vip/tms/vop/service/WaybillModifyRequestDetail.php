<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillModifyRequestDetail {
	
	static $_TSPEC;
	public $transport_no = null;
	public $order_channel = null;
	public $owner_id = null;
	public $waybill_cust = null;
	public $sender_modify_address = null;
	public $receiver_address = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_no'
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
			'var' => 'sender_modify_address'
			),
			6 => array(
			'var' => 'receiver_address'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
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
			
			
			if (isset($vals['sender_modify_address'])){
				
				$this->sender_modify_address = $vals['sender_modify_address'];
			}
			
			
			if (isset($vals['receiver_address'])){
				
				$this->receiver_address = $vals['receiver_address'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillModifyRequestDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
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
			
			
			
			
			if ("sender_modify_address" == $schemeField){
				
				$needSkip = false;
				
				$this->sender_modify_address = new \com\vip\tms\vop\service\WaybillModifyAddressDto();
				$this->sender_modify_address->read($input);
				
			}
			
			
			
			
			if ("receiver_address" == $schemeField){
				
				$needSkip = false;
				
				$this->receiver_address = new \com\vip\tms\vop\service\WaybillAddressDto();
				$this->receiver_address->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
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
		
		if($this->sender_modify_address !== null) {
			
			$xfer += $output->writeFieldBegin('sender_modify_address');
			
			if (!is_object($this->sender_modify_address)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->sender_modify_address->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_address !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_address');
			
			if (!is_object($this->receiver_address)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->receiver_address->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>