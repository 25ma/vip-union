<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class BindVirtualCouponRespModel {
	
	static $_TSPEC;
	public $couponName = null;
	public $couponSn = null;
	public $beginTime = null;
	public $endTime = null;
	public $useFav = null;
	public $useLimit = null;
	public $couponVMark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponName'
			),
			2 => array(
			'var' => 'couponSn'
			),
			3 => array(
			'var' => 'beginTime'
			),
			4 => array(
			'var' => 'endTime'
			),
			5 => array(
			'var' => 'useFav'
			),
			6 => array(
			'var' => 'useLimit'
			),
			7 => array(
			'var' => 'couponVMark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponName'])){
				
				$this->couponName = $vals['couponName'];
			}
			
			
			if (isset($vals['couponSn'])){
				
				$this->couponSn = $vals['couponSn'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['useFav'])){
				
				$this->useFav = $vals['useFav'];
			}
			
			
			if (isset($vals['useLimit'])){
				
				$this->useLimit = $vals['useLimit'];
			}
			
			
			if (isset($vals['couponVMark'])){
				
				$this->couponVMark = $vals['couponVMark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BindVirtualCouponRespModel';
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
			
			
			
			
			if ("couponSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponSn);
				
			}
			
			
			
			
			if ("beginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->beginTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
			}
			
			
			
			
			if ("useFav" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->useFav);
				
			}
			
			
			
			
			if ("useLimit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->useLimit);
				
			}
			
			
			
			
			if ("couponVMark" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->couponVMark); 
				
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
		
		
		if($this->couponSn !== null) {
			
			$xfer += $output->writeFieldBegin('couponSn');
			$xfer += $output->writeString($this->couponSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->beginTime !== null) {
			
			$xfer += $output->writeFieldBegin('beginTime');
			$xfer += $output->writeI64($this->beginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useFav !== null) {
			
			$xfer += $output->writeFieldBegin('useFav');
			$xfer += $output->writeString($this->useFav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useLimit !== null) {
			
			$xfer += $output->writeFieldBegin('useLimit');
			$xfer += $output->writeString($this->useLimit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponVMark !== null) {
			
			$xfer += $output->writeFieldBegin('couponVMark');
			$xfer += $output->writeI32($this->couponVMark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>