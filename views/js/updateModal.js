$(document).ready(function() {

    $(".edit").on("click", function() {
        $("#updateUser").modal("show");

        $tr = $(this).closest("tr");

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        $("#u_id").val(data[0]);
        $("#name").val(data[1]);
        $("#last_name").val(data[2]);
        $("#date").val(data[3]);
        $("#male").val(data[4]);
        $("#female").val(data[5]);

        console.log(data);
    });
});