<?php
/**
 * @see Calcula o Tempo após uma ocorrencia
 * @param [String] $tempo_ini, recebe o tempo que houve a ocorrencia
 * @author Nascimento, Paulo Kennedy
 * */
date_default_timezone_set('America/Sao_Paulo');

function defTimmer($tempo_ini=null, $fracao='h', $tempo_fim=null) {

    $data = array(
                'type' => 'danger',
                'msg' => 'Entrada Inválida'
            );

    //1 Verifica se foi informado a variável tempo ini
    if (!is_null($tempo_ini)) {
        //set data hora atual, caso não tenha informado tempo fim
        if (!is_null($tempo_fim)) {
            $tempo_fim = date('d/m/Y H:i:s');
        }
            //Informa a data fim utilizada para cálculo, no array data
            $data = array(
                        'type' => 'info',
                        'data_hora_fim' => $tempo_fim,
                        'msg' => 'Calculando com a data do servidor[$tempo_fim]'
                    );

       
        //fracionando o data-fim final
        $arr = explode(' ', $tempo_fim);
        $horas = explode(':', $arr[1]);
        $hora_f = $horas[0];
        $minuto_f = $horas[1];
        $segundo_f = $horas[2];

        //fracionando o data-ini inicial
        $arr = explode(' ', $tempo_ini);
        $horas = explode(':', $arr[1]);
        $hora_i = $horas[0];
        $minuto_i = $horas[1];
        $segundo_i = $horas[2];

        switch ($fracao) {
            case 'h':
                $x = $hora_f - $hora_i;
                if ($x <1) {
                    $data['response'] = 'Há menos de 1 hora.';
                    $data['data_hora_ini'] = $tempo_ini;
                } else if($x>1){
                    $data['response'] = "Há mais de $x horas.";
                    $data['data_hora_ini'] = $tempo_ini;
                } else {
                    $data['response'] = "Há uma hora";
                    $data['data_hora_ini'] = $tempo_ini;
                }
                break;

            case 'm':
                if ($minuto_f > $minuto_i) {
                    $data['msg'] = 'Há mais de 59 minutos';
                    $data['data_hora_ini'] = $tempo_ini;
                }
                $y = $minuto_f - $minuto_i;
                if ($y <1) {
                    $data['msg'] = 'Há menos de 1 minuto.';
                    $data['data_hora_ini'] = $tempo_ini;
                } else if($y>1){
                    $data['msg'] = "Há mais de $y minutos.";
                    $data['data_hora_ini'] = $tempo_ini;
                } else {
                    $data['msg'] = "Há um minuto";
                    $data['data_hora_ini'] = $tempo_ini;
                }
                break;
            
            default:
                if ($segundo_f > $segundo_i) {
                    $data['msg'] = 'Há mais de 59 segundos';
                    $data['data_hora_ini'] = $tempo_ini;
                }
                $z = $minuto_f - $minuto_i;
                if ($z <1) {
                    $data['msg'] = 'Há menos de 1 segundo.';
                    $data['data_hora_ini'] = $tempo_ini;
                } else if($z>1){
                    $data['msg'] = "Há mais de $z segundos.";
                    $data['data_hora_ini'] = $tempo_ini;
                } else {
                    $data['msg'] = "Há um segundo";
                    $data['data_hora_ini'] = $tempo_ini;
                }
                break;
        }

    }
//return json_encode($data);
    return $data;
}

echo '<pre>';

$tempo_dif = defTimmer('21/06/2021 13:00:00','s', '21/06/2021 13:40:00');

print_r($tempo_dif);
