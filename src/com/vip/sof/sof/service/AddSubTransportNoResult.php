<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AddSubTransportNoResult {
	
	static $_TSPEC;
	public $opResult = null;
	public $subTransportNo = null;
	public $errorMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'opResult'
			),
			2 => array(
			'var' => 'subTransportNo'
			),
			3 => array(
			'var' => 'errorMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['opResult'])){
				
				$this->opResult = $vals['opResult'];
			}
			
			
			if (isset($vals['subTransportNo'])){
				
				$this->subTransportNo = $vals['subTransportNo'];
			}
			
			
			if (isset($vals['errorMsg'])){
				
				$this->errorMsg = $vals['errorMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AddSubTransportNoResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("opResult" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->opResult); 
				
			}
			
			
			
			
			if ("subTransportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subTransportNo);
				
			}
			
			
			
			
			if ("errorMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorMsg);
				
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
		
		if($this->opResult !== null) {
			
			$xfer += $output->writeFieldBegin('opResult');
			$xfer += $output->writeByte($this->opResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subTransportNo !== null) {
			
			$xfer += $output->writeFieldBegin('subTransportNo');
			$xfer += $output->writeString($this->subTransportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorMsg !== null) {
			
			$xfer += $output->writeFieldBegin('errorMsg');
			$xfer += $output->writeString($this->errorMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>