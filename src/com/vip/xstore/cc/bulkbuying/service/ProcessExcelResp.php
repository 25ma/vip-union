<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class ProcessExcelResp {
	
	static $_TSPEC;
	public $success = null;
	public $errorFile = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'success'
			),
			2 => array(
			'var' => 'errorFile'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
			if (isset($vals['errorFile'])){
				
				$this->errorFile = $vals['errorFile'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProcessExcelResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("success" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->success);
				
			}
			
			
			
			
			if ("errorFile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorFile);
				
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeBool($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorFile !== null) {
			
			$xfer += $output->writeFieldBegin('errorFile');
			$xfer += $output->writeString($this->errorFile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>