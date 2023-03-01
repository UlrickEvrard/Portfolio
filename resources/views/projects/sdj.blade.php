<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Ulrick Evrard</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="flex flex-col lg:flex-row flex-wrap justify-between content-center w-screen lg:h-screen lg:pl-20 lg:pr-20 bg-[#224670]">

        <section class="flex flex-col justify-start content-center pt-10 pl-5 lg:pl-10 md:pl-20 md:pr-20 pr-10 h-5/6 lg:w-4/12 lg:rounded-lg bg-[#162D48]">
            <div class="pb-12">
                <h1 class="text-7xl pb-6 text-red-500">Saint du jour</h1>
            </div>
            <hr>
            <div class="pt-12">
             <p class="font-medium text-white">
                Saint du jour est une application mobile sur laquelle nous travaillons à Triomphe Development,<br>
                elle a pour vocation de sortir sur android ainsi que sur IoS,
                vous pourrez y retrouver un article et une prière au saint célébré en ce jour. <br><br>

                Le projet a une valeur aussi culturelle que religieuse, chacun pourra y trouver son compte. <br><br>
            </p>
            </div>
        </section>

        <section class="flex flex-col gap-y-10 justify-around content-center flex-nowrap overscroll-x-none overflow-y-scroll pl-5 pr-5 md:pl-20 md:pr-20 pb-12 pt-12 lg:pt-0 h-5/6 w-full lg:w-5/12 lg:rounded-lg bg-[#162D48]">
        
            <div>
                <h1 class="text-3xl pb-6 text-red-500">Technologies :</h1>
                <ul class="text-xl text-white ">
                    <li>Flutter</li>
                    <li>Laravel</li>
                </ul>
            </div>
            <div>
                <h1 class="text-3xl pb-6 text-red-500">Détails:</h1>
                <p class="font-medium text-white">
                     L'UI et l'UX ont été conçues par ma compagne.
                     
                     J'ai développé toute la partie "client" de l'application en Flutter, 
                     qui est un framework du langage Dart, tout deux développés et maintenus par Google.<br><br>

                     Flutter est capable d'une grande agilité, j'apprécie énormement de travailler avec flutter car
                     c'est une solution très moderne, très bien intégrée avec mon ide (vsCode) et qui permet de progresser vite. <br><br>
                     
                     Tout comme symfony, laravel est un framework performant, où les choses sont bien structurées, ce qui permet
                     de garantir une haute maintenabilité du code si l'on respecte les bonnes pratiques. <br><br>

                     Le projet étant assez volumineux j'ai utilisé plusieurs composant de laravel comme breeze afin de créer
                     une interface pour entrer les Saints en base (mysql), Eloquent pour certaines requêtes complexes (j'aime aussi le SQL vanilla),
                     et bien sûr Sanctum pour l'authentification des users.
                </p>
            </div>
                
        </div>
            
        </section>
    </body>
</html>
