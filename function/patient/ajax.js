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
                            str = "<tr><td>"+data[i].PATIENT_NAME+"</td><td>"+data[i].PATIENT_GENDER+"</td><td>"+data[i].PATIENT_DATE_START+"</td><td>"+data[i].PATIENT_DEPT+"</td><td>"+data[i].PATIENT_STATE+"</td><td>"+data[i].PATIENT_DOC+"</td><td>"+data[i].PATIENT_ROOM+"</td><td>"+data[i].PATIENT_BED+"</td><td><button class='btn btn-primary btn-xs' id='change' data-toggle='modal' data-target='myModal'>修改</button><button class='btn btn-danger btn-xs' id='del' style='margin-left: 5px'>删除</button></td></tr>";
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
                       url:"../../../action/del.php",
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
                    url:"../../../action/change.php?id="+t,
                    type:"POST",  
                    data:data1,  
                    success:function(res){  
  
                    }  
                })  
            }) 




    <div>
                                            <table class="table table-bordered text-center table-hover">
                                                <tr>
                                                    <th class="text-center">序  号</th>
                                                    <th class="text-center">姓  名</th>
                                                    <th class="text-center">性别</th>
                                                    <th class="text-center">入院日期</th>
                                                    <th class="text-center">所属科室</th>
                                                    <th class="text-center">患者状况</th>
                                                    <th class="text-center">主治医生</th>
                                                    <th class="text-center">病床号</th>
                                                    <th class="text-center">房间号</th>
                                                    <th class="text-center">操作</th>
                                                </tr>
                                            </table>

                                            <!--模态框-->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <span>编号:</span>
                                                            <h4 class="modal-title ss" id="myModalLabel" style="display: inline-block" data-index="0">Modal title</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal" id="form">
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label"></label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control ss"  name="patient_name" placeholder="姓名" data-index="1">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label  class="col-sm-2 control-label"></label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control ss"  name="patient_gender" placeholder="性别" data-index="2">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label  class="col-sm-2 control-label"></label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control ss"  name="patient_date_start" placeholder="入院日期" data-index="3">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label  class="col-sm-2 control-label"></label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control ss"  name="patient_dept" placeholder="所属科室" data-index="4">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label  class="col-sm-2 control-label"></label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control ss"  name="patient_state" placeholder="患者状况" data-index="5">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label  class="col-sm-2 control-label"></label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control ss"  name="patient_doc" placeholder="主治医生" data-index="6">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label  class="col-sm-2 control-label"></label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control ss"  name="patient_room" placeholder="房间号" data-index="7">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label  class="col-sm-2 control-label"></label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control ss"  name="patient_bed" placeholder="病床号" data-index="8">
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal" id="sign">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>