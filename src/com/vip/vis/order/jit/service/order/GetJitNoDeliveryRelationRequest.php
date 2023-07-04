<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\order;

class GetJitNoDeliveryRelationRequest {
	
	static $_TSPEC;
	public $system = null;
	public $vendor_id = null;
	public $create_time_start = null;
	public $create_time_end = null;
	public $new_order_sn_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'system'
			),
			2 => array(
			'var' => 'vendor_id'
			),
			3 => array(
			'var' => 'create_time_start'
			),
			4 => array(
			'var' => 'create_time_end'
			),
			5 => array(
			'var' => 'new_order_sn_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['system'])){
				
				$this->system = $vals['system'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['create_time_start'])){
				
				$this->create_time_start = $vals['create_time_start'];
			}
			
			
			if (isset($vals['create_time_end'])){
				
				$this->create_time_end = $vals['create_time_end'];
			}
			
			
			if (isset($vals['new_order_sn_list'])){
				
				$this->new_order_sn_list = $vals['new_order_sn_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetJitNoDeliveryRelationRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("system" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->system);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("create_time_start" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time_start); 
				
			}
			
			
			
			
			if ("create_time_end" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time_end); 
				
			}
			
			
			
			
			if ("new_order_sn_list" == $schemeField){
				
				$needSkip = false;
				
				$this->new_order_sn_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->new_order_sn_list[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('system');
		$xfer += $output->writeString($this->system);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->create_time_start !== null) {
			
			$xfer += $output->writeFieldBegin('create_time_start');
			$xfer += $output->writeI64($this->create_time_start);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time_end !== null) {
			
			$xfer += $output->writeFieldBegin('create_time_end');
			$xfer += $output->writeI64($this->create_time_end);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->new_order_sn_list !== null) {
			
			$xfer += $output->writeFieldBegin('new_order_sn_list');
			
			if (!is_array($this->new_order_sn_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->new_order_sn_list as $iter0){
				
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