<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class PushPosResult {
	
	static $_TSPEC;
	public $result = null;
	public $successCount = null;
	public $errorCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'result'
			),
			2 => array(
			'var' => 'successCount'
			),
			3 => array(
			'var' => 'errorCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['successCount'])){
				
				$this->successCount = $vals['successCount'];
			}
			
			
			if (isset($vals['errorCount'])){
				
				$this->errorCount = $vals['errorCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PushPosResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result);
				
			}
			
			
			
			
			if ("successCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->successCount); 
				
			}
			
			
			
			
			if ("errorCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->errorCount); 
				
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
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			$xfer += $output->writeString($this->result);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('successCount');
		$xfer += $output->writeI32($this->successCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('errorCount');
		$xfer += $output->writeI32($this->errorCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>