function checkTable(){
	var start = $('#start').val();
	var end = $('#end').val();
	if(!start || !end){
		return alert("Please enter both the dates");
	}
	var startDate = new Date(start);
	var endDate = new Date(end);
	var entryTime = [];
	$('.sorting_1').each(function(index, obj) {
		entryTime.push(new Date(obj.innerHTML));
		$('#'+ ++index +'x').show();
	});

	entryTime.forEach(function(date, index){
		if(date > startDate && date <endDate){
			$('#'+ ++index +'x').hide();
		}
	});

	console.log(entryTime);

}