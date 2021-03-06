<?php
/**
 * Created by PhpStorm.
 * User: 张鹏飞
 * Date: 2018/1/24
 * Time: 16:41
 */
use app\assets\WeixinToilet;
WeixinToilet::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<title>便民服务</title>
		<style>
			.btblue{border-top:1px solid #3396ff;}
			.btyellow{border-top:1px solid #fc9a4e;}
			.btgreen{border-top:1px solid #40df83;}
			.btzi{border-top:1px solid #834fff;}
			.btgreen2{border-top:1px solid #19d1dc;}
		</style>
        <?php $this->head();?>
	</head>
	<body class="ulev14 fc333 prel overScroll">
        <?php $this->beginBody();?>
		<div class="ub overScroll_x bbc pfix w100 bgb" style="z-index:2;">
			<div class="ptb10 plr15 mr03 btblue" style="background:linear-gradient(to right, #73a6ff , #3697ff);color:#fff" onclick="click_scroll('jtcx',$(this));">交通出行</div>
			<div class="ptb10 plr15 mr03 btyellow" onclick="click_scroll('shfw',$(this));">生活服务</div>
			<div class="ptb10 plr15 mr03 btgreen" onclick="click_scroll('xyjf',$(this));">校园缴费</div>
			<div class="ptb10 plr15 mr03 btzi" onclick="click_scroll('kdwl',$(this));">快递物流</div>
			<div class="ptb10 plr15 btgreen2" onclick="click_scroll('ylfw',$(this));">医疗服务</div>
		</div>
		<div class="plr15 lh24 pt40">
			<div id="jtcx" class="bbc pb20">
				<div class="fc999 ptb15">交通出行</div>
				<div class="ub">
					<div class="w60">
						<div class="ub click">
							<img src="/img/lvyou/weixintoilet/services_traffic_trafficoffence.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">交通违法自助处理</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_traffic_bus.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">公交实时查询</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_traffic_hotel.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">酒店</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_traffic_weather.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">天气预报</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_traffic_travel.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">去哪儿玩</div>
						</div>
					</div>
					<div class="w40">
						<div class="ub click">
							<img src="/img/lvyou/weixintoilet/services_traffic_ccjf.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">驾驶员积分查询</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_traffic_entrancetickets.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">景点门票</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_traffic_fare.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">客运售票</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_traffic_aqi.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">空气质量实报</div>
						</div>
					</div>
				</div>
			</div>
			<div id="shfw" class="bbc pb20">
				<div class="fc999 ptb15">生活服务</div>
				<div class="ub">
					<div class="w60">
						<div class="ub click">
							<img src="/img/lvyou/weixintoilet/services_life_citizencard.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">市民卡查询</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_life_payment.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">水电气缴费查询</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_life_socialsecurity.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">社保查询</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_life_recharge.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">充值缴费</div>
						</div>
					</div>
					<div class="w40">
						<div class="ub click">
							<img src="/img/lvyou/weixintoilet/services_life_accumulationfund.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">公积金查询</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_life_expresscheck.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">快递查询</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_life_creditcard.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">信用卡还款</div>
						</div>
					</div>
				</div>
			</div>
			<div id="xyjf" class="bbc pb20">
				<div class="fc999 ptb15">校园缴费</div>
				<div class="ub">
					<div class="w60">
						<div class="ub click">
							<img src="/img/lvyou/weixintoilet/services_school_primaryschool.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">小学缴费</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_school_university.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">大学缴费</div>
						</div>
					</div>
					<div class="w40">
						<div class="ub click">
							<img src="/img/lvyou/weixintoilet/services_school_middleschool.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">中学缴费</div>
						</div>
					</div>
				</div>
			</div>
			<div id="kdwl" class="bbc pb20">
				<div class="fc999 ptb15">快递物流</div>
				<div class="ub">
					<div class="w60">
						<div class="ub click">
							<img src="/img/lvyou/weixintoilet/services_express_expresscheck.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">查快递</div>
						</div>
						<div class="ub mt20 click">
							<img src="/img/lvyou/weixintoilet/services_express_payment.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">付款</div>
						</div>
					</div>
					<div class="w40">
						<div class="ub click">
							<img src="/img/lvyou/weixintoilet/services_express_sendoff.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">寄快递</div>
						</div>
					</div>
				</div>
			</div>
			<div id="ylfw" class="bbc pb20">
				<div class="fc999 ptb15">医疗服务</div>
				<div class="ub">
					<div class="w60">
						<div class="ub click">
							<img src="/img/lvyou/weixintoilet/services_medical_centralhospital.png" width="24px" height="24px" class="dblock"/>
							<div class="ml10">市人民医院</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="textTips uhide"><span></span></div>
        <?php $this->endBody();?>
	</body>
	<script>
		 function click_scroll(valID,that) {
		 	var color='';
		 	that.siblings().css({'background':'','color':'#333'});
		 	if(valID=='jtcx'){
		 		color='linear-gradient(to right, #73a6ff , #3697ff)'
		 	}else if(valID=='shfw'){
		 		color='linear-gradient(to right, #fcb04e , #fc9b4e)'
		 	}else if(valID=='xyjf'){
		 		color='linear-gradient(to right, #9ce961 , #47e080)'
		 	}else if(valID=='kdwl'){
		 		color='linear-gradient(to right, #aa62ff , #8550ff)'
		 	}else if(valID=='ylfw'){
		 		color='linear-gradient(to right, #3eedd9 , #19d1d0)'
		 	}
		 	that.css({'background':color,'color':'#fff'});
			 var scroll_offset = $("#"+valID).offset(); 
			 $("body,html").animate({
			 scrollTop:scroll_offset.top 
			 },500);
		 };
		 $('.click').on('click',function(){
		 	textTip('暂未开通，敬请期待！');
		 });
	</script>
</html>
<?php $this->endPage(); ?>
