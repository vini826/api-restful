<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# API de Gerenciamento de Itens

Esta API foi desenvolvida com Laravel e fornece endpoints para gerenciar itens. 

## Tabela de Conteúdos

- [Sobre](#sobre)
- [Instalação](#instalacao)
- [Uso](#uso)
- [Contribuição](#contribuicao)
- [Licença](#licenca)

## Sobre

Esta é uma API RESTful para gerenciar itens em um sistema. Ela permite a criação, leitura, atualização e exclusão de itens.

## Instalação

Para instalar e configurar o projeto, siga estes passos:

1. Clone o repositório:
    ```bash
    git clone https://github.com/usuario/nome-do-repositorio.git
    ```

2. Navegue para o diretório do projeto:
    ```bash
    cd nome-do-repositorio
    ```

3. Instale as dependências:
    ```bash
    composer install
    ```

4. Crie um arquivo `.env` baseado no arquivo `.env.example`:
    ```bash
    cp .env.example .env
    ```

5. Gere uma chave de aplicação:
    ```bash
    php artisan key:generate
    ```

6. Configure o banco de dados no arquivo `.env`.

7. Execute as migrations:
    ```bash
    php artisan migrate
    ```

8. (Opcional) Popule o banco de dados com dados de exemplo:
    ```bash
    php artisan db:seed
    ```

## Uso

A API oferece os seguintes endpoints:

- **Listar itens**
    - **Método:** GET
    - **Endpoint:** `/api/items`
    - **Resposta:** JSON com a lista de itens.

- **Criar um item**
    - **Método:** POST
    - **Endpoint:** `/api/items`
    - **Corpo da Requisição:** 
        ```json
        {
          "name": "Nome do Item",
          "description": "Descrição do Item"
        }
        ```
    - **Resposta:** JSON com o item criado.

- **Buscar um item por ID**
    - **Método:** GET
    - **Endpoint:** `/api/items/{id}`
    - **Resposta:** JSON com os detalhes do item.

- **Atualizar um item**
    - **Método:** PUT/PATCH
    - **Endpoint:** `/api/items/{id}`
    - **Corpo da Requisição:** 
        ```json
        {
          "name": "Nome Atualizado",
          "description": "Descrição Atualizada"
        }
        ```
    - **Resposta:** JSON com o item atualizado.

- **Deletar um item**
    - **Método:** DELETE
    - **Endpoint:** `/api/items/{id}`
    - **Resposta:** Mensagem de confirmação.

## Contribuição

Contribuições são bem-vindas!

Para reportar bugs ou sugerir melhorias, abra uma issue no GitHub.


