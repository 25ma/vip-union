<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CancelModuleWOP {
	
	static $_TSPEC;
	public $audit_status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'audit_status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['audit_status'])){
				
				$this->audit_status = $vals['audit_status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelModuleWOP';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("audit_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->audit_status);
				
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
		
		if($this->audit_status !== null) {
			
			$xfer += $output->writeFieldBegin('audit_status');
			$xfer += $output->writeString($this->audit_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>