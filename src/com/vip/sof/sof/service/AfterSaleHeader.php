<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleHeader {
	
	static $_TSPEC;
	public $afterSaleHeaderBrief = null;
	public $problemOrderSnList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSaleHeaderBrief'
			),
			6 => array(
			'var' => 'problemOrderSnList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['afterSaleHeaderBrief'])){
				
				$this->afterSaleHeaderBrief = $vals['afterSaleHeaderBrief'];
			}
			
			
			if (isset($vals['problemOrderSnList'])){
				
				$this->problemOrderSnList = $vals['problemOrderSnList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("afterSaleHeaderBrief" == $schemeField){
				
				$needSkip = false;
				
				$this->afterSaleHeaderBrief = new \com\vip\sof\sof\service\AfterSaleHeaderBrief();
				$this->afterSaleHeaderBrief->read($input);
				
			}
			
			
			
			
			if ("problemOrderSnList" == $schemeField){
				
				$needSkip = false;
				
				$this->problemOrderSnList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->problemOrderSnList[$_size0++] = $elem0;
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
		
		if($this->afterSaleHeaderBrief !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleHeaderBrief');
			
			if (!is_object($this->afterSaleHeaderBrief)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->afterSaleHeaderBrief->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->problemOrderSnList !== null) {
			
			$xfer += $output->writeFieldBegin('problemOrderSnList');
			
			if (!is_array($this->problemOrderSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->problemOrderSnList as $iter0){
				
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