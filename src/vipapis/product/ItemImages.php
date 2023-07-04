<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class ItemImages {
	
	static $_TSPEC;
	public $item_id = null;
	public $description = null;
	public $image_url = null;
	public $image_type = null;
	public $image_size = null;
	public $image_index = null;
	public $create_time = null;
	public $update_time = null;
	public $operate_by = null;
	public $operation_mode = null;
	public $status = null;
	public $update_oa = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'item_id'
			),
			2 => array(
			'var' => 'description'
			),
			3 => array(
			'var' => 'image_url'
			),
			4 => array(
			'var' => 'image_type'
			),
			5 => array(
			'var' => 'image_size'
			),
			6 => array(
			'var' => 'image_index'
			),
			7 => array(
			'var' => 'create_time'
			),
			8 => array(
			'var' => 'update_time'
			),
			9 => array(
			'var' => 'operate_by'
			),
			10 => array(
			'var' => 'operation_mode'
			),
			11 => array(
			'var' => 'status'
			),
			12 => array(
			'var' => 'update_oa'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['item_id'])){
				
				$this->item_id = $vals['item_id'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['image_url'])){
				
				$this->image_url = $vals['image_url'];
			}
			
			
			if (isset($vals['image_type'])){
				
				$this->image_type = $vals['image_type'];
			}
			
			
			if (isset($vals['image_size'])){
				
				$this->image_size = $vals['image_size'];
			}
			
			
			if (isset($vals['image_index'])){
				
				$this->image_index = $vals['image_index'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['operate_by'])){
				
				$this->operate_by = $vals['operate_by'];
			}
			
			
			if (isset($vals['operation_mode'])){
				
				$this->operation_mode = $vals['operation_mode'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['update_oa'])){
				
				$this->update_oa = $vals['update_oa'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ItemImages';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("item_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->item_id); 
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("image_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image_url);
				
			}
			
			
			
			
			if ("image_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image_type);
				
			}
			
			
			
			
			if ("image_size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image_size);
				
			}
			
			
			
			
			if ("image_index" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->image_index); 
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->create_time); 
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->update_time); 
				
			}
			
			
			
			
			if ("operate_by" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operate_by); 
				
			}
			
			
			
			
			if ("operation_mode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operation_mode); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->status); 
				
			}
			
			
			
			
			if ("update_oa" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_oa);
				
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
		
		if($this->item_id !== null) {
			
			$xfer += $output->writeFieldBegin('item_id');
			$xfer += $output->writeI64($this->item_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_url !== null) {
			
			$xfer += $output->writeFieldBegin('image_url');
			$xfer += $output->writeString($this->image_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_type !== null) {
			
			$xfer += $output->writeFieldBegin('image_type');
			$xfer += $output->writeString($this->image_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_size !== null) {
			
			$xfer += $output->writeFieldBegin('image_size');
			$xfer += $output->writeString($this->image_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_index !== null) {
			
			$xfer += $output->writeFieldBegin('image_index');
			$xfer += $output->writeI32($this->image_index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI32($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeI32($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operate_by !== null) {
			
			$xfer += $output->writeFieldBegin('operate_by');
			$xfer += $output->writeI32($this->operate_by);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operation_mode !== null) {
			
			$xfer += $output->writeFieldBegin('operation_mode');
			$xfer += $output->writeI32($this->operation_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI16($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_oa !== null) {
			
			$xfer += $output->writeFieldBegin('update_oa');
			$xfer += $output->writeString($this->update_oa);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>