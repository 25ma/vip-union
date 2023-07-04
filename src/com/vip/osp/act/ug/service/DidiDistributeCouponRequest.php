<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\act\ug\service;

class DidiDistributeCouponRequest {
	
	static $_TSPEC;
	public $batch_id = null;
	public $app_key = null;
	public $timestamp = null;
	public $sign = null;
	public $phone = null;
	public $count = null;
	public $source = null;
	public $request_id = null;
	public $code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batch_id'
			),
			2 => array(
			'var' => 'app_key'
			),
			3 => array(
			'var' => 'timestamp'
			),
			4 => array(
			'var' => 'sign'
			),
			5 => array(
			'var' => 'phone'
			),
			6 => array(
			'var' => 'count'
			),
			7 => array(
			'var' => 'source'
			),
			8 => array(
			'var' => 'request_id'
			),
			9 => array(
			'var' => 'code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batch_id'])){
				
				$this->batch_id = $vals['batch_id'];
			}
			
			
			if (isset($vals['app_key'])){
				
				$this->app_key = $vals['app_key'];
			}
			
			
			if (isset($vals['timestamp'])){
				
				$this->timestamp = $vals['timestamp'];
			}
			
			
			if (isset($vals['sign'])){
				
				$this->sign = $vals['sign'];
			}
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['request_id'])){
				
				$this->request_id = $vals['request_id'];
			}
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DidiDistributeCouponRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("batch_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->batch_id); 
				
			}
			
			
			
			
			if ("app_key" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->app_key);
				
			}
			
			
			
			
			if ("timestamp" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->timestamp); 
				
			}
			
			
			
			
			if ("sign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sign);
				
			}
			
			
			
			
			if ("phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone);
				
			}
			
			
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->count); 
				
			}
			
			
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source);
				
			}
			
			
			
			
			if ("request_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->request_id);
				
			}
			
			
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
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
		
		$xfer += $output->writeFieldBegin('batch_id');
		$xfer += $output->writeI32($this->batch_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->app_key !== null) {
			
			$xfer += $output->writeFieldBegin('app_key');
			$xfer += $output->writeString($this->app_key);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('timestamp');
		$xfer += $output->writeI32($this->timestamp);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sign !== null) {
			
			$xfer += $output->writeFieldBegin('sign');
			$xfer += $output->writeString($this->sign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phone !== null) {
			
			$xfer += $output->writeFieldBegin('phone');
			$xfer += $output->writeString($this->phone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('count');
		$xfer += $output->writeI32($this->count);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeString($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->request_id !== null) {
			
			$xfer += $output->writeFieldBegin('request_id');
			$xfer += $output->writeString($this->request_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeString($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>