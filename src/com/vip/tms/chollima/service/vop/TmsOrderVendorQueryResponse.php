<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\chollima\service\vop;

class TmsOrderVendorQueryResponse {
	
	static $_TSPEC;
	public $tms_response_header = null;
	public $model = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tms_response_header'
			),
			2 => array(
			'var' => 'model'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tms_response_header'])){
				
				$this->tms_response_header = $vals['tms_response_header'];
			}
			
			
			if (isset($vals['model'])){
				
				$this->model = $vals['model'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsOrderVendorQueryResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tms_response_header" == $schemeField){
				
				$needSkip = false;
				
				$this->tms_response_header = new \com\vip\tms\chollima\service\vop\TmsResponseHeader();
				$this->tms_response_header->read($input);
				
			}
			
			
			
			
			if ("model" == $schemeField){
				
				$needSkip = false;
				
				$this->model = new \com\vip\tms\chollima\service\vop\TmsOrderVendorQueryModel();
				$this->model->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('tms_response_header');
		
		if (!is_object($this->tms_response_header)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->tms_response_header->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->model !== null) {
			
			$xfer += $output->writeFieldBegin('model');
			
			if (!is_object($this->model)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->model->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>