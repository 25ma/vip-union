<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class GetGroupInfoReqModel {
	
	static $_TSPEC;
	public $merchantCode = null;
	public $appKey = null;
	public $groupId = null;
	public $needCardDetailCount = null;
	
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
			'var' => 'groupId'
			),
			14 => array(
			'var' => 'needCardDetailCount'
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
			
			
			if (isset($vals['groupId'])){
				
				$this->groupId = $vals['groupId'];
			}
			
			
			if (isset($vals['needCardDetailCount'])){
				
				$this->needCardDetailCount = $vals['needCardDetailCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetGroupInfoReqModel';
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
			
			
			
			
			if ("groupId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->groupId); 
				
			}
			
			
			
			
			if ("needCardDetailCount" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needCardDetailCount);
				
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
		
		$xfer += $output->writeFieldBegin('groupId');
		$xfer += $output->writeI32($this->groupId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->needCardDetailCount !== null) {
			
			$xfer += $output->writeFieldBegin('needCardDetailCount');
			$xfer += $output->writeBool($this->needCardDetailCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>