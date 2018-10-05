<!-- 此版本使用了php函数知识 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
        a{
            text-decoration: none;
            color:#000;
        }
		.page{
			width: 400px;
			font: 14px/20px 微软雅黑;
			margin: 10px auto;
			border: 1px solid #f90;
		}
		.page h3{
			height: 30px;
			background: #f90;
			line-height: 30px;
			padding-left: 10px;
		}
		.page ul{
			list-style: none;
		}
		.page ul li{
			margin-left: 10px;
			height: 20px;
		}
        .page span{
            display: inline-block;
            float: right;
            margin-right: 5px;
        }
	</style>
</head>
<body>
	<?php
		function output($newsStr){
			$newList = explode("\r",$newsStr);
				$news = array();
				$i = 0;
				foreach($newList as $value){
				    $newsInfo = explode("|",$value);
				    $cnt = count($news);
				    $news[$cnt]["bt"] = $newsInfo[0];
				    $news[$cnt]["sj"] = $newsInfo[1];
				    $i++;
                }
                for($n=0;$n<$i;$n++){
                	echo "<li><a href=''>";
                	echo $news[$n]["bt"];
                	echo "<span>";
                	echo $news[$n]["sj"];
                	echo "</span></a></li>";
                }
		}
	?>
	<div class="page">
		<h3>热点新闻</h3>
		<ul>
			<?php
$newsS = <<<DD
学院隆重举行2018-2019学年开学典礼|2018-09-20
旅游分院举办2018年新生入学教育大会|2018-09-25
旅游分院举办“开学第一课|2018-09-25
学院开展“珍爱生命 远离毒品”禁毒教育|2018-09-21
学院领导到职业基础部调研|2018-09-19
信息分院召开2018级新生入学教育大会|2018-09-17
大国工匠李万君事迹报告会在我院召开|2018-09-17
工程分院召开2019届毕业生秋季校园招聘|2018-09-17
信息分院召开期末试卷综合分析反馈与指|2018-09-19
DD;
		output($newsS);
            ?>
		</ul>
	</div>
</body>
</html>