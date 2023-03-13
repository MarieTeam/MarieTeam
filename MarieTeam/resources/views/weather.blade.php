<h1>Météo pour {{ $data['name'] }}</h1>
<p>{{ $data['weather'][0]['description'] }}</p>
<p>Température: {{ $temperatureCelsius }}°C</p>
<p>Humidité: {{ $data['main']['humidity'] }}%</p>
<p>Vitesse du vent: {{ $data['wind']['speed'] }} km/h</p>
