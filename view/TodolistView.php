<?php 

namespace TodoListView {
    use Service\TodolistService;
    use Helper\InputHelper;
    class TodoListView {

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

        }

        function removeTodolist(): void 
        {
            
        }
    }
}