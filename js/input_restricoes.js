const inputRestricoes = {};

inputRestricoes.enviarFormViaBotao = (btn, form_id) => {
    const form = document.getElementById(form_id);

    const erros = inputRestricoes.verificarFormulario(form);
    if (erros.length == 0) {
        form.action = btn.getAttribute("formaction");
        form.submit();
    } else {
        alert(`Erro ao enviar formulário!\n${erros.join("\n")}`);
    }
};

inputRestricoes.verificarFormulario = (form_div) => {
    const erros_todos = [];

    for (const field_div of form_div.querySelectorAll("div.field")) {
        const campo = field_div.querySelector(".form-field");

        if (campo == null) {
            continue;
        }

        const nome_campo = field_div.querySelector("label.label").querySelector(".field-title").innerText;

        for (const e of inputRestricoes.verificarCampo(campo)) {
            erros_todos.push(`- Campo "${nome_campo}": ${e};`);
            continue;
        }
    }

    return erros_todos;
};

inputRestricoes.verificarCampo = (campo) => {
    const restricoes_raw = campo.getAttribute("data-restricoes"); // FIXME: null check
    const restricoes = JSON.parse(restricoes_raw);

    const erros = [];
    for (const rq of restricoes) {
        const rq_name = rq[0];
        const rq_args = rq.slice(1);

        const rq_action = inputRestricoes.RESTRICOES[rq_name];

        const val = campo.value.trim();
        const result = rq_action.func(val, rq_args);
        if (!result) {
            erros.push(rq_action.error_msg(val, rq_args));
        }
    }

    return erros;
};

// https://stackoverflow.com/questions/14636536/how-to-check-if-a-variable-is-an-integer-in-javascript
function isInt(value) {
    return !isNaN(value) && ((x) => (x | 0) === x)(parseFloat(value));
}

inputRestricoes.RESTRICOES = {
    not_empty: {
        func: (x) => x != "",
        error_msg: (_) => "está vazio, mas não pode",
    },

    at_most_chars: {
        func: (x, args) => x.length <= args[0],
        error_msg: (_, args) => `é longo demais (máximo de caracteres: ${args[0]})`,
    },

    is_integer: {
        func: isInt,
        error_msg: (_) => "não é um número inteiro (sem casas decimais)",
    },

    is_positive: {
        func: (x) => isInt(x) && x > 0,
        error_msg: (_) => "não é um número positivo",
    },

    is_negative: {
        func: (x) => isInt(x) && x < 0,
        error_msg: (_) => "não é um número negativo",
    },
};
