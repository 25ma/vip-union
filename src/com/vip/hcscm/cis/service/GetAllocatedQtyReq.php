<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class GetAllocatedQtyReq {
	
	static $_TSPEC;
	public $soNoList = null;
	public $sku = null;
	public $salesChannel = null;
	public $goodsType = null;
	public $warehouseCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'soNoList'
			),
			2 => array(
			'var' => 'sku'
			),
			3 => array(
			'var' => 'salesChannel'
			),
			4 => array(
			'var' => 'goodsType'
			),
			5 => array(
			'var' => 'warehouseCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['soNoList'])){
				
				$this->soNoList = $vals['soNoList'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['salesChannel'])){
				
				$this->salesChannel = $vals['salesChannel'];
			}
			
			
			if (isset($vals['goodsType'])){
				
				$this->goodsType = $vals['goodsType'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetAllocatedQtyReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("soNoList" == $schemeField){
				
				$needSkip = false;
				
				$this->soNoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->soNoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("salesChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesChannel);
				
			}
			
			
			
			
			if ("goodsType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\hcscm\cis\service\GoodsType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->goodsType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
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
		
		$xfer += $output->writeFieldBegin('soNoList');
		
		if (!is_array($this->soNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->soNoList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sku');
		$xfer += $output->writeString($this->sku);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('salesChannel');
		$xfer += $output->writeString($this->salesChannel);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->goodsType !== null) {
			
			$xfer += $output->writeFieldBegin('goodsType');
			
			$em = new \com\vip\hcscm\cis\service\GoodsType; 
			$output->writeString($em::$__names[$this->goodsType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>