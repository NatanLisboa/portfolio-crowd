<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Obras de {{$nickname}}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $user['bio'] }} <br>
                    E-mail: {{ $user['email'] }}
                </div>
                <div>
                    <div>
                        <div>
                            @foreach($jobs as $job)
                                <div>
                                    <img style="height: 200px" src="{{ "/media/job/$job->id" }}" alt="{{$job->description}}">
                                </div>
                                <h3>
                                    {{ $job->name }}
                                </h3>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
