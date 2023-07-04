<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SubmitSoInfoDetail {
	
	static $_TSPEC;
	public $spu = null;
	public $sku = null;
	public $qty = null;
	public $goodsType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spu'
			),
			2 => array(
			'var' => 'sku'
			),
			3 => array(
			'var' => 'qty'
			),
			4 => array(
			'var' => 'goodsType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spu'])){
				
				$this->spu = $vals['spu'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['goodsType'])){
				
				$this->goodsType = $vals['goodsType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubmitSoInfoDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("spu" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spu);
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->qty); 
				
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
		
		$xfer += $output->writeFieldBegin('spu');
		$xfer += $output->writeString($this->spu);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sku');
		$xfer += $output->writeString($this->sku);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('qty');
		$xfer += $output->writeI64($this->qty);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->goodsType !== null) {
			
			$xfer += $output->writeFieldBegin('goodsType');
			
			$em = new \com\vip\hcscm\cis\service\GoodsType; 
			$output->writeString($em::$__names[$this->goodsType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>