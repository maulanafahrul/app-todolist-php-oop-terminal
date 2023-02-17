<?php 

namespace Service {

    use Repository\TodoListRepository;

    interface TodoListService {

        function showTodoList(): void;

        function addTodoList(string $todo): void;

        function removeTodoList(int $number): void;
    }

    class TodoListServiceImpl implements TodoListService {

        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository)
        {
            return $this->todoListRepository;
        }

        function showTodoList(): void
        {
            
            echo "TODOLIST". PHP_EOL;
            $todolist = $this->todoListRepository->findAll();
            foreach($todolist as $number => $value){
                echo "$number. $value". PHP_EOL;
            }
        }

        function addTodoList(string $todo): void
        {

        }

        function removeTodoList(int $number): void
        {

        }
    }
}