<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class TemplateData {
	
	static $_TSPEC;
	public $templateId = null;
	public $templateName = null;
	public $templateContent = null;
	public $customDataKey = null;
	public $templateUrl = null;
	public $carrierCode = null;
	public $templateIdStr = null;
	public $platformTemplateURL = null;
	public $templateWidth = null;
	public $templateHeight = null;
	public $customRegionLayout = null;
	public $platformTemplateName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'templateId'
			),
			2 => array(
			'var' => 'templateName'
			),
			3 => array(
			'var' => 'templateContent'
			),
			4 => array(
			'var' => 'customDataKey'
			),
			5 => array(
			'var' => 'templateUrl'
			),
			6 => array(
			'var' => 'carrierCode'
			),
			7 => array(
			'var' => 'templateIdStr'
			),
			8 => array(
			'var' => 'platformTemplateURL'
			),
			9 => array(
			'var' => 'templateWidth'
			),
			10 => array(
			'var' => 'templateHeight'
			),
			11 => array(
			'var' => 'customRegionLayout'
			),
			12 => array(
			'var' => 'platformTemplateName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['templateId'])){
				
				$this->templateId = $vals['templateId'];
			}
			
			
			if (isset($vals['templateName'])){
				
				$this->templateName = $vals['templateName'];
			}
			
			
			if (isset($vals['templateContent'])){
				
				$this->templateContent = $vals['templateContent'];
			}
			
			
			if (isset($vals['customDataKey'])){
				
				$this->customDataKey = $vals['customDataKey'];
			}
			
			
			if (isset($vals['templateUrl'])){
				
				$this->templateUrl = $vals['templateUrl'];
			}
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['templateIdStr'])){
				
				$this->templateIdStr = $vals['templateIdStr'];
			}
			
			
			if (isset($vals['platformTemplateURL'])){
				
				$this->platformTemplateURL = $vals['platformTemplateURL'];
			}
			
			
			if (isset($vals['templateWidth'])){
				
				$this->templateWidth = $vals['templateWidth'];
			}
			
			
			if (isset($vals['templateHeight'])){
				
				$this->templateHeight = $vals['templateHeight'];
			}
			
			
			if (isset($vals['customRegionLayout'])){
				
				$this->customRegionLayout = $vals['customRegionLayout'];
			}
			
			
			if (isset($vals['platformTemplateName'])){
				
				$this->platformTemplateName = $vals['platformTemplateName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TemplateData';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("templateId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->templateId); 
				
			}
			
			
			
			
			if ("templateName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateName);
				
			}
			
			
			
			
			if ("templateContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateContent);
				
			}
			
			
			
			
			if ("customDataKey" == $schemeField){
				
				$needSkip = false;
				
				$this->customDataKey = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->customDataKey[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("templateUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateUrl);
				
			}
			
			
			
			
			if ("carrierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierCode);
				
			}
			
			
			
			
			if ("templateIdStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateIdStr);
				
			}
			
			
			
			
			if ("platformTemplateURL" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->platformTemplateURL);
				
			}
			
			
			
			
			if ("templateWidth" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->templateWidth);
				
			}
			
			
			
			
			if ("templateHeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->templateHeight);
				
			}
			
			
			
			
			if ("customRegionLayout" == $schemeField){
				
				$needSkip = false;
				
				$this->customRegionLayout = new \com\vip\lbs\api\service\printtemplate\CustomRegionLayout();
				$this->customRegionLayout->read($input);
				
			}
			
			
			
			
			if ("platformTemplateName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->platformTemplateName);
				
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
		
		if($this->templateId !== null) {
			
			$xfer += $output->writeFieldBegin('templateId');
			$xfer += $output->writeI64($this->templateId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('templateName');
		$xfer += $output->writeString($this->templateName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->templateContent !== null) {
			
			$xfer += $output->writeFieldBegin('templateContent');
			$xfer += $output->writeString($this->templateContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customDataKey !== null) {
			
			$xfer += $output->writeFieldBegin('customDataKey');
			
			if (!is_array($this->customDataKey)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->customDataKey as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateUrl !== null) {
			
			$xfer += $output->writeFieldBegin('templateUrl');
			$xfer += $output->writeString($this->templateUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierCode');
			$xfer += $output->writeString($this->carrierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateIdStr !== null) {
			
			$xfer += $output->writeFieldBegin('templateIdStr');
			$xfer += $output->writeString($this->templateIdStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->platformTemplateURL !== null) {
			
			$xfer += $output->writeFieldBegin('platformTemplateURL');
			$xfer += $output->writeString($this->platformTemplateURL);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateWidth !== null) {
			
			$xfer += $output->writeFieldBegin('templateWidth');
			$xfer += $output->writeDouble($this->templateWidth);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateHeight !== null) {
			
			$xfer += $output->writeFieldBegin('templateHeight');
			$xfer += $output->writeDouble($this->templateHeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customRegionLayout !== null) {
			
			$xfer += $output->writeFieldBegin('customRegionLayout');
			
			if (!is_object($this->customRegionLayout)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->customRegionLayout->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->platformTemplateName !== null) {
			
			$xfer += $output->writeFieldBegin('platformTemplateName');
			$xfer += $output->writeString($this->platformTemplateName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>