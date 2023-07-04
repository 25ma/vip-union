<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class UploadCarrierBillRequest {
	
	static $_TSPEC;
	public $carrier_code = null;
	public $transaction_id = null;
	public $page_size = null;
	public $page_index = null;
	public $total_count = null;
	public $upload_carrier_bill_models = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_code'
			),
			3 => array(
			'var' => 'transaction_id'
			),
			4 => array(
			'var' => 'page_size'
			),
			5 => array(
			'var' => 'page_index'
			),
			6 => array(
			'var' => 'total_count'
			),
			7 => array(
			'var' => 'upload_carrier_bill_models'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
			if (isset($vals['page_index'])){
				
				$this->page_index = $vals['page_index'];
			}
			
			
			if (isset($vals['total_count'])){
				
				$this->total_count = $vals['total_count'];
			}
			
			
			if (isset($vals['upload_carrier_bill_models'])){
				
				$this->upload_carrier_bill_models = $vals['upload_carrier_bill_models'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UploadCarrierBillRequest';
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
			
			
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("page_size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_size); 
				
			}
			
			
			
			
			if ("page_index" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_index); 
				
			}
			
			
			
			
			if ("total_count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_count); 
				
			}
			
			
			
			
			if ("upload_carrier_bill_models" == $schemeField){
				
				$needSkip = false;
				
				$this->upload_carrier_bill_models = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\tpc\api\model\UploadCarrierBillModel();
						$elem0->read($input);
						
						$this->upload_carrier_bill_models[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_index !== null) {
			
			$xfer += $output->writeFieldBegin('page_index');
			$xfer += $output->writeI32($this->page_index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_count !== null) {
			
			$xfer += $output->writeFieldBegin('total_count');
			$xfer += $output->writeI32($this->total_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('upload_carrier_bill_models');
		
		if (!is_array($this->upload_carrier_bill_models)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->upload_carrier_bill_models as $iter0){
			
			
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