@extends('inc.base')

@section('header')
    @include('inc.nav')
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-plus"></span> 添加收银机</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form">
                <strong>基础信息</strong>
                <hr>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">位置</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" id="posi" name="posi" placeholder="位置为3位数字编号">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="port">端口</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" id="port" name="port" placeholder="请输入端口号">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="ip">IP地址</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" id="ip" name="ip" placeholder="请输入IP地址">
                    </div>
                </div>
                <strong>硬件清单</strong>
                <hr>
                <div id="app-zj" class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">主机</label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-danger btn-xs" @click="mps">添加主机</button>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">小票机</label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-danger btn-xs">添加小票机</button>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">POS机</label>
                    <div class="col-sm-10">
                        <span class="form-control-static" style="font-size: 12px; padding-right: 15px;">通联POS机 - 203</span>
                        <button type="button" class="btn btn-info btn-xs">变更POS机</button>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">打印机</label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-danger btn-xs">添加打印机</button>
                    </div>
                </div>



                <strong>系统镜像</strong>
                <hr>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">选择镜像</label>
                    <div class="col-sm-3">
                        <select class="form-control">
                            <option>POS_WINXP_HK380_20160112</option>
                            <option>POS_HK380_20160112</option>
                            <option>POS_HK380_20160112</option>
                            <option>POS_WINXP_HK380_20160112</option>
                            <option>POS_HK380_20160112</option>
                            <option>POS_HK380_20160112</option>
                        </select>
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi"></label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-primary btn-sm">保 存</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
@stop

@section('boot')
    <script>
        new Vue({
            el: '#app-zj',
            methods: {
                mps: function () {
                    layer.alert('ok');
                }
            }
        });
    </script>
@stop