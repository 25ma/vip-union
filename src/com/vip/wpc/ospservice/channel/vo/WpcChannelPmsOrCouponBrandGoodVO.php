<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelPmsOrCouponBrandGoodVO {
	
	static $_TSPEC;
	public $goodFullId = null;
	public $vipLimitPmsTips = null;
	public $vipForeLimitPmsTips = null;
	public $vipPmsTipList = null;
	public $vipCouponList = null;
	public $couponList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			3045 => array(
			'var' => 'goodFullId'
			),
			3046 => array(
			'var' => 'vipLimitPmsTips'
			),
			3047 => array(
			'var' => 'vipForeLimitPmsTips'
			),
			3048 => array(
			'var' => 'vipPmsTipList'
			),
			3049 => array(
			'var' => 'vipCouponList'
			),
			3050 => array(
			'var' => 'couponList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodFullId'])){
				
				$this->goodFullId = $vals['goodFullId'];
			}
			
			
			if (isset($vals['vipLimitPmsTips'])){
				
				$this->vipLimitPmsTips = $vals['vipLimitPmsTips'];
			}
			
			
			if (isset($vals['vipForeLimitPmsTips'])){
				
				$this->vipForeLimitPmsTips = $vals['vipForeLimitPmsTips'];
			}
			
			
			if (isset($vals['vipPmsTipList'])){
				
				$this->vipPmsTipList = $vals['vipPmsTipList'];
			}
			
			
			if (isset($vals['vipCouponList'])){
				
				$this->vipCouponList = $vals['vipCouponList'];
			}
			
			
			if (isset($vals['couponList'])){
				
				$this->couponList = $vals['couponList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelPmsOrCouponBrandGoodVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodFullId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodFullId);
				
			}
			
			
			
			
			if ("vipLimitPmsTips" == $schemeField){
				
				$needSkip = false;
				
				$this->vipLimitPmsTips = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\wpc\ospservice\normality\vo\WpcBrandGoodsVipLimitPmsTipsVo();
						$elem0->read($input);
						
						$this->vipLimitPmsTips[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vipForeLimitPmsTips" == $schemeField){
				
				$needSkip = false;
				
				$this->vipForeLimitPmsTips = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\wpc\ospservice\normality\vo\WpcBrandGoodsVipForeLimitPmsTipsVo();
						$elem1->read($input);
						
						$this->vipForeLimitPmsTips[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vipPmsTipList" == $schemeField){
				
				$needSkip = false;
				
				$this->vipPmsTipList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\wpc\ospservice\normality\vo\WpcBrandGoodsVipPmsTipsVo();
						$elem2->read($input);
						
						$this->vipPmsTipList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vipCouponList" == $schemeField){
				
				$needSkip = false;
				
				$this->vipCouponList = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\wpc\ospservice\normality\vo\WpcCouponVo();
						$elem3->read($input);
						
						$this->vipCouponList[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("couponList" == $schemeField){
				
				$needSkip = false;
				
				$this->couponList = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \com\vip\wpc\ospservice\normality\vo\WpcCouponVo();
						$elem4->read($input);
						
						$this->couponList[$_size4++] = $elem4;
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
		
		if($this->goodFullId !== null) {
			
			$xfer += $output->writeFieldBegin('goodFullId');
			$xfer += $output->writeString($this->goodFullId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipLimitPmsTips !== null) {
			
			$xfer += $output->writeFieldBegin('vipLimitPmsTips');
			
			if (!is_array($this->vipLimitPmsTips)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->vipLimitPmsTips as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipForeLimitPmsTips !== null) {
			
			$xfer += $output->writeFieldBegin('vipForeLimitPmsTips');
			
			if (!is_array($this->vipForeLimitPmsTips)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->vipForeLimitPmsTips as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipPmsTipList !== null) {
			
			$xfer += $output->writeFieldBegin('vipPmsTipList');
			
			if (!is_array($this->vipPmsTipList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->vipPmsTipList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipCouponList !== null) {
			
			$xfer += $output->writeFieldBegin('vipCouponList');
			
			if (!is_array($this->vipCouponList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->vipCouponList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>