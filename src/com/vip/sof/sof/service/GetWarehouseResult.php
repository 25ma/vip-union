<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class GetWarehouseResult {
	
	static $_TSPEC;
	public $returnedWarehouseCode = null;
	public $returnedGoodsAddress = null;
	public $consignee = null;
	public $mobile = null;
	public $postcode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'returnedWarehouseCode'
			),
			2 => array(
			'var' => 'returnedGoodsAddress'
			),
			3 => array(
			'var' => 'consignee'
			),
			4 => array(
			'var' => 'mobile'
			),
			5 => array(
			'var' => 'postcode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnedWarehouseCode'])){
				
				$this->returnedWarehouseCode = $vals['returnedWarehouseCode'];
			}
			
			
			if (isset($vals['returnedGoodsAddress'])){
				
				$this->returnedGoodsAddress = $vals['returnedGoodsAddress'];
			}
			
			
			if (isset($vals['consignee'])){
				
				$this->consignee = $vals['consignee'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetWarehouseResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("returnedWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnedWarehouseCode);
				
			}
			
			
			
			
			if ("returnedGoodsAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnedGoodsAddress);
				
			}
			
			
			
			
			if ("consignee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignee);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("postcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postcode);
				
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
		
		if($this->returnedWarehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('returnedWarehouseCode');
			$xfer += $output->writeString($this->returnedWarehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnedGoodsAddress !== null) {
			
			$xfer += $output->writeFieldBegin('returnedGoodsAddress');
			$xfer += $output->writeString($this->returnedGoodsAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consignee !== null) {
			
			$xfer += $output->writeFieldBegin('consignee');
			$xfer += $output->writeString($this->consignee);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>