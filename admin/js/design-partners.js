function showProjects(ele) {
	console.log("this is the data->", ele);
	var userId=$(ele).closest("tr").data("user");
	var target=$("#projectModal");
	var tmpTarget=target.find("table tbody").empty();
	if(projects && projects[userId]) {
		$.each(projects[userId],function(i,info) {
			var link='';
			if($.trim(info['projectPortFolio'])!='' && info['projectPortFolio']) {
				var link=['<a href=',info['projectPortFolio'],' target="_blank">Check Portfolio</a>'].join("");
			}
			tmpTarget.append([
				'<tr>',
				'<td>',info['projectName'],'</td>',
				'<td>',info['projectArea'],'</td>',
				'<td>',info['projectHighLight'],'</td>',
				'<td>',info['projectDesc'],'</td>',
				'<td>',link,'</td>',
				'<td>',info['projectLinkedin'],'</td>',
				'</tr>'
			].join(""))
		});
	}
	target.modal("show");
}