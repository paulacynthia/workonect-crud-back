<p align="center"><img src="https://i.imgur.com/FHSPq78.png" width="300"></p><br>


<h1> Workonect</h1> 
<p>É uma empresa voltada para a desburocratização do empreendedorismo no Brasil.</p>  
<p>Uma plataforma que, através da rede Block Chain, facilita a aquisição de Endereço Fiscal no Brasil todo em menos de 1h sem sair de casa.</p>

<br>

<h1> Informações:</h1>

Este projeto foi desenvolvido com o objetivo de cumprir o desafio proposto na entrevista da empresa Workonect, o qual solicitava a criação de um CRUD de usuários utilizando o framework Laravel.

<br>

<h1>Pré-requisitos:</h1>
<p>Clique nos links para ter acesso as documentações:</p>

|Tecnologias Utilizadas e suas Versões:|
|:------:|
|[PHP](https://prototype.php.net/docs.php) >= 8.0.6|
|[Laravel](https://laravel.com/docs/8.x) >= 4.2.6|
|[XAMPP](https://www.apachefriends.org/docs/) >= 8.0.6|
|[Composer](https://getcomposer.org/doc/) >= 2.0.14|
|[Cmder](https://cmder.net/) >= 1.3.18.1106|
<p>Obs: O Cmder é interessante para os usuários do Sistema Operacional Windows. Linux e Mac não precisam porque o sistema deles é baseado em UNIX.</p>

<br>

<h1>Projeto:</h1>

1 - Primeiramente, clone o repositório: 
```bash
$ git clone https://github.com/paulacynthia/workonect-crud-back.git
```

2 - Na pasta do projeto faça a cópia do arquivo `.env.example` e renomeie-o para `.env`
``` bash
$ cp .env.example .env
```

3 - No arquivo .env configure as variáveis de ambiente da aplicação com suas informações:
``` env
DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=crud

DB_USERNAME=root

DB_PASSWORD=
```

4 - Execute o comando abaixo para obter os pacotes necessários para a inicialização do projeto:
``` bash
$ composer install
```

5 - Para gerar a chave da aplicação:
``` bash
$ php artisan key:generate
```

6 - Crie o Banco de Dados no phpMyAdmin 
``` 
CREATE DATABASE crud;
```
<p>Obs: O nome do Banco de Dados deve ser referenciado no arquivo .env nas variáveis de ambiente.</p>

7 - Suba as Migrations para o Banco de Dados
``` bash 
$ php artisan migrate 
```
<p> Obs: Se você fizer a adição do parâmetro ` --seed` você irá fazer o povoamento do banco de dados com informações.

8 - Inicialização do servidor localmente: 
``` bash
$ php artisan serve
```
    
9 - Para ver se está funcionando, abra seu navegador e acesse: `http://127.0.0.1:8000` ou também: `http://localhost:8000` 
  
<br>
    
<h2>Deploy:</h2>
<p>The Laravel by default uses the MySQL, if you want deploy in Heroku, you have to change to PostgreSQL. Basta fazer a alteração no arquivo .env </p>

<a href="https://crud-workonect.herokuapp.com/api/users"><img src="https://img.shields.io/static/v1?label=CRUD&message=Heroku&color=52007d&style=for-the-badge&logo=Heroku"/></a>

<br>

<h1>Informações sobre a API:</h1>
<p>Os Endpoints suportados pela API são:</p>


`POST`
|Endpoints      | Descrição                       
|:------|:------|
|`/api/users`   | Realiza o registro de um novo usuário.

`GET`
|Endpoints      | Descrição 
|:------|:------|
|`/api/users`   | Retorna as informações de todos os usuários.
|`/api/users/{id}`| Retorna as informações de um usuário específico.

`PUT`
|Endpoints      | Descrição
|:------|:------| 
|`/api/users/{id}`| Atualiza informações específicas. 

`DELETE`
|Endpoints      | Descrição
|:------|:------|
|`/api/users/{id}`| Apaga informações específicas. 

<br>

<h1>Demonstração da aplicação:</h1>
<p>Utilizando o Insomnia:</p>

<br/>

<p>Criação de um usuário através do método POST:</p>
<img src="./assets/create.png"/>

<br/><br/>

<p>Visualização de todos os usuários criados através do método GET:</p>
<img src="./assets/read.png"/>

<br/><br/>

<p>Visualização de um usuário específico através do {id}:</p>
<img src="./assets/read_esp.png"/>

<br/><br/>

<p>Atualização de um usuário específico por meio do {id} através do método PUT:</p>
<img src="./assets/update.png"/>

<br/><br/>

<p>Remoção de um usuário específico por meio do {id} através do método DELETE:</p>
<img src="./assets/delete.png"/>
  
<h1>Features</h1>

- [x] Criação de usuário (Create);
- [x] Visualização de usuários ou usuário específico (Read);
- [x] Atualização de um usuário específico (Update);
- [x] Remoção de um usuário específico (Delete).

<h4 align="center">
    Desafio: Concluído! :heavy_check_mark:
</h4>
