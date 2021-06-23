<?php
/**
 * @see Calcula o Tempo após uma ocorrencia
 * @param [String] $tempo_ini, recebe o tempo que houve a ocorrencia
 * @author Nascimento, Paulo Kennedy
 * */
function insereWWW($url) {

    $data = array(
                'type' => 'danger',
                'msg' => 'Site de Entrada não Informado'
    );

    if (!is_null($url)) {
        
        $data = array (
                'type' => 'warning',
                'msg' => 'Site de Entrada Inválido'
            );
    
        if (strpos($url, '.com') != false) {

            if (strpos($url, 'www') == false) {
            
                $arr = explode('//', $url);
                if (count($arr)>1) {
                    $url_saida = $arr[0].'//www.'.$arr[1];

                } else {
                    $url_saida = 'www.'.$arr[0];
                }            

                $data = array (
                        'type' => 'success',
                        'entrada' => $url,
                        'response' => $url_saida,
                        'msg' => 'Site acrescido de www com sucesso!'
                    );
                
            } else {
                $data = array (
                        'type' => 'info',
                        'entrada' => $url,
                        'response' => $url_saida,
                        'msg' => 'Site já contém o www!'
                    );
            }
        }     
    }

    return $data;
};

$resposta = insereWWW('https://clansoftware.com');

echo '<pre>';
var_dump($resposta);