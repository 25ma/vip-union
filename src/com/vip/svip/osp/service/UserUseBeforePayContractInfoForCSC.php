<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class UserUseBeforePayContractInfoForCSC {
	
	static $_TSPEC;
	public $currentContractStatus = null;
	public $limitStatus = null;
	public $contractHistoryStatusList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'currentContractStatus'
			),
			2 => array(
			'var' => 'limitStatus'
			),
			3 => array(
			'var' => 'contractHistoryStatusList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['currentContractStatus'])){
				
				$this->currentContractStatus = $vals['currentContractStatus'];
			}
			
			
			if (isset($vals['limitStatus'])){
				
				$this->limitStatus = $vals['limitStatus'];
			}
			
			
			if (isset($vals['contractHistoryStatusList'])){
				
				$this->contractHistoryStatusList = $vals['contractHistoryStatusList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UserUseBeforePayContractInfoForCSC';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("currentContractStatus" == $schemeField){
				
				$needSkip = false;
				
				$this->currentContractStatus = new \com\vip\svip\osp\service\UseBeforePayContractInfo();
				$this->currentContractStatus->read($input);
				
			}
			
			
			
			
			if ("limitStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limitStatus); 
				
			}
			
			
			
			
			if ("contractHistoryStatusList" == $schemeField){
				
				$needSkip = false;
				
				$this->contractHistoryStatusList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\svip\osp\service\UseBeforePayContractHistoryStatus();
						$elem0->read($input);
						
						$this->contractHistoryStatusList[$_size0++] = $elem0;
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
		
		if($this->currentContractStatus !== null) {
			
			$xfer += $output->writeFieldBegin('currentContractStatus');
			
			if (!is_object($this->currentContractStatus)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->currentContractStatus->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('limitStatus');
		$xfer += $output->writeI32($this->limitStatus);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->contractHistoryStatusList !== null) {
			
			$xfer += $output->writeFieldBegin('contractHistoryStatusList');
			
			if (!is_array($this->contractHistoryStatusList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->contractHistoryStatusList as $iter0){
				
				
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