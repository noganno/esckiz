<?php

namespace Products\Form;

use Application\Form\Form;
use Phalcon\Forms\Element\Check;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Forms\Element\Select;
use Application\Form\Element\Image;
use Products\Model\Category;

class CategoryForm extends Form
{

    public function initialize()
    {
        $this->add((new Text('title', array('required' => true)))->setLabel('Заголовок'));
        $this->add((new Text('slug', array('required' => true, 'data-description' => 'Пример: category')))->setLabel('Ссылка'));
        $this->add((new TextArea('text'))->setLabel('Текст'));
        $this->add((new Text('meta_description'))->setLabel('Meta-description'));        
        $this->add((new Text('meta_title'))->setLabel('Meta-title'));        
        $this->add((new Text('limit', array('style' => 'width:106px')))->setDefault(10)->setLabel('Количество публикаций на странице'));    
        $this->add((new Image('foto'))->setLabel('Фото'));    
        $this->add((new Select('parent_cat', Category::cachedListCatArray(['key' => 'id']))));    
        $this->add((new Check('index_page'))->setLabel('Отключить индексацию'));
        $menu = new Check('menu_check');
        $menu->setLabel('Подключить меню');
        $this->add($menu);
    }    

} 