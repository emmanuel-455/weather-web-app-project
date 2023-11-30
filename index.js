const apiKey = "9ef820affd2824df2239d6c20cc768a1";
        const apiUrl = "https://api.openweathermap.org/data/2.5/weather?nuits=metric&q=";

        const searchBox = document.querySelector(".search input");
        const searchButton = document.querySelector('.search button');
        const weatherIcon = document.querySelector(".weather-icon");




        async function checkWeather(city) {
            const response = await fetch(apiUrl + city + `&appid=${apiKey}`);
            let data = await response.json();

            if (response.status == 404) {
                document.querySelector(".error").style.display = "block";
                document.querySelector(".weather").style.display = "none";
            }else {
                console.log(data)
            document.querySelector(".city").innerHTML = data.name;
            document.querySelector(".temp").innerHTML = Math.round(data.main.temp) + "°c";
            document.querySelector(".humidity").innerHTML = data.main.humidity + "%";
            document.querySelector(".wind").innerHTML = data.wind.speed + " km/h";

            if (data.weather[0].main == "Clouds") {
                weatherIcon.src = "images/clouds.png";
            }
            else if (data.weather[0].main == "Clear") {
                weatherIcon.src = "images/clear.png";
            }
            else if (data.weather[0].main == "Rain") {
                weatherIcon.src = "images/rain.png";
            }
            else if (data.weather[0].main == "Drizzle") {
                weatherIcon.src = "images/drizzle.png";
            }
            else if (data.weather[0].main == "Mist") {
                weatherIcon.src = "images/mist.png";
            }

            document.querySelector(".error").style.display = "none";
            document.querySelector(".weather").style.display = "block";
            }

            
        }
        searchButton.addEventListener('click', () => {
            checkWeather(searchBox.value);
        })