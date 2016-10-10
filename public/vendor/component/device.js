Vue.component('device', {
    template: '#device',
    props: ['name', 'current', 'list', 'type'],
    data: function () {
        return {
            curr: {
                id: this.current.id,
                code: this.current.code,
                name: ''
            },
            text: ''
        }
    },
    computed: {
        btnColor: function () {
            if (this.text != '') {
                return 'btn-info';
            } else {
                return 'btn-danger';
            }
        },
        btnName: function () {
            if (this.text != '') {
                return '变更' + this.name;
            } else {
                return '添加' + this.name;
            }
        }
    },
    methods: {
        choose: function () {
            layer.open({
                prent: this,
                type: 1,
                area: '510px',
                title: this.btnName,
                content: $(this.$el).children('.ale'),
                btn: ['确定', '取消'],
                yes: function (index) {
                    this.prent.text = this.prent.getText();

                    if (this.prent.curr.name) {
                        this.prent.$emit('changed', this.prent.curr, this.prent.type);
                        layer.close(index);
                    } else {
                        layer.msg('请选择' + this.prent.name + '型号');
                    }
                },
                cancel: function (index) {  }
            });
        },
        getText: function () {
            this.curr.name = this.curr.id != null ? this.list[this.curr.id] : '';

            if (this.curr.name && this.curr.code) {
                return this.curr.name + " - " + this.curr.code;
            } else if (this.curr.name != '') {
                return this.curr.name;
            } else {
                return '';
            }
        }
    },
    mounted: function () {
        $('.ale').hide();

        this.text = this.getText();
    }
});
