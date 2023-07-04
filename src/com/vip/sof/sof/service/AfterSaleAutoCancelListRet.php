<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleAutoCancelListRet {
	
	static $_TSPEC;
	public $count = null;
	public $afterSaleAutoCancelHeaderList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'count'
			),
			2 => array(
			'var' => 'afterSaleAutoCancelHeaderList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['afterSaleAutoCancelHeaderList'])){
				
				$this->afterSaleAutoCancelHeaderList = $vals['afterSaleAutoCancelHeaderList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleAutoCancelListRet';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->count); 
				
			}
			
			
			
			
			if ("afterSaleAutoCancelHeaderList" == $schemeField){
				
				$needSkip = false;
				
				$this->afterSaleAutoCancelHeaderList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\AfterSaleAutoCancelHeader();
						$elem1->read($input);
						
						$this->afterSaleAutoCancelHeaderList[$_size1++] = $elem1;
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
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI32($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleAutoCancelHeaderList !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleAutoCancelHeaderList');
			
			if (!is_array($this->afterSaleAutoCancelHeaderList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->afterSaleAutoCancelHeaderList as $iter0){
				
				
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