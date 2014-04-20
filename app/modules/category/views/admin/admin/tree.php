<?php

$this->widget('application.widgets.JsTreeWidget',
    array('modelClassName' => 'Category',
        'jstree_container_ID' => 'Category-wrapper',
        'themes' => array('theme' => 'default', 'dots' => true, 'icons' => true),
        'plugins' => array('themes', 'html_data', 'contextmenu', 'crrm', 'dnd', 'cookies', 'ui')
    ));
