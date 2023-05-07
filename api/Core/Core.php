<?php
class Core {

    public function run(){
        $url = '/';
        $controller = 'statusController';
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
        }elseif(isset($_POST['url'])){

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
                    
                        if(sizeof($url) >= 0 && $url[0] != ''){
                            array_push($parametros, $url[0]);
                            array_shift($url);
                        }
                        
                    }
                }
    
            }
        }

        $response = new Response;
        if(class_exists($controller)){
            $c = new $controller;
            if(method_exists($c, $funcao)){
                $results = call_user_func_array(array($c, $funcao), $parametros);
                if(isset($results['status']) && $results['status'] == 'ERROR'){
                    $response->error_response($results['message']);
                }else{
                    $response->add_do_data($results);
                    $response->send_api_response();
                }
            }else{
                $response->error_response('Função inexistente');
            }
        }else{
            $response->error_response('Endpoint inexistente');
        }


    }

}