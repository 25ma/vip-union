<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipTakePrizeModel {
	
	static $_TSPEC;
	public $actId = null;
	public $actName = null;
	public $actCode = null;
	public $days = null;
	public $beforeSvipStatus = null;
	public $svipType = null;
	public $beforeTime = null;
	public $expireTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'actId'
			),
			1 => array(
			'var' => 'actName'
			),
			2 => array(
			'var' => 'actCode'
			),
			3 => array(
			'var' => 'days'
			),
			4 => array(
			'var' => 'beforeSvipStatus'
			),
			5 => array(
			'var' => 'svipType'
			),
			6 => array(
			'var' => 'beforeTime'
			),
			7 => array(
			'var' => 'expireTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actId'])){
				
				$this->actId = $vals['actId'];
			}
			
			
			if (isset($vals['actName'])){
				
				$this->actName = $vals['actName'];
			}
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['days'])){
				
				$this->days = $vals['days'];
			}
			
			
			if (isset($vals['beforeSvipStatus'])){
				
				$this->beforeSvipStatus = $vals['beforeSvipStatus'];
			}
			
			
			if (isset($vals['svipType'])){
				
				$this->svipType = $vals['svipType'];
			}
			
			
			if (isset($vals['beforeTime'])){
				
				$this->beforeTime = $vals['beforeTime'];
			}
			
			
			if (isset($vals['expireTime'])){
				
				$this->expireTime = $vals['expireTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipTakePrizeModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("actId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->actId); 
				
			}
			
			
			
			
			if ("actName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actName);
				
			}
			
			
			
			
			if ("actCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actCode);
				
			}
			
			
			
			
			if ("days" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->days); 
				
			}
			
			
			
			
			if ("beforeSvipStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->beforeSvipStatus); 
				
			}
			
			
			
			
			if ("svipType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->svipType); 
				
			}
			
			
			
			
			if ("beforeTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->beforeTime);
				
			}
			
			
			
			
			if ("expireTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expireTime);
				
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
		
		if($this->actId !== null) {
			
			$xfer += $output->writeFieldBegin('actId');
			$xfer += $output->writeI64($this->actId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actName !== null) {
			
			$xfer += $output->writeFieldBegin('actName');
			$xfer += $output->writeString($this->actName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('days');
		$xfer += $output->writeI32($this->days);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('beforeSvipStatus');
		$xfer += $output->writeI32($this->beforeSvipStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('svipType');
		$xfer += $output->writeI32($this->svipType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->beforeTime !== null) {
			
			$xfer += $output->writeFieldBegin('beforeTime');
			$xfer += $output->writeI64($this->beforeTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expireTime !== null) {
			
			$xfer += $output->writeFieldBegin('expireTime');
			$xfer += $output->writeI64($this->expireTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>