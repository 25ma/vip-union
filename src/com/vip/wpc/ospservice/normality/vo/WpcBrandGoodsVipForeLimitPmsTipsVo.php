<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\normality\vo;

class WpcBrandGoodsVipForeLimitPmsTipsVo {
	
	static $_TSPEC;
	public $sizeId = null;
	public $skuId = null;
	public $vipLimitPmsShortTips = null;
	public $vipTotalQuota = null;
	public $favPrice = null;
	public $regretPrice = null;
	public $activeStartTime = null;
	public $activeEndTime = null;
	public $commission = null;
	public $suggestAddPrice = null;
	public $suggestPrice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			3101 => array(
			'var' => 'sizeId'
			),
			3102 => array(
			'var' => 'skuId'
			),
			3104 => array(
			'var' => 'vipLimitPmsShortTips'
			),
			3106 => array(
			'var' => 'vipTotalQuota'
			),
			3107 => array(
			'var' => 'favPrice'
			),
			3108 => array(
			'var' => 'regretPrice'
			),
			3110 => array(
			'var' => 'activeStartTime'
			),
			3111 => array(
			'var' => 'activeEndTime'
			),
			3112 => array(
			'var' => 'commission'
			),
			3113 => array(
			'var' => 'suggestAddPrice'
			),
			3114 => array(
			'var' => 'suggestPrice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['vipLimitPmsShortTips'])){
				
				$this->vipLimitPmsShortTips = $vals['vipLimitPmsShortTips'];
			}
			
			
			if (isset($vals['vipTotalQuota'])){
				
				$this->vipTotalQuota = $vals['vipTotalQuota'];
			}
			
			
			if (isset($vals['favPrice'])){
				
				$this->favPrice = $vals['favPrice'];
			}
			
			
			if (isset($vals['regretPrice'])){
				
				$this->regretPrice = $vals['regretPrice'];
			}
			
			
			if (isset($vals['activeStartTime'])){
				
				$this->activeStartTime = $vals['activeStartTime'];
			}
			
			
			if (isset($vals['activeEndTime'])){
				
				$this->activeEndTime = $vals['activeEndTime'];
			}
			
			
			if (isset($vals['commission'])){
				
				$this->commission = $vals['commission'];
			}
			
			
			if (isset($vals['suggestAddPrice'])){
				
				$this->suggestAddPrice = $vals['suggestAddPrice'];
			}
			
			
			if (isset($vals['suggestPrice'])){
				
				$this->suggestPrice = $vals['suggestPrice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcBrandGoodsVipForeLimitPmsTipsVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeId);
				
			}
			
			
			
			
			if ("skuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->skuId);
				
			}
			
			
			
			
			if ("vipLimitPmsShortTips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipLimitPmsShortTips);
				
			}
			
			
			
			
			if ("vipTotalQuota" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vipTotalQuota); 
				
			}
			
			
			
			
			if ("favPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->favPrice);
				
			}
			
			
			
			
			if ("regretPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->regretPrice);
				
			}
			
			
			
			
			if ("activeStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activeStartTime); 
				
			}
			
			
			
			
			if ("activeEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activeEndTime); 
				
			}
			
			
			
			
			if ("commission" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commission);
				
			}
			
			
			
			
			if ("suggestAddPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->suggestAddPrice);
				
			}
			
			
			
			
			if ("suggestPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->suggestPrice);
				
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
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeString($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeString($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipLimitPmsShortTips !== null) {
			
			$xfer += $output->writeFieldBegin('vipLimitPmsShortTips');
			$xfer += $output->writeString($this->vipLimitPmsShortTips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipTotalQuota !== null) {
			
			$xfer += $output->writeFieldBegin('vipTotalQuota');
			$xfer += $output->writeI32($this->vipTotalQuota);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favPrice !== null) {
			
			$xfer += $output->writeFieldBegin('favPrice');
			$xfer += $output->writeString($this->favPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->regretPrice !== null) {
			
			$xfer += $output->writeFieldBegin('regretPrice');
			$xfer += $output->writeString($this->regretPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('activeStartTime');
			$xfer += $output->writeI64($this->activeStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('activeEndTime');
			$xfer += $output->writeI64($this->activeEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commission !== null) {
			
			$xfer += $output->writeFieldBegin('commission');
			$xfer += $output->writeString($this->commission);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->suggestAddPrice !== null) {
			
			$xfer += $output->writeFieldBegin('suggestAddPrice');
			$xfer += $output->writeString($this->suggestAddPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->suggestPrice !== null) {
			
			$xfer += $output->writeFieldBegin('suggestPrice');
			$xfer += $output->writeString($this->suggestPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>