<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>图片效果制作</title>
    <style>
        .all{
            display: flex;
            flex-flow: row nowrap;
            justify-content:space-around;
        }
        .img{
            width: 500px;
            height: 500px;
            border:1px solid #000;
        }
        .img img{
            width: 500px;
            height: 500px;
        }
        .controller{
            width: 250px;
            height: 500px;
            border:1px solid #000;
        }
        .controller ul{
            list-style: none;
        }
        .controller ul li{
            width: 150px;
            height: 50px;
        }
    </style>
</head>
<body>
<div class="all">
	<div class="img">
        <img src="4afbfbedab64034f29596c8ba6c379310b551da2.jpg" alt="">
	</div>
	<div class="controller">
		<ul>
			<li>
				<span>灰度</span>
				<input type="range" name="gray" value="0" list="gray" step="1">
				<datalist id="gray">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
				</datalist>
			</li>
			<li>
				<span>褐色（用于仿旧）</span>
				<input type="range" name="sepia" min="0" max="100" value="0" step="1" list="sepia">
				<datalist id="sepia">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
				</datalist>
			</li>
			<li>
				<span>色相旋转</span>
				<input type="range" name="hue" min="0" max="100" value="0" list="hue" step="1">
				<datalist id="hue">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
				</datalist>
			</li>
			<li>
				<span>反色</span>
				<input type="range" name="invert" min="0" max="100" value="0" step="1" list="invert">
				<datalist id="invert">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
				</datalist>
			</li>
            <li>
                <span>饱和度</span>
                <input type="range" name="saturate" min="0" max="100" value="100" list="saturate" step="1">
                <datalist id="saturate">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
                </datalist>
            </li>
			<li>
				<span>透明度</span>
				<input type="range" name="opacity" min="0" max="100" value="100" step="1" list="opacity">
				<datalist id="opacity">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
				</datalist>
			</li>
			<li>
				<span>亮度</span>
				<input type="range" name="brightness" min="0" max="100" value="100" step="1" list="brightness">
				<datalist id="brightness">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
				</datalist>
			</li>
			<li>
				<span>对比度</span>
				<input type="range" name="contrast" min="0" max="100" value="100" list="contrast" step="1">
				<datalist id="contrast">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
				</datalist>
			</li>
		</ul>
	</div>
</div>
<script>
    var $ = function(sel){
        return document.querySelectorAll(sel);
    };
    var arrValue = [];
    var grayscale=sepia=saturate=hue=invert=opacity=brightness=contrast=blur=null;
    function grayscal(){
        arrValue[0] = $("input")[0].value;
        arrValue[1] = $("input")[1].value;
        arrValue[2] = $("input")[2].value;
        arrValue[3] = $("input")[3].value;
        arrValue[4] = $("input")[4].value;
        arrValue[5] = $("input")[5].value;
        arrValue[6] = $("input")[6].value;
        arrValue[7] = $("input")[7].value;
        console.log(arrValue);
        grayscale = "grayscale("+arrValue[0]+"%)";
        sepia = "sepia("+arrValue[1]+"%)";
        hue= "hue-rotate("+arrValue[2]+"deg)";
        invert = "invert("+arrValue[3]+"%)";
        saturate = "saturate("+arrValue[4]+"%)";
        opacity = "opacity("+arrValue[5]+"%)";
        brightness = "brightness("+arrValue[6]+"%)";
        contrast = "contrast("+arrValue[7]+"%)";
        $("img")[0].style.filter=grayscale;
        $("img")[0].style.filter+=sepia;
        $("img")[0].style.filter+=saturate;
        $("img")[0].style.filter+=hue;
        $("img")[0].style.filter+=invert;
        $("img")[0].style.filter+=opacity;
        $("img")[0].style.filter+=brightness;
        $("img")[0].style.filter+=contrast;
    };
    for(var i=0;i<8;i++){
        $("input")[i].onchange = function () {
            grayscal();
        }
    }

</script>
</body>
</html>