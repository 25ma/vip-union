<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class ItemDetailModules {
	
	static $_TSPEC;
	public $item_id = null;
	public $name = null;
	public $value = null;
	public $create_time = null;
	public $update_time = null;
	public $operate_by = null;
	public $operation_mode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'item_id'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'value'
			),
			4 => array(
			'var' => 'create_time'
			),
			5 => array(
			'var' => 'update_time'
			),
			6 => array(
			'var' => 'operate_by'
			),
			7 => array(
			'var' => 'operation_mode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['item_id'])){
				
				$this->item_id = $vals['item_id'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['value'])){
				
				$this->value = $vals['value'];
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
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ItemDetailModules';
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
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("value" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->value);
				
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
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->value !== null) {
			
			$xfer += $output->writeFieldBegin('value');
			$xfer += $output->writeString($this->value);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>