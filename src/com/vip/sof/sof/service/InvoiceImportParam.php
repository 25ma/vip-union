<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class InvoiceImportParam {
	
	static $_TSPEC;
	public $appName = null;
	public $fid = null;
	public $id = null;
	public $uploadContent = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appName'
			),
			2 => array(
			'var' => 'fid'
			),
			3 => array(
			'var' => 'id'
			),
			4 => array(
			'var' => 'uploadContent'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['fid'])){
				
				$this->fid = $vals['fid'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['uploadContent'])){
				
				$this->uploadContent = $vals['uploadContent'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvoiceImportParam';
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
			
			
			
			
			if ("fid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fid);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("uploadContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uploadContent);
				
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
		
		
		if($this->fid !== null) {
			
			$xfer += $output->writeFieldBegin('fid');
			$xfer += $output->writeString($this->fid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uploadContent !== null) {
			
			$xfer += $output->writeFieldBegin('uploadContent');
			$xfer += $output->writeString($this->uploadContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>