new Vue({
    el: '#form-cash-add',
    data: {
        form: {
            posi: '',
            port: '',
            ip: '192.168.0.100',
            pos: {
                id: null,
                code: 'ss203'
            },
            pri: {
                id: 1,
                code: ''
            },
            mac: {
                id: 3,
                code: 'BPOS203'
            },
            bil: {
                id: 2,
                code: '203'
            },
            sys: null
        },
        lists: {
            mac: [
                {id: 1, name: 'POS_12'},
                {id: 2, name: 'POS_13'},
                {id: 3, name: 'POS_14'},
                {id: 4, name: 'POS_15'}
            ],
            pri: [
                {id: 1, name: 'PRI_11'},
                {id: 2, name: 'PRI_12'},
                {id: 3, name: 'PRI_13'},
                {id: 4, name: 'PRI_14'}
            ],
            bil: [
                {id: 1, name: 'POS_12'},
                {id: 2, name: 'POS_13'},
                {id: 3, name: 'POS_14'},
                {id: 4, name: 'POS_15'}
            ],
            pos: [
                {id: 1, name: 'PRI_11'},
                {id: 2, name: 'PRI_12'},
                {id: 3, name: 'PRI_13'},
                {id: 4, name: 'PRI_14'}
            ],
            sys: [
                {id: 1, name: 'SYS_11'},
                {id: 2, name: 'SYS_12'},
                {id: 3, name: 'SYS_13'},
                {id: 4, name: 'SYS_14'}
            ]
        }
    },
    methods: {
        submit: function (form) {
            $.post('http://localhost/post01', form, function (res) {
                console.log(res);
            });
        }
    }
});
