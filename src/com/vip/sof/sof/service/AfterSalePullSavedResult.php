<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSalePullSavedResult {
	
	static $_TSPEC;
	public $successAddIds = null;
	public $successUpdateIds = null;
	public $successCancelIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2 => array(
			'var' => 'successAddIds'
			),
			4 => array(
			'var' => 'successUpdateIds'
			),
			6 => array(
			'var' => 'successCancelIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['successAddIds'])){
				
				$this->successAddIds = $vals['successAddIds'];
			}
			
			
			if (isset($vals['successUpdateIds'])){
				
				$this->successUpdateIds = $vals['successUpdateIds'];
			}
			
			
			if (isset($vals['successCancelIds'])){
				
				$this->successCancelIds = $vals['successCancelIds'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSalePullSavedResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("successAddIds" == $schemeField){
				
				$needSkip = false;
				
				$this->successAddIds = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI32($elem1); 
						
						$this->successAddIds[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("successUpdateIds" == $schemeField){
				
				$needSkip = false;
				
				$this->successUpdateIds = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readI32($elem2); 
						
						$this->successUpdateIds[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("successCancelIds" == $schemeField){
				
				$needSkip = false;
				
				$this->successCancelIds = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readI32($elem3); 
						
						$this->successCancelIds[$_size3++] = $elem3;
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
		
		if($this->successAddIds !== null) {
			
			$xfer += $output->writeFieldBegin('successAddIds');
			
			if (!is_array($this->successAddIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->successAddIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->successUpdateIds !== null) {
			
			$xfer += $output->writeFieldBegin('successUpdateIds');
			
			if (!is_array($this->successUpdateIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->successUpdateIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->successCancelIds !== null) {
			
			$xfer += $output->writeFieldBegin('successCancelIds');
			
			if (!is_array($this->successCancelIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->successCancelIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
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