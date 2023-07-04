<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service\guide;

class GuideShareParamResult {
	
	static $_TSPEC;
	public $externalUserId = null;
	public $materialType = null;
	public $miniProgramUrl = null;
	public $picTitle = null;
	public $picUrl = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'externalUserId'
			),
			2 => array(
			'var' => 'materialType'
			),
			3 => array(
			'var' => 'miniProgramUrl'
			),
			4 => array(
			'var' => 'picTitle'
			),
			5 => array(
			'var' => 'picUrl'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['externalUserId'])){
				
				$this->externalUserId = $vals['externalUserId'];
			}
			
			
			if (isset($vals['materialType'])){
				
				$this->materialType = $vals['materialType'];
			}
			
			
			if (isset($vals['miniProgramUrl'])){
				
				$this->miniProgramUrl = $vals['miniProgramUrl'];
			}
			
			
			if (isset($vals['picTitle'])){
				
				$this->picTitle = $vals['picTitle'];
			}
			
			
			if (isset($vals['picUrl'])){
				
				$this->picUrl = $vals['picUrl'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GuideShareParamResult';
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
			
			
			
			
			if ("materialType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->materialType); 
				
			}
			
			
			
			
			if ("miniProgramUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->miniProgramUrl);
				
			}
			
			
			
			
			if ("picTitle" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->picTitle);
				
			}
			
			
			
			
			if ("picUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->picUrl);
				
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
		
		if($this->externalUserId !== null) {
			
			$xfer += $output->writeFieldBegin('externalUserId');
			$xfer += $output->writeString($this->externalUserId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->materialType !== null) {
			
			$xfer += $output->writeFieldBegin('materialType');
			$xfer += $output->writeI32($this->materialType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->miniProgramUrl !== null) {
			
			$xfer += $output->writeFieldBegin('miniProgramUrl');
			$xfer += $output->writeString($this->miniProgramUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->picTitle !== null) {
			
			$xfer += $output->writeFieldBegin('picTitle');
			$xfer += $output->writeString($this->picTitle);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->picUrl !== null) {
			
			$xfer += $output->writeFieldBegin('picUrl');
			$xfer += $output->writeString($this->picUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>