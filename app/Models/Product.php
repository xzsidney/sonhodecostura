<?php

namespace App\Models;

class Product
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'name' => 'Toalha Personalizada Bordada',
                'description' => 'Exclusividade em cada detalhe: nome, iniciais e desenhos delicados com acabamento em renda refinada.',
                'image' => 'assets/img/produtos/toalhas/toalha_01.png',
                'features' => ['Bordado com nome/iniciais', 'Desenhos delicados', 'Acabamento rendado'],
                'cta' => 'Peça a sua'
            ],
            [
                'id' => 2,
                'name' => 'Necessaire Personalizada',
                'description' => 'Linda, prática e exclusiva, feita sob medida com bordado personalizado e estrutura firme.',
                'image' => 'assets/img/produtos/necessaire/necessaire_01.png',
                'features' => ['Bordado exclusivo', 'Zíper resistente', 'Alça lateral prática'],
                'cta' => 'Monte a sua'
            ],
            [
                'id' => 3,
                'name' => 'Kit de Viagem Personalizado',
                'description' => 'Conjunto sofisticado com mala, mochila, bolsas e necessaires, tudo personalizado com bordados únicos.',
                'image' => 'assets/img/produtos/kits/kit_01.png',
                'features' => ['Mala + Mochila + Bolsas', 'Nécessaires e porta-mamadeira', 'Organizadores e chaveiros'],
                'cta' => 'Veja os detalhes'
            ],
            [
                'id' => 4,
                'name' => 'Bolsa de Mão Personalizada',
                'description' => 'Charmosa e prática, com bordado exclusivo da corujinha estilosa e acabamento impecável.',
                'image' => 'assets/img/produtos/bolsa/bolsa_01.png',
                'features' => ['Bordado customizável', 'Estrutura firme', 'Zíper reforçado'],
                'cta' => 'Garanta a sua'
            ],
            [
                'id' => 5,
                'name' => 'Porta Cartão de Vacinas',
                'description' => 'Organização e delicadeza em um só produto, com bordado de abelhinha e espaço para documentos.',
                'image' => 'assets/img/produtos/carteiras/carteira_01.png',
                'features' => ['Bordado exclusivo', 'Estrutura firme', 'Fecho metálico dourado'],
                'cta' => 'Solicite o seu'
            ],
            [
                'id' => 6,
                'name' => 'Kit Maternidade Personalizado',
                'description' => 'Um conjunto completo, delicado e feito sob medida para tornar esse momento ainda mais especial!',
                'image' => 'assets/img/produtos/kits/kit_03.png',
                'features' => ['Bordados exclusivos', 'Materiais de alta qualidade', 'Delicadeza em cada detalhe'],
                'cta' => 'Solicite o seu'
            ]
        ];
    }
}
