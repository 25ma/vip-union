<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class ContinuousCouponModel {
	
	static $_TSPEC;
	public $couponSnList = null;
	public $unBindCouponList = null;
	public $cycles = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponSnList'
			),
			2 => array(
			'var' => 'unBindCouponList'
			),
			3 => array(
			'var' => 'cycles'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponSnList'])){
				
				$this->couponSnList = $vals['couponSnList'];
			}
			
			
			if (isset($vals['unBindCouponList'])){
				
				$this->unBindCouponList = $vals['unBindCouponList'];
			}
			
			
			if (isset($vals['cycles'])){
				
				$this->cycles = $vals['cycles'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ContinuousCouponModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("couponSnList" == $schemeField){
				
				$needSkip = false;
				
				$this->couponSnList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->couponSnList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("unBindCouponList" == $schemeField){
				
				$needSkip = false;
				
				$this->unBindCouponList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\svip\osp\service\MonthCardCusCouponModel();
						$elem1->read($input);
						
						$this->unBindCouponList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("cycles" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cycles); 
				
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
		
		if($this->couponSnList !== null) {
			
			$xfer += $output->writeFieldBegin('couponSnList');
			
			if (!is_array($this->couponSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->couponSnList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unBindCouponList !== null) {
			
			$xfer += $output->writeFieldBegin('unBindCouponList');
			
			if (!is_array($this->unBindCouponList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->unBindCouponList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cycles !== null) {
			
			$xfer += $output->writeFieldBegin('cycles');
			$xfer += $output->writeI32($this->cycles);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>