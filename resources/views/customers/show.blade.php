@extends('layouts.app')
@section('content')

<h3>Details form {{ $customer->name }}</h3>

<div class="row">
	<div class="col-sm-2 col-md-3">
		<div class="list-group">
			<a href="#overview" class="list-group-item active" data-toggle="tab">Overview</a>
			<a href="#projects" class="list-group-item" data-toggle="tab">Projects</a>
			<a href="#contacts"class="list-group-item"data-toggle="tab">Contacts</a>
		</div>
	</div>
	<div class="col-sm-10 col-md-9">
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="overview">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Overview</h3>
					</div>
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr class="info">
									<th>Name</th>
									<th>Website</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{ $customer->name }}</td>
									<td>{{ link_to($customer->website, $customer->website, ['target' => '_blank']) }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="projects">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Projects</h3>
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
			<div role="tabpanel" class="tab-pane" id="contacts">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Contacts</h3>
					</div>
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr class="info">
									<th>First name</th>
									<th>Last name</th>
									<th>Created at</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($customer->contacts as $contact)
									<tr>
										<td>{{ $contact->first_name }}</td>
										<td>{{ $contact->last_name }}</td>
										<td>{{ $contact->created_at->format('d.m.Y H:i:s') }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




@endsection
