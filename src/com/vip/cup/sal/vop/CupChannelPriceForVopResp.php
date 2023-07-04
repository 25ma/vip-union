<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\cup\sal\vop;

class CupChannelPriceForVopResp {
	
	static $_TSPEC;
	public $reqModel = null;
	public $priceModel = null;
	public $retMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			2 => array(
			'var' => 'priceModel'
			),
			3 => array(
			'var' => 'retMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
			if (isset($vals['priceModel'])){
				
				$this->priceModel = $vals['priceModel'];
			}
			
			
			if (isset($vals['retMsg'])){
				
				$this->retMsg = $vals['retMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CupChannelPriceForVopResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("reqModel" == $schemeField){
				
				$needSkip = false;
				
				$this->reqModel = new \com\vip\cup\sal\vop\CupChannelPriceReqForVopModel();
				$this->reqModel->read($input);
				
			}
			
			
			
			
			if ("priceModel" == $schemeField){
				
				$needSkip = false;
				
				$this->priceModel = new \com\vip\cup\sal\vop\CupChannelPriceForVopModel();
				$this->priceModel->read($input);
				
			}
			
			
			
			
			if ("retMsg" == $schemeField){
				
				$needSkip = false;
				
				$this->retMsg = new \com\vip\cup\sal\vop\BaseForVopResponse();
				$this->retMsg->read($input);
				
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
		
		if($this->reqModel !== null) {
			
			$xfer += $output->writeFieldBegin('reqModel');
			
			if (!is_object($this->reqModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->reqModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceModel !== null) {
			
			$xfer += $output->writeFieldBegin('priceModel');
			
			if (!is_object($this->priceModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->priceModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retMsg !== null) {
			
			$xfer += $output->writeFieldBegin('retMsg');
			
			if (!is_object($this->retMsg)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->retMsg->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>