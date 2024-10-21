<?php

class Animais {
    public $nomeCientifico;
    public $multicelular;
    public $eucarionte;
    public $nutricaoHeterotrofica;

    public function __construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica) {
        $this->nomeCientifico = $nomeCientifico;
        $this->multicelular = $multicelular;
        $this->eucarionte = $eucarionte;
        $this->nutricaoHeterotrofica = $nutricaoHeterotrofica;
    }

    public function nascer() {}
    public function viver() {}
    public function comer() {}
    public function dormir() {}
    public function reproduzir() {}
    public function morrer() {}
}

class Vertebrado extends Animais {
    public $colunaVertebral;
    public $medulaEspinhal;
    public $sistemaNervosocentral;
    public $sistemaMuscular;
    public $endoEsqueleto;

    public function __construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto) {
        parent::__construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica);
        $this->colunaVertebral = $colunaVertebral;
        $this->medulaEspinhal = $medulaEspinhal;
        $this->sistemaNervosocentral = $sistemaNervosocentral;
        $this->sistemaMuscular = $sistemaMuscular;
        $this->endoEsqueleto = $endoEsqueleto;
    }
}


class Peixe extends Vertebrado {
    public $escamas;
    public $barbatanas;
    public $respiracaoBraquial;

    public function __construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto, $escamas, $barbatanas, $respiracaoBraquial) {
        parent::__construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto);
        $this->escamas = $escamas;
        $this->barbatanas = $barbatanas;
        $this->respiracaoBraquial = $respiracaoBraquial;
    }

    public function nadar() {}
}
class Anfibio extends Vertebrado {
    public $peleLisa;
    public $peleUmida;
    public $ectotermico;

    public function __construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto, $peleLisa, $peleUmida, $ectotermico) {
        parent::__construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto);
        $this->peleLisa = $peleLisa;
        $this->peleUmida = $peleUmida;
        $this->ectotermico = $ectotermico;
    }
}
class Reptil extends Vertebrado {
    public $oviparo;
    public $escamas;
    public $respiracaoPulmonar;
    public $alimentacaoCarnivora;
    public $pecilotermico;
    public $peleGrossa;

    public function __construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto, $oviparo, $escamas, $respiracaoPulmonar, $alimentacaoCarnivora, $pecilotermico, $peleGrossa) {
        parent::__construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto);
        $this->oviparo = $oviparo;
        $this->escamas = $escamas;
        $this->respiracaoPulmonar = $respiracaoPulmonar;
        $this->alimentacaoCarnivora = $alimentacaoCarnivora;
        $this->pecilotermico = $pecilotermico;
        $this->peleGrossa = $peleGrossa;
    }
}
class Passaro extends Vertebrado {
    public $corpocomPenas;
    public $bico;
    public $oviparo;
    public $asas;

    public function __construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto, $corpocomPenas, $bico, $oviparo, $asas) {
        parent::__construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto);
        $this->corpocomPenas = $corpocomPenas;
        $this->bico = $bico;
        $this->oviparo = $oviparo;
        $this->asas = $asas;
    }

    public function voar() {}
    public function botarOvo() {}
}
class Mamifero extends Vertebrado {
    public $respiracaoPulmonar;
    public $reproducaoSexuada;
    public $glandulasMamarias;
    public $endotermico;
    public $sistemaExcretor;

    public function __construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto, $respiracaoPulmonar, $reproducaoSexuada, $glandulasMamarias, $endotermico, $sistemaExcretor) {
        parent::__construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto);
        $this->respiracaoPulmonar = $respiracaoPulmonar;
        $this->reproducaoSexuada = $reproducaoSexuada;
        $this->glandulasMamarias = $glandulasMamarias;
        $this->endotermico = $endotermico;
        $this->sistemaExcretor = $sistemaExcretor;
    }

    public function amamentar() {}
}

class Ornitorrinco extends Mamifero {
    public $bico;
    public $pelo;
    public $glandulasMamarias;
    public $oviparo;
    public $patas;

    public function __construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto, $respiracaoPulmonar, $reproducaoSexuada, $glandulasMamarias, $endotermico, $sistemaExcretor, $bico, $pelo, $oviparo, $patas) {
        parent::__construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto, $respiracaoPulmonar, $reproducaoSexuada, $glandulasMamarias, $endotermico, $sistemaExcretor);
        $this->bico = $bico;
        $this->pelo = $pelo;
        $this->oviparo = $oviparo;
        $this->patas = $patas;
    }

    public function botarOvo() {}
    public function amamentar() {}
}
class Morcego extends Mamifero {
    public $noturno;
    public $ecolocalizacao;
    public $caninosAfiados;
    public $asas;

    public function __construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto, $respiracaoPulmonar, $reproducaoSexuada, $glandulasMamarias, $endotermico, $sistemaExcretor, $noturno, $ecolocalizacao, $caninosAfiados, $asas) {
        parent::__construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto, $respiracaoPulmonar, $reproducaoSexuada, $glandulasMamarias, $endotermico, $sistemaExcretor);
        $this->noturno = $noturno;
        $this->ecolocalizacao = $ecolocalizacao;
        $this->caninosAfiados = $caninosAfiados;
        $this->asas = $asas;
    }

    public function voar() {}
    public function amamentar() {}
}
class Baleia extends Mamifero {
    public $grande;
    public $vocalizacao;
    public $espiraculo;

    public function __construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto, $respiracaoPulmonar, $reproducaoSexuada, $glandulasMamarias, $endotermico, $sistemaExcretor, $grande, $vocalizacao, $espiraculo) {
        parent::__construct($nomeCientifico, $multicelular, $eucarionte, $nutricaoHeterotrofica, $colunaVertebral, $medulaEspinhal, $sistemaNervosocentral, $sistemaMuscular, $endoEsqueleto, $respiracaoPulmonar, $reproducaoSexuada, $glandulasMamarias, $endotermico, $sistemaExcretor);
        $this->grande = $grande;
        $this->vocalizacao = $vocalizacao;
        $this->espiraculo = $espiraculo;
    }

    public function nadar() {}
    public function amamentar() {}
}