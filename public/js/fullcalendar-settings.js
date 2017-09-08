	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: '2017-09-05', //yyyy - mm - dd
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: '[07:00] Love Feast',
					start: '2017-09-05'
				},
				{
					title: '[10:00] Jehovah Jireh',
					start: '2017-10-02'
				},
				
			]
		});
		
	});
