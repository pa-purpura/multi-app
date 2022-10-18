<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if (tenant('id') == 'aqua')
                AQUA Consulting S.r.L.
            @else
                Nilos S.r.L.
            @endif
            {{-- {{ __('Dashboard') }} --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <button type="button" class="btn btn-primary">Crea nuova</button>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Modello</th>
                                    <th scope="col">Anno</th>
                                    <th scope="col" colspan="2">Azioni</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td><button type="button" class="btn btn-info">modifica</button></td>
                                    <td><button type="button" class="btn btn-danger">elimina</button></td>
                                </tr>
                                
                                
                                </tbody>
                            </table>

                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
