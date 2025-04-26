<?php
$tags =  array("GitHub", "PHP", "HTML", "CSS", "JS");
$colors = ['green', 'purple', 'blue', 'red', 'yellow'];
?>

<section class="bg-image bg-center bg-no-repeat w-full lg:min-h-screen" style="background-image: url('./img/bg.svg');">
    <div class="flex items-center justify-center min-h-[90vh] px-4">
        <div class="w-full max-w-screen-lg text-center flex flex-col items-center justify-center">
            <img src="./img/avatar.svg" alt="Izaias Júnior" class="rounded-full w-32 h-32 mb-4 border-2 border-red-400 p-1">

            <div class="my-4">
                <span class="tracking-wider">
                    Hello World! Meu nome é <span class="text-red-400">Izaias Júnior</span> e sou
                </span>
                <h1 class="text-5xl font-bold text-white">Desenvolvedor PHP</h1>
            </div>

            <p class=" max-w-screen-md mt-2 hover:text-white shadow transform transition duration-200 ease-in-out ">
                Transformo necessidades em aplicações reais, envolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
            </p>

            <div class="flex flex-wrap gap-2 mt-6 justify-center">
                <?php foreach ($tags as $key => $tag):
                    $color = $colors[$key % count($colors)]; ?>
                    <span class="bg-<?= $color ?>-400 text-gray-800 hover:text-gray-900 rounded-lg px-2 py-1 font-semibold text-xs shadow transform transition duration-200 ease-in-out hover:scale-110">
                        <?= $tag ?>
                    </span>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>