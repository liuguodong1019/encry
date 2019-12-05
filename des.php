<?php
// $list = openssl_get_cipher_methods();
// print_r($list);die;
$data = 'des加密的内容';
$key = uniqid();
//echo $key."</br>";
$method = 'des-cbc';
$iv = '123456';
//加密
$con = openssl_encrypt($data, $method, $key,0,$iv);
//解密
$res = openssl_decrypt($con,$method,$key,0,$iv);
//注意：要使用此函数需要在php.ini中开启openssl扩展

//mcrypt_encrypt 此加密函数已在7.1>=版本中弃用
print_r($res);die;