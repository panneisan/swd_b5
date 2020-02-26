
$(".nav-link").on("click",function (e) {
    e.preventDefault();

    let to = $(this).attr("href");
    console.log(to);
    loadPage(to);

});

loadPage("home.html");

function loadPage(pageName){

    //to show active in nav bar
    $(".nav-link").removeClass("active");
    $(`.nav-link[href='${pageName}']`).addClass("active");

    //load page with ajax
    $.get(pageName,function (data) {
        $(".content").html(data);
    })

}
