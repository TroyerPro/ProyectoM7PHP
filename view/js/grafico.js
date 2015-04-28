
  var num1=Math.floor((Math.random() * 100) + 1);
  var num2=Math.floor((Math.random() * 50) + 1);
  var num3=Math.floor((Math.random() * 200) + 1);
  var num4=Math.floor((Math.random() * 90) + 1);
  var num5=Math.floor((Math.random() * 80) + 1);

		var pieData = [
				{
					value: num1,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Obra1"
				},
				{
					value: num2,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Obra2"
				},
				{
					value: num3,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Obra3"
				},
				{
					value: num4,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Obra4"
				},
				{
					value: num5,
					color: "#4D5360",
					highlight: "#616774",
					label: "Obra5"
				}

			];

			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myPie = new Chart(ctx).Pie(pieData);
			};
