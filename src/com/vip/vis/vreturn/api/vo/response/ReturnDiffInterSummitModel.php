<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\response;

class ReturnDiffInterSummitModel {
	
	static $_TSPEC;
	public $trans_id = null;
	public $rv_difference_no = null;
	public $trans_detail_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'trans_id'
			),
			2 => array(
			'var' => 'rv_difference_no'
			),
			3 => array(
			'var' => 'trans_detail_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['trans_id'])){
				
				$this->trans_id = $vals['trans_id'];
			}
			
			
			if (isset($vals['rv_difference_no'])){
				
				$this->rv_difference_no = $vals['rv_difference_no'];
			}
			
			
			if (isset($vals['trans_detail_id'])){
				
				$this->trans_detail_id = $vals['trans_detail_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDiffInterSummitModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("trans_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trans_id);
				
			}
			
			
			
			
			if ("rv_difference_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rv_difference_no);
				
			}
			
			
			
			
			if ("trans_detail_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trans_detail_id);
				
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
		
		if($this->trans_id !== null) {
			
			$xfer += $output->writeFieldBegin('trans_id');
			$xfer += $output->writeString($this->trans_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rv_difference_no !== null) {
			
			$xfer += $output->writeFieldBegin('rv_difference_no');
			$xfer += $output->writeString($this->rv_difference_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trans_detail_id !== null) {
			
			$xfer += $output->writeFieldBegin('trans_detail_id');
			$xfer += $output->writeString($this->trans_detail_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>