<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class PrintGoodsInfo {
	
	static $_TSPEC;
	public $brandName = null;
	public $barcode = null;
	public $goodName = null;
	public $size = null;
	public $amount = null;
	public $price = null;
	public $priceSum = null;
	public $goodsColor = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandName'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'goodName'
			),
			4 => array(
			'var' => 'size'
			),
			5 => array(
			'var' => 'amount'
			),
			6 => array(
			'var' => 'price'
			),
			7 => array(
			'var' => 'priceSum'
			),
			8 => array(
			'var' => 'goodsColor'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['goodName'])){
				
				$this->goodName = $vals['goodName'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['priceSum'])){
				
				$this->priceSum = $vals['priceSum'];
			}
			
			
			if (isset($vals['goodsColor'])){
				
				$this->goodsColor = $vals['goodsColor'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrintGoodsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("goodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodName);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("priceSum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceSum);
				
			}
			
			
			
			
			if ("goodsColor" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsColor);
				
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
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
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
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeString($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceSum !== null) {
			
			$xfer += $output->writeFieldBegin('priceSum');
			$xfer += $output->writeString($this->priceSum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsColor !== null) {
			
			$xfer += $output->writeFieldBegin('goodsColor');
			$xfer += $output->writeString($this->goodsColor);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>