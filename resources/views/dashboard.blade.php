<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


			@if ($show)
			    <h2 class="font-semibold text-3xl text-gray-800 leading-tight mb-6 ">
					{{ __('My courses') }}
				</h2>
				<hr class="border-gray-300 border-b-2 mb-8" />
				<div class="grid grid-cols-3 gap-4">
					@foreach ($subscriptions as $item)
						<x-course.course-card-dash :item="$item->subscribable" />
					@endforeach
				</div>
			@else
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
					Please subscribe to courses <a href="{{ route('courses.home') }}" class="underline">here</a>.
                </div>
            </div>
			@endif
        </div>
    </div>
</x-app-layout>
