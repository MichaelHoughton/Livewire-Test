@extends('layouts.app')

@section('content')
<table class="table-auto">
	<thead>
		<tr>
			<th class="px-4 py-2">Title</th>
			<th class="px-4 py-2">Price</th>
			<th class="px-4 py-2">Quantity</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($products as $product)
			<tr>
				<td class="border px-4 py-2">{{ $product->title }}</td>
				<td class="border px-4 py-2">{{ $product->price }}</td>
				<td class="border px-4 py-2">{{ $product->quantity }}</td>
			</tr>
		@endforeach
	</tbody>
</table>

{{ $products->links() }}

@endsection
