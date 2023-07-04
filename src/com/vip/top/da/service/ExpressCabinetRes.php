<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\da\service;

class ExpressCabinetRes {
	
	static $_TSPEC;
	public $logistics_no = null;
	public $mobile = null;
	public $carrier_name = null;
	public $courier_mobile = null;
	public $ret_code = null;
	public $ret_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'logistics_no'
			),
			2 => array(
			'var' => 'mobile'
			),
			3 => array(
			'var' => 'carrier_name'
			),
			4 => array(
			'var' => 'courier_mobile'
			),
			5 => array(
			'var' => 'ret_code'
			),
			6 => array(
			'var' => 'ret_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['courier_mobile'])){
				
				$this->courier_mobile = $vals['courier_mobile'];
			}
			
			
			if (isset($vals['ret_code'])){
				
				$this->ret_code = $vals['ret_code'];
			}
			
			
			if (isset($vals['ret_msg'])){
				
				$this->ret_msg = $vals['ret_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExpressCabinetRes';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
			}
			
			
			
			
			if ("courier_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->courier_mobile);
				
			}
			
			
			
			
			if ("ret_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ret_code);
				
			}
			
			
			
			
			if ("ret_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ret_msg);
				
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
		
		if($this->logistics_no !== null) {
			
			$xfer += $output->writeFieldBegin('logistics_no');
			$xfer += $output->writeString($this->logistics_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_name');
			$xfer += $output->writeString($this->carrier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->courier_mobile !== null) {
			
			$xfer += $output->writeFieldBegin('courier_mobile');
			$xfer += $output->writeString($this->courier_mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ret_code !== null) {
			
			$xfer += $output->writeFieldBegin('ret_code');
			$xfer += $output->writeString($this->ret_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ret_msg !== null) {
			
			$xfer += $output->writeFieldBegin('ret_msg');
			$xfer += $output->writeString($this->ret_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>