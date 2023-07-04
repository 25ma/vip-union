<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ImportRecordRes {
	
	static $_TSPEC;
	public $seq = null;
	public $res = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'seq'
			),
			2 => array(
			'var' => 'res'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['seq'])){
				
				$this->seq = $vals['seq'];
			}
			
			
			if (isset($vals['res'])){
				
				$this->res = $vals['res'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ImportRecordRes';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("seq" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seq);
				
			}
			
			
			
			
			if ("res" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->res);
				
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
		
		if($this->seq !== null) {
			
			$xfer += $output->writeFieldBegin('seq');
			$xfer += $output->writeString($this->seq);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->res !== null) {
			
			$xfer += $output->writeFieldBegin('res');
			$xfer += $output->writeString($this->res);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>