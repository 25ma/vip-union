<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcGoodsSizePriceChangeVo {
	
	static $_TSPEC;
	public $goodsId = null;
	public $sizeId = null;
	public $beforePrice = null;
	public $nowPrice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12002 => array(
			'var' => 'goodsId'
			),
			12003 => array(
			'var' => 'sizeId'
			),
			12004 => array(
			'var' => 'beforePrice'
			),
			12005 => array(
			'var' => 'nowPrice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['beforePrice'])){
				
				$this->beforePrice = $vals['beforePrice'];
			}
			
			
			if (isset($vals['nowPrice'])){
				
				$this->nowPrice = $vals['nowPrice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcGoodsSizePriceChangeVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsId);
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeId);
				
			}
			
			
			
			
			if ("beforePrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->beforePrice);
				
			}
			
			
			
			
			if ("nowPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->nowPrice);
				
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
		
		if($this->goodsId !== null) {
			
			$xfer += $output->writeFieldBegin('goodsId');
			$xfer += $output->writeString($this->goodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeString($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->beforePrice !== null) {
			
			$xfer += $output->writeFieldBegin('beforePrice');
			$xfer += $output->writeString($this->beforePrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->nowPrice !== null) {
			
			$xfer += $output->writeFieldBegin('nowPrice');
			$xfer += $output->writeString($this->nowPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>