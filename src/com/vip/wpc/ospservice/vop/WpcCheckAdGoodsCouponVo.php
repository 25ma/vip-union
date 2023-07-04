<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcCheckAdGoodsCouponVo {
	
	static $_TSPEC;
	public $adId = null;
	public $goodFullId = null;
	public $respCuponInfo = null;
	public $checkResult = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12001 => array(
			'var' => 'adId'
			),
			12002 => array(
			'var' => 'goodFullId'
			),
			12003 => array(
			'var' => 'respCuponInfo'
			),
			12004 => array(
			'var' => 'checkResult'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['adId'])){
				
				$this->adId = $vals['adId'];
			}
			
			
			if (isset($vals['goodFullId'])){
				
				$this->goodFullId = $vals['goodFullId'];
			}
			
			
			if (isset($vals['respCuponInfo'])){
				
				$this->respCuponInfo = $vals['respCuponInfo'];
			}
			
			
			if (isset($vals['checkResult'])){
				
				$this->checkResult = $vals['checkResult'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcCheckAdGoodsCouponVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("adId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->adId);
				
			}
			
			
			
			
			if ("goodFullId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodFullId);
				
			}
			
			
			
			
			if ("respCuponInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->respCuponInfo);
				
			}
			
			
			
			
			if ("checkResult" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->checkResult);
				
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
		
		if($this->adId !== null) {
			
			$xfer += $output->writeFieldBegin('adId');
			$xfer += $output->writeString($this->adId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodFullId !== null) {
			
			$xfer += $output->writeFieldBegin('goodFullId');
			$xfer += $output->writeString($this->goodFullId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->respCuponInfo !== null) {
			
			$xfer += $output->writeFieldBegin('respCuponInfo');
			$xfer += $output->writeString($this->respCuponInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->checkResult !== null) {
			
			$xfer += $output->writeFieldBegin('checkResult');
			$xfer += $output->writeBool($this->checkResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>