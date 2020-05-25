<?php 

    function validaCnpj($cnpj){
    if(strlen($cnpj) < 14){
        return false;
        exit;
    }
    if (strlen($cnpj) > 14){
        return false;
        exit;
    }
    switch ($cnpj) {
        case '00000000000000': return false; break;
        case '11111111111111': return false; break;
        case '22222222222222': return false; break;
        case '33333333333333': return false; break;
        case '44444444444444': return false; break;
        case '55555555555555': return false; break;
        case '66666666666666': return false; break;
        case '77777777777777': return false; break;
        case '88888888888888': return false; break;
        case '99999999999999': return false; break;
    }
    //separando os nº do cnpj
    $n1 = substr($cnpj,0,1);
    $n2 = substr($cnpj,1,1);
    $n3 = substr($cnpj,2,1);
    $n4 = substr($cnpj,3,1);
    $n5 = substr($cnpj,4,1);
    $n6 = substr($cnpj,5,1);
    $n7 = substr($cnpj,6,1);
    $n8 = substr($cnpj,7,1);
    $n9 = substr($cnpj,8,1);
    $n10 = substr($cnpj,9,1);
    $n11 = substr($cnpj,10,1);
    $n12 = substr($cnpj,11,1);
    $n13 = substr($cnpj,12,1);
    $n14 = substr($cnpj,13,1);
    //calculando o 1º numero verificador do cnpj
    $dv1 = $n1 * 5 + $n2 * 4 + $n3 * 3 + $n4 * 2 + $n5 * 9 + $n6 * 8 + $n7 * 7 + $n8 * 6 + $n9 * 5 + $n10 * 4 +$n11 * 3 + $n12 * 2;
    $dv1 = $dv1 % 11;
    if($dv1 == 0 or $dv1 == 1){
        $dv1 = 0;
    }else{
        $dv1 = 11 - $dv1;
    }
    if($n13 != $dv1){
        return false;
        exit;
    }
    //calculando o 2º numero verificador do cnpj
    $dv2 = $n1 * 6 + $n2 * 5 + $n3 * 4 + $n4 * 3 + $n5 * 2 + $n6 * 9 + $n7 * 8 + $n8 * 7 + $n9 * 6 + $n10 * 5 +$n11 * 4 + $n12 * 3 + $dv1 * 2;
    $dv2 = $dv2 % 11;
    if($dv2 == 0 or $dv2 == 1){
        $dv2 = 0;
    }else{
        $dv2 = 11 - $dv2;
    }
    if($n14 != $dv2){
        return false;
        exit;
    }
    return true;
}
    function validaCpf($cpf){
        if(strlen($cpf) < 11){
            return false;
            exit;
        }
        if (strlen($cpf) > 11){
            return false;
            exit;
        }
        switch ($cpf) {
            case '00000000000': return false; break;
            case '11111111111': return false; break;
            case '22222222222': return false; break;
            case '33333333333': return false; break;
            case '44444444444': return false; break;
            case '55555555555': return false; break;
            case '66666666666': return false; break;
            case '77777777777': return false; break;
            case '88888888888': return false; break;
            case '99999999999': return false; break;
        }
        //separando os nº do cpf
        $n1 = substr($cpf,0,1);
        $n2 = substr($cpf,1,1);
        $n3 = substr($cpf,2,1);
        $n4 = substr($cpf,3,1);
        $n5 = substr($cpf,4,1);
        $n6 = substr($cpf,5,1);
        $n7 = substr($cpf,6,1);
        $n8 = substr($cpf,7,1);
        $n9 = substr($cpf,8,1);
        $n10 = substr($cpf,9,1);
        $n11 = substr($cpf,10,1);

        //calculando o 1º numero verificador do cpf
        $dv1 = $n1 * 10 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2;
        $dv1 = $dv1 * 10 % 11;
        if($dv1 != $n10){
            return false;
        }

        //calculando o 2º numero verificador do cpf
        $dv2 = $n1 * 11 + $n2 * 10 + $n3 * 9 + $n4 * 8 + $n5 * 7 + $n6 * 6 + $n7 * 5 + $n8 * 4 + $n9 * 3 + $n10* 2;
        $dv2 = $dv2 * 10 % 11;
        if ($dv2 != $n11) {
            return false;
            exit;
        }
        return true;
    }
        
?> 