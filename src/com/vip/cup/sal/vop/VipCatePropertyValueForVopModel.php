<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class VipCatePropertyValueForVopModel {
	
	static $_TSPEC;
	public $optionId = null;
	public $optionAliases = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'optionId'
			),
			2 => array(
			'var' => 'optionAliases'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['optionId'])){
				
				$this->optionId = $vals['optionId'];
			}
			
			
			if (isset($vals['optionAliases'])){
				
				$this->optionAliases = $vals['optionAliases'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipCatePropertyValueForVopModel';
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
			
			
			
			
			if ("optionAliases" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->optionAliases);
				
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
		
		
		if($this->optionAliases !== null) {
			
			$xfer += $output->writeFieldBegin('optionAliases');
			$xfer += $output->writeString($this->optionAliases);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>