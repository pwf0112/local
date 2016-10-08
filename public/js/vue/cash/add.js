$.get(config.cash_data_url, function (data) {
    new Vue({
        el: '#form-cash-add',
        data: data,
        methods: {
            submit: function (form) {
                $.post(config.cash_data_submit, form, function (res) {
                    console.log(res);
                });
            }
        }
    });
});
