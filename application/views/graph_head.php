<?php
    $datahead = array(); 
    foreach ($partisipan as $p){
        $datahead[] = ['date' => $p['date'], 'head' => $p['head']];
    }

    usort($datahead, 'date_compare');
    $jhead = json_encode( $datahead, JSON_NUMERIC_CHECK );
?>
<!-- count $phead dulu-->
<?php
    $counter = json_decode($jhead, true);
    
    if (count($counter)<1) {
        ?>
        <div class="unavailable">
            <h5>Data tidak tersedia</h5>
        </div>
        <?php
    }else{
        ?>
        <h5 class="graph-title">Perkembangan Lingkar Kepala</br>(dalam cm)</h5>
        <div id="graph_head" style="width: 100%;"></div>
        <?php
    }
?>
<!-- if $phead > 0; div muncul; else echo "tidak ada pengukuran" -->

<script>
    Morris.Line({
    element: 'graph_head',
    data: <?php echo $jhead; ?>,
    xkey: 'date',
    ykeys: ['head'],
    labels: ['head']
    });
</script>