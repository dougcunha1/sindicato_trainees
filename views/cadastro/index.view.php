<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main>
    <div class="mx-auto max-w-8xl py-6 sm:px-6 lg:px-8">
            <form action="/filiados" method="GET" class="mb-4">   
                    <label for="pesquisar_filiado_mes" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Pesquisar Filiado por Mês</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="pesquisar_filiado_mes" name="pesquisar_filiado_mes" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pesquisar Filiado por Mês...">
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pesquisar</button>
                    </div>  
                </form>
            <form action="/filiados" method="GET" class="mb-4">   
                <label for="pesquisar_filiado" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Pesquisar Filiado por Nome</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="pesquisar_filiado" name="pesquisar_filiado" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pesquisar Filiado por Nome...">
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pesquisar</button>
                </div>  
            </form>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Filiado
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Permissão
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nome
                            </th>
                            <th scope="col" class="px-6 py-3">
                                CPF
                            </th>
                            <th scope="col" class="px-6 py-3">
                                RG
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Data de Nascimento
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Idade
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Empresa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cargo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Situação
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telefone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Celular
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Dependentes
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <?php foreach ($filiados as $filiado) : ?>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= strtoupper($filiado['filiado_usuario']); ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?php if ($filiado['filiado_tipo_conta'] == 'A'): ?>
                                        <?= 'ADMINISTRADOR' ?>
                                    <?php elseif ($filiado['filiado_tipo_conta'] == 'U'): ?>
                                        <?= 'USUÁRIO' ?>
                                    <?php endif; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= strtoupper($filiado['filiado_nome']); ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $filiado['filiado_cpf']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $filiado['filiado_rg']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $filiado['filiado_data_nascimento']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $filiado['filiado_idade']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= strtoupper($filiado['filiado_empresa']); ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= strtoupper($filiado['filiado_cargo']); ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= strtoupper($filiado['filiado_situacao']); ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $filiado['filiado_telefone_residencial']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $filiado['filiado_celular']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="/dependentes" method="GET">
                                        <input type="hidden" name="filiado_id" value="<?= $filiado['filiado_id']; ?>">
                                        <button type="submit" class="font-medium text-blue-600 dark:text-purple-500 hover:underline">Visualizar</button>
                                        <td class="px-4 py-4">
                                            <a href="/edit?id=<?= $filiado['filiado_id'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                            <br>
                                            <a href="/delete?id=<?= $filiado['filiado_id'] ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remover</a>
                                        </td>
                                </td>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>

        <nav aria-label="Página de Navegação">
            <ul class="flex items-center justify-center space-x-1 h-12 text-lg">
                <li>
                <a href="/filiados?page=<?= $page >= 2 ? $page - 1 : $page ?>" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Anterior</span>
                    <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                </a>
                </li>
                    <?php for($page = 1; $page <= $totalPaginas; $page++): ?>
                        <li>
                            <a href="/filiados?page=<?= $page ?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?= $page ?></a>
                        </li>
                    <?php endfor; ?>
                <li>
                <a href="/filiados?page=<?= $_GET['page'] < $totalPaginas ? $_GET['page'] + 1 : $page - 1 ?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Próxima</span>
                    <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </a>
                </li>
            </ul>
        </nav>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
