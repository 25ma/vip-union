<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class AcceptCarrierHandoverBillResponse {
	
	static $_TSPEC;
	public $header = null;
	public $consignment_nos = null;
	public $url = null;
	public $accept_batch_no = null;
	public $validate_conf_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'consignment_nos'
			),
			3 => array(
			'var' => 'url'
			),
			4 => array(
			'var' => 'accept_batch_no'
			),
			5 => array(
			'var' => 'validate_conf_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['consignment_nos'])){
				
				$this->consignment_nos = $vals['consignment_nos'];
			}
			
			
			if (isset($vals['url'])){
				
				$this->url = $vals['url'];
			}
			
			
			if (isset($vals['accept_batch_no'])){
				
				$this->accept_batch_no = $vals['accept_batch_no'];
			}
			
			
			if (isset($vals['validate_conf_time'])){
				
				$this->validate_conf_time = $vals['validate_conf_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AcceptCarrierHandoverBillResponse';
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
			
			
			
			
			if ("consignment_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->consignment_nos = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->consignment_nos[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->url);
				
			}
			
			
			
			
			if ("accept_batch_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accept_batch_no);
				
			}
			
			
			
			
			if ("validate_conf_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->validate_conf_time);
				
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
		
		
		if($this->consignment_nos !== null) {
			
			$xfer += $output->writeFieldBegin('consignment_nos');
			
			if (!is_array($this->consignment_nos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->consignment_nos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->url !== null) {
			
			$xfer += $output->writeFieldBegin('url');
			$xfer += $output->writeString($this->url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accept_batch_no !== null) {
			
			$xfer += $output->writeFieldBegin('accept_batch_no');
			$xfer += $output->writeString($this->accept_batch_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->validate_conf_time !== null) {
			
			$xfer += $output->writeFieldBegin('validate_conf_time');
			$xfer += $output->writeI64($this->validate_conf_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>