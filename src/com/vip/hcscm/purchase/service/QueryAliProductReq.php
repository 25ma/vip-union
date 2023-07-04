<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class QueryAliProductReq {
	
	static $_TSPEC;
	public $productId = null;
	public $needShopInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'productId'
			),
			2 => array(
			'var' => 'needShopInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['productId'])){
				
				$this->productId = $vals['productId'];
			}
			
			
			if (isset($vals['needShopInfo'])){
				
				$this->needShopInfo = $vals['needShopInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryAliProductReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("productId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->productId); 
				
			}
			
			
			
			
			if ("needShopInfo" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needShopInfo);
				
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
		
		$xfer += $output->writeFieldBegin('productId');
		$xfer += $output->writeI64($this->productId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->needShopInfo !== null) {
			
			$xfer += $output->writeFieldBegin('needShopInfo');
			$xfer += $output->writeBool($this->needShopInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>