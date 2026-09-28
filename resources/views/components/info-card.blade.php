@props(['title', 'description' => null])

<section @class([
	'overflow-hidden rounded-lg border shadow-sm',
	'border-slate-700 bg-slate-900' => request()->query('mode') === 'dark',
	'border-slate-200 bg-white' => request()->query('mode') !== 'dark',
])>
	<div class="border-b {{ request()->query('mode') === 'dark' ? 'border-slate-700' : 'border-slate-200' }} px-6 py-5">
		<h2 class="text-lg font-semibold {{ request()->query('mode') === 'dark' ? 'text-white' : 'text-slate-950' }}">{{ $title }}</h2>
		@if ($description)
			<p class="mt-1 text-sm {{ request()->query('mode') === 'dark' ? 'text-slate-400' : 'text-slate-600' }}">{{ $description }}</p>
		@endif
	</div>
	<div class="px-6">
		{{ $slot }}
	</div>
</section>
