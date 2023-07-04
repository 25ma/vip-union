<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillBalanceQueryResponse {
	
	static $_TSPEC;
	public $tms_response_header = null;
	public $response_detail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tms_response_header'
			),
			2 => array(
			'var' => 'response_detail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tms_response_header'])){
				
				$this->tms_response_header = $vals['tms_response_header'];
			}
			
			
			if (isset($vals['response_detail'])){
				
				$this->response_detail = $vals['response_detail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillBalanceQueryResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tms_response_header" == $schemeField){
				
				$needSkip = false;
				
				$this->tms_response_header = new \com\vip\tms\vop\service\TmsResponseHeader();
				$this->tms_response_header->read($input);
				
			}
			
			
			
			
			if ("response_detail" == $schemeField){
				
				$needSkip = false;
				
				$this->response_detail = new \com\vip\tms\vop\service\WaybillBalanceQueryResponseDetail();
				$this->response_detail->read($input);
				
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
		
		if($this->tms_response_header !== null) {
			
			$xfer += $output->writeFieldBegin('tms_response_header');
			
			if (!is_object($this->tms_response_header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tms_response_header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->response_detail !== null) {
			
			$xfer += $output->writeFieldBegin('response_detail');
			
			if (!is_object($this->response_detail)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->response_detail->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>