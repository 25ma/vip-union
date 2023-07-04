<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop\request;

class WpcCscReplyRequest {
	
	static $_TSPEC;
	public $areaId = null;
	public $timestamp = null;
	public $vopChannelId = null;
	public $userNumber = null;
	public $parentCscNo = null;
	public $questionDesc = null;
	public $appendFiles = null;
	public $createUserName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			501 => array(
			'var' => 'areaId'
			),
			502 => array(
			'var' => 'timestamp'
			),
			503 => array(
			'var' => 'vopChannelId'
			),
			504 => array(
			'var' => 'userNumber'
			),
			10901 => array(
			'var' => 'parentCscNo'
			),
			10902 => array(
			'var' => 'questionDesc'
			),
			10903 => array(
			'var' => 'appendFiles'
			),
			10904 => array(
			'var' => 'createUserName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['timestamp'])){
				
				$this->timestamp = $vals['timestamp'];
			}
			
			
			if (isset($vals['vopChannelId'])){
				
				$this->vopChannelId = $vals['vopChannelId'];
			}
			
			
			if (isset($vals['userNumber'])){
				
				$this->userNumber = $vals['userNumber'];
			}
			
			
			if (isset($vals['parentCscNo'])){
				
				$this->parentCscNo = $vals['parentCscNo'];
			}
			
			
			if (isset($vals['questionDesc'])){
				
				$this->questionDesc = $vals['questionDesc'];
			}
			
			
			if (isset($vals['appendFiles'])){
				
				$this->appendFiles = $vals['appendFiles'];
			}
			
			
			if (isset($vals['createUserName'])){
				
				$this->createUserName = $vals['createUserName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcCscReplyRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("timestamp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->timestamp);
				
			}
			
			
			
			
			if ("vopChannelId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vopChannelId);
				
			}
			
			
			
			
			if ("userNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userNumber);
				
			}
			
			
			
			
			if ("parentCscNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentCscNo);
				
			}
			
			
			
			
			if ("questionDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->questionDesc);
				
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
			
			
			
			
			if ("createUserName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createUserName);
				
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
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timestamp !== null) {
			
			$xfer += $output->writeFieldBegin('timestamp');
			$xfer += $output->writeString($this->timestamp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vopChannelId !== null) {
			
			$xfer += $output->writeFieldBegin('vopChannelId');
			$xfer += $output->writeString($this->vopChannelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userNumber !== null) {
			
			$xfer += $output->writeFieldBegin('userNumber');
			$xfer += $output->writeString($this->userNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentCscNo !== null) {
			
			$xfer += $output->writeFieldBegin('parentCscNo');
			$xfer += $output->writeString($this->parentCscNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->questionDesc !== null) {
			
			$xfer += $output->writeFieldBegin('questionDesc');
			$xfer += $output->writeString($this->questionDesc);
			
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
		
		
		if($this->createUserName !== null) {
			
			$xfer += $output->writeFieldBegin('createUserName');
			$xfer += $output->writeString($this->createUserName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>