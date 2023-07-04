<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class BrandDetailModel {
	
	static $_TSPEC;
	public $brandSn = null;
	public $cnName = null;
	public $enName = null;
	public $showName = null;
	public $logo = null;
	public $slogon = null;
	public $atmosphereUrl = null;
	public $content = null;
	public $brandStoryImage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandSn'
			),
			2 => array(
			'var' => 'cnName'
			),
			3 => array(
			'var' => 'enName'
			),
			4 => array(
			'var' => 'showName'
			),
			5 => array(
			'var' => 'logo'
			),
			6 => array(
			'var' => 'slogon'
			),
			7 => array(
			'var' => 'atmosphereUrl'
			),
			8 => array(
			'var' => 'content'
			),
			9 => array(
			'var' => 'brandStoryImage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['cnName'])){
				
				$this->cnName = $vals['cnName'];
			}
			
			
			if (isset($vals['enName'])){
				
				$this->enName = $vals['enName'];
			}
			
			
			if (isset($vals['showName'])){
				
				$this->showName = $vals['showName'];
			}
			
			
			if (isset($vals['logo'])){
				
				$this->logo = $vals['logo'];
			}
			
			
			if (isset($vals['slogon'])){
				
				$this->slogon = $vals['slogon'];
			}
			
			
			if (isset($vals['atmosphereUrl'])){
				
				$this->atmosphereUrl = $vals['atmosphereUrl'];
			}
			
			
			if (isset($vals['content'])){
				
				$this->content = $vals['content'];
			}
			
			
			if (isset($vals['brandStoryImage'])){
				
				$this->brandStoryImage = $vals['brandStoryImage'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandDetailModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("cnName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cnName);
				
			}
			
			
			
			
			if ("enName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enName);
				
			}
			
			
			
			
			if ("showName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->showName);
				
			}
			
			
			
			
			if ("logo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logo);
				
			}
			
			
			
			
			if ("slogon" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->slogon);
				
			}
			
			
			
			
			if ("atmosphereUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->atmosphereUrl);
				
			}
			
			
			
			
			if ("content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->content);
				
			}
			
			
			
			
			if ("brandStoryImage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandStoryImage);
				
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
		
		if($this->brandSn !== null) {
			
			$xfer += $output->writeFieldBegin('brandSn');
			$xfer += $output->writeString($this->brandSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cnName !== null) {
			
			$xfer += $output->writeFieldBegin('cnName');
			$xfer += $output->writeString($this->cnName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enName !== null) {
			
			$xfer += $output->writeFieldBegin('enName');
			$xfer += $output->writeString($this->enName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->showName !== null) {
			
			$xfer += $output->writeFieldBegin('showName');
			$xfer += $output->writeString($this->showName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->logo !== null) {
			
			$xfer += $output->writeFieldBegin('logo');
			$xfer += $output->writeString($this->logo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->slogon !== null) {
			
			$xfer += $output->writeFieldBegin('slogon');
			$xfer += $output->writeString($this->slogon);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->atmosphereUrl !== null) {
			
			$xfer += $output->writeFieldBegin('atmosphereUrl');
			$xfer += $output->writeString($this->atmosphereUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->content !== null) {
			
			$xfer += $output->writeFieldBegin('content');
			$xfer += $output->writeString($this->content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandStoryImage !== null) {
			
			$xfer += $output->writeFieldBegin('brandStoryImage');
			$xfer += $output->writeString($this->brandStoryImage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>