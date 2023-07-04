<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\common\request;

class WpcAdminRequest {
	
	static $_TSPEC;
	public $deviceModel = null;
	public $deviceSystem = null;
	public $version = null;
	public $appName = null;
	public $timestamp = null;
	public $marsCid = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			501 => array(
			'var' => 'deviceModel'
			),
			502 => array(
			'var' => 'deviceSystem'
			),
			503 => array(
			'var' => 'version'
			),
			504 => array(
			'var' => 'appName'
			),
			505 => array(
			'var' => 'timestamp'
			),
			506 => array(
			'var' => 'marsCid'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['deviceModel'])){
				
				$this->deviceModel = $vals['deviceModel'];
			}
			
			
			if (isset($vals['deviceSystem'])){
				
				$this->deviceSystem = $vals['deviceSystem'];
			}
			
			
			if (isset($vals['version'])){
				
				$this->version = $vals['version'];
			}
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['timestamp'])){
				
				$this->timestamp = $vals['timestamp'];
			}
			
			
			if (isset($vals['marsCid'])){
				
				$this->marsCid = $vals['marsCid'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcAdminRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("deviceModel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deviceModel);
				
			}
			
			
			
			
			if ("deviceSystem" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deviceSystem);
				
			}
			
			
			
			
			if ("version" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->version);
				
			}
			
			
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("timestamp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->timestamp);
				
			}
			
			
			
			
			if ("marsCid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->marsCid);
				
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
		
		if($this->deviceModel !== null) {
			
			$xfer += $output->writeFieldBegin('deviceModel');
			$xfer += $output->writeString($this->deviceModel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deviceSystem !== null) {
			
			$xfer += $output->writeFieldBegin('deviceSystem');
			$xfer += $output->writeString($this->deviceSystem);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->version !== null) {
			
			$xfer += $output->writeFieldBegin('version');
			$xfer += $output->writeString($this->version);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timestamp !== null) {
			
			$xfer += $output->writeFieldBegin('timestamp');
			$xfer += $output->writeString($this->timestamp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->marsCid !== null) {
			
			$xfer += $output->writeFieldBegin('marsCid');
			$xfer += $output->writeString($this->marsCid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>