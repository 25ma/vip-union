<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class RemindQueryParam {
	
	static $_TSPEC;
	public $bp_name = null;
	public $warehouse = null;
	public $channel = null;
	public $ip = null;
	public $mid = null;
	public $cid = null;
	public $ignoreIds = null;
	public $client = null;
	public $app_version = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bp_name'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'channel'
			),
			4 => array(
			'var' => 'ip'
			),
			5 => array(
			'var' => 'mid'
			),
			6 => array(
			'var' => 'cid'
			),
			7 => array(
			'var' => 'ignoreIds'
			),
			8 => array(
			'var' => 'client'
			),
			9 => array(
			'var' => 'app_version'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bp_name'])){
				
				$this->bp_name = $vals['bp_name'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
			if (isset($vals['cid'])){
				
				$this->cid = $vals['cid'];
			}
			
			
			if (isset($vals['ignoreIds'])){
				
				$this->ignoreIds = $vals['ignoreIds'];
			}
			
			
			if (isset($vals['client'])){
				
				$this->client = $vals['client'];
			}
			
			
			if (isset($vals['app_version'])){
				
				$this->app_version = $vals['app_version'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RemindQueryParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("bp_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bp_name);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("ip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ip);
				
			}
			
			
			
			
			if ("mid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mid);
				
			}
			
			
			
			
			if ("cid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cid);
				
			}
			
			
			
			
			if ("ignoreIds" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ignoreIds);
				
			}
			
			
			
			
			if ("client" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->client);
				
			}
			
			
			
			
			if ("app_version" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->app_version);
				
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
		
		if($this->bp_name !== null) {
			
			$xfer += $output->writeFieldBegin('bp_name');
			$xfer += $output->writeString($this->bp_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ip !== null) {
			
			$xfer += $output->writeFieldBegin('ip');
			$xfer += $output->writeString($this->ip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mid !== null) {
			
			$xfer += $output->writeFieldBegin('mid');
			$xfer += $output->writeString($this->mid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cid !== null) {
			
			$xfer += $output->writeFieldBegin('cid');
			$xfer += $output->writeString($this->cid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ignoreIds !== null) {
			
			$xfer += $output->writeFieldBegin('ignoreIds');
			$xfer += $output->writeString($this->ignoreIds);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->client !== null) {
			
			$xfer += $output->writeFieldBegin('client');
			$xfer += $output->writeString($this->client);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->app_version !== null) {
			
			$xfer += $output->writeFieldBegin('app_version');
			$xfer += $output->writeString($this->app_version);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>