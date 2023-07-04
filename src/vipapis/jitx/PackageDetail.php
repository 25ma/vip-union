<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class PackageDetail {
	
	static $_TSPEC;
	public $barcode = null;
	public $quantity = null;
	public $trade_id = null;
	public $raw_barcode_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'quantity'
			),
			3 => array(
			'var' => 'trade_id'
			),
			4 => array(
			'var' => 'raw_barcode_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['trade_id'])){
				
				$this->trade_id = $vals['trade_id'];
			}
			
			
			if (isset($vals['raw_barcode_list'])){
				
				$this->raw_barcode_list = $vals['raw_barcode_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PackageDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("trade_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade_id);
				
			}
			
			
			
			
			if ("raw_barcode_list" == $schemeField){
				
				$needSkip = false;
				
				$this->raw_barcode_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->raw_barcode_list[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->trade_id !== null) {
			
			$xfer += $output->writeFieldBegin('trade_id');
			$xfer += $output->writeString($this->trade_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->raw_barcode_list !== null) {
			
			$xfer += $output->writeFieldBegin('raw_barcode_list');
			
			if (!is_array($this->raw_barcode_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->raw_barcode_list as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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