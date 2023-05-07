<?php 
class Core {

    public function run(){
        $url = '/';
        $controller = 'homeController';
        $funcao = 'index';
        $parametros = array();

        if(isset($_GET['url'])){

            $url .= $_GET['url'];
            $url = explode('/', $url);
            array_shift($url);

            $controller = $url[0].'Controller';
            array_shift($url);
            
            if(sizeof($url) > 0){
                $funcao = $url[0];
                array_shift($url);

                if(sizeof($url) >= 0){
                    for($i = 0; $i <= sizeof($url); $i++){
                    
                        if(sizeof($url) > 0 && $url[0] != ''){
                            array_push($parametros, $url[0]);
                            array_shift($url);
                        }
                        
                    }
                }

            }
        }

        $c = new $controller;
        call_user_func_array(array($c, $funcao), $parametros);
    }

}