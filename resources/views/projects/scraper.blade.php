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
                <h1 class="text-3xl text-red-500">Personnal Scraper</h1>
            </div>
            <hr>
            <div class="pt-12">
            <p class="font-medium text-white">
             Ce projet est né d'une discussion avec des collègues concernant la génération de leads
             pour une équipe de commerciaux. <br> <br>
             Je leur soumettais l'idée que le meilleur lead que l'on puisse avoir était un client ou ancien client d'un concurrent, et qui soit mécontent de son offre actuelle, 
             celui-ci coches de cases très intéréssantes : <br><br>
             - Il est intéréssé par notre type de produit (Saas en l'occurence). <br>
             - Il est mécontent de son offre actuelle et probablement ouvert à une meilleure solution. <br><br>

             J'ai donc développé une application bureau ( j'étais en plein dans une formation flutter ), 
             ce qui était très satisfaisant d'ailleurs, capable de scraper la totalité des avis d'une entreprise 
             sur Trustpilot, et d'en faire un csv détaillant les notes, avis et commentaires.<br><br>

             L'application est gratuite (pour le moment) elle peut-être téléchargée via le lien suivant :
            </p>
            <a href="/personalScraper.exe" class="font-bold text-red-500" download>Télécharger Personnal Scraper </a>
            <p class="font-medium text-white"> Je pourrai être amener à la monétiser dans le futur, vous comprendrez donc que son répértoire git soit privé.
            </div>
        </section>

        <section class="flex flex-col gap-y-10 justify-around content-center flex-nowrap overscroll-x-none overflow-y-scroll pl-5 pr-5 md:pl-20 md:pr-20 pb-12 pt-12 lg:pt-0 h-5/6 w-full lg:w-5/12 lg:rounded-lg bg-[#162D48]">
        
            <div>
                <h1 class="text-3xl pb-6 text-red-500">Technologies :</h1>
                <ul class="text-xl text-white ">
                <li>Flutter</li>
                <li>Laravel ( à venir pour de futures fonctionnalités )</li>
            </ul>
            </div>
            <div>
                <h1 class="text-3xl pb-6 text-red-500">Détails:</h1>
                <p class="font-medium text-white">
                     Tout le client est flutter, c'est une application  que j'ai développé au fur et 
                     à mesure que j'apprenais avec <a class="text-red-500" href=" https://www.udemy.com/course/learn-flutter-dart-to-build-ios-android-apps/"> ce cours </a>
                     sur la plateforme Udemy. 
                </p>
            </div>
                
        </div>
            
        </section>
    </body>
</html>
