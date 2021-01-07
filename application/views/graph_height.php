<?php
    $dataheight = array();

    foreach ($partisipan as $p){
        $dataheight[] = ['date' => $p['date'], 'height' => $p['height']];
    }

    usort($dataheight, 'date_compare');
    $jheight = json_encode( $dataheight, JSON_NUMERIC_CHECK );
?>

<?php
    $counter = json_decode($jheight, true);
    if (count($counter)>0) {
        ?>
        <h5 class="graph-title">Perkembangan Tinggi Badan</br>(dalam cm)</h5>
        <div id="graph_height" style="width: 100%;"></div>
        <?php
    }else{
        ?>
        <div class="unavailable">
            <h5>Data tidak tersedia</h5>
        </div>
        <?php
    }
?>

<script>
    Morris.Line({
    element: 'graph_height',
    data: <?php echo $jheight; ?>,
    xkey: 'date',
    ykeys: ['height'],
    labels: ['height']
    });
</script>