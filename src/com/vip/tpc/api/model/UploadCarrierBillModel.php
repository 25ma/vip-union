<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class UploadCarrierBillModel {
	
	static $_TSPEC;
	public $carrier_serial_no = null;
	public $transport_no = null;
	public $delivery_type = null;
	public $happened_time = null;
	public $freight = null;
	public $weight = null;
	public $volume = null;
	public $action_type = null;
	public $biz_type = null;
	public $cust_card_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_serial_no'
			),
			2 => array(
			'var' => 'transport_no'
			),
			3 => array(
			'var' => 'delivery_type'
			),
			4 => array(
			'var' => 'happened_time'
			),
			5 => array(
			'var' => 'freight'
			),
			6 => array(
			'var' => 'weight'
			),
			7 => array(
			'var' => 'volume'
			),
			8 => array(
			'var' => 'action_type'
			),
			9 => array(
			'var' => 'biz_type'
			),
			10 => array(
			'var' => 'cust_card_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_serial_no'])){
				
				$this->carrier_serial_no = $vals['carrier_serial_no'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['delivery_type'])){
				
				$this->delivery_type = $vals['delivery_type'];
			}
			
			
			if (isset($vals['happened_time'])){
				
				$this->happened_time = $vals['happened_time'];
			}
			
			
			if (isset($vals['freight'])){
				
				$this->freight = $vals['freight'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['action_type'])){
				
				$this->action_type = $vals['action_type'];
			}
			
			
			if (isset($vals['biz_type'])){
				
				$this->biz_type = $vals['biz_type'];
			}
			
			
			if (isset($vals['cust_card_no'])){
				
				$this->cust_card_no = $vals['cust_card_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UploadCarrierBillModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrier_serial_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_serial_no);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("delivery_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->delivery_type); 
				
			}
			
			
			
			
			if ("happened_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->happened_time); 
				
			}
			
			
			
			
			if ("freight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->freight);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->weight);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->volume);
				
			}
			
			
			
			
			if ("action_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->action_type); 
				
			}
			
			
			
			
			if ("biz_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->biz_type); 
				
			}
			
			
			
			
			if ("cust_card_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cust_card_no);
				
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
		
		if($this->carrier_serial_no !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_serial_no');
			$xfer += $output->writeString($this->carrier_serial_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery_type');
		$xfer += $output->writeI32($this->delivery_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('happened_time');
		$xfer += $output->writeI64($this->happened_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->freight !== null) {
			
			$xfer += $output->writeFieldBegin('freight');
			$xfer += $output->writeDouble($this->freight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeDouble($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volume !== null) {
			
			$xfer += $output->writeFieldBegin('volume');
			$xfer += $output->writeDouble($this->volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('action_type');
		$xfer += $output->writeI32($this->action_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->biz_type !== null) {
			
			$xfer += $output->writeFieldBegin('biz_type');
			$xfer += $output->writeI32($this->biz_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cust_card_no !== null) {
			
			$xfer += $output->writeFieldBegin('cust_card_no');
			$xfer += $output->writeString($this->cust_card_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>