<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class GetSvipPrizeInfoRequest {
	
	static $_TSPEC;
	public $actCode = null;
	public $ip = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'ip'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetSvipPrizeInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("actCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actCode);
				
			}
			
			
			
			
			if ("ip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ip);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
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
		
		$xfer += $output->writeFieldBegin('actCode');
		$xfer += $output->writeString($this->actCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ip');
		$xfer += $output->writeString($this->ip);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>