<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service\guide;

class GuideShareParamUpdateReq {
	
	static $_TSPEC;
	public $externalUserId = null;
	public $usageId = null;
	public $taskType = null;
	public $taskSource = null;
	public $taskId = null;
	public $shareModels = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'externalUserId'
			),
			2 => array(
			'var' => 'usageId'
			),
			3 => array(
			'var' => 'taskType'
			),
			4 => array(
			'var' => 'taskSource'
			),
			5 => array(
			'var' => 'taskId'
			),
			6 => array(
			'var' => 'shareModels'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['externalUserId'])){
				
				$this->externalUserId = $vals['externalUserId'];
			}
			
			
			if (isset($vals['usageId'])){
				
				$this->usageId = $vals['usageId'];
			}
			
			
			if (isset($vals['taskType'])){
				
				$this->taskType = $vals['taskType'];
			}
			
			
			if (isset($vals['taskSource'])){
				
				$this->taskSource = $vals['taskSource'];
			}
			
			
			if (isset($vals['taskId'])){
				
				$this->taskId = $vals['taskId'];
			}
			
			
			if (isset($vals['shareModels'])){
				
				$this->shareModels = $vals['shareModels'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GuideShareParamUpdateReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("externalUserId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->externalUserId);
				
			}
			
			
			
			
			if ("usageId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->usageId); 
				
			}
			
			
			
			
			if ("taskType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->taskType); 
				
			}
			
			
			
			
			if ("taskSource" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->taskSource); 
				
			}
			
			
			
			
			if ("taskId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taskId);
				
			}
			
			
			
			
			if ("shareModels" == $schemeField){
				
				$needSkip = false;
				
				$this->shareModels = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\vpos\service\guide\GuideShareModel();
						$elem0->read($input);
						
						$this->shareModels[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('externalUserId');
		$xfer += $output->writeString($this->externalUserId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('usageId');
		$xfer += $output->writeI32($this->usageId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->taskType !== null) {
			
			$xfer += $output->writeFieldBegin('taskType');
			$xfer += $output->writeI32($this->taskType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taskSource !== null) {
			
			$xfer += $output->writeFieldBegin('taskSource');
			$xfer += $output->writeI32($this->taskSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taskId !== null) {
			
			$xfer += $output->writeFieldBegin('taskId');
			$xfer += $output->writeString($this->taskId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('shareModels');
		
		if (!is_array($this->shareModels)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->shareModels as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>