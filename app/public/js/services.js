app.factory('Notes', function($http){
	var notes = {};

	notes.save = function  (note) {
		return $http({
			method:"POST",
			url:'/notes/store',
			data:{note: note}
		});
	}

	return notes;
});

app.factory('Subject', function  ($http) {
	var subject= {} ;

	return subject;
})

app.factory('User', function  ($http) {
	var user= {} ;

	return user;
})

app.factory("Toast", function () {
	
	toastr.options = {
		"positionClass": "toast-top-right",
		"showDuration": "400",
		"onClick": function () {
			toastr.hideToast()
		}

	}

	return toastr;
});
