<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupGetProdSpuDetailProductForVopModel {
	
	static $_TSPEC;
	public $productName = null;
	public $online = null;
	public $prodSpuId = null;
	public $osn = null;
	public $totalInventory = null;
	public $isDeleted = null;
	public $imageUrls = null;
	public $systemDesImages = null;
	public $listUrl = null;
	public $skuInfoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'productName'
			),
			2 => array(
			'var' => 'online'
			),
			3 => array(
			'var' => 'prodSpuId'
			),
			4 => array(
			'var' => 'osn'
			),
			5 => array(
			'var' => 'totalInventory'
			),
			6 => array(
			'var' => 'isDeleted'
			),
			7 => array(
			'var' => 'imageUrls'
			),
			8 => array(
			'var' => 'systemDesImages'
			),
			9 => array(
			'var' => 'listUrl'
			),
			10 => array(
			'var' => 'skuInfoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['productName'])){
				
				$this->productName = $vals['productName'];
			}
			
			
			if (isset($vals['online'])){
				
				$this->online = $vals['online'];
			}
			
			
			if (isset($vals['prodSpuId'])){
				
				$this->prodSpuId = $vals['prodSpuId'];
			}
			
			
			if (isset($vals['osn'])){
				
				$this->osn = $vals['osn'];
			}
			
			
			if (isset($vals['totalInventory'])){
				
				$this->totalInventory = $vals['totalInventory'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['imageUrls'])){
				
				$this->imageUrls = $vals['imageUrls'];
			}
			
			
			if (isset($vals['systemDesImages'])){
				
				$this->systemDesImages = $vals['systemDesImages'];
			}
			
			
			if (isset($vals['listUrl'])){
				
				$this->listUrl = $vals['listUrl'];
			}
			
			
			if (isset($vals['skuInfoList'])){
				
				$this->skuInfoList = $vals['skuInfoList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupGetProdSpuDetailProductForVopModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("productName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productName);
				
			}
			
			
			
			
			if ("online" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->online); 
				
			}
			
			
			
			
			if ("prodSpuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prodSpuId);
				
			}
			
			
			
			
			if ("osn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->osn);
				
			}
			
			
			
			
			if ("totalInventory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->totalInventory);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDeleted); 
				
			}
			
			
			
			
			if ("imageUrls" == $schemeField){
				
				$needSkip = false;
				
				$this->imageUrls = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->imageUrls[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("systemDesImages" == $schemeField){
				
				$needSkip = false;
				
				$this->systemDesImages = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->systemDesImages[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("listUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->listUrl);
				
			}
			
			
			
			
			if ("skuInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->skuInfoList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\cup\sal\vop\SkuInfoForVopModel();
						$elem2->read($input);
						
						$this->skuInfoList[$_size2++] = $elem2;
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
		
		if($this->productName !== null) {
			
			$xfer += $output->writeFieldBegin('productName');
			$xfer += $output->writeString($this->productName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->online !== null) {
			
			$xfer += $output->writeFieldBegin('online');
			$xfer += $output->writeI32($this->online);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prodSpuId !== null) {
			
			$xfer += $output->writeFieldBegin('prodSpuId');
			$xfer += $output->writeString($this->prodSpuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->osn !== null) {
			
			$xfer += $output->writeFieldBegin('osn');
			$xfer += $output->writeString($this->osn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalInventory !== null) {
			
			$xfer += $output->writeFieldBegin('totalInventory');
			$xfer += $output->writeString($this->totalInventory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeI32($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageUrls !== null) {
			
			$xfer += $output->writeFieldBegin('imageUrls');
			
			if (!is_array($this->imageUrls)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->imageUrls as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->systemDesImages !== null) {
			
			$xfer += $output->writeFieldBegin('systemDesImages');
			
			if (!is_array($this->systemDesImages)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->systemDesImages as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->listUrl !== null) {
			
			$xfer += $output->writeFieldBegin('listUrl');
			$xfer += $output->writeString($this->listUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('skuInfoList');
			
			if (!is_array($this->skuInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->skuInfoList as $iter0){
				
				
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