<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\vreturn\api\vo\response;

class ReturnDiffInterDetailRespModel {
	
	static $_TSPEC;
	public $po_no = null;
	public $schedule_id = null;
	public $is_complete_name = null;
	public $box_id = null;
	public $item_sku = null;
	public $order_sn = null;
	public $is_anti_theft_code_name = null;
	public $anti_theft_code = null;
	public $anti_theft_code_used_by_str = null;
	public $anti_theft_code_approval_remark = null;
	public $no_unique_code_reason_desc = null;
	public $record_quantity = null;
	public $real_quantity = null;
	public $diff_quantity = null;
	public $pay_quantity = null;
	public $price = null;
	public $diff_amount = null;
	public $vendor_feedback_name = null;
	public $is_return_name = null;
	public $vendor_note = null;
	public $sku_img = null;
	public $return_price_discount = null;
	public $return_diff_amount = null;
	public $status = null;
	public $status_note = null;
	public $video_url = null;
	public $status_code = null;
	public $rv_difference_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_no'
			),
			2 => array(
			'var' => 'schedule_id'
			),
			3 => array(
			'var' => 'is_complete_name'
			),
			4 => array(
			'var' => 'box_id'
			),
			5 => array(
			'var' => 'item_sku'
			),
			6 => array(
			'var' => 'order_sn'
			),
			7 => array(
			'var' => 'is_anti_theft_code_name'
			),
			8 => array(
			'var' => 'anti_theft_code'
			),
			9 => array(
			'var' => 'anti_theft_code_used_by_str'
			),
			10 => array(
			'var' => 'anti_theft_code_approval_remark'
			),
			11 => array(
			'var' => 'no_unique_code_reason_desc'
			),
			12 => array(
			'var' => 'record_quantity'
			),
			13 => array(
			'var' => 'real_quantity'
			),
			14 => array(
			'var' => 'diff_quantity'
			),
			15 => array(
			'var' => 'pay_quantity'
			),
			16 => array(
			'var' => 'price'
			),
			17 => array(
			'var' => 'diff_amount'
			),
			18 => array(
			'var' => 'vendor_feedback_name'
			),
			19 => array(
			'var' => 'is_return_name'
			),
			20 => array(
			'var' => 'vendor_note'
			),
			21 => array(
			'var' => 'sku_img'
			),
			22 => array(
			'var' => 'return_price_discount'
			),
			23 => array(
			'var' => 'return_diff_amount'
			),
			24 => array(
			'var' => 'status'
			),
			25 => array(
			'var' => 'status_note'
			),
			26 => array(
			'var' => 'video_url'
			),
			27 => array(
			'var' => 'status_code'
			),
			28 => array(
			'var' => 'rv_difference_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['is_complete_name'])){
				
				$this->is_complete_name = $vals['is_complete_name'];
			}
			
			
			if (isset($vals['box_id'])){
				
				$this->box_id = $vals['box_id'];
			}
			
			
			if (isset($vals['item_sku'])){
				
				$this->item_sku = $vals['item_sku'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['is_anti_theft_code_name'])){
				
				$this->is_anti_theft_code_name = $vals['is_anti_theft_code_name'];
			}
			
			
			if (isset($vals['anti_theft_code'])){
				
				$this->anti_theft_code = $vals['anti_theft_code'];
			}
			
			
			if (isset($vals['anti_theft_code_used_by_str'])){
				
				$this->anti_theft_code_used_by_str = $vals['anti_theft_code_used_by_str'];
			}
			
			
			if (isset($vals['anti_theft_code_approval_remark'])){
				
				$this->anti_theft_code_approval_remark = $vals['anti_theft_code_approval_remark'];
			}
			
			
			if (isset($vals['no_unique_code_reason_desc'])){
				
				$this->no_unique_code_reason_desc = $vals['no_unique_code_reason_desc'];
			}
			
			
			if (isset($vals['record_quantity'])){
				
				$this->record_quantity = $vals['record_quantity'];
			}
			
			
			if (isset($vals['real_quantity'])){
				
				$this->real_quantity = $vals['real_quantity'];
			}
			
			
			if (isset($vals['diff_quantity'])){
				
				$this->diff_quantity = $vals['diff_quantity'];
			}
			
			
			if (isset($vals['pay_quantity'])){
				
				$this->pay_quantity = $vals['pay_quantity'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['diff_amount'])){
				
				$this->diff_amount = $vals['diff_amount'];
			}
			
			
			if (isset($vals['vendor_feedback_name'])){
				
				$this->vendor_feedback_name = $vals['vendor_feedback_name'];
			}
			
			
			if (isset($vals['is_return_name'])){
				
				$this->is_return_name = $vals['is_return_name'];
			}
			
			
			if (isset($vals['vendor_note'])){
				
				$this->vendor_note = $vals['vendor_note'];
			}
			
			
			if (isset($vals['sku_img'])){
				
				$this->sku_img = $vals['sku_img'];
			}
			
			
			if (isset($vals['return_price_discount'])){
				
				$this->return_price_discount = $vals['return_price_discount'];
			}
			
			
			if (isset($vals['return_diff_amount'])){
				
				$this->return_diff_amount = $vals['return_diff_amount'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['status_note'])){
				
				$this->status_note = $vals['status_note'];
			}
			
			
			if (isset($vals['video_url'])){
				
				$this->video_url = $vals['video_url'];
			}
			
			
			if (isset($vals['status_code'])){
				
				$this->status_code = $vals['status_code'];
			}
			
			
			if (isset($vals['rv_difference_no'])){
				
				$this->rv_difference_no = $vals['rv_difference_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDiffInterDetailRespModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schedule_id);
				
			}
			
			
			
			
			if ("is_complete_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_complete_name);
				
			}
			
			
			
			
			if ("box_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_id);
				
			}
			
			
			
			
			if ("item_sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_sku);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("is_anti_theft_code_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_anti_theft_code_name);
				
			}
			
			
			
			
			if ("anti_theft_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->anti_theft_code);
				
			}
			
			
			
			
			if ("anti_theft_code_used_by_str" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->anti_theft_code_used_by_str);
				
			}
			
			
			
			
			if ("anti_theft_code_approval_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->anti_theft_code_approval_remark);
				
			}
			
			
			
			
			if ("no_unique_code_reason_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->no_unique_code_reason_desc);
				
			}
			
			
			
			
			if ("record_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->record_quantity);
				
			}
			
			
			
			
			if ("real_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->real_quantity);
				
			}
			
			
			
			
			if ("diff_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->diff_quantity);
				
			}
			
			
			
			
			if ("pay_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_quantity);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("diff_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->diff_amount);
				
			}
			
			
			
			
			if ("vendor_feedback_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_feedback_name);
				
			}
			
			
			
			
			if ("is_return_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_return_name);
				
			}
			
			
			
			
			if ("vendor_note" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_note);
				
			}
			
			
			
			
			if ("sku_img" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku_img);
				
			}
			
			
			
			
			if ("return_price_discount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_price_discount);
				
			}
			
			
			
			
			if ("return_diff_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_diff_amount);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("status_note" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status_note);
				
			}
			
			
			
			
			if ("video_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->video_url);
				
			}
			
			
			
			
			if ("status_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status_code);
				
			}
			
			
			
			
			if ("rv_difference_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rv_difference_no);
				
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
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->schedule_id !== null) {
			
			$xfer += $output->writeFieldBegin('schedule_id');
			$xfer += $output->writeString($this->schedule_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_complete_name !== null) {
			
			$xfer += $output->writeFieldBegin('is_complete_name');
			$xfer += $output->writeString($this->is_complete_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->box_id !== null) {
			
			$xfer += $output->writeFieldBegin('box_id');
			$xfer += $output->writeString($this->box_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_sku !== null) {
			
			$xfer += $output->writeFieldBegin('item_sku');
			$xfer += $output->writeString($this->item_sku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_anti_theft_code_name !== null) {
			
			$xfer += $output->writeFieldBegin('is_anti_theft_code_name');
			$xfer += $output->writeString($this->is_anti_theft_code_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->anti_theft_code !== null) {
			
			$xfer += $output->writeFieldBegin('anti_theft_code');
			$xfer += $output->writeString($this->anti_theft_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->anti_theft_code_used_by_str !== null) {
			
			$xfer += $output->writeFieldBegin('anti_theft_code_used_by_str');
			$xfer += $output->writeString($this->anti_theft_code_used_by_str);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->anti_theft_code_approval_remark !== null) {
			
			$xfer += $output->writeFieldBegin('anti_theft_code_approval_remark');
			$xfer += $output->writeString($this->anti_theft_code_approval_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->no_unique_code_reason_desc !== null) {
			
			$xfer += $output->writeFieldBegin('no_unique_code_reason_desc');
			$xfer += $output->writeString($this->no_unique_code_reason_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->record_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('record_quantity');
			$xfer += $output->writeString($this->record_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->real_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('real_quantity');
			$xfer += $output->writeString($this->real_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diff_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('diff_quantity');
			$xfer += $output->writeString($this->diff_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('pay_quantity');
			$xfer += $output->writeString($this->pay_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diff_amount !== null) {
			
			$xfer += $output->writeFieldBegin('diff_amount');
			$xfer += $output->writeString($this->diff_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_feedback_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_feedback_name');
			$xfer += $output->writeString($this->vendor_feedback_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_return_name !== null) {
			
			$xfer += $output->writeFieldBegin('is_return_name');
			$xfer += $output->writeString($this->is_return_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_note !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_note');
			$xfer += $output->writeString($this->vendor_note);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku_img !== null) {
			
			$xfer += $output->writeFieldBegin('sku_img');
			$xfer += $output->writeString($this->sku_img);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_price_discount !== null) {
			
			$xfer += $output->writeFieldBegin('return_price_discount');
			$xfer += $output->writeString($this->return_price_discount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_diff_amount !== null) {
			
			$xfer += $output->writeFieldBegin('return_diff_amount');
			$xfer += $output->writeString($this->return_diff_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status_note !== null) {
			
			$xfer += $output->writeFieldBegin('status_note');
			$xfer += $output->writeString($this->status_note);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->video_url !== null) {
			
			$xfer += $output->writeFieldBegin('video_url');
			$xfer += $output->writeString($this->video_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status_code !== null) {
			
			$xfer += $output->writeFieldBegin('status_code');
			$xfer += $output->writeString($this->status_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rv_difference_no !== null) {
			
			$xfer += $output->writeFieldBegin('rv_difference_no');
			$xfer += $output->writeString($this->rv_difference_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>