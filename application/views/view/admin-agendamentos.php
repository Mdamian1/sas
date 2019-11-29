<div class="container">
    <div class="row justify-content-center pt-5">
        <form id="formulario-data">
            <div class="form-group">
                <label for="form-data">Você deseja ver os agendamentos de que dia?</label>
                <input type="date" class="form-control" id="form-data" name="data">
            </div>
        </form>
    </div>
    <div class="row justify-content-center mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Nome do cliente</th>
                    <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody id="agendamento-body">
                
            </tbody>
        </table>
    </div>
</div>
