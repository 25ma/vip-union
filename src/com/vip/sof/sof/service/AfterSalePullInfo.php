<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSalePullInfo {
	
	static $_TSPEC;
	public $afterSalePullHeader = null;
	public $afterSalePullGoodsList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'afterSalePullHeader'
			),
			2 => array(
			'var' => 'afterSalePullGoodsList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['afterSalePullHeader'])){
				
				$this->afterSalePullHeader = $vals['afterSalePullHeader'];
			}
			
			
			if (isset($vals['afterSalePullGoodsList'])){
				
				$this->afterSalePullGoodsList = $vals['afterSalePullGoodsList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSalePullInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("afterSalePullHeader" == $schemeField){
				
				$needSkip = false;
				
				$this->afterSalePullHeader = new \com\vip\sof\sof\service\AfterSalePullHeader();
				$this->afterSalePullHeader->read($input);
				
			}
			
			
			
			
			if ("afterSalePullGoodsList" == $schemeField){
				
				$needSkip = false;
				
				$this->afterSalePullGoodsList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\AfterSalePullGoods();
						$elem1->read($input);
						
						$this->afterSalePullGoodsList[$_size1++] = $elem1;
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
		
		if($this->afterSalePullHeader !== null) {
			
			$xfer += $output->writeFieldBegin('afterSalePullHeader');
			
			if (!is_object($this->afterSalePullHeader)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->afterSalePullHeader->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSalePullGoodsList !== null) {
			
			$xfer += $output->writeFieldBegin('afterSalePullGoodsList');
			
			if (!is_array($this->afterSalePullGoodsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->afterSalePullGoodsList as $iter0){
				
				
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