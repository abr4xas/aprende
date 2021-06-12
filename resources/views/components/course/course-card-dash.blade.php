<div>
	<div class="max-w-lg w-full rounded-lg shadow-lg">
		<a href="{{ $item->url->show }}" class="block w-full bg-center bg-cover h-96"
			style="background-image:url('{{ $item->image }}')">
		</a>
		<div class="p-4">
			<h3 class="font-semibold text-gray-700 tracking-wide text-xl h-20">
				<a href="{{ $item->url->show }}">
					{{ $item->name }}
				</a>
			</h3>
			<div class="flex justify-between mt-3">

				<a href="#0"
					class="uppercase font-semibold tracking-wide bg-blue-100 text-blue-700 px-4 py-2 rounded-lg mt-2 focus:outline-none hover:bg-blue-200">
					Access
				</a>
				<a href="{{
					route('course.show', [
						'course' => $item,
						'unsubscribe' => true
					])
				}}"
					class="uppercase font-semibold tracking-wide bg-red-100 text-red-700 px-4 py-2 rounded-lg mt-2 focus:outline-none hover:bg-red-200">
					Unsubscribe
				</a>
			</div>
		</div>
	</div>
</div>
