@extends('layouts.app')
@section('content')
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="info">
					<th>Short</th>
					<th>Name</th>
					<th>Homepage</th>
					<th>Projects</th>
					<th>Contacts</th>
					<th class="action-column">
						<i class="fa fa-cog fa-spin" aria-hidden="true"></i>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($customers as $customer)
					<tr>
						<td>{{ $customer->short }}</td>
						<td>{{ $customer->name }}</td>
						<td>{{ link_to($customer->homepage, 'Homepage', ['targer' => '_blank']) }}</td>
						<td>{{ $customer->projects->count() }}</td>
						<td>{{ $customer->contacts->count() }}</td>
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
