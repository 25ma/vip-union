<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class RejectQueryParam {
	
	static $_TSPEC;
	public $orderSns = null;
	public $transportNos = null;
	public $backSns = null;
	public $auditType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSns'
			),
			2 => array(
			'var' => 'transportNos'
			),
			3 => array(
			'var' => 'backSns'
			),
			4 => array(
			'var' => 'auditType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSns'])){
				
				$this->orderSns = $vals['orderSns'];
			}
			
			
			if (isset($vals['transportNos'])){
				
				$this->transportNos = $vals['transportNos'];
			}
			
			
			if (isset($vals['backSns'])){
				
				$this->backSns = $vals['backSns'];
			}
			
			
			if (isset($vals['auditType'])){
				
				$this->auditType = $vals['auditType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RejectQueryParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSns" == $schemeField){
				
				$needSkip = false;
				
				$this->orderSns = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->orderSns[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("transportNos" == $schemeField){
				
				$needSkip = false;
				
				$this->transportNos = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->transportNos[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("backSns" == $schemeField){
				
				$needSkip = false;
				
				$this->backSns = array();
				$_size2 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->backSns[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("auditType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->auditType); 
				
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
		
		if($this->orderSns !== null) {
			
			$xfer += $output->writeFieldBegin('orderSns');
			
			if (!is_array($this->orderSns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->orderSns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNos !== null) {
			
			$xfer += $output->writeFieldBegin('transportNos');
			
			if (!is_array($this->transportNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->transportNos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backSns !== null) {
			
			$xfer += $output->writeFieldBegin('backSns');
			
			if (!is_array($this->backSns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->backSns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditType !== null) {
			
			$xfer += $output->writeFieldBegin('auditType');
			$xfer += $output->writeByte($this->auditType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>