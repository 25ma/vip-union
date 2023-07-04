<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class EmailBodyVo {
	
	static $_TSPEC;
	public $toEmail = null;
	public $subject = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'toEmail'
			),
			2 => array(
			'var' => 'subject'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['toEmail'])){
				
				$this->toEmail = $vals['toEmail'];
			}
			
			
			if (isset($vals['subject'])){
				
				$this->subject = $vals['subject'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EmailBodyVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("toEmail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->toEmail);
				
			}
			
			
			
			
			if ("subject" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subject);
				
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
		
		$xfer += $output->writeFieldBegin('toEmail');
		$xfer += $output->writeString($this->toEmail);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->subject !== null) {
			
			$xfer += $output->writeFieldBegin('subject');
			$xfer += $output->writeString($this->subject);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>