# Teste de desenvolvimento para pagina de checkout
- Autor: Hugo Cesar Alonso Generoso
# Dependências para executar o projeto
  - Certifique-se de que tem o xampp instalado. (7.3.0 / PHP 7.3.0) https://www.apachefriends.org/download.html
  - Certifique-se de que o composer está instalado. (https://getcomposer.org/download/)
  - Instalar o laravel globalmente no console com o comando ``` $ composer global require laravel/installer ```

# Instalando e executando o projeto
Abra o painel de controle do Xampp e ligue o Mysql e o Apache.
Crie um banco de dados vazio com o nome 'codechallengecheckout'
Acessar a pasta do projeto clonado e executar os comandos
```sh
$ composer update
$ php artisan migrate --seed
$ php artisan serve
```
O projeto já deverá estar sendo executado no endereço http://localhost:8000/.
Qualquer problema com o ambiente que estiver executando, por favor verifique se as variáveis dentro do arquivo .env estão de acordo com as suas configurações locais

**Obrigado ao pessoal da EPICS pela oportunidade :)**
