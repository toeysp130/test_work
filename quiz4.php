<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
</head>
<body>
    <table style="width: 100%">
        <tbody>
            <tr>
                <td style="width: 50%;">
                    <canvas id = chart1 ></canvas>
                </td>
                <td style="width: 50%;">
                    <canvas id = chart2 ></canvas>
                </td>
            </tr>
        </tbody>

    </table>
    <script>
        var url = "https://www.trcloud.co/test/api.php";
        $.ajax({
            url: url, type: "post", dataType: "json",
            success: function(res){
                var labels	= [];
                var data 	= [];
                $.each(res,function(index,item){
                    labels.push(item.City);
                    data.push(item.Population);
                });


                var ctx = document.getElementById("chart1");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Range by Country',
                            data: data,
                            backgroundColor: [
                                '#FF6384', 
                                '#36A2EB', 
                                '#FFCE56', 
                                '#4BC0C0', 
                                '#9966FF', 
                                '#FF9F40', 
                                '#FF6384', 
                                '#36A2EB', 
                                '#FFCE56', 
                                '#4BC0C0', 
                                '#9966FF',
                                '#FF9F40'
                            ]
                        }]
                    }
                });

                var ctx = document.getElementById("chart2").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Range by Country',
                            data: data,
                            backgroundColor: [
                                '#FF6384', 
                                '#36A2EB', 
                                '#FFCE56', 
                                '#4BC0C0', 
                                '#9966FF', 
                                '#FF9F40', 
                                '#FF6384', 
                                '#36A2EB', 
                                '#FFCE56', 
                                '#4BC0C0', 
                                '#9966FF',
                                '#FF9F40'
                            ]
                        }]
                    },options: {
			            scales: {
                            yAxes: {
				            }
			            }
		            }
                });
            }
        });
    </script>
</body>
</html>