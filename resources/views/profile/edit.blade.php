<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <br>
    <div class="container py-12">
        <ul class="flex border-b">
            <li class="-mb-px mr-1">
                <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold active" href="#pestana1">Información del perfil</a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="#pestana2">Datos generales</a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="#pestana3">Datos académicos</a>
            </li>
            <li class="mr-1">
                <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="#pestana4">Reiniciar contraseña</a>
            </li>

        </ul>

        <div class="bg-white rounded-b border-l border-r border-b p-3">
            <div id="pestana1" class="tab-content">
                <div class="flex justify-center items-center">
                    <div class="w-full">
                        <div class="w-4/5 mx-auto">
                        @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>
            </div>

            <div id="pestana2" class="tab-content hidden">
                <div class="flex justify-center items-center">
                    <div class="w-full">
                        <div class="w-4/5 mx-auto">
                            @include('profile.partials.updateGeneral-profile-information-form')
                        </div>
                    </div>
                </div>
            </div>

            <div id="pestana3" class="tab-content hidden">
                <div class="flex justify-center items-center">
                    <div class="w-full">
                        <div class="w-4/5 mx-auto">
                            @include('profile.partials.updateGeneral-profile-information-form')
                        </div>
                    </div>
                </div>
            </div>

            <div id="pestana4" class="tab-content hidden">
                <div class="flex justify-center items-center">
                    <div class="w-full">
                        <div class="w-4/5 mx-auto">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="row justify-content-around">
                <div class="col-5 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="col-5 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.updateGeneral-profile-information-form')
                    </div>
                </div>
        </div>--}}
        <br>
        <div class="row justify-content-around">

                {{--<div class="col-5 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>--}}

                <div class="col-5 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>
