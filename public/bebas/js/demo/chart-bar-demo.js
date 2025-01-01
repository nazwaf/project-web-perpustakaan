// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    // Tetap gunakan bulan sebagai label sumbu-X
    labels: ["January", "February", "March", "April", "May", "June"],
    datasets: [
      {
        label: "Fiksi",
        backgroundColor: "#4e73df",
        hoverBackgroundColor: "#2e59d9",
        borderColor: "#4e73df",
        data: [4000, 2000, 5000, 3000, 4500, 8000], // Data untuk Fiksi
      },
      {
        label: "Non-Fiksi",
        backgroundColor: "#1cc88a",
        hoverBackgroundColor: "#17a673",
        borderColor: "#1cc88a",
        data: [2000, 4000, 1000, 3000, 800, 4000], // Data untuk Non-Fiksi
      },
      {
        label: "Sejarah",
        backgroundColor: "#36b9cc",
        hoverBackgroundColor: "#2c9faf",
        borderColor: "#36b9cc",
        data: [1500, 200, 300, 4000, 2000, 700], // Data untuk Sejarah
      },
      {
        label: "Ensiklopedia",
        backgroundColor: "#f6c23e",
        hoverBackgroundColor: "#f4b400",
        borderColor: "#f6c23e",
        data: [1000, 2500, 4400, 6000, 5000, 6000], // Data untuk Ensiklopedia
      },
      {
        label: "Anak-Anak",
        backgroundColor: "#e74a3b",
        hoverBackgroundColor: "#e02d1b",
        borderColor: "#e74a3b",
        data: [800, 1200, 1600, 2000, 2400, 2800], // Data untuk Anak-Anak
      },
      {
        label: "Lainnya",
        backgroundColor: "#858796",
        hoverBackgroundColor: "#6c757d",
        borderColor: "#858796",
        data: [500, 1000, 2000, 1000, 8000, 3000], // Data untuk Lainnya
      },
    ],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true,
          padding: 10,
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false // Nonaktifkan legenda
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: true,
      caretPadding: 10,
    },
  }
});
