<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\bip\report\service;

class DownloadResult {
	
	static $_TSPEC;
	public $resultCode = null;
	public $downloadUrl = null;
	public $errMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'resultCode'
			),
			2 => array(
			'var' => 'downloadUrl'
			),
			3 => array(
			'var' => 'errMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['resultCode'])){
				
				$this->resultCode = $vals['resultCode'];
			}
			
			
			if (isset($vals['downloadUrl'])){
				
				$this->downloadUrl = $vals['downloadUrl'];
			}
			
			
			if (isset($vals['errMsg'])){
				
				$this->errMsg = $vals['errMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DownloadResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("resultCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->resultCode); 
				
			}
			
			
			
			
			if ("downloadUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->downloadUrl);
				
			}
			
			
			
			
			if ("errMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errMsg);
				
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
		
		$xfer += $output->writeFieldBegin('resultCode');
		$xfer += $output->writeI32($this->resultCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->downloadUrl !== null) {
			
			$xfer += $output->writeFieldBegin('downloadUrl');
			$xfer += $output->writeString($this->downloadUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errMsg !== null) {
			
			$xfer += $output->writeFieldBegin('errMsg');
			$xfer += $output->writeString($this->errMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>