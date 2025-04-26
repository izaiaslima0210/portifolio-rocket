<?php
$contatos = [
    ['icon' => 'linkedin', 'nome' => 'Linkedin', 'link' => 'https://linkedin.com/in/izaias-oliveira-de-lima-júnior-80a1b618b/', 'target' => '_blank'],
    ['icon' => 'instagram', 'nome' => 'Instagram', 'link' => 'https://instagram.com/izaias_junior__', 'target' => '_blank'],
    ['icon' => 'github', 'nome' => 'GitHub', 'link' => 'https://github.com/izaiaslima0210', 'target' => '_blank'],
    ['icon' => 'mail', 'nome' => 'E-mail', 'link' => 'mailto:jrportorico@email.com', 'target' => '_self'],
];
?>

<section class="bg-image bg-center bg-no-repeat w-full lg:min-h-screen lg:py-20 px-4 min-h-screen flex items-center justify-center" style="background-image: url('./img/bg.svg');">
    <div class="w-full max-w-md text-center text-white">
        <p class="text-sm text-red-400 font-medium mb-1">Contato</p>
        <h2 class="text-2xl sm:text-3xl font-bold mb-2">Gostou do meu trabalho?</h2>
        <p class="text-gray-400 text-sm mb-8">Entre em contato ou acompanhe as minhas redes sociais:</p>

        <div class="flex flex-col gap-4">
    <?php foreach ($contatos as $c): ?>
        <a href="<?= $c['link'] ?>" target="<?= $c['target'] ?>" class="bg-[#1f1f24] hover:bg-[#2a2a2e] transition duration-200 text-white flex items-center justify-between px-4 py-3 rounded-md shadow hover:shadow-lg">
            <div class="flex items-center gap-3">
                <img src="img/social/<?= strtolower($c['icon']) ?>.svg" alt="<?= $c['nome'] ?>" class="w-6 h-6">
                <span><?= $c['nome'] ?></span>
            </div>
            <i class="lucide-external-link"></i>
        </a>
    <?php endforeach; ?>
</div>

    </div>
</section>
