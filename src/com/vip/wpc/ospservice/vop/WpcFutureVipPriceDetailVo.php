<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcFutureVipPriceDetailVo {
	
	static $_TSPEC;
	public $startTime = null;
	public $endTime = null;
	public $vipPrice = null;
	public $sizeId = null;
	public $vSkuId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12001 => array(
			'var' => 'startTime'
			),
			12002 => array(
			'var' => 'endTime'
			),
			12003 => array(
			'var' => 'vipPrice'
			),
			12004 => array(
			'var' => 'sizeId'
			),
			12005 => array(
			'var' => 'vSkuId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['vipPrice'])){
				
				$this->vipPrice = $vals['vipPrice'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcFutureVipPriceDetailVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->startTime);
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->endTime);
				
			}
			
			
			
			
			if ("vipPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipPrice);
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeId);
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vSkuId);
				
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
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeString($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeString($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipPrice !== null) {
			
			$xfer += $output->writeFieldBegin('vipPrice');
			$xfer += $output->writeString($this->vipPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeString($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeString($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>