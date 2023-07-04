<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\branduser\facade\member;

class BrandUserInfoUpdateRequest {
	
	static $_TSPEC;
	public $open_id = null;
	public $brand_member_card_id = null;
	public $pre_points = null;
	public $cur_points = null;
	public $pre_level = null;
	public $cur_level = null;
	public $isv_identity = null;
	public $brand_identify = null;
	public $version = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'open_id'
			),
			2 => array(
			'var' => 'brand_member_card_id'
			),
			3 => array(
			'var' => 'pre_points'
			),
			4 => array(
			'var' => 'cur_points'
			),
			5 => array(
			'var' => 'pre_level'
			),
			6 => array(
			'var' => 'cur_level'
			),
			7 => array(
			'var' => 'isv_identity'
			),
			8 => array(
			'var' => 'brand_identify'
			),
			9 => array(
			'var' => 'version'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['open_id'])){
				
				$this->open_id = $vals['open_id'];
			}
			
			
			if (isset($vals['brand_member_card_id'])){
				
				$this->brand_member_card_id = $vals['brand_member_card_id'];
			}
			
			
			if (isset($vals['pre_points'])){
				
				$this->pre_points = $vals['pre_points'];
			}
			
			
			if (isset($vals['cur_points'])){
				
				$this->cur_points = $vals['cur_points'];
			}
			
			
			if (isset($vals['pre_level'])){
				
				$this->pre_level = $vals['pre_level'];
			}
			
			
			if (isset($vals['cur_level'])){
				
				$this->cur_level = $vals['cur_level'];
			}
			
			
			if (isset($vals['isv_identity'])){
				
				$this->isv_identity = $vals['isv_identity'];
			}
			
			
			if (isset($vals['brand_identify'])){
				
				$this->brand_identify = $vals['brand_identify'];
			}
			
			
			if (isset($vals['version'])){
				
				$this->version = $vals['version'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandUserInfoUpdateRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("open_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->open_id);
				
			}
			
			
			
			
			if ("brand_member_card_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_member_card_id);
				
			}
			
			
			
			
			if ("pre_points" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pre_points);
				
			}
			
			
			
			
			if ("cur_points" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cur_points);
				
			}
			
			
			
			
			if ("pre_level" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pre_level);
				
			}
			
			
			
			
			if ("cur_level" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cur_level);
				
			}
			
			
			
			
			if ("isv_identity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isv_identity);
				
			}
			
			
			
			
			if ("brand_identify" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_identify);
				
			}
			
			
			
			
			if ("version" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->version); 
				
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
		
		$xfer += $output->writeFieldBegin('open_id');
		$xfer += $output->writeString($this->open_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_member_card_id');
		$xfer += $output->writeString($this->brand_member_card_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pre_points !== null) {
			
			$xfer += $output->writeFieldBegin('pre_points');
			$xfer += $output->writeString($this->pre_points);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('cur_points');
		$xfer += $output->writeString($this->cur_points);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pre_level !== null) {
			
			$xfer += $output->writeFieldBegin('pre_level');
			$xfer += $output->writeString($this->pre_level);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('cur_level');
		$xfer += $output->writeString($this->cur_level);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isv_identity');
		$xfer += $output->writeString($this->isv_identity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_identify');
		$xfer += $output->writeString($this->brand_identify);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('version');
		$xfer += $output->writeI64($this->version);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>