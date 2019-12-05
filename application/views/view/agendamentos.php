<div class="container">
    <div class="row justify-content-around mt-5">
        <?php foreach($agendamentos as $agendamento): ?>
<?php
    $array = explode(' ', $agendamento['data_horario']);
    $data = explode('-', $array[0]);
    $data = $data[2].'/'.$data[1].'/'.$data[0];
                    
    $hora = explode(':', $array[1]);
    $hora = $hora[0].':'.$hora[1];
?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Agendamento código <?php echo $agendamento['id_agendamento'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Horário: <?php echo $hora ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Data: <?php echo $data ?></h6>
                <p class="card-text"><?php echo $agendamento['descricao'] ?></p>
                <a href="<?php echo base_url('Client/cancelar/'.$agendamento['id_agendamento']) ?>" class="card-link">Cancelar</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
