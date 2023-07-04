<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class RetreatInfo {
	
	static $_TSPEC;
	public $contactName = null;
	public $contactMobile = null;
	public $courierName = null;
	public $courierMobile = null;
	public $status = null;
	public $address = null;
	public $operTime = null;
	public $expectOperDate = null;
	public $expectOperTime = null;
	public $verifyCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'contactName'
			),
			2 => array(
			'var' => 'contactMobile'
			),
			3 => array(
			'var' => 'courierName'
			),
			4 => array(
			'var' => 'courierMobile'
			),
			5 => array(
			'var' => 'status'
			),
			6 => array(
			'var' => 'address'
			),
			7 => array(
			'var' => 'operTime'
			),
			8 => array(
			'var' => 'expectOperDate'
			),
			9 => array(
			'var' => 'expectOperTime'
			),
			10 => array(
			'var' => 'verifyCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['contactName'])){
				
				$this->contactName = $vals['contactName'];
			}
			
			
			if (isset($vals['contactMobile'])){
				
				$this->contactMobile = $vals['contactMobile'];
			}
			
			
			if (isset($vals['courierName'])){
				
				$this->courierName = $vals['courierName'];
			}
			
			
			if (isset($vals['courierMobile'])){
				
				$this->courierMobile = $vals['courierMobile'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['operTime'])){
				
				$this->operTime = $vals['operTime'];
			}
			
			
			if (isset($vals['expectOperDate'])){
				
				$this->expectOperDate = $vals['expectOperDate'];
			}
			
			
			if (isset($vals['expectOperTime'])){
				
				$this->expectOperTime = $vals['expectOperTime'];
			}
			
			
			if (isset($vals['verifyCode'])){
				
				$this->verifyCode = $vals['verifyCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RetreatInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("contactName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contactName);
				
			}
			
			
			
			
			if ("contactMobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contactMobile);
				
			}
			
			
			
			
			if ("courierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->courierName);
				
			}
			
			
			
			
			if ("courierMobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->courierMobile);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("operTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operTime);
				
			}
			
			
			
			
			if ("expectOperDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expectOperDate);
				
			}
			
			
			
			
			if ("expectOperTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expectOperTime);
				
			}
			
			
			
			
			if ("verifyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->verifyCode);
				
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
		
		if($this->contactName !== null) {
			
			$xfer += $output->writeFieldBegin('contactName');
			$xfer += $output->writeString($this->contactName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contactMobile !== null) {
			
			$xfer += $output->writeFieldBegin('contactMobile');
			$xfer += $output->writeString($this->contactMobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->courierName !== null) {
			
			$xfer += $output->writeFieldBegin('courierName');
			$xfer += $output->writeString($this->courierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->courierMobile !== null) {
			
			$xfer += $output->writeFieldBegin('courierMobile');
			$xfer += $output->writeString($this->courierMobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operTime !== null) {
			
			$xfer += $output->writeFieldBegin('operTime');
			$xfer += $output->writeString($this->operTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expectOperDate !== null) {
			
			$xfer += $output->writeFieldBegin('expectOperDate');
			$xfer += $output->writeString($this->expectOperDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expectOperTime !== null) {
			
			$xfer += $output->writeFieldBegin('expectOperTime');
			$xfer += $output->writeString($this->expectOperTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->verifyCode !== null) {
			
			$xfer += $output->writeFieldBegin('verifyCode');
			$xfer += $output->writeString($this->verifyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>