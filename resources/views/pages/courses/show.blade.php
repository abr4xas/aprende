<x-layouts.landing>
	{{-- <x-landing.hero /> --}}
	{{-- <x-landing.other-hero /> --}}
	<section class="relative w-full bg-white">
		<div class="relative w-full py-10 mx-auto sm:py-12 md:py-16 container max-w-7xl">
			<article class=" px-4">
				<div class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110 bg-blue-100 mb-12"
		style="background-image:url('{{ $course->image }}')"></div>
				<h1 class="text-5xl font-bold text-center mb-8 font-heading">
					{{ $course->name }}
				</h1>
				<div class="max-w-3xl mx-auto">
					<p class="mb-4">We offer a dependable and quick supply of copy paper suited to all kinds of
						printers. Each of
						our various products is designed to provide the finest performance and meet international
						standards.</p>
					<p class="mb-4">We’re dedicated to ensure the highest level of customer satisfaction based on
						long-term
						professional relationships. By creating the positive working environment we’re enabling our
						employees to
						significantly improve not only their productivity, but what’s more important – job satisfaction.
					</p>
					<ul class="mb-4 list-inside list-disc">
						<li>High durability</li>
						<li>Value-based price</li>
						<li>Perfect performance on copy machines</li>
						<li>Long lasting whiteness</li>
					</ul>
					<p class="mb-10">We deliver our services with passion and dedication unmatched by other so called
						“big players”.
						We create a friendly environment for our workers and that’s what makes their dedication soar to
						the maximum.
						You are getting not only the best possible product, but also our love for paper (completely free
						of charge).
					</p>
					<blockquote class="text-center mb-10">
						<p class="text-lg font-semibold mb-2">"I would say I kind of have an unfair advantage, because I
							watch
							reality dating shows like a hawk, and I learn. I absorb information from the strategies of
							the winners
							and the losers. Actually, I probably learn more from the losers."</p>
						<footer class="text-gray-400">Michael Scott</footer>
					</blockquote>
					<p>Because the real business is done on paper.</p>
				</div>
			</article>
		</div>
	</section>

	@if ($showCta)
	<x-landing.cta>
		<x-slot name="title">
			Subscribe to this course ¡NOW!
		</x-slot>
		<x-slot name="route">
			{{
					route('course.show', [
						'course' => $course,
						'subscribe' => true
					])
				}}
		</x-slot>
		<x-slot name="btnText">
			SUBSCRIBE HERE
		</x-slot>
	</x-landing.cta>
	@else
	<x-landing.cta>
		<x-slot name="title">
			Register to get access to this course and many others
		</x-slot>
		<x-slot name="route">
			{{ route('register') }}
		</x-slot>
		<x-slot name="btnText">
			REGISTER NOW!!
		</x-slot>
	</x-landing.cta>
	@endif





</x-layouts.landing>
