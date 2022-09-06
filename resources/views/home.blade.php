
<!-- Esercizio di oggi: :laravel: Laravel Primi Passi :laravel:
nome repo: laravel-primi-passi
Ciao ragazze e ciao ragazzi!
Oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel!

Descrizione:
Per prima cosa, creiamo un nuovo progetto Laravel 7,
utilizzando questo comando: composer create-project --prefer-dist laravel/laravel:^7.0 laravel-primi-passi
Oppure utilizziamo il medesimo comando nella cartella già creata.
Al termine dell'installazione, entriamo nella cartella del progetto cd laravel-primi-passi
e avviamo l'artisan serve con uno di questi due comandi: php artisan serve oppure, se il primo non funziona:  php -S localhost:8000 -t public
A questo punto, iniziamo a prendere confidenza con le rotte e le views:
cancelliamo la view welcome.blade.php e creiamo una nostra homepage.
Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo un Hello World, poi sentiamoci liberi di sperimentare. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Laravel Primi Passi </title>

    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}" >


</head>
<body>

    <div>
        <h1>Hello World</h1>
        <a href="/second-page">
            <h2>Link alla seconda pagina</h2>
        </a>
       
    </div>

    <div class="image-container">
         <img  class="splash-image" src="https://wips.plug.it/cips/tecnologia/cms/2021/08/mondo.jpg?w=738&a=c&h=415" alt="globe">
    </div>
  


    
</body>
</html>