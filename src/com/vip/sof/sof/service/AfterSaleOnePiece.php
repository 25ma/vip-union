<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleOnePiece {
	
	static $_TSPEC;
	public $onePieceId = null;
	public $auditFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'onePieceId'
			),
			2 => array(
			'var' => 'auditFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['onePieceId'])){
				
				$this->onePieceId = $vals['onePieceId'];
			}
			
			
			if (isset($vals['auditFlag'])){
				
				$this->auditFlag = $vals['auditFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleOnePiece';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("onePieceId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onePieceId); 
				
			}
			
			
			
			
			if ("auditFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->auditFlag); 
				
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
		
		if($this->onePieceId !== null) {
			
			$xfer += $output->writeFieldBegin('onePieceId');
			$xfer += $output->writeI64($this->onePieceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditFlag !== null) {
			
			$xfer += $output->writeFieldBegin('auditFlag');
			$xfer += $output->writeByte($this->auditFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>