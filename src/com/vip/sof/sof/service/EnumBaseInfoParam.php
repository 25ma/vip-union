<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class EnumBaseInfoParam {
	
	static $_TSPEC;
	public $appName = null;
	public $nameSpace = null;
	public $enumClass = null;
	public $valueGetMethod = null;
	public $nameGetMethod = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appName'
			),
			2 => array(
			'var' => 'nameSpace'
			),
			3 => array(
			'var' => 'enumClass'
			),
			4 => array(
			'var' => 'valueGetMethod'
			),
			5 => array(
			'var' => 'nameGetMethod'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['nameSpace'])){
				
				$this->nameSpace = $vals['nameSpace'];
			}
			
			
			if (isset($vals['enumClass'])){
				
				$this->enumClass = $vals['enumClass'];
			}
			
			
			if (isset($vals['valueGetMethod'])){
				
				$this->valueGetMethod = $vals['valueGetMethod'];
			}
			
			
			if (isset($vals['nameGetMethod'])){
				
				$this->nameGetMethod = $vals['nameGetMethod'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EnumBaseInfoParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("nameSpace" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->nameSpace);
				
			}
			
			
			
			
			if ("enumClass" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enumClass);
				
			}
			
			
			
			
			if ("valueGetMethod" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->valueGetMethod);
				
			}
			
			
			
			
			if ("nameGetMethod" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->nameGetMethod);
				
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
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->nameSpace !== null) {
			
			$xfer += $output->writeFieldBegin('nameSpace');
			$xfer += $output->writeString($this->nameSpace);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enumClass !== null) {
			
			$xfer += $output->writeFieldBegin('enumClass');
			$xfer += $output->writeString($this->enumClass);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->valueGetMethod !== null) {
			
			$xfer += $output->writeFieldBegin('valueGetMethod');
			$xfer += $output->writeString($this->valueGetMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->nameGetMethod !== null) {
			
			$xfer += $output->writeFieldBegin('nameGetMethod');
			$xfer += $output->writeString($this->nameGetMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>