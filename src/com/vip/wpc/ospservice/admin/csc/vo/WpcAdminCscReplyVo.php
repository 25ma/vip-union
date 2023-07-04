<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\admin\csc\vo;

class WpcAdminCscReplyVo {
	
	static $_TSPEC;
	public $msgId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12001 => array(
			'var' => 'msgId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['msgId'])){
				
				$this->msgId = $vals['msgId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcAdminCscReplyVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("msgId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msgId);
				
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
		
		if($this->msgId !== null) {
			
			$xfer += $output->writeFieldBegin('msgId');
			$xfer += $output->writeString($this->msgId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>