<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class PrintDataResult {
	
	static $_TSPEC;
	public $templateData = null;
	public $printDataInfoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'templateData'
			),
			2 => array(
			'var' => 'printDataInfoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['templateData'])){
				
				$this->templateData = $vals['templateData'];
			}
			
			
			if (isset($vals['printDataInfoList'])){
				
				$this->printDataInfoList = $vals['printDataInfoList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrintDataResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("templateData" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateData);
				
			}
			
			
			
			
			if ("printDataInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->printDataInfoList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\PrintDataInfo();
						$elem1->read($input);
						
						$this->printDataInfoList[$_size1++] = $elem1;
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
		
		if($this->templateData !== null) {
			
			$xfer += $output->writeFieldBegin('templateData');
			$xfer += $output->writeString($this->templateData);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->printDataInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('printDataInfoList');
			
			if (!is_array($this->printDataInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->printDataInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
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