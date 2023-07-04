<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class TransportNoRequest {
	
	static $_TSPEC;
	public $tmsRequestHeader = null;
	public $orderSn = null;
	public $vendorCode = null;
	public $custUnCode = null;
	public $masterTransportNo = null;
	public $packageNos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsRequestHeader'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'vendorCode'
			),
			4 => array(
			'var' => 'custUnCode'
			),
			5 => array(
			'var' => 'masterTransportNo'
			),
			6 => array(
			'var' => 'packageNos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsRequestHeader'])){
				
				$this->tmsRequestHeader = $vals['tmsRequestHeader'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['custUnCode'])){
				
				$this->custUnCode = $vals['custUnCode'];
			}
			
			
			if (isset($vals['masterTransportNo'])){
				
				$this->masterTransportNo = $vals['masterTransportNo'];
			}
			
			
			if (isset($vals['packageNos'])){
				
				$this->packageNos = $vals['packageNos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportNoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tmsRequestHeader" == $schemeField){
				
				$needSkip = false;
				
				$this->tmsRequestHeader = new \com\vip\top\carrier\service\TmsRequestHeader();
				$this->tmsRequestHeader->read($input);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("custUnCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custUnCode);
				
			}
			
			
			
			
			if ("masterTransportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->masterTransportNo);
				
			}
			
			
			
			
			if ("packageNos" == $schemeField){
				
				$needSkip = false;
				
				$this->packageNos = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->packageNos[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('tmsRequestHeader');
		
		if (!is_object($this->tmsRequestHeader)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->tmsRequestHeader->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('custUnCode');
		$xfer += $output->writeString($this->custUnCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->masterTransportNo !== null) {
			
			$xfer += $output->writeFieldBegin('masterTransportNo');
			$xfer += $output->writeString($this->masterTransportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageNos !== null) {
			
			$xfer += $output->writeFieldBegin('packageNos');
			
			if (!is_array($this->packageNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->packageNos as $iter0){
				
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