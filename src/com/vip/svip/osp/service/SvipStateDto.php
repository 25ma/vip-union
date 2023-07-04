<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipStateDto {
	
	static $_TSPEC;
	public $userStatus = null;
	public $expireTime = null;
	public $remainingDays = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userStatus'
			),
			2 => array(
			'var' => 'expireTime'
			),
			3 => array(
			'var' => 'remainingDays'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userStatus'])){
				
				$this->userStatus = $vals['userStatus'];
			}
			
			
			if (isset($vals['expireTime'])){
				
				$this->expireTime = $vals['expireTime'];
			}
			
			
			if (isset($vals['remainingDays'])){
				
				$this->remainingDays = $vals['remainingDays'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipStateDto';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userStatus); 
				
			}
			
			
			
			
			if ("expireTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expireTime); 
				
			}
			
			
			
			
			if ("remainingDays" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->remainingDays); 
				
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
		
		$xfer += $output->writeFieldBegin('userStatus');
		$xfer += $output->writeI32($this->userStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('expireTime');
		$xfer += $output->writeI64($this->expireTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('remainingDays');
		$xfer += $output->writeI32($this->remainingDays);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>