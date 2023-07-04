<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CancelAutoApplyResult {
	
	static $_TSPEC;
	public $autoApplyOpResult = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'autoApplyOpResult'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['autoApplyOpResult'])){
				
				$this->autoApplyOpResult = $vals['autoApplyOpResult'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelAutoApplyResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("autoApplyOpResult" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->autoApplyOpResult);
				
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
		
		if($this->autoApplyOpResult !== null) {
			
			$xfer += $output->writeFieldBegin('autoApplyOpResult');
			$xfer += $output->writeString($this->autoApplyOpResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>