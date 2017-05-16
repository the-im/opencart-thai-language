<?php
// Text
$_['text_title']           = 'บัญชีสมาชิก Klarna';
$_['text_pay_month']       = 'บัญชีสมาชิก Klarna - ใช้จ่ายตั้งแต่ %s/เดือน <span id="klarna_account_toc_link"></span><script text="javascript">$.getScript(\'http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js\', function(){ var terms = new Klarna.Terms.Account({ el: \'klarna_account_toc_link\', eid: \'%s\',   country: \'%s\'});})</script>';
$_['text_information']     = 'ข้อมูลบัญชีสมาชิก Klarna';
$_['text_additional']      = 'บัญชีสมาชิก Klarna จำเป็นต้องใส่ข้อมูลเพิ่มเติมในการสั่งซื้อสินค้าของท่าน';
$_['text_wait']            = 'กรุณารอสักครู่';
$_['text_male']            = 'ผู้ชาย';
$_['text_female']          = 'ผู้หญิง';
$_['text_year']            = 'ปี';
$_['text_month']           = 'เดือน';
$_['text_day']             = 'วัน';
$_['text_payment_option']  = 'วิธีการชำระเงิน';
$_['text_single_payment']  = 'ชำระเงินครั้งเดียว';
$_['text_monthly_payment'] = '%s - %s ต่อเดือน';
$_['text_comment']         = "เลขที่ใบแจ้งหนี้ของ Klarna: %s\n%s/%s: %.4f";

// Entry
$_['entry_gender']         = 'เพศ:';
$_['entry_pno']            = 'เลขที่ประจำตัว:<br /><span class="help">กรุณาใส่ Security number ของท่านที่นี่</span>';
$_['entry_dob']            = 'วันเกิด:';
$_['entry_phone_no']       = 'เบอร์โทรศัพท์:<br /><span class="help">กรุณาใส่เบอร์โทรศัพท์</span>';
$_['entry_street']         = 'ถนน:<br /><span class="help">ท่านโปรดทราบว่าหากท่านชำระเงินผ่านบัญชี Klarna สินค้าจะถูกส่งไปตามที่อยู่ที่ท่านได้ลงทะเบียนไว้ในระบบเท่านั้น</span>';
$_['entry_house_no']       = 'บ้านเลขที่:<br /><span class="help">กรุณาใส่บ้านเลขที่</span>';
$_['entry_house_ext']      = 'ข้อมูลเพิ่มเติมเกี่ยวกับบ้าน:<br /><span class="help">กรุณาใส่ข้อมูลเพิ่มเติมเกี่ยวกับบ้านของท่าน เช่น สีของบ้าน สีของรั้ว เป็นต้น</span>';
$_['entry_company']        = 'เลขที่จดทะเบียนบริษัท:<br /><span class="help">กรุณาใส่เลขที่จดทะเบียนบริษัท</span>';

// Error
$_['error_deu_terms']      = 'ท่านจำเป็นต้องยอมรับเงื่อนไขของ Klarna ';
$_['error_address_match']  = 'ถ้าท่านต้องการชำระเงินด้วย Klarna ที่อยู่ในการเรียกเก็บเงินและจัดส่งสินค้าจำเป็นต้องเหมือนกัน';
$_['error_network']        = 'เกิดข้อผิดพลาดในการเชื่อมต่อกับระบบ Klarna กรุณาลองใหม่อีกครั้ง';
?>