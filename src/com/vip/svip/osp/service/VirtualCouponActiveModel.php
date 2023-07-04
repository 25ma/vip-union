<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class VirtualCouponActiveModel {
	
	static $_TSPEC;
	public $activeBeginTime = null;
	public $activeEndTime = null;
	public $bindCouponRespModelList = null;
	public $unBindCouponRespModelList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'activeBeginTime'
			),
			2 => array(
			'var' => 'activeEndTime'
			),
			3 => array(
			'var' => 'bindCouponRespModelList'
			),
			4 => array(
			'var' => 'unBindCouponRespModelList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['activeBeginTime'])){
				
				$this->activeBeginTime = $vals['activeBeginTime'];
			}
			
			
			if (isset($vals['activeEndTime'])){
				
				$this->activeEndTime = $vals['activeEndTime'];
			}
			
			
			if (isset($vals['bindCouponRespModelList'])){
				
				$this->bindCouponRespModelList = $vals['bindCouponRespModelList'];
			}
			
			
			if (isset($vals['unBindCouponRespModelList'])){
				
				$this->unBindCouponRespModelList = $vals['unBindCouponRespModelList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VirtualCouponActiveModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("activeBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activeBeginTime); 
				
			}
			
			
			
			
			if ("activeEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activeEndTime); 
				
			}
			
			
			
			
			if ("bindCouponRespModelList" == $schemeField){
				
				$needSkip = false;
				
				$this->bindCouponRespModelList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\svip\osp\service\BindCouponRespModel();
						$elem0->read($input);
						
						$this->bindCouponRespModelList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("unBindCouponRespModelList" == $schemeField){
				
				$needSkip = false;
				
				$this->unBindCouponRespModelList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\svip\osp\service\UnBindCouponRespModel();
						$elem1->read($input);
						
						$this->unBindCouponRespModelList[$_size1++] = $elem1;
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
		
		if($this->activeBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('activeBeginTime');
			$xfer += $output->writeI64($this->activeBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('activeEndTime');
			$xfer += $output->writeI64($this->activeEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bindCouponRespModelList !== null) {
			
			$xfer += $output->writeFieldBegin('bindCouponRespModelList');
			
			if (!is_array($this->bindCouponRespModelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->bindCouponRespModelList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unBindCouponRespModelList !== null) {
			
			$xfer += $output->writeFieldBegin('unBindCouponRespModelList');
			
			if (!is_array($this->unBindCouponRespModelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->unBindCouponRespModelList as $iter0){
				
				
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