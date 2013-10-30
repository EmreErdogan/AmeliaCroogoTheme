<?php

if (empty($options)) {
    $options = array();
}
echo $this->Custom->nestedLinks($menu['threaded'], $options);
