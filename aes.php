<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/5
 * Time: 10:26
 */
// $list = openssl_get_cipher_methods();
// print_r($list);die;
$data = 'aes加密的内容';
$method = 'AES-128-CBC-HMAC-SHA256';
$key = md5(uniqid());
$option = 0;
$iv = substr($key,0,16);
//加密
$con = openssl_encrypt($data,$method,$key,$option,$iv);
//解密
$res = openssl_decrypt($con,$method,$key,$option,$iv);
print_r($res);die;