<?php
$repoDir = '/home/crccondominios/public_html/site'; 

chdir($repoDir);

$output = [];
$returnVar = 0;
exec('git pull origin main', $output, $returnVar);

if ($returnVar !== 0) {
    echo "Erro ao fazer pull: " . implode("\n", $output);
} else {
    echo "Repositório atualizado com sucesso.";
}
