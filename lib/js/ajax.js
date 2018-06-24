//初始数据加载
refresh()
function  refresh(){
    $.ajax({
        url:"action/tableController.php",
        type:"get",
        success: function (res) {
            var data = jQuery.parseJSON(res)
            var str = "";
            for(var i=0;i<data.length;i++){
                str = "<tr><td>"+data[i].patient_name+"</td><td>"+data[i].patient_gende+"</td><td>"+data[i].patient_date_start+"</td><td>"+data[i].patient_dept+"</td><td>"+data[i].patient_state+"</td><td>"+data[i].patient_doc+"</td><td>"+data[i].patient_room+"</td><td>"+data[i].patient_bed+"</td><td><button class='btn btn-primary btn-xs' id='change' data-toggle='modal' data-target='myModal'>修改</button><button class='btn btn-danger btn-xs' id='del' style='margin-left: 5px'>删除</button></td></tr>";
                $("table>tbody").append(str)
            }
        }
    })
}
//修改按钮的事件
var a = 0;
$(document).on("click","#change",function(){
    $('#myModal').modal()
    a = $(this).parents("tr").index() //全局a用来查找当前的下表
    $(this).parents("tr").find("td:not(:last-child)").each(function () {
        var s = $(this).text()
//                     console.log(s)
        var b = $(this).index()

        if(b>0){
            $("#myModal .ss[data-index='"+b+"']").val(s)
        }else{
            $("#myModal .ss[data-index='"+b+"']").text(s)
        }
    })

})
//删除按钮的事件
$(document).on("click","#del", function () {
    var _this = $(this)

    $.ajax({
        url:"action/del.php",
        type:"POST",
        data:{
            val:"del",
            id:_this.parents("tr").find("td:eq(0)").text()
        },
        success: function (res) {
            if(res=="1"){
                _this.parents("tr").remove()
            }else{
                alert("删除失败")
            }
        }
    })
})

//修改按钮的事件
$(document).on("click","#sign",function(){
    var data1 = $("#form").serialize()
    var t = $("#myModalLabel").text()
    $("#myModal").find("input").each(function () {
        var q = $(this).val()
        var s = $(this).data("index")
        $("table>tbody").children("tr").eq(a).find("td").eq(s).text(q)
    })
    $.ajax({
        url:"action/change.php?id="+t,
        type:"POST",
        data:data1,
        success:function(res){

        }
    })
})
