<x-layouts.landing>
	<x-landing.hero />
	{{-- <x-landing.other-hero /> --}}
	<section class="relative w-full bg-white">
		<div class="relative w-full py-10 mx-auto sm:py-12 md:py-16 container max-w-7xl">
			<h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900 lg:text-5xl xl:text-6xl sm:mb-3"><a
					href="#0">Our latest courses</a></h1>
			<div class="grid h-full grid-cols-12 gap-10 pb-10 mt-8 sm:mt-16">
				@forelse ($courses as $item)
				<div
					class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4">
					<a href="#0"
						class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110 bg-blue-100"
						style="background-image:url('{{ $item->image }}')">
					</a>
					<div
						class="relative z-20 w-full h-auto py-8 text-white bg-blue-400 border-t-0 border-yellow-200 px-7">
						<a href="#0"
							class="inline-block text-lg font-semibold absolute top-0 -mt-5 rounded-full px-4 py-2 uppercase text-blue-500 bg-white">
							{{
								$item->price
							}} $
						</a>
						<h2 class="mb-5 text-5xl font-bold">
							<a href="#0">
							{{ $item->name }}
							</a>
						</h2>
						<div class="mt-10 flex justify-between items-center">
							<div>
								{{-- <a href="#0"
									class="inline-block text-xs font-semibold top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-blue-500 bg-white">Lifestyle8</a> --}}
							</div>
							<a href="#0" class="flex items-center">
								<p class="mr-4">Read more</p>
								<svg xmlns="http://www.w3.org/2000/svg" width="14.125" height="13.358"
									viewBox="0 0 14.125 13.358">
									<g transform="translate(-3 -3.293)">
										<path id="Path_7" data-name="Path 7"
											d="M14.189,10.739H3V9.2H14.189L9.361,4.378l1.085-1.085,6.679,6.679-6.679,6.679L9.361,15.566Z"
											fill="#1d1d1d" fill-rule="evenodd"></path>
									</g>
								</svg>
							</a>
						</div>
					</div>
				</div>
				@empty

				@endforelse
			</div><div class="mt-8">
				{{ $courses->withQueryString()->links('vendor.pagination.tailwind') }}
			</div>
		</div>

	</section>
	{{-- <x-landing.cta /> --}}
</x-layouts.landing>
