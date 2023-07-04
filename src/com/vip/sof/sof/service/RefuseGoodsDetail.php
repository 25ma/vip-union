<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class RefuseGoodsDetail {
	
	static $_TSPEC;
	public $goodsName = null;
	public $barcode = null;
	public $amount = null;
	public $size = null;
	public $goodNo = null;
	public $price = null;
	public $pdcBarCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsName'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'amount'
			),
			4 => array(
			'var' => 'size'
			),
			5 => array(
			'var' => 'goodNo'
			),
			6 => array(
			'var' => 'price'
			),
			7 => array(
			'var' => 'pdcBarCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['goodNo'])){
				
				$this->goodNo = $vals['goodNo'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['pdcBarCode'])){
				
				$this->pdcBarCode = $vals['pdcBarCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RefuseGoodsDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("goodNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodNo);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("pdcBarCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdcBarCode);
				
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
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodNo');
			$xfer += $output->writeString($this->goodNo);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>