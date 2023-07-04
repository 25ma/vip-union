<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class MonthCardUserCouponInfo {
	
	static $_TSPEC;
	public $couponId = null;
	public $encryptCouponId = null;
	public $lowestBuyCoupon = null;
	public $bindCouponStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponId'
			),
			2 => array(
			'var' => 'encryptCouponId'
			),
			3 => array(
			'var' => 'lowestBuyCoupon'
			),
			4 => array(
			'var' => 'bindCouponStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponId'])){
				
				$this->couponId = $vals['couponId'];
			}
			
			
			if (isset($vals['encryptCouponId'])){
				
				$this->encryptCouponId = $vals['encryptCouponId'];
			}
			
			
			if (isset($vals['lowestBuyCoupon'])){
				
				$this->lowestBuyCoupon = $vals['lowestBuyCoupon'];
			}
			
			
			if (isset($vals['bindCouponStatus'])){
				
				$this->bindCouponStatus = $vals['bindCouponStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MonthCardUserCouponInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("couponId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->couponId); 
				
			}
			
			
			
			
			if ("encryptCouponId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->encryptCouponId);
				
			}
			
			
			
			
			if ("lowestBuyCoupon" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->lowestBuyCoupon);
				
			}
			
			
			
			
			if ("bindCouponStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bindCouponStatus); 
				
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
		
		if($this->couponId !== null) {
			
			$xfer += $output->writeFieldBegin('couponId');
			$xfer += $output->writeI64($this->couponId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->encryptCouponId !== null) {
			
			$xfer += $output->writeFieldBegin('encryptCouponId');
			$xfer += $output->writeString($this->encryptCouponId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('lowestBuyCoupon');
		$xfer += $output->writeBool($this->lowestBuyCoupon);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->bindCouponStatus !== null) {
			
			$xfer += $output->writeFieldBegin('bindCouponStatus');
			$xfer += $output->writeI32($this->bindCouponStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>