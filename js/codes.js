var obj = {
    "pessoas": []
};

$('#incluir').click(function () {
    $.post("step.php", {
        function: 0,
        objeto: JSON.stringify(obj),
        name: $('#name').val()
    }).done(function(data) {
        convert(data);
    });
});

function convert(data) {

    obj = JSON.parse(data);

    lendo(obj);
}

function lendo (data) {

    var print = "";

    for(var i = 0; i < Object.keys(data.pessoas).length; i++) {
            
        var botao = "<button class='btn btn-primary' onclick='remover(obj, " + i + ")'> Remover </button>";
        
        var botao3 = "<tr><td colspan='2' class='text-center'><button class='btn btn-primary' onclick='adicionarFilho(obj, " + i + ")'> Adicionar filho </button></td></tr>";

        if(data.pessoas[i].filhos != []) {

            var print2 = "";

            for (var l = 0; l < data.pessoas[i].filhos.length; l++) {

                var botao2 = "<button class='btn btn-primary' onclick='removerFilho(obj, " + i + ", " + l + ")'> Remover filho </button>";

                print2 += "<tr class='bg-light'><td>" + data.pessoas[i].filhos[l] + "</td><td class='text-center'>" + botao2 + "</td></tr>";
            }
        }

        print += "<tr class='bg-secondary'><td>" + data.pessoas[i].nome + " </td> <td class='text-center'> " + botao + " </td> </tr>" + print2 + botao3;                
    }

    $('#json').html(JSON.stringify(data, undefined, 8));

    $('#catapimbas').html(print);
}

function adicionarFilho (obj, i) {

    var aIncluir = prompt("Informe o nome", "");

    $.post("step.php", {
        function: 1,
        objeto: JSON.stringify(obj),
        name: aIncluir,
        where: i
    }).done(function(data) {
        convert(data);
    });
}

function remover (obj, value) {
    $.post("step.php", {
        function: 2,
        objeto: JSON.stringify(obj),
        value: value
    }).done(function(data) {
        convert(data);
    });
}

function removerFilho (obj, i, value) {
    $.post("step.php", {
        function: 3,
        objeto: JSON.stringify(obj),
        i: i,
        value: value
    }).done(function(data) {
        convert(data);
    });
}

$('#ler').click(function () {
    $.post("step.php", {
        function: 4
    }).done(function(data) {
        convert(data);
    });
});

$('#gravar').click(function () {
    $.post("step.php", {
        function: 5,
        objeto: JSON.stringify(obj)
    }).done(function(data) {
        alert("Sucesso!");
        convert(data);
    });
});