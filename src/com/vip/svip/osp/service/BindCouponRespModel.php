<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class BindCouponRespModel {
	
	static $_TSPEC;
	public $couponName = null;
	public $couponNo = null;
	public $useBeginTime = null;
	public $useEndTime = null;
	public $couponFav = null;
	public $useLimit = null;
	public $useStatus = null;
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
			'var' => 'useBeginTime'
			),
			4 => array(
			'var' => 'useEndTime'
			),
			5 => array(
			'var' => 'couponFav'
			),
			6 => array(
			'var' => 'useLimit'
			),
			7 => array(
			'var' => 'useStatus'
			),
			8 => array(
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
			
			
			if (isset($vals['useStatus'])){
				
				$this->useStatus = $vals['useStatus'];
			}
			
			
			if (isset($vals['userVMark'])){
				
				$this->userVMark = $vals['userVMark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BindCouponRespModel';
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
			
			
			
			
			if ("useStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->useStatus); 
				
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
		
		
		if($this->useStatus !== null) {
			
			$xfer += $output->writeFieldBegin('useStatus');
			$xfer += $output->writeI32($this->useStatus);
			
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