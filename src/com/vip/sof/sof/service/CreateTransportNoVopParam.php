<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CreateTransportNoVopParam {
	
	static $_TSPEC;
	public $store_id = null;
	public $order_sn = null;
	public $package_type = null;
	public $packages = null;
	public $hebao_order_sn_list = null;
	public $package_sn = null;
	public $is_parent = null;
	public $ignore_restrict = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'store_id'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'package_type'
			),
			4 => array(
			'var' => 'packages'
			),
			5 => array(
			'var' => 'hebao_order_sn_list'
			),
			6 => array(
			'var' => 'package_sn'
			),
			7 => array(
			'var' => 'is_parent'
			),
			8 => array(
			'var' => 'ignore_restrict'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['store_id'])){
				
				$this->store_id = $vals['store_id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['package_type'])){
				
				$this->package_type = $vals['package_type'];
			}
			
			
			if (isset($vals['packages'])){
				
				$this->packages = $vals['packages'];
			}
			
			
			if (isset($vals['hebao_order_sn_list'])){
				
				$this->hebao_order_sn_list = $vals['hebao_order_sn_list'];
			}
			
			
			if (isset($vals['package_sn'])){
				
				$this->package_sn = $vals['package_sn'];
			}
			
			
			if (isset($vals['is_parent'])){
				
				$this->is_parent = $vals['is_parent'];
			}
			
			
			if (isset($vals['ignore_restrict'])){
				
				$this->ignore_restrict = $vals['ignore_restrict'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateTransportNoVopParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("store_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_id);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("package_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->package_type); 
				
			}
			
			
			
			
			if ("packages" == $schemeField){
				
				$needSkip = false;
				
				$this->packages = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\TransportNoVopItem();
						$elem0->read($input);
						
						$this->packages[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("hebao_order_sn_list" == $schemeField){
				
				$needSkip = false;
				
				$this->hebao_order_sn_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->hebao_order_sn_list[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("package_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_sn);
				
			}
			
			
			
			
			if ("is_parent" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_parent); 
				
			}
			
			
			
			
			if ("ignore_restrict" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->ignore_restrict); 
				
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
		
		$xfer += $output->writeFieldBegin('store_id');
		$xfer += $output->writeString($this->store_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->package_type !== null) {
			
			$xfer += $output->writeFieldBegin('package_type');
			$xfer += $output->writeI32($this->package_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('packages');
		
		if (!is_array($this->packages)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->packages as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->hebao_order_sn_list !== null) {
			
			$xfer += $output->writeFieldBegin('hebao_order_sn_list');
			
			if (!is_array($this->hebao_order_sn_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->hebao_order_sn_list as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_sn !== null) {
			
			$xfer += $output->writeFieldBegin('package_sn');
			$xfer += $output->writeString($this->package_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_parent !== null) {
			
			$xfer += $output->writeFieldBegin('is_parent');
			$xfer += $output->writeByte($this->is_parent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ignore_restrict !== null) {
			
			$xfer += $output->writeFieldBegin('ignore_restrict');
			$xfer += $output->writeByte($this->ignore_restrict);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>