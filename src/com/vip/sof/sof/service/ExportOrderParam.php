<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ExportOrderParam {
	
	static $_TSPEC;
	public $orderModule = null;
	public $goodsModule = null;
	public $appName = null;
	public $transportModule = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderModule'
			),
			2 => array(
			'var' => 'goodsModule'
			),
			3 => array(
			'var' => 'appName'
			),
			4 => array(
			'var' => 'transportModule'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderModule'])){
				
				$this->orderModule = $vals['orderModule'];
			}
			
			
			if (isset($vals['goodsModule'])){
				
				$this->goodsModule = $vals['goodsModule'];
			}
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['transportModule'])){
				
				$this->transportModule = $vals['transportModule'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExportOrderParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderModule" == $schemeField){
				
				$needSkip = false;
				
				$this->orderModule = new \com\vip\sof\sof\service\OrderModule();
				$this->orderModule->read($input);
				
			}
			
			
			
			
			if ("goodsModule" == $schemeField){
				
				$needSkip = false;
				
				$this->goodsModule = new \com\vip\sof\sof\service\GoodsModule();
				$this->goodsModule->read($input);
				
			}
			
			
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("transportModule" == $schemeField){
				
				$needSkip = false;
				
				$this->transportModule = new \com\vip\sof\sof\service\TransportModule();
				$this->transportModule->read($input);
				
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
		
		if($this->orderModule !== null) {
			
			$xfer += $output->writeFieldBegin('orderModule');
			
			if (!is_object($this->orderModule)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->orderModule->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsModule !== null) {
			
			$xfer += $output->writeFieldBegin('goodsModule');
			
			if (!is_object($this->goodsModule)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->goodsModule->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appName');
		$xfer += $output->writeString($this->appName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transportModule !== null) {
			
			$xfer += $output->writeFieldBegin('transportModule');
			
			if (!is_object($this->transportModule)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->transportModule->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>