<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class UploadCarrierBillResponse {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $upload_carrier_bill_result = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			3 => array(
			'var' => 'upload_carrier_bill_result'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['upload_carrier_bill_result'])){
				
				$this->upload_carrier_bill_result = $vals['upload_carrier_bill_result'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UploadCarrierBillResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("upload_carrier_bill_result" == $schemeField){
				
				$needSkip = false;
				
				$this->upload_carrier_bill_result = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tpc\api\model\UploadCarrierBillResult();
						$elem1->read($input);
						
						$this->upload_carrier_bill_result[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->upload_carrier_bill_result !== null) {
			
			$xfer += $output->writeFieldBegin('upload_carrier_bill_result');
			
			if (!is_array($this->upload_carrier_bill_result)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->upload_carrier_bill_result as $iter0){
				
				
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