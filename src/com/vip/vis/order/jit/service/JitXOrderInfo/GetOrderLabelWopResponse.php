<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\JitXOrderInfo;

class GetOrderLabelWopResponse {
	
	static $_TSPEC;
	public $order_label_list = null;
	public $fail_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_label_list'
			),
			2 => array(
			'var' => 'fail_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_label_list'])){
				
				$this->order_label_list = $vals['order_label_list'];
			}
			
			
			if (isset($vals['fail_list'])){
				
				$this->fail_list = $vals['fail_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetOrderLabelWopResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_label_list" == $schemeField){
				
				$needSkip = false;
				
				$this->order_label_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\order\jit\service\JitXOrderInfo\OrderLabel();
						$elem0->read($input);
						
						$this->order_label_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("fail_list" == $schemeField){
				
				$needSkip = false;
				
				$this->fail_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vis\order\jit\service\JitXOrderInfo\OrderLabelFail();
						$elem1->read($input);
						
						$this->fail_list[$_size1++] = $elem1;
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
		
		if($this->order_label_list !== null) {
			
			$xfer += $output->writeFieldBegin('order_label_list');
			
			if (!is_array($this->order_label_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->order_label_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fail_list !== null) {
			
			$xfer += $output->writeFieldBegin('fail_list');
			
			if (!is_array($this->fail_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->fail_list as $iter0){
				
				
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