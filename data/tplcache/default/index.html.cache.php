<?php include $this->_include('header.html'); ?>     <!--调用header头-->

<!--移动的图片 开始-->
<div id="Move_44" style="z-index: 9999; position: absolute; left: 127.898px; top: 322.65px;">
    <a href="<?php echo $site_url; ?>index.php?catid=26" target="_blank">
        <img src="<?php echo $site_url; ?>core/img/20165985305458.jpg" border="0">
    </a>
    <div style="font-size:12px;text-align:right;cursor:pointer;color:red;padding-right:5px;">
        <span onclick="document.getElementById('Move_44').style.display='none';">关闭</span>
    </div>
</div>
<script>var ad1=new AdMove("Move_44");ad1.Run();</script>
<!--移动的图片 结束-->

<!--首页主体内容 开始-->
    <div class="div1002">
        <div class="mainbox" style="margin:0 auto">

        <!--轮播图1 开始-->
            <div class="gb_hd">
                <div class="slideBox">
                    <div class="bd">
                        <ul>
                            <li><img src="<?php $this->block(1);?>" /></li>
                            <li><img src="<?php $this->block(7);?>" /></li>
                            <li><img src="<?php $this->block(2);?>" /></li>
                            <li><img src="<?php $this->block(3);?>" /></li>
                            <li><img src="<?php $this->block(8);?>" /></li>
                        </ul>
                    </div>
                    <div class="txtBg"></div>
                    <div class="hd">
                        <ul>
                            <?php $return = $this->_listdata("catid=29 num=5"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                            <li><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><?php echo strcut($xiao[title],15,'...'); ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!--轮播图1js 开始-->
            <script type="text/javascript">
                jQuery(".slideBox").slide({ mainCell:".bd ul",effect:"top", autoPlay:true, delayTime:300});
            </script>
            <!--轮播图1js 结束-->
        <!--轮播图1 结束-->

        <!--右侧导航 开始-->
            <div class="gb_right">
                <div class="gb_news">
                    <div class="news-title">
                        <ul>
                            <li class="sec2" id="1td0" onmouseover="javascript:secBoard('1td','1tr',3,0,'sec1','sec2')"><a href="<?php echo $site_url; ?>index.php?catid=29">新闻中心</a></li>
                            <li class="sec1" id="1td1" onmouseover="javascript:secBoard('1td','1tr',3,1,'sec1','sec2')"><a href="<?php echo $site_url; ?>index.php?catid=35">通知公告</a></li>
                            <li class="sec1" id="1td2" onmouseover="javascript:secBoard('1td','1tr',3,2,'sec1','sec2')"><a href="<?php echo $site_url; ?>index.php?catid=36">水质公告</a></li>
                        </ul>
                        <div class="more0"><a href="<?php echo $site_url; ?>index.php?catid=22">更多&gt;&gt;</a></div>
                    </div>

                    <!--新闻中心 开始-->
                    <div class="news-body" id="1tr0" style="display: none;">
                        <div class="news-top">
                            <?php $return = $this->_listdata("catid=22 num=1 cache=0"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                            <div class="">
                                <a href="<?php echo $xiao['url']; ?>" target="_blank" title="<?php echo $xiao['title']; ?>"><?php echo strcut($xiao[title],40,'...'); ?></a>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="news-box">
                            <ul>
                                <?php $return = $this->_listdata("catid=22 num=7 order=time"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                                <li><span style="float:left;"><a href="<?php echo $xiao['url']; ?>" target="_blank" title="<?php echo $xiao['title']; ?>"><?php echo strcut($xiao[title],50,'...'); ?></a></span><span style="float:left; margin-top:10px;"></span><span style="float:right; line-height:28px; color:#999;"><?php echo date("Y-m-d",$xiao['time']); ?></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!--新闻中心 结束-->

                    <!--通知公告 开始-->
                    <div class="news-body" id="1tr1" style="display:none;">
                        <div class="news-top">
                            <?php $return = $this->_listdata("catid=35 num=1 cache=0"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                            <div class="">
                                <a href="<?php echo $xiao['url']; ?>" target="_blank" title="<?php echo $xiao['title']; ?>"><?php echo strcut($xiao[title],40,'...'); ?></a>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="news-box" style="padding-top:10px;">
                            <ul>
                                <?php $return = $this->_listdata("catid=35 num=7 order=time"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                                <li><span style="float:left;"><a href="<?php echo $xiao['url']; ?>" target="_blank" title="<?php echo $xiao['title']; ?>"><?php echo strcut($xiao[title],50,'...'); ?></a></span><span style="float:left; margin-top:10px;"></span><span style="float:right; line-height:28px; color:#999;"><?php echo date("Y-m-d",$xiao['time']); ?></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!--通知公告 结束-->

                    <!--水质公告 开始-->
                    <div class="news-body" id="1tr2" style="">
                        <div class="news-top">
                            <?php $return = $this->_listdata("catid=36 num=1 cache=0"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                            <div class="">
                                <a href="<?php echo $xiao['url']; ?>" target="_blank" title="<?php echo $xiao['title']; ?>"><?php echo strcut($xiao[title],40,'...'); ?></a>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="news-box" style="padding-top:10px;">
                            <ul>
                                <?php $return = $this->_listdata("catid=36 num=7 order=time"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                                <li><span style="float:left;"><a href="<?php echo $xiao['url']; ?>" target="_blank" title="<?php echo $xiao['title']; ?>"><?php echo strcut($xiao[title],50,'...'); ?></a></span><span style="float:left; margin-top:10px;"></span><span style="float:right; line-height:28px; color:#999;"><?php echo date("Y-m-d",$xiao['time']); ?></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!--水质公告 结束-->
                </div>
                <div class="rx">
                    <ul>
                        <li>
                            <img src="<?php echo $site_template; ?>images/201522836924416.jpg" width="442" height="47" border="0" alt="热线">
                        </li>
                    </ul>
                </div>
            </div>
        <!--右侧导航 结束-->
        </div>

        <!--轮播图2 开始-->
        <div class="hf" style="position:relative;">
            <div class="slider">
                <div class="bd">
                    <ul>
                        <li><img src="<?php $this->block(9);?>" /></li>
                        <li><img src="<?php $this->block(10);?>" /></li>
                    </ul>
                </div>
                <div class="timer"></div><!-- 进度条 -->
            </div>
        </div>

            <!--轮播图2js 开始-->
        <script type="text/javascript">
            jQuery(".slider").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click",
                mouseOverStop:false,/* 鼠标移到容器层继续播放*/
                /* 控制进度条 */
                startFun:function(){
                    var timer = jQuery(".slider .timer");
                    timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },2500);
                }
            });
        </script>
            <!--轮播图2js 结束-->
        <!--轮播图2 结束-->

        <!--创建专栏 开始-->
        <div class="cjzlbox">
            <div class="left zl_tit"><a href="<?php echo $site_url; ?>index.php?catid=44"><img src="<?php echo $site_template; ?>images/cjzl_tit.jpg" width="42" height="164"></a></div>
            <div class="left zl_conbox">
                <div id="demoa" style="overflow:hidden;width:929px;margin:0 auto">
                    <div id="indemoa" style="float:left;width:1000%;">
                        <div id="demo1a" style="float:left;">
                            <ul>
                                <?php $return = $this->_listdata("catid=44 num=12 order=time"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                                <li>
                                    <a href="<?php echo $xiao['url']; ?>" target="_blank" title="<?php echo $xiao['title']; ?>"><img width="158" height="118" src="<?php echo thumb($xiao[thumb],220,40); ?>" alt="<?php echo $xiao['title']; ?>"><br><?php echo strcut($xiao[title],20,'...'); ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div id="demo2a" style="float:left;">
                            <ul>
                                <?php $return = $this->_listdata("catid=44 num=12 order=time"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                                <li>
                                    <a href="<?php echo $xiao['url']; ?>" target="_blank" title="<?php echo $xiao['title']; ?>"><img width="158" height="118" src="/UserData/UploadFile/1/2016/12/5/201612587848793.jpg" alt="<?php echo $xiao['title']; ?>"><br><?php echo strcut($xiao[title],20,'...'); ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <script>
                    var speeda=45;
                    var taba=document.getElementById("demoa");
                    var tab1a=document.getElementById("demo1a");
                    var tab2a=document.getElementById("demo2a");
                    tab2a.innerHTML=tab1a.innerHTML;
                    function Marqueea(){
                        if(tab2a.offsetWidth-taba.scrollLeft<=0)
                            taba.scrollLeft-=tab1a.offsetWidth
                        else{
                            taba.scrollLeft++;
                        }
                    }
                    var MyMara=setInterval(Marqueea,speeda);
                    taba.onmouseover=function() {clearInterval(MyMara)};
                    taba.onmouseout=function() {MyMara=setInterval(Marqueea,speeda)};
                </script>
            </div>
            <div class="clear"></div>
        </div>
        <!--创建专栏 结束-->

        <div class="mainer">
            <div class="left leftbox">
                <div class="leftban" style="margin-top:7px;">

                    <!--政策法规　开始-->
                    <div class="left lm5">
                        <div class="lm5bt">
                            <div class="right more1"><a href="<?php echo $site_url; ?>index.php?catid=2">更多&gt;&gt;</a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="border lm5nr">
                            <ul>
                                <?php $return = $this->_listdata("catid=2 num=5 order=time"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                                <li><span style="float:left"><a href="<?php echo $xiao['url']; ?>" target="_blank" title="<?php echo $xiao['title']; ?>"><?php echo strcut($xiao[title],32,'...'); ?></a></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!--政策法规 结束-->

                    <!--文明创建 开始-->
                    <div class="left lm5" style="padding-left:6px;">
                        <div class="lm05bt">
                            <div class="right more1"><a href="<?php echo $site_url; ?>index.php?catid=44">更多&gt;&gt;</a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="border lm5nr">
                            <ul>
                                <?php $return = $this->_listdata("catid=44 num=5 order=time"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                                <li>
                                    <span style="float:left"><a href="<?php echo $xiao['url']; ?>" target="_blank" title="<?php echo $xiao['title']; ?>"><?php echo strcut($xiao[title],32,'...'); ?></a></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!--文明创建　结束-->

                    <!--企业文化 开始-->
                    <div class="right lm5">
                        <div class="lm6bt">
                            <div class="right more1"><a href="<?php echo $site_url; ?>index.php?catid=21">更多&gt;&gt;</a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="border lm5nr">
                            <ul>
                                <?php $return = $this->_listdata("catid=21 num=5 order=time"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                                <li><span style="float:left"><a href="<?php echo $xiao['url']; ?>" target="_blank" title="<?php echo $xiao['title']; ?>"><?php echo strcut($xiao[title],32,'...'); ?></a></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!--企业文化 结束-->
                    <div class="clear"></div>
                </div>

                <!--服务指南 开始-->
                <div class="fwbox">
                    <ul>
                        <li><a href="<?php echo $site_url; ?>index.php?catid=38" target="_blank"><img src="<?php echo $site_template; ?>images/2012123118970009.jpg" width="98" height="84" border="0" alt="服务承诺"></a></li>
                        <li><a href="<?php echo $site_url; ?>index.php?catid=41" target="_blank"><img src="<?php echo $site_template; ?>images/201311420348793.jpg" width="98" height="84" border="0" alt="供水业务"></a></li>
                        <li><a href="<?php echo $site_url; ?>index.php?catid=39" target="_blank"><img src="<?php echo $site_template; ?>images/2012123133963600.jpg" width="98" height="84" border="0" alt="供水热线"></a></li>
                        <li><a href="<?php echo $site_url; ?>index.php?catid=42" target="_blank"><img src="<?php echo $site_template; ?>images/2012123141634804.jpg" width="98" height="84" border="0" alt="水费标准"></a></li>
                        <li><a href="<?php echo $site_url; ?>index.php?catid=43" target="_blank"><img src="<?php echo $site_template; ?>images/2012123142624947.jpg" width="98" height="84" border="0" alt="用水常识"></a></li>
                        <li><a href="<?php echo $site_url; ?>index.php?catid=40" target="_blank"><img src="<?php echo $site_template; ?>images/2012123173239724.jpg" width="98" height="84" border="0" alt="营业网点"></a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="fwtit"><a href="<?php echo $site_url; ?>index.php?catid=38"><img src="<?php echo $site_template; ?>images/fwzn.png" width="79" height="77"></a></div>
                <!--服务指南 结束-->
            </div>

            <!--网上服务 开始-->
            <div class="right lm1">
                <div class="lm4"></div>
                <div class="lm4nr">
                    <ul>
                        <li><a href="<?php echo $site_url; ?>index.php?catid=33" target="_blank"><img src="<?php echo $site_template; ?>images/201521320859658.jpg" width="164" height="33" border="0" alt="水费查询"></a></li>
                        <li><a href="<?php echo $site_url; ?>index.php?catid=34" target="_blank"><img src="<?php echo $site_template; ?>images/201332794422737.jpg" width="164" height="33" border="0" alt="网上缴费"></a></li>
                        <li><a href="<?php echo $site_url; ?>index.php?catid=36" target="_blank"><img src="<?php echo $site_template; ?>images/201313180277840.jpg" width="164" height="33" border="0" alt="水质公告"></a></li>
                        <li><a href="<?php echo $site_url; ?>index.php?catid=45" target="_blank"><img src="<?php echo $site_template; ?>images/201313120322701.jpg" width="164" height="33" border="0" alt="网上投诉"></a></li>
                        <li><a href="<?php echo $site_url; ?>index.php?catid=46" target="_blank"><img src="<?php echo $site_template; ?>images/201313138428170.jpg" width="164" height="33" border="0" alt="网上报修"></a></li>
                    </ul>
                </div>
            </div>
            <!--网上服务 结束-->

            <div class="clear"></div>
        </div>
    </div>
<!--首页主体内容 结束-->
<?php include $this->_include('footer.html'); ?>     <!--调用尾部页面-->