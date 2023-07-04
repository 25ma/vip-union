<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class StoreSendInfoQueryResponse {
	
	static $_TSPEC;
	public $tms_response_header = null;
	public $store_send_info_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tms_response_header'
			),
			2 => array(
			'var' => 'store_send_info_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tms_response_header'])){
				
				$this->tms_response_header = $vals['tms_response_header'];
			}
			
			
			if (isset($vals['store_send_info_list'])){
				
				$this->store_send_info_list = $vals['store_send_info_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'StoreSendInfoQueryResponse';
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
			
			
			
			
			if ("store_send_info_list" == $schemeField){
				
				$needSkip = false;
				
				$this->store_send_info_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tms\vop\service\StoreSendInfo();
						$elem1->read($input);
						
						$this->store_send_info_list[$_size1++] = $elem1;
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
		
		
		if($this->store_send_info_list !== null) {
			
			$xfer += $output->writeFieldBegin('store_send_info_list');
			
			if (!is_array($this->store_send_info_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->store_send_info_list as $iter0){
				
				
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