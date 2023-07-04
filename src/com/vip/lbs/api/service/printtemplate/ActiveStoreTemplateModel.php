<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class ActiveStoreTemplateModel {
	
	static $_TSPEC;
	public $storeTmplId = null;
	public $storeTmplName = null;
	public $storeTmplVersion = null;
	public $storeTmplUpdateTime = null;
	public $storeTmplIdStr = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'storeTmplId'
			),
			2 => array(
			'var' => 'storeTmplName'
			),
			3 => array(
			'var' => 'storeTmplVersion'
			),
			4 => array(
			'var' => 'storeTmplUpdateTime'
			),
			5 => array(
			'var' => 'storeTmplIdStr'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['storeTmplId'])){
				
				$this->storeTmplId = $vals['storeTmplId'];
			}
			
			
			if (isset($vals['storeTmplName'])){
				
				$this->storeTmplName = $vals['storeTmplName'];
			}
			
			
			if (isset($vals['storeTmplVersion'])){
				
				$this->storeTmplVersion = $vals['storeTmplVersion'];
			}
			
			
			if (isset($vals['storeTmplUpdateTime'])){
				
				$this->storeTmplUpdateTime = $vals['storeTmplUpdateTime'];
			}
			
			
			if (isset($vals['storeTmplIdStr'])){
				
				$this->storeTmplIdStr = $vals['storeTmplIdStr'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActiveStoreTemplateModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("storeTmplId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->storeTmplId); 
				
			}
			
			
			
			
			if ("storeTmplName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeTmplName);
				
			}
			
			
			
			
			if ("storeTmplVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->storeTmplVersion); 
				
			}
			
			
			
			
			if ("storeTmplUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->storeTmplUpdateTime); 
				
			}
			
			
			
			
			if ("storeTmplIdStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeTmplIdStr);
				
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
		
		if($this->storeTmplId !== null) {
			
			$xfer += $output->writeFieldBegin('storeTmplId');
			$xfer += $output->writeI64($this->storeTmplId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeTmplName !== null) {
			
			$xfer += $output->writeFieldBegin('storeTmplName');
			$xfer += $output->writeString($this->storeTmplName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeTmplVersion !== null) {
			
			$xfer += $output->writeFieldBegin('storeTmplVersion');
			$xfer += $output->writeI32($this->storeTmplVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeTmplUpdateTime !== null) {
			
			$xfer += $output->writeFieldBegin('storeTmplUpdateTime');
			$xfer += $output->writeI64($this->storeTmplUpdateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeTmplIdStr !== null) {
			
			$xfer += $output->writeFieldBegin('storeTmplIdStr');
			$xfer += $output->writeString($this->storeTmplIdStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>