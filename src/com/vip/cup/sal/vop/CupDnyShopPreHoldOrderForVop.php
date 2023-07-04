<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupDnyShopPreHoldOrderForVop {
	
	static $_TSPEC;
	public $orderId = null;
	public $skuStock = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderId'
			),
			2 => array(
			'var' => 'skuStock'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['skuStock'])){
				
				$this->skuStock = $vals['skuStock'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupDnyShopPreHoldOrderForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderId);
				
			}
			
			
			
			
			if ("skuStock" == $schemeField){
				
				$needSkip = false;
				
				$this->skuStock = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\cup\sal\vop\CupDnyShopSkuStockForVop();
						$elem0->read($input);
						
						$this->skuStock[$_size0++] = $elem0;
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
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeString($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuStock !== null) {
			
			$xfer += $output->writeFieldBegin('skuStock');
			
			if (!is_array($this->skuStock)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->skuStock as $iter0){
				
				
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