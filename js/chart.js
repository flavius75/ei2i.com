// ------------------- Bar Chart ----------------------

var canvas = document.getElementById('bar_chart');
var data = {
    labels: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet"],
    datasets: [
        {
            label: "Connexions",
            backgroundColor: "rgba(41,105,176,1)",
            borderColor: "rgba(41,105,176,1)",
            borderWidth: 2,
            hoverBackgroundColor: "rgba(41,105,176,1)",
            hoverBorderColor: "rgba(41,105,176,1)",
            data: [65, 59, 37, 81, 56, 55, 40],
        }
    ]
};
var option = {
    responsive: true,
animation: {
				duration:1000,



}

};


var myBarChart = Chart.Bar(canvas,{
	data:data,
  options:option
});

// ------------------- Doughnut Chart ----------------------

var canvas2 = document.getElementById('pie_chart');
var data = {
    labels: [
        "Red",
        "Blue",
        "Yellow"
    ],
    datasets: [
        {
            data: [300, 50, 100],
            backgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ],
            hoverBackgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ]
        }]
};


var options = {
  responsive: true,

animation: {
    animationScale:true,
		duration:1000,


}

};


var myDoughnutChart = new Chart(canvas2, {
    type: 'doughnut',
    data: data,
    options: options
});
