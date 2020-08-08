<!DOCTYPE html>
<html>
<head>
	<title>Grafik Tabungan Nasabah</title>

	<?php
        foreach($data as $data){
            $nama_nasabah[] = $data->nama_lengkap;
            $saldo[] = (float) $data->saldo;
        }
    ?>
</head>

<body>

	<canvas id="canvas" width="1000" height="280"></canvas>

	<!--Load chart js-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/dist/js/chart.min.js"></script>

	<script>

            var lineChartData = {
                labels : <?php echo json_encode($nama_nasabah);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($saldo);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
        
   	</script>
</body>
</html>