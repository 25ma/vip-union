<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\normality\vo;

class WpcBrandGoodsVipLimitPmsTipsVo {
	
	static $_TSPEC;
	public $sizeId = null;
	public $skuId = null;
	public $vipLimitPmsTips = null;
	public $vipLimitPmsShortTips = null;
	public $surplusSecond = null;
	public $vipTotalQuota = null;
	public $favPrice = null;
	public $regretPrice = null;
	public $commission = null;
	public $suggestAddPrice = null;
	public $suggestPrice = null;
	public $adStartTime = null;
	public $adEndTime = null;
	public $adStatus = null;
	public $adRate = null;
	public $adId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			3101 => array(
			'var' => 'sizeId'
			),
			3102 => array(
			'var' => 'skuId'
			),
			3103 => array(
			'var' => 'vipLimitPmsTips'
			),
			3104 => array(
			'var' => 'vipLimitPmsShortTips'
			),
			3105 => array(
			'var' => 'surplusSecond'
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
			3112 => array(
			'var' => 'commission'
			),
			3113 => array(
			'var' => 'suggestAddPrice'
			),
			3114 => array(
			'var' => 'suggestPrice'
			),
			3121 => array(
			'var' => 'adStartTime'
			),
			3122 => array(
			'var' => 'adEndTime'
			),
			3123 => array(
			'var' => 'adStatus'
			),
			3124 => array(
			'var' => 'adRate'
			),
			3125 => array(
			'var' => 'adId'
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
			
			
			if (isset($vals['vipLimitPmsTips'])){
				
				$this->vipLimitPmsTips = $vals['vipLimitPmsTips'];
			}
			
			
			if (isset($vals['vipLimitPmsShortTips'])){
				
				$this->vipLimitPmsShortTips = $vals['vipLimitPmsShortTips'];
			}
			
			
			if (isset($vals['surplusSecond'])){
				
				$this->surplusSecond = $vals['surplusSecond'];
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
			
			
			if (isset($vals['commission'])){
				
				$this->commission = $vals['commission'];
			}
			
			
			if (isset($vals['suggestAddPrice'])){
				
				$this->suggestAddPrice = $vals['suggestAddPrice'];
			}
			
			
			if (isset($vals['suggestPrice'])){
				
				$this->suggestPrice = $vals['suggestPrice'];
			}
			
			
			if (isset($vals['adStartTime'])){
				
				$this->adStartTime = $vals['adStartTime'];
			}
			
			
			if (isset($vals['adEndTime'])){
				
				$this->adEndTime = $vals['adEndTime'];
			}
			
			
			if (isset($vals['adStatus'])){
				
				$this->adStatus = $vals['adStatus'];
			}
			
			
			if (isset($vals['adRate'])){
				
				$this->adRate = $vals['adRate'];
			}
			
			
			if (isset($vals['adId'])){
				
				$this->adId = $vals['adId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcBrandGoodsVipLimitPmsTipsVo';
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
			
			
			
			
			if ("vipLimitPmsTips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipLimitPmsTips);
				
			}
			
			
			
			
			if ("vipLimitPmsShortTips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipLimitPmsShortTips);
				
			}
			
			
			
			
			if ("surplusSecond" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->surplusSecond); 
				
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
			
			
			
			
			if ("adStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->adStartTime); 
				
			}
			
			
			
			
			if ("adEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->adEndTime); 
				
			}
			
			
			
			
			if ("adStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->adStatus); 
				
			}
			
			
			
			
			if ("adRate" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->adRate); 
				
			}
			
			
			
			
			if ("adId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->adId); 
				
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
		
		
		if($this->vipLimitPmsTips !== null) {
			
			$xfer += $output->writeFieldBegin('vipLimitPmsTips');
			$xfer += $output->writeString($this->vipLimitPmsTips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipLimitPmsShortTips !== null) {
			
			$xfer += $output->writeFieldBegin('vipLimitPmsShortTips');
			$xfer += $output->writeString($this->vipLimitPmsShortTips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->surplusSecond !== null) {
			
			$xfer += $output->writeFieldBegin('surplusSecond');
			$xfer += $output->writeI64($this->surplusSecond);
			
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
		
		
		if($this->adStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('adStartTime');
			$xfer += $output->writeI64($this->adStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('adEndTime');
			$xfer += $output->writeI64($this->adEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adStatus !== null) {
			
			$xfer += $output->writeFieldBegin('adStatus');
			$xfer += $output->writeI32($this->adStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adRate !== null) {
			
			$xfer += $output->writeFieldBegin('adRate');
			$xfer += $output->writeI32($this->adRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adId !== null) {
			
			$xfer += $output->writeFieldBegin('adId');
			$xfer += $output->writeI64($this->adId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>