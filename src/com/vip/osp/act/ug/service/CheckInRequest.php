<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\act\ug\service;

class CheckInRequest {
	
	static $_TSPEC;
	public $act_id = null;
	public $mobile = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'act_id'
			),
			2 => array(
			'var' => 'mobile'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['act_id'])){
				
				$this->act_id = $vals['act_id'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CheckInRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("act_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->act_id);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
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
		
		if($this->act_id !== null) {
			
			$xfer += $output->writeFieldBegin('act_id');
			$xfer += $output->writeString($this->act_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>