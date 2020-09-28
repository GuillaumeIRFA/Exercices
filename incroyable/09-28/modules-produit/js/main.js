$(".moins").click(function() {
    let newVal = eval($(this).siblings("input").val() + "-1");
    if (newVal)
        $(this).siblings("input").val(newVal);
});

$(".plus").click(function() {
    let newVal = eval($(this).siblings("input").val() + "+1");
    $(this).siblings("input").val(newVal);
});