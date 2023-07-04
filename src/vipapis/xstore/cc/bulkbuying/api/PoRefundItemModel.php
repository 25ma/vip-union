<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class PoRefundItemModel {
	
	static $_TSPEC;
	public $proxyPo = null;
	public $proxy2BuyoutPo = null;
	public $barcode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'proxyPo'
			),
			2 => array(
			'var' => 'proxy2BuyoutPo'
			),
			3 => array(
			'var' => 'barcode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['proxyPo'])){
				
				$this->proxyPo = $vals['proxyPo'];
			}
			
			
			if (isset($vals['proxy2BuyoutPo'])){
				
				$this->proxy2BuyoutPo = $vals['proxy2BuyoutPo'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoRefundItemModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("proxyPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->proxyPo);
				
			}
			
			
			
			
			if ("proxy2BuyoutPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->proxy2BuyoutPo);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
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
		
		if($this->proxyPo !== null) {
			
			$xfer += $output->writeFieldBegin('proxyPo');
			$xfer += $output->writeString($this->proxyPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->proxy2BuyoutPo !== null) {
			
			$xfer += $output->writeFieldBegin('proxy2BuyoutPo');
			$xfer += $output->writeString($this->proxy2BuyoutPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>