<section>
    <div class="container">
        <div class="row no-gutters justify-content-center align-items-center">
            <div class="col-md-8 border border-dark mt-5 p-5" id="fundo-agendamento">
                <div class="col-md-12 text-center ">
                    <h4>Agende seu horário</h4>
                </div>
                <div class="col-md-12 mt-5">
                    <form id="form-cadastro-agendamento">
                        <div class="row align-items-center">
                            <div class="form-group col-md-6 no-gutters d-flex justify-content-center flex-column text-left">
                                <label for="data-agendada" class="col-md-12">Data para agendar</label>
                                <input type="date" id="data-agendada" name="data-agendada">
                            </div>
                            <div class="form-group col-md-6 d-flex flex-column justify-content-center align-items-center">
                                <label>Selecione um horário</label>
                                <div id="lista-hora">
                                    
                                </div>
                            </div>
                        </div>
                        <div id="alert-agendamento" class="alert alert-danger" role="alert">
                            Selecione um horário
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" id="descricao" rows="3" name="descricao"></textarea>
                        </div>
                        <button class="btn btn-dark col-md-12" id="btn-agendar">Agendar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
