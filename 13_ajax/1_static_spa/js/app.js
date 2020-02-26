

$(document).ready(function () {

    $(".nav-link").click(function (e) {

        e.preventDefault();
        let to = $(this).attr("href");
        console.log(to);
        // $.ajax({
        //
        //     method:"GET",
        //     url:to,
        //     success:function (data) {
        //         console.log(data);
        //     }
        //
        //
        // });
        $.get(to,function (data) {
            $(".content").html(data);
        })

    });


})