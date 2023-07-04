<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class ReceiveExpressBillReviewResultRequest {
	
	static $_TSPEC;
	public $carrier_code = null;
	public $book_id = null;
	public $result = null;
	public $result_message = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_code'
			),
			2 => array(
			'var' => 'book_id'
			),
			3 => array(
			'var' => 'result'
			),
			4 => array(
			'var' => 'result_message'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['book_id'])){
				
				$this->book_id = $vals['book_id'];
			}
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['result_message'])){
				
				$this->result_message = $vals['result_message'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReceiveExpressBillReviewResultRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("book_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->book_id);
				
			}
			
			
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->result);
				
			}
			
			
			
			
			if ("result_message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_message);
				
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
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('book_id');
		$xfer += $output->writeString($this->book_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('result');
		$xfer += $output->writeBool($this->result);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->result_message !== null) {
			
			$xfer += $output->writeFieldBegin('result_message');
			$xfer += $output->writeString($this->result_message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>