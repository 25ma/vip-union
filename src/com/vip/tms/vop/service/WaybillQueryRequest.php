<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillQueryRequest {
	
	static $_TSPEC;
	public $tms_request_header = null;
	public $request_details = null;
	public $owner_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tms_request_header'
			),
			2 => array(
			'var' => 'request_details'
			),
			3 => array(
			'var' => 'owner_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tms_request_header'])){
				
				$this->tms_request_header = $vals['tms_request_header'];
			}
			
			
			if (isset($vals['request_details'])){
				
				$this->request_details = $vals['request_details'];
			}
			
			
			if (isset($vals['owner_id'])){
				
				$this->owner_id = $vals['owner_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillQueryRequest';
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
			
			
			
			
			if ("request_details" == $schemeField){
				
				$needSkip = false;
				
				$this->request_details = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\tms\vop\service\WaybillQueryRequestDetail();
						$elem0->read($input);
						
						$this->request_details[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("owner_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->owner_id);
				
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
		
		$xfer += $output->writeFieldBegin('request_details');
		
		if (!is_array($this->request_details)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->request_details as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->owner_id !== null) {
			
			$xfer += $output->writeFieldBegin('owner_id');
			$xfer += $output->writeString($this->owner_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>