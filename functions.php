<?php
//Black&White 256 colors
function bwf($r,$g,$b){
	$bw = (0.299*$r) + (0.587*$g) + (0.114*$b);
	return array($bw,$bw,$bw);
}
//Black&White 2 colors
function bw01f($r,$g,$b){
	$bw = (0.299*$r) + (0.587*$g) + (0.114*$b);
		if($bw<128){
			$bw=0;
		}
		else{
			$bw=255;
		}
	return array($bw,$bw,$bw);
}
//No red
function nr($r,$g,$b){
	$r=0;
	return array($r,$g,$b);
}
//No green
function ng($r,$g,$b){
	$g=0;
	return array($r,$g,$b);
}
//No blue
function nb($r,$g,$b){
	$b=0;
	return array($r,$g,$b);
}
//Inverse
function inv($r,$g,$b){
	$r= 255-$r;
	$g= 255-$g;
	$b= 255-$b;
	return array($r,$g,$b);
}
//Only red
function orf($r,$g,$b){
	$g=0;
	$b=0;
	return array($r,$g,$b);
}
//Only green
function ogf($r,$g,$b){
	$r=0;
	$b=0;
	return array($r,$g,$b);
}
//Only blue
function obf($r,$g,$b){
	$r=0;
	$g=0;
	return array($r,$g,$b);
}
//Only blue
function srp($r,$g,$b){
	return array($g,$b,$r);
}
function array_icount_values($arr,$lower=false) { 
     $arr2=array(); 
     if(!is_array($arr['0'])){$arr=array($arr);} 
     foreach($arr as $k=> $v){ 
      foreach($v as $v2){ 
      if($lower==true) {$v2=strtolower($v2);} 
      if(!isset($arr2[$v2])){ 
          $arr2[$v2]=1; 
      }else{ 
           $arr2[$v2]++; 
           } 
    } 
    } 
    return $arr2; 
}



?>