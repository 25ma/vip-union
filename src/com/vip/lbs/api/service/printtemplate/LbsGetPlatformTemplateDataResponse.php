<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class LbsGetPlatformTemplateDataResponse {
	
	static $_TSPEC;
	public $header = null;
	public $templateId = null;
	public $templateName = null;
	public $templateContent = null;
	public $version = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'templateId'
			),
			3 => array(
			'var' => 'templateName'
			),
			4 => array(
			'var' => 'templateContent'
			),
			5 => array(
			'var' => 'version'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['templateId'])){
				
				$this->templateId = $vals['templateId'];
			}
			
			
			if (isset($vals['templateName'])){
				
				$this->templateName = $vals['templateName'];
			}
			
			
			if (isset($vals['templateContent'])){
				
				$this->templateContent = $vals['templateContent'];
			}
			
			
			if (isset($vals['version'])){
				
				$this->version = $vals['version'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LbsGetPlatformTemplateDataResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("header" == $schemeField){
				
				$needSkip = false;
				
				$this->header = new \com\vip\lbs\api\service\common\LbsApiResponseHeader();
				$this->header->read($input);
				
			}
			
			
			
			
			if ("templateId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateId);
				
			}
			
			
			
			
			if ("templateName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateName);
				
			}
			
			
			
			
			if ("templateContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateContent);
				
			}
			
			
			
			
			if ("version" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->version); 
				
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
		
		$xfer += $output->writeFieldBegin('header');
		
		if (!is_object($this->header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->templateId !== null) {
			
			$xfer += $output->writeFieldBegin('templateId');
			$xfer += $output->writeString($this->templateId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateName !== null) {
			
			$xfer += $output->writeFieldBegin('templateName');
			$xfer += $output->writeString($this->templateName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateContent !== null) {
			
			$xfer += $output->writeFieldBegin('templateContent');
			$xfer += $output->writeString($this->templateContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->version !== null) {
			
			$xfer += $output->writeFieldBegin('version');
			$xfer += $output->writeI32($this->version);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>