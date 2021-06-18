// Set new default font family and font color to mimic Bootstrap's default styling
window.onload = function () {
  // Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  // Chart.defaults.global.defaultFontColor = '#858796';
  // Chart.helpers.merge(Chart.defaults.global.plugins.datalabels, {
  //   color: '#FE777B'
  // });

  // Chart.defaults.cutOutPie = Chart.helpers.clone(Chart.defaults.pie);

  // Chart.controllers.cutOutPie = Chart.controllers.pie.extend({
  //   updateElement: function (arc, index, reset) {
  //     Chart.controllers.pie.prototype.updateElement.call(this, arc, index, reset);
  //     var displacement = this.getDataset().displacements[index] || 0;
  //     var model = arc._model;
  //     var angle = model.startAngle + model.circumference / 2;
  //     model.x += Math.cos(angle) * displacement;
  //     model.y += Math.sin(angle) * displacement;
  //   }
  // });

  const data = {
    labels: ["Direct", "Referral", "Social"],
    datasets: [{
      data: [85, 15],
      // displacements: [0, 0, 20],
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
          font: {
            family: 'Gotham',
            size: 20,
            weight: 'bold'
          },
          formatter: function (value, context) {
            return Math.round(value) + '%';
          }
        },
      },
    },
  };
  var chartBox = document.getElementById('myChart');
  if (chartBox) {
    var myChart = new Chart(chartBox,
      config
    );
  }
}