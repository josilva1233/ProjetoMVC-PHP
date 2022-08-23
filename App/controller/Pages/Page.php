<?php

namespace App\controller\Pages;

use \App\Utils\View;

class Page{

private static function getHeader(){
     /**
      * Metodo responsavel por renderizar o topo da pagina
      *@return string
      */
    return View::render('pages/header');
}

private static function getFooter(){
    /**
     * Metodo responsavel por renderizar o final da pagina
     *@return string
     */
   return View::render('pages/footer');
}




    /**
     * Metodo responsavel por retornar o conteúdo (view) da nossa pagina generica
     *@return string
     */

    public static function getPage($title,$content)
    {
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }
}
