<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\fbs\vop\service;

class BillVendorFeeItemDetail {
	
	static $_TSPEC;
	public $vendor_name = null;
	public $vendor_code = null;
	public $brand_name = null;
	public $brand_code = null;
	public $article_no = null;
	public $color = null;
	public $size = null;
	public $bar_code = null;
	public $count = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_name'
			),
			2 => array(
			'var' => 'vendor_code'
			),
			3 => array(
			'var' => 'brand_name'
			),
			4 => array(
			'var' => 'brand_code'
			),
			5 => array(
			'var' => 'article_no'
			),
			6 => array(
			'var' => 'color'
			),
			7 => array(
			'var' => 'size'
			),
			8 => array(
			'var' => 'bar_code'
			),
			9 => array(
			'var' => 'count'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['brand_code'])){
				
				$this->brand_code = $vals['brand_code'];
			}
			
			
			if (isset($vals['article_no'])){
				
				$this->article_no = $vals['article_no'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['bar_code'])){
				
				$this->bar_code = $vals['bar_code'];
			}
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BillVendorFeeItemDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("brand_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_code);
				
			}
			
			
			
			
			if ("article_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->article_no);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("bar_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bar_code);
				
			}
			
			
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->count); 
				
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
		
		if($this->vendor_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_name');
			$xfer += $output->writeString($this->vendor_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_code !== null) {
			
			$xfer += $output->writeFieldBegin('brand_code');
			$xfer += $output->writeString($this->brand_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->article_no !== null) {
			
			$xfer += $output->writeFieldBegin('article_no');
			$xfer += $output->writeString($this->article_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bar_code !== null) {
			
			$xfer += $output->writeFieldBegin('bar_code');
			$xfer += $output->writeString($this->bar_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI32($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>