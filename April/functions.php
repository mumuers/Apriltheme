<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $subtitle = new Typecho_Widget_Helper_Form_Element_Text('subtitle', NULL, NULL, _t('网站副标题：'), _t(''));
    $subtwitter = new Typecho_Widget_Helper_Form_Element_Text('subtwitter', NULL, NULL, _t('Twitter账户地址：'), _t(''));
    $subgithub = new Typecho_Widget_Helper_Form_Element_Text('subgithub', NULL, NULL, _t('Github账户地址：'), _t(''));
    $subweibo = new Typecho_Widget_Helper_Form_Element_Text('subweibo', NULL, NULL, _t('微博地址：'), _t(''));
    $subemail = new Typecho_Widget_Helper_Form_Element_Text('subemail', NULL, NULL, _t('邮箱地址：'), _t(''));
   
    $form->addInput($logoUrl);
    $form->addInput($subtitle);
    $form->addInput($subtwitter);
    $form->addInput($subgithub);
    $form->addInput($subweibo);
    $form->addInput($subemail);
    
    
    
}

/*
* 无插件阅读数
*/
function get_post_view($archive)
{
$cid = $archive->cid;
$db = Typecho_Db::get();
$prefix = $db->getPrefix();
if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
$db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
echo 0;
return;
}
$row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
if ($archive->is('single')) {
$db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
}
echo $row['views'];
}
