<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class QueryReceiverInfoResponse {
	
	static $_TSPEC;
	public $result = null;
	public $carrier_code = null;
	public $iv = null;
	public $receiver_info_model = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'result'
			),
			2 => array(
			'var' => 'carrier_code'
			),
			3 => array(
			'var' => 'iv'
			),
			4 => array(
			'var' => 'receiver_info_model'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['iv'])){
				
				$this->iv = $vals['iv'];
			}
			
			
			if (isset($vals['receiver_info_model'])){
				
				$this->receiver_info_model = $vals['receiver_info_model'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryReceiverInfoResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				
				$this->result = new \com\vip\tpc\api\model\ExternalResultModel();
				$this->result->read($input);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("iv" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->iv);
				
			}
			
			
			
			
			if ("receiver_info_model" == $schemeField){
				
				$needSkip = false;
				
				$this->receiver_info_model = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tpc\api\model\ReceiverInfoModel();
						$elem1->read($input);
						
						$this->receiver_info_model[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('result');
		
		if (!is_object($this->result)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->result->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->iv !== null) {
			
			$xfer += $output->writeFieldBegin('iv');
			$xfer += $output->writeString($this->iv);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_info_model !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_info_model');
			
			if (!is_array($this->receiver_info_model)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->receiver_info_model as $iter0){
				
				
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