<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcReputationKeyVo {
	
	static $_TSPEC;
	public $keyword = null;
	public $keywordCount = null;
	public $keyId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12001 => array(
			'var' => 'keyword'
			),
			12002 => array(
			'var' => 'keywordCount'
			),
			12003 => array(
			'var' => 'keyId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['keyword'])){
				
				$this->keyword = $vals['keyword'];
			}
			
			
			if (isset($vals['keywordCount'])){
				
				$this->keywordCount = $vals['keywordCount'];
			}
			
			
			if (isset($vals['keyId'])){
				
				$this->keyId = $vals['keyId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcReputationKeyVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("keyword" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->keyword);
				
			}
			
			
			
			
			if ("keywordCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->keywordCount); 
				
			}
			
			
			
			
			if ("keyId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->keyId); 
				
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
		
		if($this->keyword !== null) {
			
			$xfer += $output->writeFieldBegin('keyword');
			$xfer += $output->writeString($this->keyword);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->keywordCount !== null) {
			
			$xfer += $output->writeFieldBegin('keywordCount');
			$xfer += $output->writeI32($this->keywordCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->keyId !== null) {
			
			$xfer += $output->writeFieldBegin('keyId');
			$xfer += $output->writeI64($this->keyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>