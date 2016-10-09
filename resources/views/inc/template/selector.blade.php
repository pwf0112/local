<template id="selector">
    <div class="ale" style="padding: 20px;">
        <form class="form-horizontal" role="form"  @submit.prevent>
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="posi">输入编号</label>
                <div class="col-sm-5">
                    <input class="form-control" type="text" id="posi" v-model="code" placeholder="位置为3位数字编号">
                </div>
            </div>

            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="posi">选择型号</label>
                <div class="col-sm-8">
                    <select class="form-control" v-model="index">
                        <option v-if="curr.id === null" :value="null" selected> 请选择型号 </option>
                        <option v-for="(list, index) in lists" :value="index" :selected="list.id==curr.id"> @{{ list.name }} </option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</template>