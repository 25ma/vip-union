<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class PrintTemplateInfoModel {
	
	static $_TSPEC;
	public $tmplContent = null;
	public $sysTmplId = null;
	public $sysTmplVersion = null;
	public $sysTmplUpdateTime = null;
	public $storeTmplId = null;
	public $storeTmplVersion = null;
	public $storeTmplUpdateTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmplContent'
			),
			2 => array(
			'var' => 'sysTmplId'
			),
			3 => array(
			'var' => 'sysTmplVersion'
			),
			4 => array(
			'var' => 'sysTmplUpdateTime'
			),
			5 => array(
			'var' => 'storeTmplId'
			),
			6 => array(
			'var' => 'storeTmplVersion'
			),
			7 => array(
			'var' => 'storeTmplUpdateTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmplContent'])){
				
				$this->tmplContent = $vals['tmplContent'];
			}
			
			
			if (isset($vals['sysTmplId'])){
				
				$this->sysTmplId = $vals['sysTmplId'];
			}
			
			
			if (isset($vals['sysTmplVersion'])){
				
				$this->sysTmplVersion = $vals['sysTmplVersion'];
			}
			
			
			if (isset($vals['sysTmplUpdateTime'])){
				
				$this->sysTmplUpdateTime = $vals['sysTmplUpdateTime'];
			}
			
			
			if (isset($vals['storeTmplId'])){
				
				$this->storeTmplId = $vals['storeTmplId'];
			}
			
			
			if (isset($vals['storeTmplVersion'])){
				
				$this->storeTmplVersion = $vals['storeTmplVersion'];
			}
			
			
			if (isset($vals['storeTmplUpdateTime'])){
				
				$this->storeTmplUpdateTime = $vals['storeTmplUpdateTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrintTemplateInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tmplContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmplContent);
				
			}
			
			
			
			
			if ("sysTmplId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sysTmplId); 
				
			}
			
			
			
			
			if ("sysTmplVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sysTmplVersion); 
				
			}
			
			
			
			
			if ("sysTmplUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sysTmplUpdateTime); 
				
			}
			
			
			
			
			if ("storeTmplId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->storeTmplId); 
				
			}
			
			
			
			
			if ("storeTmplVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->storeTmplVersion); 
				
			}
			
			
			
			
			if ("storeTmplUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->storeTmplUpdateTime); 
				
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
		
		if($this->tmplContent !== null) {
			
			$xfer += $output->writeFieldBegin('tmplContent');
			$xfer += $output->writeString($this->tmplContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sysTmplId !== null) {
			
			$xfer += $output->writeFieldBegin('sysTmplId');
			$xfer += $output->writeI64($this->sysTmplId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sysTmplVersion !== null) {
			
			$xfer += $output->writeFieldBegin('sysTmplVersion');
			$xfer += $output->writeI32($this->sysTmplVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sysTmplUpdateTime !== null) {
			
			$xfer += $output->writeFieldBegin('sysTmplUpdateTime');
			$xfer += $output->writeI64($this->sysTmplUpdateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeTmplId !== null) {
			
			$xfer += $output->writeFieldBegin('storeTmplId');
			$xfer += $output->writeI64($this->storeTmplId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeTmplVersion !== null) {
			
			$xfer += $output->writeFieldBegin('storeTmplVersion');
			$xfer += $output->writeI32($this->storeTmplVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeTmplUpdateTime !== null) {
			
			$xfer += $output->writeFieldBegin('storeTmplUpdateTime');
			$xfer += $output->writeI64($this->storeTmplUpdateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>