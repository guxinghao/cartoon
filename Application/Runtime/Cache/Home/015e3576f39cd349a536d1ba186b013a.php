<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="cn">
    <head>
    	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/s56/cartoon/Public/css/ac.global.css" media="screen" /><!-- 样式文件 -->       
        <link rel="stylesheet" type="text/css" href="/s56/cartoon/Public/css/login.css" />
        <title>用户注册</title>
        <link rel="stylesheet" type="text/css" href="/s56/cartoon/Public/Dist/css/bootstrap.css" />
        <script type="text/javascript" src="/s56/cartoon/Public/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/s56/cartoon/Public/js/tx.func.js" charset="UTF-8"></script>
        <script type="text/javascript" src="/s56/cartoon/Public/js/ac.base.js" charset="UTF-8"></script>      
    </head>
    <body>
        <div class="mod_main"><!-- maker_wrap && read_wrap && vip_wrap -->
            <div class="mod_center"><!-- maker_con && read_con && vip_con -->  
                <!-- 注册表单 -->
                    <div class="area-reg">
                        <form id="form-reg" class="form">
                            <h3 class="title">注册 AcFun</h3>
                            <div class="area">
                                <i class="icon"><span id="icon-font" class="glyphicon glyphicon-phone"></span></i>
                                <input id="ipt-mobile-reg" name="mobile" spellcheck="false" type="text" data-name="手机号码" data-direction="right" autocomplete="off" class="mobile l error" placeholder="请输入手机号码" required="required">
                                <span class="clearfix"></span>
                            </div>
                            <div class="area">
                                <i class="icon"><span id="icon-font" class="glyphicon glyphicon-user"></span></i>
                                <input id="ipt-username-reg" name="name" spellcheck="false" type="text" data-name="昵称" data-direction="right" data-length="4,16" class="regname name l error" placeholder="请输入昵称" required="required">
                                <span class="clearfix"></span>
                            </div>
                            <div class="area">
                                <i class="icon"><span id="icon-font" class="glyphicon glyphicon-lock"></span></i>
                                <input id="ipt-pwd-reg" name="password" type="password" data-name="密码" data-length="6,32" data-direction="right" placeholder="请输入密码" class="password l error" required="required">
                                <span class="clearfix"></span>
                            </div>
                            <div class="area">
                                <i class="icon"><span id="icon-font" class="glyphicon glyphicon-lock"></span></i>
                                <input id="ipt-repwd-reg" name="password2" type="password" data-name="确认密码" data-length="6,32" data-direction="right" placeholder="确认密码" class="re-password l error" required="required">
                                <span class="clearfix"></span>
                            </div>
                            <div class="area">
                                <i class="icon"><span id="icon-font" class="glyphicon glyphicon-comment"></span></i>
                                <input id="ipt-mobile-code" name="code" type="text" data-name="手机验证码" data-length="6,6" data-direction="right" placeholder="手机验证码" class="mcode l error" required="required">
                                <input id="send-mobile-code" type="button" value="发送验证码" disabled="disabled" class="dis">
                                <span class="clearfix"></span>
                            </div>
                            <div class="area area-agree">
                                <input id="ipt-agree-reg" type="checkbox" checked="checked" class="l agree">
                               <p class="agree-b">我已经认真阅读并同意AcFun的
                                <a href="" target="_blank" style="color: red">《使用协议》</a>。</p>
                                &nbsp; &nbsp; &nbsp;
                                <a href="/login/" class="back-login">返回登录</a>
                                <span class="clearfix"></span>
                            </div>
                            
                           
                        </form>  
                    </div>

                <!-- ico 作者 -->
                <div class="ico-maker-wrap">
                    <span class="ico_bird_1">&nbsp;</span>
                    <span class="ico_bird_2">&nbsp;</span>
                    <span id="ico_bird">&nbsp;</span>
                    <span class="ico_bird_4">&nbsp;</span>
                    <span class="ico_leaf">&nbsp;</span>
                    <span class="ico_hotq">&nbsp;</span>
                    <span class="ico_hotq_small">&nbsp;</span>
                    <span class="ico_hotq_small_y">&nbsp;</span>
                </div>
                <!-- ico 读者 -->
                <div class="ico-read-wrap">
                    <span class="paper_1 ico_pager">&nbsp;</span>
                    <span class="paper_2 ico_pager">&nbsp;</span>
                    <span class="paper_3 ico_pager">&nbsp;</span>
                    <span class="paper_4 ico_pager">&nbsp;</span>
                    <span class="paper_5 ico_pager">&nbsp;</span>
                    <span class="ico_plan">&nbsp;</span>
                </div>
                <!-- ico VIP -->
                <div class="ico-vip-wrap">
                    <span class="ico_fadeyh_one ico_fadeyh">&nbsp;</span>
                    <span class="ico_fadeyh_two ico_fadeyh">&nbsp;</span>
                    <span class="ico_fadeyh_three ico_fadeyh">&nbsp;</span>
                    <span class="icon_yh_one">&nbsp;</span>
                    <span class="icon_yh_two">&nbsp;</span>
                    <span class="icon_yh_three">&nbsp;</span>
                    <span class="start_1 start">&nbsp;</span>
                    <span class="start_2 start">&nbsp;</span>
                    <span class="start_3 start">&nbsp;</span>
                    <span class="start_4 start">&nbsp;</span>
                </div>
            </div>
        </div>

        <div class="mod-footer-wr">
            <div class="mod-footer-main-wr">
            </div>
            <div class="mod-footer-border"></div>
        </div>

        <input type="hidden" id="input-hidden" value="1" />
        <input type="hidden" id="fly-hidden" value="1" />
        <script type="text/javascript" src="/s56/cartoon/Public/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/s56/cartoon/Public/js/ac.base.js"></script>
        <script type="text/javascript" src="/s56/cartoon/Public/js/tcss.ping.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
               var x = 0,
                     y = 3,
                     rand = parseInt(Math.random()*(x-y)+y),
                     mod_main = $(".mod_main"),
                     mod_center = $(".mod_center");
                     
                if(rand==0){
                    mod_main.addClass("vip_wrap");
                    mod_center.addClass("vip_con")
                    setInterval(function(){
                        $(".start_1").fadeToggle(800);
                        $(".start_3").fadeToggle(800);
                    },300);
                    setInterval(function(){
                        $(".start_2").fadeToggle(1000);
                        $(".start_4").fadeToggle(1000);
                    },500);
                    setTimeout(function(){
                            $(".icon_yh_one").addClass("ico_ani_yh_1");
                    },500);
                    setTimeout(function(){
                            $(".icon_yh_one").removeClass("ico_ani_yh_1").addClass("ico_yh_1");
                    },3400);
                    setTimeout(function(){
                            $(".icon_yh_two").addClass("ico_ani_yh_2");
                            $(".icon_yh_three").addClass("ico_ani_yh_3");
                    },1000);
                    setTimeout(function(){
                            $(".icon_yh_two").removeClass("ico_ani_yh_2").addClass("ico_yh_2");
                            $(".icon_yh_three").removeClass("ico_ani_yh_3").addClass("ico_yh_3");
                    },3900);
                    setTimeout(function(){
                            $(".ico_fadeyh").fadeIn(2000);
                    },3000);
                }
                if(rand==1){
                    mod_main.addClass("read_wrap");
                    mod_center.addClass("read_con");
                    setTimeout(function(){
                        $(".paper_1").fadeIn(800);
                    },1000);
                    setTimeout(function(){
                        $(".paper_2").fadeIn(800);
                    },1500);
                    setTimeout(function(){
                        $(".paper_3").fadeIn(800);
                    },2000);
                    setTimeout(function(){
                        $(".paper_4").fadeIn(800);
                    },2500);
                    setTimeout(function(){
                        $(".paper_5").fadeIn(800);
                    },3000);
                    setTimeout(function(){
                        $(".ico_plan").animate({
                            left: '130px',
                            bottom: '222px'
                        },3000)
                    },500);
                }
                if(rand==2){
                    mod_main.addClass("maker_wrap");
                    mod_center.addClass("maker_con")
                    setTimeout(function(){
                        $("#ico_bird").animate({
                            top:'122px',
                            left:'374px'
                        },4000)
                    },1000);
                    setInterval(function(){
                         var vall = $("#fly-hidden").val();
                         if(vall >= 9){
                             $("#fly-hidden").val("1");
                             $("#ico_bird").attr("class",'ico_flybird_1');
                         }else{
                             $("#fly-hidden").val(parseInt(vall)+1);
                             $("#ico_bird").attr("class",'ico_flybird_'+(parseInt(vall)+1));
                         }
                    },120);
                    setInterval(function(){
                        $(".ico_bird_4").animate({
                            top:'230px',
                            left:'-500px'
                        },12000,function(){
                            $(this).css({'top':'330px','left':'725px'});
                        });
                    },4000);
                    setInterval(function(){  
                        if($("#input-hidden").val()=="1"){
                            $(".ico_bird_4").addClass("ico_fly_bird_4");
                            $("#input-hidden").val("0");
                        }else{
                            $(".ico_bird_4").removeClass("ico_fly_bird_4");
                            $("#input-hidden").val("1");
                        }
                    },250);
                }
               
            });
        </script>
         
    </body>
</html>