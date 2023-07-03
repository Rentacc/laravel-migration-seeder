@extends('layouts.app')

@section('title', 'Home')

@section('content')
	<h1>Treni in partenza oggi</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Azienda</th>
				<th>Stazione di partenza</th>
				<th>Stazione di arrivo</th>
				<th>Orario di partenza</th>
				<th>Orario di arrivo</th>
				<th>Codice Treno</th>
				<th>Numero Carrozze</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($trains as $train)
				<tr>
					<td>{{ $train->company }}</td>
					<td>{{ $train->departure_station }}</td>
					<td>{{ $train->arrival_station }}</td>
					<td>{{ $train->departure_time->format('H:i') }}</td>
					<td>{{ $train->arrival_time->format('H:i') }}</td>
					<td>{{ $train->train_code }}</td>
					<td>{{ $train->number_of_cars }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection


