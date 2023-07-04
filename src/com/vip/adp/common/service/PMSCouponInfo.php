<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\common\service;

class PMSCouponInfo {
	
	static $_TSPEC;
	public $couponNo = null;
	public $couponName = null;
	public $buy = null;
	public $fav = null;
	public $activateBeginTime = null;
	public $activateEndTime = null;
	public $useBeginTime = null;
	public $useEndTime = null;
	public $totalAmount = null;
	public $activedAmount = null;
	public $couponType = null;
	public $vipPrice = null;
	public $hiddenCouponReceiveUrl = null;
	public $limit = null;
	public $left = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponNo'
			),
			2 => array(
			'var' => 'couponName'
			),
			3 => array(
			'var' => 'buy'
			),
			4 => array(
			'var' => 'fav'
			),
			5 => array(
			'var' => 'activateBeginTime'
			),
			6 => array(
			'var' => 'activateEndTime'
			),
			7 => array(
			'var' => 'useBeginTime'
			),
			8 => array(
			'var' => 'useEndTime'
			),
			9 => array(
			'var' => 'totalAmount'
			),
			10 => array(
			'var' => 'activedAmount'
			),
			11 => array(
			'var' => 'couponType'
			),
			12 => array(
			'var' => 'vipPrice'
			),
			13 => array(
			'var' => 'hiddenCouponReceiveUrl'
			),
			14 => array(
			'var' => 'limit'
			),
			15 => array(
			'var' => 'left'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponNo'])){
				
				$this->couponNo = $vals['couponNo'];
			}
			
			
			if (isset($vals['couponName'])){
				
				$this->couponName = $vals['couponName'];
			}
			
			
			if (isset($vals['buy'])){
				
				$this->buy = $vals['buy'];
			}
			
			
			if (isset($vals['fav'])){
				
				$this->fav = $vals['fav'];
			}
			
			
			if (isset($vals['activateBeginTime'])){
				
				$this->activateBeginTime = $vals['activateBeginTime'];
			}
			
			
			if (isset($vals['activateEndTime'])){
				
				$this->activateEndTime = $vals['activateEndTime'];
			}
			
			
			if (isset($vals['useBeginTime'])){
				
				$this->useBeginTime = $vals['useBeginTime'];
			}
			
			
			if (isset($vals['useEndTime'])){
				
				$this->useEndTime = $vals['useEndTime'];
			}
			
			
			if (isset($vals['totalAmount'])){
				
				$this->totalAmount = $vals['totalAmount'];
			}
			
			
			if (isset($vals['activedAmount'])){
				
				$this->activedAmount = $vals['activedAmount'];
			}
			
			
			if (isset($vals['couponType'])){
				
				$this->couponType = $vals['couponType'];
			}
			
			
			if (isset($vals['vipPrice'])){
				
				$this->vipPrice = $vals['vipPrice'];
			}
			
			
			if (isset($vals['hiddenCouponReceiveUrl'])){
				
				$this->hiddenCouponReceiveUrl = $vals['hiddenCouponReceiveUrl'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['left'])){
				
				$this->left = $vals['left'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PMSCouponInfo';
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
			
			
			
			
			if ("couponName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponName);
				
			}
			
			
			
			
			if ("buy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buy);
				
			}
			
			
			
			
			if ("fav" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fav);
				
			}
			
			
			
			
			if ("activateBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activateBeginTime); 
				
			}
			
			
			
			
			if ("activateEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activateEndTime); 
				
			}
			
			
			
			
			if ("useBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->useBeginTime); 
				
			}
			
			
			
			
			if ("useEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->useEndTime); 
				
			}
			
			
			
			
			if ("totalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalAmount); 
				
			}
			
			
			
			
			if ("activedAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activedAmount); 
				
			}
			
			
			
			
			if ("couponType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->couponType); 
				
			}
			
			
			
			
			if ("vipPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vipPrice);
				
			}
			
			
			
			
			if ("hiddenCouponReceiveUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hiddenCouponReceiveUrl);
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->limit); 
				
			}
			
			
			
			
			if ("left" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->left); 
				
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
		
		
		if($this->couponName !== null) {
			
			$xfer += $output->writeFieldBegin('couponName');
			$xfer += $output->writeString($this->couponName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buy !== null) {
			
			$xfer += $output->writeFieldBegin('buy');
			$xfer += $output->writeString($this->buy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fav !== null) {
			
			$xfer += $output->writeFieldBegin('fav');
			$xfer += $output->writeString($this->fav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activateBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('activateBeginTime');
			$xfer += $output->writeI64($this->activateBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activateEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('activateEndTime');
			$xfer += $output->writeI64($this->activateEndTime);
			
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
		
		
		if($this->totalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalAmount');
			$xfer += $output->writeI64($this->totalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activedAmount !== null) {
			
			$xfer += $output->writeFieldBegin('activedAmount');
			$xfer += $output->writeI64($this->activedAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponType !== null) {
			
			$xfer += $output->writeFieldBegin('couponType');
			$xfer += $output->writeByte($this->couponType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipPrice !== null) {
			
			$xfer += $output->writeFieldBegin('vipPrice');
			$xfer += $output->writeDouble($this->vipPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hiddenCouponReceiveUrl !== null) {
			
			$xfer += $output->writeFieldBegin('hiddenCouponReceiveUrl');
			$xfer += $output->writeString($this->hiddenCouponReceiveUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI64($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->left !== null) {
			
			$xfer += $output->writeFieldBegin('left');
			$xfer += $output->writeI64($this->left);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>