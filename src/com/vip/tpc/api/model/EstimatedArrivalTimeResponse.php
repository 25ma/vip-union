<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class EstimatedArrivalTimeResponse {
	
	static $_TSPEC;
	public $result_code = null;
	public $result_message = null;
	public $response_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'result_code'
			),
			2 => array(
			'var' => 'result_message'
			),
			3 => array(
			'var' => 'response_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['result_code'])){
				
				$this->result_code = $vals['result_code'];
			}
			
			
			if (isset($vals['result_message'])){
				
				$this->result_message = $vals['result_message'];
			}
			
			
			if (isset($vals['response_list'])){
				
				$this->response_list = $vals['response_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EstimatedArrivalTimeResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("result_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_code);
				
			}
			
			
			
			
			if ("result_message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_message);
				
			}
			
			
			
			
			if ("response_list" == $schemeField){
				
				$needSkip = false;
				
				$this->response_list = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tpc\api\model\ArrivalTimeResponse();
						$elem1->read($input);
						
						$this->response_list[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
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
		
		$xfer += $output->writeFieldBegin('result_code');
		$xfer += $output->writeString($this->result_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('result_message');
		$xfer += $output->writeString($this->result_message);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('response_list');
		
		if (!is_array($this->response_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->response_list as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>