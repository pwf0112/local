<template id="device">
    <div>
        <div class="form-group form-group-sm">
            <label class="col-sm-2 control-label" for="posi">@{{ name }}</label>
            <div class="col-sm-10">
                <span v-if="text != ''" class="form-control-static form-control-static-extend">
                    <span v-text="text"></span>
                </span>
                <button type="button" class="btn btn-xs" :class="btnColor" @click="choose">@{{ btnName }}</button>
            </div>
        </div>

        <div class="ale" style="padding: 20px;">
            <form class="form-horizontal" role="form"  @submit.prevent>
                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">输入编号</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" id="posi" v-model="curr.code" placeholder="位置为3位数字编号">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-2 control-label" for="posi">选择型号</label>
                    <div class="col-sm-8">
                        <select class="form-control" v-model="curr.id">
                            <option v-if="curr.id === null" :value="null" selected> 请选择型号 </option>
                            <option v-for="(item, index) in list" :value="index" :selected="index==curr.id">
                                @{{ item }}
                            </option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>