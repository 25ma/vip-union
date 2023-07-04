<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelOrderGoodsVO {
	
	static $_TSPEC;
	public $goodFullId = null;
	public $sizeId = null;
	public $sizeNum = null;
	public $price = null;
	public $exActSubtotal = null;
	public $exCouponSubTotal = null;
	public $goodsName = null;
	public $sizeCommissionTotal = null;
	public $commissionStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodFullId'
			),
			2 => array(
			'var' => 'sizeId'
			),
			3 => array(
			'var' => 'sizeNum'
			),
			4 => array(
			'var' => 'price'
			),
			5 => array(
			'var' => 'exActSubtotal'
			),
			6 => array(
			'var' => 'exCouponSubTotal'
			),
			7 => array(
			'var' => 'goodsName'
			),
			8 => array(
			'var' => 'sizeCommissionTotal'
			),
			9 => array(
			'var' => 'commissionStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodFullId'])){
				
				$this->goodFullId = $vals['goodFullId'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['sizeNum'])){
				
				$this->sizeNum = $vals['sizeNum'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['exActSubtotal'])){
				
				$this->exActSubtotal = $vals['exActSubtotal'];
			}
			
			
			if (isset($vals['exCouponSubTotal'])){
				
				$this->exCouponSubTotal = $vals['exCouponSubTotal'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['sizeCommissionTotal'])){
				
				$this->sizeCommissionTotal = $vals['sizeCommissionTotal'];
			}
			
			
			if (isset($vals['commissionStatus'])){
				
				$this->commissionStatus = $vals['commissionStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelOrderGoodsVO';
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
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeId);
				
			}
			
			
			
			
			if ("sizeNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sizeNum); 
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("exActSubtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exActSubtotal);
				
			}
			
			
			
			
			if ("exCouponSubTotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exCouponSubTotal);
				
			}
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("sizeCommissionTotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeCommissionTotal);
				
			}
			
			
			
			
			if ("commissionStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commissionStatus);
				
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
		
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeString($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeNum !== null) {
			
			$xfer += $output->writeFieldBegin('sizeNum');
			$xfer += $output->writeI32($this->sizeNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exActSubtotal !== null) {
			
			$xfer += $output->writeFieldBegin('exActSubtotal');
			$xfer += $output->writeString($this->exActSubtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exCouponSubTotal !== null) {
			
			$xfer += $output->writeFieldBegin('exCouponSubTotal');
			$xfer += $output->writeString($this->exCouponSubTotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeCommissionTotal !== null) {
			
			$xfer += $output->writeFieldBegin('sizeCommissionTotal');
			$xfer += $output->writeString($this->sizeCommissionTotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commissionStatus !== null) {
			
			$xfer += $output->writeFieldBegin('commissionStatus');
			$xfer += $output->writeString($this->commissionStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>