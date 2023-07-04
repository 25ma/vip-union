<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying;

class QueryPoBasicInfoReq {
	
	static $_TSPEC;
	public $bizNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bizNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bizNo'])){
				
				$this->bizNo = $vals['bizNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryPoBasicInfoReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("bizNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizNo);
				
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
		
		if($this->bizNo !== null) {
			
			$xfer += $output->writeFieldBegin('bizNo');
			$xfer += $output->writeString($this->bizNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>