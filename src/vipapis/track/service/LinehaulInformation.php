<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\track\service;

class LinehaulInformation {
	
	static $_TSPEC;
	public $transport_type = null;
	public $mawb = null;
	public $origin_port = null;
	public $origin_country = null;
	public $destination_port = null;
	public $destination_country = null;
	public $etd = null;
	public $eta = null;
	public $vessel_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_type'
			),
			2 => array(
			'var' => 'mawb'
			),
			3 => array(
			'var' => 'origin_port'
			),
			4 => array(
			'var' => 'origin_country'
			),
			5 => array(
			'var' => 'destination_port'
			),
			6 => array(
			'var' => 'destination_country'
			),
			7 => array(
			'var' => 'etd'
			),
			8 => array(
			'var' => 'eta'
			),
			9 => array(
			'var' => 'vessel_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_type'])){
				
				$this->transport_type = $vals['transport_type'];
			}
			
			
			if (isset($vals['mawb'])){
				
				$this->mawb = $vals['mawb'];
			}
			
			
			if (isset($vals['origin_port'])){
				
				$this->origin_port = $vals['origin_port'];
			}
			
			
			if (isset($vals['origin_country'])){
				
				$this->origin_country = $vals['origin_country'];
			}
			
			
			if (isset($vals['destination_port'])){
				
				$this->destination_port = $vals['destination_port'];
			}
			
			
			if (isset($vals['destination_country'])){
				
				$this->destination_country = $vals['destination_country'];
			}
			
			
			if (isset($vals['etd'])){
				
				$this->etd = $vals['etd'];
			}
			
			
			if (isset($vals['eta'])){
				
				$this->eta = $vals['eta'];
			}
			
			
			if (isset($vals['vessel_no'])){
				
				$this->vessel_no = $vals['vessel_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LinehaulInformation';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_type);
				
			}
			
			
			
			
			if ("mawb" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mawb);
				
			}
			
			
			
			
			if ("origin_port" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->origin_port);
				
			}
			
			
			
			
			if ("origin_country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->origin_country);
				
			}
			
			
			
			
			if ("destination_port" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->destination_port);
				
			}
			
			
			
			
			if ("destination_country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->destination_country);
				
			}
			
			
			
			
			if ("etd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->etd);
				
			}
			
			
			
			
			if ("eta" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->eta);
				
			}
			
			
			
			
			if ("vessel_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vessel_no);
				
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
		
		$xfer += $output->writeFieldBegin('transport_type');
		$xfer += $output->writeString($this->transport_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->mawb !== null) {
			
			$xfer += $output->writeFieldBegin('mawb');
			$xfer += $output->writeString($this->mawb);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->origin_port !== null) {
			
			$xfer += $output->writeFieldBegin('origin_port');
			$xfer += $output->writeString($this->origin_port);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->origin_country !== null) {
			
			$xfer += $output->writeFieldBegin('origin_country');
			$xfer += $output->writeString($this->origin_country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->destination_port !== null) {
			
			$xfer += $output->writeFieldBegin('destination_port');
			$xfer += $output->writeString($this->destination_port);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->destination_country !== null) {
			
			$xfer += $output->writeFieldBegin('destination_country');
			$xfer += $output->writeString($this->destination_country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->etd !== null) {
			
			$xfer += $output->writeFieldBegin('etd');
			$xfer += $output->writeString($this->etd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eta !== null) {
			
			$xfer += $output->writeFieldBegin('eta');
			$xfer += $output->writeString($this->eta);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vessel_no !== null) {
			
			$xfer += $output->writeFieldBegin('vessel_no');
			$xfer += $output->writeString($this->vessel_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>