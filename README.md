# WorkControlAPI
Classe de consumo de dados da API Work Control.

> POST:: Exemplo de uso:

```php
<?php
require 'WorkControlApi.class.php';
$getApi = new WorkControlApi("LINK_DO_SITE", "API_KEY", "API_TOKEN");
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
```
