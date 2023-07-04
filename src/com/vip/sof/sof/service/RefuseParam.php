<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class RefuseParam {
	
	static $_TSPEC;
	public $appName = null;
	public $orderSn = null;
	public $carrier = null;
	public $carriersCode = null;
	public $createBy = null;
	public $note = null;
	public $storeId = null;
	public $refuseGoodsParam = null;
	public $refuseType = null;
	public $fids = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appName'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'carrier'
			),
			4 => array(
			'var' => 'carriersCode'
			),
			5 => array(
			'var' => 'createBy'
			),
			6 => array(
			'var' => 'note'
			),
			7 => array(
			'var' => 'storeId'
			),
			8 => array(
			'var' => 'refuseGoodsParam'
			),
			9 => array(
			'var' => 'refuseType'
			),
			10 => array(
			'var' => 'fids'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['createBy'])){
				
				$this->createBy = $vals['createBy'];
			}
			
			
			if (isset($vals['note'])){
				
				$this->note = $vals['note'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['refuseGoodsParam'])){
				
				$this->refuseGoodsParam = $vals['refuseGoodsParam'];
			}
			
			
			if (isset($vals['refuseType'])){
				
				$this->refuseType = $vals['refuseType'];
			}
			
			
			if (isset($vals['fids'])){
				
				$this->fids = $vals['fids'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RefuseParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("createBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createBy);
				
			}
			
			
			
			
			if ("note" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->note);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("refuseGoodsParam" == $schemeField){
				
				$needSkip = false;
				
				$this->refuseGoodsParam = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\RefuseGoodsParam();
						$elem0->read($input);
						
						$this->refuseGoodsParam[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("refuseType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refuseType); 
				
			}
			
			
			
			
			if ("fids" == $schemeField){
				
				$needSkip = false;
				
				$this->fids = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->fids[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('appName');
		$xfer += $output->writeString($this->appName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createBy !== null) {
			
			$xfer += $output->writeFieldBegin('createBy');
			$xfer += $output->writeString($this->createBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->note !== null) {
			
			$xfer += $output->writeFieldBegin('note');
			$xfer += $output->writeString($this->note);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refuseGoodsParam !== null) {
			
			$xfer += $output->writeFieldBegin('refuseGoodsParam');
			
			if (!is_array($this->refuseGoodsParam)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->refuseGoodsParam as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refuseType !== null) {
			
			$xfer += $output->writeFieldBegin('refuseType');
			$xfer += $output->writeI32($this->refuseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fids !== null) {
			
			$xfer += $output->writeFieldBegin('fids');
			
			if (!is_array($this->fids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->fids as $iter0){
				
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