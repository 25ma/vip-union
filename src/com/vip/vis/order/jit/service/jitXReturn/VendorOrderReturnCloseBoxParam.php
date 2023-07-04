<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\jitXReturn;

class VendorOrderReturnCloseBoxParam {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $vendor_id = null;
	public $box_no = null;
	public $unit = null;
	public $box_state = null;
	public $close_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'vendor_id'
			),
			3 => array(
			'var' => 'box_no'
			),
			4 => array(
			'var' => 'unit'
			),
			5 => array(
			'var' => 'box_state'
			),
			6 => array(
			'var' => 'close_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['box_state'])){
				
				$this->box_state = $vals['box_state'];
			}
			
			
			if (isset($vals['close_time'])){
				
				$this->close_time = $vals['close_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorOrderReturnCloseBoxParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_no);
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->unit); 
				
			}
			
			
			
			
			if ("box_state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_state);
				
			}
			
			
			
			
			if ("close_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->close_time);
				
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
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('box_no');
		$xfer += $output->writeString($this->box_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('unit');
		$xfer += $output->writeI32($this->unit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('box_state');
		$xfer += $output->writeString($this->box_state);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('close_time');
		$xfer += $output->writeString($this->close_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>