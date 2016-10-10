@extends('inc.base')

@section('head')
    @include('inc.csrf')
@stop

@section('header')
    @include('inc.nav')
@stop

@section('content')
    <div id="form-cash-add">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-plus"></span> 添加收银机</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" @submit.prevent="submit(form)">
                    <strong>基础信息</strong>
                    <hr>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label" for="posi">位置</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" id="posi" v-model="form.posi"
                                   placeholder="位置为3位数字编号">
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
                    <device type="mac" name="主机" :current="form.mac" :list="lists.mac" @changed="receive"></device>
                    <device type="pri" name="打印机" :current="form.pri" :list="lists.pri" @changed="receive"></device>
                    <device type="mac" name="POS机" :current="form.pos" :list="lists.pos" @changed="receive"></device>
                    <device type="bil" name="小票机" :current="form.bil" :list="lists.bil" @changed="receive"></device>

                    <strong>系统镜像</strong>
                    <hr>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label" for="posi">选择镜像</label>
                        <div class="col-sm-5">
                            <select class="form-control" v-model="form.sys">
                                <option v-if="!form.sys" selected :value="null">请选择系统镜像</option>
                                <option v-for="(item, index) in lists.sys"
                                        :selected="index == form.sys"
                                        :value="index">
                                    @{{ item }}
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary btn-sm">保 存</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
    @include('inc.template.device')
@stop

@section('boot')
    <script src="{{ asset('vendor/inc/setup_csrf.js?2') }}"></script>
    <script src="{{ asset('vendor/component/device.js?4') }}"></script>
    <script src="{{ asset('js/vue/cash/add.js?26') }}"></script>
@stop