<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vsc\oms\osp\carrier\track\service;

class AttachmentFile {
	
	static $_TSPEC;
	public $attachment_hash = null;
	public $attachment_type = null;
	public $attachment_url = null;
	public $expire_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attachment_hash'
			),
			2 => array(
			'var' => 'attachment_type'
			),
			3 => array(
			'var' => 'attachment_url'
			),
			4 => array(
			'var' => 'expire_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attachment_hash'])){
				
				$this->attachment_hash = $vals['attachment_hash'];
			}
			
			
			if (isset($vals['attachment_type'])){
				
				$this->attachment_type = $vals['attachment_type'];
			}
			
			
			if (isset($vals['attachment_url'])){
				
				$this->attachment_url = $vals['attachment_url'];
			}
			
			
			if (isset($vals['expire_time'])){
				
				$this->expire_time = $vals['expire_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AttachmentFile';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attachment_hash" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attachment_hash);
				
			}
			
			
			
			
			if ("attachment_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->attachment_type); 
				
			}
			
			
			
			
			if ("attachment_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attachment_url);
				
			}
			
			
			
			
			if ("expire_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expire_time);
				
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
		
		$xfer += $output->writeFieldBegin('attachment_hash');
		$xfer += $output->writeString($this->attachment_hash);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('attachment_type');
		$xfer += $output->writeByte($this->attachment_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('attachment_url');
		$xfer += $output->writeString($this->attachment_url);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->expire_time !== null) {
			
			$xfer += $output->writeFieldBegin('expire_time');
			$xfer += $output->writeI64($this->expire_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>