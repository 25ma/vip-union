<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ar\intfc\service;
interface ArIntTrxhInOspServiceIf{
	
	
	public function createList( $arIntTrxhInModelList);
	
	public function createSelective(\com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInModel $arIntTrxhInModel);
	
	public function getElectronicEntity( $orderNum, $sourceName);
	
	public function getElectronicEntityInfo( $orderNum, $sourceName);
	
	public function healthCheck();
	
}

class _ArIntTrxhInOspServiceClient extends \Osp\Base\OspStub implements \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInOspServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.fcs.osp.ar.intfc.service.ArIntTrxhInOspService", "1.0.0");
	}
	
	
	public function createList( $arIntTrxhInModelList){
		
		$this->send_createList( $arIntTrxhInModelList);
		return $this->recv_createList();
	}
	
	public function send_createList( $arIntTrxhInModelList){
		
		$this->initInvocation("createList");
		$args = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInOspService_createList_args();
		
		$args->arIntTrxhInModelList = $arIntTrxhInModelList;
		
		$this->send_base($args);
	}
	
	public function recv_createList(){
		
		$result = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInOspService_createList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createSelective(\com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInModel $arIntTrxhInModel){
		
		$this->send_createSelective( $arIntTrxhInModel);
		return $this->recv_createSelective();
	}
	
	public function send_createSelective(\com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInModel $arIntTrxhInModel){
		
		$this->initInvocation("createSelective");
		$args = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInOspService_createSelective_args();
		
		$args->arIntTrxhInModel = $arIntTrxhInModel;
		
		$this->send_base($args);
	}
	
	public function recv_createSelective(){
		
		$result = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInOspService_createSelective_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getElectronicEntity( $orderNum, $sourceName){
		
		$this->send_getElectronicEntity( $orderNum, $sourceName);
		return $this->recv_getElectronicEntity();
	}
	
	public function send_getElectronicEntity( $orderNum, $sourceName){
		
		$this->initInvocation("getElectronicEntity");
		$args = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInOspService_getElectronicEntity_args();
		
		$args->orderNum = $orderNum;
		
		$args->sourceName = $sourceName;
		
		$this->send_base($args);
	}
	
	public function recv_getElectronicEntity(){
		
		$result = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInOspService_getElectronicEntity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getElectronicEntityInfo( $orderNum, $sourceName){
		
		$this->send_getElectronicEntityInfo( $orderNum, $sourceName);
		return $this->recv_getElectronicEntityInfo();
	}
	
	public function send_getElectronicEntityInfo( $orderNum, $sourceName){
		
		$this->initInvocation("getElectronicEntityInfo");
		$args = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInOspService_getElectronicEntityInfo_args();
		
		$args->orderNum = $orderNum;
		
		$args->sourceName = $sourceName;
		
		$this->send_base($args);
	}
	
	public function recv_getElectronicEntityInfo(){
		
		$result = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInOspService_getElectronicEntityInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInOspService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInOspService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ArIntTrxhInOspService_createList_args {
	
	static $_TSPEC;
	public $arIntTrxhInModelList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'arIntTrxhInModelList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['arIntTrxhInModelList'])){
				
				$this->arIntTrxhInModelList = $vals['arIntTrxhInModelList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->arIntTrxhInModelList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInModel();
					$elem0->read($input);
					
					$this->arIntTrxhInModelList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('arIntTrxhInModelList');
		
		if (!is_array($this->arIntTrxhInModelList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->arIntTrxhInModelList as $iter0){
			
			
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




class ArIntTrxhInOspService_createSelective_args {
	
	static $_TSPEC;
	public $arIntTrxhInModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'arIntTrxhInModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['arIntTrxhInModel'])){
				
				$this->arIntTrxhInModel = $vals['arIntTrxhInModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->arIntTrxhInModel = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInModel();
			$this->arIntTrxhInModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->arIntTrxhInModel !== null) {
			
			$xfer += $output->writeFieldBegin('arIntTrxhInModel');
			
			if (!is_object($this->arIntTrxhInModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->arIntTrxhInModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ArIntTrxhInOspService_getElectronicEntity_args {
	
	static $_TSPEC;
	public $orderNum = null;
	public $sourceName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderNum'
			),
			2 => array(
			'var' => 'sourceName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderNum);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sourceName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('orderNum');
		$xfer += $output->writeString($this->orderNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceName');
		$xfer += $output->writeString($this->sourceName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ArIntTrxhInOspService_getElectronicEntityInfo_args {
	
	static $_TSPEC;
	public $orderNum = null;
	public $sourceName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderNum'
			),
			2 => array(
			'var' => 'sourceName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderNum);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sourceName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('orderNum');
		$xfer += $output->writeString($this->orderNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceName');
		$xfer += $output->writeString($this->sourceName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ArIntTrxhInOspService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ArIntTrxhInOspService_createList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInModel();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class ArIntTrxhInOspService_createSelective_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\osp\ar\intfc\service\ArIntTrxhInModel();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ArIntTrxhInOspService_getElectronicEntity_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeI64($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ArIntTrxhInOspService_getElectronicEntityInfo_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\fcs\osp\ar\intfc\service\OrgInfoModel();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ArIntTrxhInOspService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>