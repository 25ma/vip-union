<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\workflow\service;

class WorkflowJitXCustomizeResponse {
	
	static $_TSPEC;
	public $total = null;
	public $customizeList = null;
	public $result = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'total'
			),
			2 => array(
			'var' => 'customizeList'
			),
			3 => array(
			'var' => 'result'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
			if (isset($vals['customizeList'])){
				
				$this->customizeList = $vals['customizeList'];
			}
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkflowJitXCustomizeResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
			}
			
			
			
			
			if ("customizeList" == $schemeField){
				
				$needSkip = false;
				
				$this->customizeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\workflow\service\JitXCustomize();
						$elem0->read($input);
						
						$this->customizeList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				
				$this->result = new \com\vip\vis\common\service\Result();
				$this->result->read($input);
				
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
		
		if($this->total !== null) {
			
			$xfer += $output->writeFieldBegin('total');
			$xfer += $output->writeI32($this->total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customizeList !== null) {
			
			$xfer += $output->writeFieldBegin('customizeList');
			
			if (!is_array($this->customizeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->customizeList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			
			if (!is_object($this->result)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->result->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>