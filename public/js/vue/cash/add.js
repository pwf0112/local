$.get(config.cash_data_url, function (data) {
    new Vue({
        el: '#form-cash-add',
        data: data,
        methods: {
            submit: function (form) {
                $.post(config.cash_data_submit, form, function (res) {
                    console.log(res);
                });
            },
            receive: function (data, type) {
                this.form[type].id = data.id;
                this.form[type].code = data.code;
            }
        }
    });
});
