<?php
namespace Cdlr\mailBundle\Entity;
class Mail {

private $To;
private $Objet;
private $from;
private $text;
function getText() {
    return $this->text;
}

function setText($text) {
    $this->text = $text;
}
function getTo() {
    return $this->To;
}

function getObjet() {
    return $this->Objet;
}

function setTo($To) {
    $this->To = $To;
}

function setObjet($Objet) {
    $this->Objet = $Objet;
}



function getFrom() {
    return $this->from;
}




function setFrom($from) {
    $this->from = $from;
}


}