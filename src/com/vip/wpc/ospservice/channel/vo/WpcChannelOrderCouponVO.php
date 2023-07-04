<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelOrderCouponVO {
	
	static $_TSPEC;
	public $couponNo = null;
	public $couponSn = null;
	public $orderSn = null;
	public $getCouponStatus = null;
	public $getCouponReason = null;
	public $useCouponStatus = null;
	public $useCouponReason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponNo'
			),
			2 => array(
			'var' => 'couponSn'
			),
			3 => array(
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'getCouponStatus'
			),
			5 => array(
			'var' => 'getCouponReason'
			),
			6 => array(
			'var' => 'useCouponStatus'
			),
			7 => array(
			'var' => 'useCouponReason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponNo'])){
				
				$this->couponNo = $vals['couponNo'];
			}
			
			
			if (isset($vals['couponSn'])){
				
				$this->couponSn = $vals['couponSn'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['getCouponStatus'])){
				
				$this->getCouponStatus = $vals['getCouponStatus'];
			}
			
			
			if (isset($vals['getCouponReason'])){
				
				$this->getCouponReason = $vals['getCouponReason'];
			}
			
			
			if (isset($vals['useCouponStatus'])){
				
				$this->useCouponStatus = $vals['useCouponStatus'];
			}
			
			
			if (isset($vals['useCouponReason'])){
				
				$this->useCouponReason = $vals['useCouponReason'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelOrderCouponVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("couponNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponNo);
				
			}
			
			
			
			
			if ("couponSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponSn);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("getCouponStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->getCouponStatus); 
				
			}
			
			
			
			
			if ("getCouponReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->getCouponReason);
				
			}
			
			
			
			
			if ("useCouponStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->useCouponStatus); 
				
			}
			
			
			
			
			if ("useCouponReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->useCouponReason);
				
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
		
		if($this->couponNo !== null) {
			
			$xfer += $output->writeFieldBegin('couponNo');
			$xfer += $output->writeString($this->couponNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponSn !== null) {
			
			$xfer += $output->writeFieldBegin('couponSn');
			$xfer += $output->writeString($this->couponSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->getCouponStatus !== null) {
			
			$xfer += $output->writeFieldBegin('getCouponStatus');
			$xfer += $output->writeI32($this->getCouponStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->getCouponReason !== null) {
			
			$xfer += $output->writeFieldBegin('getCouponReason');
			$xfer += $output->writeString($this->getCouponReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useCouponStatus !== null) {
			
			$xfer += $output->writeFieldBegin('useCouponStatus');
			$xfer += $output->writeI32($this->useCouponStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useCouponReason !== null) {
			
			$xfer += $output->writeFieldBegin('useCouponReason');
			$xfer += $output->writeString($this->useCouponReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>