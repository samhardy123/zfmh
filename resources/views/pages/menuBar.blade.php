  <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/reset.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/grid.css') }}" rel="stylesheet" type="text/css" />
    <style type="text/css">
    /**/

/* Getting the new tags to behave */
article, aside, audio, canvas, command, datalist, details, embed, figcaption, figure, footer, header, hgroup, keygen, meter, nav, output, progress, section, source, video {display:block;}
mark, rp, rt, ruby, summary, time {display:inline;}

/* Global properties ======================================================== */
html, body {width:100%; padding:0; margin:0; height:100%;}

body {
  font-family: Arial, Helvetica, sans-serif ;    
  font-size:12px; 
  line-height: 20px;
  color:#938d8d;
  background:#e7e7e7;
  min-width:960px;
  }
.main{width:100%;height: auto; min-height:100%;background: url(images/bg-main.jpg) 0 0 repeat; }
/***********************************************************************/
/*================================>Block-classes<==========================*/
.txt-dec-n{text-decoration:none !important;}
.txt-dec-u{text-decoration: underline;}
.txt-up-n{text-transform:none !important;}
.txt-up{text-transform:uppercase;}
.txt-al{text-align:center;}
.bold{font-weight:bold;}
.font-14{
  font-size:16px;
  color:#d63332 ;
  line-height:20px;
  font-style:italic;
  font-family: Georgia, "Times New Roman", Times, serif;
  }
