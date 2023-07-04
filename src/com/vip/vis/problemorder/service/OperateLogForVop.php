<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;

class OperateLogForVop {
	
	static $_TSPEC;
	public $sort = null;
	public $operate_user = null;
	public $operate_type_code = null;
	public $operate_type_name = null;
	public $operate_content = null;
	public $remark = null;
	public $operate_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sort'
			),
			2 => array(
			'var' => 'operate_user'
			),
			3 => array(
			'var' => 'operate_type_code'
			),
			4 => array(
			'var' => 'operate_type_name'
			),
			5 => array(
			'var' => 'operate_content'
			),
			6 => array(
			'var' => 'remark'
			),
			7 => array(
			'var' => 'operate_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
			if (isset($vals['operate_user'])){
				
				$this->operate_user = $vals['operate_user'];
			}
			
			
			if (isset($vals['operate_type_code'])){
				
				$this->operate_type_code = $vals['operate_type_code'];
			}
			
			
			if (isset($vals['operate_type_name'])){
				
				$this->operate_type_name = $vals['operate_type_name'];
			}
			
			
			if (isset($vals['operate_content'])){
				
				$this->operate_content = $vals['operate_content'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['operate_time'])){
				
				$this->operate_time = $vals['operate_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OperateLogForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort); 
				
			}
			
			
			
			
			if ("operate_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operate_user);
				
			}
			
			
			
			
			if ("operate_type_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operate_type_code);
				
			}
			
			
			
			
			if ("operate_type_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operate_type_name);
				
			}
			
			
			
			
			if ("operate_content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operate_content);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("operate_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operate_time);
				
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
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operate_user !== null) {
			
			$xfer += $output->writeFieldBegin('operate_user');
			$xfer += $output->writeString($this->operate_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operate_type_code !== null) {
			
			$xfer += $output->writeFieldBegin('operate_type_code');
			$xfer += $output->writeString($this->operate_type_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operate_type_name !== null) {
			
			$xfer += $output->writeFieldBegin('operate_type_name');
			$xfer += $output->writeString($this->operate_type_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operate_content !== null) {
			
			$xfer += $output->writeFieldBegin('operate_content');
			$xfer += $output->writeString($this->operate_content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operate_time !== null) {
			
			$xfer += $output->writeFieldBegin('operate_time');
			$xfer += $output->writeString($this->operate_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>