
<?php 
	foreach($Accessories as $ac);
	foreach($listkategori as $kt);
	foreach($Gadget as $ad);
	foreach($Travel as $at);
	foreach($Hotel as $ah);
?>
<style type="text/css">
#container, #sliders {
	min-width: 310px; 
	max-width: 800px;
	margin: 0 auto;
}
</style>
<script type="text/javascript">
$(function () {
    // Set up the chart
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'container',
            type: 'column',
            margin: 75,
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                depth: 50,
                viewDistance: 25
            }
        },
        title: {
            text: 'Display Chart Kategori Produk '
        },
        subtitle: {
            text: 'Mediashop '
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        series:[{
				name:'Accessoris',
				data: [<?php echo $ac['Accessories'];?>]
		},{
				name:'Travel',
				data:[<?php echo $at['Travel'];?>]
		
		},{
				name:'Gadget',
				data:[<?php echo $ad['Gadget'];?>]
		
		},{
				name:'Hotel',
				data:[<?php echo $ah['Hotel'];?>]
		}]
				
    });
    

    // Activate the sliders
    $('#R0').on('change', function(){
        chart.options.chart.options3d.alpha = this.value;
        showValues();
        chart.redraw(false);
    });
    $('#R1').on('change', function(){
        chart.options.chart.options3d.beta = this.value;
        showValues();
        chart.redraw(false);
    });

    function showValues() {
        $('#R0-value').html(chart.options.chart.options3d.alpha);
        $('#R1-value').html(chart.options.chart.options3d.beta);
    }
    showValues();
});
</script>
<div class="container fluid col-lg-12">
		<div class="row" id="graphic">
          <div class="col-lg-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Graphic Kategori Produk</h3>
              </div>
              <div class="panel-body">						
				<div id="container">
				</div>
				<div id="sliders">
					<table>
						<tr><td>Alpha Angle</td><td><input id="R0" type="range" min="0" max="45" value="15"/> <span id="R0-value" class="value"></span></td></tr>
						<tr><td>Beta Angle</td><td><input id="R1" type="range" min="0" max="45" value="15"/> <span id="R1-value" class="value"></span></td></tr>
					</table>
				</div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>



