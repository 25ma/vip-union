<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class UnBindCouponRespModel {
	
	static $_TSPEC;
	public $couponName = null;
	public $couponNo = null;
	public $useType = null;
	public $useRelativeDays = null;
	public $useRelativeMinutes = null;
	public $activateBegin = null;
	public $activateEnd = null;
	public $useBeginTime = null;
	public $useEndTime = null;
	public $couponFav = null;
	public $useLimit = null;
	public $userVMark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponName'
			),
			2 => array(
			'var' => 'couponNo'
			),
			3 => array(
			'var' => 'useType'
			),
			4 => array(
			'var' => 'useRelativeDays'
			),
			5 => array(
			'var' => 'useRelativeMinutes'
			),
			6 => array(
			'var' => 'activateBegin'
			),
			7 => array(
			'var' => 'activateEnd'
			),
			8 => array(
			'var' => 'useBeginTime'
			),
			9 => array(
			'var' => 'useEndTime'
			),
			10 => array(
			'var' => 'couponFav'
			),
			11 => array(
			'var' => 'useLimit'
			),
			12 => array(
			'var' => 'userVMark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponName'])){
				
				$this->couponName = $vals['couponName'];
			}
			
			
			if (isset($vals['couponNo'])){
				
				$this->couponNo = $vals['couponNo'];
			}
			
			
			if (isset($vals['useType'])){
				
				$this->useType = $vals['useType'];
			}
			
			
			if (isset($vals['useRelativeDays'])){
				
				$this->useRelativeDays = $vals['useRelativeDays'];
			}
			
			
			if (isset($vals['useRelativeMinutes'])){
				
				$this->useRelativeMinutes = $vals['useRelativeMinutes'];
			}
			
			
			if (isset($vals['activateBegin'])){
				
				$this->activateBegin = $vals['activateBegin'];
			}
			
			
			if (isset($vals['activateEnd'])){
				
				$this->activateEnd = $vals['activateEnd'];
			}
			
			
			if (isset($vals['useBeginTime'])){
				
				$this->useBeginTime = $vals['useBeginTime'];
			}
			
			
			if (isset($vals['useEndTime'])){
				
				$this->useEndTime = $vals['useEndTime'];
			}
			
			
			if (isset($vals['couponFav'])){
				
				$this->couponFav = $vals['couponFav'];
			}
			
			
			if (isset($vals['useLimit'])){
				
				$this->useLimit = $vals['useLimit'];
			}
			
			
			if (isset($vals['userVMark'])){
				
				$this->userVMark = $vals['userVMark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UnBindCouponRespModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("couponName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponName);
				
			}
			
			
			
			
			if ("couponNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponNo);
				
			}
			
			
			
			
			if ("useType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->useType); 
				
			}
			
			
			
			
			if ("useRelativeDays" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->useRelativeDays); 
				
			}
			
			
			
			
			if ("useRelativeMinutes" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->useRelativeMinutes); 
				
			}
			
			
			
			
			if ("activateBegin" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activateBegin); 
				
			}
			
			
			
			
			if ("activateEnd" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activateEnd); 
				
			}
			
			
			
			
			if ("useBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->useBeginTime); 
				
			}
			
			
			
			
			if ("useEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->useEndTime); 
				
			}
			
			
			
			
			if ("couponFav" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponFav);
				
			}
			
			
			
			
			if ("useLimit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->useLimit);
				
			}
			
			
			
			
			if ("userVMark" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userVMark); 
				
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
		
		if($this->couponName !== null) {
			
			$xfer += $output->writeFieldBegin('couponName');
			$xfer += $output->writeString($this->couponName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponNo !== null) {
			
			$xfer += $output->writeFieldBegin('couponNo');
			$xfer += $output->writeString($this->couponNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useType !== null) {
			
			$xfer += $output->writeFieldBegin('useType');
			$xfer += $output->writeI32($this->useType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useRelativeDays !== null) {
			
			$xfer += $output->writeFieldBegin('useRelativeDays');
			$xfer += $output->writeI32($this->useRelativeDays);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useRelativeMinutes !== null) {
			
			$xfer += $output->writeFieldBegin('useRelativeMinutes');
			$xfer += $output->writeI32($this->useRelativeMinutes);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activateBegin !== null) {
			
			$xfer += $output->writeFieldBegin('activateBegin');
			$xfer += $output->writeI64($this->activateBegin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activateEnd !== null) {
			
			$xfer += $output->writeFieldBegin('activateEnd');
			$xfer += $output->writeI64($this->activateEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('useBeginTime');
			$xfer += $output->writeI64($this->useBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('useEndTime');
			$xfer += $output->writeI64($this->useEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponFav !== null) {
			
			$xfer += $output->writeFieldBegin('couponFav');
			$xfer += $output->writeString($this->couponFav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useLimit !== null) {
			
			$xfer += $output->writeFieldBegin('useLimit');
			$xfer += $output->writeString($this->useLimit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userVMark !== null) {
			
			$xfer += $output->writeFieldBegin('userVMark');
			$xfer += $output->writeI32($this->userVMark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>