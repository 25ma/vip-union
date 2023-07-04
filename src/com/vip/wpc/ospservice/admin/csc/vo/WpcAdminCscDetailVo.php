<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\admin\csc\vo;

class WpcAdminCscDetailVo {
	
	static $_TSPEC;
	public $recordId = null;
	public $parentCscNo = null;
	public $childCscNo = null;
	public $createTIme = null;
	public $orderSn = null;
	public $goodsSn = null;
	public $goodsName = null;
	public $cate1Id = null;
	public $cate1Name = null;
	public $cate2Id = null;
	public $cate2Name = null;
	public $cate3Id = null;
	public $cate3Name = null;
	public $questionDesc = null;
	public $appendFiles = null;
	public $cscProcess = null;
	public $lastReplyContent = null;
	public $status = null;
	public $csName = null;
	public $cscStartStatus = null;
	public $thirdChannel = null;
	public $createUserId = null;
	public $createUserName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			10901 => array(
			'var' => 'recordId'
			),
			10902 => array(
			'var' => 'parentCscNo'
			),
			10903 => array(
			'var' => 'childCscNo'
			),
			10904 => array(
			'var' => 'createTIme'
			),
			10905 => array(
			'var' => 'orderSn'
			),
			10906 => array(
			'var' => 'goodsSn'
			),
			10907 => array(
			'var' => 'goodsName'
			),
			10908 => array(
			'var' => 'cate1Id'
			),
			10909 => array(
			'var' => 'cate1Name'
			),
			10910 => array(
			'var' => 'cate2Id'
			),
			10911 => array(
			'var' => 'cate2Name'
			),
			10912 => array(
			'var' => 'cate3Id'
			),
			10913 => array(
			'var' => 'cate3Name'
			),
			10914 => array(
			'var' => 'questionDesc'
			),
			10915 => array(
			'var' => 'appendFiles'
			),
			10916 => array(
			'var' => 'cscProcess'
			),
			10917 => array(
			'var' => 'lastReplyContent'
			),
			10918 => array(
			'var' => 'status'
			),
			10919 => array(
			'var' => 'csName'
			),
			10920 => array(
			'var' => 'cscStartStatus'
			),
			10921 => array(
			'var' => 'thirdChannel'
			),
			10922 => array(
			'var' => 'createUserId'
			),
			10923 => array(
			'var' => 'createUserName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['recordId'])){
				
				$this->recordId = $vals['recordId'];
			}
			
			
			if (isset($vals['parentCscNo'])){
				
				$this->parentCscNo = $vals['parentCscNo'];
			}
			
			
			if (isset($vals['childCscNo'])){
				
				$this->childCscNo = $vals['childCscNo'];
			}
			
			
			if (isset($vals['createTIme'])){
				
				$this->createTIme = $vals['createTIme'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['goodsSn'])){
				
				$this->goodsSn = $vals['goodsSn'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['cate1Id'])){
				
				$this->cate1Id = $vals['cate1Id'];
			}
			
			
			if (isset($vals['cate1Name'])){
				
				$this->cate1Name = $vals['cate1Name'];
			}
			
			
			if (isset($vals['cate2Id'])){
				
				$this->cate2Id = $vals['cate2Id'];
			}
			
			
			if (isset($vals['cate2Name'])){
				
				$this->cate2Name = $vals['cate2Name'];
			}
			
			
			if (isset($vals['cate3Id'])){
				
				$this->cate3Id = $vals['cate3Id'];
			}
			
			
			if (isset($vals['cate3Name'])){
				
				$this->cate3Name = $vals['cate3Name'];
			}
			
			
			if (isset($vals['questionDesc'])){
				
				$this->questionDesc = $vals['questionDesc'];
			}
			
			
			if (isset($vals['appendFiles'])){
				
				$this->appendFiles = $vals['appendFiles'];
			}
			
			
			if (isset($vals['cscProcess'])){
				
				$this->cscProcess = $vals['cscProcess'];
			}
			
			
			if (isset($vals['lastReplyContent'])){
				
				$this->lastReplyContent = $vals['lastReplyContent'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['csName'])){
				
				$this->csName = $vals['csName'];
			}
			
			
			if (isset($vals['cscStartStatus'])){
				
				$this->cscStartStatus = $vals['cscStartStatus'];
			}
			
			
			if (isset($vals['thirdChannel'])){
				
				$this->thirdChannel = $vals['thirdChannel'];
			}
			
			
			if (isset($vals['createUserId'])){
				
				$this->createUserId = $vals['createUserId'];
			}
			
			
			if (isset($vals['createUserName'])){
				
				$this->createUserName = $vals['createUserName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcAdminCscDetailVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("recordId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->recordId); 
				
			}
			
			
			
			
			if ("parentCscNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentCscNo);
				
			}
			
			
			
			
			if ("childCscNo" == $schemeField){
				
				$needSkip = false;
				
				$this->childCscNo = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\wpc\ospservice\admin\csc\vo\WpcAdminChildCscVo();
						$elem0->read($input);
						
						$this->childCscNo[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("createTIme" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTIme);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("goodsSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsSn);
				
			}
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("cate1Id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cate1Id);
				
			}
			
			
			
			
			if ("cate1Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cate1Name);
				
			}
			
			
			
			
			if ("cate2Id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cate2Id);
				
			}
			
			
			
			
			if ("cate2Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cate2Name);
				
			}
			
			
			
			
			if ("cate3Id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cate3Id);
				
			}
			
			
			
			
			if ("cate3Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cate3Name);
				
			}
			
			
			
			
			if ("questionDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->questionDesc);
				
			}
			
			
			
			
			if ("appendFiles" == $schemeField){
				
				$needSkip = false;
				
				$this->appendFiles = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\wpc\ospservice\admin\csc\request\WpcAdminAppendFilesRequest();
						$elem1->read($input);
						
						$this->appendFiles[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("cscProcess" == $schemeField){
				
				$needSkip = false;
				
				$this->cscProcess = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\wpc\ospservice\admin\csc\vo\WpcAdminCscProcessVo();
						$elem2->read($input);
						
						$this->cscProcess[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("lastReplyContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lastReplyContent);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("csName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->csName);
				
			}
			
			
			
			
			if ("cscStartStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cscStartStatus); 
				
			}
			
			
			
			
			if ("thirdChannel" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->thirdChannel); 
				
			}
			
			
			
			
			if ("createUserId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createUserId); 
				
			}
			
			
			
			
			if ("createUserName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createUserName);
				
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
		
		if($this->recordId !== null) {
			
			$xfer += $output->writeFieldBegin('recordId');
			$xfer += $output->writeI64($this->recordId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentCscNo !== null) {
			
			$xfer += $output->writeFieldBegin('parentCscNo');
			$xfer += $output->writeString($this->parentCscNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->childCscNo !== null) {
			
			$xfer += $output->writeFieldBegin('childCscNo');
			
			if (!is_array($this->childCscNo)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->childCscNo as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTIme !== null) {
			
			$xfer += $output->writeFieldBegin('createTIme');
			$xfer += $output->writeString($this->createTIme);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsSn !== null) {
			
			$xfer += $output->writeFieldBegin('goodsSn');
			$xfer += $output->writeString($this->goodsSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cate1Id !== null) {
			
			$xfer += $output->writeFieldBegin('cate1Id');
			$xfer += $output->writeString($this->cate1Id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cate1Name !== null) {
			
			$xfer += $output->writeFieldBegin('cate1Name');
			$xfer += $output->writeString($this->cate1Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cate2Id !== null) {
			
			$xfer += $output->writeFieldBegin('cate2Id');
			$xfer += $output->writeString($this->cate2Id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cate2Name !== null) {
			
			$xfer += $output->writeFieldBegin('cate2Name');
			$xfer += $output->writeString($this->cate2Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cate3Id !== null) {
			
			$xfer += $output->writeFieldBegin('cate3Id');
			$xfer += $output->writeString($this->cate3Id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cate3Name !== null) {
			
			$xfer += $output->writeFieldBegin('cate3Name');
			$xfer += $output->writeString($this->cate3Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->questionDesc !== null) {
			
			$xfer += $output->writeFieldBegin('questionDesc');
			$xfer += $output->writeString($this->questionDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appendFiles !== null) {
			
			$xfer += $output->writeFieldBegin('appendFiles');
			
			if (!is_array($this->appendFiles)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->appendFiles as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cscProcess !== null) {
			
			$xfer += $output->writeFieldBegin('cscProcess');
			
			if (!is_array($this->cscProcess)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->cscProcess as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastReplyContent !== null) {
			
			$xfer += $output->writeFieldBegin('lastReplyContent');
			$xfer += $output->writeString($this->lastReplyContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->csName !== null) {
			
			$xfer += $output->writeFieldBegin('csName');
			$xfer += $output->writeString($this->csName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cscStartStatus !== null) {
			
			$xfer += $output->writeFieldBegin('cscStartStatus');
			$xfer += $output->writeI32($this->cscStartStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdChannel !== null) {
			
			$xfer += $output->writeFieldBegin('thirdChannel');
			$xfer += $output->writeI32($this->thirdChannel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createUserId !== null) {
			
			$xfer += $output->writeFieldBegin('createUserId');
			$xfer += $output->writeI64($this->createUserId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createUserName !== null) {
			
			$xfer += $output->writeFieldBegin('createUserName');
			$xfer += $output->writeString($this->createUserName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>