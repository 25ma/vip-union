<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupGetProdSkuDetailForVopModel {
	
	static $_TSPEC;
	public $prodSkuId = null;
	public $barcode = null;
	public $color = null;
	public $size = null;
	public $vipSkuState = null;
	public $prodSpuId = null;
	public $imageUrls = null;
	public $systemDesImages = null;
	public $attrSaleProps = null;
	public $sizeId = null;
	public $mid = null;
	public $listUrl = null;
	public $status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'prodSkuId'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'color'
			),
			4 => array(
			'var' => 'size'
			),
			5 => array(
			'var' => 'vipSkuState'
			),
			6 => array(
			'var' => 'prodSpuId'
			),
			7 => array(
			'var' => 'imageUrls'
			),
			8 => array(
			'var' => 'systemDesImages'
			),
			9 => array(
			'var' => 'attrSaleProps'
			),
			10 => array(
			'var' => 'sizeId'
			),
			11 => array(
			'var' => 'mid'
			),
			12 => array(
			'var' => 'listUrl'
			),
			13 => array(
			'var' => 'status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prodSkuId'])){
				
				$this->prodSkuId = $vals['prodSkuId'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['vipSkuState'])){
				
				$this->vipSkuState = $vals['vipSkuState'];
			}
			
			
			if (isset($vals['prodSpuId'])){
				
				$this->prodSpuId = $vals['prodSpuId'];
			}
			
			
			if (isset($vals['imageUrls'])){
				
				$this->imageUrls = $vals['imageUrls'];
			}
			
			
			if (isset($vals['systemDesImages'])){
				
				$this->systemDesImages = $vals['systemDesImages'];
			}
			
			
			if (isset($vals['attrSaleProps'])){
				
				$this->attrSaleProps = $vals['attrSaleProps'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
			if (isset($vals['listUrl'])){
				
				$this->listUrl = $vals['listUrl'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupGetProdSkuDetailForVopModel';
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
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("vipSkuState" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipSkuState);
				
			}
			
			
			
			
			if ("prodSpuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prodSpuId);
				
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
			
			
			
			
			if ("attrSaleProps" == $schemeField){
				
				$needSkip = false;
				
				$this->attrSaleProps = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\cup\sal\vop\AttributeForVop();
						$elem2->read($input);
						
						$this->attrSaleProps[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeId);
				
			}
			
			
			
			
			if ("mid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mid);
				
			}
			
			
			
			
			if ("listUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->listUrl);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
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
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipSkuState !== null) {
			
			$xfer += $output->writeFieldBegin('vipSkuState');
			$xfer += $output->writeString($this->vipSkuState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prodSpuId !== null) {
			
			$xfer += $output->writeFieldBegin('prodSpuId');
			$xfer += $output->writeString($this->prodSpuId);
			
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
		
		
		if($this->attrSaleProps !== null) {
			
			$xfer += $output->writeFieldBegin('attrSaleProps');
			
			if (!is_array($this->attrSaleProps)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attrSaleProps as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeString($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mid !== null) {
			
			$xfer += $output->writeFieldBegin('mid');
			$xfer += $output->writeString($this->mid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->listUrl !== null) {
			
			$xfer += $output->writeFieldBegin('listUrl');
			$xfer += $output->writeString($this->listUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>