<?php

namespace App\controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page
{
    /**
     * Metodo responsavel por retornar o conteúdo (view) da nossa Home
     *@return string
     */

    public static function getHome(){
        //Organização instaciada
       $obOrganization = new Organization;

        // retorna a view da Home 
        $content = View::render('pages/home', [
            'name' => $obOrganization->name,
            'description'  => $obOrganization->description,
            'site' => $obOrganization->site,
        ]);
        
        // retorna a view da pagina
        return parent::getPage('Projeto PHP', $content);
    }
}
