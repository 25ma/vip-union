<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class MonthCardCusCouponModel {
	
	static $_TSPEC;
	public $couponId = null;
	public $favDesc = null;
	public $couponType = null;
	public $couponField = null;
	public $bindStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponId'
			),
			2 => array(
			'var' => 'favDesc'
			),
			3 => array(
			'var' => 'couponType'
			),
			4 => array(
			'var' => 'couponField'
			),
			5 => array(
			'var' => 'bindStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponId'])){
				
				$this->couponId = $vals['couponId'];
			}
			
			
			if (isset($vals['favDesc'])){
				
				$this->favDesc = $vals['favDesc'];
			}
			
			
			if (isset($vals['couponType'])){
				
				$this->couponType = $vals['couponType'];
			}
			
			
			if (isset($vals['couponField'])){
				
				$this->couponField = $vals['couponField'];
			}
			
			
			if (isset($vals['bindStatus'])){
				
				$this->bindStatus = $vals['bindStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MonthCardCusCouponModel';
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
			
			
			
			
			if ("favDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->favDesc);
				
			}
			
			
			
			
			if ("couponType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->couponType); 
				
			}
			
			
			
			
			if ("couponField" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->couponField); 
				
			}
			
			
			
			
			if ("bindStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bindStatus); 
				
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
		
		
		if($this->favDesc !== null) {
			
			$xfer += $output->writeFieldBegin('favDesc');
			$xfer += $output->writeString($this->favDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponType !== null) {
			
			$xfer += $output->writeFieldBegin('couponType');
			$xfer += $output->writeI32($this->couponType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponField !== null) {
			
			$xfer += $output->writeFieldBegin('couponField');
			$xfer += $output->writeI32($this->couponField);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bindStatus !== null) {
			
			$xfer += $output->writeFieldBegin('bindStatus');
			$xfer += $output->writeI32($this->bindStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>