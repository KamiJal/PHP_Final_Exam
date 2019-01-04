$("#prepare").click(function () {
    ajaxQuery("prepare");
});

$("#execute").click(function () {
    ajaxQuery("execute");
});

$("#fetch").click(function () {
    ajaxQuery("fetch");
});

$("#query").click(function () {
    ajaxQuery("query");
});


function ajaxQuery(option) {
    $.ajax("queries/" + option + ".php").done(function (data) {
        if (data === "success") {
            $.ajax("LoadLogFile.php").done(function (data) {
                let splitted = data.split("|");
                let generatedTable = "";
                $.each(splitted, function (index, value) {
                    generatedTable += "<tr><td>" + value + "</td></tr>";
                });

                $("#tbody").html(generatedTable);
            });
        }
        else {
            alert("Произошла ошибка при записи в лог файл.");
        }
    });
}