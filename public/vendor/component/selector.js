Vue.component('selector', {
    template: '#selector',
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
            if (this.lists[this.index]) {
                resData.id = this.lists[this.index].id;
                resData.name = this.lists[this.index].name;
                resData.code = this.code;
                this.$dispatch('ret-data', resData);
            }
        }
    },
    events: {
        'c-ok': function (index, msg) {
            if (this.index === null) {
                layer.msg(msg);
            } else {
                this.cmpData();
                layer.close(index);
            }
        }
    },
    created: function () {
        this.code = this.curr.code;
    },
    ready: function () {
        this.cmpData();
    }
});
