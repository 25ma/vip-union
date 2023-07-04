<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillCancelResponseDetail {
	
	static $_TSPEC;
	public $transport_no = null;
	public $biz_code = null;
	public $biz_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_no'
			),
			2 => array(
			'var' => 'biz_code'
			),
			3 => array(
			'var' => 'biz_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['biz_code'])){
				
				$this->biz_code = $vals['biz_code'];
			}
			
			
			if (isset($vals['biz_msg'])){
				
				$this->biz_msg = $vals['biz_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillCancelResponseDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("biz_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->biz_code); 
				
			}
			
			
			
			
			if ("biz_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->biz_msg);
				
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
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->biz_code !== null) {
			
			$xfer += $output->writeFieldBegin('biz_code');
			$xfer += $output->writeI32($this->biz_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->biz_msg !== null) {
			
			$xfer += $output->writeFieldBegin('biz_msg');
			$xfer += $output->writeString($this->biz_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>