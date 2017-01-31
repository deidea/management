@extends('layouts.app')
@section('content')
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="info">
					<th>Name</th>
					<th>E-Mail</th>
					<th>Telephone</th>
					<th>Contact person</th>
					<th>Projects</th>
					<th class="action-column">
						<i class="fa fa-cog fa-spin" aria-hidden="true"></i>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($customers as $customer)
					<tr>
						<td>{{ $customer->name }}</td>
						<td>{{ $customer->email }}</td>
						<td>{{ $customer->telephone }}</td>
						<td>{{ $customer->contact_person }}</td>
						<td>
							{{ $customer->projects->count() }}
							{{ str_plural('Project', $customer->projects->count()) }}
						</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-cog fa-spin" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu pull-right">
									<li>{{ link_to_action('CustomerController@show', 'Details', $customer->id) }}</li>
									<li>{{ link_to_action('CustomerController@edit', 'Edit', $customer->id) }}</li>
									<li>{{ link_to_action('CustomerController@delete', 'Delete', $customer->id) }}</li>
								</ul>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	{{ $customers->links() }}
@endsection