.link{
  font-weight:bold;
  color:#5d5252;
  text-decoration:underline;
  }
  .link:hover{color:#d63332;}
p{
  font-size:16px;
  text-align:justify;
  }

.col{color:#d63332 ;}
.col-1{color:#5d5252;}

.hov:hover{color:#d63332 ;}
.hov-1:hover{color:#938d8d; text-decoration:underline;}

.border-none{border: none !important;}
.bg-none{background: none !important;}

.dis-block{display: block;}
.dis-inblock{display: inline-block;}

.marg-left-0{margin-left:0 !important;} 
.marg-right-0{margin-right:0 !important;}
.marg-left-right-0{margin-left:0 !important; margin-right:0 !important;}
.last-mbot{margin-bottom:0 !important;} 
.last-pbot{padding-bottom: 0 !important;}
.last-mpbot{margin-bottom:0 !important;padding-bottom:0 !important;}
figure{
  background:#fff;
  padding:10px;
  display:inline-block;
  }
/*===============================>Indent<==================================*/
.padd{margin:37px 0 14px 0;}
.padd-1{margin:45px 0 22px 0;}
.padd-2{margin:58px 0 3px 0;}
.padd-3{margin:53px 0 21px 0;}
.padd-4{margin:57px 0 21px 0;}

.top{margin-top: 17px;}
.top-1{margin-top:5px;}
.top-2{margin-top:32px;}
.top-3{margin-top:2px;}
.top-4{margin-top:12px !important;}
.top-5{margin-top:37px ;}
.top-6{margin-top:10px ;}
.top-7{margin-top:8px ;}

.bot{margin-bottom: 24px;}
.bot-1{margin-bottom:12px;}
.bot-2{margin-bottom:27px;}
.bot-3{margin-bottom:20px;}

.left{margin-left: 23px;}

.right{margin-right: 10px;}
.right-1{margin-right: 20px;}

/*================================link-button===============================*/
a {text-decoration:none; cursor:pointer;}
a:hover {text-decoration:none;}
ul {
  margin:0; 
  padding:0;
  list-style-image:none;
  }
.button{
  display: inline-block;
  font-family: Georgia, "Times New Roman", Times, serif; 
  font-size: 11px; 
  line-height: 14px;
  padding:11px 12px 12px 12px;
  background: url(images/bg-button.jpg) 0 0 repeat-x; 
  color:#ffffff ; 
  text-transform:uppercase;
  }
.button:hover{
  background-position:0 bottom;
  }
.button-1{
  display: inline-block;
  font-family: Georgia, "Times New Roman", Times, serif; 
  font-size: 11px; 
  line-height: 14px;
  padding:11px 12px 12px 36px;
  background: url(images/bg-button.jpg) 0 bottom repeat-x; 
  color:#ffffff ; 
  text-transform:uppercase;
  position:relative;
  }
  .button-1 span{
  background: url(images/bg-span-button.png) 0 0 no-repeat;
  width:18px;
  height:22px;
  display:block;
  position:absolute;
  left:13px;
  top:6px;
  }
.button-1:hover{background-position:0 0;}
/******************************************************************/
.clear {clear:both; line-height:0; font-size:0; width:100%;}
.wrapper, .wrapper-extra, .extra-wrap{overflow:hidden;}
.wrapper-after:after{
 clear:both;
 content:".";
 display:block;
 height:0;
 visibility:hidden;}
.fleft {float:left;}
.fright {float:right;}
/*===============================>H-logo-properties=========================*/ 
h1{
  font-size:21px; 
  display: block;
  margin:20px 0 15px 0;
  background: url(images/bg-h1.png) center 0 no-repeat;
  text-align:center;
  }
h1 a{
  display:inline-block;
  margin-top:-41px;
  }
h2{
  font-size:23px; 
  font-family: calibri, serif ; 
  color:#5d5252; 
  line-height:26px;
  font-weight: normal;
  text-transform:uppercase;
  }
  h2>span{color:#d63332;}
  .bg-h2{
    text-align:center;
    background: url(images/bg-h2.png) center 11px no-repeat;
    margin:12px 0 22px 0;}
h3{
  font-size:18px; 
  font-family: Georgia, "Times New Roman", Times, serif ; 
  color:#5d5252; 
  line-height: 22px; 
  font-weight: normal;
  text-transform:uppercase;
  }
  h3 span{
    display:inline-block;
    margin-top:-3px;
    }
/*********************************header*************************************/
.head{
  width:100%;  
  position:relative; 
  z-index:2;
  }
header{
  width: 940px; 
  margin: 0 auto;
  position:relative;
  }
/*********************************content*************************************/
#content{
  width:100%; 
  margin:0;
    position:relative; 
  z-index:1;
  }
.login{
  float:left;
  padding:36px 0 0 0;}
  .login em{
    display:inline-block;
    margin-right:25px;
    }
  .login a{
    color:#a59f9f;
    font-family: Georgia, "Times New Roman", Times, serif;
    font-size:16px;
    }
    .login a:hover{color:#d63332;}
.order{
  float:right;
  color:#5d5252;
  text-align:right;
  font-size:16px;
  font-family: Georgia, "Times New Roman", Times, serif;
  padding:36px 0 0 0;
  }
  .order em{display:block;}
  .order a{
    color:#5d5252;
    font-size:25px;
    line-height:32px;
    display:inline-block;
    font-style:italic;
    margin-top:-3px;
    }
    .order a span{color:#d63332;}
    .order a:hover{color:#d63332;}
#map_canvas{width: 590px; height: 320px;}
.adress-div{
  width:310px;
  float:left;
  margin: 2px 0 0 20px;}
.adress{
  margin-top: 18px;
  font-size: 12px;
  } 
.adress dd{text-align:left;}
.adress a{
  color:#d63332 ; 
  display:inline-block;
  font-size: 12px; 
  margin-left:11px;
  font-weight:bold;
  }
.adress a:hover{
  color:#000 ; 
  text-decoration:underline;
  }
    .adress span{
      display:inline-block; 
      width:69px;
      }
    .adress strong{
      display:inline-block;
      font-weight:normal;
      }
    .title1{
      letter-spacing:0; 
      text-align:left; 
      font-size: 12px;
      margin:0 0 20px 0; 
      display:inline-block; 
      font-weight: bold; 
      color:#5d5252 ;
      }
.pp{
  display:inline-block; 
  margin:2px 25px 0 0; 
  }
  .pp span{
    color:#5d5252;
    display:inline-block;
    margin:20px 0 0 0;}
    .pp span:first-child{margin-top:0;}
  .pp a{
    color:#d63332;
    display:inline-block;
    margin-top:28px;
    }
  .pp a:hover{
    color:#000 ; 
    text-decoration:underline;
    }
/**********************************index***********************************/
.box{
  width:100%;
  margin-top:-55px;
  }
.box .grid_4>div{
  position:relative;
  border:1px solid #fff;
  padding:19px 20px 20px 20px;
  background:#f8f8f8;
  text-align:right;
  font-family: Georgia, "Times New Roman", Times, serif;
  margin-bottom:40px;
}
  .div-button{
    display:inline-block;
    position:absolute;
    bottom:-5px;
    left:87px;
    }
  .box .grid_4>div a{
    text-transform:uppercase;
    background: url(images/bg-button-box.jpg) 0 0 repeat-x #c83331;
    font-size:11px;
    font-weight:bold;
    line-height:16px;
    padding:16px 17px 15px 21px;
    color:#fff;
    position:relative;
    }
    .box .grid_4>div a:hover{background:#fc807f;}
    .box .grid_4>div a:after{
      position:absolute;
      content:"";
      background: url(images/button-box-after.png) 0 0 no-repeat;
      width:5px;
      height:46px;
      right:-5px;
      top:0;
      }
  .block span{
    font-size:48px;
    line-height:60px;
    display:inline-block;
    color:#d63332;
    }
  .block em{
    font-style:normal;
    font-size:18px;
    color:#5d5252;
    line-height:24px;
    text-transform:uppercase;
    display:inline-block;
    margin-top:-10px;
    }
  .block p{
    color:#aea8a8;
    font-size:14px;
    font-style:italic;
    line-height:17px;
    margin:1px 0 38px 0;
    }
  .box .block .inner{
    border:3px solid #fff;
    background: url(images/bg-inner.jpg) 0 0 no-repeat #f9f9f9;
    padding:10px 19px 0 80px;
    }
    
    .block-1 span{
    font-size:48px;
    line-height:60px;
    display:inline-block;
    color:#d63332;
    }
  .block-1 em{
    font-style:normal;
    font-size:18px;
    color:#5d5252;
    line-height:24px;
    text-transform:uppercase;
    display:inline-block;
    margin-top:-10px;
    }
  .block-1 p{
    color:#aea8a8;
    font-size:14px;
    font-style:italic;
    line-height:17px;
    margin:1px 0 21px 0;
    }
  .box .block-1 .inner{
    border:3px solid #fff;
    background: url(images/bg-inner.jpg) 0 0 no-repeat #f9f9f9;
    padding:10px 19px 0 80px;
    }
    
   .block-2 span{
    font-size:48px;
    line-height:50px;
    display:inline-block;
    color:#d63332;
    margin-top:-34px;
    }
    .block-2 em{
    font-style:normal;
    font-size:18px;
    color:#5d5252;
    line-height:24px;
    text-transform:uppercase;
    display:inline-block;
    margin-top:-10px;
    }
  .block-2 p{
    color:#aea8a8;
    font-size:14px;
    font-style:italic;
    line-height:17px;
    margin:-9px 0 22px 0;
    }
  .box .block-2 .inner{
    border:3px solid #fff;
    background: url(images/bg-inner.jpg) 0 0 no-repeat #f9f9f9;
    padding:47px 19px 30px 80px;
    } 
    .box .grid_4>div span, .box .grid_4>div em, .box .grid_4>div p{
    position:relative; 
    z-index:2;
    }
    .block strong{
      position:absolute;
      background:url(images/bg-block-1.png) 0 0 no-repeat;
      width:138px;
      height:210px;
      display:block;
      top:37px;
      left:23px;
      }
    .block-1 strong{
      position:absolute;
      background: url(images/bg-block-2.png) 0 0 no-repeat;
      width:100px;
      height:156px;
      display:block;
      top:37px;
      left:23px;
      }
    .block-2 strong{
      position:absolute;
      background: url(images/bg-block-3.png) 0 0 no-repeat;
      width:100px;
      height:156px;
      display:block;
      top:37px;
      left:23px;
      }
      .block-3 strong{
      position:absolute;
      background: url(images/bg-block-3.png) 0 0 no-repeat;
      width:100px;
      height:156px;
      display:block;
      top:37px;
      left:23px;
      }
.block-3{
  border-top:1px solid #d0cece;
  margin:20px 0 0 0;
  padding:13px 0 0 0;
  min-height:55px;
  }
.cost{
  font-size:31px;
  font-family: Georgia, "Times New Roman", Times, serif;
  line-height:37px;
  color:#5d5252;
  margin:16px 0 0 0;
  }
  .cost em{
    font-style:normal;
    color:#d63332;
    }
  .cost strong{
    font-weight:normal;
    font-size:18px;
    display:inline-block;
    margin-top:-4px;
    }
/**********************************index-1*********************************/
.list{}
.list li{
  background: url(images/bg-li-list.png) 0 11px no-repeat;
  padding:4px 0 5px 11px;
  font-size:14px;
  }
.list li a{color:#5d5252;}
.list li a:hover{color:#d63332;}
.box-1{
  background: url(images/bg-box-1.png) 0 0 repeat-y;
  overflow:hidden;
  }
.box-1 div{
  width:180px;
  float:left;
  margin-left:40px;
  }
  .box-1 div:first-child{margin-left:0;}
  .box-1 div strong{
    font-size:40px;
    color:#d63332;
    line-height:48px;
    font-weight:normal;
    font-family: Georgia, "Times New Roman", Times, serif;
    }
    .box-1 div strong em{
      font-size:24px;
      line-height:30px;
      color:#5d5252;
      display:inline-block;
      margin:14px 0 0 0;
      font-style:normal;
      }
/**********************************index-2*********************************/
.box-2{
  width:586px;
  border:1px solid #fff;
  border-radius: 3px;
  background:#dbd9d9;
  padding: 19px 0 14px 14px;
  margin-bottom:7px;
  }
  .inner-1{
    background: url(images/bg-inner-1.png) 0 0 no-repeat;
    padding:0 0 0 12px;
      min-height:50px;
    }
.box-2 a{
  font-size:24px;
  color:#5d5252;
  line-height:30px;
  font-family: Georgia, "Times New Roman", Times, serif;
  text-transform:uppercase;
  }
  .box-2 a:hover{color:#d63332;text-decoration:underline;}
  .box-2 a span{color:#d63332;}
.box-2 strong{
  font-weight:normal;
  font-size:13px;
  color:#7a7777;
  display:inline-block;
  margin-top:-1px;
  }
.height{height:8px;}

#bg{background: url(images/page-2-img.jpg) right 0 no-repeat #dbd9d9;}
#bg-1{background: url(images/page-2-img-1.jpg) right 0 no-repeat #dbd9d9;}
#bg-2{background: url(images/page-2-img-2.jpg) right 0 no-repeat #dbd9d9;}
#bg-3{background: url(images/page-2-img-3.jpg) right 0 no-repeat #dbd9d9;}
#bg-4{background: url(images/page-2-img-4.jpg) right 0 no-repeat #dbd9d9;}
#bg-5{background: url(images/page-2-img-5.jpg) right 0 no-repeat #dbd9d9;}
#bg-6{background: url(images/page-2-img-6.jpg) right 0 no-repeat #dbd9d9;}
#bg-7{background: url(images/page-2-img-7.jpg) right 0 no-repeat #dbd9d9;}
#bg-8{background: url(images/page-2-img-8.jpg) right 0 no-repeat #dbd9d9;}

.block-4{
  border:1px solid #fff;
  background:#eeeeee;
  padding:6px;
  text-align:right;
  overflow:hidden;
  margin:38px 0 0 0;
  }
  .block-4 span{
    display:block;
    font-size:24px;
    color:#5d5252;
    line-height:30px;
    text-transform:uppercase;
    font-family: Georgia, "Times New Roman", Times, serif;
    display:inline-block;
    margin:0 17px 0 0 ;
    }
  .block-4 strong{
    font-size:36px;
    color:#d63332;
    line-height:44px;
    text-transform:uppercase;
    font-weight:normal;
    font-family: Georgia, "Times New Roman", Times, serif;
    display:block;
    margin:-4px 17px 0 0;
    }
  .block-4 a{
    font-family: Arial, Helvetica, sans-serif;
    color:#5d5252;
    font-size:18px;
    }
    .block-4 a:hover{color:#d63332;}
  .block-4 .inner-2{height:155px;padding:18px 0 19px 0;}
  .inner-2{
    border:1px solid #fafafa;
    background: url(images/bg-inner-2.jpg) 0 0 no-repeat #fdfdfd;
    padding:18px 0 19px 0;
    }
    .inner-2>.fright{
      width:110px;
      text-align:left;
      overflow:hidden;
      margin:10px 0 12px 0;
      }

  .inner-3{
    border:1px solid #fafafa;
    background: url(images/bg-inner-3.jpg) 0 0 no-repeat #fdfdfd;
    padding:21px 0 19px 0;
    }
    .inner-3>.fright{margin:6px 15px 0 0;}
/**********************************index-3*********************************/
.link-1{
  font-weight:bold;
  color:#5d5252;}
  .link-1:hover{color:#d63332;}
/**********************************index-4*********************************/
.list-1 li {
  background: url(images/bg-li-list.png) 0 11px no-repeat;
    padding:4px 0 5px 11px;
  font-size:14px;
  overflow:hidden;
  vertical-align:top;
  color:#5d5252;
  width:273px;
  display:block;
    }
 .list-1 li strong {
   background: url(images/line-hor.png) repeat-x 0% 15px;
   display: block; 
   overflow: hidden;
   }
 .list-1 li span {
  float: right;
  color: #5d5252;
 }
 .list-1 li a {
  color:#5d5252;
  float:left;
  text-decoration:none;
   }
   .list-1 li a:hover{color:#d63332;}
/**********************************index-5*********************************/
.width{
  width:251px;
  position:relative;
  }
.width strong{
  display:block;
  background: url(images/bg-arrov.png) 0 0 no-repeat;
  width:37px;
  height:65px;
  position:absolute;
  top:61px;
  left:268px;
  }
.width-1{
  width:251px;
  padding-left:14px;
  position:relative;
  }
.width-2{
  width:251px;
  padding-left:30px;
  }
.width-1 strong{
  display:block;
  background: url(images/bg-arrov.png) 0 0 no-repeat;
  width:37px;
  height:65px;
  position:absolute;
  top:61px;
  left:285px;
  }
.width-2 h3{
  font-size:24px;
  margin-top:24px;
  }
.number{
  float:left;
  width:57px;
  font-family: Georgia, "Times New Roman", Times, serif;
  color:#fff;
  font-size:50px;
  line-height:60px;
  background: url(images/bg-number.jpg) 0 0 repeat-x #c83331;
  text-align:center;
  margin:8px 17px 0 0;
  padding: 0 0 6px 0;
  }
#form2{width:282px;}
#form2 label{
  min-height:47px;
  display:block;
  }
#form2 input{
  font-family: Arial, Helvetica, sans-serif;
  color:#938d8d;
  font-size:12px;
  height:15px;
  padding:15px 0 10px 8px;
  width:272px;
  background: url(images/bg-input.jpg) 0 0 repeat-x #f9f9f9;
  border:1px solid #dbdbdb;
  }
.code{
  background: url(images/bg-code.jpg) 0 0 no-repeat;
  width:178px;
  height:48px;
  border:1px solid #dbdbdb;
  margin:4px 0 21px 0;
  }
#form2 .button{background: url(images/bg-button.jpg) 0 bottom repeat-x; }
#form2 .button:hover{background-position:0 0;}

.block-5{
  background:#eeeeee;
  border:1px solid #fff;
  padding:6px;
  margin:40px 0 0 0;
  float:left;
  width:366px;
  }
  .block-5 span{
    display:block;
    font-size:24px;
    color:#5d5252;
    line-height:30px;
    text-transform:uppercase;
    font-family: Georgia, "Times New Roman", Times, serif;
    display:inline-block;
    margin:0 17px 0 0;
    }
  .block-5 strong{
    font-size:36px;
    color:#d63332;
    line-height:44px;
    text-transform:uppercase;
    font-weight:normal;
    font-family: Georgia, "Times New Roman", Times, serif;
    display:block;
    margin:-4px 17px 0 0;
    }
  .block-5 a{
    font-family: Arial, Helvetica, sans-serif;
    color:#5d5252;
    font-size:18px;
    }
    .block-5 a:hover{color:#d63332;}
  .block-5 .inner-2{
    border:1px solid #fafafa;
    background: url(images/bg-inner-2-1.jpg) 0 0 no-repeat #fff;
    text-align:right;
    padding: 18px 0 0 9px;
    height:141px;
    }
  .block-5 .inner-2>.fright{
    margin: 10px 17px 12px 0;
        overflow: hidden;
        text-align: left;
        width: auto;
         }
  .block-6{
  background:#eeeeee;
  border:1px solid #fff;
  padding:6px;
  margin:40px 0 0 10px;
  float:left;
  width:216px;
  }
  .block-6 span{
    display:block;
    font-size:24px;
    color:#5d5252;
    line-height:30px;
    text-transform:uppercase;
    font-family: Georgia, "Times New Roman", Times, serif;
    display:inline-block;
    margin:0 28px 0 0;
    }
  .block-6 strong{
    font-size:36px;
    color:#d63332;
    line-height:44px;
    text-transform:uppercase;
    font-weight:normal;
    font-family: Georgia, "Times New Roman", Times, serif;
    display:block;
    margin:-4px 17px 0 0;
    }
  .block-6 a{
    font-family: Arial, Helvetica, sans-serif;
    color:#d63332;
    font-size:18px;
    text-decoration:underline;
    }
    .block-6 a:hover{color:#5d5252;}
  .block-6 .inner-2{
    border:1px solid #fafafa;
    background: url(images/bg-inner-2-2.jpg) 0 0 no-repeat #fff;
    text-align:right;
    padding: 18px 0 29px 0;
    }
  .block-6 .inner-2>.fright{
    margin: 10px 17px 12px 0;
        overflow: hidden;
        text-align: left;
        width: auto;
         }
/**********************************index-6*********************************/

/**********************************contact-form****************************/
#form1 {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
  color:#938d8d ;
  padding-top:1px;
  }
#form1 input {
  font-family: Arial, Helvetica, sans-serif;
  color:#938d8d;
  font-size:12px;
  height:15px;
  padding:14px 0 10px 8px;
  width:370px;
  background: url(images/bg-input.jpg) 0 0 repeat-x #f9f9f9;
  border:1px solid #dbdbdb;
  }
#form1 textarea {
  font-family: Arial, Helvetica, sans-serif;
  color:#938d8d;
  font-size:12px;
  height:163px;
  padding:14px 0 10px 8px;
  width:529px;
  background: url(images/bg-input.jpg) 0 0 repeat-x #f9f9f9;
  border:1px solid #dbdbdb;
  overflow:auto; 
  resize:none; 
  } 
#form1 label{
  display:block; 
  min-height: 47px;
  position:relative;
  }
#form1 label .feed_name{display:block; float:left;} 
#form1 label.message {
  display:block; 
  padding-bottom:0;
  } 
#form1 span{
  display:block; 
  margin: 0px 0 6px 3px; 
  float:left; 
  width:170px;
  }
#form1 .error, #form1 .empty, #form1 .success {
  display:none; 
  text-align:left; 
  color:#d63332;
  margin-bottom:4px;
  margin-left:10px;
  } 
#form1 .error, #form1 .empty {
  text-align:left; 
  color:#ff0e0e; 
  font-size:11px;
  float:left; 
  line-height:12px;
  padding-top:3px;
  width:170px;
  display:none;
  }
#form1 .message .empty{
  position: static; 
  margin:5px 0 5px 5px; 
  text-align:left;
  }
#form1 .buttons2{position:relative;padding:24px 0 0 0;}
#form1 .buttons2 .button{float:right;margin-left:8px;}
#form1 .buttons2 .button:hover{}
.error-empty {
  margin: 0 0 10px 5px !important; 
  display:none; 
  float:left !important;
  width:170px; 
  word-spacing:-1px;
  }
/****************************footer************************/
footer{margin:40px 0 0 0;}
.main-footer{
  padding-top: 41px; 
  padding-bottom: 20px; 
  text-align:center;
  background: url(/images/bg-footer.png) center 0 no-repeat;
  }
  .menu{
    overflow:hidden;

    text-align:center;
    display:block;
    padding-left:137px;
    }
  .menu li{
    font-size:16px;
    line-height:20px;
    font-style:italic;
    font-weight:bold;
    font-family: Georgia, "Times New Roman", Times, serif;
    float:left;
    margin-left:24px;
    letter-spacing:-1px;
    }
    .menu li:first-child{margin-left:0;}
  .menu li a{color:#a59f9f;}
  .menu li a:hover, .menu li.current-1>a{color:#d63332;}
footer p{
  font-size:12px;
  color:#938d8d;
  font-family: Arial, Helvetica, sans-serif;
  margin:13px 0 0 0;
  }
footer p a{color:#938d8d;}
footer p a:hover{color:#d63332;}
/*=======================superfish=========================*/
nav{
  position:relative;

   background: url('images/bg-nav.jpg') repeat fixed;
  height:59px;
  margin:10px 0 0 0;
  padding: 0 0 0 22px;
  }
.sf-menu{display:block;}

.sf-menu ul {position:absolute; top:-999px; display:none; z-index:999;}
.sf-menu a {display:block;}
.sf-menu li:hover ul,.sf-menu li.sfHover ul {z-index:999;}

ul.sf-menu li:hover li ul,ul.sf-menu li.sfHover li ul {top:-999px; display:none;z-index:999}
ul.sf-menu li li:hover ul,ul.sf-menu li li.sfHover ul {left:100%; top:0;z-index:999}
ul.sf-menu>li{
    font-family: Georgia, "Times New Roman", Times, serif ; 
    font-size: 16px; 
    float:left; 
    position:relative;
    font-weight:bold;
    text-transform:uppercase;
    margin:-4px 0 0 9px;
    }
    ul.sf-menu>li:first-child{margin-left:0;}
    ul.sf-menu>li>strong{
      display:none;
      position:absolute;
      background: url(images/bg-li-after.png) 0 0 no-repeat;
      width:5px;
      height:72px;
      top:0;
      right:-5px;
      }
ul.sf-menu>li>a{
  display:block;
  position:relative;
  padding:24px 10px 28px 10px;  
  color:#fff ;
  }
ul.sf-menu>li.current , ul.sf-menu>li.sfHover , ul.sf-menu>li:hover {background: url(images/bg-li.jpg) 0 0 repeat-x #c83331;}
ul.sf-menu>li.current>strong , ul.sf-menu>li.sfHover>strong , ul.sf-menu>li:hover>strong{display:block;} 
ul.sf-menu>li.current>a, ul.sf-menu>li.sfHover>a, ul.sf-menu>li>a:hover{}

.sf-menu>li>ul{
  left:50px;
  top:77px;
  width:  122px;
  padding:14px 20px 14px 20px; 
  z-index:99;
  background:#443c3c ; 
  }
.sf-menu>li>ul>li {
   display:block; 
   font-size: 14px; 
   font-style:italic;
   text-transform:none;
   border-top:1px solid #534949;
   padding:3px 0 3px 5px;
   font-weight:normal;
  }
.sf-menu>li>ul>li:first-child{border-top: none;}
.sf-menu>li>ul>li>a {
  display: block;
  color:#bbaeae ;
  }
.sf-menu>li>ul>li:hover, ul.sf-menu>li>ul>li.sfHover{}
.sf-menu>li>ul>li>a:hover, ul.sf-menu>li>ul>li.sfHover a {color:#d63332;}


/*--------- slider ---------*/
.main-slide{
  width:100%;
  background: url(images/bg-main-slide.jpg) 0 0 repeat;
  height:510px;
  margin-top:53px;
  }
#slide {
  width: 900px;
  height:434px;
  position:relative; 
  overflow:hidden; 
  z-index:1; 
  margin:0 auto;
  background:#f4f4f4;
  border:1px solid #fff;
  padding:20px 19px;
  top:-40px;
  }
.slider {
  position: relative; 
  z-index:1;
  width: 900px; 
  height: 434px; 
  overflow: hidden;
  }
.items {display:none;}
.pagination {
  position:absolute; 
  bottom:0; 
  left:404px;
  z-index:1000; 
  background: url(images/bg-pagination.png) 0 0 no-repeat;
  width:80px; 
  height:43px;
  padding-left:12px;}
.pagination li {float:left; margin: 22px 5px 0 2px;}
.pagination a {display:block; width:11px; height:11px; background: url(images/pagination.png) right 0 no-repeat;}
.pagination li.current a, .pagination li:hover a{background: url(images/pagination.png) 0 0 no-repeat;}

#slide-1 {
  position:relative; 
  overflow: visible; 
  z-index:1;
  padding-top:85px; 
  width:960px;
  margin:0 auto;
  }
.slider-1 {
  position: relative; 
  z-index:1;
  width: 806px; 
  height: 536px; 
  overflow: visible !important;
  border:10px solid #fff;
  margin:0 0 0 56px;
  }
  .slider-1 .banner{
    width:280px;
    position:absolute;
    top:-58px;
    left:258px;
    text-align:center;
    }
  .slider-1 .banner>span{
    font-size:12px;
    line-height:14px;
    color:#5d5252;
    font-weight:bold;
    font-family: Arial, Helvetica, sans-serif;
    display:inline-block;
    }
  .prev{
    display:block;
    background: url(images/prev.png) 0 0 no-repeat;
    position:absolute;
    width:43px;
    height:43px;
    top:334px;
    left:0px;
    }
    .prev:hover{background-position:0 bottom;}
  .next{
    display:block;
    background: url(images/next.png) 0 0 no-repeat;
    width:43px;
    height:43px;
    position:absolute;
    top:334px;
    right:20px;
    }
    .next:hover{background-position:0 bottom;}

/*toTop*/

#toTop {
  display:none;
  text-decoration:none;
  position:fixed;
  right:50%;
  bottom:113px;
  overflow:hidden;
  width:47px;
  height: 27px;
  border:none;
  text-indent:-999px;
  z-index:20;
  background: url(images/top.jpg) no-repeat 0 0 ;
  }

#toTopHover {
  background: url(images/top.jpg) no-repeat 0 bottom;
  width: 47px;
  height: 27px;
  display:block;
  overflow:hidden;
  float:left;
  opacity: 0; 
  }
#toTop:active, #toTop:focus {
  outline:none;
}
.page_img{
  text-align:center;
  padding-top:25ps;
  }
.text1 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu1_img.png) no-repeat right bottom;
}
.text2 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu2_img.png) no-repeat right bottom;
  
}
.text3 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu3_img.png) no-repeat right bottom;
  
}
.text4 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu4_img.png) no-repeat right bottom;
}
.text5 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu5_img.png) no-repeat right bottom;
}
.text6 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu6_img.png) no-repeat right bottom;
}
.text7 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu7_img.png) no-repeat right bottom;
}
.text8 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu8_img.png) no-repeat right bottom;
}
.text9 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu9_img.png) no-repeat right bottom;
}
.text10 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu10_img.png) no-repeat right bottom;
}
.text11 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu11_img.png) no-repeat right bottom;
}
.text12 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu12_img.png) no-repeat right bottom;
}
.text13 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu13_img.png) no-repeat right bottom;
}
.text14 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu14_img.png) no-repeat right bottom;
}
.text15 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu15_img.png) no-repeat right bottom;
}
.text16 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu16_img.png) no-repeat right bottom;
}
.text17 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu17_img.png) no-repeat right bottom;
}
.text18 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu18_img.png) no-repeat right bottom;
}
.text19 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu19_img.png) no-repeat right bottom;
}
.text20 {
  text-align:justify;
  width: 75%;
  color:#000;
  font-size:14px;
  margin-left: 50px;
  padding: 30px 30px;
  font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  border:2px solid outset;
  border-radius: 25px;
  box-shadow: 10px 10px 5px #888888;
  margin-right: 200px;
  background:url(images/menu20_img.png) no-repeat right bottom;
}
.ul-2 {
}
.ul-2 li {
  padding:4px 0;
}
.ul-2 li a {
  color:#fc5a03;
  background:url(images/marker-4.png) left -88px no-repeat;
  padding-left:19px;
  text-decoration:none;
  display:inline-block;
  line-height:18px;
}
.ul-2 li a:hover {
  color:#214048;
  background:url(images/marker-4.png) left 4px no-repeat;
}
.style35 {

  background-color:#fff;
  border-color:#900;
  border:2px solid outset;
  border-radius: 5px;
  box-shadow: 5px 5px 5px #888888;
  height:120px;
}
.style34 {

  background-color:#fff;
  border-color:#900;
  border:2px solid outset;
  border-radius: 5px;
  box-shadow: 5px 5px 5px #888888;
  height:25px;
}
.submit {
  border:2px solid outset;
  border-radius: 5px;
  box-shadow: 5px 5px 5px #888888;
  text-align:right;
  float:inherit;
}
.img-indent {float:left; margin:0 15px 15px 0;}
.img-border {
  border:1px solid #c3c3c3;
  padding:5px;
  border-radius:5px;
  -moz-border-radius:5px;
  -webkit-border-radius:5px;
  float:left;
}
    </style>


 <header>
        <!-- <img src="images/menu1_img.png"> -->
           <div class="header" ><h1 style="padding-top: 20px;"><span style="font-size:50px"> Zeeshan Foods & Marriage Hall </span></h1></div>
	<nav style="
    padding-top: 18px;
"> 
             <ul class="sf-menu">
                 <li ><a href="{{route('index')}}">Home</a></li>
                  <li><a href="{{route('about')}}">About</a></li>
                  <li><a href="{{route('menu')}}">Menu &amp; Specials</a></li>
  		  <li><a href="{{route('gallery')}}">Our Gallery</a></li>
                  <li><a href="{{route('planning')}}">Plan Event's</a></li> 
                  <li><a href="{{route('booking')}}">Bookings</a></li>
         
                  <li><a href="{{route('contact')}}">Contact Us</a></li>
              </ul>
            </nav>
          <div class="clear"></div>
      </header>