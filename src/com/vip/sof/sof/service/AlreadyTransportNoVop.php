<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AlreadyTransportNoVop {
	
	static $_TSPEC;
	public $transport_no = null;
	public $carriers_code = null;
	public $carriers_name = null;
	public $stat = null;
	public $goods = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_no'
			),
			2 => array(
			'var' => 'carriers_code'
			),
			3 => array(
			'var' => 'carriers_name'
			),
			4 => array(
			'var' => 'stat'
			),
			5 => array(
			'var' => 'goods'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['carriers_code'])){
				
				$this->carriers_code = $vals['carriers_code'];
			}
			
			
			if (isset($vals['carriers_name'])){
				
				$this->carriers_name = $vals['carriers_name'];
			}
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['goods'])){
				
				$this->goods = $vals['goods'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AlreadyTransportNoVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("carriers_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_code);
				
			}
			
			
			
			
			if ("carriers_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_name);
				
			}
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stat); 
				
			}
			
			
			
			
			if ("goods" == $schemeField){
				
				$needSkip = false;
				
				$this->goods = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\AlreadyTransportNoGoodsVop();
						$elem0->read($input);
						
						$this->goods[$_size0++] = $elem0;
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
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriers_code !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_code');
			$xfer += $output->writeString($this->carriers_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriers_name !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_name');
			$xfer += $output->writeString($this->carriers_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeByte($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods !== null) {
			
			$xfer += $output->writeFieldBegin('goods');
			
			if (!is_array($this->goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods as $iter0){
				
				
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