<?php

$homologacao = "https://nfe.sjp.pr.gov.br/servicos/issOnline2/homologacao/ws/index.php";
$producao = "https://nfe.sjp.pr.gov.br/servicos/issOnline2/ws/index.php";
$version = "3";
$homologacao_soapns = "https://nfe.sjp.pr.gov.br/servicos/issOnline2/ws/index.php?wsl";
$producao_soapns = "https://nfe.sjp.pr.gov.br/servicos/issOnline2/homologacao/ws/index.php?wsl";

$muns = [
    ['São José dos Pinhais', 'PR', '4125506']
];


$urls = [];
foreach ($muns as $mun) {
    $cod = $mun[2];
    $urls[$cod] = [
        "municipio"          => $mun[0],
        "uf"                 => $mun[1],
        "homologacao"        => $homologacao,
        "producao"           => $producao,
        "version"            => $version,
        "homologacao_soapns" => $homologacao_soapns,
        "producao_soapns"    => $producao_soapns
    ];
}

$json = json_encode($urls, JSON_PRETTY_PRINT);

echo "<pre>";
print_r($json);
echo "</pre>";

file_put_contents("../storage/urls_webservices.json", $json);
