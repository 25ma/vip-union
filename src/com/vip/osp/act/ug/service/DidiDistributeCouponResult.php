<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\act\ug\service;

class DidiDistributeCouponResult {
	
	static $_TSPEC;
	public $err_code = null;
	public $err_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'err_code'
			),
			2 => array(
			'var' => 'err_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['err_code'])){
				
				$this->err_code = $vals['err_code'];
			}
			
			
			if (isset($vals['err_msg'])){
				
				$this->err_msg = $vals['err_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DidiDistributeCouponResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("err_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->err_code); 
				
			}
			
			
			
			
			if ("err_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->err_msg);
				
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
		
		if($this->err_code !== null) {
			
			$xfer += $output->writeFieldBegin('err_code');
			$xfer += $output->writeI32($this->err_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->err_msg !== null) {
			
			$xfer += $output->writeFieldBegin('err_msg');
			$xfer += $output->writeString($this->err_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>