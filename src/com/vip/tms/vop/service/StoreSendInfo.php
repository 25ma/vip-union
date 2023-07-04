<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class StoreSendInfo {
	
	static $_TSPEC;
	public $waybill_cust = null;
	public $waybill_address_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'waybill_cust'
			),
			2 => array(
			'var' => 'waybill_address_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['waybill_cust'])){
				
				$this->waybill_cust = $vals['waybill_cust'];
			}
			
			
			if (isset($vals['waybill_address_list'])){
				
				$this->waybill_address_list = $vals['waybill_address_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'StoreSendInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("waybill_cust" == $schemeField){
				
				$needSkip = false;
				
				$this->waybill_cust = new \com\vip\tms\vop\service\WaybillCustDto();
				$this->waybill_cust->read($input);
				
			}
			
			
			
			
			if ("waybill_address_list" == $schemeField){
				
				$needSkip = false;
				
				$this->waybill_address_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\tms\vop\service\WaybillAddressDto();
						$elem0->read($input);
						
						$this->waybill_address_list[$_size0++] = $elem0;
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
		
		if($this->waybill_cust !== null) {
			
			$xfer += $output->writeFieldBegin('waybill_cust');
			
			if (!is_object($this->waybill_cust)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->waybill_cust->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->waybill_address_list !== null) {
			
			$xfer += $output->writeFieldBegin('waybill_address_list');
			
			if (!is_array($this->waybill_address_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->waybill_address_list as $iter0){
				
				
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