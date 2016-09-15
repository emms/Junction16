$.getJSON('./json/schedule.json',
	function (data) {
		var tr,
		currentDate = false;

		for (var i = 0; i < data.length; i++) {
			// iterate through JSON response and generate table data
			tr = $('<tr/>');
			if (data[i].date) {
				currentDate = data[i].date.split(',')[0];
				generateNewTable(currentDate, data[i].date);
			}
			tr.append("<td>" + data[i].time + "</td>");
			tr.append("<td>" + data[i].general + "</td>");
			tr.append("<td>" + data[i].stage + "</td>");	
			$('.schedule table#'+currentDate+'schedule tbody').append(tr);
		}	

		// generate new table with corresponding table heading, fullFormDate is used for table heading
		function generateNewTable (date, fullFormDate){
			$('.schedule .col-md-offset-2.col-md-8').append('<table id="'+date+'schedule" class="table"></table>');
			$('#'+date+'schedule').before('<h3>'+fullFormDate+'</h3>');
			$('#'+date+'schedule').append('<thead></thead>');
			$('#'+date+'schedule thead').append('<tr><td>Start</td><td>Event</td><td>Location</td></tr>');
			$('#'+date+'schedule').append('<tbody></tbody>');
		}
	}
);