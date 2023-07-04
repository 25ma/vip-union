<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class OrderGoodsModule {
	
	static $_TSPEC;
	public $orderModule = null;
	public $goodsModule = null;
	public $returnOrderModule = null;
	public $orderFields = null;
	public $goodsFields = null;
	public $returnOrderFields = null;
	public $transportInfoFields = null;
	public $page = null;
	public $pageSize = null;
	public $appName = null;
	public $invoiceModule = null;
	public $invoiceInfoFields = null;
	public $transportModule = null;
	public $cancelModule = null;
	public $cancelInfoFields = null;
	public $mpProblemOrder = null;
	public $packageInfo = null;
	public $plaintext = null;
	public $isTransportInterface = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderModule'
			),
			2 => array(
			'var' => 'goodsModule'
			),
			3 => array(
			'var' => 'returnOrderModule'
			),
			4 => array(
			'var' => 'orderFields'
			),
			5 => array(
			'var' => 'goodsFields'
			),
			6 => array(
			'var' => 'returnOrderFields'
			),
			7 => array(
			'var' => 'transportInfoFields'
			),
			8 => array(
			'var' => 'page'
			),
			9 => array(
			'var' => 'pageSize'
			),
			10 => array(
			'var' => 'appName'
			),
			11 => array(
			'var' => 'invoiceModule'
			),
			12 => array(
			'var' => 'invoiceInfoFields'
			),
			13 => array(
			'var' => 'transportModule'
			),
			14 => array(
			'var' => 'cancelModule'
			),
			15 => array(
			'var' => 'cancelInfoFields'
			),
			16 => array(
			'var' => 'mpProblemOrder'
			),
			17 => array(
			'var' => 'packageInfo'
			),
			18 => array(
			'var' => 'plaintext'
			),
			19 => array(
			'var' => 'isTransportInterface'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderModule'])){
				
				$this->orderModule = $vals['orderModule'];
			}
			
			
			if (isset($vals['goodsModule'])){
				
				$this->goodsModule = $vals['goodsModule'];
			}
			
			
			if (isset($vals['returnOrderModule'])){
				
				$this->returnOrderModule = $vals['returnOrderModule'];
			}
			
			
			if (isset($vals['orderFields'])){
				
				$this->orderFields = $vals['orderFields'];
			}
			
			
			if (isset($vals['goodsFields'])){
				
				$this->goodsFields = $vals['goodsFields'];
			}
			
			
			if (isset($vals['returnOrderFields'])){
				
				$this->returnOrderFields = $vals['returnOrderFields'];
			}
			
			
			if (isset($vals['transportInfoFields'])){
				
				$this->transportInfoFields = $vals['transportInfoFields'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['invoiceModule'])){
				
				$this->invoiceModule = $vals['invoiceModule'];
			}
			
			
			if (isset($vals['invoiceInfoFields'])){
				
				$this->invoiceInfoFields = $vals['invoiceInfoFields'];
			}
			
			
			if (isset($vals['transportModule'])){
				
				$this->transportModule = $vals['transportModule'];
			}
			
			
			if (isset($vals['cancelModule'])){
				
				$this->cancelModule = $vals['cancelModule'];
			}
			
			
			if (isset($vals['cancelInfoFields'])){
				
				$this->cancelInfoFields = $vals['cancelInfoFields'];
			}
			
			
			if (isset($vals['mpProblemOrder'])){
				
				$this->mpProblemOrder = $vals['mpProblemOrder'];
			}
			
			
			if (isset($vals['packageInfo'])){
				
				$this->packageInfo = $vals['packageInfo'];
			}
			
			
			if (isset($vals['plaintext'])){
				
				$this->plaintext = $vals['plaintext'];
			}
			
			
			if (isset($vals['isTransportInterface'])){
				
				$this->isTransportInterface = $vals['isTransportInterface'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderGoodsModule';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderModule" == $schemeField){
				
				$needSkip = false;
				
				$this->orderModule = new \com\vip\sof\sof\service\OrderModule();
				$this->orderModule->read($input);
				
			}
			
			
			
			
			if ("goodsModule" == $schemeField){
				
				$needSkip = false;
				
				$this->goodsModule = new \com\vip\sof\sof\service\GoodsModule();
				$this->goodsModule->read($input);
				
			}
			
			
			
			
			if ("returnOrderModule" == $schemeField){
				
				$needSkip = false;
				
				$this->returnOrderModule = new \com\vip\sof\sof\service\ReturnOrderModule();
				$this->returnOrderModule->read($input);
				
			}
			
			
			
			
			if ("orderFields" == $schemeField){
				
				$needSkip = false;
				
				$this->orderFields = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->orderFields[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("goodsFields" == $schemeField){
				
				$needSkip = false;
				
				$this->goodsFields = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->goodsFields[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("returnOrderFields" == $schemeField){
				
				$needSkip = false;
				
				$this->returnOrderFields = array();
				$_size2 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->returnOrderFields[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("transportInfoFields" == $schemeField){
				
				$needSkip = false;
				
				$this->transportInfoFields = array();
				$_size3 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readString($elem3);
						
						$this->transportInfoFields[$_size3++] = $elem3;
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
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("invoiceModule" == $schemeField){
				
				$needSkip = false;
				
				$this->invoiceModule = new \com\vip\sof\sof\service\InvoiceModule();
				$this->invoiceModule->read($input);
				
			}
			
			
			
			
			if ("invoiceInfoFields" == $schemeField){
				
				$needSkip = false;
				
				$this->invoiceInfoFields = array();
				$_size4 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readString($elem4);
						
						$this->invoiceInfoFields[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("transportModule" == $schemeField){
				
				$needSkip = false;
				
				$this->transportModule = new \com\vip\sof\sof\service\TransportModule();
				$this->transportModule->read($input);
				
			}
			
			
			
			
			if ("cancelModule" == $schemeField){
				
				$needSkip = false;
				
				$this->cancelModule = new \com\vip\sof\sof\service\CancelModule();
				$this->cancelModule->read($input);
				
			}
			
			
			
			
			if ("cancelInfoFields" == $schemeField){
				
				$needSkip = false;
				
				$this->cancelInfoFields = array();
				$_size5 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						$input->readString($elem5);
						
						$this->cancelInfoFields[$_size5++] = $elem5;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("mpProblemOrder" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->mpProblemOrder); 
				
			}
			
			
			
			
			if ("packageInfo" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->packageInfo); 
				
			}
			
			
			
			
			if ("plaintext" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->plaintext);
				
			}
			
			
			
			
			if ("isTransportInterface" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isTransportInterface);
				
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
		
		if($this->orderModule !== null) {
			
			$xfer += $output->writeFieldBegin('orderModule');
			
			if (!is_object($this->orderModule)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->orderModule->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsModule !== null) {
			
			$xfer += $output->writeFieldBegin('goodsModule');
			
			if (!is_object($this->goodsModule)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->goodsModule->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnOrderModule !== null) {
			
			$xfer += $output->writeFieldBegin('returnOrderModule');
			
			if (!is_object($this->returnOrderModule)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->returnOrderModule->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderFields !== null) {
			
			$xfer += $output->writeFieldBegin('orderFields');
			
			if (!is_array($this->orderFields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->orderFields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsFields !== null) {
			
			$xfer += $output->writeFieldBegin('goodsFields');
			
			if (!is_array($this->goodsFields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->goodsFields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnOrderFields !== null) {
			
			$xfer += $output->writeFieldBegin('returnOrderFields');
			
			if (!is_array($this->returnOrderFields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->returnOrderFields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportInfoFields !== null) {
			
			$xfer += $output->writeFieldBegin('transportInfoFields');
			
			if (!is_array($this->transportInfoFields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->transportInfoFields as $iter0){
				
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
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appName');
		$xfer += $output->writeString($this->appName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->invoiceModule !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceModule');
			
			if (!is_object($this->invoiceModule)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->invoiceModule->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceInfoFields !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceInfoFields');
			
			if (!is_array($this->invoiceInfoFields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->invoiceInfoFields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportModule !== null) {
			
			$xfer += $output->writeFieldBegin('transportModule');
			
			if (!is_object($this->transportModule)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->transportModule->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelModule !== null) {
			
			$xfer += $output->writeFieldBegin('cancelModule');
			
			if (!is_object($this->cancelModule)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->cancelModule->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelInfoFields !== null) {
			
			$xfer += $output->writeFieldBegin('cancelInfoFields');
			
			if (!is_array($this->cancelInfoFields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->cancelInfoFields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mpProblemOrder !== null) {
			
			$xfer += $output->writeFieldBegin('mpProblemOrder');
			$xfer += $output->writeI32($this->mpProblemOrder);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageInfo !== null) {
			
			$xfer += $output->writeFieldBegin('packageInfo');
			$xfer += $output->writeI32($this->packageInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->plaintext !== null) {
			
			$xfer += $output->writeFieldBegin('plaintext');
			$xfer += $output->writeBool($this->plaintext);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isTransportInterface !== null) {
			
			$xfer += $output->writeFieldBegin('isTransportInterface');
			$xfer += $output->writeBool($this->isTransportInterface);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>