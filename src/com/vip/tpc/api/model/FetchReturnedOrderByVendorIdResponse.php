<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class FetchReturnedOrderByVendorIdResponse {
	
	static $_TSPEC;
	public $result_code = null;
	public $result_message = null;
	public $total = null;
	public $returned_order_task_models = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'result_code'
			),
			2 => array(
			'var' => 'result_message'
			),
			3 => array(
			'var' => 'total'
			),
			4 => array(
			'var' => 'returned_order_task_models'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['result_code'])){
				
				$this->result_code = $vals['result_code'];
			}
			
			
			if (isset($vals['result_message'])){
				
				$this->result_message = $vals['result_message'];
			}
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
			if (isset($vals['returned_order_task_models'])){
				
				$this->returned_order_task_models = $vals['returned_order_task_models'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FetchReturnedOrderByVendorIdResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("result_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->result_code); 
				
			}
			
			
			
			
			if ("result_message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_message);
				
			}
			
			
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
			}
			
			
			
			
			if ("returned_order_task_models" == $schemeField){
				
				$needSkip = false;
				
				$this->returned_order_task_models = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\tpc\api\model\ReturnedOrderModel();
						$elem0->read($input);
						
						$this->returned_order_task_models[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('result_code');
		$xfer += $output->writeI32($this->result_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->result_message !== null) {
			
			$xfer += $output->writeFieldBegin('result_message');
			$xfer += $output->writeString($this->result_message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('total');
		$xfer += $output->writeI32($this->total);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->returned_order_task_models !== null) {
			
			$xfer += $output->writeFieldBegin('returned_order_task_models');
			
			if (!is_array($this->returned_order_task_models)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->returned_order_task_models as $iter0){
				
				
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