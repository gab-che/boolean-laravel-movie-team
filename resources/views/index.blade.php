<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Laravel</title>

   <!-- Fonts -->
   <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   <!-- Styles -->
   @vite('resources/js/app.js')

</head>

<body>
<h1>STIAMO STAMPANDO I FILM</h1>
   <h2>Stampa gli ultimi 10 films in ordine alfabetico</h1>
   <ul>
      @foreach ($last_films as $last_film)
         <li>
            {{$last_film->name}}
            
         </li>
         
      @endforeach
   </ul>
   <h2>Stampa gli ultimi 10 film in ordine di uscita</h2>
   <ul>
      @foreach ($last_films_release as $film)
         <li>
            {{$film->release_date}}
         </li>
      @endforeach
   </ul>



</body>

</html>
