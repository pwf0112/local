Vue.component('device', {
    template: '#device',
    props: ['id', 'title', 'resData', 'btnName'],
    data: function () {
        return {
            resText: ''
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
        },
        cmpTsTitle: function () {
            if (this.title != '') {
                return '变更' + this.title;
            } else {
                return '添加' + this.title;
            }
        }
    },
    methods: {
        xz: function () {
            layer.open({
                comp: this,
                type: 1,
                area: '510px',
                title: this.cmpTsTitle,
                content: $('#'+ this.id +' > .ale'),
                btn: ['确定', '取消'],
                yes: function (index) {
                    this.comp.$broadcast('c-ok', index, '请选择型号');
                },
                cancel: function (index) {  }
            });
        },
        cmpResText: function (data) {
            if (data.name != '' && data.code != '') {
                return data.name + " - " + data.code;
            } else if (data.name != '') {
                return data.name;
            } else {
                return '';
            }
        }
    },
    events: {
        'ret-data': function (data) {
            this.resData = {
                id: data.id,
                code: data.code
            };
            this.resText = this.cmpResText(data);
        }
    },
    ready: function () {
        $('.ale').hide();
    }
});
