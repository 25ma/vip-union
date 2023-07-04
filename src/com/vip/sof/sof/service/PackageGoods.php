<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class PackageGoods {
	
	static $_TSPEC;
	public $barcode = null;
	public $amount = null;
	public $goodName = null;
	public $size = null;
	public $price = null;
	public $pdcBarCode = null;
	public $pdcSN = null;
	public $goodsColor = null;
	public $brandName = null;
	public $goodsLineMoney = null;
	public $vSkuId = null;
	public $goodsPic = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'amount'
			),
			3 => array(
			'var' => 'goodName'
			),
			4 => array(
			'var' => 'size'
			),
			5 => array(
			'var' => 'price'
			),
			6 => array(
			'var' => 'pdcBarCode'
			),
			7 => array(
			'var' => 'pdcSN'
			),
			8 => array(
			'var' => 'goodsColor'
			),
			9 => array(
			'var' => 'brandName'
			),
			10 => array(
			'var' => 'goodsLineMoney'
			),
			11 => array(
			'var' => 'vSkuId'
			),
			12 => array(
			'var' => 'goodsPic'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['goodName'])){
				
				$this->goodName = $vals['goodName'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['pdcBarCode'])){
				
				$this->pdcBarCode = $vals['pdcBarCode'];
			}
			
			
			if (isset($vals['pdcSN'])){
				
				$this->pdcSN = $vals['pdcSN'];
			}
			
			
			if (isset($vals['goodsColor'])){
				
				$this->goodsColor = $vals['goodsColor'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['goodsLineMoney'])){
				
				$this->goodsLineMoney = $vals['goodsLineMoney'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['goodsPic'])){
				
				$this->goodsPic = $vals['goodsPic'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PackageGoods';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("goodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodName);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("pdcBarCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdcBarCode);
				
			}
			
			
			
			
			if ("pdcSN" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdcSN);
				
			}
			
			
			
			
			if ("goodsColor" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsColor);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("goodsLineMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsLineMoney);
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("goodsPic" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsPic);
				
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
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodName !== null) {
			
			$xfer += $output->writeFieldBegin('goodName');
			$xfer += $output->writeString($this->goodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pdcBarCode !== null) {
			
			$xfer += $output->writeFieldBegin('pdcBarCode');
			$xfer += $output->writeString($this->pdcBarCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pdcSN !== null) {
			
			$xfer += $output->writeFieldBegin('pdcSN');
			$xfer += $output->writeString($this->pdcSN);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsColor !== null) {
			
			$xfer += $output->writeFieldBegin('goodsColor');
			$xfer += $output->writeString($this->goodsColor);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsLineMoney !== null) {
			
			$xfer += $output->writeFieldBegin('goodsLineMoney');
			$xfer += $output->writeString($this->goodsLineMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeI64($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsPic !== null) {
			
			$xfer += $output->writeFieldBegin('goodsPic');
			$xfer += $output->writeString($this->goodsPic);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>