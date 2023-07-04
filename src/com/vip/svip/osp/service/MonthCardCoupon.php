<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class MonthCardCoupon {
	
	static $_TSPEC;
	public $couponId = null;
	public $buy = null;
	public $fav = null;
	public $priority = null;
	public $status = null;
	public $pmsType = null;
	public $showType = null;
	public $activateBeginTime = null;
	public $activateEndTime = null;
	public $useRelativeDays = null;
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
			'var' => 'status'
			),
			6 => array(
			'var' => 'pmsType'
			),
			7 => array(
			'var' => 'showType'
			),
			8 => array(
			'var' => 'activateBeginTime'
			),
			9 => array(
			'var' => 'activateEndTime'
			),
			10 => array(
			'var' => 'useRelativeDays'
			),
			11 => array(
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
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['pmsType'])){
				
				$this->pmsType = $vals['pmsType'];
			}
			
			
			if (isset($vals['showType'])){
				
				$this->showType = $vals['showType'];
			}
			
			
			if (isset($vals['activateBeginTime'])){
				
				$this->activateBeginTime = $vals['activateBeginTime'];
			}
			
			
			if (isset($vals['activateEndTime'])){
				
				$this->activateEndTime = $vals['activateEndTime'];
			}
			
			
			if (isset($vals['useRelativeDays'])){
				
				$this->useRelativeDays = $vals['useRelativeDays'];
			}
			
			
			if (isset($vals['couponLayerType'])){
				
				$this->couponLayerType = $vals['couponLayerType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MonthCardCoupon';
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
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("pmsType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pmsType); 
				
			}
			
			
			
			
			if ("showType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->showType);
				
			}
			
			
			
			
			if ("activateBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activateBeginTime); 
				
			}
			
			
			
			
			if ("activateEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activateEndTime); 
				
			}
			
			
			
			
			if ("useRelativeDays" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->useRelativeDays); 
				
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
			$xfer += $output->writeI64($this->couponId);
			
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
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
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
		
		
		if($this->useRelativeDays !== null) {
			
			$xfer += $output->writeFieldBegin('useRelativeDays');
			$xfer += $output->writeI32($this->useRelativeDays);
			
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