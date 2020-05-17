$(function($){
	$("#weather").click(function(){
		var city = $("#text").val();
		var key = "27c122470871f6daabe5927910f6da88";
		$.ajax({
			url: 'http://api.openweathermap.org/data/2.5/weather',
			dataType: 'json',
			type: 'GET',
			data: {q: city, appid: key, units: 'metric'},

			success: function(data){
				var x = '';
				$.each(data.weather, function(index, val){
					x += '<p><b>' + data.name + "</b><img src=images/" + val.icon + ".png></p>" + data.main.temp
					+ '&deg;C' + ' | ' + val.main + ", " + val.description;
				});
				$("#show_weather").html(x);
			}
		});
	});
});