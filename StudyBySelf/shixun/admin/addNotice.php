<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="umeditor.min.js"></script>
    <script type="text/javascript" src="lang/zh-cn/zh-cn.js"></script>
</head>
<body>
  <div class="fatie">
            <form action="addNotice_finish.php" method="post" name="frm" onsubmit="return chkFrm();">
                <div class="header">
                   <div class="right">
                       <label for="title">
                           文章标题：
                       </label>
                       <input type="text" name="title" required id="title" maxlength="20">
                   </div>
                </div>
                <script type="text/plain" id="myEditor" name="content" style="width:100%;height:18vw;min-height: 200px">
                    <p>在此输入公告内容</p>
                </script>
                <p>
                    <input type="submit" name="notice_sbt" id="notice_sbt" value="发布">
                </p>
            </form>
        </div>
    <!-- 实例化编辑器 -->
    <script type = "text/javascript">
        var um = UM.getEditor('myEditor');
        </script>
        <script>
          function trim(str){ //删除左右两端的空格
　　     return str.replace(/(^\s*)|(\s*$)/g, "");
　　 }
    function chkFrm(){
            if(trim(frm.title.value) == ""){
                alert("标题不能为空");
                return false;
            }
            if(frm.content.value == ""){
                alert("内容不能为空");
                return false;
            }
        }
        </script>
</body>
</html>
