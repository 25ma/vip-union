<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class LbsSaveStoreTemplateByIsvRequest {
	
	static $_TSPEC;
	public $header = null;
	public $storeId = null;
	public $tmplId = null;
	public $version = null;
	public $tmplContent = null;
	public $modifier = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'storeId'
			),
			3 => array(
			'var' => 'tmplId'
			),
			4 => array(
			'var' => 'version'
			),
			5 => array(
			'var' => 'tmplContent'
			),
			6 => array(
			'var' => 'modifier'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['tmplId'])){
				
				$this->tmplId = $vals['tmplId'];
			}
			
			
			if (isset($vals['version'])){
				
				$this->version = $vals['version'];
			}
			
			
			if (isset($vals['tmplContent'])){
				
				$this->tmplContent = $vals['tmplContent'];
			}
			
			
			if (isset($vals['modifier'])){
				
				$this->modifier = $vals['modifier'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LbsSaveStoreTemplateByIsvRequest';
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
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("tmplId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->tmplId); 
				
			}
			
			
			
			
			if ("version" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->version); 
				
			}
			
			
			
			
			if ("tmplContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmplContent);
				
			}
			
			
			
			
			if ("modifier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->modifier);
				
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
		
		$xfer += $output->writeFieldBegin('storeId');
		$xfer += $output->writeString($this->storeId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tmplId');
		$xfer += $output->writeI64($this->tmplId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->version !== null) {
			
			$xfer += $output->writeFieldBegin('version');
			$xfer += $output->writeI32($this->version);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tmplContent !== null) {
			
			$xfer += $output->writeFieldBegin('tmplContent');
			$xfer += $output->writeString($this->tmplContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->modifier !== null) {
			
			$xfer += $output->writeFieldBegin('modifier');
			$xfer += $output->writeString($this->modifier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>