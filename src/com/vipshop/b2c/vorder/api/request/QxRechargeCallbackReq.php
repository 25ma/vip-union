<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vipshop\b2c\vorder\api\request;

class QxRechargeCallbackReq {
	
	static $_TSPEC;
	public $sid = null;
	public $ste = null;
	public $cid = null;
	public $pid = null;
	public $oid = null;
	public $pn = null;
	public $tf = null;
	public $fm = null;
	public $dm = null;
	public $info1 = null;
	public $info2 = null;
	public $Info3 = null;
	public $error = null;
	public $msg = null;
	public $sign = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sid'
			),
			2 => array(
			'var' => 'ste'
			),
			3 => array(
			'var' => 'cid'
			),
			4 => array(
			'var' => 'pid'
			),
			5 => array(
			'var' => 'oid'
			),
			6 => array(
			'var' => 'pn'
			),
			7 => array(
			'var' => 'tf'
			),
			8 => array(
			'var' => 'fm'
			),
			9 => array(
			'var' => 'dm'
			),
			10 => array(
			'var' => 'info1'
			),
			11 => array(
			'var' => 'info2'
			),
			12 => array(
			'var' => 'Info3'
			),
			13 => array(
			'var' => 'error'
			),
			14 => array(
			'var' => 'msg'
			),
			15 => array(
			'var' => 'sign'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sid'])){
				
				$this->sid = $vals['sid'];
			}
			
			
			if (isset($vals['ste'])){
				
				$this->ste = $vals['ste'];
			}
			
			
			if (isset($vals['cid'])){
				
				$this->cid = $vals['cid'];
			}
			
			
			if (isset($vals['pid'])){
				
				$this->pid = $vals['pid'];
			}
			
			
			if (isset($vals['oid'])){
				
				$this->oid = $vals['oid'];
			}
			
			
			if (isset($vals['pn'])){
				
				$this->pn = $vals['pn'];
			}
			
			
			if (isset($vals['tf'])){
				
				$this->tf = $vals['tf'];
			}
			
			
			if (isset($vals['fm'])){
				
				$this->fm = $vals['fm'];
			}
			
			
			if (isset($vals['dm'])){
				
				$this->dm = $vals['dm'];
			}
			
			
			if (isset($vals['info1'])){
				
				$this->info1 = $vals['info1'];
			}
			
			
			if (isset($vals['info2'])){
				
				$this->info2 = $vals['info2'];
			}
			
			
			if (isset($vals['Info3'])){
				
				$this->Info3 = $vals['Info3'];
			}
			
			
			if (isset($vals['error'])){
				
				$this->error = $vals['error'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['sign'])){
				
				$this->sign = $vals['sign'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QxRechargeCallbackReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sid);
				
			}
			
			
			
			
			if ("ste" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ste);
				
			}
			
			
			
			
			if ("cid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cid);
				
			}
			
			
			
			
			if ("pid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pid);
				
			}
			
			
			
			
			if ("oid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oid);
				
			}
			
			
			
			
			if ("pn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pn);
				
			}
			
			
			
			
			if ("tf" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tf);
				
			}
			
			
			
			
			if ("fm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fm);
				
			}
			
			
			
			
			if ("dm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dm);
				
			}
			
			
			
			
			if ("info1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->info1);
				
			}
			
			
			
			
			if ("info2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->info2);
				
			}
			
			
			
			
			if ("Info3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->Info3);
				
			}
			
			
			
			
			if ("error" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->error);
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("sign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sign);
				
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
		
		if($this->sid !== null) {
			
			$xfer += $output->writeFieldBegin('sid');
			$xfer += $output->writeString($this->sid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ste !== null) {
			
			$xfer += $output->writeFieldBegin('ste');
			$xfer += $output->writeString($this->ste);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cid !== null) {
			
			$xfer += $output->writeFieldBegin('cid');
			$xfer += $output->writeString($this->cid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pid !== null) {
			
			$xfer += $output->writeFieldBegin('pid');
			$xfer += $output->writeString($this->pid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oid !== null) {
			
			$xfer += $output->writeFieldBegin('oid');
			$xfer += $output->writeString($this->oid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pn !== null) {
			
			$xfer += $output->writeFieldBegin('pn');
			$xfer += $output->writeString($this->pn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tf !== null) {
			
			$xfer += $output->writeFieldBegin('tf');
			$xfer += $output->writeString($this->tf);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fm !== null) {
			
			$xfer += $output->writeFieldBegin('fm');
			$xfer += $output->writeString($this->fm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dm !== null) {
			
			$xfer += $output->writeFieldBegin('dm');
			$xfer += $output->writeString($this->dm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->info1 !== null) {
			
			$xfer += $output->writeFieldBegin('info1');
			$xfer += $output->writeString($this->info1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->info2 !== null) {
			
			$xfer += $output->writeFieldBegin('info2');
			$xfer += $output->writeString($this->info2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->Info3 !== null) {
			
			$xfer += $output->writeFieldBegin('Info3');
			$xfer += $output->writeString($this->Info3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->error !== null) {
			
			$xfer += $output->writeFieldBegin('error');
			$xfer += $output->writeString($this->error);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sign !== null) {
			
			$xfer += $output->writeFieldBegin('sign');
			$xfer += $output->writeString($this->sign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>