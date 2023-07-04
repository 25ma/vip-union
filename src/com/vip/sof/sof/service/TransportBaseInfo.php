<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TransportBaseInfo {
	
	static $_TSPEC;
	public $transportNo = null;
	public $carrier = null;
	public $carriersCode = null;
	public $deliveryTime = null;
	public $transportStatus = null;
	public $transportStatusTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'carrier'
			),
			3 => array(
			'var' => 'carriersCode'
			),
			4 => array(
			'var' => 'deliveryTime'
			),
			5 => array(
			'var' => 'transportStatus'
			),
			6 => array(
			'var' => 'transportStatusTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['deliveryTime'])){
				
				$this->deliveryTime = $vals['deliveryTime'];
			}
			
			
			if (isset($vals['transportStatus'])){
				
				$this->transportStatus = $vals['transportStatus'];
			}
			
			
			if (isset($vals['transportStatusTime'])){
				
				$this->transportStatusTime = $vals['transportStatusTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportBaseInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("deliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryTime);
				
			}
			
			
			
			
			if ("transportStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportStatus);
				
			}
			
			
			
			
			if ("transportStatusTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportStatusTime);
				
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
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryTime');
			$xfer += $output->writeString($this->deliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportStatus !== null) {
			
			$xfer += $output->writeFieldBegin('transportStatus');
			$xfer += $output->writeString($this->transportStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportStatusTime !== null) {
			
			$xfer += $output->writeFieldBegin('transportStatusTime');
			$xfer += $output->writeString($this->transportStatusTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>