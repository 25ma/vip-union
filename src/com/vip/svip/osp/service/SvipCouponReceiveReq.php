<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipCouponReceiveReq {
	
	static $_TSPEC;
	public $rcode = null;
	public $remindId = null;
	public $rid = null;
	public $warehouse = null;
	public $client = null;
	public $app_version = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'rcode'
			),
			2 => array(
			'var' => 'remindId'
			),
			3 => array(
			'var' => 'rid'
			),
			4 => array(
			'var' => 'warehouse'
			),
			5 => array(
			'var' => 'client'
			),
			6 => array(
			'var' => 'app_version'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['rcode'])){
				
				$this->rcode = $vals['rcode'];
			}
			
			
			if (isset($vals['remindId'])){
				
				$this->remindId = $vals['remindId'];
			}
			
			
			if (isset($vals['rid'])){
				
				$this->rid = $vals['rid'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
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
		
		return 'SvipCouponReceiveReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("rcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rcode);
				
			}
			
			
			
			
			if ("remindId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->remindId); 
				
			}
			
			
			
			
			if ("rid" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->rid); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
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
		
		$xfer += $output->writeFieldBegin('rcode');
		$xfer += $output->writeString($this->rcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('remindId');
		$xfer += $output->writeI64($this->remindId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('rid');
		$xfer += $output->writeI64($this->rid);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
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