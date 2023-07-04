<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\admin\csc\vo;

class WpcAdminCscProcessVo {
	
	static $_TSPEC;
	public $msgId = null;
	public $cscNo = null;
	public $csName = null;
	public $msgCreateTIme = null;
	public $msgContent = null;
	public $csType = null;
	public $appendFiles = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			10901 => array(
			'var' => 'msgId'
			),
			10902 => array(
			'var' => 'cscNo'
			),
			10903 => array(
			'var' => 'csName'
			),
			10904 => array(
			'var' => 'msgCreateTIme'
			),
			10905 => array(
			'var' => 'msgContent'
			),
			10906 => array(
			'var' => 'csType'
			),
			10907 => array(
			'var' => 'appendFiles'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['msgId'])){
				
				$this->msgId = $vals['msgId'];
			}
			
			
			if (isset($vals['cscNo'])){
				
				$this->cscNo = $vals['cscNo'];
			}
			
			
			if (isset($vals['csName'])){
				
				$this->csName = $vals['csName'];
			}
			
			
			if (isset($vals['msgCreateTIme'])){
				
				$this->msgCreateTIme = $vals['msgCreateTIme'];
			}
			
			
			if (isset($vals['msgContent'])){
				
				$this->msgContent = $vals['msgContent'];
			}
			
			
			if (isset($vals['csType'])){
				
				$this->csType = $vals['csType'];
			}
			
			
			if (isset($vals['appendFiles'])){
				
				$this->appendFiles = $vals['appendFiles'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcAdminCscProcessVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("msgId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msgId);
				
			}
			
			
			
			
			if ("cscNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cscNo);
				
			}
			
			
			
			
			if ("csName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->csName);
				
			}
			
			
			
			
			if ("msgCreateTIme" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msgCreateTIme);
				
			}
			
			
			
			
			if ("msgContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msgContent);
				
			}
			
			
			
			
			if ("csType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->csType); 
				
			}
			
			
			
			
			if ("appendFiles" == $schemeField){
				
				$needSkip = false;
				
				$this->appendFiles = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\wpc\ospservice\admin\csc\request\WpcAdminAppendFilesRequest();
						$elem0->read($input);
						
						$this->appendFiles[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->msgId !== null) {
			
			$xfer += $output->writeFieldBegin('msgId');
			$xfer += $output->writeString($this->msgId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cscNo !== null) {
			
			$xfer += $output->writeFieldBegin('cscNo');
			$xfer += $output->writeString($this->cscNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->csName !== null) {
			
			$xfer += $output->writeFieldBegin('csName');
			$xfer += $output->writeString($this->csName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msgCreateTIme !== null) {
			
			$xfer += $output->writeFieldBegin('msgCreateTIme');
			$xfer += $output->writeString($this->msgCreateTIme);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msgContent !== null) {
			
			$xfer += $output->writeFieldBegin('msgContent');
			$xfer += $output->writeString($this->msgContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->csType !== null) {
			
			$xfer += $output->writeFieldBegin('csType');
			$xfer += $output->writeI32($this->csType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appendFiles !== null) {
			
			$xfer += $output->writeFieldBegin('appendFiles');
			
			if (!is_array($this->appendFiles)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->appendFiles as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>