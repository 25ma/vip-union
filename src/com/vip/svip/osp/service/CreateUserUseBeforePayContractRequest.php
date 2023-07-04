<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class CreateUserUseBeforePayContractRequest {
	
	static $_TSPEC;
	public $mobilePlatform = null;
	public $wxAppId = null;
	public $appName = null;
	public $appVersion = null;
	public $marsId = null;
	public $operateSystem = null;
	public $operateSystemVersion = null;
	public $dinfo = null;
	public $did = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mobilePlatform'
			),
			2 => array(
			'var' => 'wxAppId'
			),
			3 => array(
			'var' => 'appName'
			),
			4 => array(
			'var' => 'appVersion'
			),
			5 => array(
			'var' => 'marsId'
			),
			6 => array(
			'var' => 'operateSystem'
			),
			7 => array(
			'var' => 'operateSystemVersion'
			),
			8 => array(
			'var' => 'dinfo'
			),
			9 => array(
			'var' => 'did'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mobilePlatform'])){
				
				$this->mobilePlatform = $vals['mobilePlatform'];
			}
			
			
			if (isset($vals['wxAppId'])){
				
				$this->wxAppId = $vals['wxAppId'];
			}
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['appVersion'])){
				
				$this->appVersion = $vals['appVersion'];
			}
			
			
			if (isset($vals['marsId'])){
				
				$this->marsId = $vals['marsId'];
			}
			
			
			if (isset($vals['operateSystem'])){
				
				$this->operateSystem = $vals['operateSystem'];
			}
			
			
			if (isset($vals['operateSystemVersion'])){
				
				$this->operateSystemVersion = $vals['operateSystemVersion'];
			}
			
			
			if (isset($vals['dinfo'])){
				
				$this->dinfo = $vals['dinfo'];
			}
			
			
			if (isset($vals['did'])){
				
				$this->did = $vals['did'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateUserUseBeforePayContractRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mobilePlatform" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->mobilePlatform); 
				
			}
			
			
			
			
			if ("wxAppId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wxAppId);
				
			}
			
			
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("appVersion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appVersion);
				
			}
			
			
			
			
			if ("marsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->marsId);
				
			}
			
			
			
			
			if ("operateSystem" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operateSystem);
				
			}
			
			
			
			
			if ("operateSystemVersion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operateSystemVersion);
				
			}
			
			
			
			
			if ("dinfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dinfo);
				
			}
			
			
			
			
			if ("did" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->did);
				
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
		
		$xfer += $output->writeFieldBegin('mobilePlatform');
		$xfer += $output->writeI32($this->mobilePlatform);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->wxAppId !== null) {
			
			$xfer += $output->writeFieldBegin('wxAppId');
			$xfer += $output->writeString($this->wxAppId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appVersion !== null) {
			
			$xfer += $output->writeFieldBegin('appVersion');
			$xfer += $output->writeString($this->appVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->marsId !== null) {
			
			$xfer += $output->writeFieldBegin('marsId');
			$xfer += $output->writeString($this->marsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateSystem !== null) {
			
			$xfer += $output->writeFieldBegin('operateSystem');
			$xfer += $output->writeString($this->operateSystem);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateSystemVersion !== null) {
			
			$xfer += $output->writeFieldBegin('operateSystemVersion');
			$xfer += $output->writeString($this->operateSystemVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dinfo !== null) {
			
			$xfer += $output->writeFieldBegin('dinfo');
			$xfer += $output->writeString($this->dinfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->did !== null) {
			
			$xfer += $output->writeFieldBegin('did');
			$xfer += $output->writeString($this->did);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>