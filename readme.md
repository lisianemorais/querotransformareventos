
# Projeto Quero Transformar Eventos

Foi desenvolvido um sistema de vendas Ingressos
 - Laravel
 - Mysql

O usuário pode:
-   Visualizar todos, olhar a descrição de um ingresso específico e realizar a compra.
    
# [](https://github.com/lisianemorais/querotransformareventos)Passo a Passo

-   Clone este repositório para a pasta do seu servidor web :
    
    -   https://github.com/lisianemorais/querotransformareventos
-   No terminal, acesse o diretório recém criado e execute o comando "composer install" para que o composer possa baixar e instalar todas as dependências do projeto.
    
    Exemplo: cd /var/www/html/querotransformareventos sudo composer install
    
-   Após a instalação das dependências, crie o arquivo .env na raiz do projeto e o configure com os dados do ambiente de produção ( Banco de dados e etc... ).
    
-   Agora temos que migrar as tabelas do banco de dados. No terminal, acesse o diretório da aplicação e rode o comando: php artisan migrate .

- Em seguida rodar as seeds: php artisan db:seed
- Não esqueça de das as permissões necessárias... 
