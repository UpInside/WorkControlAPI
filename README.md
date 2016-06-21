# WorkControlAPI
Classe de consumo de dados da API Work Control.

> POST:: Exemplo de uso PHP:

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

>POST :: Exemplo de uso jQuery:

```js
function WorkControlApiPost(Base, Key, Token, Limit, Offset, CategoryId, Order, By, Target) {
    var WcPost = Base + "/_api/post.php?key=" + Key + "&token=" + Token + "&limit=" + Limit + "&offset=" + Offset + "&catid=" + CategoryId + "&order=" + Order + "&by=" + By;
    $.getJSON(WcPost, function (data) {
        $.each(data, function (key, data) {
            $(Target).append("<article style='display: inline-block; width: 25%; vertical-align: top'><img style='width: 100%;' src='" + data.post_cover + "'title='" + data.post_title + "'/> <h1>" + data.post_title + "</h1></article>");
        });
    });
}
```
