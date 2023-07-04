<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\jitXReturn;

class VendorOrderReturnGoods {
	
	static $_TSPEC;
	public $size_sn = null;
	public $quantity = null;
	public $result_type = null;
	public $refuse_result = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'size_sn'
			),
			2 => array(
			'var' => 'quantity'
			),
			3 => array(
			'var' => 'result_type'
			),
			4 => array(
			'var' => 'refuse_result'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['size_sn'])){
				
				$this->size_sn = $vals['size_sn'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['result_type'])){
				
				$this->result_type = $vals['result_type'];
			}
			
			
			if (isset($vals['refuse_result'])){
				
				$this->refuse_result = $vals['refuse_result'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorOrderReturnGoods';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("size_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_sn);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("result_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->result_type); 
				
			}
			
			
			
			
			if ("refuse_result" == $schemeField){
				
				$needSkip = false;
				
				$this->refuse_result = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\order\jit\service\jitXReturn\RefuseResult();
						$elem0->read($input);
						
						$this->refuse_result[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('size_sn');
		$xfer += $output->writeString($this->size_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('result_type');
		$xfer += $output->writeByte($this->result_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->refuse_result !== null) {
			
			$xfer += $output->writeFieldBegin('refuse_result');
			
			if (!is_array($this->refuse_result)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->refuse_result as $iter0){
				
				
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