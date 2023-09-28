<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @vite('resources/js/app.js')
</head>

<body class="bg-[#dde3fb]">

    <nav class="border-gray-200  ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 rounded-lg bg-gray-50">
            <a href="{{ url('/') }}" class="flex items-center">
                <img src="{{ asset('images/logo_securitas_bgless.png') }}" class="h-12 mr-3" alt="SECURIT'AS Logo" />
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap text-[#efaa00] dark:text-yellow-500">SECURIT'AS</span>
            </a>
            <button data-collapse-toggle="navbar-solid-bg" type="button" id="targetEl"
                class="inline-flex items-center p-2 w-10 h-12 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul
                    class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-xl text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                            aria-current="page">Accueil</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">A
                            Propos</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Activités</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section
        class="bg-cover bg-no-repeat bg-center bg-[url('{{ asset('images/fourgon_securitas.png') }}')] bg-gray-700 bg-blend-multiply"
        style="background-image: url('{{ asset('images/fourgon_securitas.png') }}')">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Nous
                veillons sur vous et vos biens</h1>
            {{-- <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on
                markets where technology, innovation, and capital can unlock long-term value and drive economic growth.
            </p> --}}
            {{-- <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div> --}}
        </div>
    </section>



    <section class="  m-[50px] flex justify-center items-center " id="apropos">

        <div
            class=" flex flex-row align-start justify-between h-[400px] w-3/4 bg-white border border-gray-200 rounded-lg shadow  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="flex flex-col  justify-arround p-4 m-0 w-2/3">

                <h3 class="text-[#aab0c0] p-1 text-xl font-bold ">A PROPOS</h3>

                <h5 class="mb-3 text-2xl font-bold  tracking-tight  text-[#343f52] dark:text-white">SECURIT’AS SARL</h5>

                <p class="mb-3 text-md font-normal font-serif text-gray-700 dark:text-gray-400">Est une société spécialisée dans
                    la
                    protection des biens et des personnes, à Djibouti et dans ses
                    régions de l’intérieur.
                </p>

                <p class="mb-3 text-md font-normal font-serif text-gray-700 dark:text-gray-400">
                    Elle met ses compétences au service des sociétés et des particuliers, afin de les aider à
                    résoudre leurs problèmes de protection de biens et de personnes, de sécurité, de
                    gardiennage et de surveillance en grande partie.
                </p>

                <p class="mb-3 text-md font-normal font-serif text-gray-700 dark:text-gray-400">
                    Elle privilégie un service sur mesure et un établit un partenariat bâti sur une relation 
                    permanente mais aussi de confiance avec ses clients pour mieux pallier à leurs besoins, 
                    carences, contrôles et suivi des prestations
                </p>

                <p class="mb-3 text-md font-normal font-serif text-gray-700 dark:text-gray-400">
                    Enfin, elle attache une importance capitale à la qualité de son recrutement, en 
                    sélectionnant son personnel selon des critères très rigoureux de moralité, présentation, 
                    culture générale et enfin de formation.
                </p>

            </div>
            <div class="flex align-top  m-0">
                <img class="object-fill h-full w-full rounded-r  " src="{{ asset('images/fourgon-blindé.jpg') }}"
                    alt="">
            </div>

        </div>

    </section>

    <section class="  m-[50px] flex justify-center items-center " id="activites">

        <div
            class=" flex flex-row align-start justify-between h-[400px] w-3/4 bg-white border border-gray-200 rounded-lg shadow  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="flex flex-col  justify-arround p-4 m-0 w-2/3">

                <h3 class="text-[#aab0c0] p-1 text-xl font-bold ">A PROPOS</h3>

                <h5 class="mb-3 text-2xl font-bold  tracking-tight  text-[#343f52] dark:text-white">SECURIT’AS SARL</h5>

                <p class="mb-3 text-md font-normal font-serif text-gray-700 dark:text-gray-400">Est une société spécialisée dans
                    la
                    protection des biens et des personnes, à Djibouti et dans ses
                    régions de l’intérieur.
                </p>

                <p class="mb-3 text-md font-normal font-serif text-gray-700 dark:text-gray-400">
                    Elle met ses compétences au service des sociétés et des particuliers, afin de les aider à
                    résoudre leurs problèmes de protection de biens et de personnes, de sécurité, de
                    gardiennage et de surveillance en grande partie.
                </p>

                <p class="mb-3 text-md font-normal font-serif text-gray-700 dark:text-gray-400">
                    Elle privilégie un service sur mesure et un établit un partenariat bâti sur une relation 
                    permanente mais aussi de confiance avec ses clients pour mieux pallier à leurs besoins, 
                    carences, contrôles et suivi des prestations
                </p>

                <p class="mb-3 text-md font-normal font-serif text-gray-700 dark:text-gray-400">
                    Enfin, elle attache une importance capitale à la qualité de son recrutement, en 
                    sélectionnant son personnel selon des critères très rigoureux de moralité, présentation, 
                    culture générale et enfin de formation.
                </p>

            </div>
            <div class="flex align-top  m-0">
                <img class="object-fill h-full w-full rounded-r  " src="{{ asset('images/fourgon-blindé.jpg') }}"
                    alt="">
            </div>

        </div>

    </section>







</body>

</html>
