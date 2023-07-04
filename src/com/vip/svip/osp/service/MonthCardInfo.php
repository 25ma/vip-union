<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class MonthCardInfo {
	
	static $_TSPEC;
	public $actCode = null;
	public $remark = null;
	public $status = null;
	public $yearMonth = null;
	public $marketPrice = null;
	public $vpid = null;
	public $price = null;
	public $salesPrice = null;
	public $preferential = null;
	public $tips = null;
	public $couponInfoList = null;
	public $totalMoney = null;
	public $layerFlag = null;
	public $unlockCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'remark'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'yearMonth'
			),
			5 => array(
			'var' => 'marketPrice'
			),
			6 => array(
			'var' => 'vpid'
			),
			7 => array(
			'var' => 'price'
			),
			8 => array(
			'var' => 'salesPrice'
			),
			9 => array(
			'var' => 'preferential'
			),
			10 => array(
			'var' => 'tips'
			),
			11 => array(
			'var' => 'couponInfoList'
			),
			12 => array(
			'var' => 'totalMoney'
			),
			13 => array(
			'var' => 'layerFlag'
			),
			14 => array(
			'var' => 'unlockCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['yearMonth'])){
				
				$this->yearMonth = $vals['yearMonth'];
			}
			
			
			if (isset($vals['marketPrice'])){
				
				$this->marketPrice = $vals['marketPrice'];
			}
			
			
			if (isset($vals['vpid'])){
				
				$this->vpid = $vals['vpid'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
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
			
			
			if (isset($vals['totalMoney'])){
				
				$this->totalMoney = $vals['totalMoney'];
			}
			
			
			if (isset($vals['layerFlag'])){
				
				$this->layerFlag = $vals['layerFlag'];
			}
			
			
			if (isset($vals['unlockCount'])){
				
				$this->unlockCount = $vals['unlockCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MonthCardInfo';
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
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("yearMonth" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->yearMonth);
				
			}
			
			
			
			
			if ("marketPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->marketPrice);
				
			}
			
			
			
			
			if ("vpid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vpid);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
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
						
						$elem0 = new \com\vip\svip\osp\service\MonthCardCoupon();
						$elem0->read($input);
						
						$this->couponInfoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("totalMoney" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalMoney); 
				
			}
			
			
			
			
			if ("layerFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->layerFlag); 
				
			}
			
			
			
			
			if ("unlockCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->unlockCount); 
				
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
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->yearMonth !== null) {
			
			$xfer += $output->writeFieldBegin('yearMonth');
			$xfer += $output->writeString($this->yearMonth);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->marketPrice !== null) {
			
			$xfer += $output->writeFieldBegin('marketPrice');
			$xfer += $output->writeString($this->marketPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vpid !== null) {
			
			$xfer += $output->writeFieldBegin('vpid');
			$xfer += $output->writeString($this->vpid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
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
		
		
		if($this->totalMoney !== null) {
			
			$xfer += $output->writeFieldBegin('totalMoney');
			$xfer += $output->writeI32($this->totalMoney);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>