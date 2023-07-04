<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class SubTransportPackage {
	
	static $_TSPEC;
	public $packageNo = null;
	public $goods = null;
	public $packageVolume = null;
	public $packageWeight = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'packageNo'
			),
			2 => array(
			'var' => 'goods'
			),
			3 => array(
			'var' => 'packageVolume'
			),
			4 => array(
			'var' => 'packageWeight'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['packageNo'])){
				
				$this->packageNo = $vals['packageNo'];
			}
			
			
			if (isset($vals['goods'])){
				
				$this->goods = $vals['goods'];
			}
			
			
			if (isset($vals['packageVolume'])){
				
				$this->packageVolume = $vals['packageVolume'];
			}
			
			
			if (isset($vals['packageWeight'])){
				
				$this->packageWeight = $vals['packageWeight'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubTransportPackage';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("packageNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageNo);
				
			}
			
			
			
			
			if ("goods" == $schemeField){
				
				$needSkip = false;
				
				$this->goods = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\PackageGoods();
						$elem0->read($input);
						
						$this->goods[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("packageVolume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageVolume);
				
			}
			
			
			
			
			if ("packageWeight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageWeight);
				
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
		
		if($this->packageNo !== null) {
			
			$xfer += $output->writeFieldBegin('packageNo');
			$xfer += $output->writeString($this->packageNo);
			
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
		
		
		if($this->packageVolume !== null) {
			
			$xfer += $output->writeFieldBegin('packageVolume');
			$xfer += $output->writeString($this->packageVolume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageWeight !== null) {
			
			$xfer += $output->writeFieldBegin('packageWeight');
			$xfer += $output->writeString($this->packageWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>