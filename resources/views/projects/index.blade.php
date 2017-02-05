@extends('layouts.app')
@section('content')
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="info">
					<th width="10"></th>
					<th>Name</th>
					<th>Customer</th>
					<th class="action-column">
						<i class="fa fa-cog fa-spin" aria-hidden="true"></i>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($projects as $project)
					<tr>
						<td>
							@if ($project->time->isEmpty())
								{{ link_to_action('TimeController@start', 'Start', $project->id, ['class' => 'btn btn-success btn-xs']) }}
							@else
								{{ link_to_action('TimeController@stop', 'Stop', $project->time->first()->id, ['class' => 'btn btn-danger btn-xs']) }}
							@endif
						</td>
						<td>{{ $project->name }}</td>
						<td>{{ link_to_action('CustomerController@show', $project->customer->name, $project->customer->id) }}</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-cog fa-spin" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu pull-right">
									<li>{{ link_to_action('ProjectController@show', 'Details', $project->id) }}</li>
									<li>{{ link_to_action('ProjectController@edit', 'Edit', $project->id) }}</li>
									<li>{{ link_to_action('ProjectController@delete', 'Delete', $project->id) }}</li>
								</ul>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	@{{ $projects->links() }}
@endsection
