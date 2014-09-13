@extends('layout')

@section('content')
	<div class="subjects-container container-fluid" ng-controller="NotesManagerController">
		<div class="row">
			<!-- Subject -->
			<div class="panel panel-primary col-md-4">
				<div class="list-group">
					<a href="#" class="list-group-item"></a>
				</div>
			</div>
			
			<!-- Notes by subject w/ date modified -->
			<div class="panel panel-primary col-md-4">
				<div class="list-group">
					<a href="#" class="list-group-item"></a>
				</div>
			</div>
			
			<!-- Help messages & options -->
			<div class="panel panel-primary col-md-4">
				<p>Help messages</p>
				
			</div>
		</div>
	</div>
@stop