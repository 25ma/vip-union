<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class TransportNoResponse {
	
	static $_TSPEC;
	public $tmsResponseHeader = null;
	public $orderSn = null;
	public $masterTransportNo = null;
	public $subTransportNos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsResponseHeader'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'masterTransportNo'
			),
			4 => array(
			'var' => 'subTransportNos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsResponseHeader'])){
				
				$this->tmsResponseHeader = $vals['tmsResponseHeader'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['masterTransportNo'])){
				
				$this->masterTransportNo = $vals['masterTransportNo'];
			}
			
			
			if (isset($vals['subTransportNos'])){
				
				$this->subTransportNos = $vals['subTransportNos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportNoResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tmsResponseHeader" == $schemeField){
				
				$needSkip = false;
				
				$this->tmsResponseHeader = new \com\vip\top\carrier\service\TmsResponseHeader();
				$this->tmsResponseHeader->read($input);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("masterTransportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->masterTransportNo);
				
			}
			
			
			
			
			if ("subTransportNos" == $schemeField){
				
				$needSkip = false;
				
				$this->subTransportNos = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->subTransportNos[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('tmsResponseHeader');
		
		if (!is_object($this->tmsResponseHeader)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->tmsResponseHeader->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->masterTransportNo !== null) {
			
			$xfer += $output->writeFieldBegin('masterTransportNo');
			$xfer += $output->writeString($this->masterTransportNo);
			
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