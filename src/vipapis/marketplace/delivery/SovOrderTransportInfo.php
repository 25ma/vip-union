<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class SovOrderTransportInfo {
	
	static $_TSPEC;
	public $transport_no = null;
	public $carriers_name = null;
	public $carriers_code = null;
	public $amount = null;
	public $is_print = null;
	public $stat = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_no'
			),
			2 => array(
			'var' => 'carriers_name'
			),
			3 => array(
			'var' => 'carriers_code'
			),
			4 => array(
			'var' => 'amount'
			),
			5 => array(
			'var' => 'is_print'
			),
			6 => array(
			'var' => 'stat'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['carriers_name'])){
				
				$this->carriers_name = $vals['carriers_name'];
			}
			
			
			if (isset($vals['carriers_code'])){
				
				$this->carriers_code = $vals['carriers_code'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['is_print'])){
				
				$this->is_print = $vals['is_print'];
			}
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SovOrderTransportInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("carriers_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_name);
				
			}
			
			
			
			
			if ("carriers_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_code);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("is_print" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_print); 
				
			}
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stat); 
				
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
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriers_name !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_name');
			$xfer += $output->writeString($this->carriers_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriers_code !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_code');
			$xfer += $output->writeString($this->carriers_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_print !== null) {
			
			$xfer += $output->writeFieldBegin('is_print');
			$xfer += $output->writeByte($this->is_print);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeByte($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>