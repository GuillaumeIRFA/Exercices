const town = [
    ["paris", "Paris"],
    ["tokyo", "Tokyo"],
    ["moscou", "Moscow"],
    ["buenos-aires", "Buenos%20aires"],
    ["mulhouse", "Mulhouse"]
];

const key = "b9474c57ce20e1720a6f00538e2f38b8";

$('.panel').click(function() {
    $(this).addClass("active");
    $(this).siblings(".active").removeClass("active");
});

function requestWeatherData(town, key, lang, units) {

    $.ajax({

        url: `https://api.openweathermap.org/data/2.5/weather?q=${town[1]}&appid=${key}&lang=${lang}&units=${units}`,

        type: "GET",

        success: function(data) {

            let icon = `url("https://openweathermap.org/img/wn/${data.weather[0].icon}@2x.png")`;
            let description = `<td>${data.weather[0].description}</td>`;
            let temp = `<td>${Math.round(data.main.temp)}°C</td>`;
            let range = `<td>${data.main.temp_min}°C - ${data.main.temp_max}°C</td>`;
            let humidity = `<td>${data.main.humidity}%</td>`;

            $(`#${town[0]}`).children(".avatarWeather").css("background-image", icon);
            $(`#${town[0]}`).find(".weatherContent").children("tr:eq(0)").append(description);
            $(`#${town[0]}`).find(".weatherContent").children("tr:eq(1)").append(temp);
            $(`#${town[0]}`).find(".weatherContent").children("tr:eq(2)").append(range);
            $(`#${town[0]}`).find(".weatherContent").children("tr:eq(3)").append(humidity);
        },

        error: function(error) {
            console.log(error);
        }

    });

}

function requestAllWeatherData(town, key, lang, metric) {

    for (let i = 0; i < town.length; i++) {

        requestWeatherData(town[i], key, lang, metric);

    }
}

requestAllWeatherData(town, key, "fr", "metric");