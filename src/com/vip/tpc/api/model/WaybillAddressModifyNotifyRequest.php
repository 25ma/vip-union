<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class WaybillAddressModifyNotifyRequest {
	
	static $_TSPEC;
	public $carrier_code = null;
	public $transport_no = null;
	public $sender_province = null;
	public $receiver_province = null;
	public $sender_city = null;
	public $receiver_city = null;
	public $sender_county = null;
	public $receiver_county = null;
	public $sender_town = null;
	public $receiver_town = null;
	public $sender_address = null;
	public $reciver_address = null;
	
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
			'var' => 'sender_province'
			),
			4 => array(
			'var' => 'receiver_province'
			),
			5 => array(
			'var' => 'sender_city'
			),
			6 => array(
			'var' => 'receiver_city'
			),
			7 => array(
			'var' => 'sender_county'
			),
			8 => array(
			'var' => 'receiver_county'
			),
			9 => array(
			'var' => 'sender_town'
			),
			10 => array(
			'var' => 'receiver_town'
			),
			11 => array(
			'var' => 'sender_address'
			),
			12 => array(
			'var' => 'reciver_address'
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
			
			
			if (isset($vals['sender_province'])){
				
				$this->sender_province = $vals['sender_province'];
			}
			
			
			if (isset($vals['receiver_province'])){
				
				$this->receiver_province = $vals['receiver_province'];
			}
			
			
			if (isset($vals['sender_city'])){
				
				$this->sender_city = $vals['sender_city'];
			}
			
			
			if (isset($vals['receiver_city'])){
				
				$this->receiver_city = $vals['receiver_city'];
			}
			
			
			if (isset($vals['sender_county'])){
				
				$this->sender_county = $vals['sender_county'];
			}
			
			
			if (isset($vals['receiver_county'])){
				
				$this->receiver_county = $vals['receiver_county'];
			}
			
			
			if (isset($vals['sender_town'])){
				
				$this->sender_town = $vals['sender_town'];
			}
			
			
			if (isset($vals['receiver_town'])){
				
				$this->receiver_town = $vals['receiver_town'];
			}
			
			
			if (isset($vals['sender_address'])){
				
				$this->sender_address = $vals['sender_address'];
			}
			
			
			if (isset($vals['reciver_address'])){
				
				$this->reciver_address = $vals['reciver_address'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillAddressModifyNotifyRequest';
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
			
			
			
			
			if ("sender_province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_province);
				
			}
			
			
			
			
			if ("receiver_province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_province);
				
			}
			
			
			
			
			if ("sender_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_city);
				
			}
			
			
			
			
			if ("receiver_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_city);
				
			}
			
			
			
			
			if ("sender_county" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_county);
				
			}
			
			
			
			
			if ("receiver_county" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_county);
				
			}
			
			
			
			
			if ("sender_town" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_town);
				
			}
			
			
			
			
			if ("receiver_town" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_town);
				
			}
			
			
			
			
			if ("sender_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sender_address);
				
			}
			
			
			
			
			if ("reciver_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reciver_address);
				
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
		
		$xfer += $output->writeFieldBegin('sender_province');
		$xfer += $output->writeString($this->sender_province);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receiver_province');
		$xfer += $output->writeString($this->receiver_province);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sender_city');
		$xfer += $output->writeString($this->sender_city);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receiver_city');
		$xfer += $output->writeString($this->receiver_city);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sender_county');
		$xfer += $output->writeString($this->sender_county);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receiver_county');
		$xfer += $output->writeString($this->receiver_county);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sender_town !== null) {
			
			$xfer += $output->writeFieldBegin('sender_town');
			$xfer += $output->writeString($this->sender_town);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_town !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_town');
			$xfer += $output->writeString($this->receiver_town);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sender_address !== null) {
			
			$xfer += $output->writeFieldBegin('sender_address');
			$xfer += $output->writeString($this->sender_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reciver_address !== null) {
			
			$xfer += $output->writeFieldBegin('reciver_address');
			$xfer += $output->writeString($this->reciver_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>