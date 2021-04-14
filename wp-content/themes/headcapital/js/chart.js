var dashboardChartOptions = {
  series: [
    {
      name: "CHỜ DUYỆT",
      data: [44000, 55000, 57000, 56000, 61000, 58000, 63000]
    },
    {
      name: "TẠM DUYỆT",
      data: [76000, 85000, 101000, 98000, 87000, 105000, 91000]
    },
    {
      name: "ĐÃ DUYỆT",
      data: [76000, 85000, 101000, 98000, 87000, 105000, 91000]
    }
  ],
  annotations: {
    texts: [
      {
        text: "112.294021 đ",
        foreColor: "#fff"
      },
      {
        text: "1,000,000 đ",
        foreColor: "#fff"
      },
      {
        text: "2.294021  đ",
        foreColor: "#fff"
      }
    ]
  },
  chart: {
    type: "bar",
    height: 270,
    width: "100%",
    stacked: true,
    toolbar: {
      show: false
    }
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "20%"
      // startingShape: "rounded",
      // endingShape: "rounded"
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: false,
    width: 2,
    colors: ["transparent"]
  },
  xaxis: {
    type: "categories",
    categories: [
      1605894579,
      1605980979,
      1606067379,
      1606153779,
      1606240179,
      1606326579,
      1606412979
    ],
    labels: {
      show: true,
      formatter: function (value, timestamp, opts) {
        let dateObject = new Date(value * 1000)
        let month = dateObject.getMonth() + 1
        let date = dateObject.getDate()
        return date % 2 === 0 ? `${date} Tháng ${month}` : ""
      }
    },
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    }
  },
  fill: {
    opacity: 1
  },
  tooltip: {
    custom: function ({ series, seriesIndex, dataPointIndex, w }) {
      console.log(w)
      return (
        '<div class="arrow_box">' +
        "<div>" +
        moment(w.config.xaxis.categories[dataPointIndex] * 1000).format("D/M") +
        "</div>" +
        `<div class="arrow_box-item">` +
        `<div class="marker" style="background-color: ${w.config.colors[0]}; width: 8px; height: 8px; border-radius: 2px; margin-right: 5px;"></div>` +
        w.config.series[0].name +
        `<strong class="ml-2">` +
        series[0][dataPointIndex] +
        " đ</strong></div>" +
        `<div class="arrow_box-item">` +
        `<div class="marker" style="background-color: ${w.config.colors[1]}; width: 8px; height: 8px; border-radius: 2px; margin-right: 5px;"></div>` +
        w.config.series[1].name +
        `<strong class="ml-2">` +
        series[1][dataPointIndex] +
        " đ</strong></div>" +
        `<div class="arrow_box-item">` +
        `<div class="marker" style="background-color: ${w.config.colors[2]}; width: 8px; height: 8px; border-radius: 2px; margin-right: 5px;"></div>` +
        w.config.series[2].name +
        `<strong class="ml-2">` +
        series[2][dataPointIndex] +
        " đ</strong></div>"
      )
    }
  },
  legend: {
    position: "top",
    horizontalAlign: "left",
    itemMargin: {
      horizontal: 0
    },
    formatter: function (seriesName, opts) {
      console.log(opts)
      return `<span><span class="gry-text">${seriesName}</span><br /><strong class="section-title ml-4">${
        opts.w.config.annotations.texts[opts.seriesIndex].text
      }</strong></span>`
    }
  },
  colors: ["#76A0DE", "#4057A8", "#1166E3"],
  grid: {
    xaxis: {
      lines: {
        show: false
      }
    }
  },
  responsive: [
    {
      breakpoint: 767,
      options: {
        chart: {
          width: 600
        }
      }
    }
  ]
}

