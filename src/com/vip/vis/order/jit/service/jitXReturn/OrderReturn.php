<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\jitXReturn;

class OrderReturn {
	
	static $_TSPEC;
	public $id = null;
	public $back_sn = null;
	public $order_sn = null;
	public $cmd_type = null;
	public $update_date = null;
	public $transport_no = null;
	public $carrier_code = null;
	public $carrier_name = null;
	public $transport_remark = null;
	public $order_return_goods = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'back_sn'
			),
			3 => array(
			'var' => 'order_sn'
			),
			4 => array(
			'var' => 'cmd_type'
			),
			5 => array(
			'var' => 'update_date'
			),
			6 => array(
			'var' => 'transport_no'
			),
			7 => array(
			'var' => 'carrier_code'
			),
			8 => array(
			'var' => 'carrier_name'
			),
			9 => array(
			'var' => 'transport_remark'
			),
			10 => array(
			'var' => 'order_return_goods'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['back_sn'])){
				
				$this->back_sn = $vals['back_sn'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['cmd_type'])){
				
				$this->cmd_type = $vals['cmd_type'];
			}
			
			
			if (isset($vals['update_date'])){
				
				$this->update_date = $vals['update_date'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['transport_remark'])){
				
				$this->transport_remark = $vals['transport_remark'];
			}
			
			
			if (isset($vals['order_return_goods'])){
				
				$this->order_return_goods = $vals['order_return_goods'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderReturn';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("back_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->back_sn);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("cmd_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cmd_type);
				
			}
			
			
			
			
			if ("update_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_date);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
			}
			
			
			
			
			if ("transport_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_remark);
				
			}
			
			
			
			
			if ("order_return_goods" == $schemeField){
				
				$needSkip = false;
				
				$this->order_return_goods = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\order\jit\service\jitXReturn\OrderReturnGoods();
						$elem0->read($input);
						
						$this->order_return_goods[$_size0++] = $elem0;
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->back_sn !== null) {
			
			$xfer += $output->writeFieldBegin('back_sn');
			$xfer += $output->writeString($this->back_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cmd_type !== null) {
			
			$xfer += $output->writeFieldBegin('cmd_type');
			$xfer += $output->writeString($this->cmd_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_date !== null) {
			
			$xfer += $output->writeFieldBegin('update_date');
			$xfer += $output->writeString($this->update_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_name');
			$xfer += $output->writeString($this->carrier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_remark !== null) {
			
			$xfer += $output->writeFieldBegin('transport_remark');
			$xfer += $output->writeString($this->transport_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_return_goods !== null) {
			
			$xfer += $output->writeFieldBegin('order_return_goods');
			
			if (!is_array($this->order_return_goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->order_return_goods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>