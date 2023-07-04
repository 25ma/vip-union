<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupShopGetSkuStockDataForVop {
	
	static $_TSPEC;
	public $skuStockMap = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			101 => array(
			'var' => 'skuStockMap'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['skuStockMap'])){
				
				$this->skuStockMap = $vals['skuStockMap'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupShopGetSkuStockDataForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("skuStockMap" == $schemeField){
				
				$needSkip = false;
				
				$this->skuStockMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->skuStockMap[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		if($this->skuStockMap !== null) {
			
			$xfer += $output->writeFieldBegin('skuStockMap');
			
			if (!is_array($this->skuStockMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->skuStockMap as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>