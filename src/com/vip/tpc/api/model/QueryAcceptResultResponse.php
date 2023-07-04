<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class QueryAcceptResultResponse {
	
	static $_TSPEC;
	public $header = null;
	public $accept_result_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'accept_result_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['accept_result_list'])){
				
				$this->accept_result_list = $vals['accept_result_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryAcceptResultResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("header" == $schemeField){
				
				$needSkip = false;
				
				$this->header = new \com\vip\tpc\api\model\TpcExternalResponseHeader();
				$this->header->read($input);
				
			}
			
			
			
			
			if ("accept_result_list" == $schemeField){
				
				$needSkip = false;
				
				$this->accept_result_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tpc\api\model\AcceptResult();
						$elem1->read($input);
						
						$this->accept_result_list[$_size1++] = $elem1;
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
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accept_result_list !== null) {
			
			$xfer += $output->writeFieldBegin('accept_result_list');
			
			if (!is_array($this->accept_result_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->accept_result_list as $iter0){
				
				
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