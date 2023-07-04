<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillCancelResponse {
	
	static $_TSPEC;
	public $tms_response_header = null;
	public $response_detail_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tms_response_header'
			),
			2 => array(
			'var' => 'response_detail_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tms_response_header'])){
				
				$this->tms_response_header = $vals['tms_response_header'];
			}
			
			
			if (isset($vals['response_detail_list'])){
				
				$this->response_detail_list = $vals['response_detail_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillCancelResponse';
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
			
			
			
			
			if ("response_detail_list" == $schemeField){
				
				$needSkip = false;
				
				$this->response_detail_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\tms\vop\service\WaybillCancelResponseDetail();
						$elem0->read($input);
						
						$this->response_detail_list[$_size0++] = $elem0;
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
		
		if($this->tms_response_header !== null) {
			
			$xfer += $output->writeFieldBegin('tms_response_header');
			
			if (!is_object($this->tms_response_header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tms_response_header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->response_detail_list !== null) {
			
			$xfer += $output->writeFieldBegin('response_detail_list');
			
			if (!is_array($this->response_detail_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->response_detail_list as $iter0){
				
				
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