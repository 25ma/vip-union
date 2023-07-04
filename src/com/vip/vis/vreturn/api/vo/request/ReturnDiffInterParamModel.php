<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\request;

class ReturnDiffInterParamModel {
	
	static $_TSPEC;
	public $request_time = null;
	public $from_source = null;
	public $vendor_id = null;
	public $return_sn = null;
	public $transport_no = null;
	public $email = null;
	public $contractor = null;
	public $telephone = null;
	public $follow_up_name = null;
	public $sign_sheet_img = null;
	public $trans_id = null;
	public $op_type = null;
	public $return_details = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request_time'
			),
			2 => array(
			'var' => 'from_source'
			),
			3 => array(
			'var' => 'vendor_id'
			),
			4 => array(
			'var' => 'return_sn'
			),
			5 => array(
			'var' => 'transport_no'
			),
			6 => array(
			'var' => 'email'
			),
			7 => array(
			'var' => 'contractor'
			),
			8 => array(
			'var' => 'telephone'
			),
			9 => array(
			'var' => 'follow_up_name'
			),
			10 => array(
			'var' => 'sign_sheet_img'
			),
			11 => array(
			'var' => 'trans_id'
			),
			12 => array(
			'var' => 'op_type'
			),
			13 => array(
			'var' => 'return_details'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request_time'])){
				
				$this->request_time = $vals['request_time'];
			}
			
			
			if (isset($vals['from_source'])){
				
				$this->from_source = $vals['from_source'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['email'])){
				
				$this->email = $vals['email'];
			}
			
			
			if (isset($vals['contractor'])){
				
				$this->contractor = $vals['contractor'];
			}
			
			
			if (isset($vals['telephone'])){
				
				$this->telephone = $vals['telephone'];
			}
			
			
			if (isset($vals['follow_up_name'])){
				
				$this->follow_up_name = $vals['follow_up_name'];
			}
			
			
			if (isset($vals['sign_sheet_img'])){
				
				$this->sign_sheet_img = $vals['sign_sheet_img'];
			}
			
			
			if (isset($vals['trans_id'])){
				
				$this->trans_id = $vals['trans_id'];
			}
			
			
			if (isset($vals['op_type'])){
				
				$this->op_type = $vals['op_type'];
			}
			
			
			if (isset($vals['return_details'])){
				
				$this->return_details = $vals['return_details'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDiffInterParamModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("request_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->request_time);
				
			}
			
			
			
			
			if ("from_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->from_source);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_sn);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->email);
				
			}
			
			
			
			
			if ("contractor" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contractor);
				
			}
			
			
			
			
			if ("telephone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->telephone);
				
			}
			
			
			
			
			if ("follow_up_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->follow_up_name);
				
			}
			
			
			
			
			if ("sign_sheet_img" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sign_sheet_img);
				
			}
			
			
			
			
			if ("trans_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trans_id);
				
			}
			
			
			
			
			if ("op_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->op_type); 
				
			}
			
			
			
			
			if ("return_details" == $schemeField){
				
				$needSkip = false;
				
				$this->return_details = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\vreturn\api\vo\request\ReturnDiffInterDetailParamModel();
						$elem0->read($input);
						
						$this->return_details[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->request_time !== null) {
			
			$xfer += $output->writeFieldBegin('request_time');
			$xfer += $output->writeString($this->request_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('from_source');
		$xfer += $output->writeString($this->from_source);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_sn');
		$xfer += $output->writeString($this->return_sn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('email');
		$xfer += $output->writeString($this->email);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contractor');
		$xfer += $output->writeString($this->contractor);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('telephone');
		$xfer += $output->writeString($this->telephone);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('follow_up_name');
		$xfer += $output->writeString($this->follow_up_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sign_sheet_img');
		$xfer += $output->writeString($this->sign_sheet_img);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trans_id');
		$xfer += $output->writeString($this->trans_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('op_type');
		$xfer += $output->writeI32($this->op_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_details');
		
		if (!is_array($this->return_details)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->return_details as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>