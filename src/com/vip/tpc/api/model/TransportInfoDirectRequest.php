<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class TransportInfoDirectRequest {
	
	static $_TSPEC;
	public $real_carrier_code = null;
	public $carrier_code = null;
	public $transaction_id = null;
	public $carrier_serial_no = null;
	public $transport_no = null;
	public $sub_transport_nos = null;
	public $biz_type = null;
	public $happened_time = null;
	public $freight = null;
	public $weight = null;
	public $volume = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'real_carrier_code'
			),
			2 => array(
			'var' => 'carrier_code'
			),
			3 => array(
			'var' => 'transaction_id'
			),
			4 => array(
			'var' => 'carrier_serial_no'
			),
			5 => array(
			'var' => 'transport_no'
			),
			6 => array(
			'var' => 'sub_transport_nos'
			),
			7 => array(
			'var' => 'biz_type'
			),
			8 => array(
			'var' => 'happened_time'
			),
			9 => array(
			'var' => 'freight'
			),
			10 => array(
			'var' => 'weight'
			),
			11 => array(
			'var' => 'volume'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['real_carrier_code'])){
				
				$this->real_carrier_code = $vals['real_carrier_code'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['carrier_serial_no'])){
				
				$this->carrier_serial_no = $vals['carrier_serial_no'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['sub_transport_nos'])){
				
				$this->sub_transport_nos = $vals['sub_transport_nos'];
			}
			
			
			if (isset($vals['biz_type'])){
				
				$this->biz_type = $vals['biz_type'];
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
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportInfoDirectRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("real_carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->real_carrier_code);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("carrier_serial_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_serial_no);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("sub_transport_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->sub_transport_nos = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->sub_transport_nos[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("biz_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->biz_type);
				
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
		
		if($this->real_carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('real_carrier_code');
			$xfer += $output->writeString($this->real_carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_serial_no');
		$xfer += $output->writeString($this->carrier_serial_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sub_transport_nos !== null) {
			
			$xfer += $output->writeFieldBegin('sub_transport_nos');
			
			if (!is_array($this->sub_transport_nos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->sub_transport_nos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('biz_type');
		$xfer += $output->writeString($this->biz_type);
		
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>