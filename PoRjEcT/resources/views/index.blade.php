<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        #myChart {
            width: 80%;
            height: auto;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    @include('header')

    <div>
        <canvas id="myChart"></canvas>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var data = @json($data);

            var newData = [];
            data.forEach(function(item) {
                var date = new Date(item.date);
                var hour = date.getHours();
                var ampm = hour >= 12 ? 'PM' : 'AM';

                if (!newData[hour]) {
                    newData[hour] = {
                        hour: hour % 12 || 12, // เปลี่ยนเป็น 12 ชั่วโมงสำหรับเวลา 12:00 PM
                        ampm: ampm,
                        voltageSum: 0,
                        count: 0
                    };
                }

                newData[hour].voltageSum += item.voltage;
                newData[hour].count++;
            });

            var avgPowerData = newData.map(function(hourData) {
                return hourData.count > 0 ? hourData.voltageSum / hourData.count : 0;
            });

            var hourLabels = newData.map(function(hourData) {
                return hourData.hour + ' ' + hourData.ampm;
            });

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: hourLabels,
                    datasets: [{
                        label: 'Consumption',
                        data: avgPowerData,
                        fill: true,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 2
                    }]
                },
            });
        </script>
    </div>


</body>


</html>
