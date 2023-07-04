<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;
interface WarehouseServiceIf{
	
	
	public function getRdcList( $rdcCode, $rdcName);
	
	public function getSimpleWarehouseList( $warehouseCode, $warehouseName);
	
	public function getSimpleWarehouseList2(\com\vip\hcscm\cis\service\GetSimpleWarehouseListReq $req);
	
	public function getStoreList( $storeCode, $storeName);
	
	public function getWarehouseDetail( $id);
	
	public function getWarehouseList(\com\vip\hcscm\cis\service\QureyWarehouseInfoReq $req);
	
	public function healthCheck();
	
	public function saveWarehouseList(\com\vip\hcscm\cis\service\SumitWarehouseReq $req);
	
}

class _WarehouseServiceClient extends \Osp\Base\OspStub implements \com\vip\hcscm\cis\service\WarehouseServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.hcscm.cis.service.WarehouseService", "1.0.0");
	}
	
	
	public function getRdcList( $rdcCode, $rdcName){
		
		$this->send_getRdcList( $rdcCode, $rdcName);
		return $this->recv_getRdcList();
	}
	
	public function send_getRdcList( $rdcCode, $rdcName){
		
		$this->initInvocation("getRdcList");
		$args = new \com\vip\hcscm\cis\service\WarehouseService_getRdcList_args();
		
		$args->rdcCode = $rdcCode;
		
		$args->rdcName = $rdcName;
		
		$this->send_base($args);
	}
	
	public function recv_getRdcList(){
		
		$result = new \com\vip\hcscm\cis\service\WarehouseService_getRdcList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSimpleWarehouseList( $warehouseCode, $warehouseName){
		
		$this->send_getSimpleWarehouseList( $warehouseCode, $warehouseName);
		return $this->recv_getSimpleWarehouseList();
	}
	
	public function send_getSimpleWarehouseList( $warehouseCode, $warehouseName){
		
		$this->initInvocation("getSimpleWarehouseList");
		$args = new \com\vip\hcscm\cis\service\WarehouseService_getSimpleWarehouseList_args();
		
		$args->warehouseCode = $warehouseCode;
		
		$args->warehouseName = $warehouseName;
		
		$this->send_base($args);
	}
	
	public function recv_getSimpleWarehouseList(){
		
		$result = new \com\vip\hcscm\cis\service\WarehouseService_getSimpleWarehouseList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSimpleWarehouseList2(\com\vip\hcscm\cis\service\GetSimpleWarehouseListReq $req){
		
		$this->send_getSimpleWarehouseList2( $req);
		return $this->recv_getSimpleWarehouseList2();
	}
	
	public function send_getSimpleWarehouseList2(\com\vip\hcscm\cis\service\GetSimpleWarehouseListReq $req){
		
		$this->initInvocation("getSimpleWarehouseList2");
		$args = new \com\vip\hcscm\cis\service\WarehouseService_getSimpleWarehouseList2_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_getSimpleWarehouseList2(){
		
		$result = new \com\vip\hcscm\cis\service\WarehouseService_getSimpleWarehouseList2_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getStoreList( $storeCode, $storeName){
		
		$this->send_getStoreList( $storeCode, $storeName);
		return $this->recv_getStoreList();
	}
	
	public function send_getStoreList( $storeCode, $storeName){
		
		$this->initInvocation("getStoreList");
		$args = new \com\vip\hcscm\cis\service\WarehouseService_getStoreList_args();
		
		$args->storeCode = $storeCode;
		
		$args->storeName = $storeName;
		
		$this->send_base($args);
	}
	
	public function recv_getStoreList(){
		
		$result = new \com\vip\hcscm\cis\service\WarehouseService_getStoreList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getWarehouseDetail( $id){
		
		$this->send_getWarehouseDetail( $id);
		return $this->recv_getWarehouseDetail();
	}
	
	public function send_getWarehouseDetail( $id){
		
		$this->initInvocation("getWarehouseDetail");
		$args = new \com\vip\hcscm\cis\service\WarehouseService_getWarehouseDetail_args();
		
		$args->id = $id;
		
		$this->send_base($args);
	}
	
	public function recv_getWarehouseDetail(){
		
		$result = new \com\vip\hcscm\cis\service\WarehouseService_getWarehouseDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getWarehouseList(\com\vip\hcscm\cis\service\QureyWarehouseInfoReq $req){
		
		$this->send_getWarehouseList( $req);
		return $this->recv_getWarehouseList();
	}
	
	public function send_getWarehouseList(\com\vip\hcscm\cis\service\QureyWarehouseInfoReq $req){
		
		$this->initInvocation("getWarehouseList");
		$args = new \com\vip\hcscm\cis\service\WarehouseService_getWarehouseList_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_getWarehouseList(){
		
		$result = new \com\vip\hcscm\cis\service\WarehouseService_getWarehouseList_result();
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
		$args = new \com\vip\hcscm\cis\service\WarehouseService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\hcscm\cis\service\WarehouseService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveWarehouseList(\com\vip\hcscm\cis\service\SumitWarehouseReq $req){
		
		$this->send_saveWarehouseList( $req);
		return $this->recv_saveWarehouseList();
	}
	
	public function send_saveWarehouseList(\com\vip\hcscm\cis\service\SumitWarehouseReq $req){
		
		$this->initInvocation("saveWarehouseList");
		$args = new \com\vip\hcscm\cis\service\WarehouseService_saveWarehouseList_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_saveWarehouseList(){
		
		$result = new \com\vip\hcscm\cis\service\WarehouseService_saveWarehouseList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class WarehouseService_getRdcList_args {
	
	static $_TSPEC;
	public $rdcCode = null;
	public $rdcName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'rdcCode'
			),
			2 => array(
			'var' => 'rdcName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['rdcCode'])){
				
				$this->rdcCode = $vals['rdcCode'];
			}
			
			
			if (isset($vals['rdcName'])){
				
				$this->rdcName = $vals['rdcName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->rdcCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->rdcName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->rdcCode !== null) {
			
			$xfer += $output->writeFieldBegin('rdcCode');
			$xfer += $output->writeString($this->rdcCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rdcName !== null) {
			
			$xfer += $output->writeFieldBegin('rdcName');
			$xfer += $output->writeString($this->rdcName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WarehouseService_getSimpleWarehouseList_args {
	
	static $_TSPEC;
	public $warehouseCode = null;
	public $warehouseName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseCode'
			),
			2 => array(
			'var' => 'warehouseName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['warehouseName'])){
				
				$this->warehouseName = $vals['warehouseName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouseCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouseName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseName');
			$xfer += $output->writeString($this->warehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WarehouseService_getSimpleWarehouseList2_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\hcscm\cis\service\GetSimpleWarehouseListReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WarehouseService_getStoreList_args {
	
	static $_TSPEC;
	public $storeCode = null;
	public $storeName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'storeCode'
			),
			2 => array(
			'var' => 'storeName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['storeCode'])){
				
				$this->storeCode = $vals['storeCode'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->storeCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storeName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->storeCode !== null) {
			
			$xfer += $output->writeFieldBegin('storeCode');
			$xfer += $output->writeString($this->storeCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeName !== null) {
			
			$xfer += $output->writeFieldBegin('storeName');
			$xfer += $output->writeString($this->storeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WarehouseService_getWarehouseDetail_args {
	
	static $_TSPEC;
	public $id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->id); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WarehouseService_getWarehouseList_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\hcscm\cis\service\QureyWarehouseInfoReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WarehouseService_healthCheck_args {
	
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




class WarehouseService_saveWarehouseList_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\hcscm\cis\service\SumitWarehouseReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WarehouseService_getRdcList_result {
	
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
			
			
			$this->success = new \com\vip\hcscm\cis\service\RdcInfoViewResp();
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




class WarehouseService_getSimpleWarehouseList_result {
	
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
			
			
			$this->success = new \com\vip\hcscm\cis\service\WarehouseListResp();
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




class WarehouseService_getSimpleWarehouseList2_result {
	
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
			
			
			$this->success = new \com\vip\hcscm\cis\service\WarehouseListResp();
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




class WarehouseService_getStoreList_result {
	
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
			
			
			$this->success = new \com\vip\hcscm\cis\service\StoreInfoViewResp();
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




class WarehouseService_getWarehouseDetail_result {
	
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
			
			
			$this->success = new \com\vip\hcscm\cis\service\WarehouseInfoResp();
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




class WarehouseService_getWarehouseList_result {
	
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
			
			
			$this->success = new \com\vip\hcscm\cis\service\WarehouseInfoDetailResp();
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




class WarehouseService_healthCheck_result {
	
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




class WarehouseService_saveWarehouseList_result {
	
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
			
			
			$this->success = new \com\vip\hcscm\cis\service\WareCommonResp();
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