var dashboardCampaignChartOptions = {
  series: [445654445654, 368846368846, 123345, 60000, 24500, 10000],
  labels: [
    "Xem quảng cáo",
    "Rút gọn link",
    "Cài app",
    "Cashback",
    "Affiliate",
    "Khác"
  ],
  dataLabels: {
    enabled: false
  },
  chart: {
    type: "donut",
    width: 600
  },
  legend: {
    show: false
  },
  stroke: {
    width: 0.5
  },
  colors: ["#1F8EFA", "#8C54FF", "#E65F57", "#FFC738", "#19BC47", "#B5B8CB"],
  plotOptions: {
    pie: {
      donut: {
        size: "80%",
        labels: {
          show: true,
          name: {
            show: false
          },
          value: {
            show: true,
            fontWeight: "bold",
            fontFamily: "Nunito Sans, sans-serif",
            fontSize: 16,
            formatter: (val, w) => {
              var sum = w.globals.seriesTotals.reduce((a, b) => {
                return a + b
              }, 0)
              var result = Math.floor(val / 1000);
              var percent = (val / sum * 100).toFixed(1);
              return result + `k` + " | " + percent + "%"
            }
          },
          total: {
            show: true,
            showAlways: false,
            label: 'Total',
            fontWeight: "bold",
            fontFamily: "Nunito Sans, sans-serif",
            fontSize: 16,
            formatter: function (w) {
              var sum =  w.globals.seriesTotals.reduce((a, b) => {
                return a + b
              }, 0)
              return `Tổng ${sum}đ`
            }
          }
        }
      }
    }
  },
  legend: {
    position: 'right',
    offsetY: 0,
    width: 350,
    height: undefined,
    formatter: function(seriesName, opts) {
      var sum =  opts.w.globals.seriesTotals.reduce((a, b) => {return a + b}, 0)
      var name = seriesName;
      var price = opts.w.globals.series[opts.seriesIndex];
      var percent = (price / sum * 100).toFixed(1) ;
      
      var layout = `
        <div class="d-inline-flex w-100">
          <p class="col-4 text-nowrap mb-0 fz14">${name}</p>
          <p class="col-3 text-right mb-0 fz12">${percent}%</p>
          <p class="col-5 text-right mb-0 fz12"><strong class="text-nowrap">${price}đ</strong></p>
        </div>`
      return layout;
    }
  },
  dataLabels: {
    enabled: false
  },
  tooltip: {
      enabled: true,
      fillSeriesColor: true,
      style: {
        fontSize: '12px',
        fontFamily: undefined
      },
    custom: function({ series, seriesIndex, dataPointIndex, w }) {
      console.log(w.globals.colors[seriesIndex])
      return (
        '<div>' +
          '<span style="padding: 5px 10px 8px; background-color: ' + w.globals.colors[seriesIndex] + '">' +
          w.globals.labels[seriesIndex] +
          "</span>" +
        "</div>"
      );
      // return w.globals.labels[seriesIndex]
    }
      
  },
  responsive: [
    {
      breakpoint: 768,
      options: {
        chart: {
          width: "100%",
          height: 450
        },
        legend: {
          position: 'bottom',
          width: "100%",
          height: 'auto'
        }
      }
    }
  ]
}

var dashboardIncomeChartOptions = {
  series: [45, 55],
  chart: {
    height: 240,
    type: "radialBar"
  },
  colors: ["#1166e3", "#ffc01e"],
  legend: {
    show: true,
    position: "top",
    horizontalAlign: "center",
    itemMargin: {
      horizontal: 0
    },
    formatter: function (seriesName, opts) {
      console.log(opts)
      return `<span><span class="gry-text">${seriesName}</span><br /><strong class="section-title">${
        opts.w.config.annotations.texts[opts.seriesIndex].text
      }</strong></span>`
    }
  },
  annotations: {
    texts: [
      {
        text: "45.435.543 đ",
        foreColor: "#fff"
      },
      {
        text: "65.435.543 đ",
        foreColor: "#fff"
      }
    ]
  },
  plotOptions: {
    radialBar: {
      hollow: {
        size: "40%"
      },
      track: {
        show: true,
        background: "#F8F8FD",
        margin: 8
      },
      dataLabels: {
        name: {
          show: false
        },
        value: {
          offsetY: 5
        },
        total: {
          show: false
        }
      }
    }
  },
  labels: ["CÁ NHÂN", "THÀNH VIÊN"]
}

var incomeChart = new ApexCharts(
  document.querySelector("#dashboardIncomeChart"),
  dashboardIncomeChartOptions
)

var campaignChart = new ApexCharts(
  document.querySelector("#campaignChart"),
  dashboardCampaignChartOptions
)
var dashboardChart = new ApexCharts(
  document.querySelector("#dashboardChart"),
  dashboardChartOptions
)
campaignChart.render()
incomeChart.render()
dashboardChart.render()
