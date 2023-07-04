<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\om\intfc\service;

class OmPreSaleOrderDetail {
	
	static $_TSPEC;
	public $orderIn = null;
	public $orderItemList = null;
	public $orderactiveList = null;
	public $orderPayList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderIn'
			),
			2 => array(
			'var' => 'orderItemList'
			),
			3 => array(
			'var' => 'orderactiveList'
			),
			4 => array(
			'var' => 'orderPayList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderIn'])){
				
				$this->orderIn = $vals['orderIn'];
			}
			
			
			if (isset($vals['orderItemList'])){
				
				$this->orderItemList = $vals['orderItemList'];
			}
			
			
			if (isset($vals['orderactiveList'])){
				
				$this->orderactiveList = $vals['orderactiveList'];
			}
			
			
			if (isset($vals['orderPayList'])){
				
				$this->orderPayList = $vals['orderPayList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmPreSaleOrderDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderIn" == $schemeField){
				
				$needSkip = false;
				
				$this->orderIn = new \com\vip\fcs\osp\om\intfc\service\OmIntOrderInModel();
				$this->orderIn->read($input);
				
			}
			
			
			
			
			if ("orderItemList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderItemList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\osp\om\intfc\service\OmIntOrderItemInModel();
						$elem0->read($input);
						
						$this->orderItemList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("orderactiveList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderactiveList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\fcs\osp\om\intfc\service\OmIntOrderActiveInModel();
						$elem1->read($input);
						
						$this->orderactiveList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("orderPayList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderPayList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\fcs\osp\om\intfc\service\OmIntOrderPayInModel();
						$elem2->read($input);
						
						$this->orderPayList[$_size2++] = $elem2;
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
		
		if($this->orderIn !== null) {
			
			$xfer += $output->writeFieldBegin('orderIn');
			
			if (!is_object($this->orderIn)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->orderIn->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderItemList !== null) {
			
			$xfer += $output->writeFieldBegin('orderItemList');
			
			if (!is_array($this->orderItemList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderItemList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderactiveList !== null) {
			
			$xfer += $output->writeFieldBegin('orderactiveList');
			
			if (!is_array($this->orderactiveList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderactiveList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderPayList !== null) {
			
			$xfer += $output->writeFieldBegin('orderPayList');
			
			if (!is_array($this->orderPayList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderPayList as $iter0){
				
				
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