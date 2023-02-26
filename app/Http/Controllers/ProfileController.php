<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateAcademicoRequest;
use App\Http\Requests\ProfileUpdateGeneralRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\County;
use App\Models\DepMun;
use App\Models\Discapacidad;
use App\Models\EstadoCivil;
use App\Models\NivelAcademico;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $countries = County::all();
        $dep_mun = DepMun::all();
        $estado_civil = EstadoCivil::all();
        $sexo = ['M', 'F'];
        $area = ['Urbano', 'Rural'];
        $nivel = NivelAcademico::all();
        $discapacidades = Discapacidad::all();

        return view('profile.edit', [
            'user' => $request->user(), 'countries' => $countries,
            'dep_mun'=>$dep_mun,
            'estado_civil'=>$estado_civil,
            'sexo' => $sexo,
            'area' => $area,
            'nivel' => $nivel,
            'discapacidades' => $discapacidades
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->fecha_nacimiento = strtotime($request->user()->fecha_nacimiento);
        $tabIndex = $request->get('active_tab', 0); // 0 es el índice de la primera pestaña por defecto
        session(['activeTab' => $tabIndex]);
        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function updateGeneral(ProfileUpdateGeneralRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        $request->user()->save();
        $tabIndex = $request->get('active_tab', 0); // 0 es el índice de la primera pestaña por defecto

        session(['activeTab' => $tabIndex]);
        return back()->with('status', 'profile-updated-general');
        //return Redirect::route('profile.edit')->with('status', 'profile-updated-general');
    }

    public function updateAcademico(ProfileUpdateAcademicoRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        $request->user()->save();
        $tabIndex = $request->get('active_tab', 0); // 0 es el índice de la primera pestaña por defecto

        session(['activeTab' => $tabIndex]);
        return back()->with('status', 'profile-updated-academico');
        //return Redirect::route('profile.edit')->with('status', 'profile-updated-general');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
