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

        <section class="flex flex-col justify-start content-center pl-5 lg:pl-10 md:pl-20 md:pr-20 pr-10 h-5/6 lg:w-4/12 lg:rounded-lg bg-[#162D48]">
            <div>
                <h1 class="pt-10 text-5xl lg:text-7xl pb-6 text-red-500">Ulrick Evrard</h1>
                <p class="text-md lg:text-xl text-white">Co-fondateur de Triomphe Development.</p>
                <p class="text-md lg:text-xl text-white">Développeur full-stack & Game designer.</p>
            </div>
            <div class="h-4/6 w-full overflow-y-scroll mt-5 lg:mt-5 pt-5 pb-5 pl-10 pr-10 rounded-lg bg-[#E3E5DA]">
                <p class="text-sm lg:text-base font-normal">  Bonjour ! </br></br>

                    Tout d’abord, merci de prendre le temps de me lire, le temps est une chose précieuse, c’est pourquoi je serai assez bref dans ma présentation. </br></br>

                    Je m’appelle Ulrick Evrard, je vis dans la campagne normande avec ma compagne depuis 8 ans maintenant,  Axelle, elle est la co-fondatrice de Triomphe Development. </br></br>

                    Côté professionel, je suis l’autre fondateur de Triomphe Development, une entreprise qui produit actuellement des digitaux en tout genre, sur lesquels nous communiquerons bientôt. </br></br>

                    Je suis également employé en tant que développeur back-end chez Sarbacane. Bien que le développement soit mon métier, que j’affectione, le marketing, la communication et le commerce sont des sujets professionels qui m’intéréssent et que j’aime approfondir autant que le dévelopement. </br></br>

                    J’ai conçu ce site comme un présentoir pour mes différents projets tous plus brillants les uns que les autres, j’espère qu’ils vont plairont!</p>
                
                <p class="text-sm lg:text-base text-end">Ulrick Evrard</p>
            </div>
        </section>

        <section class="flex flex-col gap-y-10 justify-between content-center flex-nowrap overscroll-x-none overflow-y-scroll md:pl-20 md:pr-20 pb-12 pt-12 h-5/6 w-full lg:w-5/12 lg:rounded-lg bg-[#162D48]">

            <h1 class="text-3xl pb-6 sm :text-center text-red-500">Projets :</h1>

            <div class="flex flex-col md:flex-row flex-wrap gap-y-10 justify-between content-center">
               
                    <a href="/projects/PersonnalScraper">
                        <div class="flex flex-wrap justify-center content-center h-60 w-60 rounded-md bg-[#E3E5DA]">
                            <p class="font-medium">Personnal Scraper</p>
                        </div>
                    </a>

                    <a href="/projects/Portfolio">
                        <div class="flex flex-wrap justify-center content-center h-60 w-60 rounded-md bg-red-500">
                            <p class="font-medium">Portfolio ( ce site )</p>
                        </div>
                    </a>
                    
            
                    <a href="/projects/Yummans">
                        <div class="flex flex-wrap justify-center content-center h-60 w-60 rounded-md bg-red-500">
                            <p class="font-medium">Yummans</p>
                        </div>
                    </a>

                    <a href="/projects/Sarbacane">
                        <div class="flex flex-wrap justify-center content-center h-60 w-60 rounded-md bg-[#E3E5DA]">
                            <p class="font-medium">@Sarbacane</p>
                        </div>
                    </a>
        
                    <a href="/projects/Saintdujour">
                        <div class="flex flex-wrap justify-center content-center h-60 w-60 rounded-md bg-[#E3E5DA]">
                            <p class="font-medium">Saint du jour</p>
                        </div>
                    </a>

                    <a href="/">
                        <div class="flex flex-wrap justify-center content-center h-60 w-60 rounded-md bg-red-500">
                            <p class="font-medium">A venir</p>
                        </div>
                    </a>
                    
            </div>
            
        </section>
    </body>
</html>
