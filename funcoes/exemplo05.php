<?php

$hierarquia = array(
  array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
          // Inicio diretor comercial
            array(
                  'nome_cargo' => 'Diretor comercial',
                  'subordinados' => array(
          // Gerente de vendas
                      array(
                        'nome_cargo' => 'Gerente de vendas'
                      )
                      // Término gerente de vendas
                  )
            ),
            // Termino diretor comercial
            // Inicio diretor financeiro
            array(
                  'nome_cargo' => 'Diretor financeiro',
                  'subordinados' => array(
                    // inicio gerente de contas a pagar
                     array(
                          'nome_cargo' => 'Gerente de contas a pagar',
                          'subordinado' => array(
                            // Inicio supervisor de pagamentos
                              array(
                                    'nome_cargo' => 'Supervisor de pagamentos'
                              )
                            // termino supervisor de pagamentos
                          )
                     ),

                     // Termino gerente de contas a pagar
                     // inicio gerente de compras
              array(
                'nome_cargo' => 'Gerente de compras',
                'subordinados' => array(
                  // Inicio supervisor de suprimentos
                  array(
                        'nome_cargo' => 'Supervisor de suprimentos',
                        'subordinados' => array(

                          array(
                            'nome_cargo' => 'Funcionario'
                          )
                        )
                  )
                  // Termino supervisor de suprimentos
                )
                ),

              // Termino gerente de compras
            )
          ),
          array(
                'nome_cargo' => 'Diretor de RM',
                'subordinados' => array(

                array(
                  'nome_cargo' => 'Suporte'
                )
              )
          )
          // Termino diretos financeiro
    )
)
);


  function exibe($cargos){

      $html = '<ul>';

      foreach ($cargos as $cargo) {

        $html .= '<li>';
        $html .= $cargo['nome_cargo'];
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

          $html .= exibe($cargo['subordinados']);

        }
        $html .= '</li>';
      }
      $html .= '</ul>';
      return $html;
  }

  echo exibe($hierarquia);



 ?>
