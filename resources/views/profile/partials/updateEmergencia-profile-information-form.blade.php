<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Contato de emergencia') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Actualice la información de contacto de emergencia") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.updateEmergencia') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <input type="hidden" name="active_tab" value="3">
{{--{{ $user }}--}}
{{--        <input type="hidden" name="selected_tab" value="pestana2">--}}

        <div>
            <x-input-label for="e_nombre" :value="__('Nombre')" />
            <x-text-input id="e_nombre" name="e_nombre" type="text" class="mt-1 block w-full" :value="old('e_nombre', $user->e_nombre)" required autofocus autocomplete="e_nombre" />
            <x-input-error class="mt-2" :messages="$errors->get('e_nombre')" />
        </div>

        <div>
            <x-input-label for="e_celular" :value="__('Celular')" />
            <x-text-input id="e_celular" name="e_celular" type="text" class="mt-1 block w-full" :value="old('e_celular', $user->e_celular)" required autofocus autocomplete="e_celular" />
            <x-input-error class="mt-2" :messages="$errors->get('e_celular')" />
        </div>

        <div>
            <x-input-label for="e_direccion" :value="__('Dirección')" />
            <x-text-input id="e_direccion" name="e_direccion" type="text" class="mt-1 block w-full" :value="old('e_direccion', $user->e_direccion)" required autofocus autocomplete="e_direccion" />
            <x-input-error class="mt-2" :messages="$errors->get('e_direccion')" />
        </div>
        <div>
            <x-input-label for="e_personas" :value="__('Número de personas en el hogar')" />
            <x-text-input id="e_personas" name="e_personas" type="number" class="mt-1 block w-full" :value="old('e_personas', $user->e_personas)" required autofocus autocomplete="e_personas" />
            <x-input-error class="mt-2" :messages="$errors->get('e_personas')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated-emergencia')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Guardado.') }}</p>
            @endif
        </div>
    </form>
</section>
