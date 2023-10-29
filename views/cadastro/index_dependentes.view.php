<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main>
    <div class="mx-auto max-w-8xl py-6 sm:px-6 lg:px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Dependente
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Data de Nascimento
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Grau de Parentesco
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ações
                    </th>
                </tr>
                </thead>
                <?php foreach ($dependentes as $dependente) : ?>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= strtoupper($dependente['dependente_nome']); ?>
                            </th>
                            <td class="px-6 py-4">
                                <?= $dependente['dependente_data_nascimento']; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= strtoupper($dependente['dependente_grau_parentesco']); ?>
                            </td>
                            
                            <td class="px-6 py-4">
                                <form action="/dependentes" method="GET">
                                    <a href="/edit/dependente?id=<?= $dependente['dependente_id']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                    <br>
                                    <a href="/delete/dependente?id=<?= $dependente['dependente_id']; ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remover</a>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
