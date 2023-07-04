<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class OrderInfoModel {
	
	static $_TSPEC;
	public $orderSn = null;
	public $orderId = null;
	public $orderPrice = null;
	public $discountPrice = null;
	public $productId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'orderId'
			),
			3 => array(
			'var' => 'orderPrice'
			),
			4 => array(
			'var' => 'discountPrice'
			),
			5 => array(
			'var' => 'productId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['orderPrice'])){
				
				$this->orderPrice = $vals['orderPrice'];
			}
			
			
			if (isset($vals['discountPrice'])){
				
				$this->discountPrice = $vals['discountPrice'];
			}
			
			
			if (isset($vals['productId'])){
				
				$this->productId = $vals['productId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderId);
				
			}
			
			
			
			
			if ("orderPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderPrice);
				
			}
			
			
			
			
			if ("discountPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountPrice);
				
			}
			
			
			
			
			if ("productId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productId);
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeString($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderPrice !== null) {
			
			$xfer += $output->writeFieldBegin('orderPrice');
			$xfer += $output->writeString($this->orderPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountPrice !== null) {
			
			$xfer += $output->writeFieldBegin('discountPrice');
			$xfer += $output->writeString($this->discountPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productId !== null) {
			
			$xfer += $output->writeFieldBegin('productId');
			$xfer += $output->writeString($this->productId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>