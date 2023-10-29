<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main>
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                     alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Alterar Dados do Dependente</h2>
            </div>

            <form class="mt-8 space-y-6" action="/edit/dependente" method="POST">
                <input type="hidden" name="dependente_id" value="<?= $dependente['dependente_id']; ?>">
                <div class="space-y-4 rounded-md shadow-sm">
                    <div>
                        <label for="filiado_nome" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">Nome:</label>
                        <input id="dependente_nome" name="dependente_nome" type="text"
                               required
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Nome" value="<?= $dependente['dependente_nome']; ?>">
                    </div>

                    <div>
                        <label for="dependente_data_nascimento" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">Data de Nascimento:</label>
                        <input id="dependente_data_nascimento" name="dependente_data_nascimento" type="date"
                                required
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Data de Nascimento" value="<?= $dependente['dependente_data_nascimento']; ?>">
                    </div>

                    <div>
                        <label for="dependente_grau_parentesco" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-gray">Parentesco:</label>
                        <input id="dependente_grau_parentesco" name="dependente_grau_parentesco" type="text"
                               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="Cargo" value="<?= $dependente['dependente_grau_parentesco']; ?>">
                    </div>
                </div>

                <div>
                    <button type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        Atualizar
                    </button>
                </div>

                <!-- <ul>
                    <?php if (isset($errors['filiado_usuario'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['filiado_usuario'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['filiado_senha'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['filiado_senha'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['filiado_nome'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['filiado_nome'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['filiado_cpf'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['filiado_cpf'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['filiado_rg'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['filiado_rg'] ?></li>
                    <?php endif; ?>
                </ul> -->
            </form>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
