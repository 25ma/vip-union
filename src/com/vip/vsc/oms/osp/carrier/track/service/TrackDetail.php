<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vsc\oms\osp\carrier\track\service;

class TrackDetail {
	
	static $_TSPEC;
	public $carrier_track_code = null;
	public $carrier_sub_code = null;
	public $operate_time = null;
	public $remark = null;
	public $operator_encrypt = null;
	public $operator_phone_encrypt = null;
	public $attachment_file_list = null;
	public $extend_fields = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_track_code'
			),
			2 => array(
			'var' => 'carrier_sub_code'
			),
			3 => array(
			'var' => 'operate_time'
			),
			4 => array(
			'var' => 'remark'
			),
			5 => array(
			'var' => 'operator_encrypt'
			),
			6 => array(
			'var' => 'operator_phone_encrypt'
			),
			7 => array(
			'var' => 'attachment_file_list'
			),
			8 => array(
			'var' => 'extend_fields'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_track_code'])){
				
				$this->carrier_track_code = $vals['carrier_track_code'];
			}
			
			
			if (isset($vals['carrier_sub_code'])){
				
				$this->carrier_sub_code = $vals['carrier_sub_code'];
			}
			
			
			if (isset($vals['operate_time'])){
				
				$this->operate_time = $vals['operate_time'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['operator_encrypt'])){
				
				$this->operator_encrypt = $vals['operator_encrypt'];
			}
			
			
			if (isset($vals['operator_phone_encrypt'])){
				
				$this->operator_phone_encrypt = $vals['operator_phone_encrypt'];
			}
			
			
			if (isset($vals['attachment_file_list'])){
				
				$this->attachment_file_list = $vals['attachment_file_list'];
			}
			
			
			if (isset($vals['extend_fields'])){
				
				$this->extend_fields = $vals['extend_fields'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TrackDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrier_track_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_track_code);
				
			}
			
			
			
			
			if ("carrier_sub_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_sub_code);
				
			}
			
			
			
			
			if ("operate_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->operate_time);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("operator_encrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator_encrypt);
				
			}
			
			
			
			
			if ("operator_phone_encrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator_phone_encrypt);
				
			}
			
			
			
			
			if ("attachment_file_list" == $schemeField){
				
				$needSkip = false;
				
				$this->attachment_file_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vsc\oms\osp\carrier\track\service\AttachmentFile();
						$elem0->read($input);
						
						$this->attachment_file_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("extend_fields" == $schemeField){
				
				$needSkip = false;
				
				$this->extend_fields = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = '';
						$input->readString($val1);
						
						$this->extend_fields[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		$xfer += $output->writeFieldBegin('carrier_track_code');
		$xfer += $output->writeString($this->carrier_track_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->carrier_sub_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_sub_code');
			$xfer += $output->writeString($this->carrier_sub_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('operate_time');
		$xfer += $output->writeI64($this->operate_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator_encrypt !== null) {
			
			$xfer += $output->writeFieldBegin('operator_encrypt');
			$xfer += $output->writeString($this->operator_encrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator_phone_encrypt !== null) {
			
			$xfer += $output->writeFieldBegin('operator_phone_encrypt');
			$xfer += $output->writeString($this->operator_phone_encrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attachment_file_list !== null) {
			
			$xfer += $output->writeFieldBegin('attachment_file_list');
			
			if (!is_array($this->attachment_file_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attachment_file_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extend_fields !== null) {
			
			$xfer += $output->writeFieldBegin('extend_fields');
			
			if (!is_array($this->extend_fields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->extend_fields as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>