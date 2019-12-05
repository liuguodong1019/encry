<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/5
 * Time: 14:42
 */
require_once ('cry.php');
$con = '这是即将加密的内容';
//私钥加密
$bool = openssl_private_encrypt($con,$res,$key['private']);
//公钥解密
openssl_public_decrypt($res,$test,$key['public']);
print_r($test);

