<?php
/* @var $this SiteController */
$this->pageTitle=$page->meta_title;
$metaDescription = $page->meta_description;
$metaKeywords = $page->meta_keywords;
?>

<?php
    echo $page->content;
?>
