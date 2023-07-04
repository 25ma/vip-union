<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class TakeSvipRightsPrizeReq {
	
	static $_TSPEC;
	public $actCode = null;
	public $rightsCode = null;
	public $client = null;
	public $phone = null;
	public $validCode = null;
	public $vipTicket = null;
	public $vipData = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'rightsCode'
			),
			3 => array(
			'var' => 'client'
			),
			4 => array(
			'var' => 'phone'
			),
			5 => array(
			'var' => 'validCode'
			),
			6 => array(
			'var' => 'vipTicket'
			),
			7 => array(
			'var' => 'vipData'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['rightsCode'])){
				
				$this->rightsCode = $vals['rightsCode'];
			}
			
			
			if (isset($vals['client'])){
				
				$this->client = $vals['client'];
			}
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
			if (isset($vals['validCode'])){
				
				$this->validCode = $vals['validCode'];
			}
			
			
			if (isset($vals['vipTicket'])){
				
				$this->vipTicket = $vals['vipTicket'];
			}
			
			
			if (isset($vals['vipData'])){
				
				$this->vipData = $vals['vipData'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TakeSvipRightsPrizeReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("actCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actCode);
				
			}
			
			
			
			
			if ("rightsCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rightsCode);
				
			}
			
			
			
			
			if ("client" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->client);
				
			}
			
			
			
			
			if ("phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone);
				
			}
			
			
			
			
			if ("validCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->validCode);
				
			}
			
			
			
			
			if ("vipTicket" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipTicket);
				
			}
			
			
			
			
			if ("vipData" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipData);
				
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
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rightsCode !== null) {
			
			$xfer += $output->writeFieldBegin('rightsCode');
			$xfer += $output->writeString($this->rightsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->client !== null) {
			
			$xfer += $output->writeFieldBegin('client');
			$xfer += $output->writeString($this->client);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phone !== null) {
			
			$xfer += $output->writeFieldBegin('phone');
			$xfer += $output->writeString($this->phone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->validCode !== null) {
			
			$xfer += $output->writeFieldBegin('validCode');
			$xfer += $output->writeString($this->validCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipTicket !== null) {
			
			$xfer += $output->writeFieldBegin('vipTicket');
			$xfer += $output->writeString($this->vipTicket);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipData !== null) {
			
			$xfer += $output->writeFieldBegin('vipData');
			$xfer += $output->writeString($this->vipData);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>