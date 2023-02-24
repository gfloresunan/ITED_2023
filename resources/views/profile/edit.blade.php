<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <br>
    <div class="container py-12">
        <ul class="flex border-b">
            <li class="mr-1 border-b-2 border-blue rounded-t" >
                <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold {{ session('activeTab', 0) == 0 ? 'active' : '' }}" href="#pestana1" aria-selected="false">Información del perfil</a>
            </li>
            <li class="mr-1 border-b-2 border-blue rounded-t">
                <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold {{ session('activeTab', 0) == 1 ? 'active' : '' }}" href="#pestana2" aria-selected="true">Datos generales</a>
            </li>
            <li class="mr-1 border-b-2 border-blue rounded-t">
                <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="#pestana3">Datos académicos</a>
            </li>
            <li class="mr-1 border-b-2 border-blue rounded-t">
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
                            @include('profile.partials.updateAcademico-profile-information-form')
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
