function imprimirFormulario(id) {
    let win = window.open("", "Janela de Impressão", "toolbar=0,scrollbars=0,status=0")
    win.document.write("<!DOCTYPE html>\n");
    win.document.write(document.querySelector(`form#${id}`).innerHTML);
    win.document.close();
    win.print();
    win.close();
}
