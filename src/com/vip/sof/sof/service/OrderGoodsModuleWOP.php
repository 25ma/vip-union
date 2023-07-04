<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class OrderGoodsModuleWOP {
	
	static $_TSPEC;
	public $order_module = null;
	public $goods_module = null;
	public $return_order_module = null;
	public $order_fields = null;
	public $goods_fields = null;
	public $return_order_fields = null;
	public $transport_info_fields = null;
	public $page = null;
	public $page_size = null;
	public $app_name = null;
	public $invoice_module = null;
	public $invoice_info_fields = null;
	public $transport_module = null;
	public $cancel_module = null;
	public $cancel_info_fields = null;
	public $mp_problem_order = null;
	public $package_info = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_module'
			),
			2 => array(
			'var' => 'goods_module'
			),
			3 => array(
			'var' => 'return_order_module'
			),
			4 => array(
			'var' => 'order_fields'
			),
			5 => array(
			'var' => 'goods_fields'
			),
			6 => array(
			'var' => 'return_order_fields'
			),
			7 => array(
			'var' => 'transport_info_fields'
			),
			8 => array(
			'var' => 'page'
			),
			9 => array(
			'var' => 'page_size'
			),
			10 => array(
			'var' => 'app_name'
			),
			11 => array(
			'var' => 'invoice_module'
			),
			12 => array(
			'var' => 'invoice_info_fields'
			),
			13 => array(
			'var' => 'transport_module'
			),
			14 => array(
			'var' => 'cancel_module'
			),
			15 => array(
			'var' => 'cancel_info_fields'
			),
			16 => array(
			'var' => 'mp_problem_order'
			),
			17 => array(
			'var' => 'package_info'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_module'])){
				
				$this->order_module = $vals['order_module'];
			}
			
			
			if (isset($vals['goods_module'])){
				
				$this->goods_module = $vals['goods_module'];
			}
			
			
			if (isset($vals['return_order_module'])){
				
				$this->return_order_module = $vals['return_order_module'];
			}
			
			
			if (isset($vals['order_fields'])){
				
				$this->order_fields = $vals['order_fields'];
			}
			
			
			if (isset($vals['goods_fields'])){
				
				$this->goods_fields = $vals['goods_fields'];
			}
			
			
			if (isset($vals['return_order_fields'])){
				
				$this->return_order_fields = $vals['return_order_fields'];
			}
			
			
			if (isset($vals['transport_info_fields'])){
				
				$this->transport_info_fields = $vals['transport_info_fields'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
			if (isset($vals['app_name'])){
				
				$this->app_name = $vals['app_name'];
			}
			
			
			if (isset($vals['invoice_module'])){
				
				$this->invoice_module = $vals['invoice_module'];
			}
			
			
			if (isset($vals['invoice_info_fields'])){
				
				$this->invoice_info_fields = $vals['invoice_info_fields'];
			}
			
			
			if (isset($vals['transport_module'])){
				
				$this->transport_module = $vals['transport_module'];
			}
			
			
			if (isset($vals['cancel_module'])){
				
				$this->cancel_module = $vals['cancel_module'];
			}
			
			
			if (isset($vals['cancel_info_fields'])){
				
				$this->cancel_info_fields = $vals['cancel_info_fields'];
			}
			
			
			if (isset($vals['mp_problem_order'])){
				
				$this->mp_problem_order = $vals['mp_problem_order'];
			}
			
			
			if (isset($vals['package_info'])){
				
				$this->package_info = $vals['package_info'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderGoodsModuleWOP';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_module" == $schemeField){
				
				$needSkip = false;
				
				$this->order_module = new \com\vip\sof\sof\service\OrderModuleWOP();
				$this->order_module->read($input);
				
			}
			
			
			
			
			if ("goods_module" == $schemeField){
				
				$needSkip = false;
				
				$this->goods_module = new \com\vip\sof\sof\service\GoodsModuleWOP();
				$this->goods_module->read($input);
				
			}
			
			
			
			
			if ("return_order_module" == $schemeField){
				
				$needSkip = false;
				
				$this->return_order_module = new \com\vip\sof\sof\service\ReturnOrderModuleWOP();
				$this->return_order_module->read($input);
				
			}
			
			
			
			
			if ("order_fields" == $schemeField){
				
				$needSkip = false;
				
				$this->order_fields = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->order_fields[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("goods_fields" == $schemeField){
				
				$needSkip = false;
				
				$this->goods_fields = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->goods_fields[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("return_order_fields" == $schemeField){
				
				$needSkip = false;
				
				$this->return_order_fields = array();
				$_size2 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->return_order_fields[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("transport_info_fields" == $schemeField){
				
				$needSkip = false;
				
				$this->transport_info_fields = array();
				$_size3 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readString($elem3);
						
						$this->transport_info_fields[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("page_size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_size); 
				
			}
			
			
			
			
			if ("app_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->app_name);
				
			}
			
			
			
			
			if ("invoice_module" == $schemeField){
				
				$needSkip = false;
				
				$this->invoice_module = new \com\vip\sof\sof\service\InvoiceModule();
				$this->invoice_module->read($input);
				
			}
			
			
			
			
			if ("invoice_info_fields" == $schemeField){
				
				$needSkip = false;
				
				$this->invoice_info_fields = array();
				$_size4 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readString($elem4);
						
						$this->invoice_info_fields[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("transport_module" == $schemeField){
				
				$needSkip = false;
				
				$this->transport_module = new \com\vip\sof\sof\service\TransportModuleWOP();
				$this->transport_module->read($input);
				
			}
			
			
			
			
			if ("cancel_module" == $schemeField){
				
				$needSkip = false;
				
				$this->cancel_module = new \com\vip\sof\sof\service\CancelModuleWOP();
				$this->cancel_module->read($input);
				
			}
			
			
			
			
			if ("cancel_info_fields" == $schemeField){
				
				$needSkip = false;
				
				$this->cancel_info_fields = array();
				$_size5 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						$input->readString($elem5);
						
						$this->cancel_info_fields[$_size5++] = $elem5;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("mp_problem_order" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->mp_problem_order); 
				
			}
			
			
			
			
			if ("package_info" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->package_info); 
				
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
		
		if($this->order_module !== null) {
			
			$xfer += $output->writeFieldBegin('order_module');
			
			if (!is_object($this->order_module)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->order_module->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_module !== null) {
			
			$xfer += $output->writeFieldBegin('goods_module');
			
			if (!is_object($this->goods_module)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->goods_module->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_order_module !== null) {
			
			$xfer += $output->writeFieldBegin('return_order_module');
			
			if (!is_object($this->return_order_module)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->return_order_module->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_fields !== null) {
			
			$xfer += $output->writeFieldBegin('order_fields');
			
			if (!is_array($this->order_fields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->order_fields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_fields !== null) {
			
			$xfer += $output->writeFieldBegin('goods_fields');
			
			if (!is_array($this->goods_fields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->goods_fields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_order_fields !== null) {
			
			$xfer += $output->writeFieldBegin('return_order_fields');
			
			if (!is_array($this->return_order_fields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->return_order_fields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_info_fields !== null) {
			
			$xfer += $output->writeFieldBegin('transport_info_fields');
			
			if (!is_array($this->transport_info_fields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->transport_info_fields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('app_name');
		$xfer += $output->writeString($this->app_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->invoice_module !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_module');
			
			if (!is_object($this->invoice_module)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->invoice_module->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_info_fields !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_info_fields');
			
			if (!is_array($this->invoice_info_fields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->invoice_info_fields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_module !== null) {
			
			$xfer += $output->writeFieldBegin('transport_module');
			
			if (!is_object($this->transport_module)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->transport_module->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancel_module !== null) {
			
			$xfer += $output->writeFieldBegin('cancel_module');
			
			if (!is_object($this->cancel_module)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->cancel_module->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancel_info_fields !== null) {
			
			$xfer += $output->writeFieldBegin('cancel_info_fields');
			
			if (!is_array($this->cancel_info_fields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->cancel_info_fields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mp_problem_order !== null) {
			
			$xfer += $output->writeFieldBegin('mp_problem_order');
			$xfer += $output->writeI32($this->mp_problem_order);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_info !== null) {
			
			$xfer += $output->writeFieldBegin('package_info');
			$xfer += $output->writeI32($this->package_info);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>