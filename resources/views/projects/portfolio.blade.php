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
                <h1 class="text-7xl pb-6 text-red-500">Portfolio</h1>
            </div>
            <hr>
            <div class="pt-12">
            <p class="font-medium text-white">
                    Celui-ci à pour simple de but d'heberger mes projets afin d'en faire la démonstration <br><br>
                    le git est public : 
                </p>
            </div>
        </section>

        <section class="flex flex-col gap-y-10 justify-around content-center flex-nowrap overscroll-x-none overflow-y-scroll pl-5 pr-5 md:pl-20 md:pr-20 pb-12 pt-12 lg:pt-0 h-5/6 w-full lg:w-5/12 lg:rounded-lg bg-[#162D48]">
        
            <div>
                <h1 class="text-3xl pb-6 text-red-500">Technologies :</h1>
                <ul class="text-xl text-white ">
                <li>Laravel</li>
                    <li>Tailwind css</li>
                </ul>
            </div>
            <div>
                <h1 class="text-3xl pb-6 text-red-500">Détails:</h1>
                <p class="font-medium text-white">
                    J'ai développé ce portfolio en laravel car celà m'a permis de continuer à apprendre sur
                    ce framework, j'aurai bien sûr pu faire plus simple, mais le cadre qu'offre Laravel me
                    permettra aussi d'apporter des améliorations futures à ce portfolio. <br>
                    (envoi de messages, enregistrement de scores sur un jeu webGL ...).
                </p>
            </div>
                
        </div>
            
        </section>
    </body>
</html>
