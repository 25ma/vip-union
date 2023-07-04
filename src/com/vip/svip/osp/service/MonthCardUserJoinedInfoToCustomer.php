<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class MonthCardUserJoinedInfoToCustomer {
	
	static $_TSPEC;
	public $userId = null;
	public $orderSn = null;
	public $startTime = null;
	public $endTime = null;
	public $money = null;
	public $couponSnList = null;
	public $activeType = null;
	public $opTime = null;
	public $bindType = null;
	public $unBindCouponList = null;
	public $continuousActFlag = null;
	public $totalCycles = null;
	public $continuousCouponList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'startTime'
			),
			4 => array(
			'var' => 'endTime'
			),
			5 => array(
			'var' => 'money'
			),
			6 => array(
			'var' => 'couponSnList'
			),
			7 => array(
			'var' => 'activeType'
			),
			8 => array(
			'var' => 'opTime'
			),
			9 => array(
			'var' => 'bindType'
			),
			10 => array(
			'var' => 'unBindCouponList'
			),
			11 => array(
			'var' => 'continuousActFlag'
			),
			12 => array(
			'var' => 'totalCycles'
			),
			13 => array(
			'var' => 'continuousCouponList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['couponSnList'])){
				
				$this->couponSnList = $vals['couponSnList'];
			}
			
			
			if (isset($vals['activeType'])){
				
				$this->activeType = $vals['activeType'];
			}
			
			
			if (isset($vals['opTime'])){
				
				$this->opTime = $vals['opTime'];
			}
			
			
			if (isset($vals['bindType'])){
				
				$this->bindType = $vals['bindType'];
			}
			
			
			if (isset($vals['unBindCouponList'])){
				
				$this->unBindCouponList = $vals['unBindCouponList'];
			}
			
			
			if (isset($vals['continuousActFlag'])){
				
				$this->continuousActFlag = $vals['continuousActFlag'];
			}
			
			
			if (isset($vals['totalCycles'])){
				
				$this->totalCycles = $vals['totalCycles'];
			}
			
			
			if (isset($vals['continuousCouponList'])){
				
				$this->continuousCouponList = $vals['continuousCouponList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MonthCardUserJoinedInfoToCustomer';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startTime);
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money);
				
			}
			
			
			
			
			if ("couponSnList" == $schemeField){
				
				$needSkip = false;
				
				$this->couponSnList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->couponSnList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("activeType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->activeType); 
				
			}
			
			
			
			
			if ("opTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->opTime);
				
			}
			
			
			
			
			if ("bindType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bindType); 
				
			}
			
			
			
			
			if ("unBindCouponList" == $schemeField){
				
				$needSkip = false;
				
				$this->unBindCouponList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\svip\osp\service\MonthCardCusCouponModel();
						$elem1->read($input);
						
						$this->unBindCouponList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("continuousActFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->continuousActFlag); 
				
			}
			
			
			
			
			if ("totalCycles" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalCycles); 
				
			}
			
			
			
			
			if ("continuousCouponList" == $schemeField){
				
				$needSkip = false;
				
				$this->continuousCouponList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\svip\osp\service\ContinuousCouponModel();
						$elem2->read($input);
						
						$this->continuousCouponList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeI64($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeString($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponSnList !== null) {
			
			$xfer += $output->writeFieldBegin('couponSnList');
			
			if (!is_array($this->couponSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->couponSnList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('activeType');
		$xfer += $output->writeI32($this->activeType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->opTime !== null) {
			
			$xfer += $output->writeFieldBegin('opTime');
			$xfer += $output->writeI64($this->opTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('bindType');
		$xfer += $output->writeI32($this->bindType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->unBindCouponList !== null) {
			
			$xfer += $output->writeFieldBegin('unBindCouponList');
			
			if (!is_array($this->unBindCouponList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->unBindCouponList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('continuousActFlag');
		$xfer += $output->writeI32($this->continuousActFlag);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->totalCycles !== null) {
			
			$xfer += $output->writeFieldBegin('totalCycles');
			$xfer += $output->writeI32($this->totalCycles);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->continuousCouponList !== null) {
			
			$xfer += $output->writeFieldBegin('continuousCouponList');
			
			if (!is_array($this->continuousCouponList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->continuousCouponList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>