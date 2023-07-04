<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class LbsGetPrintTemplateRequest {
	
	static $_TSPEC;
	public $header = null;
	public $ownerId = null;
	public $carrierCode = null;
	public $templateId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'ownerId'
			),
			3 => array(
			'var' => 'carrierCode'
			),
			4 => array(
			'var' => 'templateId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['ownerId'])){
				
				$this->ownerId = $vals['ownerId'];
			}
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['templateId'])){
				
				$this->templateId = $vals['templateId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LbsGetPrintTemplateRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("header" == $schemeField){
				
				$needSkip = false;
				
				$this->header = new \com\vip\lbs\api\service\common\LbsApiRequestHeader();
				$this->header->read($input);
				
			}
			
			
			
			
			if ("ownerId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ownerId);
				
			}
			
			
			
			
			if ("carrierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierCode);
				
			}
			
			
			
			
			if ("templateId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->templateId); 
				
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
		
		$xfer += $output->writeFieldBegin('ownerId');
		$xfer += $output->writeString($this->ownerId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->carrierCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierCode');
			$xfer += $output->writeString($this->carrierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateId !== null) {
			
			$xfer += $output->writeFieldBegin('templateId');
			$xfer += $output->writeI64($this->templateId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>