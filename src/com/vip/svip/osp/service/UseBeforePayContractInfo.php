<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class UseBeforePayContractInfo {
	
	static $_TSPEC;
	public $user_id = null;
	public $status = null;
	public $total_quota = null;
	public $use_quota = null;
	public $contract_sn = null;
	public $open_time = null;
	public $close_time = null;
	public $surplus_quota = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'user_id'
			),
			2 => array(
			'var' => 'status'
			),
			3 => array(
			'var' => 'total_quota'
			),
			4 => array(
			'var' => 'use_quota'
			),
			5 => array(
			'var' => 'contract_sn'
			),
			6 => array(
			'var' => 'open_time'
			),
			7 => array(
			'var' => 'close_time'
			),
			8 => array(
			'var' => 'surplus_quota'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['user_id'])){
				
				$this->user_id = $vals['user_id'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['total_quota'])){
				
				$this->total_quota = $vals['total_quota'];
			}
			
			
			if (isset($vals['use_quota'])){
				
				$this->use_quota = $vals['use_quota'];
			}
			
			
			if (isset($vals['contract_sn'])){
				
				$this->contract_sn = $vals['contract_sn'];
			}
			
			
			if (isset($vals['open_time'])){
				
				$this->open_time = $vals['open_time'];
			}
			
			
			if (isset($vals['close_time'])){
				
				$this->close_time = $vals['close_time'];
			}
			
			
			if (isset($vals['surplus_quota'])){
				
				$this->surplus_quota = $vals['surplus_quota'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UseBeforePayContractInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("user_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->user_id); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("total_quota" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->total_quota);
				
			}
			
			
			
			
			if ("use_quota" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->use_quota);
				
			}
			
			
			
			
			if ("contract_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contract_sn);
				
			}
			
			
			
			
			if ("open_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->open_time);
				
			}
			
			
			
			
			if ("close_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->close_time);
				
			}
			
			
			
			
			if ("surplus_quota" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->surplus_quota);
				
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
		
		$xfer += $output->writeFieldBegin('user_id');
		$xfer += $output->writeI64($this->user_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->total_quota !== null) {
			
			$xfer += $output->writeFieldBegin('total_quota');
			$xfer += $output->writeString($this->total_quota);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->use_quota !== null) {
			
			$xfer += $output->writeFieldBegin('use_quota');
			$xfer += $output->writeString($this->use_quota);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contract_sn !== null) {
			
			$xfer += $output->writeFieldBegin('contract_sn');
			$xfer += $output->writeString($this->contract_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->open_time !== null) {
			
			$xfer += $output->writeFieldBegin('open_time');
			$xfer += $output->writeI64($this->open_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->close_time !== null) {
			
			$xfer += $output->writeFieldBegin('close_time');
			$xfer += $output->writeI64($this->close_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->surplus_quota !== null) {
			
			$xfer += $output->writeFieldBegin('surplus_quota');
			$xfer += $output->writeString($this->surplus_quota);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>