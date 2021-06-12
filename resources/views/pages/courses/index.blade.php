<x-layouts.landing>
	{{-- <x-landing.hero /> --}}
	{{-- <x-landing.other-hero /> --}}
	<section class="relative w-full bg-white">
		<div class="relative w-full py-10 mx-auto sm:py-12 md:py-16 container max-w-7xl">
			<h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900 lg:text-5xl xl:text-6xl sm:mb-3"><a
					href="#0">Our latest courses</a></h1>
			<div class="grid h-full grid-cols-12 gap-10 pb-10 mt-8 sm:mt-16">
				@forelse ($courses as $item)
				<x-course.course-card :item="$item" />
				@empty
					{{-- @todo --}}
				@endforelse
			</div>
			<div class="mt-8">
				{{ $courses->withQueryString()->links('vendor.pagination.tailwind') }}
			</div>
		</div>
	</section>
	{{-- <x-landing.cta /> --}}
</x-layouts.landing>
