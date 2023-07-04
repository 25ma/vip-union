<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\da\service;

class ExpressCabinetReq {
	
	static $_TSPEC;
	public $logistics_no = null;
	public $courier_mobile = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'logistics_no'
			),
			2 => array(
			'var' => 'courier_mobile'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['courier_mobile'])){
				
				$this->courier_mobile = $vals['courier_mobile'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExpressCabinetReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("courier_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->courier_mobile);
				
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
		
		if($this->logistics_no !== null) {
			
			$xfer += $output->writeFieldBegin('logistics_no');
			$xfer += $output->writeString($this->logistics_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->courier_mobile !== null) {
			
			$xfer += $output->writeFieldBegin('courier_mobile');
			$xfer += $output->writeString($this->courier_mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>