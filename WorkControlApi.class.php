<?php

/**
 * WorkControlApi.class [ API ]
 * Classe de coneção REST com WorkControl
 * @copyright (c) year, Robson V. Leite - UPINSIDE TECNOLOGIA
 */
class WorkControlApi {

    private $Base;
    private $Key;
    private $Token;
    private $cUrl;

    /**
     * Inicia a conexão com a API nativa do Work Control para obter qualquer tipo de dado!
     * @param type $Base = URL do site criado com Work Control!
     * @param type $Key = Seu API key gerado pelo Work Control!
     * @param type $Token = Seu API token gerado pelo Work Control!
     */
    public function __construct($Base, $Key, $Token) {
        $this->Base = $Base;
        $this->Key = $Key;
        $this->Token = $Token;
    }

    /**
     * Obtém posts de um site com Work Control. Você pode configurar o limte, salto, categoria, e ordem da lista a obter!
     * @param type $Limit = Quantidade de posts
     * @param type $offset = Saltar posts
     * @param type $CategoryId = Id da categoria dos posts
     * @param type $Order = Ordenação <b>1</b> para ASC, <b>2</b> para DESC e <b>3</b> para RAND
     * @return type Array com todos os dados para looping nativo!
     */
    public function getPosts($Limit = null, $offset = null, $CategoryId = null, $Order = null) {
        $this->cUrl = $this->Base . "/_api/post.php?key={$this->Key}&token={$this->Token}&limit={$Limit}&offser={$offset}&catid={$CategoryId}&order={$Order}";

        $curl = curl_init($this->cUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, true);
    }

}
