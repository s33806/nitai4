<?php
function get_cpufree(){
    $cmd = "top -n 1 -b -d 0.1 | grep 'Cpu'";//调用top命令和grep命令
    $lastline = exec($cmd,$output);
    $matches = explode(',',$lastline);
    //preg_match('/(S+)%id/',$lastline, $matches);//正则表达式获取cpu空闲百分比
    $us = rtrim(ltrim($matches[0],'%Cpu(s): '),' us');
    $sy = rtrim(ltrim($matches[1],'%Cpu(s): '),' sy');
    return ['us'=>$us,'sy'=>$sy];
}

//获取内存空闲百分比
function get_memfree(){
    $cmd = 'free -m';//调用free命令
    $lastline = exec($cmd,$output);
    preg_match('/Mem:s+(d+)/',$output[1], $matches);
    $memtotal = $matches[1];
    preg_match('/(d+)$/',$output[2], $matches);
    $memfree = $matches[1]*100.0/$memtotal;
    return $memfree;
}

//获取某个程序当前的进程数
function get_proc_count($name){
    $cmd = "ps -e";//调用ps命令
    $output = shell_exec($cmd);
    $result = substr_count($output, ' '.$name);
    return $result;
}
 /** 
 * vCode(m,n,x,y) m个数字  显示大小为n   边宽x   边高y 
 * micxp 
 */  
function vCode($num = 4, $size = 20, $width = 0, $height = 0) {   
    !$width && $width = $num * $size * 4 / 5 + 5;   
    !$height && $height = $size + 10;    
    // 去掉了 0 1 O l 等  
    $str = "23456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVW";   
    $code = '';   
    for ($i = 0; $i < $num; $i++) {   
        $code .= $str[mt_rand(0, strlen($str)-1)];   
    }    
    // 画图像  
    $im = imagecreatetruecolor($width, $height);    
    // 定义要用到的颜色  
    $back_color = imagecolorallocate($im, 235, 236, 237);   
    $boer_color = imagecolorallocate($im, 118, 151, 199);   
    $text_color = imagecolorallocate($im, mt_rand(0, 200), mt_rand(0, 120), mt_rand(0, 120));    
    // 画背景  
    imagefilledrectangle($im, 0, 0, $width, $height, $back_color);    
    // 画边框  
    imagerectangle($im, 0, 0, $width-1, $height-1, $boer_color);    
    // 画干扰线  
    for($i = 0;$i < 5;$i++) {   
        $font_color = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));   
        imagearc($im, mt_rand(- $width, $width), mt_rand(- $height, $height), mt_rand(30, $width * 2), mt_rand(20, $height * 2), mt_rand(0, 360), mt_rand(0, 360), $font_color);   
    }    
    // 画干扰点  
    for($i = 0;$i < 50;$i++) {   
        $font_color = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));   
        imagesetpixel($im, mt_rand(0, $width), mt_rand(0, $height), $font_color);   
    }    
    // 画验证码  
    @imagefttext($im, $size , 0, 5, $size + 3, $text_color, ROOT_PATH.'ttf/simfang.ttf', $code);   
    $_SESSION["VerifyCode"]=strtolower($code);    
    header("Cache-Control: max-age=1, s-maxage=1, no-cache, must-revalidate");   
    header("Content-type: image/png;charset=gb2312");   
    imagepng($im);   
    imagedestroy($im);   
}