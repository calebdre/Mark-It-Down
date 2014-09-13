app.controller('NotesController', function  ($scope, Notes, Toast) {

	editor = ace.edit(angular.element('#editor').attr('id'));
	editor.getSession().setMode('ace/mode/markdown');
	editor.setTheme('ace/theme/idle_fingers')
	editor.renderer.setShowGutter(false); 	

	editor.on('change', function  (e) {
		$scope.output = markdown.toHTML(editor.getValue());
		$scope.$apply();
	});

	$scope.saveNote = function  () {
		Notes.save($scope.output).then(function  (data) {
			if(data.data.success == true )
				Toast.success('Note saved successfully')
		});
	}

	$scope.scrapNote = function  () {
		editor.setValue("");
	}
});

app.controller('NotesManagerController', function  ($scope, Notes, Subject, User) {
	
});