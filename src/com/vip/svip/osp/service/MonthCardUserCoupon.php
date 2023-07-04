<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class MonthCardUserCoupon {
	
	static $_TSPEC;
	public $couponId = null;
	public $buy = null;
	public $fav = null;
	public $priority = null;
	public $pmsType = null;
	public $showType = null;
	public $couponState = null;
	public $couponSn = null;
	public $useEndTime = null;
	public $useRelativeDays = null;
	public $bindCouponStatus = null;
	public $bindTime = null;
	public $couponLayerType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponId'
			),
			2 => array(
			'var' => 'buy'
			),
			3 => array(
			'var' => 'fav'
			),
			4 => array(
			'var' => 'priority'
			),
			5 => array(
			'var' => 'pmsType'
			),
			6 => array(
			'var' => 'showType'
			),
			7 => array(
			'var' => 'couponState'
			),
			8 => array(
			'var' => 'couponSn'
			),
			9 => array(
			'var' => 'useEndTime'
			),
			10 => array(
			'var' => 'useRelativeDays'
			),
			11 => array(
			'var' => 'bindCouponStatus'
			),
			12 => array(
			'var' => 'bindTime'
			),
			13 => array(
			'var' => 'couponLayerType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponId'])){
				
				$this->couponId = $vals['couponId'];
			}
			
			
			if (isset($vals['buy'])){
				
				$this->buy = $vals['buy'];
			}
			
			
			if (isset($vals['fav'])){
				
				$this->fav = $vals['fav'];
			}
			
			
			if (isset($vals['priority'])){
				
				$this->priority = $vals['priority'];
			}
			
			
			if (isset($vals['pmsType'])){
				
				$this->pmsType = $vals['pmsType'];
			}
			
			
			if (isset($vals['showType'])){
				
				$this->showType = $vals['showType'];
			}
			
			
			if (isset($vals['couponState'])){
				
				$this->couponState = $vals['couponState'];
			}
			
			
			if (isset($vals['couponSn'])){
				
				$this->couponSn = $vals['couponSn'];
			}
			
			
			if (isset($vals['useEndTime'])){
				
				$this->useEndTime = $vals['useEndTime'];
			}
			
			
			if (isset($vals['useRelativeDays'])){
				
				$this->useRelativeDays = $vals['useRelativeDays'];
			}
			
			
			if (isset($vals['bindCouponStatus'])){
				
				$this->bindCouponStatus = $vals['bindCouponStatus'];
			}
			
			
			if (isset($vals['bindTime'])){
				
				$this->bindTime = $vals['bindTime'];
			}
			
			
			if (isset($vals['couponLayerType'])){
				
				$this->couponLayerType = $vals['couponLayerType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MonthCardUserCoupon';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("couponId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponId);
				
			}
			
			
			
			
			if ("buy" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->buy); 
				
			}
			
			
			
			
			if ("fav" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->fav); 
				
			}
			
			
			
			
			if ("priority" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->priority); 
				
			}
			
			
			
			
			if ("pmsType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pmsType); 
				
			}
			
			
			
			
			if ("showType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->showType);
				
			}
			
			
			
			
			if ("couponState" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->couponState); 
				
			}
			
			
			
			
			if ("couponSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponSn);
				
			}
			
			
			
			
			if ("useEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->useEndTime); 
				
			}
			
			
			
			
			if ("useRelativeDays" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->useRelativeDays); 
				
			}
			
			
			
			
			if ("bindCouponStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bindCouponStatus); 
				
			}
			
			
			
			
			if ("bindTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->bindTime); 
				
			}
			
			
			
			
			if ("couponLayerType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->couponLayerType); 
				
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
			$xfer += $output->writeString($this->couponId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buy !== null) {
			
			$xfer += $output->writeFieldBegin('buy');
			$xfer += $output->writeI32($this->buy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fav !== null) {
			
			$xfer += $output->writeFieldBegin('fav');
			$xfer += $output->writeI32($this->fav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priority !== null) {
			
			$xfer += $output->writeFieldBegin('priority');
			$xfer += $output->writeI32($this->priority);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pmsType !== null) {
			
			$xfer += $output->writeFieldBegin('pmsType');
			$xfer += $output->writeI32($this->pmsType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->showType !== null) {
			
			$xfer += $output->writeFieldBegin('showType');
			$xfer += $output->writeString($this->showType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponState !== null) {
			
			$xfer += $output->writeFieldBegin('couponState');
			$xfer += $output->writeI32($this->couponState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponSn !== null) {
			
			$xfer += $output->writeFieldBegin('couponSn');
			$xfer += $output->writeString($this->couponSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('useEndTime');
			$xfer += $output->writeI64($this->useEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useRelativeDays !== null) {
			
			$xfer += $output->writeFieldBegin('useRelativeDays');
			$xfer += $output->writeI32($this->useRelativeDays);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bindCouponStatus !== null) {
			
			$xfer += $output->writeFieldBegin('bindCouponStatus');
			$xfer += $output->writeI32($this->bindCouponStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bindTime !== null) {
			
			$xfer += $output->writeFieldBegin('bindTime');
			$xfer += $output->writeI64($this->bindTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponLayerType !== null) {
			
			$xfer += $output->writeFieldBegin('couponLayerType');
			$xfer += $output->writeI32($this->couponLayerType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>