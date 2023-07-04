<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class UserMonthCardAbacusInfo {
	
	static $_TSPEC;
	public $status = null;
	public $todayCanBindCount = null;
	public $couponList = null;
	public $couponTotalAmount = null;
	public $money = null;
	public $totalCouponSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'status'
			),
			2 => array(
			'var' => 'todayCanBindCount'
			),
			3 => array(
			'var' => 'couponList'
			),
			4 => array(
			'var' => 'couponTotalAmount'
			),
			5 => array(
			'var' => 'money'
			),
			6 => array(
			'var' => 'totalCouponSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['todayCanBindCount'])){
				
				$this->todayCanBindCount = $vals['todayCanBindCount'];
			}
			
			
			if (isset($vals['couponList'])){
				
				$this->couponList = $vals['couponList'];
			}
			
			
			if (isset($vals['couponTotalAmount'])){
				
				$this->couponTotalAmount = $vals['couponTotalAmount'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['totalCouponSize'])){
				
				$this->totalCouponSize = $vals['totalCouponSize'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UserMonthCardAbacusInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("todayCanBindCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->todayCanBindCount); 
				
			}
			
			
			
			
			if ("couponList" == $schemeField){
				
				$needSkip = false;
				
				$this->couponList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\svip\osp\service\MonthCardUserCouponInfo();
						$elem0->read($input);
						
						$this->couponList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("couponTotalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponTotalAmount);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money);
				
			}
			
			
			
			
			if ("totalCouponSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalCouponSize); 
				
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
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->todayCanBindCount !== null) {
			
			$xfer += $output->writeFieldBegin('todayCanBindCount');
			$xfer += $output->writeI32($this->todayCanBindCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponList !== null) {
			
			$xfer += $output->writeFieldBegin('couponList');
			
			if (!is_array($this->couponList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->couponList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponTotalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('couponTotalAmount');
			$xfer += $output->writeString($this->couponTotalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeString($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalCouponSize !== null) {
			
			$xfer += $output->writeFieldBegin('totalCouponSize');
			$xfer += $output->writeI32($this->totalCouponSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>