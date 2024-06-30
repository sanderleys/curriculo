# Gerador de Currículos

## Descrição do Projeto

O Gerador de Currículos é uma aplicação web que permite aos usuários criar currículos personalizados de maneira fácil e rápida. A aplicação coleta informações pessoais e profissionais do usuário, organiza esses dados e gera um currículo formatado que pode ser impresso ou salvo como PDF.

## Funcionalidades

- **Formulário de Dados Pessoais**: Os usuários podem inserir suas informações pessoais, incluindo nome, data de nascimento, e-mail, telefone, endereço, estado civil e objetivo profissional.
- **Resumo das Qualificações**: Campo para o usuário adicionar um resumo de suas qualificações.
- **Formação Acadêmica**: Campo para o usuário listar sua formação acadêmica.
- **Cursos Complementares**: Permite adicionar múltiplos cursos complementares.
- **Idiomas**: Permite adicionar múltiplos idiomas que o usuário conhece.
- **Experiência Profissional**: Permite adicionar múltiplas experiências profissionais, incluindo empresa, cargo, data de início, data de fim e principais funções.
- **Geração de Currículo**: O currículo é gerado em formato HTML e pode ser impresso diretamente ou salvo como PDF.
- **Campos Dinâmicos**: Os usuários podem adicionar múltiplos telefones, cursos, idiomas e experiências profissionais utilizando botões de adição.

## Tecnologias Utilizadas

- **Frontend**: HTML, CSS, Bootstrap, JavaScript, jQuery
- **Backend**: PHP
- **Servidor Local**: XAMPP
- **Controle de Versão**: Git

## Por que o projeto é útil?

- **Facilidade de Uso**: A interface amigável permite que qualquer pessoa, independentemente de sua habilidade técnica, possa criar um currículo profissional em poucos minutos.
- **Personalização**: O usuário pode adicionar múltiplas entradas para telefones, cursos, idiomas e experiências profissionais, garantindo que todas as informações relevantes sejam incluídas.
- **Automatização**: O cálculo automático da idade baseado na data de nascimento economiza tempo e minimiza erros.
- **Portabilidade**: O currículo gerado pode ser facilmente impresso ou salvo como PDF, facilitando o compartilhamento e a submissão para vagas de emprego.

## Como Executar o Projeto

1. **Clonar o Repositório**: Clone o repositório do GitHub para o seu ambiente local.
    ```bash
    git clone https://github.com/seu-usuario/gerador-curriculos.git
    ```

2. **Configurar o XAMPP**: Certifique-se de que o XAMPP está instalado e funcionando no seu sistema. Copie os arquivos do projeto para o diretório `htdocs` do XAMPP.

3. **Iniciar o Servidor**: Abra o painel de controle do XAMPP e inicie o servidor Apache.

4. **Acessar a Aplicação**: Abra um navegador web e acesse `http://localhost/curriculo/` para usar a aplicação.

## Estrutura do Projeto

- **curriculo/index.php**: Página principal com o formulário para inserção dos dados.
- **curriculo/gerar_curriculo.php**: Script PHP que processa os dados do formulário e gera o currículo.
- **curriculo/js/scripts.js**: Arquivo JavaScript que contém a lógica para adicionar campos dinamicamente e calcular a idade.
- **curriculo/css/styles.css**: Arquivo CSS que contém os estilos para melhorar a aparência do currículo gerado.


