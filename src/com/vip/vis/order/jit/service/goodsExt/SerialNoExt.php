<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\goodsExt;

class SerialNoExt {
	
	static $_TSPEC;
	public $serial_no = null;
	public $seal_verify_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serial_no'
			),
			2 => array(
			'var' => 'seal_verify_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serial_no'])){
				
				$this->serial_no = $vals['serial_no'];
			}
			
			
			if (isset($vals['seal_verify_no'])){
				
				$this->seal_verify_no = $vals['seal_verify_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SerialNoExt';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("serial_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serial_no);
				
			}
			
			
			
			
			if ("seal_verify_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seal_verify_no);
				
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
		
		if($this->serial_no !== null) {
			
			$xfer += $output->writeFieldBegin('serial_no');
			$xfer += $output->writeString($this->serial_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seal_verify_no !== null) {
			
			$xfer += $output->writeFieldBegin('seal_verify_no');
			$xfer += $output->writeString($this->seal_verify_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>