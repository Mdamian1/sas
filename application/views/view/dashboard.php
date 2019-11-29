<section>
    <div class="container">
        <div class="row no-gutters justify-content-center align-items-center dash-fundo">
            <div class="col-md-12 text-center mt-5">
                <h3>O que deseja fazer?</h3>
            </div>
            <div class="list-group col-md-5 text-center mt-3">
                <a href="<?php echo base_url('client/agendar') ?>" class="list-group-item list-group-item-action list-group-item-dark">Fazer agendamento</a>
                <a href="<?php echo base_url('client/agendamentos/'.$this->session->id_usuario) ?>" class="list-group-item list-group-item-action list-group-item-dark">Ver agendamentos</a>
            </div>
        </div>
    </div>
</section>
