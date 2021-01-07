<?php
    $dataweight = array(); 
    foreach ($partisipan as $p){
        $dataweight[] = ['date' => $p['date'], 'weight' => $p['weight']];
    }

    usort($dataweight, 'date_compare');
    $jweight = json_encode( $dataweight, JSON_NUMERIC_CHECK );
?>

<?php
    $counter = json_decode($jweight, true);
    
    if (count($counter)<1) {
        ?>
        <div class="unavailable">
            <h5>Data tidak tersedia</h5>
        </div>
        <?php
    }else{
        ?>
        <h5 class="graph-title">Perkembangan Berat Badan</br>(dalam kg)</h5>
        <div id="graph_weight" style="width: 100%;"></div>
        <?php
    }
?>

<script>
    Morris.Line({
    element: 'graph_weight',
    data: <?php echo $jweight; ?>,
    xkey: 'date',
    ykeys: ['weight'],
    labels: ['weight']
    });
</script>