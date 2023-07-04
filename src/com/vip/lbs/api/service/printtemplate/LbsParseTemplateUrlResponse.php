<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class LbsParseTemplateUrlResponse {
	
	static $_TSPEC;
	public $header = null;
	public $storeTmplId = null;
	public $storeTmplName = null;
	public $storeTmplVersion = null;
	public $sysTmplId = null;
	public $sysTmplVersion = null;
	public $hiprintJson = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'storeTmplId'
			),
			3 => array(
			'var' => 'storeTmplName'
			),
			4 => array(
			'var' => 'storeTmplVersion'
			),
			5 => array(
			'var' => 'sysTmplId'
			),
			6 => array(
			'var' => 'sysTmplVersion'
			),
			7 => array(
			'var' => 'hiprintJson'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['storeTmplId'])){
				
				$this->storeTmplId = $vals['storeTmplId'];
			}
			
			
			if (isset($vals['storeTmplName'])){
				
				$this->storeTmplName = $vals['storeTmplName'];
			}
			
			
			if (isset($vals['storeTmplVersion'])){
				
				$this->storeTmplVersion = $vals['storeTmplVersion'];
			}
			
			
			if (isset($vals['sysTmplId'])){
				
				$this->sysTmplId = $vals['sysTmplId'];
			}
			
			
			if (isset($vals['sysTmplVersion'])){
				
				$this->sysTmplVersion = $vals['sysTmplVersion'];
			}
			
			
			if (isset($vals['hiprintJson'])){
				
				$this->hiprintJson = $vals['hiprintJson'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LbsParseTemplateUrlResponse';
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
			
			
			
			
			if ("storeTmplId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeTmplId);
				
			}
			
			
			
			
			if ("storeTmplName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeTmplName);
				
			}
			
			
			
			
			if ("storeTmplVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->storeTmplVersion); 
				
			}
			
			
			
			
			if ("sysTmplId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sysTmplId);
				
			}
			
			
			
			
			if ("sysTmplVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sysTmplVersion); 
				
			}
			
			
			
			
			if ("hiprintJson" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hiprintJson);
				
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
		
		if($this->storeTmplId !== null) {
			
			$xfer += $output->writeFieldBegin('storeTmplId');
			$xfer += $output->writeString($this->storeTmplId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeTmplName !== null) {
			
			$xfer += $output->writeFieldBegin('storeTmplName');
			$xfer += $output->writeString($this->storeTmplName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeTmplVersion !== null) {
			
			$xfer += $output->writeFieldBegin('storeTmplVersion');
			$xfer += $output->writeI32($this->storeTmplVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sysTmplId !== null) {
			
			$xfer += $output->writeFieldBegin('sysTmplId');
			$xfer += $output->writeString($this->sysTmplId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sysTmplVersion !== null) {
			
			$xfer += $output->writeFieldBegin('sysTmplVersion');
			$xfer += $output->writeI32($this->sysTmplVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hiprintJson !== null) {
			
			$xfer += $output->writeFieldBegin('hiprintJson');
			$xfer += $output->writeString($this->hiprintJson);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>