const ctxOne = document.getElementById("myChartOne");
new Chart(ctxOne, {
  type: "bar",
  data: {
    labels: [
      "Jan",
      "Feb",
      "March",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
    datasets: [
      {
        label: "Max Suhu",
        data: [12, 19, 3, 5, 2, 3, 19, 3, 5, 2, 3, 8],
        borderWidth: 1,
        backgroundColor: "#4770D9",
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
    maintainAspectRatio: false, // Allow the chart to not maintain its aspect ratio
  },
});

const ctxTwo = document.getElementById("myChartTwo");
new Chart(ctxTwo, {
  type: "line",
  data: {
    labels: [
      "Jan",
      "Feb",
      "March",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
    datasets: [
      {
        label: "Water Clarity",
        data: [70, 65, 54, 33, 78, 98, 55, 42, 81, 69, 59, 80],
        borderWidth: 3,
        backgroundColor: "#4770D9",
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
    maintainAspectRatio: false, // Allow the chart to not maintain its aspect ratio
  },
});

const ctxThree = document.getElementById("myChartThree");
new Chart(ctxThree, {
  type: "bar",
  data: {
    labels: [
      "Jan",
      "Feb",
      "March",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
    datasets: [
      {
        label: "Water Level",
        data: [70, 65, 54, 33, 78, 98, 55, 42, 81, 69, 59, 80],
        borderWidth: 3,
        backgroundColor: "#4770D9",
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
    maintainAspectRatio: false, // Allow the chart to not maintain its aspect ratio
  },
});
