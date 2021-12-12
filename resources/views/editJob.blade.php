<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nova Obra') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 mx-auto bg-white border-b border-gray-200">
                    <form method="POST" action="/editJob/{{$job->id}}" enctype="multipart/form-data" class="flex flex-col md:flex-row justify-center">
                        @csrf
                        <div>
                            <div class="flex flex-col">
                                <label for="name">Nome</label>
                                <input id="name" name="name" value="{{$job->name}}" type="text" class="form-input">
                                @error('name')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                    <strong class="font-bold">Nome</strong>
                                    <span class="block sm:inline">é obrigatório.</span>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                    </span>
                                </div>
                                @enderror
                            </div>
                            <div class="flex flex-col py-2">
                                <label for="description">Descrição</label>
                                <textarea id="description" name="description" class="form-textarea">{{$job->description}}</textarea>
                                @error('description')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                    <strong class="font-bold">Descrição</strong>
                                    <span class="block sm:inline">é obrigatório.</span>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                    </span>
                                </div>
                                @enderror
                            </div>
                            <div>
                            <img src="{{ "/media/job/$job->id" }}" alt="{{$job->description}}" class="py-2 w-full h-full object-center object-cover group-hover:opacity-75">
                            </div>
                            <div class="py-2">
                            <label for="job">Trocar Obra</label>
                            <input id="job" name="job" type="file" class="form-input">
                            @error('job')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                    <strong class="font-bold">Uma obra</strong>
                                    <span class="block sm:inline">é obrigatório.</span>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                    </span>
                                </div>
                            @enderror
                        </div>
                                     
                        <div class="flex flex-col justify-end ">
                            <div class="flex ">
                                <a href="/deleteJob/{{$job->id}}" class="bg-red-500 group relative flex py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" >
                                    Apagar
                                </a>
                                <button class="group relative flex  py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit">
                                    Salvar
                                </button>
                            </div>
                        </div>
                     </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
