<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class SupplierNRVo {
	
	static $_TSPEC;
	public $id = null;
	public $code = null;
	public $name = null;
	public $supplierType = null;
	public $enableStatus = null;
	public $purChannel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'code'
			),
			3 => array(
			'var' => 'name'
			),
			4 => array(
			'var' => 'supplierType'
			),
			5 => array(
			'var' => 'enableStatus'
			),
			6 => array(
			'var' => 'purChannel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['supplierType'])){
				
				$this->supplierType = $vals['supplierType'];
			}
			
			
			if (isset($vals['enableStatus'])){
				
				$this->enableStatus = $vals['enableStatus'];
			}
			
			
			if (isset($vals['purChannel'])){
				
				$this->purChannel = $vals['purChannel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SupplierNRVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("supplierType" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->supplierType); 
				
			}
			
			
			
			
			if ("enableStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->enableStatus); 
				
			}
			
			
			
			
			if ("purChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purChannel);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeString($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('supplierType');
		$xfer += $output->writeI64($this->supplierType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('enableStatus');
		$xfer += $output->writeI64($this->enableStatus);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->purChannel !== null) {
			
			$xfer += $output->writeFieldBegin('purChannel');
			$xfer += $output->writeString($this->purChannel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>