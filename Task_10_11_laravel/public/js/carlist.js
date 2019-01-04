$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("button").click(function () {

    let row = $(this).parent().parent();
    let id = $(this).attr("data-id");

    $.ajax({
        method: "delete",
        url: "{{action("CarController@Delete") . "/"}}" + id,
        success: function () {
        row.remove();

        if ($("tbody tr").length === 0) {
            $("#carTable").html("<h5 class=\"text-danger\">В базе данных записи отсутствуют!</h5>");
        }
    }
});

});
