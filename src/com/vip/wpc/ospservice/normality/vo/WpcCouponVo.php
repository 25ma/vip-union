<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\normality\vo;

class WpcCouponVo {
	
	static $_TSPEC;
	public $couponName = null;
	public $couponDesc = null;
	public $activateBeginTime = null;
	public $activateEndTime = null;
	public $surplusSecond = null;
	public $fav = null;
	public $couponNo = null;
	public $status = null;
	public $useBeginTime = null;
	public $useEndTime = null;
	public $useSurplusSecond = null;
	public $shareFav = null;
	public $shareType = null;
	public $type = null;
	public $buy = null;
	public $couponNoType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			10601 => array(
			'var' => 'couponName'
			),
			10602 => array(
			'var' => 'couponDesc'
			),
			10603 => array(
			'var' => 'activateBeginTime'
			),
			10604 => array(
			'var' => 'activateEndTime'
			),
			10605 => array(
			'var' => 'surplusSecond'
			),
			10606 => array(
			'var' => 'fav'
			),
			10607 => array(
			'var' => 'couponNo'
			),
			10608 => array(
			'var' => 'status'
			),
			10611 => array(
			'var' => 'useBeginTime'
			),
			10612 => array(
			'var' => 'useEndTime'
			),
			10613 => array(
			'var' => 'useSurplusSecond'
			),
			10614 => array(
			'var' => 'shareFav'
			),
			10615 => array(
			'var' => 'shareType'
			),
			10616 => array(
			'var' => 'type'
			),
			10617 => array(
			'var' => 'buy'
			),
			10618 => array(
			'var' => 'couponNoType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponName'])){
				
				$this->couponName = $vals['couponName'];
			}
			
			
			if (isset($vals['couponDesc'])){
				
				$this->couponDesc = $vals['couponDesc'];
			}
			
			
			if (isset($vals['activateBeginTime'])){
				
				$this->activateBeginTime = $vals['activateBeginTime'];
			}
			
			
			if (isset($vals['activateEndTime'])){
				
				$this->activateEndTime = $vals['activateEndTime'];
			}
			
			
			if (isset($vals['surplusSecond'])){
				
				$this->surplusSecond = $vals['surplusSecond'];
			}
			
			
			if (isset($vals['fav'])){
				
				$this->fav = $vals['fav'];
			}
			
			
			if (isset($vals['couponNo'])){
				
				$this->couponNo = $vals['couponNo'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['useBeginTime'])){
				
				$this->useBeginTime = $vals['useBeginTime'];
			}
			
			
			if (isset($vals['useEndTime'])){
				
				$this->useEndTime = $vals['useEndTime'];
			}
			
			
			if (isset($vals['useSurplusSecond'])){
				
				$this->useSurplusSecond = $vals['useSurplusSecond'];
			}
			
			
			if (isset($vals['shareFav'])){
				
				$this->shareFav = $vals['shareFav'];
			}
			
			
			if (isset($vals['shareType'])){
				
				$this->shareType = $vals['shareType'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['buy'])){
				
				$this->buy = $vals['buy'];
			}
			
			
			if (isset($vals['couponNoType'])){
				
				$this->couponNoType = $vals['couponNoType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcCouponVo';
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
			
			
			
			
			if ("couponDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponDesc);
				
			}
			
			
			
			
			if ("activateBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activateBeginTime);
				
			}
			
			
			
			
			if ("activateEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activateEndTime);
				
			}
			
			
			
			
			if ("surplusSecond" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->surplusSecond); 
				
			}
			
			
			
			
			if ("fav" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fav);
				
			}
			
			
			
			
			if ("couponNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponNo);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("useBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->useBeginTime);
				
			}
			
			
			
			
			if ("useEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->useEndTime);
				
			}
			
			
			
			
			if ("useSurplusSecond" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->useSurplusSecond); 
				
			}
			
			
			
			
			if ("shareFav" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shareFav);
				
			}
			
			
			
			
			if ("shareType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->shareType); 
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->type); 
				
			}
			
			
			
			
			if ("buy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buy);
				
			}
			
			
			
			
			if ("couponNoType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->couponNoType); 
				
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
		
		
		if($this->couponDesc !== null) {
			
			$xfer += $output->writeFieldBegin('couponDesc');
			$xfer += $output->writeString($this->couponDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activateBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('activateBeginTime');
			$xfer += $output->writeString($this->activateBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activateEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('activateEndTime');
			$xfer += $output->writeString($this->activateEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->surplusSecond !== null) {
			
			$xfer += $output->writeFieldBegin('surplusSecond');
			$xfer += $output->writeI64($this->surplusSecond);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fav !== null) {
			
			$xfer += $output->writeFieldBegin('fav');
			$xfer += $output->writeString($this->fav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponNo !== null) {
			
			$xfer += $output->writeFieldBegin('couponNo');
			$xfer += $output->writeString($this->couponNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('useBeginTime');
			$xfer += $output->writeString($this->useBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('useEndTime');
			$xfer += $output->writeString($this->useEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useSurplusSecond !== null) {
			
			$xfer += $output->writeFieldBegin('useSurplusSecond');
			$xfer += $output->writeI64($this->useSurplusSecond);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shareFav !== null) {
			
			$xfer += $output->writeFieldBegin('shareFav');
			$xfer += $output->writeString($this->shareFav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shareType !== null) {
			
			$xfer += $output->writeFieldBegin('shareType');
			$xfer += $output->writeI32($this->shareType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeI32($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buy !== null) {
			
			$xfer += $output->writeFieldBegin('buy');
			$xfer += $output->writeString($this->buy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('couponNoType');
		$xfer += $output->writeI32($this->couponNoType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>