<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Información académica') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Actualice la información académica del perfil") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.updateAcademico') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <input type="hidden" name="active_tab" value="2">
{{--{{ $user }}--}}
{{--        <input type="hidden" name="selected_tab" value="pestana2">--}}

        <div>
            <x-input-label for="profesion" :value="__('Profesión u oficio')" />
            <x-text-input id="profesion" name="profesion" type="text" class="mt-1 block w-full" :value="old('profesion', $user->profesion)" required autofocus autocomplete="profesion" />
            <x-input-error class="mt-2" :messages="$errors->get('profesion')" />
        </div>
        <div>
            <x-input-label for="nivel_academico_id" :value="__('Nivel académico')" />
            <select id="nivel_academico_id" name="nivel_academico_id" class="mt-1 block w-full" required>
                <option value="">Seleccione un opción</option>
                @foreach ($nivel as $n)
                    <option value="{{ $n->id }}" {{ $user->nivel_academico_id == $n->id ? 'selected' : '' }}>{{ $n->name }}</option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('nivel_academico_id')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated-academico')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Guardado') }}</p>
            @endif
        </div>
    </form>
</section>
