<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\cipher;

class EncryptDataResult {
	
	static $_TSPEC;
	public $encrypt_data = null;
	public $decrypt_data = null;
	public $state = null;
	public $msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'encrypt_data'
			),
			2 => array(
			'var' => 'decrypt_data'
			),
			3 => array(
			'var' => 'state'
			),
			4 => array(
			'var' => 'msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['encrypt_data'])){
				
				$this->encrypt_data = $vals['encrypt_data'];
			}
			
			
			if (isset($vals['decrypt_data'])){
				
				$this->decrypt_data = $vals['decrypt_data'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EncryptDataResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("encrypt_data" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->encrypt_data);
				
			}
			
			
			
			
			if ("decrypt_data" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->decrypt_data);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->state); 
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
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
		
		if($this->encrypt_data !== null) {
			
			$xfer += $output->writeFieldBegin('encrypt_data');
			$xfer += $output->writeString($this->encrypt_data);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('decrypt_data');
		$xfer += $output->writeString($this->decrypt_data);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('state');
		$xfer += $output->writeI32($this->state);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('msg');
		$xfer += $output->writeString($this->msg);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>