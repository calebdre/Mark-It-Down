app.directive('fullHeight', function  () {
	return{
		restrict:"A",
		link:function  (scope, elem) {
			elem.css('height', window.innerHeight + "px");
		}
	}
});

app.directive('opaqueOnHover', function  () {
	return{
		restrict:"A",
		link:function  (scope, elem) {
			elem.on('mouseenter', function (e) {
				elem.css({
					opacity: '1'
				});
			});

			elem.on('mouseleave', function  (e) {
				elem.css({
					opacity: '.4'
				});
			});
		}
	}
});

app.directive('toolTip', function  () {
	return{
		restrict:"A",
		link: function  (scope, elem, attr) {
			$(elem).tipr({'mode':'top'});
		}
	}
});