<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\order\vo;

class WpcReturnOrderSpecialGoodsOptionVo {
	
	static $_TSPEC;
	public $optionId = null;
	public $optionName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2101 => array(
			'var' => 'optionId'
			),
			2102 => array(
			'var' => 'optionName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['optionId'])){
				
				$this->optionId = $vals['optionId'];
			}
			
			
			if (isset($vals['optionName'])){
				
				$this->optionName = $vals['optionName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcReturnOrderSpecialGoodsOptionVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("optionId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->optionId);
				
			}
			
			
			
			
			if ("optionName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->optionName);
				
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
		
		if($this->optionId !== null) {
			
			$xfer += $output->writeFieldBegin('optionId');
			$xfer += $output->writeString($this->optionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->optionName !== null) {
			
			$xfer += $output->writeFieldBegin('optionName');
			$xfer += $output->writeString($this->optionName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>