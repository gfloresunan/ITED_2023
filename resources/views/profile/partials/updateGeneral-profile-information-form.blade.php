<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Información del perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Actualice la información del perfil") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.updateGeneral') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
{{--{{ $user }}--}}
        <div>
            <x-input-label for="cedula" :value="__('Cédula')" />
            <x-text-input id="cedula" name="cedula" type="text" class="mt-1 block w-full" :value="old('cedula', $user->cedula)" required autofocus autocomplete="cedula" />
            <x-input-error class="mt-2" :messages="$errors->get('cedula')" />
        </div>

        <div>
            <x-input-label for="fecha_nacimiento" :value="__('Fecha de nacimiento')" />
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="mt-1 block w-full" value="{{ old('fecha_nacimiento', date('Y-m-d',$user->fecha_nacimiento)) }}" required autofocus autocomplete="fecha_nacimiento" />
            <x-input-error class="mt-2" :messages="$errors->get('fecha_nacimiento')" />
        </div>



        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated-general')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
