<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillCustDto {
	
	static $_TSPEC;
	public $carrier_code = null;
	public $carrier_name = null;
	public $carrier_card_no = null;
	public $carrier_node_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_code'
			),
			2 => array(
			'var' => 'carrier_name'
			),
			3 => array(
			'var' => 'carrier_card_no'
			),
			4 => array(
			'var' => 'carrier_node_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['carrier_card_no'])){
				
				$this->carrier_card_no = $vals['carrier_card_no'];
			}
			
			
			if (isset($vals['carrier_node_code'])){
				
				$this->carrier_node_code = $vals['carrier_node_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillCustDto';
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
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
			}
			
			
			
			
			if ("carrier_card_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_card_no);
				
			}
			
			
			
			
			if ("carrier_node_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_node_code);
				
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
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_name');
			$xfer += $output->writeString($this->carrier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_card_no !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_card_no');
			$xfer += $output->writeString($this->carrier_card_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_node_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_node_code');
			$xfer += $output->writeString($this->carrier_node_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>