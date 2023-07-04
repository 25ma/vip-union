<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ReturnAddressInfo {
	
	static $_TSPEC;
	public $consignee = null;
	public $address = null;
	public $mobile = null;
	public $postcode = null;
	public $returnedWarehouseCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'consignee'
			),
			2 => array(
			'var' => 'address'
			),
			3 => array(
			'var' => 'mobile'
			),
			4 => array(
			'var' => 'postcode'
			),
			5 => array(
			'var' => 'returnedWarehouseCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['consignee'])){
				
				$this->consignee = $vals['consignee'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
			}
			
			
			if (isset($vals['returnedWarehouseCode'])){
				
				$this->returnedWarehouseCode = $vals['returnedWarehouseCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnAddressInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("consignee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignee);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("postcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postcode);
				
			}
			
			
			
			
			if ("returnedWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnedWarehouseCode);
				
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
		
		if($this->consignee !== null) {
			
			$xfer += $output->writeFieldBegin('consignee');
			$xfer += $output->writeString($this->consignee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postcode !== null) {
			
			$xfer += $output->writeFieldBegin('postcode');
			$xfer += $output->writeString($this->postcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnedWarehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('returnedWarehouseCode');
			$xfer += $output->writeString($this->returnedWarehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>