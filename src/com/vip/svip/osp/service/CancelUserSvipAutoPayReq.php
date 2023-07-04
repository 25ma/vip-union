<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class CancelUserSvipAutoPayReq {
	
	static $_TSPEC;
	public $userId = null;
	public $contractSn = null;
	public $oprType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'contractSn'
			),
			3 => array(
			'var' => 'oprType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['contractSn'])){
				
				$this->contractSn = $vals['contractSn'];
			}
			
			
			if (isset($vals['oprType'])){
				
				$this->oprType = $vals['oprType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelUserSvipAutoPayReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("contractSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contractSn);
				
			}
			
			
			
			
			if ("oprType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->oprType); 
				
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
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contractSn');
		$xfer += $output->writeString($this->contractSn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->oprType !== null) {
			
			$xfer += $output->writeFieldBegin('oprType');
			$xfer += $output->writeI32($this->oprType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>