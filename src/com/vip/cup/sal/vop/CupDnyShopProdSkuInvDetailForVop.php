<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupDnyShopProdSkuInvDetailForVop {
	
	static $_TSPEC;
	public $prodSkuId = null;
	public $invTradeNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			101 => array(
			'var' => 'prodSkuId'
			),
			102 => array(
			'var' => 'invTradeNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prodSkuId'])){
				
				$this->prodSkuId = $vals['prodSkuId'];
			}
			
			
			if (isset($vals['invTradeNo'])){
				
				$this->invTradeNo = $vals['invTradeNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupDnyShopProdSkuInvDetailForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("prodSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prodSkuId);
				
			}
			
			
			
			
			if ("invTradeNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invTradeNo);
				
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
		
		if($this->prodSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('prodSkuId');
			$xfer += $output->writeString($this->prodSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invTradeNo !== null) {
			
			$xfer += $output->writeFieldBegin('invTradeNo');
			$xfer += $output->writeString($this->invTradeNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>