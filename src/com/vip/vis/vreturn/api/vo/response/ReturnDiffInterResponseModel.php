<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\response;

class ReturnDiffInterResponseModel {
	
	static $_TSPEC;
	public $status = null;
	public $msg = null;
	public $detai_list = null;
	public $rv_difference_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'status'
			),
			2 => array(
			'var' => 'msg'
			),
			3 => array(
			'var' => 'detai_list'
			),
			4 => array(
			'var' => 'rv_difference_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['detai_list'])){
				
				$this->detai_list = $vals['detai_list'];
			}
			
			
			if (isset($vals['rv_difference_list'])){
				
				$this->rv_difference_list = $vals['rv_difference_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDiffInterResponseModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("detai_list" == $schemeField){
				
				$needSkip = false;
				
				$this->detai_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vis\vreturn\api\vo\response\ReturnDiffInterDetailModel();
						$elem1->read($input);
						
						$this->detai_list[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("rv_difference_list" == $schemeField){
				
				$needSkip = false;
				
				$this->rv_difference_list = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\vis\vreturn\api\vo\response\ReturnDiffInterSummitModel();
						$elem2->read($input);
						
						$this->rv_difference_list[$_size2++] = $elem2;
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
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detai_list !== null) {
			
			$xfer += $output->writeFieldBegin('detai_list');
			
			if (!is_array($this->detai_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->detai_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rv_difference_list !== null) {
			
			$xfer += $output->writeFieldBegin('rv_difference_list');
			
			if (!is_array($this->rv_difference_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->rv_difference_list as $iter0){
				
				
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