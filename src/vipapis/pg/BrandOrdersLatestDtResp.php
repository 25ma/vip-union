<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\pg;

class BrandOrdersLatestDtResp {
	
	static $_TSPEC;
	public $latest_dt = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'latest_dt'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['latest_dt'])){
				
				$this->latest_dt = $vals['latest_dt'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandOrdersLatestDtResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("latest_dt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->latest_dt);
				
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
		
		$xfer += $output->writeFieldBegin('latest_dt');
		$xfer += $output->writeString($this->latest_dt);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>