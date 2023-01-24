@component('layouts.app')
    <section class="bg-img pt-130 pb-150" data-overlay="7" style="background-image: url(assets/images/front-end-img/background/bg-9.jpg); background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="py-12">
                        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">

                                    <div class="mt-1 mb-4">
                                        <div class="relative max-w-xs">

                                        </div>

                                    </div>
                                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    #
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Name
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Email
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($cursos as $curso)
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                        {{$curso->id_curso}}
                                                    </th>
                                                    <td class="px-6 py-4">
                                                        {{$curso->nombre}}

                                                    </td>
                                                    <td class="px-6 py-4">
                                                        {{$curso->descriptions}}

                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $cursos->links() }}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
@endcomponent
