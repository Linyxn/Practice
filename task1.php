<html>
   <head>
     <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta http-equiv="X-UA-Compatible" content="IE=7,IE=9">
     <meta http-equiv="X-UA-Compatible" content="IE=7,9">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width,initial-scale=1.0">

     <style>
        .sel_btn{
            height: 21px;
            line-height: 21px;
            padding: 0 11px;
            background: #02bafa;
            border: 1px #26bbdb solid;
            border-radius: 3px;
            /*color: #fff;*/
            display: inline-block;
            text-decoration: none;
            font-size: 12px;
            outline: none;
        }
        .ch_cls{
            background: #e4e4e4;
        }
    </style>
    <script type="text/javascript" src="jquery-1.11.3.js"></script>  <style>
          .sel_btn{
              height: 21px;
              line-height: 21px;
              padding: 0 11px;
              background: #02bafa;
              border: 1px #26bbdb solid;
              border-radius: 3px;
              /*color: #fff;*/
              display: inline-block;
              text-decoration: none;
              font-size: 12px;
              outline: none;
          }
          .ch_cls{
              background: #e4e4e4;
          }
      </style>
      <script type="text/javascript" src="jquery-1.11.3.js"></script>



	      <title>搜索</title>
     <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
     <script type="text/javascript">
         $("#btn1").click(function(){
             var 商品名称 = $("input[name='商品名称']").val();
             $.get("http://localhost/demo1/task1.php",{
                 "商品名称":商品名称,
             },function(data){
                 alert(data);
             })
         });
         $("#btn2").click(function(){
           var 商品名称 = $("input[name='商品名称']").val();
           $.get("http://localhost/demo1/piliang.php",{
               "商品名称":商品名称,
           },function(data){
               alert(data);
           })
       });
   </script>
   <script type="text/javascript" src="scripts/jquery-1.5.2.min.js"></script>
   <script>
     $(function(){
    $("#input1").click(function(){//按钮绑定点击事件
        $("#text1").toggle();//文本框显示出来  注：之前设置display:none的样式
    });
    $("#input1").click(function(){//按钮绑定点击事件
        $("#input1").hide();//文本框显示出来  注：之前设置display:none的样式
    });
});
    </script>



     <link rel="stylesheet" type="text/css" href="task1.css" />
     <link rel="stylesheet" type="text/css" href="webpage.css">
     <link rel="stylesheet" type="text/css" href="effect2.css">
     <link rel="stylesheet" type="text/css" href="result.css">

     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
       <style type="text/css">
/* 导航栏 */
.top{
/* 设置宽度高度背景颜色 */
height: auto; /*高度改为自动高度*/
width:50%;
margin-left: 0;
background:transparent;
position: absolute; /*固定在顶部*/
top: 0;/*离顶部的距离为0*/
margin-bottom: 5px;
z-index: 1;
font-weight: bolder;
font-family: Microsoft YaHei;
right:5%;
padding-top:50px;
padding-right:0px;


}
.top ul{
/* 清除ul标签的默认样式 */
width: auto;/*宽度也改为自动*/
list-style-type: none;
white-space:nowrap;
overflow: hidden;
margin-left: 5%;
/* margin-top: 0;          */
padding: 0;

}
.top li {
float:right; /* 使li内容横向浮动，即横向排列  */
margin-right:5%;  /* 两个li之间的距离*/
position: relative;
overflow: hidden;
}

.top li a{
/* 设置链接内容显示的格式*/
display: block; /* 把链接显示为块元素可使整个链接区域可点击 */
color:white;
text-align: right;
padding: 3px;
align: right；
overflow: hidden;
text-decoration: none; /* 去除下划线 */

}
.top li a:hover{
/* 鼠标选中时背景变为黑色 */
background-color: #111;
}
.top ul li ul{
/* 设置二级菜单 */
margin-left: -0.2px;
background:rgb(189, 181, 181);
position: relative;
display: none; /* 默认隐藏二级菜单的内容 */

}
.top ul li ul li{
/* 二级菜单li内容的显示 */

float:none;
text-align: center;
}
.top ul li:hover ul{
/* 鼠标选中二级菜单内容时 */
display: block;
}
body{
background:#eff3f5;
}

/* 搜索栏 */
</style>

</head>

