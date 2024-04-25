<?php
$pessoa = [
    'nome' => 'João',
    'notas' => [
        'matematica' => 5,
        'portugues' => 6,
        'historia' => 7,
        'filosofia' => 10,
        'sociologia' => 9,
        'fisica' => 5,
        'quimica' => 1
    ]
];

function Verificar ($pessoa){   
    $contagem = 0;

    foreach ($pessoa['notas'] as $verificacao) {
        if($verificacao < 6){
            $contagem++;
        }
}

if($contagem >= 3){
        echo "Não passou de ano";
    } else {
        echo "Passou de ano";
    }
}
Verificar ($pessoa);

//-------------------------------------------------------

$pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'Ana', 'idade' => 50],
];

$quantidade = 0;

foreach($pessoas as $contagem){
    $quantidade++;
}

for($i=0;$i<$quantidade;$i++){
    $idades[$i] = $pessoas[$i]['idade'];
}

$media = array_sum($idades)/$quantidade;

echo "Media de idades é de $media";

//-------------------------------------------------------

$max = max($idades);

echo "{$max}\n";

//-------------------------------------------------------

$senha = "SenhaForte123";


function verificarSenha($senha) {
    if(strlen($senha) < 8) {
        echo "Deve ter no mínimo 8 caracteres!\n";
        return false;
    }
    if(!preg_match('/[A-Z]/', $senha)) {
        echo "Deve ter no mínimo 1 letra maiúscula!\n";
        return false;
    }
    if(!preg_match('/[a-z]/', $senha)) {
        echo "Deve ter no mínimo 1 letra minúscula!\n";
        return false;
    }
    if(!preg_match('/[0-9]/', $senha)) {
        echo "Deve ter no mínimo 1 número!\n";
        return false;
    }
    return true;
}

if(verificarSenha($senha)) {
    echo "A senha é forte.";
} else {
    echo "A senha é fraca.";
}

//-------------------------------------------------------

$posts = [
    ['post' => 'Estou aprendendo PHP', 'autor' => 'João'],
    ['post' => 'Aprendi HTML, CSS e JavaScript', 'autor' => 'João'],
    ['post' => 'Estou trabalhando em um projeto', 'autor' => 'Maria'],
    ['post' => 'Estou estudando para o ENEM', 'autor' => 'José'],
    ['post' => 'Fiz um curso de PHP', 'autor' => 'Maria'],
    ['post' => 'Aprendi PHP', 'autor' => 'João'],
    ['post' => 'Estou trabalhando em um site', 'autor' => 'João'],
    ['post' => 'Terminei o curso de PHP', 'autor' => 'Maria']
];

function contarCriadoresPosts($posts) {
    $autoresPosts = [];

    foreach ($posts as $post) {
        $autor = $post['autor'];
        if (!isset($autoresPosts[$autor])) {
            $autoresPosts[$autor] = 0;
        }
        $autoresPosts[$autor]++;
    }

    return $autoresPosts;
}

print_r(contarCriadoresPosts($posts));
?>
