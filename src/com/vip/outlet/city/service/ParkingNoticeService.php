<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\outlet\city\service;
interface ParkingNoticeServiceIf{
	
	
	public function entrance( $carNo, $smallZoneCode, $type, $inTime, $outTime, $amount);
	
	public function healthCheck();
	
}

class _ParkingNoticeServiceClient extends \Osp\Base\OspStub implements \com\vip\outlet\city\service\ParkingNoticeServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.outlet.city.service.ParkingNoticeService", "1.0.0");
	}
	
	
	public function entrance( $carNo, $smallZoneCode, $type, $inTime, $outTime, $amount){
		
		$this->send_entrance( $carNo, $smallZoneCode, $type, $inTime, $outTime, $amount);
		return $this->recv_entrance();
	}
	
	public function send_entrance( $carNo, $smallZoneCode, $type, $inTime, $outTime, $amount){
		
		$this->initInvocation("entrance");
		$args = new \com\vip\outlet\city\service\ParkingNoticeService_entrance_args();
		
		$args->carNo = $carNo;
		
		$args->smallZoneCode = $smallZoneCode;
		
		$args->type = $type;
		
		$args->inTime = $inTime;
		
		$args->outTime = $outTime;
		
		$args->amount = $amount;
		
		$this->send_base($args);
	}
	
	public function recv_entrance(){
		
		$result = new \com\vip\outlet\city\service\ParkingNoticeService_entrance_result();
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
		$args = new \com\vip\outlet\city\service\ParkingNoticeService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\outlet\city\service\ParkingNoticeService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ParkingNoticeService_entrance_args {
	
	static $_TSPEC;
	public $carNo = null;
	public $smallZoneCode = null;
	public $type = null;
	public $inTime = null;
	public $outTime = null;
	public $amount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carNo'
			),
			2 => array(
			'var' => 'smallZoneCode'
			),
			3 => array(
			'var' => 'type'
			),
			4 => array(
			'var' => 'inTime'
			),
			5 => array(
			'var' => 'outTime'
			),
			6 => array(
			'var' => 'amount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carNo'])){
				
				$this->carNo = $vals['carNo'];
			}
			
			
			if (isset($vals['smallZoneCode'])){
				
				$this->smallZoneCode = $vals['smallZoneCode'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['inTime'])){
				
				$this->inTime = $vals['inTime'];
			}
			
			
			if (isset($vals['outTime'])){
				
				$this->outTime = $vals['outTime'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->carNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->smallZoneCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->type); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->inTime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->outTime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->amount);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('carNo');
		$xfer += $output->writeString($this->carNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('smallZoneCode');
		$xfer += $output->writeString($this->smallZoneCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeByte($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('inTime');
		$xfer += $output->writeI64($this->inTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->outTime !== null) {
			
			$xfer += $output->writeFieldBegin('outTime');
			$xfer += $output->writeI64($this->outTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeString($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ParkingNoticeService_healthCheck_args {
	
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




class ParkingNoticeService_entrance_result {
	
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
			
			
			$this->success = new \com\vip\outlet\city\service\EntranceResp();
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




class ParkingNoticeService_healthCheck_result {
	
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