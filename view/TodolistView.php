<?php 

namespace View {
    use Service\TodolistService;
    use Helper\InputHelper;
    
    class TodolistView {

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            return $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            while(true) {
                $this->todolistService->showTodolist();
        
                echo "MENU PILIHAN" . PHP_EOL;
                echo "1. menambah todo" . PHP_EOL;
                echo "2. menghapus todo" . PHP_EOL;
                echo "x. keluar" . PHP_EOL;
        
                $pilihan = strtolower(InputHelper::input("pilih ")); 
        
                if($pilihan == "1") {
                    $this->addTodolist();
                }else if($pilihan == "2") {
                    $this->removeTodolist();
                }else if($pilihan == "x") {
                    break;
                }else {
                    echo "Pilihan yang anda masukan tidak dapat dimengerti" . PHP_EOL;
                }
            }
        
            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }

        function addTodolist(): void
        {
            echo "MENAMBAHKAN TODOLIST" . PHP_EOL;

            $todo = InputHelper::input("Todo (Masukan x jika ingin membatalkan) ");

            if ($todo == "x"|| $todo == "X") {
                echo "Batal memasukan todo" . PHP_EOL;
            }else {
                $this->todolistService->addTodoList($todo);
            }
        }

        function removeTodolist(): void 
        {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Masukan nomor(Masukan x jika ingin membatalkan");

            if($pilihan == "x" || $pilihan == "X") {
                echo "Batal menghapus todo" . PHP_EOL;
            }else {
                $this->todolistService->removeTodoList($pilihan);
            }
        }
    }
}