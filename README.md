# Full Pet


Este é um projeto foi originalmente desenvolvido durante o aprendizado no bootcamp da Recode, em 2020.

A ideia é a prática do PHP, criando um projeto mínimamente funcional.


No caso, foi realizado o desenvolvimento de uma plataforma de e-commerce para uma loja de produtos para animais de estimação.

---

## Descrição


O Full Pet é uma plataforma de e-commerce que permite aos usuários navegar por categorias de produtos, visualizar itens e (presumivelmente) adicioná-los a um carrinho de compras. O projeto utiliza PHP para a lógica do back-end, um banco de dados MySQL para armazenar informações de produtos e Docker para facilitar a configuração do ambiente de desenvolvimento.

---

## Feature 2026

- Adicionado stack para execução completa com docker
- Validação da funcionalidade
- Alguns pequenos ajustes

### OK, mas por que ?
- PHP não só uma linguagem de programação viva nos dias de hoje, como tem 
- performance excelente
- atualizações constantes
- e quantas vezes você ouviu falar que implantaram malware em pacotes php ? e no npm e pip ?

### E agora ?
Não pretendo migrar para php, apenas quero fazer parte das pessoas que reconhecem seu valor e não querem que ela morra.


---

## Como Executar o Projeto


Para executar este projeto, você precisará ter o Docker e o Docker Compose instalados em sua máquina.


1. **Clone o repositório:**


   ```bash

   git clone https://github.com/seu-usuario/full-pet-join.git

   ```


2. **Suba os contêineres do Docker:**


   Navegue até a pasta raiz do projeto e execute o seguinte comando:


   ```bash

   docker-compose up -d

   ```


   Isso irá construir e iniciar os contêineres para o servidor web e o banco de dados.


3. **Acesse a aplicação:**


   Abra seu navegador e acesse `http://localhost:8080`.


## Banco de Dados


O arquivo `full-pet-bd.sql` contém o esquema do banco de dados e os dados iniciais. Ao iniciar os contêineres do Docker, um banco de dados chamado `fullpet` é criado e o `full-pet-bd.sql` é importado automaticamente.


As credenciais do banco de dados são:


- **Usuário:** root

- **Senha:** root

- **Banco de Dados:** fullpet


## Tecnologias Utilizadas


- **Back-end:** PHP

- **Front-end:** HTML, CSS, JavaScript

- **Banco de Dados:** MySQL

- **Containerização:** Docker, Docker Compose