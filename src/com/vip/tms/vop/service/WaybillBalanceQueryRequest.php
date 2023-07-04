<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillBalanceQueryRequest {
	
	static $_TSPEC;
	public $tms_request_header = null;
	public $contract_id = null;
	public $extend_field_map = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tms_request_header'
			),
			2 => array(
			'var' => 'contract_id'
			),
			3 => array(
			'var' => 'extend_field_map'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tms_request_header'])){
				
				$this->tms_request_header = $vals['tms_request_header'];
			}
			
			
			if (isset($vals['contract_id'])){
				
				$this->contract_id = $vals['contract_id'];
			}
			
			
			if (isset($vals['extend_field_map'])){
				
				$this->extend_field_map = $vals['extend_field_map'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillBalanceQueryRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tms_request_header" == $schemeField){
				
				$needSkip = false;
				
				$this->tms_request_header = new \com\vip\tms\vop\service\TmsRequestHeader();
				$this->tms_request_header->read($input);
				
			}
			
			
			
			
			if ("contract_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contract_id);
				
			}
			
			
			
			
			if ("extend_field_map" == $schemeField){
				
				$needSkip = false;
				
				$this->extend_field_map = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->extend_field_map[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		$xfer += $output->writeFieldBegin('tms_request_header');
		
		if (!is_object($this->tms_request_header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->tms_request_header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contract_id');
		$xfer += $output->writeString($this->contract_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->extend_field_map !== null) {
			
			$xfer += $output->writeFieldBegin('extend_field_map');
			
			if (!is_array($this->extend_field_map)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->extend_field_map as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>