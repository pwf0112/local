@extends('inc.base')

@section('head')
    <style>
        .form-control-static-extend {
            font-size: 12px;
            padding-right: 15px;
        }
    </style>
@stop

@section('header')
    @include('inc.nav')
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-plus"></span> 添加收银机</h3>
        </div>
        <div class="panel-body">
            <form id="form-cash-add" class="form-horizontal" role="form" @submit.prevent="submit(form)">
                <strong>基础信息</strong>
                <hr>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">位置</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" id="posi" v-model="form.posi" placeholder="位置为3位数字编号">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="port">端口</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" id="port" v-model="form.port" placeholder="请输入端口号">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="ip">IP地址</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" id="ip" v-model="form.ip" placeholder="请输入IP地址">
                    </div>
                </div>
                <strong>硬件清单</strong>
                <hr>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">主机</label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-danger btn-xs" @click="mps">添加主机</button>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label">小票机</label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-danger btn-xs">添加小票机</button>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">POS机</label>
                    <div class="col-sm-10">
                        <span class="form-control-static form-control-static-extend"><span v-text="form.pos.name"></span> - 203</span>
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
                    <div class="col-sm-5">
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
                        <button type="submit" class="btn btn-primary btn-sm">保 存</button>
                    </div>
                </div>


            </form>
        </div>
    </div>

    <div id="ooo" style="padding: 20px;">
        <form class="form-horizontal" role="form">
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="posi">输入编号</label>
                <div class="col-sm-5">
                    <input class="form-control" type="text" id="posi" v-model="form.posi" placeholder="位置为3位数字编号">
                </div>
            </div>

            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="posi">选择型号</label>
                <div class="col-sm-8">
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
        </form>
    </div>
@stop

@section('boot')
    <script>
        $('#ooo').hide();
        new Vue({
            el: '#form-cash-add',
            data: {
                form: {
                    posi: '',
                    port: '',
                    ip: '192.168.0.100',
                    pos: {
                        id: 1,
                        name: '通联收银机',
                        code: '203'
                    },
                    pri: {
                        id: 1,
                        name: '打印机-共享',
                        code: ''
                    },
                    mac: {
                        id: 1,
                        name: '新主机',
                        code: '101'
                    },
                    bil: {
                        id: 2,
                        name: '通用小票打印机',
                        code: ''
                    },
                    sys: {
                        id: 1,
                        name:'WINXP_POS_HK380'
                    }
                }
            },
            methods: {
                mps: function () {
                    layer.open({
                        type: 1,
                        area: '510px',
                        title: '添加收银机',
                        content: $('#ooo'),
                        btn: ['确定', '取消'],
                        yes: function (index, layero) {

                        },
                        cancel: function (index) {

                        }
                    });
                },
                submit: function (form) {
                    //询问框
                    layer.alert('sdfsdfsdf');

                }
            }
        });
    </script>
@stop