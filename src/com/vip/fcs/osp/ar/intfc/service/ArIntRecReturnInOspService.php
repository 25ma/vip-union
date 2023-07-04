<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ar\intfc\service;
interface ArIntRecReturnInOspServiceIf{
	
	
	public function createList( $arIntRecReturnInModelList);
	
	public function createSelective(\com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInModel $arIntRecReturnInModel);
	
	public function healthCheck();
	
}

class _ArIntRecReturnInOspServiceClient extends \Osp\Base\OspStub implements \com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInOspServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.fcs.osp.ar.intfc.service.ArIntRecReturnInOspService", "1.0.0");
	}
	
	
	public function createList( $arIntRecReturnInModelList){
		
		$this->send_createList( $arIntRecReturnInModelList);
		return $this->recv_createList();
	}
	
	public function send_createList( $arIntRecReturnInModelList){
		
		$this->initInvocation("createList");
		$args = new \com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInOspService_createList_args();
		
		$args->arIntRecReturnInModelList = $arIntRecReturnInModelList;
		
		$this->send_base($args);
	}
	
	public function recv_createList(){
		
		$result = new \com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInOspService_createList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createSelective(\com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInModel $arIntRecReturnInModel){
		
		$this->send_createSelective( $arIntRecReturnInModel);
		return $this->recv_createSelective();
	}
	
	public function send_createSelective(\com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInModel $arIntRecReturnInModel){
		
		$this->initInvocation("createSelective");
		$args = new \com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInOspService_createSelective_args();
		
		$args->arIntRecReturnInModel = $arIntRecReturnInModel;
		
		$this->send_base($args);
	}
	
	public function recv_createSelective(){
		
		$result = new \com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInOspService_createSelective_result();
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
		$args = new \com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInOspService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInOspService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ArIntRecReturnInOspService_createList_args {
	
	static $_TSPEC;
	public $arIntRecReturnInModelList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'arIntRecReturnInModelList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['arIntRecReturnInModelList'])){
				
				$this->arIntRecReturnInModelList = $vals['arIntRecReturnInModelList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->arIntRecReturnInModelList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInModel();
					$elem0->read($input);
					
					$this->arIntRecReturnInModelList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('arIntRecReturnInModelList');
		
		if (!is_array($this->arIntRecReturnInModelList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->arIntRecReturnInModelList as $iter0){
			
			
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




class ArIntRecReturnInOspService_createSelective_args {
	
	static $_TSPEC;
	public $arIntRecReturnInModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'arIntRecReturnInModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['arIntRecReturnInModel'])){
				
				$this->arIntRecReturnInModel = $vals['arIntRecReturnInModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->arIntRecReturnInModel = new \com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInModel();
			$this->arIntRecReturnInModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->arIntRecReturnInModel !== null) {
			
			$xfer += $output->writeFieldBegin('arIntRecReturnInModel');
			
			if (!is_object($this->arIntRecReturnInModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->arIntRecReturnInModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ArIntRecReturnInOspService_healthCheck_args {
	
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




class ArIntRecReturnInOspService_createList_result {
	
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
					
					$elem0 = new \com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInModel();
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




class ArIntRecReturnInOspService_createSelective_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ar\intfc\service\ArIntRecReturnInModel();
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




class ArIntRecReturnInOspService_healthCheck_result {
	
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