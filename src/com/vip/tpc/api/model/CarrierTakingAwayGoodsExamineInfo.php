<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class CarrierTakingAwayGoodsExamineInfo {
	
	static $_TSPEC;
	public $id_type = null;
	public $sn_code = null;
	public $img_content = null;
	public $img_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id_type'
			),
			2 => array(
			'var' => 'sn_code'
			),
			3 => array(
			'var' => 'img_content'
			),
			4 => array(
			'var' => 'img_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id_type'])){
				
				$this->id_type = $vals['id_type'];
			}
			
			
			if (isset($vals['sn_code'])){
				
				$this->sn_code = $vals['sn_code'];
			}
			
			
			if (isset($vals['img_content'])){
				
				$this->img_content = $vals['img_content'];
			}
			
			
			if (isset($vals['img_id'])){
				
				$this->img_id = $vals['img_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CarrierTakingAwayGoodsExamineInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->id_type);
				
			}
			
			
			
			
			if ("sn_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn_code);
				
			}
			
			
			
			
			if ("img_content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->img_content);
				
			}
			
			
			
			
			if ("img_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->img_id);
				
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
		
		if($this->id_type !== null) {
			
			$xfer += $output->writeFieldBegin('id_type');
			$xfer += $output->writeString($this->id_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn_code !== null) {
			
			$xfer += $output->writeFieldBegin('sn_code');
			$xfer += $output->writeString($this->sn_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('img_content');
		$xfer += $output->writeString($this->img_content);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->img_id !== null) {
			
			$xfer += $output->writeFieldBegin('img_id');
			$xfer += $output->writeString($this->img_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>