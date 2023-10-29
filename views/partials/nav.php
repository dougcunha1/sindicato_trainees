<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                         alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <?php if (isset($_SESSION['user_tipo_conta']) && $_SESSION['user_tipo_conta'] == 'A' ??
                            false) : ?>
                            <a href="/register"
                               class="<?= urlIs('/register') ? 'bg-gray-900 text-white' : 'text-gray-300' ?>
                               hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm
                               font-medium">Registrar</a>
                            <a href="/filiados"
                               class="<?= urlIs('/filiados') ? 'bg-gray-900 text-white' : 'text-gray-300' ?>
                               hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm
                               font-medium">Filiados</a>
                        <?php else: ?>
                            <a href="/"
                               class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700
                           px-3 py-2 rounded-md text-sm font-medium">Página inicial</a>
                            <a href="/about"
                               class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300' ?>
                           hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sobre</a>
                            <a href="/contact"
                               class="<?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300' ?>
                               hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contato</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <?php if ($_SESSION['user'] ?? false) : ?>
                        <div class="ml-8">
                            <form method="POST" action="/filiado">
                                <a href="/filiado?id=<?= $_SESSION['user_id'] ?>" class="text-gray-300 text-white hover:bg-gray-700 hover:text-white px-3 py-2
                                    rounded-md text-sm font-medium">Meus Dados</a>
                            </form>
                        </div>

                        <div class="ml-8">
                            <form method="POST" action="/session">
                                <input type="hidden" name="_method" value="DELETE"/>

                                <button class="text-gray-300 text-white hover:bg-gray-700 hover:text-white px-3 py-2
                                rounded-md text-sm font-medium">Sair</button>
                            </form>
                        </div>
                    <?php else : ?>
                        <div class="ml-3">
                            <a href="/login"
                               class="<?= urlIs('/login') ? 'bg-gray-900 text-white' : 'text-gray-300' ?>
                               hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Entrar</a>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</nav>