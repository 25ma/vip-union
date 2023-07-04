<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CancelModule {
	
	static $_TSPEC;
	public $auditStatus = null;
	public $auditStatusList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'auditStatus'
			),
			2 => array(
			'var' => 'auditStatusList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['auditStatus'])){
				
				$this->auditStatus = $vals['auditStatus'];
			}
			
			
			if (isset($vals['auditStatusList'])){
				
				$this->auditStatusList = $vals['auditStatusList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelModule';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("auditStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditStatus);
				
			}
			
			
			
			
			if ("auditStatusList" == $schemeField){
				
				$needSkip = false;
				
				$this->auditStatusList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->auditStatusList[$_size0++] = $elem0;
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
		
		if($this->auditStatus !== null) {
			
			$xfer += $output->writeFieldBegin('auditStatus');
			$xfer += $output->writeString($this->auditStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditStatusList !== null) {
			
			$xfer += $output->writeFieldBegin('auditStatusList');
			
			if (!is_array($this->auditStatusList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->auditStatusList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>