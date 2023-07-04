<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class UserLatestMonthCardResult {
	
	static $_TSPEC;
	public $userId = null;
	public $unBindCouponAmount = null;
	public $couponInfoList = null;
	public $actCode = null;
	public $endTime = null;
	public $boundUpperCount = null;
	public $boundLockCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'unBindCouponAmount'
			),
			3 => array(
			'var' => 'couponInfoList'
			),
			4 => array(
			'var' => 'actCode'
			),
			5 => array(
			'var' => 'endTime'
			),
			6 => array(
			'var' => 'boundUpperCount'
			),
			7 => array(
			'var' => 'boundLockCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['unBindCouponAmount'])){
				
				$this->unBindCouponAmount = $vals['unBindCouponAmount'];
			}
			
			
			if (isset($vals['couponInfoList'])){
				
				$this->couponInfoList = $vals['couponInfoList'];
			}
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['boundUpperCount'])){
				
				$this->boundUpperCount = $vals['boundUpperCount'];
			}
			
			
			if (isset($vals['boundLockCount'])){
				
				$this->boundLockCount = $vals['boundLockCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UserLatestMonthCardResult';
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
			
			
			
			
			if ("unBindCouponAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->unBindCouponAmount); 
				
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
			
			
			
			
			if ("actCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actCode);
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime);
				
			}
			
			
			
			
			if ("boundUpperCount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->boundUpperCount); 
				
			}
			
			
			
			
			if ("boundLockCount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->boundLockCount); 
				
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
		
		
		if($this->unBindCouponAmount !== null) {
			
			$xfer += $output->writeFieldBegin('unBindCouponAmount');
			$xfer += $output->writeI32($this->unBindCouponAmount);
			
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
		
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->boundUpperCount !== null) {
			
			$xfer += $output->writeFieldBegin('boundUpperCount');
			$xfer += $output->writeI64($this->boundUpperCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->boundLockCount !== null) {
			
			$xfer += $output->writeFieldBegin('boundLockCount');
			$xfer += $output->writeI64($this->boundLockCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>