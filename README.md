# WorkControlAPI
Classe de consumo de dados da API Work Control

<b>POST:: Exemplo de uso:</b>
<code>
<?php
  require './WorkControlApi.class.php';
  $getApi = new WorkControlApi("localhost/workcontrol", "www.upinside.com.br", "a87S6Aishakuhs");
  //$getPosts = $getApi->getPosts($Limit, $offset, $CategoryId, $Order, $By);
  $getPosts = $getApi->getPosts(3, null, null, 2);
  if ($getPosts):
      foreach ($getPosts as $REST):
          var_dump($REST);
          //extract($REST);
          //echo $post_title;
      endforeach;
  else:
      echo $getApi->getError();
  endif;
?>
</code>
