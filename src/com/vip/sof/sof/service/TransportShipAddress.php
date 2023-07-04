<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TransportShipAddress {
	
	static $_TSPEC;
	public $orderSn = null;
	public $senderCode = null;
	public $carriersCode = null;
	public $senderProvince = null;
	public $senderCity = null;
	public $senderCounty = null;
	public $senderTown = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'senderCode'
			),
			3 => array(
			'var' => 'carriersCode'
			),
			4 => array(
			'var' => 'senderProvince'
			),
			5 => array(
			'var' => 'senderCity'
			),
			6 => array(
			'var' => 'senderCounty'
			),
			7 => array(
			'var' => 'senderTown'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['senderCode'])){
				
				$this->senderCode = $vals['senderCode'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['senderProvince'])){
				
				$this->senderProvince = $vals['senderProvince'];
			}
			
			
			if (isset($vals['senderCity'])){
				
				$this->senderCity = $vals['senderCity'];
			}
			
			
			if (isset($vals['senderCounty'])){
				
				$this->senderCounty = $vals['senderCounty'];
			}
			
			
			if (isset($vals['senderTown'])){
				
				$this->senderTown = $vals['senderTown'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportShipAddress';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("senderCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderCode);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("senderProvince" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderProvince);
				
			}
			
			
			
			
			if ("senderCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderCity);
				
			}
			
			
			
			
			if ("senderCounty" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderCounty);
				
			}
			
			
			
			
			if ("senderTown" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderTown);
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderCode !== null) {
			
			$xfer += $output->writeFieldBegin('senderCode');
			$xfer += $output->writeString($this->senderCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderProvince !== null) {
			
			$xfer += $output->writeFieldBegin('senderProvince');
			$xfer += $output->writeString($this->senderProvince);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderCity !== null) {
			
			$xfer += $output->writeFieldBegin('senderCity');
			$xfer += $output->writeString($this->senderCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderCounty !== null) {
			
			$xfer += $output->writeFieldBegin('senderCounty');
			$xfer += $output->writeString($this->senderCounty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderTown !== null) {
			
			$xfer += $output->writeFieldBegin('senderTown');
			$xfer += $output->writeString($this->senderTown);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>