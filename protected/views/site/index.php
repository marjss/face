<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<?php 
$j = 0;
//print_r($model['data']);die;
                    foreach ($model as $pic) {
                        foreach ($pic as $j=>$picture){
                            echo '<pre>';
                            print_r($pic['data']);
                            echo '</pre>';
                    }}
                                $src=$pic->images['0']->source;
                                $height =$pic->images['0']->height;
                                $width =$pic->images['0']->width;
                               ?>
                               
                       
                                    <li class="span4">
                                        <a href="<?php  echo $src; ?>" class="thumbnail" rel="prettyPhoto[gallery1]">
                                            <img src="<?php  echo $src; ?>" alt="Ileana">
                                        </a>
                                    </li>
                             
                        <?php $j++;
//                    }} ?>

<?php // $this->widget('ext.yii-facebook-opengraph.plugins.LoginButton', array(
   //'href' => 'YOUR_URL', // if omitted Facebook will use the OG meta tag
//   'show_faces'=>true,
//   'skin' => true
//)); ?>

