@extends('layouts.app')
@section('header-left')
    @component('component/navbar/header-left')
    @endcomponent
@endsection
@section('content')
<div class="container-fluid ">
  <div class="row" style="padding:0">
    <div class="jumbotron jumbotron-fluid col-12">
      <div class="container text-center" > 
        <h1 class="display-3">欢迎</h1>
        <h3>来到 Cmfac.com</h3>
        <hr class="my-4">
        <p>此网站是用来学习的,目前它以两种方式储存知识,Link用来保存其他网站的知识,通过一个链接指向网站地址.Libary用来保存自己的笔记,不过使用你得先学会.MD语言.本站的所有内容都是开源的.所有人都可以对所有内容进行编辑.啊 写了一半的权限管理然后放弃了.因为别的地方已经实现了，没必要在做一次.</p>
      </div>
    </div> 
</div>
<div class="top text-center" style="position: relative;margin:0 auto;$(window).width()/2"></div>
<hr color="#fff" style="position: relative;">
</div>
    <script src="/js/jquery.js"></script>
<script>
  html = "<div style='width:1px;background:#fff;display:inline-block;margin:1px;'></div>";
  for(i=0;i<$(window).width()/6;i++){ 
    $('.top').append(html);
  }
  a = (function(){
    /*
    for(i=0;i<20;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*2)+'rem');
    }
    for(i=20;i<40;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*3)+'rem');
    }
    for(i=40;i<60;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*4)+'rem');
    }
    for(i=60;i<80;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*5)+'rem');
    }
    for(i=80;i<100;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*6)+'rem');
    }
    for(i=100;i<120;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*7)+'rem');
    }
    for(i=120;i<140;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*8)+'rem');
    }
    for(i=140;i<160;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*8)+'rem');
    }
    for(i=160;i<180;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*8)+'rem');
    }
    for(i=180;i<200;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*7)+'rem');
    }
    for(i=200;i<220;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*6)+'rem');
    }
    for(i=220;i<240;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*5)+'rem');
    }
    for(i=240;i<260;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*4)+'rem');
    }
    for(i=260;i<280;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*3)+'rem');
    }
    for(i=280;i<300;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*2)+'rem');
    }*/
    for(i=0;i<$(window).width()/4;i++){
      $('.top').children('div').eq(i).height(Math.floor(Math.random()*5)+'rem');
    }
    
  window.requestAnimationFrame(a);
  })
  window.requestAnimationFrame(a);
</script>
@endsection
