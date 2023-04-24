// Helper function to display thousands in K format
const formatThousands = (value) => Intl.NumberFormat('en-US', {
  maximumSignificantDigits: 3,
  notation: 'compact',
}).format(value);

// Define Chart.js default settings
Chart.defaults.font.family = '"Inter", sans-serif';
Chart.defaults.font.weight = '500';
Chart.defaults.color = 'rgb(148, 163, 184)';
Chart.defaults.scale.grid.color = 'rgb(241, 245, 249)';
Chart.defaults.plugins.tooltip.titleColor = 'rgb(30, 41, 59)';
Chart.defaults.plugins.tooltip.bodyColor = 'rgb(30, 41, 59)';
Chart.defaults.plugins.tooltip.backgroundColor = '#FFF';
Chart.defaults.plugins.tooltip.borderWidth = 1;
Chart.defaults.plugins.tooltip.borderColor = 'rgb(226, 232, 240)';
Chart.defaults.plugins.tooltip.displayColors = false;
Chart.defaults.plugins.tooltip.mode = 'nearest';
Chart.defaults.plugins.tooltip.intersect = false;
Chart.defaults.plugins.tooltip.position = 'nearest';
Chart.defaults.plugins.tooltip.caretSize = 0;
Chart.defaults.plugins.tooltip.caretPadding = 20;
Chart.defaults.plugins.tooltip.cornerRadius = 4;
Chart.defaults.plugins.tooltip.padding = 8;

// A chart built with Chart.js 3
// https://www.chartjs.org/
const ctx = document.getElementById('analytics-card-01');
const chart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [
      '12-01-2020', '01-01-2021', '02-01-2021',
      '03-01-2021', '04-01-2021', '05-01-2021',
      '06-01-2021', '07-01-2021', '08-01-2021',
    ],
    datasets: [
      // Indigo line
      {
        label: 'Current',
        data: [
          20, 24, 25, 22, 21, 24, 25,
          20, 26,
        ],
        fill: true,
        backgroundColor: 'rgba(59, 130, 246, 0.08)',
        borderColor: 'rgb(99, 102, 241)',
        borderWidth: 2,
        tension: 0,
        pointRadius: 0,
        pointHoverRadius: 3,
        pointBackgroundColor: 'rgb(99, 102, 241)',
      },
      // Gray line
      {
        label: 'Previous',
        data: [
          
        ],
        borderColor: 'rgb(203, 213, 225)',
        fill: false,
        borderWidth: 2,
        tension: 0,
        pointRadius: 0,
        pointHoverRadius: 3,
        pointBackgroundColor: 'rgb(203, 213, 225)',
      },
    ],
  },
  options: {
    layout: {
      padding: 20,
    },
    scales: {
      y: {
        beginAtZero: true,
        grid: {
          drawBorder: false,
        },
        ticks: {
          callback: (value) => formatThousands(value),
        },
      },
      x: {
        type: 'time',
        time: {
          parser: 'MM-DD-YYYY',
          unit: 'month',
          displayFormats: {
            month: 'MMM YY',
          },
        },
        grid: {
          display: false,
          drawBorder: false,
        },
        ticks: {
          autoSkipPadding: 48,
          maxRotation: 0,
        },
      },
    },
    plugins: {
      legend: {
        display: false,
      },
      tooltip: {
        callbacks: {
          title: () => false, // Disable tooltip title
          label: (context) => formatThousands(context.parsed.y),
        },
      },
    },
    interaction: {
      intersect: false,
      mode: 'nearest',
    },
    maintainAspectRatio: false,
  },
});
const chart1 = new Chart(document.getElementById("myChart"), {
  type: "line",
  data: {
      labels: ["14/4", "15/4", "16/4", "17/4", "18/4", "19/4", "20/4", "21/4", "22/4", "23/4", "24/4"],
      datasets: [
          {
              label: "Đúng giờ",
              borderColor: "#1d0eed",
              data: [, 0, 0, , 0, 0, 0, , 0, 0, , 1],
              fill: false,
              pointBackgroundColor: "#1d0eed",
              borderWidth: "3",
              pointBorderWidth: "4",
              pointHoverRadius: "6",
              pointHoverBorderWidth: "8",
              pointHoverBorderColor: "rgb(74,85,104,0.2)",
          },
          {
            label: "Sớm",
            borderColor: "#4efc03",
            data: [1, 0, 0, , , 0, 0, 1, 0, 0, , ],
            fill: false,
            pointBackgroundColor: "#4efc03",
            borderWidth: "3",
            pointBorderWidth: "4",
            pointHoverRadius: "6",
            pointHoverBorderWidth: "8",
            pointHoverBorderColor: "rgb(171,247,177,0.2)",
          },
          {
            label: "Muộn",
            borderColor: "#ed0e0e",
            data: [, 0, 0, -1, 0, 0, 0, , 0, 0,   , ],
            fill: false,
            pointBackgroundColor: "#ed0e0e",
            borderWidth: "3",
            pointBorderWidth: "4",
            pointHoverRadius: "6",
            pointHoverBorderWidth: "8",
            pointHoverBorderColor: "rgb(74,85,104,0.2)",
          },
      ],
  },
  options: {
      legend: {
          position: false,
      },
      scales: {
          yAxes: [
              {
                  gridLines: {
                      display: false,
                  },
                  display: false,
              },
          ],
      },
  },
});
