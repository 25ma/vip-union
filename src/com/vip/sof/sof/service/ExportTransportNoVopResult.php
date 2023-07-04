<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ExportTransportNoVopResult {
	
	static $_TSPEC;
	public $id = null;
	public $op_result = null;
	public $order_sn = null;
	public $transport_no = null;
	public $carriers_code = null;
	public $carriers_name = null;
	public $error_msg = null;
	public $already_transport_no_list = null;
	public $sub_transport_no = null;
	public $warn_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'op_result'
			),
			3 => array(
			'var' => 'order_sn'
			),
			4 => array(
			'var' => 'transport_no'
			),
			5 => array(
			'var' => 'carriers_code'
			),
			6 => array(
			'var' => 'carriers_name'
			),
			7 => array(
			'var' => 'error_msg'
			),
			8 => array(
			'var' => 'already_transport_no_list'
			),
			9 => array(
			'var' => 'sub_transport_no'
			),
			10 => array(
			'var' => 'warn_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['op_result'])){
				
				$this->op_result = $vals['op_result'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['carriers_code'])){
				
				$this->carriers_code = $vals['carriers_code'];
			}
			
			
			if (isset($vals['carriers_name'])){
				
				$this->carriers_name = $vals['carriers_name'];
			}
			
			
			if (isset($vals['error_msg'])){
				
				$this->error_msg = $vals['error_msg'];
			}
			
			
			if (isset($vals['already_transport_no_list'])){
				
				$this->already_transport_no_list = $vals['already_transport_no_list'];
			}
			
			
			if (isset($vals['sub_transport_no'])){
				
				$this->sub_transport_no = $vals['sub_transport_no'];
			}
			
			
			if (isset($vals['warn_msg'])){
				
				$this->warn_msg = $vals['warn_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExportTransportNoVopResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("op_result" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->op_result); 
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("carriers_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_code);
				
			}
			
			
			
			
			if ("carriers_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_name);
				
			}
			
			
			
			
			if ("error_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->error_msg);
				
			}
			
			
			
			
			if ("already_transport_no_list" == $schemeField){
				
				$needSkip = false;
				
				$this->already_transport_no_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\AlreadyTransportNoVop();
						$elem1->read($input);
						
						$this->already_transport_no_list[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sub_transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_transport_no);
				
			}
			
			
			
			
			if ("warn_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warn_msg);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->op_result !== null) {
			
			$xfer += $output->writeFieldBegin('op_result');
			$xfer += $output->writeByte($this->op_result);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriers_code !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_code');
			$xfer += $output->writeString($this->carriers_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriers_name !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_name');
			$xfer += $output->writeString($this->carriers_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->error_msg !== null) {
			
			$xfer += $output->writeFieldBegin('error_msg');
			$xfer += $output->writeString($this->error_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->already_transport_no_list !== null) {
			
			$xfer += $output->writeFieldBegin('already_transport_no_list');
			
			if (!is_array($this->already_transport_no_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->already_transport_no_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sub_transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('sub_transport_no');
			$xfer += $output->writeString($this->sub_transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warn_msg !== null) {
			
			$xfer += $output->writeFieldBegin('warn_msg');
			$xfer += $output->writeString($this->warn_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>