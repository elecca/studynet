<x-app-layout>

{{--Portada--}}

<section class="bg-cover" style="background-image: url({{asset('img/home/people-2557396_1920.jpg')}})">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">    
        
        <div class="w-full md:w-3/4 lg:w-1/2">

            <h1 class="text-white font-bold text-4xl">Domina la tecnología web con Coders Free</h1>
            <p class="text-white text-lg mt-2 mb-4">En Coders Free encontrarás cursos, manuales y artículos que te ayudarán a convertirte en un profesional del desarrollador web
            </p>

            <!-- component -->
            @livewire('search')
        </div>
    </div>


</section>


<section class="mt-24">
    <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/bird-6062768_640.jpg')}}">
            </figure>

            <header class="mt-2">
                <h1 class="text-center text-xl text-gray-700">Cursos y Proyectos</h1>
            </header>

            <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>

        </article>
        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/cherry-blossom-6068004_640.jpg')}}">
            </figure>

            <header class="mt-2">
                <h1 class="text-center text-xl text-gray-700">Manual de Laravel</h1>
            </header>

            <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>

        </article>
        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/mountains-6067150_640.jpg')}}">
            </figure>

            <header class="mt-2">
                <h1 class="text-center text-xl text-gray-700">Blog</h1>
            </header>

            <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>

        </article>
        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/rhino-6065480_640.jpg')}}">
            </figure>

            <header class="mt-2">
                <h1 class="text-center text-xl text-gray-700">Desarrolllo web</h1>
            </header>

            <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>

        </article>

    </div>

</section>

<section  class="mt-24 bg-gray-700 py-12">
    <h1 class="text-center text-white text-3xl">¿No sabes qué curso llevar?</h1>
    <p class="text-center text-white">Dirígete al catálogo de cursos y filtralos por categoría o nivel
    </p>

    <div class="flex justify-center mt-4">
        <a href="{{(route('courses.index'))}}" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Catálogo de cursos
        </a>
    </div>
</section>


<section class="my-24">
    <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS CURSOS</h1>
    <p class="text-center text-gray-500 text-sm mb-6">Trabajo duro para seguir subiendo cursos</p>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

        @foreach ($courses as $course)

            <x-course-card :course="$course" />  


        @endforeach

    </div>

</section>

</x-app-layout>
