<?php

class Configs {

    //converte a data que é persistida no banco no formato americano para o formato brasileiro
    // YYYY-mm-dd para dd/mm/YYYY
    public function date2BR($dataBR) {
        $data = explode('-', $dataBR);
        return $data[2] . '/' . $data[1] . '/' . $data[0];
    }

    //converte a data informada no formato brasileiro para o formato que é persistido no banco, o americano
    // dd/mm/YYYY para YYYY-mm-dd
    public function date2US($dataUS) {
        $data = explode('/', $dataUS);
        return $data[2] . '-' . $data[1] . '-' . $data[0];
    }

    public function convert($data) {
        return date('H:i', strtotime($data));
    }

    public function calculaIdade($nascimento) {
        $nasc = explode('-', $nascimento);

        $dia = $nasc[2];
        $mes = $nasc[1];
        $ano = $nasc[0];

        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

        $aniversario = mktime(0, 0, 0, $mes, $dia, $ano);

        $idade = floor((((($hoje - $aniversario) / 60) / 60) / 24) / 365.25);

        return $idade;
    }

    public function valor2float($valor) {
        $val = explode(',', $valor);
        if (isset($val[1])) {
            return $val[0] . '.' . $val[1];
        } else {
            return $valor;
        }
    }

    public function mesExtenso() {
        $mes_extenso = array(
            'Jan' => 'Janeiro',
            'Feb' => 'Fevereiro',
            'Mar' => 'Marco',
            'Apr' => 'Abril',
            'May' => 'Maio',
            'Jun' => 'Junho',
            'Jul' => 'Julho',
            'Aug' => 'Agosto',
            'Nov' => 'Novembro',
            'Sep' => 'Setembro',
            'Oct' => 'Outubro',
            'Dec' => 'Dezembro'
        );
        
        return $mes_extenso;
    }
    
    public function getMesNum($mes) {
        $mesN = array("Jan" => "1", 
                    "Feb" => "2", 
                    "Mar" => "3", 
                    "Apr" => "4", 
                    "May" => "5", 
                    "Jun" => "6", 
                    "Jul" => "7", 
                    "Aug" => "8", 
                    "Nov" => "9", 
                    "Sep" => "10", 
                    "Oct" => "11", 
                    "Dec" => "12");
        
        return $mesN[$mes];
    }
    
    public function getMesBR($mes) {
        $mess = array("Jan" => "Janeiro", 
                  "Feb" => "Fevereiro", 
                  "Mar" => "Marco", 
                  "Apr" => "Abril", 
                  "May" => "Maio", 
                  "Jun" => "Junho", 
                  "Jul" => "Julho", 
                  "Aug" => "Agosto", 
                  "Nov" => "Novembro", 
                  "Sep" => "Setembro", 
                  "Oct" => "Outubro", 
                  "Dec" => "Dezembro");
        
        return $mess[$mes];
    }

}

?>
