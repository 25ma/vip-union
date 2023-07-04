<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\admin\csc\vo;

class WpcAdminCscCreateVo {
	
	static $_TSPEC;
	public $parentCscNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			10901 => array(
			'var' => 'parentCscNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['parentCscNo'])){
				
				$this->parentCscNo = $vals['parentCscNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcAdminCscCreateVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("parentCscNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentCscNo);
				
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
		
		if($this->parentCscNo !== null) {
			
			$xfer += $output->writeFieldBegin('parentCscNo');
			$xfer += $output->writeString($this->parentCscNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>