Vue.component('choose', {
    template: '#choose',
    props: ['id', 'title', 'resData', 'btnName'],
    data: function () {
        return {
            resText: '',
            resDataTmp: {}
        }
    },
    computed: {
        cmpBtnColor: function () {
            if (this.resText != '') {
                return 'btn-info';
            } else {
                return 'btn-danger';
            }
        },
        cmpBtnName: function () {
            if (this.resText != '') {
                return '变更' + this.btnName;
            } else {
                return '添加' + this.btnName;
            }
        }
    },
    methods: {
        xz: function () {
            layer.open({
                comp: this,
                type: 1,
                area: '510px',
                title: '添加收银机',
                content: $('#'+ this.id +' > .ale'),
                btn: ['确定', '取消'],
                yes: function (index) {
                    this.comp.cmpResText();
                    layer.close(index);
                },
                cancel: function (index) {

                }
            });
        },
        cmpResText: function () {
            this.resData = this.resDataTmp;

            if (this.resData.name != '' && this.resData.code != '') {
                this.resText = this.resData.name + " - " + this.resData.code;
            } else if (this.resData.name != '') {
                this.resText = this.resData.name;
            } else {
                this.resText = '';
            }
        }
    },
    events: {
        'child-msg': function (msg) {
            this.resDataTmp = msg;
        }
    },
    ready: function () {
        $('.ale').hide();
        this.cmpResText();
    }
});

Vue.component('ts', {
    template: '#ts',
    props: ['lists', 'curr'],
    data: function () {
        return {
            index: null,
            code: ''
        }
    },
    methods: {
        cmpData: function () {
            var resData = {};
            if (this.index && this.lists[this.index]) {
                resData.id = this.lists[this.index].id;
                resData.name = this.lists[this.index].name;
                resData.code = this.code;

                this.$dispatch('child-msg', resData);
            }
        }
    },
    ready: function () {
        this.cmpData();
    }
});

new Vue({
    el: '#form-cash-add',
    data: {
        form: {
            posi: '',
            port: '',
            ip: '192.168.0.100',
            pos: {
                id: null,
                code: '203'
            },
            pri: {
                id: 2,
                code: ''
            },
            mac: {
                id: 13,
                code: 'BPOS203'
            },
            bil: {
                id: 2,
                code: '203'
            },
            sys: {
                id: 1,
                name:'WINXP_POS_HK380'
            }
        },
        lists: {
            mac: [
                {id: 12, name: 'POS_12'},
                {id: 13, name: 'POS_13'},
                {id: 14, name: 'POS_14'},
                {id: 15, name: 'POS_15'}
            ],
            pri: [
                {id: 1, name: 'PRI_11'},
                {id: 2, name: 'PRI_12'},
                {id: 3, name: 'PRI_13'},
                {id: 4, name: 'PRI_14'}
            ]
        }
    },
    methods: {
        submit: function (form) {
            //询问框
            layer.alert('sdfsdfsdf');

        }
    }
});
