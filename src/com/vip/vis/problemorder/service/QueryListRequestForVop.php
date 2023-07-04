<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;

class QueryListRequestForVop {
	
	static $_TSPEC;
	public $category1_id = null;
	public $category2_id = null;
	public $category3_id = null;
	public $vendor_code_or_name = null;
	public $wd_no = null;
	public $delivery_no = null;
	public $status = null;
	public $begin_time = null;
	public $end_time = null;
	public $page_no = null;
	public $page_size = null;
	public $vendor_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'category1_id'
			),
			2 => array(
			'var' => 'category2_id'
			),
			3 => array(
			'var' => 'category3_id'
			),
			4 => array(
			'var' => 'vendor_code_or_name'
			),
			5 => array(
			'var' => 'wd_no'
			),
			6 => array(
			'var' => 'delivery_no'
			),
			7 => array(
			'var' => 'status'
			),
			8 => array(
			'var' => 'begin_time'
			),
			9 => array(
			'var' => 'end_time'
			),
			10 => array(
			'var' => 'page_no'
			),
			11 => array(
			'var' => 'page_size'
			),
			16 => array(
			'var' => 'vendor_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['category1_id'])){
				
				$this->category1_id = $vals['category1_id'];
			}
			
			
			if (isset($vals['category2_id'])){
				
				$this->category2_id = $vals['category2_id'];
			}
			
			
			if (isset($vals['category3_id'])){
				
				$this->category3_id = $vals['category3_id'];
			}
			
			
			if (isset($vals['vendor_code_or_name'])){
				
				$this->vendor_code_or_name = $vals['vendor_code_or_name'];
			}
			
			
			if (isset($vals['wd_no'])){
				
				$this->wd_no = $vals['wd_no'];
			}
			
			
			if (isset($vals['delivery_no'])){
				
				$this->delivery_no = $vals['delivery_no'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['begin_time'])){
				
				$this->begin_time = $vals['begin_time'];
			}
			
			
			if (isset($vals['end_time'])){
				
				$this->end_time = $vals['end_time'];
			}
			
			
			if (isset($vals['page_no'])){
				
				$this->page_no = $vals['page_no'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryListRequestForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("category1_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category1_id);
				
			}
			
			
			
			
			if ("category2_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category2_id);
				
			}
			
			
			
			
			if ("category3_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category3_id);
				
			}
			
			
			
			
			if ("vendor_code_or_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code_or_name);
				
			}
			
			
			
			
			if ("wd_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wd_no);
				
			}
			
			
			
			
			if ("delivery_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_no);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("begin_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->begin_time);
				
			}
			
			
			
			
			if ("end_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->end_time);
				
			}
			
			
			
			
			if ("page_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_no); 
				
			}
			
			
			
			
			if ("page_size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_size); 
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
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
		
		if($this->category1_id !== null) {
			
			$xfer += $output->writeFieldBegin('category1_id');
			$xfer += $output->writeString($this->category1_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category2_id !== null) {
			
			$xfer += $output->writeFieldBegin('category2_id');
			$xfer += $output->writeString($this->category2_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category3_id !== null) {
			
			$xfer += $output->writeFieldBegin('category3_id');
			$xfer += $output->writeString($this->category3_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code_or_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code_or_name');
			$xfer += $output->writeString($this->vendor_code_or_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wd_no !== null) {
			
			$xfer += $output->writeFieldBegin('wd_no');
			$xfer += $output->writeString($this->wd_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_no');
			$xfer += $output->writeString($this->delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->begin_time !== null) {
			
			$xfer += $output->writeFieldBegin('begin_time');
			$xfer += $output->writeString($this->begin_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_time !== null) {
			
			$xfer += $output->writeFieldBegin('end_time');
			$xfer += $output->writeString($this->end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('page_no');
		$xfer += $output->writeI32($this->page_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page_size');
		$xfer += $output->writeI32($this->page_size);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>