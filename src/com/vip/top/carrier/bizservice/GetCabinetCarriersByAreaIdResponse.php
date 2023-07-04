<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class GetCabinetCarriersByAreaIdResponse {
	
	static $_TSPEC;
	public $tmsResponseHeader = null;
	public $custStandardCodeList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsResponseHeader'
			),
			2 => array(
			'var' => 'custStandardCodeList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsResponseHeader'])){
				
				$this->tmsResponseHeader = $vals['tmsResponseHeader'];
			}
			
			
			if (isset($vals['custStandardCodeList'])){
				
				$this->custStandardCodeList = $vals['custStandardCodeList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetCabinetCarriersByAreaIdResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tmsResponseHeader" == $schemeField){
				
				$needSkip = false;
				
				$this->tmsResponseHeader = new \com\vip\top\carrier\service\TmsResponseHeader();
				$this->tmsResponseHeader->read($input);
				
			}
			
			
			
			
			if ("custStandardCodeList" == $schemeField){
				
				$needSkip = false;
				
				$this->custStandardCodeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->custStandardCodeList[$_size0++] = $elem0;
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
		
		if($this->tmsResponseHeader !== null) {
			
			$xfer += $output->writeFieldBegin('tmsResponseHeader');
			
			if (!is_object($this->tmsResponseHeader)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tmsResponseHeader->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custStandardCodeList !== null) {
			
			$xfer += $output->writeFieldBegin('custStandardCodeList');
			
			if (!is_array($this->custStandardCodeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->custStandardCodeList as $iter0){
				
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