<?php
session_start();
include('../include/include.php');
$sqlentry = mysqli_query($conn, "SELECT * FROM users WHERE idUser = " . $_SESSION['idUser'] . " AND isCargo = 'admin'");
if (mysqli_num_rows($sqlentry) == 0) {
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EEEPBooks Dashboard - Livro</title>
  <link rel="stylesheet" href="../assets/css/style.css">

  <script src="./assets/js/init-alpine.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="./assets/js/init-alpine.js"></script>

</head>

<body>

  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="../index.php">
          EEEPBooks
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">

            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
              href="index.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
              </svg>
              <span class="ml-4">Dashboard</span>
            </a>
          </li>
        </ul>
        <ul>

          <li class="relative px-6 py-3">
            <span class="absolute inset-y-0 left-0 w-1 bg-red-600 rounded-tr-lg rounded-br-lg"
              aria-hidden="true"></span>
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="CadastrarLivro.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                </path>
              </svg>
              <span class="ml-4">Livro</span>
            </a>
          </li>

          <li class="relative px-6 py-3">

            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="CadastrarCategoria.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                </path>
              </svg>
              <span class="ml-4">Categoria</span>
            </a>
          </li>

          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="AlunosPendente.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
              </svg>
              <span class="ml-4">Alunos Pendente</span>
            </a>
          </li>

        </ul>

      </div>
    </aside>
    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
      x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
      x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
    <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
      x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
      x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
      @keydown.escape="closeSideMenu">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="../index.php">
          EEEPBooks
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">

            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
              href="index.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
              </svg>
              <span class="ml-4">Dashboard</span>
            </a>
          </li>
        </ul>
        <ul>
          <li class="relative px-6 py-3">

            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="AlunosPenetes.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                </path>
              </svg>
              <span class="ml-4">AlunosPendentes</span>
            </a>
          </li>


          <li class="relative px-6 py-3">
            <span class="absolute inset-y-0 left-0 w-1 bg-red-600 rounded-tr-lg rounded-br-lg"
              aria-hidden="true"></span>
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="CadastrarLivro.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
              </svg>
              <span class="ml-4">Livro</span>
            </a>
          </li>

          <li class="relative px-6 py-3">
            <span class="absolute inset-y-0 left-0 w-1 bg-red-600 rounded-tr-lg rounded-br-lg"
              aria-hidden="true"></span>
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
              href="CadastrarCategoria.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
              </svg>
              <span class="ml-4">Categoria</span>
            </a>
          </li>
        </ul>

      </div>
    </aside>
    <div class="flex flex-col flex-1">
      <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
        <div class="container flex items-center justify-between h-full px-6 mx-auto text-red-600 dark:text-red-300">
          <!-- Mobile hamburger -->
          <button class="p-1 -ml-1 mr-5 rounded-md md:hidden focus:outline-none focus:shadow-outline-red"
            @click="toggleSideMenu" aria-label="Menu">
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>

        </div>
      </header>
      <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Livro
          </h2>
          <!-- CTA -->

          <div class="livro px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form action="">
              <div class="errortxt"></div>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Titulo do Livro</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Harry Potter..." name="titulo" />
              </label>
              <br>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Sinopse do Livro</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Sinopse......" name="sinopse" />
              </label>
              <br>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Quantidade do Livro</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Quantidade......" name="quantidade" type="number" />
              </label>
              <br>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Categoria
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
                  name="categoria">
                  <?php

                  $sql = mysqli_query($conn, "SELECT * FROM categoria");
                  while ($row = mysqli_fetch_assoc($sql)) {
                    echo "<option value='" . $row['idCategoria'] . "'>" . $row['titulo'] . "</option>";
                  }
                  ?>
                </select>
              </label>
              <br>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Image do Livro</span>

                <div class="input-file">
                  <div class="button-wrapper">
                    <span
                      class="label block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                      style="background: #e02424; border-radius: 8px; border: none;">
                      Capa do Livro
                    </span>
                    <input type="file" name="image" id="upload" class="upload-box " placeholder="Upload File">
                  </div>
                  <div class="text-input">
                    <span class="text-gray-700 dark:text-gray-400">Mande no maximo 10 mb, sendo jpg ou png</span>
                  </div>
                </div>
                <span class="text-gray-700 dark:text-gray-400">Dica: Coloque uma foto qualidade</span>
              </label>
              <br>

              <button
                class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                Cadastrar
              </button>

          </div>
          </form>
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Titulo</th>
                    <th class="px-4 py-3">Categoria</th>
                    <th class="px-4 py-3">Sinopse</th>
                    <th class="px-4 py-3">Quantidade</th>
                    <th class="px-4 py-3">Livro Criado</th>
                    <th class="px-4 py-3">Ações</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  <?php
                  $sql = mysqli_query($conn, "SELECT * FROM livros");

                  while ($row = mysqli_fetch_assoc($sql)) {
                    $idCategoria = $row['FK_idCategoria'];
                    $sqlcategoria = mysqli_query($conn, "SELECT * FROM categoria WHERE idCategoria = '$idCategoria'");
                    $row02 = mysqli_fetch_assoc($sqlcategoria);
                    $result = $row['sinopse'];
                    (strlen($result) > 28) ? $msg = substr($result, 0, 28) . '...' : $msg = $result;
                    echo "
                    <tr class='text-gray-700 dark:text-gray-400'>
                      <td class='px-4 py-3'>
                        <div class='flex items-center text-sm'>
                          <!-- Avatar with inset shadow -->
                          <div
                            class='relative hidden w-8 h-8 mr-3 rounded-full md:block'
                          >
                          <img
                              class='object-cover w-full h-full rounded-full'
                              src='images-livros/" . $row['img'] . "'
                              alt='" . $row['img'] . "'
                              loading='lazy'
                            />
                            <div
                              class='absolute inset-0 rounded-full shadow-inner'
                              aria-hidden='true'
                            ></div>
                          </div>
                          <div>
                            <p class='font-semibold'>" . $row['titulo'] . "</p>
                          </div>
                        </div>
                      </td>

                      <td class='px-4 py-3 text-xs'>
                      <span
                        class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'
                      >
                      " . $row02['titulo'] . "
                      </span>
                    </td>
                      <td class='px-4 py-3 text-sm'>
                      " . $result . "
                      </td>
                      
                      <td class='px-4 py-3 text-xs'>
                      <span
                        class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'
                      >
                      Quantidade de livros: " . $row['estoque'] . "
                      </span>
                    </td>

                      <td class='px-4 py-3 text-sm'>
                      " . $row['datac'] . "
                      </td>
                     
                      <td class='px-4 py-3'>
                        <div class='flex items-center space-x-4 text-sm'>
                        <a href='action/livro/edit.php?id=" . $row['idLivro'] . "'>
                        <button
                            class='flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray'
                            aria-label='Edit'
                          >
                            <svg
                              class='w-5 h-5'
                              aria-hidden='true'
                              fill='currentColor'
                              viewBox='0 0 20 20'
                            >
                              <path
                                d='M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z'
                              ></path>
                            </svg>
                          </button>

                          <a href='action/livro/image.php?id=" . $row['idLivro'] . "'>
                          <button
                            class='flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray'
                            aria-label='Delete'
                          >
                          <svg 
                          xmlns='http://www.w3.org/2000/svg' 
                          width='16' 
                          height='16' 
                          fill='currentColor' 
                          class='bi bi-image' 
                          viewBox='0 0 16 16'>

                          <path d='M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z'/>
                          <path d='M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 
                          0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 
                          0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z'/>
                        </svg>
                          </button>
                          </a>
                          <a href='action/livro/remove.php?id=" . $row['idLivro'] . "'>
                          <button
                            class='flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray'
                            aria-label='Delete'
                          >
                            <svg
                              class='w-5 h-5'
                              aria-hidden='true'
                              fill='currentColor'
                              viewBox='0 0 20 20'
                            >
                              <path
                                fill-rule='evenodd'
                                d='M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z'
                                clip-rule='evenodd'
                              ></path>
                            </svg>
                          </button>
                          </a>
                        </div>
                      </td>
                    </tr>
                    ";
                  }
                  ?>
      </main>



    </div>
  </div>

  <script src="assets/js/livro.js"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load("jquery", "1.4.2");
  </script>


</body>

</html>