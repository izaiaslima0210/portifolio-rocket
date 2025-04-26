<?php
$projects = [
    [
        'title' => 'Travelgram',
        'desc' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
        'image' => './img/projects/travelgram.webp',
        'tags' => ['PHP', 'CSS', 'HTML', 'JavaScript'],
    ],
    [
        'title' => 'Página de receita',
        'desc' => 'Página com o passo a passo de uma receita para cupcakes',
        'image' => '',
        'tags' => ['PHP', 'CSS', 'HTML', 'JavaScript'],
    ],
    [
        'title' => 'Tech News',
        'desc' => 'Homepage de um portal de notícias sobre a área de tecnologia',
        'image' => '',
        'tags' => ['PHP', 'CSS', 'HTML'],
    ],
    [
        'title' => 'Refund',
        'desc' => 'Um sistema para pedido e acompanhamento de reembolso',
        'image' => '',
        'tags' => ['PHP', 'CSS', 'HTML', 'JavaScript'],
    ],
    [
        'title' => 'Página de turismo',
        'desc' => 'Página com as principais informações para quem quer viajar para Busan',
        'image' => '',
        'tags' => ['PHP', 'CSS', 'HTML'],
    ],
    [
        'title' => 'Zingen',
        'desc' => 'Landing Page completa e responsiva de um aplicativo de Karaokê',
        'image' => '',
        'tags' => ['PHP', 'CSS', 'HTML', 'JavaScript'],
    ]
];
?>

<section class="bg-[#16181D] py-12 px-4 max-w-screen-xl mx-auto lg:min-h-screen">
    <h3 class="text-center text-sm text-red-400 font-medium mb-1">Meu trabalho</h3>
    <h2 class="text-center text-2xl sm:text-3xl font-bold text-white mb-10">Veja os projetos em destaque</h2>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 max-w-screen-lg mx-auto">
        <?php foreach ($projects as $project): ?>
            <div class="bg-[#1f1f24] flex rounded-lg overflow-hidden shadow-md hover:shadow-lg hover:scale-102 transform transition duration-300 ease-in-out py-3 px-2">
            <img src="<?= !empty($project['image']) ? $project['image'] : './img/avatar.svg' ?>" 
     alt="<?= !empty($project['title']) ? $project['title'] : 'Imagem do projeto' ?>" 
     class="w-full h-48 object-cover rounded-md">

                <div class="p-4 text-white flex flex-col justify-between">
                    <h3 class="text-lg font-semibold mb-1"><?= $project['title'] ?></h3>
                    <p class="text-sm text-gray-300 mb-3"><?= $project['desc'] ?></p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($project['tags'] as $tag): ?>
                            <?php
                                $colors = [
                                    'PHP' => 'bg-purple-500',
                                    'CSS' => 'bg-blue-400',
                                    'HTML' => 'bg-pink-500',
                                    'JavaScript' => 'bg-yellow-400 text-black',
                                ];
                                $colorClass = $colors[$tag] ?? 'bg-gray-500';
                            ?>
                            <span class="px-2 py-1 rounded-md text-xs font-semibold <?= $colorClass ?>"><?= $tag ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
