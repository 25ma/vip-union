<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcOrderGoodsVo {
	
	static $_TSPEC;
	public $goodFullId = null;
	public $goodsName = null;
	public $brandCnName = null;
	public $goodsImage = null;
	public $catIdThree = null;
	public $catNameThree = null;
	public $sizes = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12001 => array(
			'var' => 'goodFullId'
			),
			12002 => array(
			'var' => 'goodsName'
			),
			12003 => array(
			'var' => 'brandCnName'
			),
			12004 => array(
			'var' => 'goodsImage'
			),
			12005 => array(
			'var' => 'catIdThree'
			),
			12006 => array(
			'var' => 'catNameThree'
			),
			12007 => array(
			'var' => 'sizes'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodFullId'])){
				
				$this->goodFullId = $vals['goodFullId'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['brandCnName'])){
				
				$this->brandCnName = $vals['brandCnName'];
			}
			
			
			if (isset($vals['goodsImage'])){
				
				$this->goodsImage = $vals['goodsImage'];
			}
			
			
			if (isset($vals['catIdThree'])){
				
				$this->catIdThree = $vals['catIdThree'];
			}
			
			
			if (isset($vals['catNameThree'])){
				
				$this->catNameThree = $vals['catNameThree'];
			}
			
			
			if (isset($vals['sizes'])){
				
				$this->sizes = $vals['sizes'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcOrderGoodsVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodFullId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodFullId);
				
			}
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("brandCnName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCnName);
				
			}
			
			
			
			
			if ("goodsImage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsImage);
				
			}
			
			
			
			
			if ("catIdThree" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->catIdThree);
				
			}
			
			
			
			
			if ("catNameThree" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->catNameThree);
				
			}
			
			
			
			
			if ("sizes" == $schemeField){
				
				$needSkip = false;
				
				$this->sizes = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\wpc\ospservice\vop\WpcOrderSizeVo();
						$elem1->read($input);
						
						$this->sizes[$_size1++] = $elem1;
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
		
		if($this->goodFullId !== null) {
			
			$xfer += $output->writeFieldBegin('goodFullId');
			$xfer += $output->writeString($this->goodFullId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandCnName !== null) {
			
			$xfer += $output->writeFieldBegin('brandCnName');
			$xfer += $output->writeString($this->brandCnName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsImage !== null) {
			
			$xfer += $output->writeFieldBegin('goodsImage');
			$xfer += $output->writeString($this->goodsImage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->catIdThree !== null) {
			
			$xfer += $output->writeFieldBegin('catIdThree');
			$xfer += $output->writeString($this->catIdThree);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->catNameThree !== null) {
			
			$xfer += $output->writeFieldBegin('catNameThree');
			$xfer += $output->writeString($this->catNameThree);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizes !== null) {
			
			$xfer += $output->writeFieldBegin('sizes');
			
			if (!is_array($this->sizes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sizes as $iter0){
				
				
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