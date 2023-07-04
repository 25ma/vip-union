<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\response;

class ReturnDiffInterDetailModel {
	
	static $_TSPEC;
	public $trans_id = null;
	public $return_no = null;
	public $result_msg = null;
	public $err_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'trans_id'
			),
			2 => array(
			'var' => 'return_no'
			),
			3 => array(
			'var' => 'result_msg'
			),
			4 => array(
			'var' => 'err_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['trans_id'])){
				
				$this->trans_id = $vals['trans_id'];
			}
			
			
			if (isset($vals['return_no'])){
				
				$this->return_no = $vals['return_no'];
			}
			
			
			if (isset($vals['result_msg'])){
				
				$this->result_msg = $vals['result_msg'];
			}
			
			
			if (isset($vals['err_msg'])){
				
				$this->err_msg = $vals['err_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDiffInterDetailModel';
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
			
			
			
			
			if ("return_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_no);
				
			}
			
			
			
			
			if ("result_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_msg);
				
			}
			
			
			
			
			if ("err_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->err_msg);
				
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
		
		
		if($this->return_no !== null) {
			
			$xfer += $output->writeFieldBegin('return_no');
			$xfer += $output->writeString($this->return_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result_msg !== null) {
			
			$xfer += $output->writeFieldBegin('result_msg');
			$xfer += $output->writeString($this->result_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->err_msg !== null) {
			
			$xfer += $output->writeFieldBegin('err_msg');
			$xfer += $output->writeString($this->err_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>