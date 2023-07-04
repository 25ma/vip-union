<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class GetTransportInterfaceVopResult {
	
	static $_TSPEC;
	public $transport_no = null;
	public $carriers_name = null;
	public $carriers_code = null;
	public $stat = null;
	public $receiver_province = null;
	public $receiver_city = null;
	public $receiver_county = null;
	public $order_info_list = null;
	
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
			'var' => 'stat'
			),
			5 => array(
			'var' => 'receiver_province'
			),
			6 => array(
			'var' => 'receiver_city'
			),
			7 => array(
			'var' => 'receiver_county'
			),
			8 => array(
			'var' => 'order_info_list'
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
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['receiver_province'])){
				
				$this->receiver_province = $vals['receiver_province'];
			}
			
			
			if (isset($vals['receiver_city'])){
				
				$this->receiver_city = $vals['receiver_city'];
			}
			
			
			if (isset($vals['receiver_county'])){
				
				$this->receiver_county = $vals['receiver_county'];
			}
			
			
			if (isset($vals['order_info_list'])){
				
				$this->order_info_list = $vals['order_info_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetTransportInterfaceVopResult';
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
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stat); 
				
			}
			
			
			
			
			if ("receiver_province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_province);
				
			}
			
			
			
			
			if ("receiver_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_city);
				
			}
			
			
			
			
			if ("receiver_county" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_county);
				
			}
			
			
			
			
			if ("order_info_list" == $schemeField){
				
				$needSkip = false;
				
				$this->order_info_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\GetHebaoOrderVopResult();
						$elem0->read($input);
						
						$this->order_info_list[$_size0++] = $elem0;
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
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeByte($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_province !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_province');
			$xfer += $output->writeString($this->receiver_province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_city !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_city');
			$xfer += $output->writeString($this->receiver_city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_county !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_county');
			$xfer += $output->writeString($this->receiver_county);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_info_list !== null) {
			
			$xfer += $output->writeFieldBegin('order_info_list');
			
			if (!is_array($this->order_info_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->order_info_list as $iter0){
				
				
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