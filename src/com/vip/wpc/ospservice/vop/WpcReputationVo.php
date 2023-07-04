<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcReputationVo {
	
	static $_TSPEC;
	public $userNick = null;
	public $avatar = null;
	public $sizeId = null;
	public $sizeName = null;
	public $color = null;
	public $isEssence = null;
	public $content = null;
	public $videoThumbnail = null;
	public $imageList = null;
	public $videoUrl = null;
	public $postTime = null;
	public $tagList = null;
	public $satisfiedStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12200 => array(
			'var' => 'userNick'
			),
			12201 => array(
			'var' => 'avatar'
			),
			12003 => array(
			'var' => 'sizeId'
			),
			12004 => array(
			'var' => 'sizeName'
			),
			12005 => array(
			'var' => 'color'
			),
			12006 => array(
			'var' => 'isEssence'
			),
			12007 => array(
			'var' => 'content'
			),
			12008 => array(
			'var' => 'videoThumbnail'
			),
			12009 => array(
			'var' => 'imageList'
			),
			12010 => array(
			'var' => 'videoUrl'
			),
			12011 => array(
			'var' => 'postTime'
			),
			12012 => array(
			'var' => 'tagList'
			),
			12013 => array(
			'var' => 'satisfiedStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userNick'])){
				
				$this->userNick = $vals['userNick'];
			}
			
			
			if (isset($vals['avatar'])){
				
				$this->avatar = $vals['avatar'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['sizeName'])){
				
				$this->sizeName = $vals['sizeName'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['isEssence'])){
				
				$this->isEssence = $vals['isEssence'];
			}
			
			
			if (isset($vals['content'])){
				
				$this->content = $vals['content'];
			}
			
			
			if (isset($vals['videoThumbnail'])){
				
				$this->videoThumbnail = $vals['videoThumbnail'];
			}
			
			
			if (isset($vals['imageList'])){
				
				$this->imageList = $vals['imageList'];
			}
			
			
			if (isset($vals['videoUrl'])){
				
				$this->videoUrl = $vals['videoUrl'];
			}
			
			
			if (isset($vals['postTime'])){
				
				$this->postTime = $vals['postTime'];
			}
			
			
			if (isset($vals['tagList'])){
				
				$this->tagList = $vals['tagList'];
			}
			
			
			if (isset($vals['satisfiedStatus'])){
				
				$this->satisfiedStatus = $vals['satisfiedStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcReputationVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userNick" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userNick);
				
			}
			
			
			
			
			if ("avatar" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->avatar);
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeId);
				
			}
			
			
			
			
			if ("sizeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeName);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("isEssence" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isEssence); 
				
			}
			
			
			
			
			if ("content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->content);
				
			}
			
			
			
			
			if ("videoThumbnail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->videoThumbnail);
				
			}
			
			
			
			
			if ("imageList" == $schemeField){
				
				$needSkip = false;
				
				$this->imageList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->imageList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("videoUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->videoUrl);
				
			}
			
			
			
			
			if ("postTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postTime);
				
			}
			
			
			
			
			if ("tagList" == $schemeField){
				
				$needSkip = false;
				
				$this->tagList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->tagList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("satisfiedStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->satisfiedStatus); 
				
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
		
		if($this->userNick !== null) {
			
			$xfer += $output->writeFieldBegin('userNick');
			$xfer += $output->writeString($this->userNick);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->avatar !== null) {
			
			$xfer += $output->writeFieldBegin('avatar');
			$xfer += $output->writeString($this->avatar);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeString($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeName !== null) {
			
			$xfer += $output->writeFieldBegin('sizeName');
			$xfer += $output->writeString($this->sizeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isEssence');
		$xfer += $output->writeI32($this->isEssence);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->content !== null) {
			
			$xfer += $output->writeFieldBegin('content');
			$xfer += $output->writeString($this->content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->videoThumbnail !== null) {
			
			$xfer += $output->writeFieldBegin('videoThumbnail');
			$xfer += $output->writeString($this->videoThumbnail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageList !== null) {
			
			$xfer += $output->writeFieldBegin('imageList');
			
			if (!is_array($this->imageList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->imageList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->videoUrl !== null) {
			
			$xfer += $output->writeFieldBegin('videoUrl');
			$xfer += $output->writeString($this->videoUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postTime !== null) {
			
			$xfer += $output->writeFieldBegin('postTime');
			$xfer += $output->writeString($this->postTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagList !== null) {
			
			$xfer += $output->writeFieldBegin('tagList');
			
			if (!is_array($this->tagList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->satisfiedStatus !== null) {
			
			$xfer += $output->writeFieldBegin('satisfiedStatus');
			$xfer += $output->writeI32($this->satisfiedStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>