<template id="device">
    <div :id="id">
        <div class="form-group form-group-sm">
            <label class="col-sm-2 control-label" for="posi">@{{ title }}</label>
            <div class="col-sm-10">
                <span v-if="resText != ''" class="form-control-static form-control-static-extend">
                    <span v-text="resText"></span>
                </span>
                <button type="button" class="btn btn-xs" :class="cmpBtnColor" @click="xz()">@{{ cmpBtnName }}</button>
            </div>
        </div>

        <slot>
            如果没有分发内容则显示我。
        </slot>
    </div>
</template>