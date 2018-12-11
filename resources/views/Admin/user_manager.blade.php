<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<link href="{{asset('huy')}}/css/icheck_skins/all.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('huy')}}/css/bootstrap-fileupload.css" />

<link rel="stylesheet" href="{{asset('huy')}}/css/tabs.css" />
<link rel="stylesheet" href="{{asset('huy')}}/css/layout.css" />
<link rel="stylesheet" href="{{asset('huy')}}/css/bootstrap.css" />
<link rel="stylesheet" href="{{asset('huy')}}/css/table.css" />
<link rel="stylesheet" href="{{asset('huy')}}/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="{{asset('css')}}/app.css">

<style>
    .item_content ul {
        list-style: none;
    }

    .item_content ul li {
        width: 370px;
        height: 430px;
        float: left;
        margin-right: 30px;
    }
</style>

<body>
<ul class="tabs" style="background-color: #faf3f3">
    <li class="current">
        <a href="javascript:void(0)" id="#tab1">用户管理</a>
    </li>
    <li>
        <a href="javascript:void(0)" id="#tab2">添加用户</a>
    </li>
</ul>
<form action="{{url('/user_manager')}}" method="post">
    {{csrf_field()}}
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    <input type="text" name="name" placeholder="查询姓名" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="text" name="tel" placeholder="查询手机号" /><input type="submit" value="查询用户">
</form>
<div class="tabs_content" style="">
    <div id="tab1" style="display: block;">
        <table id="tbRecord">
            <thead>
            <tr>
                <th>选择</th>
                <th>ID</th>
                <th>电话</th>
                <th>姓名</th>
                <th>email </th>
                <th>编辑</th>
                <th>删除</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $v)
                <tr>
                    <td><input type="checkbox" value="{{$v->id}}"></td>
                    <td>{{$v->id}}</td>
                    <td>{{$v->tel}}</td>
                    <td>{{$v->name}}</td>
                    <td>{{$v->email}}</td>
                    <td class="td_column_edit" id="td_column_edit_1" align="center" style="cursor:pointer;"><button class="btn btn-primary"><i class="icon-edit" style="margin-right:3px"></i><a href="{{url('/userupdate')}}?id={{$v->id}}">编辑</a></button></td>
                    <td class="td_column_delete" id="td_column_delete_1" align="center" style="cursor:pointer;"><button class="btn btn-danger"><i class="icon-trash" style="margin-right:3px"></i><a href="{{url('/userdel')}}?id={{$v->id}}">删除</a></button></td>
                </tr>
                @endforeach

            </tbody>

        </table>

        <input type="button" value="全选" id="count">
        <input type="button" value="反选" id="fcount">
        <input type="button" value="取消" id="nocount">
        <input type="button" value="批量删除" id="countdel">
        {{$list->render()}}
    </div>

    <div id="tab2" style="display: none; ">
        <div class="item_container" style="">
            <div class="item_content" style="overflow: auto; padding: 0px;">
                <div class="bd">
                    <ul>
                        <li>
                            <div class="dform">
                                <fieldset>
                                    <legend>添加用户</legend>
                                    <form action="{{url('/useradd')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="control-group">

                                            <!-- Text input-->
                                            <label class="control-label" for="input01">
                                                姓名</label>
                                            <div class="controls">
                                                <input type="password" name="name" class="input-xlarge" placeholder="请输入姓名" />
                                            </div>
                                        </div>

                                        <div class="control-group">

                                            <!-- Text input-->
                                            <label class="control-label" for="input01">
                                                密码</label>
                                            <div class="controls">
                                                <input type="password" name="pwd" class="input-xlarge" placeholder="请输入姓名" />
                                            </div>
                                        </div>

                                        <div class="control-group">

                                            <!-- Text input-->
                                            <label class="control-label" for="input01">
                                                性别</label>
                                            <div class="controls">
                                                <input type="password" name="sex" class="input-xlarge" placeholder="请输入性别" />
                                            </div>
                                        </div>

                                        <div class="control-group">

                                            <!-- Text input-->
                                            <label class="control-label" for="input01">
                                                时间
                                            <div class="controls">
                                                <input type="date" name="time" class="input-xlarge" placeholder="请输入时间" />
                                            </div>
                                        </div>

                                        <div class="control-group">

                                            <!-- Text input-->
                                            <label class="control-label" for="input01">
                                                邮箱</label>
                                            <div class="controls">
                                                <input type="password" name="email" class="input-xlarge" placeholder="请输入邮箱" />
                                            </div>

                                            <div class="control-group">

                                                <!-- Text input-->
                                                <label class="control-label" for="input01">
                                                    电话</label>
                                                <div class="controls">
                                                    <input type="password" name="tel" class="input-xlarge" placeholder="请输入电话" />
                                                </div>

                                            </div>
                                            <input type="submit" value="添加" class="btn  btn-primary" />

                                    </form>

                                </fieldset>

                            </div>

                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

    <script type="text/javascript" src="{{asset('huy')}}/js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap/bootstrap-fileupload.js"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('huy')}}/js/kindeditor.js"></script>
    <script type="text/javascript">
        KE.show({
            id: 'content',
            resizeMode: 1,
            cssPath: './index.css',
            items: [
                'fontname', 'fontsize', 'textcolor', 'bgcolor', 'bold', 'italic', 'underline',
                'removeformat', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                'insertunorderedlist', 'emoticons', 'image', 'link'
            ]
        });
    </script>
    <script>
        $(function() {
            /*菜单设置*/
            /*选项卡设置*/
            $('.tabs a').click(function(e) {
                e.preventDefault();
                if($(this).closest("li").attr("class") == "current") {
                    return;
                } else {
                    $(".tabs_content").find("[id^='tab']").hide();
                    $(".tabs li").attr("class", "");
                    $(this).parent().attr("class", "current");
                    $($(this).attr('id')).fadeIn();
                    if(tabSelect) {
                        tabSelect($(this));
                    }
                }
            });

        })
    </script>
    <script src="{{asset('js')}}/jquery.min.js"></script>
    <script>
        $('#countdel').click(function () {

            var id='';
                    $('input:checked').each(function () {
                       id+=$(this).val()+',';
                    });
            //alert(id);
                $.ajax({
                    url:"{{url('/countdel')}}",
                    type:"post",
                    data:{id:id},
                    success:function(str){
                        //alert(str);
                        if(str==1){
                            window.location.href="{{url('user_manager')}}";
                        }
                    }
                })
        })
    </script>
       <script>
        $('#count').click(function () {
            $("table input:checkbox").prop('checked',true);
        })
        $('#nocount').click(function () {
            $('table input:checkbox').prop('checked',false);
        })

        $('#fcount').click(function(){
            $('table input').each(function(){
                this.checked=!this.checked;
            })
        })
    </script>
</div>
</body>

</html>