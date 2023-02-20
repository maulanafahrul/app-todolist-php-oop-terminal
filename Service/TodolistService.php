<?php 

namespace Service {

    use Entity\Todolist;
    use Repository\TodolistRepository;

    interface TodolistService {

        function showTodoList(): void;

        function addTodoList(string $todo): void;

        function removeTodoList(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService {

        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            return $this->todolistRepository = $todolistRepository;
        }

        function showTodolist(): void
        {
            
            echo "TODOLIST". PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach($todolist as $number => $value){
                echo "$number. ". $value->getTodo(). PHP_EOL;
            }
        }

        function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
            echo "Sukses menambah TODOLIST" . PHP_EOL;
        }

        function removeTodolist(int $number): void
        {
            if($this->todolistRepository->remove($number)){
                echo "Berhasil menghapus todo". PHP_EOL;
            }else{
                echo "Gagal menghapus todo". PHP_EOL;
            }
        }
    }
}