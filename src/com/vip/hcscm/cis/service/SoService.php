<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;
interface SoServiceIf{
	
	
	public function getAllocatedQty(\com\vip\hcscm\cis\service\GetAllocatedQtyReq $req);
	
	public function getSeekResult(\com\vip\hcscm\cis\service\GetSeekResultReq $req);
	
	public function healthCheck();
	
	public function seekRdc(\com\vip\hcscm\cis\service\SeekRdcReq $req);
	
	public function soAllocate(\com\vip\hcscm\cis\service\SoAllocateReq $req);
	
	public function submitSo(\com\vip\hcscm\cis\service\SubmitSoReq $req);
	
	public function updateSoInfoDetailOutStockStatus(\com\vip\hcscm\cis\service\UpdateSoInfoDetailOutStockStatusReq $req);
	
}

class _SoServiceClient extends \Osp\Base\OspStub implements \com\vip\hcscm\cis\service\SoServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.hcscm.cis.service.SoService", "1.0.0");
	}
	
	
	public function getAllocatedQty(\com\vip\hcscm\cis\service\GetAllocatedQtyReq $req){
		
		$this->send_getAllocatedQty( $req);
		return $this->recv_getAllocatedQty();
	}
	
	public function send_getAllocatedQty(\com\vip\hcscm\cis\service\GetAllocatedQtyReq $req){
		
		$this->initInvocation("getAllocatedQty");
		$args = new \com\vip\hcscm\cis\service\SoService_getAllocatedQty_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_getAllocatedQty(){
		
		$result = new \com\vip\hcscm\cis\service\SoService_getAllocatedQty_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSeekResult(\com\vip\hcscm\cis\service\GetSeekResultReq $req){
		
		$this->send_getSeekResult( $req);
		return $this->recv_getSeekResult();
	}
	
	public function send_getSeekResult(\com\vip\hcscm\cis\service\GetSeekResultReq $req){
		
		$this->initInvocation("getSeekResult");
		$args = new \com\vip\hcscm\cis\service\SoService_getSeekResult_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_getSeekResult(){
		
		$result = new \com\vip\hcscm\cis\service\SoService_getSeekResult_result();
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
		$args = new \com\vip\hcscm\cis\service\SoService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\hcscm\cis\service\SoService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function seekRdc(\com\vip\hcscm\cis\service\SeekRdcReq $req){
		
		$this->send_seekRdc( $req);
		return $this->recv_seekRdc();
	}
	
	public function send_seekRdc(\com\vip\hcscm\cis\service\SeekRdcReq $req){
		
		$this->initInvocation("seekRdc");
		$args = new \com\vip\hcscm\cis\service\SoService_seekRdc_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_seekRdc(){
		
		$result = new \com\vip\hcscm\cis\service\SoService_seekRdc_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function soAllocate(\com\vip\hcscm\cis\service\SoAllocateReq $req){
		
		$this->send_soAllocate( $req);
		return $this->recv_soAllocate();
	}
	
	public function send_soAllocate(\com\vip\hcscm\cis\service\SoAllocateReq $req){
		
		$this->initInvocation("soAllocate");
		$args = new \com\vip\hcscm\cis\service\SoService_soAllocate_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_soAllocate(){
		
		$result = new \com\vip\hcscm\cis\service\SoService_soAllocate_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function submitSo(\com\vip\hcscm\cis\service\SubmitSoReq $req){
		
		$this->send_submitSo( $req);
		return $this->recv_submitSo();
	}
	
	public function send_submitSo(\com\vip\hcscm\cis\service\SubmitSoReq $req){
		
		$this->initInvocation("submitSo");
		$args = new \com\vip\hcscm\cis\service\SoService_submitSo_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_submitSo(){
		
		$result = new \com\vip\hcscm\cis\service\SoService_submitSo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateSoInfoDetailOutStockStatus(\com\vip\hcscm\cis\service\UpdateSoInfoDetailOutStockStatusReq $req){
		
		$this->send_updateSoInfoDetailOutStockStatus( $req);
		return $this->recv_updateSoInfoDetailOutStockStatus();
	}
	
	public function send_updateSoInfoDetailOutStockStatus(\com\vip\hcscm\cis\service\UpdateSoInfoDetailOutStockStatusReq $req){
		
		$this->initInvocation("updateSoInfoDetailOutStockStatus");
		$args = new \com\vip\hcscm\cis\service\SoService_updateSoInfoDetailOutStockStatus_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_updateSoInfoDetailOutStockStatus(){
		
		$result = new \com\vip\hcscm\cis\service\SoService_updateSoInfoDetailOutStockStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class SoService_getAllocatedQty_args {
	
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
			
			
			$this->req = new \com\vip\hcscm\cis\service\GetAllocatedQtyReq();
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




class SoService_getSeekResult_args {
	
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
			
			
			$this->req = new \com\vip\hcscm\cis\service\GetSeekResultReq();
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




class SoService_healthCheck_args {
	
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




class SoService_seekRdc_args {
	
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
			
			
			$this->req = new \com\vip\hcscm\cis\service\SeekRdcReq();
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




class SoService_soAllocate_args {
	
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
			
			
			$this->req = new \com\vip\hcscm\cis\service\SoAllocateReq();
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




class SoService_submitSo_args {
	
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
			
			
			$this->req = new \com\vip\hcscm\cis\service\SubmitSoReq();
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




class SoService_updateSoInfoDetailOutStockStatus_args {
	
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
			
			
			$this->req = new \com\vip\hcscm\cis\service\UpdateSoInfoDetailOutStockStatusReq();
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




class SoService_getAllocatedQty_result {
	
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
					
					$elem0 = new \com\vip\hcscm\cis\service\GetAllocatedQtyResp();
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




class SoService_getSeekResult_result {
	
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
					
					$key1 = '';
					$input->readString($key1);
					
					$val1 = null;
					
					$val1 = array();
					$input->readMapBegin();
					while(true){
						
						try{
							
							$key2 = 0;
							$input->readI64($key2); 
							
							$val2 = null;
							
							$val2 = array();
							$_size3 = 0;
							$input->readListBegin();
							while(true){
								
								try{
									
									$elem3 = null;
									
									$elem3 = new \com\vip\hcscm\cis\service\GetSeekResultResp();
									$elem3->read($input);
									
									$val2[$_size3++] = $elem3;
								}
								catch(\Exception $e){
									
									break;
								}
							}
							
							$input->readListEnd();
							
							$val1[$key2] = $val2;
						}
						catch(\Exception $e){
							
							break;
						}
					}
					
					$input->readMapEnd();
					
					$this->success[$key1] = $val1;
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
				
				
				if (!is_array($viter0)){
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$output->writeMapBegin();
				foreach ($viter0 as $kiter1 => $viter1){
					
					$xfer += $output->writeI64($kiter1);
					
					
					if (!is_array($viter1)){
						
						throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
					}
					
					$output->writeListBegin();
					foreach ($viter1 as $iter2){
						
						
						if (!is_object($iter2)) {
							
							throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
						}
						
						$xfer += $iter2->write($output);
						
					}
					
					$output->writeListEnd();
					
				}
				
				$output->writeMapEnd();
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SoService_healthCheck_result {
	
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




class SoService_seekRdc_result {
	
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
			
			
			$this->success = new \com\vip\hcscm\cis\service\SeekRdcResp();
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




class SoService_soAllocate_result {
	
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
			
			
			$this->success = new \com\vip\hcscm\cis\service\SoAllocateResp();
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




class SoService_submitSo_result {
	
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
			
			
			$this->success = new \com\vip\hcscm\cis\service\CommonResp();
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




class SoService_updateSoInfoDetailOutStockStatus_result {
	
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
			
			
			$this->success = new \com\vip\hcscm\cis\service\CommonResp();
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