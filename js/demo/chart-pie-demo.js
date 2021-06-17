// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';
Chart.helpers.merge(Chart.defaults.global.plugins.datalabels, {
  color: '#FE777B'
});

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Direct", "Referral", "Social"],
    datasets: [{
      data: [55, 30, 15],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

const data = {
  labels: ["Direct", "Referral", "Social"],
  datasets: [{
    data: [12, 19, 5],
    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
    hoverBorderColor: "rgba(234, 236, 244, 1)",
  }],
};

const config = {
  type: 'pie',
  data: data,
  options: {
    // circumference: 2 * Math.PI,
    // rotation: -0.8 * Math.PI,
    animation: {
      // animateRotate: true,
      animateScale: true
    },
    legend: {
      position: 'bottom',
      labels: {
        // fontColor: "white",
        boxWidth: 20,
        padding: 10
      }
    },
    // responsive: true,
    maintainAspectRatio: false,
    // scales: {
    //     yAxes: [{
    //         ticks: {
    //             beginAtZero: true
    //         }
    //     }]
    // },
    plugins: {
      // datalabels: {
      //   // backgroundColor: function (context) {
      //   //   return context.dataset.backgroundColor;
      //   // },
      //   borderColor: 'white',
      //   borderRadius: 25,
      //   borderWidth: 25,
      //   color: 'white',
      //   display: function (context) {
      //     var dataset = context.dataset;
      //     var count = dataset.data.length;
      //     var value = dataset.data[context.dataIndex];
      //     return value > count * 1.5;
      //   },
      //   font: {
      //     weight: 'bold'
      //   },
      //   padding: 6,
      //   formatter: Math.round
      // },
      datalabels: {
        render: 'percentage',
        position: 'border',
        precision: 1,
        showZero: true,
        fontSize: 15,
        fontColor: '#FFF',
        fontStyle: 'bold',
        fontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
        showActualPercentages: true,
      },
    },
  },
};

var myChart = new Chart(
  document.getElementById('myChart'),
  config
);