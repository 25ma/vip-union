<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\api\service\printtemplate;

class PrintComponentVersionInfoModel {
	
	static $_TSPEC;
	public $versionNum = null;
	public $remark = null;
	public $extend = null;
	public $config = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'versionNum'
			),
			2 => array(
			'var' => 'remark'
			),
			3 => array(
			'var' => 'extend'
			),
			4 => array(
			'var' => 'config'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['versionNum'])){
				
				$this->versionNum = $vals['versionNum'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['extend'])){
				
				$this->extend = $vals['extend'];
			}
			
			
			if (isset($vals['config'])){
				
				$this->config = $vals['config'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrintComponentVersionInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("versionNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->versionNum);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("extend" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extend);
				
			}
			
			
			
			
			if ("config" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->config);
				
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
		
		$xfer += $output->writeFieldBegin('versionNum');
		$xfer += $output->writeString($this->versionNum);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extend !== null) {
			
			$xfer += $output->writeFieldBegin('extend');
			$xfer += $output->writeString($this->extend);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->config !== null) {
			
			$xfer += $output->writeFieldBegin('config');
			$xfer += $output->writeString($this->config);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>