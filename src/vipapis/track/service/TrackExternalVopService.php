<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\track\service;
interface TrackExternalVopServiceIf{
	
	
	public function acceptNJVTrack( $tracking_id, $source_order_id, $status, $timestamp, $comment,\vipapis\track\service\LinehaulInformation $linehaul_information);
	
	public function healthCheck();
	
}

class _TrackExternalVopServiceClient extends \Osp\Base\OspStub implements \vipapis\track\service\TrackExternalVopServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.track.service.TrackExternalVopService", "1.0.0");
	}
	
	
	public function acceptNJVTrack( $tracking_id, $source_order_id, $status, $timestamp, $comment,\vipapis\track\service\LinehaulInformation $linehaul_information){
		
		$this->send_acceptNJVTrack( $tracking_id, $source_order_id, $status, $timestamp, $comment, $linehaul_information);
		return $this->recv_acceptNJVTrack();
	}
	
	public function send_acceptNJVTrack( $tracking_id, $source_order_id, $status, $timestamp, $comment,\vipapis\track\service\LinehaulInformation $linehaul_information){
		
		$this->initInvocation("acceptNJVTrack");
		$args = new \vipapis\track\service\TrackExternalVopService_acceptNJVTrack_args();
		
		$args->tracking_id = $tracking_id;
		
		$args->source_order_id = $source_order_id;
		
		$args->status = $status;
		
		$args->timestamp = $timestamp;
		
		$args->comment = $comment;
		
		$args->linehaul_information = $linehaul_information;
		
		$this->send_base($args);
	}
	
	public function recv_acceptNJVTrack(){
		
		$result = new \vipapis\track\service\TrackExternalVopService_acceptNJVTrack_result();
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
		$args = new \vipapis\track\service\TrackExternalVopService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\track\service\TrackExternalVopService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class TrackExternalVopService_acceptNJVTrack_args {
	
	static $_TSPEC;
	public $tracking_id = null;
	public $source_order_id = null;
	public $status = null;
	public $timestamp = null;
	public $comment = null;
	public $linehaul_information = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tracking_id'
			),
			2 => array(
			'var' => 'source_order_id'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'timestamp'
			),
			5 => array(
			'var' => 'comment'
			),
			6 => array(
			'var' => 'linehaul_information'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tracking_id'])){
				
				$this->tracking_id = $vals['tracking_id'];
			}
			
			
			if (isset($vals['source_order_id'])){
				
				$this->source_order_id = $vals['source_order_id'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['timestamp'])){
				
				$this->timestamp = $vals['timestamp'];
			}
			
			
			if (isset($vals['comment'])){
				
				$this->comment = $vals['comment'];
			}
			
			
			if (isset($vals['linehaul_information'])){
				
				$this->linehaul_information = $vals['linehaul_information'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->tracking_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->source_order_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->status);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->timestamp);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->comment);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->linehaul_information = new \vipapis\track\service\LinehaulInformation();
			$this->linehaul_information->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('tracking_id');
		$xfer += $output->writeString($this->tracking_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->source_order_id !== null) {
			
			$xfer += $output->writeFieldBegin('source_order_id');
			$xfer += $output->writeString($this->source_order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeString($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('timestamp');
		$xfer += $output->writeString($this->timestamp);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('comment');
		$xfer += $output->writeString($this->comment);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->linehaul_information !== null) {
			
			$xfer += $output->writeFieldBegin('linehaul_information');
			
			if (!is_object($this->linehaul_information)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->linehaul_information->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TrackExternalVopService_healthCheck_args {
	
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




class TrackExternalVopService_acceptNJVTrack_result {
	
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
			
			
			$this->success = new \vipapis\track\service\AcceptNJVTrackResp();
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




class TrackExternalVopService_healthCheck_result {
	
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