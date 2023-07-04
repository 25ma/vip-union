<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillContractCompleteRequest {
	
	static $_TSPEC;
	public $tms_request_header = null;
	public $request_detail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tms_request_header'
			),
			2 => array(
			'var' => 'request_detail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tms_request_header'])){
				
				$this->tms_request_header = $vals['tms_request_header'];
			}
			
			
			if (isset($vals['request_detail'])){
				
				$this->request_detail = $vals['request_detail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillContractCompleteRequest';
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
			
			
			
			
			if ("request_detail" == $schemeField){
				
				$needSkip = false;
				
				$this->request_detail = new \com\vip\tms\vop\service\WaybillContractCompleteRequestDetail();
				$this->request_detail->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('request_detail');
		
		if (!is_object($this->request_detail)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request_detail->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>