<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupGetProdSkuListDataForVop {
	
	static $_TSPEC;
	public $prodSpuId = null;
	public $skuList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'prodSpuId'
			),
			2 => array(
			'var' => 'skuList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prodSpuId'])){
				
				$this->prodSpuId = $vals['prodSpuId'];
			}
			
			
			if (isset($vals['skuList'])){
				
				$this->skuList = $vals['skuList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupGetProdSkuListDataForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("prodSpuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prodSpuId);
				
			}
			
			
			
			
			if ("skuList" == $schemeField){
				
				$needSkip = false;
				
				$this->skuList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->skuList[$_size0++] = $elem0;
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
		
		if($this->prodSpuId !== null) {
			
			$xfer += $output->writeFieldBegin('prodSpuId');
			$xfer += $output->writeString($this->prodSpuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuList !== null) {
			
			$xfer += $output->writeFieldBegin('skuList');
			
			if (!is_array($this->skuList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->skuList as $iter0){
				
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