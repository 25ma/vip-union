<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class TransportNoInfo {
	
	static $_TSPEC;
	public $transportNo = null;
	public $consignmentNo = null;
	public $subTransportNos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'consignmentNo'
			),
			3 => array(
			'var' => 'subTransportNos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['consignmentNo'])){
				
				$this->consignmentNo = $vals['consignmentNo'];
			}
			
			
			if (isset($vals['subTransportNos'])){
				
				$this->subTransportNos = $vals['subTransportNos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportNoInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("consignmentNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignmentNo);
				
			}
			
			
			
			
			if ("subTransportNos" == $schemeField){
				
				$needSkip = false;
				
				$this->subTransportNos = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->subTransportNos[$_size2++] = $elem2;
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
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consignmentNo !== null) {
			
			$xfer += $output->writeFieldBegin('consignmentNo');
			$xfer += $output->writeString($this->consignmentNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subTransportNos !== null) {
			
			$xfer += $output->writeFieldBegin('subTransportNos');
			
			if (!is_array($this->subTransportNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->subTransportNos as $iter0){
				
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