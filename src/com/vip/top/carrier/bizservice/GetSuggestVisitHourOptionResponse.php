<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class GetSuggestVisitHourOptionResponse {
	
	static $_TSPEC;
	public $tmsResponseHeader = null;
	public $detailList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsResponseHeader'
			),
			2 => array(
			'var' => 'detailList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsResponseHeader'])){
				
				$this->tmsResponseHeader = $vals['tmsResponseHeader'];
			}
			
			
			if (isset($vals['detailList'])){
				
				$this->detailList = $vals['detailList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetSuggestVisitHourOptionResponse';
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
			
			
			
			
			if ("detailList" == $schemeField){
				
				$needSkip = false;
				
				$this->detailList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\top\carrier\bizservice\VisitHourOptionResponseDetail();
						$elem1->read($input);
						
						$this->detailList[$_size1++] = $elem1;
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
		
		
		if($this->detailList !== null) {
			
			$xfer += $output->writeFieldBegin('detailList');
			
			if (!is_array($this->detailList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->detailList as $iter0){
				
				
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