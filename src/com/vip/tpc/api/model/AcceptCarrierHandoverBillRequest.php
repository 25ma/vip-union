<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class AcceptCarrierHandoverBillRequest {
	
	static $_TSPEC;
	public $carrier_code = null;
	public $operator = null;
	public $line_code = null;
	public $operate_type = null;
	public $truck_license_no = null;
	public $detail_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_code'
			),
			2 => array(
			'var' => 'operator'
			),
			3 => array(
			'var' => 'line_code'
			),
			4 => array(
			'var' => 'operate_type'
			),
			5 => array(
			'var' => 'truck_license_no'
			),
			6 => array(
			'var' => 'detail_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['line_code'])){
				
				$this->line_code = $vals['line_code'];
			}
			
			
			if (isset($vals['operate_type'])){
				
				$this->operate_type = $vals['operate_type'];
			}
			
			
			if (isset($vals['truck_license_no'])){
				
				$this->truck_license_no = $vals['truck_license_no'];
			}
			
			
			if (isset($vals['detail_list'])){
				
				$this->detail_list = $vals['detail_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AcceptCarrierHandoverBillRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
			}
			
			
			
			
			if ("line_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->line_code);
				
			}
			
			
			
			
			if ("operate_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operate_type); 
				
			}
			
			
			
			
			if ("truck_license_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->truck_license_no);
				
			}
			
			
			
			
			if ("detail_list" == $schemeField){
				
				$needSkip = false;
				
				$this->detail_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tpc\api\model\AcceptCarrierHandoverBillDetail();
						$elem1->read($input);
						
						$this->detail_list[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->line_code !== null) {
			
			$xfer += $output->writeFieldBegin('line_code');
			$xfer += $output->writeString($this->line_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('operate_type');
		$xfer += $output->writeI32($this->operate_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->truck_license_no !== null) {
			
			$xfer += $output->writeFieldBegin('truck_license_no');
			$xfer += $output->writeString($this->truck_license_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('detail_list');
		
		if (!is_array($this->detail_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->detail_list as $iter0){
			
			
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