<body>


  <div class="all" id="FirstPart" style="width: 100%;height: 100%;">
     <div class="top">
           <center>
            <ul>
              <!-- 导航栏列表 -->
            <li><a href="#FourthPart">联系我们</a></li>
            <li><a href="#ThirdPart">团队介绍</a></li>
            <li><a href="#SecondPart">观看视频</a></li>
            <!-- <li>
                <a href="#">一级菜单</a>
                <ul>
                    <li><a href="#">二级菜单</a></li>
                    <li><a href="#">二级菜单</a></li>
                </ul>
            </li> -->
              </ul>
            </center>
    </div>
    <div class="demo1">

    </div>
    <div class="demo" style="border:3px solid transparent">
      商品分类标签查询
    </div>
    <div class="logo" >
      <div class="tubiao" id="tubiao1" style="border:2px solid transparent">
        <img src="Logo.png" alt="Smiley face" width="50px" height="50px">
      </div>

        <img src="biaoti.png"  id="biaoti1">


   </div>
    <!-- <input type="button" value="隐藏" onclick="fun(this)">   -->

   <div  class="result" id="div" style="border:white solid 3px " onMouseout="hidden();">
     <script>
     function fun(obj){
    var div = document.getElementById("div");
    if(obj.value==""){
        div.style.display = "none";
        obj.value = "";
    } else {
        div.style.display = "block";
        obj.value = "";
    }
}

     </script>

     <?php
     $servername = "localhost";
     $username = "root";
     $password = "990729";

     // 创建连接
     $con = new mysqli($servername, $username, $password);

     // 检测连接
     if ($con->connect_error) {
         die("连接失败: " . $con->connect_error);
     }
     //echo "连接成功";
     //连接数据库test
         mysqli_select_db($con,"test");
         //$sql = mysqli_query($con,"select * from train");
           $sql = mysqli_query($con,"select * from train where 商品名称 = '{$_GET['商品名称']}'");
         //$sql = "SELECT `tel` from `yonghubiao` where name = '{$_GET['name']}'";
         $datarow = mysqli_num_rows($sql); //长度
            //循环遍历出数据表中的数据
            for($i=0;$i<$datarow;$i++){
                $sql_arr = mysqli_fetch_assoc($sql);
                $商品名称 = $sql_arr['商品名称'];
                $商品分类 = $sql_arr['商品分类'];
                echo
                "<tr>
                <td>$商品名称</td>
                </tr>";
                echo "<br>";
                echo
                "<tr>
                <td>$商品分类</td>
                </tr>";


            }

       // echo "<h1>GET_PAGE</h1>";
       //echo 'userName:'.$_GET['商品名称'];
       //include_once('test1.html');
     ?>




   </div>







    <div id = "tab" onclick="fun(this)">
      <!-- 搜索栏选项卡 -->
            <ul>
              <li class="on">单个搜索</li>
              <li class="off">批量查询</li>
              <li class="off">全部标签</li>

            <!-- <li class="on">语音输入</li> -->
            </ul>


         <div ondragend="this.draggable=false" id="firstPage" class="show"  >


              <form action="http://localhost/demo1/task1.php" method="get">
                <a href = "#">
                     <input type="text" class="box"  name="商品名称" value="请输入商品名称"  onFocus="if(value==defaultValue){value='';this.style.color='#000'}"
                    onBlur="if(!value){value=defaultValue;this.style.color='#aaa'}"  style="color:#aaa" onclick="fun(this)">
                  <//input type="button" value="搜  索" class="search"></a><br/>

                    <button  id="btn1" value="搜 索" class="search" onclick="fun(this)">搜    索</a><br/>

                  </form>



          </div>

            <div id="secondPage" class="hide" >
              <a href = "#">
                 <form action="http://localhost/demo1/piliang.php" method="get">
               <//input type="button" class="box"  id="input1"  >

             <textarea name="商品名称" id="text1" class="box" rows="0" cols="0" type="hidden"  value="请输入商品名称"
             onFocus="if(value==defaultValue){value='';this.style.color='#000'}"
             onBlur="if(!value){value=defaultValue;this.style.color='#aaa'}"  style="color:#aaa;top=23%;width:650px;height:175px;font-size:17px;font-family:Microsoft Yahei;overflow:auto;"wrap="off"
             >
             </textarea>
           <button  id="btn2" value="搜  索" class="search2" >搜    索</a><br/>
           </form>

        </div>
        <div id="thirdPage" class = "hide"  >
                 <!-- <input type="text"class="box" value="请输入商品名称" onfocus="if (value =='请输入商品名称'){value =''}" onblur="if (value ==''){value='请输入商品名称'}" > -->
               <//input type="text" class="box"  value="全部商品分类标签下载"  style="color:#000">
             <//input type="button" value="搜 索" class="search"><//a><//br/>
           <//a class="search" id="sel_btn1" href="#" onclick="changeSelBtn(1)" ><//a>
           <//a class="sel_btn ch_cls" id="sel_btn1" href="test.rar" onclick="changeSelBtn(1)" ><//a>
           <div class="demo2" style="border:1px solid transparent">
             商品分类标签（.txt)
           </div>
           <div class="tubiao" id="tubiao2" style="border:2px solid transparent">
             <img src="txt.png" alt="Smiley face" width="100px" height="100px"></div>
               <div class="download1" id="tubiao3" style="border:2px solid transparent">
                   <img src="arrow.png" alt="Smiley face" width="33px" height="33px"></div>
               <a class="download" id="sel_btn1" href="商品分类标签.zip" onclick="changeSelBtn(1)" >点击下载</a>
               <script type="text/javascript">
                    function changeSelBtn(index){
                       if(index==1){
                           $("#sel_btn1").addClass('ch_cls');

                       }

                    }
               </script>
                       <!-- <form name="/" class="card-form">
                           <div>
                               <div class="img-container"></div>
                               <input class="img-btn" type="file" id="drivingLicence" name="drivingLicence"  >
                           </div>
                       </form> -->

                   </div>
                 </div>

              </div>





                <div class="second" style="width:100% ;height:1000px;background-color:#F0F0F0;border:3px solid transparent">

                  <div class="title1" id="SecondPart" style="width:100%;height:60px;border:3px solid transparent">
                    <p>See, A Nice Model !</p>
                  </div>
                  <div class="title2" style="width:100%;height:60px;border:3px solid transparent">
                    <p>观看视频以了解网页</p>
                  </div>
                  <div class="second2" id="secframe" style="width:1100px;height:450px;background-color: white;border:3px solid transparent">
                    <video width="auto" height="450" controls>
                      <source src="shortVideo2.mp4" type="video/mp4">
                      <source src="shortVideo2.ogg" type="video/ogg">
                    </video>
                    <div class="second2" id="line1" style="width:100px;height:50px;">
                      <hr style="height:5px;border:none;border-top:5px solid #6495ED" >
                    </div>
                    <div class="second2" id="secdiv" style="width:230px;height:140px;border:2px solid transparent">
                      <p>网页</p>
                        <p>功能简介</p>

                    </div>
                    <div class="second2" id="secdiv2" style="width:230px;height:30px;border:2px solid transparent">
                      <p>商品标签分类</p>

                    </div>
                    <div class="second2" id="secdiv3" style="width:230px;height:90px;border:2px solid transparent">
                      <p>网页实现了商品分类标签的实时查询，具有井然美观的操作界面以及便携高效的用户体验。网页将根据用户键入的商品名称检索其对应的商品标签，支持单个搜索与批量查询两种方式。</p>
                    </div>

                      <a href="#FirstPart"
                      title="开始查询商品标签" id="secdiv5"
                      style="display: block;width: 40px;height: 40px;border:3px solid transparent">
                        <img src="icon.png" class="secdiv4">
                      </a>




                  </div>

              </div>







            <div class="third" id="ThirdPart" style="width:100% auto;height:800px;background-color:#F0F0F0;
            border:5px solid #F0F0F0;">
              <div class="part3title"  id="title31">
                <p>See, A Good Team !</p>
              </div>
              <div class="part3title" id="title32" >
                <p>浏览卡片以认识我们</p>
              </div>
            <div class="part1 part7">

                <div class="tBox">
                  <span id="pre"></span>
                  <span id="next"></span>
                  <div class="picBox">
                    <div class="clearfix" id="posBox">
                      <div class="fl roll">
                        <div class="box-img">
                          <img src="div3111.png" width="232" height="430"/>
                          <p class="bg"></p>
                          <h3>
                            <p class="tName">团队介绍</p>
                            <p class="tTitle">See,a nice model</p>
                          </h3>
                        </div>
                        <div class="box-content">
                              <p class="t1">团队介绍</p>
                              <p class="t2">See,a nice model</p>
                              <p class="t3"></p>
                              <p class="t4">团队本着至臻至善的参赛宗旨，以fastText为基础实现精准高效的商品分类模型并提供实时便捷的商品标签查询服务。团队成员具有善始善终的开发信念，事无巨细的开发原则，积极昂扬的开发热情，坚定初衷，迎难而上，为本次开发了画上圆满的句号。</p>
                          </div>
                          <div class="box-content2">
                              <p class="t1">团队介绍</p>
                              <p class="t2">See,a nice model</p>
                              <p class="t3"></p>
                              <p class="t4">团队本着至臻至善的参赛宗旨，以fastText为基础实现精准高效的商品分类模型并提供实时便捷的商品标签查询服务。团队成员具有善始善终的开发信念，事无巨细的开发原则，积极昂扬的开发热情，坚定初衷，迎难而上，为本次开发了画上圆满的句号。</p>
                          </div>
                      </div>
                      <div class="fl roll">
                        <div class="box-img">
                          <img src="div322.png" width="232" height="430"/>
                          <p class="bg"></p>
                          <h3>
                            <p class="tName"> 纪宗杏</p>
                            <p class="tTitle"> 队长  计算机科学与技术</p>
                          </h3>
                        </div>
                        <div class="box-content">
                              <p class="t1"> 纪宗杏</p>
                              <p class="t2"> 队长  计算机科学与技术</p>
                              <p class="t3"></p>
                              <p class="t4">2016级计算机科学与技术专业本科生，
                                负责数据集的预处理以及分类模型的建立。为人直率，行事雷厉，成绩优异，曾撰写多篇实用新型算法专利并多次获得校奖学金。思维缜密，心思细腻，能熟练掌握相关分类算法思想。 </p>
                          </div>
                          <div class="box-content2">
                              <p class="t1"> 纪宗杏</p>
                              <p class="t2"> 队长  计算机科学与技术</p>
                              <p class="t3"></p>
                              <p class="t4">2016级计算机科学与技术专业本科生，
                                负责数据集的预处理以及分类模型的建立。为人直率，行事雷厉，成绩优异，曾撰写多篇实用新型算法专利并多次获得校奖学金。思维缜密，心思细腻，能熟练掌握相关分类算法思想。</p>
                          </div>
                      </div>
                      <div class="fl roll">
                        <div class="box-img">
                          <img src="div333.png" width="232" height="430"/>
                          <p class="bg"></p>
                          <h3>
                            <p class="tName">宿静宜</p>
                            <p class="tTitle">副队长  通信工程</p>
                          </h3>
                        </div>
                        <div class="box-content">
                              <p class="t1">宿静宜</p>
                              <p class="t2">副队长  通信工程</p>
                              <p class="t3"></p>
                              <p class="t4">2016级通信工程专业本科生，主要负责前端开发，工作认真严谨，学习成绩优异，曾获单片机编程开发大赛二等奖，热爱技术开发，能熟练掌握相关工程应用软件。</p>
                          </div>
                          <div class="box-content2">
                              <p class="t1">宿静宜</p>
                              <p class="t2">副队长  通信工程</p>
                              <p class="t3"></p>
                              <p class="t4">2016级通信工程专业本科生，主要负责前端开发，工作认真严谨，学习成绩优异，曾获单片机编程开发大赛二等奖，热爱技术开发，能熟练掌握相关工程应用软件。</p>
                          </div>
                      </div>
                      <div class="fl roll">
                        <div class="box-img">
                          <img src="div344.png" width="232" height="430"/>
                          <p class="bg"></p>
                          <h3>
                            <p class="tName">刘康</p>
                            <p class="tTitle">队员 计算机科学与技术</p>
                          </h3>
                        </div>
                        <div class="box-content">
                              <p class="t1">刘康</p>
                              <p class="t2">队员 计算机科学与技术</p>
                              <p class="t3"></p>
                              <p class="t4">2016级计算机科学与技术专业本科生，负责分类模型的训练与优化。熟练掌握多门编程语言，曾参与的大学生创新创业训练计划项目被评为省级，具备一定的软件开发经验和实践能力。</p>
                          </div>
                          <div class="box-content2">
                              <p class="t1">刘康</p>
                              <p class="t2">队员 计算机科学与技术</p>
                              <p class="t3"></p>
                              <p class="t4">2016级计算机科学与技术专业本科生，负责分类模型的训练与优化。熟练掌握多门编程语言，曾参与的大学生创新创业训练计划项目被评为省级，具备一定的软件开发经验和实践能力。</p>
                          </div>
                      </div>
                      <div class="fl roll">
                        <div class="box-img">
                          <img src="div355.png" width="232" height="430"/>
                          <p class="bg"></p>
                          <h3>
                            <p class="tName">李永贵</p>
                            <p class="tTitle">队员 计算机科学与技术</p>
                          </h3>
                        </div>
                        <div class="box-content">
                              <p class="t1">李永贵</p>
                              <p class="t2">队员 计算机科学与技术</p>
                              <p class="t3"></p>
                              <p class="t4">2016级计算机科学与技术专业本科生，
                                负责分类模型的测试及后端数据库的搭建。熟练掌握C及Java编程语言,曾参与的大学生创新创业训练计划项目被评为国家级。目前所参与的挑战杯大赛项目已通过校选，冲击省赛,有一定的做开发的经验。</p>
                          </div>
                          <div class="box-content2">
                              <p class="t1">李永贵</p>
                              <p class="t2">队员 计算机科学与技术</p>
                              <p class="t3"></p>
                              <p class="t4">2016级计算机科学与技术专业本科生，
                                负责分类模型的测试及后端数据库的搭建。熟练掌握C及Java编程语言,曾参与的大学生创新创业训练计划项目被评为国家级。目前所参与的挑战杯大赛项目已通过校选，冲击省赛，有一定的做开发的经验。</p>
                          </div>
                      </div>
                      <div class="fl roll">
                        <div class="box-img">
                          <img src="div366.png" width="232" height="430"/>
                          <p class="bg"></p>
                          <h3>
                            <p class="tName">林宇轩</p>
                            <p class="tTitle">队员 计算机科学与技术</p>
                          </h3>
                        </div>
                        <div class="box-content">
                              <p class="t1">林宇轩</p>
                              <p class="t2">队员 计算机科学与技术</p>
                              <p class="t3"></p>
                              <p class="t4">2017级计算机科学与技术专业本科生，
                                主要负责前端开发及前后端衔接工作。工作认真负责，积极性高，曾获HTML网页设计大赛二等奖，能较好运用相关软件进行开发。</p>
                          </div>
                          <div class="box-content2">
                              <p class="t1">林宇轩</p>
                              <p class="t2">队员 计算机科学与技术</p>
                              <p class="t3"></p>
                              <p class="t4">2017级计算机科学与技术专业本科生，
                                主要负责前端开发及前后端衔接工作。工作认真负责，积极性高，曾获HTML网页设计大赛二等奖，能较好运用相关软件进行开发。</p>
                          </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>











              <img src="background8.png" alt="background" id="fourthpic">
              <div class="fourth" id="FourthPart" style="width:100%;height:400px;">
                <div class="ftitle1" id="title41" style="color: white;  width:400px;height: 50px;border:2px solid transparent">
                  <p>关于网页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    联系我们&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    加入我们</p>
                </div>
                <div class="ftitle1" id="title42" style="color:#6495ED;border:3px solid transparent">
                  <p>团队编号：1802702</p>

                </div>
                <div class="fouthline" id="line22"style="width: 1150px;height: 200px;border:2px solid transparent">
                  <hr style="height:50px;border:none;border-top:1px solid dimgray" >
                  <p style="color:gray;">关于网页 ： 该网页以简洁大方清晰明朗为主要设计思路，由团队内两位前端负责人共同完成。
                  Logo为一支由标签组成的小火箭，既融入了标签元素契合赛题，又体现了网页分类识别商品标签速度快的特点。</p>
                  <p style="color:gray;">联系我们 ：   Tel<sup>1</sup>:18262623067  &nbsp;&nbsp;&nbsp; Email<sup>1</sup>:2027393200@qq.com</p>
                  <p style="color:gray;" id="line33">   &nbsp; Tel<sup>2</sup>:18262631702  &nbsp;&nbsp;&nbsp;  Email<sup>2</sup>:787953519@qq.com</p>

                  <p style="color:gray;">加入我们 ：第十届中国大学生服务外包创新创业大赛赛题【A01】2018网络零售平台商品分类【浪潮】&nbsp; See,a nice model 团队 </p>
                  <hr style="height:50px;border:none;border-bottom:1px solid dimgray" >
                </div>
                <div class="final">
                    <p style="color:gray;">真理惟一可靠的标准就是永远自相符合。</p>

                </div>
              </div>

            		<script src="jsindex.js">
                </script>

        </body>
    </head>
</html>
