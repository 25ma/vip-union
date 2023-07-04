<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\gl\service;
interface GlVoucherServiceIf{
	
	
	public function getBatchHeaderLineByRevId( $id, $pageSize);
	
	public function getByGlSlLinkId( $glSlLinkId, $glSlLinkTable);
	
	public function getByJeHeaderId( $jeHeaderId);
	
	public function getBySrcHeaderId( $srcHeaderId, $sourceName);
	
	public function getBySrcHeaderIdAndCategoryName( $srcHeaderId, $categoryName);
	
	public function getBySrcHeaderIdCategoryBookId( $srcHeaderId, $categoryName, $ledgerId);
	
	public function getCuxGlJeBatchHeaderVByHeaderId( $jeHeaderId, $reversedJeHeaderId);
	
	public function getInterfaceBySrcHeaderId( $srcHeaderId, $operationCode, $sourceName);
	
	public function getInterfaceBySrcHeaderIdAndBookId( $srcHeaderId, $operationCode, $sourceName, $bookId);
	
	public function getStatusBySrcHeaderId( $srcHeaderId, $operationCode, $sourceName);
	
	public function healthCheck();
	
	public function insertGlVoucher( $vouchers);
	
	public function saveByTransaction( $vouchers);
	
}

class _GlVoucherServiceClient extends \Osp\Base\OspStub implements \com\vip\fcs\osp\ebs\gl\service\GlVoucherServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.fcs.osp.ebs.gl.service.GlVoucherService", "1.0.0");
	}
	
	
	public function getBatchHeaderLineByRevId( $id, $pageSize){
		
		$this->send_getBatchHeaderLineByRevId( $id, $pageSize);
		return $this->recv_getBatchHeaderLineByRevId();
	}
	
	public function send_getBatchHeaderLineByRevId( $id, $pageSize){
		
		$this->initInvocation("getBatchHeaderLineByRevId");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getBatchHeaderLineByRevId_args();
		
		$args->id = $id;
		
		$args->pageSize = $pageSize;
		
		$this->send_base($args);
	}
	
	public function recv_getBatchHeaderLineByRevId(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getBatchHeaderLineByRevId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getByGlSlLinkId( $glSlLinkId, $glSlLinkTable){
		
		$this->send_getByGlSlLinkId( $glSlLinkId, $glSlLinkTable);
		return $this->recv_getByGlSlLinkId();
	}
	
	public function send_getByGlSlLinkId( $glSlLinkId, $glSlLinkTable){
		
		$this->initInvocation("getByGlSlLinkId");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getByGlSlLinkId_args();
		
		$args->glSlLinkId = $glSlLinkId;
		
		$args->glSlLinkTable = $glSlLinkTable;
		
		$this->send_base($args);
	}
	
	public function recv_getByGlSlLinkId(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getByGlSlLinkId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getByJeHeaderId( $jeHeaderId){
		
		$this->send_getByJeHeaderId( $jeHeaderId);
		return $this->recv_getByJeHeaderId();
	}
	
	public function send_getByJeHeaderId( $jeHeaderId){
		
		$this->initInvocation("getByJeHeaderId");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getByJeHeaderId_args();
		
		$args->jeHeaderId = $jeHeaderId;
		
		$this->send_base($args);
	}
	
	public function recv_getByJeHeaderId(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getByJeHeaderId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBySrcHeaderId( $srcHeaderId, $sourceName){
		
		$this->send_getBySrcHeaderId( $srcHeaderId, $sourceName);
		return $this->recv_getBySrcHeaderId();
	}
	
	public function send_getBySrcHeaderId( $srcHeaderId, $sourceName){
		
		$this->initInvocation("getBySrcHeaderId");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getBySrcHeaderId_args();
		
		$args->srcHeaderId = $srcHeaderId;
		
		$args->sourceName = $sourceName;
		
		$this->send_base($args);
	}
	
	public function recv_getBySrcHeaderId(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getBySrcHeaderId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBySrcHeaderIdAndCategoryName( $srcHeaderId, $categoryName){
		
		$this->send_getBySrcHeaderIdAndCategoryName( $srcHeaderId, $categoryName);
		return $this->recv_getBySrcHeaderIdAndCategoryName();
	}
	
	public function send_getBySrcHeaderIdAndCategoryName( $srcHeaderId, $categoryName){
		
		$this->initInvocation("getBySrcHeaderIdAndCategoryName");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getBySrcHeaderIdAndCategoryName_args();
		
		$args->srcHeaderId = $srcHeaderId;
		
		$args->categoryName = $categoryName;
		
		$this->send_base($args);
	}
	
	public function recv_getBySrcHeaderIdAndCategoryName(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getBySrcHeaderIdAndCategoryName_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBySrcHeaderIdCategoryBookId( $srcHeaderId, $categoryName, $ledgerId){
		
		$this->send_getBySrcHeaderIdCategoryBookId( $srcHeaderId, $categoryName, $ledgerId);
		return $this->recv_getBySrcHeaderIdCategoryBookId();
	}
	
	public function send_getBySrcHeaderIdCategoryBookId( $srcHeaderId, $categoryName, $ledgerId){
		
		$this->initInvocation("getBySrcHeaderIdCategoryBookId");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getBySrcHeaderIdCategoryBookId_args();
		
		$args->srcHeaderId = $srcHeaderId;
		
		$args->categoryName = $categoryName;
		
		$args->ledgerId = $ledgerId;
		
		$this->send_base($args);
	}
	
	public function recv_getBySrcHeaderIdCategoryBookId(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getBySrcHeaderIdCategoryBookId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCuxGlJeBatchHeaderVByHeaderId( $jeHeaderId, $reversedJeHeaderId){
		
		$this->send_getCuxGlJeBatchHeaderVByHeaderId( $jeHeaderId, $reversedJeHeaderId);
		return $this->recv_getCuxGlJeBatchHeaderVByHeaderId();
	}
	
	public function send_getCuxGlJeBatchHeaderVByHeaderId( $jeHeaderId, $reversedJeHeaderId){
		
		$this->initInvocation("getCuxGlJeBatchHeaderVByHeaderId");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getCuxGlJeBatchHeaderVByHeaderId_args();
		
		$args->jeHeaderId = $jeHeaderId;
		
		$args->reversedJeHeaderId = $reversedJeHeaderId;
		
		$this->send_base($args);
	}
	
	public function recv_getCuxGlJeBatchHeaderVByHeaderId(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getCuxGlJeBatchHeaderVByHeaderId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInterfaceBySrcHeaderId( $srcHeaderId, $operationCode, $sourceName){
		
		$this->send_getInterfaceBySrcHeaderId( $srcHeaderId, $operationCode, $sourceName);
		return $this->recv_getInterfaceBySrcHeaderId();
	}
	
	public function send_getInterfaceBySrcHeaderId( $srcHeaderId, $operationCode, $sourceName){
		
		$this->initInvocation("getInterfaceBySrcHeaderId");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getInterfaceBySrcHeaderId_args();
		
		$args->srcHeaderId = $srcHeaderId;
		
		$args->operationCode = $operationCode;
		
		$args->sourceName = $sourceName;
		
		$this->send_base($args);
	}
	
	public function recv_getInterfaceBySrcHeaderId(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getInterfaceBySrcHeaderId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInterfaceBySrcHeaderIdAndBookId( $srcHeaderId, $operationCode, $sourceName, $bookId){
		
		$this->send_getInterfaceBySrcHeaderIdAndBookId( $srcHeaderId, $operationCode, $sourceName, $bookId);
		return $this->recv_getInterfaceBySrcHeaderIdAndBookId();
	}
	
	public function send_getInterfaceBySrcHeaderIdAndBookId( $srcHeaderId, $operationCode, $sourceName, $bookId){
		
		$this->initInvocation("getInterfaceBySrcHeaderIdAndBookId");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getInterfaceBySrcHeaderIdAndBookId_args();
		
		$args->srcHeaderId = $srcHeaderId;
		
		$args->operationCode = $operationCode;
		
		$args->sourceName = $sourceName;
		
		$args->bookId = $bookId;
		
		$this->send_base($args);
	}
	
	public function recv_getInterfaceBySrcHeaderIdAndBookId(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getInterfaceBySrcHeaderIdAndBookId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getStatusBySrcHeaderId( $srcHeaderId, $operationCode, $sourceName){
		
		$this->send_getStatusBySrcHeaderId( $srcHeaderId, $operationCode, $sourceName);
		return $this->recv_getStatusBySrcHeaderId();
	}
	
	public function send_getStatusBySrcHeaderId( $srcHeaderId, $operationCode, $sourceName){
		
		$this->initInvocation("getStatusBySrcHeaderId");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getStatusBySrcHeaderId_args();
		
		$args->srcHeaderId = $srcHeaderId;
		
		$args->operationCode = $operationCode;
		
		$args->sourceName = $sourceName;
		
		$this->send_base($args);
	}
	
	public function recv_getStatusBySrcHeaderId(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_getStatusBySrcHeaderId_result();
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
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function insertGlVoucher( $vouchers){
		
		$this->send_insertGlVoucher( $vouchers);
		return $this->recv_insertGlVoucher();
	}
	
	public function send_insertGlVoucher( $vouchers){
		
		$this->initInvocation("insertGlVoucher");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_insertGlVoucher_args();
		
		$args->vouchers = $vouchers;
		
		$this->send_base($args);
	}
	
	public function recv_insertGlVoucher(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_insertGlVoucher_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveByTransaction( $vouchers){
		
		$this->send_saveByTransaction( $vouchers);
		return $this->recv_saveByTransaction();
	}
	
	public function send_saveByTransaction( $vouchers){
		
		$this->initInvocation("saveByTransaction");
		$args = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_saveByTransaction_args();
		
		$args->vouchers = $vouchers;
		
		$this->send_base($args);
	}
	
	public function recv_saveByTransaction(){
		
		$result = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherService_saveByTransaction_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class GlVoucherService_getBatchHeaderLineByRevId_args {
	
	static $_TSPEC;
	public $id = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->pageSize); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI64($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_getByGlSlLinkId_args {
	
	static $_TSPEC;
	public $glSlLinkId = null;
	public $glSlLinkTable = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'glSlLinkId'
			),
			2 => array(
			'var' => 'glSlLinkTable'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['glSlLinkId'])){
				
				$this->glSlLinkId = $vals['glSlLinkId'];
			}
			
			
			if (isset($vals['glSlLinkTable'])){
				
				$this->glSlLinkTable = $vals['glSlLinkTable'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->glSlLinkId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->glSlLinkTable);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('glSlLinkId');
		$xfer += $output->writeI64($this->glSlLinkId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('glSlLinkTable');
		$xfer += $output->writeString($this->glSlLinkTable);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_getByJeHeaderId_args {
	
	static $_TSPEC;
	public $jeHeaderId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'jeHeaderId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['jeHeaderId'])){
				
				$this->jeHeaderId = $vals['jeHeaderId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->jeHeaderId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('jeHeaderId');
		$xfer += $output->writeI64($this->jeHeaderId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_getBySrcHeaderId_args {
	
	static $_TSPEC;
	public $srcHeaderId = null;
	public $sourceName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'srcHeaderId'
			),
			2 => array(
			'var' => 'sourceName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['srcHeaderId'])){
				
				$this->srcHeaderId = $vals['srcHeaderId'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->srcHeaderId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sourceName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('srcHeaderId');
		$xfer += $output->writeString($this->srcHeaderId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceName');
		$xfer += $output->writeString($this->sourceName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_getBySrcHeaderIdAndCategoryName_args {
	
	static $_TSPEC;
	public $srcHeaderId = null;
	public $categoryName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'srcHeaderId'
			),
			2 => array(
			'var' => 'categoryName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['srcHeaderId'])){
				
				$this->srcHeaderId = $vals['srcHeaderId'];
			}
			
			
			if (isset($vals['categoryName'])){
				
				$this->categoryName = $vals['categoryName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->srcHeaderId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->categoryName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('srcHeaderId');
		$xfer += $output->writeString($this->srcHeaderId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('categoryName');
		$xfer += $output->writeString($this->categoryName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_getBySrcHeaderIdCategoryBookId_args {
	
	static $_TSPEC;
	public $srcHeaderId = null;
	public $categoryName = null;
	public $ledgerId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'srcHeaderId'
			),
			2 => array(
			'var' => 'categoryName'
			),
			3 => array(
			'var' => 'ledgerId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['srcHeaderId'])){
				
				$this->srcHeaderId = $vals['srcHeaderId'];
			}
			
			
			if (isset($vals['categoryName'])){
				
				$this->categoryName = $vals['categoryName'];
			}
			
			
			if (isset($vals['ledgerId'])){
				
				$this->ledgerId = $vals['ledgerId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->srcHeaderId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->categoryName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->ledgerId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('srcHeaderId');
		$xfer += $output->writeString($this->srcHeaderId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('categoryName');
		$xfer += $output->writeString($this->categoryName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->ledgerId !== null) {
			
			$xfer += $output->writeFieldBegin('ledgerId');
			$xfer += $output->writeI64($this->ledgerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_getCuxGlJeBatchHeaderVByHeaderId_args {
	
	static $_TSPEC;
	public $jeHeaderId = null;
	public $reversedJeHeaderId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'jeHeaderId'
			),
			2 => array(
			'var' => 'reversedJeHeaderId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['jeHeaderId'])){
				
				$this->jeHeaderId = $vals['jeHeaderId'];
			}
			
			
			if (isset($vals['reversedJeHeaderId'])){
				
				$this->reversedJeHeaderId = $vals['reversedJeHeaderId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->jeHeaderId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->reversedJeHeaderId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->jeHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('jeHeaderId');
			$xfer += $output->writeI64($this->jeHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reversedJeHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('reversedJeHeaderId');
			$xfer += $output->writeI64($this->reversedJeHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_getInterfaceBySrcHeaderId_args {
	
	static $_TSPEC;
	public $srcHeaderId = null;
	public $operationCode = null;
	public $sourceName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'srcHeaderId'
			),
			2 => array(
			'var' => 'operationCode'
			),
			3 => array(
			'var' => 'sourceName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['srcHeaderId'])){
				
				$this->srcHeaderId = $vals['srcHeaderId'];
			}
			
			
			if (isset($vals['operationCode'])){
				
				$this->operationCode = $vals['operationCode'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->srcHeaderId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operationCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sourceName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('srcHeaderId');
		$xfer += $output->writeString($this->srcHeaderId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operationCode');
		$xfer += $output->writeString($this->operationCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceName');
		$xfer += $output->writeString($this->sourceName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_getInterfaceBySrcHeaderIdAndBookId_args {
	
	static $_TSPEC;
	public $srcHeaderId = null;
	public $operationCode = null;
	public $sourceName = null;
	public $bookId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'srcHeaderId'
			),
			2 => array(
			'var' => 'operationCode'
			),
			3 => array(
			'var' => 'sourceName'
			),
			4 => array(
			'var' => 'bookId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['srcHeaderId'])){
				
				$this->srcHeaderId = $vals['srcHeaderId'];
			}
			
			
			if (isset($vals['operationCode'])){
				
				$this->operationCode = $vals['operationCode'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
			if (isset($vals['bookId'])){
				
				$this->bookId = $vals['bookId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->srcHeaderId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operationCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sourceName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->bookId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('srcHeaderId');
		$xfer += $output->writeString($this->srcHeaderId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operationCode');
		$xfer += $output->writeString($this->operationCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceName');
		$xfer += $output->writeString($this->sourceName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->bookId !== null) {
			
			$xfer += $output->writeFieldBegin('bookId');
			$xfer += $output->writeI64($this->bookId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_getStatusBySrcHeaderId_args {
	
	static $_TSPEC;
	public $srcHeaderId = null;
	public $operationCode = null;
	public $sourceName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'srcHeaderId'
			),
			2 => array(
			'var' => 'operationCode'
			),
			3 => array(
			'var' => 'sourceName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['srcHeaderId'])){
				
				$this->srcHeaderId = $vals['srcHeaderId'];
			}
			
			
			if (isset($vals['operationCode'])){
				
				$this->operationCode = $vals['operationCode'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->srcHeaderId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operationCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sourceName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('srcHeaderId');
		$xfer += $output->writeString($this->srcHeaderId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operationCode');
		$xfer += $output->writeString($this->operationCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceName');
		$xfer += $output->writeString($this->sourceName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_healthCheck_args {
	
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




class GlVoucherService_insertGlVoucher_args {
	
	static $_TSPEC;
	public $vouchers = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vouchers'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vouchers'])){
				
				$this->vouchers = $vals['vouchers'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->vouchers = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherModel();
					$elem0->read($input);
					
					$this->vouchers[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('vouchers');
		
		if (!is_array($this->vouchers)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->vouchers as $iter0){
			
			
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




class GlVoucherService_saveByTransaction_args {
	
	static $_TSPEC;
	public $vouchers = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vouchers'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vouchers'])){
				
				$this->vouchers = $vals['vouchers'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->vouchers = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherModel();
					$elem1->read($input);
					
					$this->vouchers[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('vouchers');
		
		if (!is_array($this->vouchers)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->vouchers as $iter0){
			
			
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




class GlVoucherService_getBatchHeaderLineByRevId_result {
	
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
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\fcs\osp\ebs\gl\service\CuxGlJeBatchHeaderVModel();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
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




class GlVoucherService_getByGlSlLinkId_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ebs\gl\service\GlJeHeadersModel();
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




class GlVoucherService_getByJeHeaderId_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ebs\gl\service\GlJeHeadersModel();
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




class GlVoucherService_getBySrcHeaderId_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ebs\gl\service\GlJeHeadersModel();
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




class GlVoucherService_getBySrcHeaderIdAndCategoryName_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ebs\gl\service\GlJeHeadersModel();
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




class GlVoucherService_getBySrcHeaderIdCategoryBookId_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ebs\gl\service\GlJeHeadersModel();
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




class GlVoucherService_getCuxGlJeBatchHeaderVByHeaderId_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ebs\gl\service\CuxGlJeBatchHeaderVModel();
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




class GlVoucherService_getInterfaceBySrcHeaderId_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherModel();
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




class GlVoucherService_getInterfaceBySrcHeaderIdAndBookId_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherModel();
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




class GlVoucherService_getStatusBySrcHeaderId_result {
	
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
			
			
			$this->success = new \com\vip\fcs\osp\ebs\gl\service\GlVoucherModel();
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




class GlVoucherService_healthCheck_result {
	
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




class GlVoucherService_insertGlVoucher_result {
	
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
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = '';
					$input->readString($key0);
					
					$val0 = '';
					$input->readString($val0);
					
					$this->success[$key0] = $val0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
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
			
			$output->writeMapBegin();
			foreach ($this->success as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class GlVoucherService_saveByTransaction_result {
	
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
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>