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
<div id="form-cash-add">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-plus"></span> 添加收银机</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" @submit.prevent="submit(form)">
                <strong>基础信息 @{{ form.mac.id }}</strong>
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
                <choose id="ch1" title="测试标题" btn-name="按钮名称" :res-data.sync="form.mac">
                    <ts :lists="lists.mac" :curr="form.mac.id"></ts>
                </choose>
                <choose id="ch2" title="打印机" btn-name="打印机" :res-data.sync="form.pri">
                    <ts :lists="lists.pri" :curr="form.pri.id"></ts>
                </choose>

                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">主机</label>
                    <div class="col-sm-10">
                        <span class="form-control-static form-control-static-extend"><span v-text="mac_txt"></span></span>
                        <button type="button" class="btn btn-danger btn-xs" @click="choose('mac')">添加主机</button>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label">小票机</label>
                    <div class="col-sm-10">
                        <span class="form-control-static form-control-static-extend"><span v-text="pos_txt"></span></span>
                        <button type="button" class="btn btn-danger btn-xs" @click="choose('pos')">添加小票机</button>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">POS机</label>
                    <div class="col-sm-10">
                        <span class="form-control-static form-control-static-extend"><span v-text="bil_txt"></span></span>
                        <button type="button" class="btn btn-info btn-xs" @click="choose('bil')">变更POS机</button>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">打印机</label>
                    <div class="col-sm-10">
                        <span class="form-control-static form-control-static-extend"><span v-text="pri_txt"></span></span>
                        <button type="button" class="btn btn-danger btn-xs" @click="choose('pri')">添加打印机</button>
                    </div>
                </div>



                <strong>系统镜像 @{{ form.sys.id }}</strong>
                <hr>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">选择镜像</label>
                    <div class="col-sm-5">
                        <select class="form-control" v-model="form.sys.id">
                            <option value="12">POS_WINXP_HK380_20160112</option>
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



    <template id="choose">
        <div :id="id">
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="posi">@{{ title }}</label>
                <div class="col-sm-10">
                    <span class="form-control-static form-control-static-extend"><span v-text="resText"></span></span>
                    <button type="button" class="btn btn-xs" :class="cmpBtnColor" @click="xz()">@{{ cmpBtnName }}</button>
                </div>
            </div>

            <slot>
                如果没有分发内容则显示我。
            </slot>
        </div>
    </template>

    <template id="ts">
        <div class="ale" style="padding: 20px;">
            <form class="form-horizontal" role="form"  @submit.prevent="">
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">输入编号</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" id="posi" v-model="code" @keyup="cmpData()" placeholder="位置为3位数字编号">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">选择型号</label>
                    <div class="col-sm-8">
                        <select class="form-control" v-model="index" @change="cmpData()">
                            <option v-if="!resData.id"> 请选择型号 </option>
                            <option v-for="(index, list) in lists" :value="index" :selected="list.id==curr"> @{{ list.name }} </option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </template>
</div>
@stop

@section('boot')
    <script src="{{ asset('js/vue/cash/add.js?21') }}"></script>
@stop