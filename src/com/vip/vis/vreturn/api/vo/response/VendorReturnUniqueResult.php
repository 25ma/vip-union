<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\response;

class VendorReturnUniqueResult {
	
	static $_TSPEC;
	public $return_sn = null;
	public $out_time = null;
	public $total_cases = null;
	public $total_sku_count = null;
	public $total_qty = null;
	public $detail_list = null;
	public $detail_count = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'return_sn'
			),
			2 => array(
			'var' => 'out_time'
			),
			3 => array(
			'var' => 'total_cases'
			),
			4 => array(
			'var' => 'total_sku_count'
			),
			5 => array(
			'var' => 'total_qty'
			),
			6 => array(
			'var' => 'detail_list'
			),
			7 => array(
			'var' => 'detail_count'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
			if (isset($vals['out_time'])){
				
				$this->out_time = $vals['out_time'];
			}
			
			
			if (isset($vals['total_cases'])){
				
				$this->total_cases = $vals['total_cases'];
			}
			
			
			if (isset($vals['total_sku_count'])){
				
				$this->total_sku_count = $vals['total_sku_count'];
			}
			
			
			if (isset($vals['total_qty'])){
				
				$this->total_qty = $vals['total_qty'];
			}
			
			
			if (isset($vals['detail_list'])){
				
				$this->detail_list = $vals['detail_list'];
			}
			
			
			if (isset($vals['detail_count'])){
				
				$this->detail_count = $vals['detail_count'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorReturnUniqueResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_sn);
				
			}
			
			
			
			
			if ("out_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_time);
				
			}
			
			
			
			
			if ("total_cases" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_cases); 
				
			}
			
			
			
			
			if ("total_sku_count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_sku_count); 
				
			}
			
			
			
			
			if ("total_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_qty); 
				
			}
			
			
			
			
			if ("detail_list" == $schemeField){
				
				$needSkip = false;
				
				$this->detail_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\vreturn\api\vo\response\VendorReturnUniqueInfo();
						$elem0->read($input);
						
						$this->detail_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("detail_count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->detail_count); 
				
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
		
		if($this->return_sn !== null) {
			
			$xfer += $output->writeFieldBegin('return_sn');
			$xfer += $output->writeString($this->return_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_time !== null) {
			
			$xfer += $output->writeFieldBegin('out_time');
			$xfer += $output->writeString($this->out_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_cases !== null) {
			
			$xfer += $output->writeFieldBegin('total_cases');
			$xfer += $output->writeI32($this->total_cases);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_sku_count !== null) {
			
			$xfer += $output->writeFieldBegin('total_sku_count');
			$xfer += $output->writeI32($this->total_sku_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_qty !== null) {
			
			$xfer += $output->writeFieldBegin('total_qty');
			$xfer += $output->writeI32($this->total_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detail_list !== null) {
			
			$xfer += $output->writeFieldBegin('detail_list');
			
			if (!is_array($this->detail_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->detail_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detail_count !== null) {
			
			$xfer += $output->writeFieldBegin('detail_count');
			$xfer += $output->writeI32($this->detail_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>