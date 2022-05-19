$(function () {
    $('#even').on('change', function (event) {
        let color = $(event.currentTarget).val();
        $('.table tr:nth-child(odd):not(".title")').css('background-color', color);
    });

    $('#odd').on('change', function (event) {
        let color = $(event.currentTarget).val();
        $('.table tr:nth-child(even)').css('background-color', color);
    });
});
