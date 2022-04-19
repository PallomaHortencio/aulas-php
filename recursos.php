<?php
define("ESCOLA", "Senac");
$cursos = "Técnico em Informatica para Internet";
$tecnologias = ["HTML", "CSS", "JS", "PHP"];

function verificaIdade(int $idade):string {
    return $idade >= 18 ? "maior" : "menor";
}
?>