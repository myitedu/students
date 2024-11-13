<div class="card mb-3">
    <div class="card-header bg-secondary text-white">Weather Forecast</div>
    <div class="card-body">
        <?php
        // Open-Meteo API configuration
        $latitude = 40.586;
        $longitude = -73.944;
        $api_url = "https://api.open-meteo.com/v1/forecast?latitude={$latitude}&longitude={$longitude}&current_weather=true";

        // Initialize cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Execute the API request
        $response = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response
        $weather_data = json_decode($response, true);

        // Check if data is available and display it
        if (isset($weather_data['current_weather'])) {
            $celsius = $weather_data['current_weather']['temperature'];
            $fahrenheit = ($celsius * 9/5) + 32; // Convert to Fahrenheit
            $windspeed = $weather_data['current_weather']['windspeed'];
            echo "<p>Temperature: " . htmlspecialchars($fahrenheit) . " °F</p>";
            echo "<p>Wind Speed: " . htmlspecialchars($windspeed) . " km/h</p>";
        } else {
            echo "<p>Could not retrieve weather data.</p>";
        }
        ?>
    </div>
</div>