<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class BindCardForUserIdReqModel {
	
	static $_TSPEC;
	public $merchantCode = null;
	public $appKey = null;
	public $userId = null;
	public $groupId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			11 => array(
			'var' => 'merchantCode'
			),
			12 => array(
			'var' => 'appKey'
			),
			13 => array(
			'var' => 'userId'
			),
			14 => array(
			'var' => 'groupId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['merchantCode'])){
				
				$this->merchantCode = $vals['merchantCode'];
			}
			
			
			if (isset($vals['appKey'])){
				
				$this->appKey = $vals['appKey'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['groupId'])){
				
				$this->groupId = $vals['groupId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BindCardForUserIdReqModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("merchantCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchantCode);
				
			}
			
			
			
			
			if ("appKey" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appKey);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("groupId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->groupId); 
				
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
		
		$xfer += $output->writeFieldBegin('merchantCode');
		$xfer += $output->writeString($this->merchantCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appKey');
		$xfer += $output->writeString($this->appKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('groupId');
		$xfer += $output->writeI32($this->groupId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>