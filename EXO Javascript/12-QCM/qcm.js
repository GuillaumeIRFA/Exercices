$(document).ready(function() {

    $(".question").css({ background: "orange", border: "1px solid black", clear: "both", width: "100%", height: "250px", marginBottom: "30px", display: "flex" });
    $(".reponse").addClass("hidden");
    $("img").css({ alignSelf: "center", justifySelf: "flex-end", marginLeft: "auto" });

    const ReponsesIndex = [0, 0, 1];

    $("a").hover(
        function() {
            $(".question").each(function(index) {
                currentSelector = $(`[name="q${index+1}"]`);
                if (currentSelector[ReponsesIndex[index]].checked == true) {
                    $(`#reponse${index+1}`).css({ color: "green" });
                    $(`#img${index+1}`).attr("src", "./bon.png");
                } else {
                    $(`#reponse${index+1}`).css({ color: "red" });
                    $(`#img${index+1}`).attr("src", "./mauvais.png");
                }
            });
            $(".reponse").toggleClass("hidden");
        },
        function() {
            $("img").attr("src", "./question.png");
            $(".reponse").toggleClass("hidden");
        }
    )
});