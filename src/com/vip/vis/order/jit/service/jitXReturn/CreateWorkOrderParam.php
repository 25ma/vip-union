<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\jitXReturn;

class CreateWorkOrderParam {
	
	static $_TSPEC;
	public $orderSn = null;
	public $backSn = null;
	public $sizeSn = null;
	public $abnormalTypeCode = null;
	public $problemDesc = null;
	public $imageList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'backSn'
			),
			3 => array(
			'var' => 'sizeSn'
			),
			4 => array(
			'var' => 'abnormalTypeCode'
			),
			5 => array(
			'var' => 'problemDesc'
			),
			6 => array(
			'var' => 'imageList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['backSn'])){
				
				$this->backSn = $vals['backSn'];
			}
			
			
			if (isset($vals['sizeSn'])){
				
				$this->sizeSn = $vals['sizeSn'];
			}
			
			
			if (isset($vals['abnormalTypeCode'])){
				
				$this->abnormalTypeCode = $vals['abnormalTypeCode'];
			}
			
			
			if (isset($vals['problemDesc'])){
				
				$this->problemDesc = $vals['problemDesc'];
			}
			
			
			if (isset($vals['imageList'])){
				
				$this->imageList = $vals['imageList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateWorkOrderParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("backSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backSn);
				
			}
			
			
			
			
			if ("sizeSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeSn);
				
			}
			
			
			
			
			if ("abnormalTypeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->abnormalTypeCode);
				
			}
			
			
			
			
			if ("problemDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->problemDesc);
				
			}
			
			
			
			
			if ("imageList" == $schemeField){
				
				$needSkip = false;
				
				$this->imageList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\repairorder\service\VendorNoteImage();
						$elem0->read($input);
						
						$this->imageList[$_size0++] = $elem0;
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backSn !== null) {
			
			$xfer += $output->writeFieldBegin('backSn');
			$xfer += $output->writeString($this->backSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeSn !== null) {
			
			$xfer += $output->writeFieldBegin('sizeSn');
			$xfer += $output->writeString($this->sizeSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->abnormalTypeCode !== null) {
			
			$xfer += $output->writeFieldBegin('abnormalTypeCode');
			$xfer += $output->writeString($this->abnormalTypeCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->problemDesc !== null) {
			
			$xfer += $output->writeFieldBegin('problemDesc');
			$xfer += $output->writeString($this->problemDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageList !== null) {
			
			$xfer += $output->writeFieldBegin('imageList');
			
			if (!is_array($this->imageList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->imageList as $iter0){
				
				
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