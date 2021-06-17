// Set new default font family and font color to mimic Bootstrap's default styling
window.onload = function () {
  Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#858796';
  Chart.helpers.merge(Chart.defaults.global.plugins.datalabels, {
    color: '#FE777B'
  });

  // Pie Chart Example
  // var ctx = document.getElementById("myPieChart");
  // var myPieChart = new Chart(ctx, {
  //   type: 'doughnut',
  //   data: {
  //     labels: ["Direct", "Referral", "Social"],
  //     datasets: [{
  //       data: [55, 30, 15],
  //       backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
  //       hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
  //       hoverBorderColor: "rgba(234, 236, 244, 1)",
  //     }],
  //   },
  //   options: {
  //     maintainAspectRatio: false,
  //     tooltips: {
  //       backgroundColor: "rgb(255,255,255)",
  //       bodyFontColor: "#858796",
  //       borderColor: '#dddfeb',
  //       borderWidth: 1,
  //       xPadding: 15,
  //       yPadding: 15,
  //       displayColors: false,
  //       caretPadding: 10,
  //     },
  //     legend: {
  //       display: false
  //     },
  //     cutoutPercentage: 80,
  //   },
  // });

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
      animation: {
        animateScale: true
      },
      legend: {
        position: 'bottom',
        display: true,
        labels: {
          boxWidth: 20,
          padding: 10
        }
      },
      maintainAspectRatio: false,
      plugins: {
        datalabels: {
          color: '#fff',
          display: true,
          // formatter: function (value, ctx) {
          //   return ((value * 100) / total).toFixed(2) + '%';
          // },
        },
      },
    },
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
}