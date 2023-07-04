<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\app\rbp\fin\service;

class RbpFnExpenseInfImportErrorDetailResponse {
	
	static $_TSPEC;
	public $detailNo = null;
	public $error = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'detailNo'
			),
			2 => array(
			'var' => 'error'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['detailNo'])){
				
				$this->detailNo = $vals['detailNo'];
			}
			
			
			if (isset($vals['error'])){
				
				$this->error = $vals['error'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpFnExpenseInfImportErrorDetailResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("detailNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailNo);
				
			}
			
			
			
			
			if ("error" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->error);
				
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
		
		if($this->detailNo !== null) {
			
			$xfer += $output->writeFieldBegin('detailNo');
			$xfer += $output->writeString($this->detailNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->error !== null) {
			
			$xfer += $output->writeFieldBegin('error');
			$xfer += $output->writeString($this->error);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>