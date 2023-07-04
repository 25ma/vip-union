<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillContractQueryRequest {
	
	static $_TSPEC;
	public $tms_request_header = null;
	public $store_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tms_request_header'
			),
			2 => array(
			'var' => 'store_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tms_request_header'])){
				
				$this->tms_request_header = $vals['tms_request_header'];
			}
			
			
			if (isset($vals['store_id'])){
				
				$this->store_id = $vals['store_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillContractQueryRequest';
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
			
			
			
			
			if ("store_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_id);
				
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
		
		if($this->store_id !== null) {
			
			$xfer += $output->writeFieldBegin('store_id');
			$xfer += $output->writeString($this->store_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>