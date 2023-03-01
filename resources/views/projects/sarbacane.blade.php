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
                <h1 class="text-3xl text-red-500">@Sarbacane</h1>
            </div>
            <hr>
            <div class="pt-12">
                <p class="font-medium text-white">
                    Sarbacane à eu la bonté de me recruter en tant que stagiare  en sortie de formation courte, j'y ai été formé et ai pu faire
                    mes armes sur des sujets très variés, d'abord rattaché au pôle marketing, j'ai ensuite rejoint la R&D
                    où j'ai découvert un management beaucoup plus cadré, avec ses tickets, réunions et cadrages. <br><br>

                    J'y ai ensuite été recruté en CDI, avec un avantage très intéréssant pour moi : le télétravail à 75% vec le temps des tâches 
                    plus généralistes me sont confiées, comme étudier la faisabilité d'un nouveau parcours client ... <br><br>
                    Mais aussi des tâches plus techniques et plus sensibles comme la refactorisation des systèmes de paiement par carte.
                </p>
            </div>
        </section>

        <section class="flex flex-col gap-y-10 justify-around content-center flex-nowrap overscroll-x-none overflow-y-scroll pl-5 pr-5 md:pl-20 md:pr-20 pb-12 pt-12 lg:pt-0 h-5/6 w-full lg:w-5/12 lg:rounded-lg bg-[#162D48]">
        
            <div>
                <h1 class="text-3xl pb-6 text-red-500">Technologies :</h1>
                <ul class="text-xl text-white ">
                    <li>PHP</li>
                    <li>SQL</li>
                    <li>Javascript (Jquery, Angular, React)</li>
                    <li>HTML - CSS</li>
                </ul>
            </div>
            <div>
                <h1 class="text-3xl pb-6 text-red-500">Détails:</h1>
                <p class="font-medium text-white">
                     J'ai développé beaucoup de choses pour Sarbacane, bien que je ne souhaite pas livrer
                     trop de détails voici une liste succincte : <br><br>
                    <ul class="font-medium text-white">
                        <li>- Maintenance et amélioration d'un CRM.</li>
                        <li>- Intégration d'API privée & publique (Procédure de paiement, Signature de documents...).</li>
                        <li>- Création du début à la fin d'un site e-commerce en Angular & PHP.</li>
                        <li>- Création d'un système de notification pour la récolte d'avis client.</li>
                        <li>- Beaucoup d'autres projets.</li>
                    </ul>
                </p>
            </div>
                
        </div>
            
        </section>
    </body>
</html>
