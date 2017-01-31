@extends('layouts.app')
@section('content')
	<div class="row">

		<!-- Customer's details -->
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Customer's details</h3>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tbody>
							<tr>
								<td><strong>Name</strong></td>
								<td>{{ $customer->name }}</td>
							</tr>
							<tr>
								<td><strong>E-Mail</strong></td>
								<td>{{ $customer->email }}</td>
							</tr>
							<tr>
								<td><strong>Telephone</strong></td>
								<td>{{ $customer->telephone }}</td>
							</tr>
							<tr>
								<td><strong>Contact person</strong></td>
								<td>{{ $customer->contact_person }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- Related projects -->
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Related projects</h3>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info">
								<th>Name</th>
								<th>Created at</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($customer->projects as $project)
								<tr>
									<td>{{ link_to_action('ProjectController@show', $project->name, $project->id) }}</td>
									<td>{{ $project->created_at->format('d.m.Y H:i:s') }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
