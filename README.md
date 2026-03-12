<div align="center">
  <img src="https://media.giphy.com/media/Ll22OhMLAlVDb8UQWe/giphy.gif" width="120"/>
  <h1>📂 Sistema de CRUD básico</h1>
  <p>Todas as redes sociais e páginas das quais faço parte.</p>

  <a href="https://www.youtube.com/@ArchaniaSolum" target="_blank" rel="noopener noreferrer">
    <img src="https://img.shields.io/static/v1?message=Youtube&logo=youtube&label=&color=FF0000&logoColor=white&labelColor=&style=for-the-badge" height="35" alt="youtube logo"/>
  </a>
  <a href="https://www.instagram.com/webarchangelo/" target="_blank" rel="noopener noreferrer">
    <img src="https://img.shields.io/static/v1?message=Instagram&logo=instagram&label=&color=E4405F&logoColor=white&labelColor=&style=for-the-badge" height="35" alt="instagram logo"/>
  </a>
  <a href="https://www.twitch.tv/zudokan_original" target="_blank" rel="noopener noreferrer">
    <img src="https://img.shields.io/static/v1?message=Twitch&logo=twitch&label=&color=9146FF&logoColor=white&labelColor=&style=for-the-badge" height="35" alt="twitch logo"/>
  </a>
  <a href="https://www.linkedin.com/in/juan-lucas-archangelo-061035180/" target="_blank" rel="noopener noreferrer">
    <img src="https://img.shields.io/static/v1?message=LinkedIn&logo=linkedin&label=&color=0077B5&logoColor=white&labelColor=&style=for-the-badge" height="35" alt="linkedin logo"/>
  </a>
</div>

---

## 📖 Visão Geral

Este projeto tem como objetivo demonstrar uma fração das minhas habilidades em programação usando as linguagens citadas abaixo.  
Para facilitar a análise do teste, dentro da pasta @files disponibilizei uma collection do POSTMAN já com as rotas configuradas para teste da API.

Segue também documentação feita para caso haja dúvidas:  
https://documenter.getpostman.com/view/53124802/2sBXiesuH6#15086650-0a7c-4a15-af9d-513c7e62bae8

---

## 🎯 Objetivos

-   Gerenciar produtos e descrições.

## 🚀 Tecnologias Utilizadas

<div align="left">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" height="30" alt="Php logo"  />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" height="30" alt="Laravel logo"  />
  <img width="12" />
</div>

---

## 🚀 Funcionalidades

-   [ ] Cadastro e gerenciamento de produtos.

---

## 📦 Instalação

```bash
# Clone o repositório
git clone https://github.com/Juanlucasarchangelo/api-construp.git

# Acesse o diretório
cd api-construp

# Instale as dependências
composer install --ignore-platform-reqs
npm install --ignore-platform-reqs

# Configure o .env
cp .env.example .env
php artisan key:generate

# Crie uma variável dentro do .env
API_TOKEN='159357'

# Rode a migration junto com as seeders
php artisan migrate --seed

# Rode o serve para subir a aplicação
php artisan serve