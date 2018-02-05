num = 1
ty = 0
$(document).on("click",".type_item",function(){
	var name = $(this).attr("attr")
	if($(".survey_main").attr("attr")==1){
		alert("先填写或取消")
		return false
	}
	switch (name) {
		case '单选题':
			dan()
		break;
		case '多选题':
			duo()
		break;
		default:
		break;
	}
	
})

/*function wen(){
	str = '<div class="one"><table align="center"><tr><td>题目：</td><td><input type="text" class="title"></td></tr></table><div><tr><td></td><td><button class="sure">确定</button><button class="cancel">取消</button></td></tr>'
	$(".right").append(str).css({"text-align":"center","font-size":"22px"})
	$(".right").attr("attr",1)
	$(".right").attr("who",3)
}*/
function duo(){
	/*str = '<div class="one"><table align="center"><tr><td>题目：</td><td><input type="text" class="title"></td></tr><tr class="tr"><td></td><td><input  type="text"></td></tr><tr class="tr"><td></td><td><input  type="text"></td></tr><tr class="tr"><td></td><td><input  type="text"></td></tr><tr class="tr"><td></td><td><input  type="text"></td></tr></tr></table><div><tr><td><span class="jia">+</span><span class="jian">-</span></td><td><button class="sure">确定</button><button class="cancel">取消</button></td></tr>'
	$(".right").append(str).css({"text-align":"center","font-size":"22px"})*/
	$(".page").css("display","block")
	$(".page").attr("attr",1)
	$(".page").attr("who",2)
}
//begin 单选
function dan(){
	/*str = '<div class="one"><table align="center"><tr><td>题目：</td><td><input type="text" class="title"></td></tr><tr class="tr"><td></td><td><input  type="text"></td></tr><tr class="tr"><td></td><td><input  type="text"></td></tr><tr class="tr"><td></td><td><input  type="text"></td></tr><tr class="tr"><td></td><td><input  type="text"></td></tr></tr></table><div><tr><td><span class="jia">+</span><span class="jian">-</span></td><td><button class="sure">确定</button><button class="cancel">取消</button></td></tr>'
	$(".right").append(str).css({"text-align":"center","font-size":"22px"})*/
	$("#tian").css("display","block")
	$("#tian").attr("attr",1)
	$("#tian").attr("who",1)
}
$("#title").click(function(){
	var title = $(this).children("span").html()
	$(this).children("span").css("display","none")
	$(this).children("input").val(title).css("display","inline-block").focus()
})
$("#wen").blur(function(){
	var title = $(this).val()
	$(this).prev("span").html(title).css("display","inline-block")
	$(this).css("display","none")
})
$(document).on("click",".btn",function(){
	var who = $('.page').attr("who")
	if(who==1){
		var tian = "单选题"
		var type = "radio"
	}else if(who==2){
		var tian = "多选题"
		var type = "checkbox"
	}
	var str = ''
	var title = $(".title").html()
	if(title!=''){
		str += "<div>"+num+" 丶 "+"<span class='timu' attr='"+who+"'>"+title+"</span></div>("+tian+")"
	}else{
		alert("请输入题目")
		return ;
	}
	var letter = ['A','B','C','D','E','F','G']
	var i = 0
	var flag = false
	$.each($(".tr"),function(){
		var zhi = $(this).html()
		if(zhi!=''){
			str += "<div>"+letter[i]+"<input type='"+type+"' value='"+zhi+"' name='"+num+"dan' class='xuan"+ty+"'>"+zhi+"</div>"
			i += 1
		}else{
			flag = true
			return false;
		}
	})
	if(flag){
		alert('请输入剩余的选项')
		return ;
	}
	$("#tian").css("display","none")
	$(".survey_container").append(str).css({"font-size":"16px","display":"inline-block"})
	$(".page").attr("attr",0)
	num += 1
	ty += 1
})
$(document).on("click",".jia",function(){
	$(".one").children("table").append('<tr class="tr"><td></td><td><input type="text"></td></tr>')
})
$(document).on("click",".jian",function(){
	$("tr").last().remove();
})
$(document).on("click",".cancel",function(){
	$(".one").remove()
	$(".right").attr("attr",0)
})
$(document).on("click",".update",function(){

})
$(document).on("click","#bao",function(){
	/*$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	}zhi
	});*/
	var title = $("#title").html()
	var tm = new Array()
	var xx = new Array()
	var i = 0
	$.each($(".timu"),function(){
		var a = []
		a[0] = $(this).html()
		a[1] = $(this).attr("attr");
		xx[i] = new Array()
		var j = 0
		tm[i] = a
		$.each($(".xuan"+i),function(){
			xx[i][j] = $(this).val()
			j += 1
		})
		i += 1
	})
	var kai = $("#kai").html()
	$.ajax({
		url:"create/index",
		data:{title:title,xuan:xx,tm:tm,kai:kai},
		dataType:'json',
		type:"post",
		success:function(res){
			if(res.code==1){
				//alert(res.msg)
				location.href="mine"
			}
		}
	})
})
/*单选结束*/
/*$(window).bind('beforeunload',function(){
	return "您输入的内容尚未保存，确定离开此页面吗？"
})*/