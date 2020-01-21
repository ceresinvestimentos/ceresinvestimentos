$(document).ready(function () {
    var id_counter = 0;
    $("#newForm").on("click", () => {
        $("#form0").clone().attr("id", `form0${id_counter}`).appendTo("#formWraper")
        $(`#form0${id_counter}`).append(`<button type="button" id="rm_button${id_counter}"
                                          onclick="remover(${id_counter})"
                                          class="modal-button">
                                          Deletar Nota</button>`)
        $(`#form0${id_counter}`).children().find("input:text").val("").end()
        id_counter++
        console.log(`0${id_counter}`)
    });


})

const remover = (id) => {
    $(`#rm_button${id}`).parent().remove();
}