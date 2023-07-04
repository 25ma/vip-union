<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\request;

class ReturnDiffAddParamModel {
	
	static $_TSPEC;
	public $request_time = null;
	public $from_source = null;
	public $vendor_id = null;
	public $return_sn = null;
	public $transport_no = null;
	public $return_details = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request_time'
			),
			2 => array(
			'var' => 'from_source'
			),
			3 => array(
			'var' => 'vendor_id'
			),
			4 => array(
			'var' => 'return_sn'
			),
			5 => array(
			'var' => 'transport_no'
			),
			6 => array(
			'var' => 'return_details'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request_time'])){
				
				$this->request_time = $vals['request_time'];
			}
			
			
			if (isset($vals['from_source'])){
				
				$this->from_source = $vals['from_source'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['return_details'])){
				
				$this->return_details = $vals['return_details'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDiffAddParamModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("request_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->request_time);
				
			}
			
			
			
			
			if ("from_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->from_source);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_sn);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("return_details" == $schemeField){
				
				$needSkip = false;
				
				$this->return_details = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vis\vreturn\api\vo\request\ReturnDiffAddDetailParamModel();
						$elem1->read($input);
						
						$this->return_details[$_size1++] = $elem1;
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
		
		if($this->request_time !== null) {
			
			$xfer += $output->writeFieldBegin('request_time');
			$xfer += $output->writeString($this->request_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('from_source');
		$xfer += $output->writeString($this->from_source);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_sn');
		$xfer += $output->writeString($this->return_sn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('return_details');
		
		if (!is_array($this->return_details)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->return_details as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>