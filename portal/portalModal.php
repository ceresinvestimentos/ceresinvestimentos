
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header my-modal-header d-flex justify-content-center">
        <h4 class="modal-title">Novo Borderô</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <select id="modal-select">
            <option>Selecione o fundo</option>
            <option value="series">Ceres Securitizadora</option>
            <option value="fundo">Fundo Ubyfol e Ecoagro</option>
        </select>
        <div class="d-flex justify-content-start flex-wrap" id="file-send-div">
            <p style="color: black;">Selecionar XML</p>
            <input type="file" name="xml-select">
        </div>
        <button data-toggle="collapse" data-target="#manual-input" id="manual-input-title"
         class="modal-button">
            Inserir dados manualmente
        </button>
        <div id="manual-input" class="collapse">
            <p>test</p>
        </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="modal-button">Enviar</button>
        <button type="button" class="modal-button" data-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>