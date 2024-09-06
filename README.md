# Gerenciador de Tarefas (To-Do List) 

Uma aplicação web simples para gerenciar uma lista de tarefas. Esta aplicação permite adicionar, visualizar, editar e excluir tarefas usando PHP e o PostgreSQL.

<p align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="Logo PHP" height="120" width="120"/>
  <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Postgresql_elephant.svg" alt="Logo PostgreSQL" width="120"/>
</p>

## Índice

- [Sobre o Projeto](#sobre-o-projeto)
- [Requisitos](#requisitos)
- [Instalação](#instalação)
- [Uso](#uso)
- [Estrutura do Projeto](#estrutura-do-projeto)

## Sobre o Projeto

O objetivo deste projeto é criar uma aplicação web básica para gerenciar uma lista de tarefas, seguindo os princípios de desenvolvimento limpo e organizado. A aplicação permite que os usuários:

- Adicionem novas tarefas com título e descrição.
- Visualizem todas as tarefas em uma lista.
- Editem o título e a descrição de uma tarefa existente.
- Excluam tarefas da lista.

## Requisitos

- PHP 8 ou superior
- PostgreSQL 16 ou superior

### Requisitos Funcionais

1. **Adicionar Tarefa:** Permite ao usuário adicionar uma nova tarefa com título e descrição.
2. **Visualizar Tarefas:** Permite ao usuário visualizar todas as tarefas em uma lista.
3. **Editar Tarefa:** Permite ao usuário editar o título e a descrição de uma tarefa existente.
4. **Excluir Tarefa:** Permite ao usuário excluir uma tarefa da lista.

### Requisitos Não Funcionais

1. **Interface Simples:** A interface deve ser simples e fácil de usar.
2. **Persistência de Dados:** As tarefas são armazenadas em um banco de dados.
3. **Código Limpo:** O código deve ser bem organizado e comentado.

## Prints da Aplicação
<img src="prints da aplicação/tela 1 - home.png" alt="Tela Principal 1" width="400"/>
<img src="prints da aplicação/tela 2 - home.png" alt="Tela Principal 2" width="400"/>
<img src="prints da aplicação/tela do postgres.png" alt="Tela do Banco de Dados" width="400"/>


## Instalação

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/DiegoRodrigues76/gerenciador-de-tarefas.git

## Uso

1. **Página Principal (index.php):** Exibe a lista de tarefas. Conecta-se ao banco de dados para buscar todas as tarefas e exibi-las em uma tabela com opções para editar e excluir.
2. **Adicionar Tarefa (add.php):** Formulário para adicionar uma nova tarefa. Ao submeter o formulário, a nova tarefa é inserida no banco de dados.
3. **Editar Tarefa (edit.php):** Formulário para editar uma tarefa existente. Ao submeter o formulário, a tarefa é atualizada no banco de dados.
4. **Atualizar Tarefa no BD (edit-progress.php):** Atualiza a tarefa no banco de dados ao submeter o formulário.
5. **Excluir Tarefa (delete.php):** Exclui a tarefa do banco de dados com base no ID fornecido.

## Estrutura do Projeto

- **index.php:** Página principal que exibe a lista de tarefas.
- **add.php:** Página para adicionar uma nova tarefa.
- **edit.php:** Página para editar uma tarefa existente.
- **edit-progress.php:** Atualiza a tarefa no banco de dados ao submeter o formulário.
- **delete.php:** Página para excluir uma tarefa.
- **db.php:** Arquivo de configuração do banco de dados.
