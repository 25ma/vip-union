<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcOrderSizeVo {
	
	static $_TSPEC;
	public $sizeId = null;
	public $sizeNum = null;
	public $sizeName = null;
	public $vipshopPrice = null;
	public $rewardPrice = null;
	public $rewardStatus = null;
	public $rewardMoney = null;
	public $rewardMoneyCatThree = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12001 => array(
			'var' => 'sizeId'
			),
			12002 => array(
			'var' => 'sizeNum'
			),
			12003 => array(
			'var' => 'sizeName'
			),
			12004 => array(
			'var' => 'vipshopPrice'
			),
			12005 => array(
			'var' => 'rewardPrice'
			),
			12006 => array(
			'var' => 'rewardStatus'
			),
			12007 => array(
			'var' => 'rewardMoney'
			),
			12008 => array(
			'var' => 'rewardMoneyCatThree'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['sizeNum'])){
				
				$this->sizeNum = $vals['sizeNum'];
			}
			
			
			if (isset($vals['sizeName'])){
				
				$this->sizeName = $vals['sizeName'];
			}
			
			
			if (isset($vals['vipshopPrice'])){
				
				$this->vipshopPrice = $vals['vipshopPrice'];
			}
			
			
			if (isset($vals['rewardPrice'])){
				
				$this->rewardPrice = $vals['rewardPrice'];
			}
			
			
			if (isset($vals['rewardStatus'])){
				
				$this->rewardStatus = $vals['rewardStatus'];
			}
			
			
			if (isset($vals['rewardMoney'])){
				
				$this->rewardMoney = $vals['rewardMoney'];
			}
			
			
			if (isset($vals['rewardMoneyCatThree'])){
				
				$this->rewardMoneyCatThree = $vals['rewardMoneyCatThree'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcOrderSizeVo';
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
			
			
			
			
			if ("sizeNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sizeNum); 
				
			}
			
			
			
			
			if ("sizeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeName);
				
			}
			
			
			
			
			if ("vipshopPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipshopPrice);
				
			}
			
			
			
			
			if ("rewardPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rewardPrice);
				
			}
			
			
			
			
			if ("rewardStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->rewardStatus); 
				
			}
			
			
			
			
			if ("rewardMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rewardMoney);
				
			}
			
			
			
			
			if ("rewardMoneyCatThree" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rewardMoneyCatThree);
				
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
		
		
		$xfer += $output->writeFieldBegin('sizeNum');
		$xfer += $output->writeI32($this->sizeNum);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sizeName !== null) {
			
			$xfer += $output->writeFieldBegin('sizeName');
			$xfer += $output->writeString($this->sizeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipshopPrice !== null) {
			
			$xfer += $output->writeFieldBegin('vipshopPrice');
			$xfer += $output->writeString($this->vipshopPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rewardPrice !== null) {
			
			$xfer += $output->writeFieldBegin('rewardPrice');
			$xfer += $output->writeString($this->rewardPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rewardStatus !== null) {
			
			$xfer += $output->writeFieldBegin('rewardStatus');
			$xfer += $output->writeI32($this->rewardStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rewardMoney !== null) {
			
			$xfer += $output->writeFieldBegin('rewardMoney');
			$xfer += $output->writeString($this->rewardMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rewardMoneyCatThree !== null) {
			
			$xfer += $output->writeFieldBegin('rewardMoneyCatThree');
			$xfer += $output->writeString($this->rewardMoneyCatThree);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>