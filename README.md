<h1 align="center">
    Agenda Aí
</h1>

<h4 align="center"> 
	AgendaAí 1.0
</h4>

<p align="center">
  <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/HerikCosmo/agenda-ai?color=%2304D361">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/HerikCosmo/agenda-ai">

  <a href="https://github.com/HerikCosmo/agenda-ai/commits/master">
    <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/HerikCosmo/agenda-ai">
  </a>

  <img alt="License" src="https://img.shields.io/badge/license-MIT-brightgreen">

</p>


## 💻 Sobre o projeto

AgendaAí - é uma simples agenda capaz de registrar o nome, email e o telefone de seus contatos favoritos.

Projeto desenvolvido com PHP, utilizando a estrutura MVC.

## 🎨 Layout


### Web

<p align="center" style="display: flex; align-items: flex-start; justify-content: space-around;">
  <img alt="AgendaAiWeb" title="#AgendaAiWeb" src="./assets/web.png" width="400px">
  <img alt="AgendaAiLogin" title="#AgendaAiLogin" src="./assets/login.png" width="400px">
</p>

### Mobile

<p align="center" style="display: flex; align-items: flex-start; justify-content: center;">
  <img alt="AgendaAiMobile" title="#AgendaAiMobile" src="./assets/mobile.png" width="200px">
</p>

## 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [PHP][php]
- [Composer][composer]
- [Bootstrap][bootstrap]


## 🚀 Como executar o projeto

### Pré-requisitos
- GIT instalado
- PHP 7.4.27 instalado
- Composer instalado

### Baixando o repositório

```bash
# Clone este repositório
$ git clone https://github.com/HerikCosmo/agenda-ai

# Acesse a pasta do projeto no terminal/cmd
$ cd agenda-ai

# Instale as dependências
$ composer i

```

### Carregando as variáveis de ambiente

- Crie um arquivo `.env` a partir do arquivo `.env.example`
- Insira as informações sensíveis

### Criando o Banco de dados

- Crie um banco de dados com o nome escolhido. Por padrão: `agenda_contatos`
- Execute a query disponível em `query.sql`

### Rodando a aplicação

```bash
# Execute a aplicação
$ php -S localhost:8000 -t public

# O servidor inciará na porta:8000 - acesse http://localhost:8000
```


## 📝 Licença

Este projeto esta sobe a licença MIT.

Feito por [Herik Cosmo](https://www.linkedin.com/in/herik-martins-3194b4208/)

README.md baseado em: [Ecoleta](https://github.com/tgmarinho/Ecoleta/blob/master/README.md)

[php]: https://www.php.net/
[composer]: https://getcomposer.org/
[bootstrap]: https://getbootstrap.com/
