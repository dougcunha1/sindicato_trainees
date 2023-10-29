<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main>
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                     alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Meus Dados</h2>
            </div>

            <form class="mt-8 space-y-6" action="/edit" method="POST">
                <div class="space-y-4 rounded-md shadow-sm">
                    <div>
                        <label for="filiado_usuario" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">Endereço de email:</label>
                        <input id="filiado_usuario" name="filiado_usuario" type="email" disabled
                               class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="E-mail" value="<?= $filiado['filiado_usuario']; ?>">
                    </div>

                    <?php if($filiado['filiado_tipo_conta'] == 'A'): ?>
                        <label for="filiado_tipo_conta" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">Tipo de Conta:</label>
                        <select id="filiado_tipo_conta" name="filiado_tipo_conta" class="relative block w-full appearance-none rounded-none
                            rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" disabled>
                            <?php if ($filiado['filiado_tipo_conta'] == 'A'): ?>
                                <option value="A">Administrador</option>
                                <option value="U">Usuário</option>
                            <?php endif; ?>
                    </select>
                    <?php endif; ?>

                    <div>
                        <label for="filiado_nome" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">Nome:</label>
                        <input id="filiado_nome" name="filiado_nome" type="text"
                               disabled
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Nome" value="<?= $filiado['filiado_nome']; ?>">
                    </div>

                    <div>
                        <label for="filiado_cpf" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">CPF:</label>
                        <input id="filiado_cpf" name="filiado_cpf" type="text"  disabled
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="CPF" value="<?= $filiado['filiado_cpf']; ?>">
                    </div>

                    <div>
                        <label for="filiado_rg" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">RG:</label>
                        <input id="filiado_rg" name="filiado_rg" type="text"
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="RG" value="<?= $filiado['filiado_rg']; ?>" disabled>
                    </div>

                    <div>
                        <label for="filiado_data_nascimento" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">Data de Nascimento:</label>
                        <input id="filiado_data_nascimento" name="filiado_data_nascimento" type="date"
                                disabled
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Data de Nascimento" value="<?= $filiado['filiado_data_nascimento']; ?>">
                    </div>

                    <div>
                        <label for="filiado_empresa" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">Empresa:</label>
                        <input id="filiado_empresa" name="filiado_empresa" type="text"
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Empresa" value="<?= $filiado['filiado_empresa']; ?>" disabled>
                    </div>

                    <div>
                        <label for="filiado_cargo" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">Cargo:</label>
                        <input id="filiado_cargo" name="filiado_cargo" type="text"
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Cargo" value="<?= $filiado['filiado_cargo']; ?>" disabled>
                    </div>


                    <div>
                        <label for="filiado_situacao" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">Situação:</label>
                        <select id="filiado_situacao" name="filiado_situacao" class="relative block w-full appearance-none rounded-none
                            rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" disabled>
                            <?php if ($filiado['filiado_situacao'] == 'Ativo'): ?>
                                <option value="Ativo">Ativo</option>
                                <option value="Aposentado">Aposentado</option>
                                <option value="Licenciado">Licenciado</option>
                            <?php elseif($filiado['filiado_situacao'] == 'Aposentado'): ?>
                                <option value="Aposentado">Aposentado</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Licenciado">Licenciado</option>
                            <?php elseif($filiado['filiado_situacao'] == 'Licenciado'): ?>
                                <option value="Licenciado">Licenciado</option>
                                <option value="Aposentado">Aposentado</option>
                                <option value="Ativo">Ativo</option>
                            <?php else: ?>
                                <option selected>Selecionar</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Aposentado">Aposentado</option>
                                <option value="Licenciado">Licenciado</option>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div>
                        <label for="filiado_telefone_residencial" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">Telefone:</label>
                        <input id="filiado_telefone_residencial" name="filiado_telefone_residencial" type="text"
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Telefone" value="<?= $filiado['filiado_telefone_residencial']; ?>" disabled>
                    </div>

                    <div>
                        <label for="filiado_celular" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">Celular:</label>
                        <input id="filiado_celular" name="filiado_celular" type="text"
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Celular" value="<?= $filiado['filiado_celular']; ?>" disabled>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
