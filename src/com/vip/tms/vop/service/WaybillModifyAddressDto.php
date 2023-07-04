<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillModifyAddressDto {
	
	static $_TSPEC;
	public $name = null;
	public $tel = null;
	public $mobile = null;
	public $name_encrypt = null;
	public $tel_encrypt = null;
	public $mobile_encrypt = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'name'
			),
			2 => array(
			'var' => 'tel'
			),
			3 => array(
			'var' => 'mobile'
			),
			4 => array(
			'var' => 'name_encrypt'
			),
			5 => array(
			'var' => 'tel_encrypt'
			),
			6 => array(
			'var' => 'mobile_encrypt'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['name_encrypt'])){
				
				$this->name_encrypt = $vals['name_encrypt'];
			}
			
			
			if (isset($vals['tel_encrypt'])){
				
				$this->tel_encrypt = $vals['tel_encrypt'];
			}
			
			
			if (isset($vals['mobile_encrypt'])){
				
				$this->mobile_encrypt = $vals['mobile_encrypt'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillModifyAddressDto';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("name_encrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name_encrypt);
				
			}
			
			
			
			
			if ("tel_encrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel_encrypt);
				
			}
			
			
			
			
			if ("mobile_encrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile_encrypt);
				
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
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name_encrypt !== null) {
			
			$xfer += $output->writeFieldBegin('name_encrypt');
			$xfer += $output->writeString($this->name_encrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel_encrypt !== null) {
			
			$xfer += $output->writeFieldBegin('tel_encrypt');
			$xfer += $output->writeString($this->tel_encrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile_encrypt !== null) {
			
			$xfer += $output->writeFieldBegin('mobile_encrypt');
			$xfer += $output->writeString($this->mobile_encrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>