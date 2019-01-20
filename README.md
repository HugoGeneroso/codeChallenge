# Teste de desenvolvimento para pagina de checkout
- Autor: Hugo Cesar Alonso Generoso
# Dependências para executar o projeto
  - Certifique-se de que tem o xampp instalado. (7.3.0 / PHP 7.3.0) https://www.apachefriends.org/download.html
  - Certifique-se de que o composer está instalado. (https://getcomposer.org/download/)
  - Instalar o laravel globalmente no console com o comando ``` $ composer global require laravel/installer ```

# Instalando e executando o projeto
Abra o painel de controle do Xampp e ligue o Mysql e o Apache.
Acessar a pasta do projeto clonado e executar os comandos
```sh
$ composer update
$ php artisan migrate --seed
$ php artisan
```
O projeto já deverá estar sendo executado no endereço http://localhost:8000/

**Obrigado ao pessoal da EPICS pela oportunidade :)**