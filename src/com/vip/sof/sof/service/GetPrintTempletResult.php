<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class GetPrintTempletResult {
	
	static $_TSPEC;
	public $orderListTemplet = null;
	public $customerServiceTemplet = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderListTemplet'
			),
			2 => array(
			'var' => 'customerServiceTemplet'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderListTemplet'])){
				
				$this->orderListTemplet = $vals['orderListTemplet'];
			}
			
			
			if (isset($vals['customerServiceTemplet'])){
				
				$this->customerServiceTemplet = $vals['customerServiceTemplet'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetPrintTempletResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderListTemplet" == $schemeField){
				
				$needSkip = false;
				
				$this->orderListTemplet = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->orderListTemplet[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("customerServiceTemplet" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerServiceTemplet);
				
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
		
		if($this->orderListTemplet !== null) {
			
			$xfer += $output->writeFieldBegin('orderListTemplet');
			
			if (!is_array($this->orderListTemplet)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderListTemplet as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerServiceTemplet !== null) {
			
			$xfer += $output->writeFieldBegin('customerServiceTemplet');
			$xfer += $output->writeString($this->customerServiceTemplet);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>