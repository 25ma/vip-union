<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\struct;

class CategoryExchangedReasonModel {
	
	static $_TSPEC;
	public $categoryId = null;
	public $reasonType = null;
	public $reasonList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'reasonType'
			),
			3 => array(
			'var' => 'reasonList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['reasonType'])){
				
				$this->reasonType = $vals['reasonType'];
			}
			
			
			if (isset($vals['reasonList'])){
				
				$this->reasonList = $vals['reasonList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryExchangedReasonModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("categoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->categoryId); 
				
			}
			
			
			
			
			if ("reasonType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->reasonType); 
				
			}
			
			
			
			
			if ("reasonList" == $schemeField){
				
				$needSkip = false;
				
				$this->reasonList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\category\struct\ExchangedReasonModel();
						$elem1->read($input);
						
						$this->reasonList[$_size1++] = $elem1;
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
		
		if($this->categoryId !== null) {
			
			$xfer += $output->writeFieldBegin('categoryId');
			$xfer += $output->writeI32($this->categoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonType !== null) {
			
			$xfer += $output->writeFieldBegin('reasonType');
			$xfer += $output->writeI32($this->reasonType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonList !== null) {
			
			$xfer += $output->writeFieldBegin('reasonList');
			
			if (!is_array($this->reasonList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->reasonList as $iter0){
				
				
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