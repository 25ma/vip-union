<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipCouponReceiveResp {
	
	static $_TSPEC;
	public $code = null;
	public $msg = null;
	public $docList = null;
	public $couponNum = null;
	public $favTotal = null;
	public $couponField = null;
	public $buy = null;
	public $validStartTime = null;
	public $validEndTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'msg'
			),
			3 => array(
			'var' => 'docList'
			),
			4 => array(
			'var' => 'couponNum'
			),
			5 => array(
			'var' => 'favTotal'
			),
			6 => array(
			'var' => 'couponField'
			),
			7 => array(
			'var' => 'buy'
			),
			8 => array(
			'var' => 'validStartTime'
			),
			9 => array(
			'var' => 'validEndTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['docList'])){
				
				$this->docList = $vals['docList'];
			}
			
			
			if (isset($vals['couponNum'])){
				
				$this->couponNum = $vals['couponNum'];
			}
			
			
			if (isset($vals['favTotal'])){
				
				$this->favTotal = $vals['favTotal'];
			}
			
			
			if (isset($vals['couponField'])){
				
				$this->couponField = $vals['couponField'];
			}
			
			
			if (isset($vals['buy'])){
				
				$this->buy = $vals['buy'];
			}
			
			
			if (isset($vals['validStartTime'])){
				
				$this->validStartTime = $vals['validStartTime'];
			}
			
			
			if (isset($vals['validEndTime'])){
				
				$this->validEndTime = $vals['validEndTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipCouponReceiveResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("docList" == $schemeField){
				
				$needSkip = false;
				
				$this->docList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\svip\osp\service\RemindDoc();
						$elem0->read($input);
						
						$this->docList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("couponNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->couponNum); 
				
			}
			
			
			
			
			if ("favTotal" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->favTotal);
				
			}
			
			
			
			
			if ("couponField" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->couponField); 
				
			}
			
			
			
			
			if ("buy" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->buy);
				
			}
			
			
			
			
			if ("validStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->validStartTime); 
				
			}
			
			
			
			
			if ("validEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->validEndTime); 
				
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
		
		$xfer += $output->writeFieldBegin('code');
		$xfer += $output->writeString($this->code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->docList !== null) {
			
			$xfer += $output->writeFieldBegin('docList');
			
			if (!is_array($this->docList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->docList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponNum !== null) {
			
			$xfer += $output->writeFieldBegin('couponNum');
			$xfer += $output->writeI32($this->couponNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favTotal !== null) {
			
			$xfer += $output->writeFieldBegin('favTotal');
			$xfer += $output->writeDouble($this->favTotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponField !== null) {
			
			$xfer += $output->writeFieldBegin('couponField');
			$xfer += $output->writeByte($this->couponField);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buy !== null) {
			
			$xfer += $output->writeFieldBegin('buy');
			$xfer += $output->writeDouble($this->buy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->validStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('validStartTime');
			$xfer += $output->writeI64($this->validStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->validEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('validEndTime');
			$xfer += $output->writeI64($this->validEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>