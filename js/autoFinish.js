$(function () {
    $('#user_search_object').typeahead({
        source: function (query, process) {
            var username =  $('#user_search_object').val();
            $.ajax({
                url: 'api.php',
                type: "get",
                data: {
                    name: username
                },
                dataType: "json",
                success: function(json) {
                    process(json);
                }
            });
        },

        highlighter: function (item) {
            return "" + item + "";
        },

        updater: function (item) {
            console.log("'" + item + "' selected.");
            return item;
        }
    });
});
