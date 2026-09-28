@props(['type' => 'success'])

<div @class([
	'mb-6 rounded-lg border px-4 py-3 text-sm font-medium',
	'border-blue-300 bg-blue-50 text-blue-900' => $type === 'info' && request()->query('mode') !== 'dark',
	'border-blue-800 bg-blue-950 text-blue-100' => $type === 'info' && request()->query('mode') === 'dark',
	'border-emerald-300 bg-emerald-50 text-emerald-900' => $type === 'success' && request()->query('mode') !== 'dark',
	'border-emerald-800 bg-emerald-950 text-emerald-100' => $type === 'success' && request()->query('mode') === 'dark',
	'border-rose-300 bg-rose-50 text-rose-900' => $type === 'error' && request()->query('mode') !== 'dark',
	'border-rose-800 bg-rose-950 text-rose-100' => $type === 'error' && request()->query('mode') === 'dark',
]) role="status">
	{{ $slot }}
</div>
