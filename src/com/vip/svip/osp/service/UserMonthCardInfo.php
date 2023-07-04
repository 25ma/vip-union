<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class UserMonthCardInfo {
	
	static $_TSPEC;
	public $actCode = null;
	public $vpId = null;
	public $day = null;
	public $endTime = null;
	public $totalAmount = null;
	public $status = null;
	public $isSvip = null;
	public $marketPrice = null;
	public $salesPrice = null;
	public $preferential = null;
	public $tips = null;
	public $couponInfoList = null;
	public $bindType = null;
	public $unBindCouponAmount = null;
	public $unReceivedCoupon = null;
	public $bindCouponUsedAmount = null;
	public $layerFlag = null;
	public $unlockCount = null;
	public $usedCouponCount = null;
	public $unLockedFlag = null;
	public $mostUpperFav = null;
	public $leftTotalAmount = null;
	public $leftCouponSize = null;
	public $eligibleForFree = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'vpId'
			),
			3 => array(
			'var' => 'day'
			),
			4 => array(
			'var' => 'endTime'
			),
			5 => array(
			'var' => 'totalAmount'
			),
			6 => array(
			'var' => 'status'
			),
			7 => array(
			'var' => 'isSvip'
			),
			8 => array(
			'var' => 'marketPrice'
			),
			9 => array(
			'var' => 'salesPrice'
			),
			10 => array(
			'var' => 'preferential'
			),
			11 => array(
			'var' => 'tips'
			),
			12 => array(
			'var' => 'couponInfoList'
			),
			13 => array(
			'var' => 'bindType'
			),
			14 => array(
			'var' => 'unBindCouponAmount'
			),
			15 => array(
			'var' => 'unReceivedCoupon'
			),
			16 => array(
			'var' => 'bindCouponUsedAmount'
			),
			17 => array(
			'var' => 'layerFlag'
			),
			18 => array(
			'var' => 'unlockCount'
			),
			19 => array(
			'var' => 'usedCouponCount'
			),
			20 => array(
			'var' => 'unLockedFlag'
			),
			21 => array(
			'var' => 'mostUpperFav'
			),
			22 => array(
			'var' => 'leftTotalAmount'
			),
			23 => array(
			'var' => 'leftCouponSize'
			),
			24 => array(
			'var' => 'eligibleForFree'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['vpId'])){
				
				$this->vpId = $vals['vpId'];
			}
			
			
			if (isset($vals['day'])){
				
				$this->day = $vals['day'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['totalAmount'])){
				
				$this->totalAmount = $vals['totalAmount'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['isSvip'])){
				
				$this->isSvip = $vals['isSvip'];
			}
			
			
			if (isset($vals['marketPrice'])){
				
				$this->marketPrice = $vals['marketPrice'];
			}
			
			
			if (isset($vals['salesPrice'])){
				
				$this->salesPrice = $vals['salesPrice'];
			}
			
			
			if (isset($vals['preferential'])){
				
				$this->preferential = $vals['preferential'];
			}
			
			
			if (isset($vals['tips'])){
				
				$this->tips = $vals['tips'];
			}
			
			
			if (isset($vals['couponInfoList'])){
				
				$this->couponInfoList = $vals['couponInfoList'];
			}
			
			
			if (isset($vals['bindType'])){
				
				$this->bindType = $vals['bindType'];
			}
			
			
			if (isset($vals['unBindCouponAmount'])){
				
				$this->unBindCouponAmount = $vals['unBindCouponAmount'];
			}
			
			
			if (isset($vals['unReceivedCoupon'])){
				
				$this->unReceivedCoupon = $vals['unReceivedCoupon'];
			}
			
			
			if (isset($vals['bindCouponUsedAmount'])){
				
				$this->bindCouponUsedAmount = $vals['bindCouponUsedAmount'];
			}
			
			
			if (isset($vals['layerFlag'])){
				
				$this->layerFlag = $vals['layerFlag'];
			}
			
			
			if (isset($vals['unlockCount'])){
				
				$this->unlockCount = $vals['unlockCount'];
			}
			
			
			if (isset($vals['usedCouponCount'])){
				
				$this->usedCouponCount = $vals['usedCouponCount'];
			}
			
			
			if (isset($vals['unLockedFlag'])){
				
				$this->unLockedFlag = $vals['unLockedFlag'];
			}
			
			
			if (isset($vals['mostUpperFav'])){
				
				$this->mostUpperFav = $vals['mostUpperFav'];
			}
			
			
			if (isset($vals['leftTotalAmount'])){
				
				$this->leftTotalAmount = $vals['leftTotalAmount'];
			}
			
			
			if (isset($vals['leftCouponSize'])){
				
				$this->leftCouponSize = $vals['leftCouponSize'];
			}
			
			
			if (isset($vals['eligibleForFree'])){
				
				$this->eligibleForFree = $vals['eligibleForFree'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UserMonthCardInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("actCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actCode);
				
			}
			
			
			
			
			if ("vpId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vpId);
				
			}
			
			
			
			
			if ("day" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->day); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime);
				
			}
			
			
			
			
			if ("totalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalAmount); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("isSvip" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isSvip);
				
			}
			
			
			
			
			if ("marketPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->marketPrice);
				
			}
			
			
			
			
			if ("salesPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesPrice);
				
			}
			
			
			
			
			if ("preferential" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preferential);
				
			}
			
			
			
			
			if ("tips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tips);
				
			}
			
			
			
			
			if ("couponInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->couponInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\svip\osp\service\MonthCardUserCoupon();
						$elem0->read($input);
						
						$this->couponInfoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("bindType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bindType); 
				
			}
			
			
			
			
			if ("unBindCouponAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->unBindCouponAmount); 
				
			}
			
			
			
			
			if ("unReceivedCoupon" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->unReceivedCoupon); 
				
			}
			
			
			
			
			if ("bindCouponUsedAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bindCouponUsedAmount); 
				
			}
			
			
			
			
			if ("layerFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->layerFlag); 
				
			}
			
			
			
			
			if ("unlockCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->unlockCount); 
				
			}
			
			
			
			
			if ("usedCouponCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->usedCouponCount); 
				
			}
			
			
			
			
			if ("unLockedFlag" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->unLockedFlag);
				
			}
			
			
			
			
			if ("mostUpperFav" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->mostUpperFav); 
				
			}
			
			
			
			
			if ("leftTotalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->leftTotalAmount); 
				
			}
			
			
			
			
			if ("leftCouponSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->leftCouponSize); 
				
			}
			
			
			
			
			if ("eligibleForFree" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->eligibleForFree); 
				
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
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vpId !== null) {
			
			$xfer += $output->writeFieldBegin('vpId');
			$xfer += $output->writeString($this->vpId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('day');
		$xfer += $output->writeI32($this->day);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalAmount');
			$xfer += $output->writeI32($this->totalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSvip !== null) {
			
			$xfer += $output->writeFieldBegin('isSvip');
			$xfer += $output->writeBool($this->isSvip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->marketPrice !== null) {
			
			$xfer += $output->writeFieldBegin('marketPrice');
			$xfer += $output->writeString($this->marketPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesPrice !== null) {
			
			$xfer += $output->writeFieldBegin('salesPrice');
			$xfer += $output->writeString($this->salesPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preferential !== null) {
			
			$xfer += $output->writeFieldBegin('preferential');
			$xfer += $output->writeString($this->preferential);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tips !== null) {
			
			$xfer += $output->writeFieldBegin('tips');
			$xfer += $output->writeString($this->tips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('couponInfoList');
			
			if (!is_array($this->couponInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->couponInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bindType !== null) {
			
			$xfer += $output->writeFieldBegin('bindType');
			$xfer += $output->writeI32($this->bindType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unBindCouponAmount !== null) {
			
			$xfer += $output->writeFieldBegin('unBindCouponAmount');
			$xfer += $output->writeI32($this->unBindCouponAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unReceivedCoupon !== null) {
			
			$xfer += $output->writeFieldBegin('unReceivedCoupon');
			$xfer += $output->writeI32($this->unReceivedCoupon);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bindCouponUsedAmount !== null) {
			
			$xfer += $output->writeFieldBegin('bindCouponUsedAmount');
			$xfer += $output->writeI32($this->bindCouponUsedAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->layerFlag !== null) {
			
			$xfer += $output->writeFieldBegin('layerFlag');
			$xfer += $output->writeI32($this->layerFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unlockCount !== null) {
			
			$xfer += $output->writeFieldBegin('unlockCount');
			$xfer += $output->writeI32($this->unlockCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->usedCouponCount !== null) {
			
			$xfer += $output->writeFieldBegin('usedCouponCount');
			$xfer += $output->writeI32($this->usedCouponCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unLockedFlag !== null) {
			
			$xfer += $output->writeFieldBegin('unLockedFlag');
			$xfer += $output->writeBool($this->unLockedFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mostUpperFav !== null) {
			
			$xfer += $output->writeFieldBegin('mostUpperFav');
			$xfer += $output->writeI32($this->mostUpperFav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leftTotalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('leftTotalAmount');
			$xfer += $output->writeI32($this->leftTotalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leftCouponSize !== null) {
			
			$xfer += $output->writeFieldBegin('leftCouponSize');
			$xfer += $output->writeI32($this->leftCouponSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eligibleForFree !== null) {
			
			$xfer += $output->writeFieldBegin('eligibleForFree');
			$xfer += $output->writeByte($this->eligibleForFree);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>