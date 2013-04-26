<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app()->name;
function array_to_obj($array, &$obj)
  {
    foreach ($array as $key => $value)
    {
      if (is_array($value))
      {
      $obj->$key = new stdClass();
      array_to_obj($value, $obj->$key);
      }
      else
      {
        $obj->$key = $value;
      }
    }
  return $obj;
  }

function arrayToObject($array)
{
 $object= new stdClass();
 return array_to_obj($array,$object);
}
?><ul>
<?php
$object = arrayToObject($model);
$j=0;
    foreach ($object->photos->data as $pic) {
   $array = json_decode(json_encode($pic), true);
        
    $src= $array['images'][0]['source'];?>

    <li class="span4">
        <a href="<?php echo $src; ?>" class="thumbnail" rel="prettyPhoto[gallery1]" height="300" width="50%">
            <img src="<?php echo $src; ?>" alt="Pics">
        </a>
    </li>
    
     <?php
    $j++;
}

    ?>
</ul><?php 
$page = $object->photos->paging->next;
?>
<a href="<?php echo $page?>">Next</a>
<?php
 $this->widget('ext.yii-facebook-opengraph.plugins.LoginButton', array(
//'href' => 'YOUR_URL', // if omitted Facebook will use the OG meta tag
   'show_faces'=>true,
//   'skin' => true
)); 
?>

