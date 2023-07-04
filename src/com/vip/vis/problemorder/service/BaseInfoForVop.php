<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;

class BaseInfoForVop {
	
	static $_TSPEC;
	public $id = null;
	public $wd_no = null;
	public $wd_src = null;
	public $category1_id = null;
	public $category1_name = null;
	public $category2_id = null;
	public $category2_name = null;
	public $category3_id = null;
	public $category3_name = null;
	public $oa = null;
	public $oa_name = null;
	public $create_time = null;
	public $status = null;
	public $vendor_code = null;
	public $vendor_name = null;
	public $wo_remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'wd_no'
			),
			3 => array(
			'var' => 'wd_src'
			),
			4 => array(
			'var' => 'category1_id'
			),
			5 => array(
			'var' => 'category1_name'
			),
			6 => array(
			'var' => 'category2_id'
			),
			7 => array(
			'var' => 'category2_name'
			),
			8 => array(
			'var' => 'category3_id'
			),
			9 => array(
			'var' => 'category3_name'
			),
			10 => array(
			'var' => 'oa'
			),
			11 => array(
			'var' => 'oa_name'
			),
			12 => array(
			'var' => 'create_time'
			),
			13 => array(
			'var' => 'status'
			),
			14 => array(
			'var' => 'vendor_code'
			),
			15 => array(
			'var' => 'vendor_name'
			),
			16 => array(
			'var' => 'wo_remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['wd_no'])){
				
				$this->wd_no = $vals['wd_no'];
			}
			
			
			if (isset($vals['wd_src'])){
				
				$this->wd_src = $vals['wd_src'];
			}
			
			
			if (isset($vals['category1_id'])){
				
				$this->category1_id = $vals['category1_id'];
			}
			
			
			if (isset($vals['category1_name'])){
				
				$this->category1_name = $vals['category1_name'];
			}
			
			
			if (isset($vals['category2_id'])){
				
				$this->category2_id = $vals['category2_id'];
			}
			
			
			if (isset($vals['category2_name'])){
				
				$this->category2_name = $vals['category2_name'];
			}
			
			
			if (isset($vals['category3_id'])){
				
				$this->category3_id = $vals['category3_id'];
			}
			
			
			if (isset($vals['category3_name'])){
				
				$this->category3_name = $vals['category3_name'];
			}
			
			
			if (isset($vals['oa'])){
				
				$this->oa = $vals['oa'];
			}
			
			
			if (isset($vals['oa_name'])){
				
				$this->oa_name = $vals['oa_name'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['wo_remark'])){
				
				$this->wo_remark = $vals['wo_remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BaseInfoForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("wd_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wd_no);
				
			}
			
			
			
			
			if ("wd_src" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->wd_src); 
				
			}
			
			
			
			
			if ("category1_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category1_id);
				
			}
			
			
			
			
			if ("category1_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category1_name);
				
			}
			
			
			
			
			if ("category2_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category2_id);
				
			}
			
			
			
			
			if ("category2_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category2_name);
				
			}
			
			
			
			
			if ("category3_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category3_id);
				
			}
			
			
			
			
			if ("category3_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category3_name);
				
			}
			
			
			
			
			if ("oa" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oa);
				
			}
			
			
			
			
			if ("oa_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oa_name);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_code); 
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("wo_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wo_remark);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wd_no !== null) {
			
			$xfer += $output->writeFieldBegin('wd_no');
			$xfer += $output->writeString($this->wd_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wd_src !== null) {
			
			$xfer += $output->writeFieldBegin('wd_src');
			$xfer += $output->writeByte($this->wd_src);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category1_id !== null) {
			
			$xfer += $output->writeFieldBegin('category1_id');
			$xfer += $output->writeString($this->category1_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category1_name !== null) {
			
			$xfer += $output->writeFieldBegin('category1_name');
			$xfer += $output->writeString($this->category1_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category2_id !== null) {
			
			$xfer += $output->writeFieldBegin('category2_id');
			$xfer += $output->writeString($this->category2_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category2_name !== null) {
			
			$xfer += $output->writeFieldBegin('category2_name');
			$xfer += $output->writeString($this->category2_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category3_id !== null) {
			
			$xfer += $output->writeFieldBegin('category3_id');
			$xfer += $output->writeString($this->category3_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category3_name !== null) {
			
			$xfer += $output->writeFieldBegin('category3_name');
			$xfer += $output->writeString($this->category3_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oa !== null) {
			
			$xfer += $output->writeFieldBegin('oa');
			$xfer += $output->writeString($this->oa);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oa_name !== null) {
			
			$xfer += $output->writeFieldBegin('oa_name');
			$xfer += $output->writeString($this->oa_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeI32($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_name');
			$xfer += $output->writeString($this->vendor_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wo_remark !== null) {
			
			$xfer += $output->writeFieldBegin('wo_remark');
			$xfer += $output->writeString($this->wo_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>