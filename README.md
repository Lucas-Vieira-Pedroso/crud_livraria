# crud_livraria

RF1: Cadastrar Livro: o sistema deve permitir cadastrar livros informando titulo, autor e ano de publicação;
RF2: Listar Livros: o sistema deve apresentar todos os livros cadastrados;
RF3: Editar Livros: o sistema deve permitir a alteração de informações de livros já cadastrados;
RF4: Excluir Livros: o sistema deve permitir a exclusão de informações de livros já cadastrados;

(1/2) RNF1: Validação dos Campos: O sistema não deve permitir o cadastro de livros com titulo, autor ou ano vazios.

Prepared Statement

O preparedStatement manda modelos pré compilados para o Sql, ele separa o Sql dos códigos enviados, ele é usado para repetir um mesmo comando mais de uma vez.
Ele é considerado boa prática por separar o código sql dos dados enviados, ele impede sql injection.

Sql injection: A injeção de Structured Query Language (SQL)* é uma técnica de injeção de código usada para modificar ou recuperar dados de bancos de dados SQL. Ao inserir instruções SQL especializadas em um campo de entrada, um invasor pode executar comandos que permitem a recuperação de dados do banco de dados, a destruição de dados sensíveis ou outros comportamentos manipuladores. 

Preparação: Um modelo de consulta SQL com marcadores de posição é enviado ao servidor. Os valores dos dados não são enviados. 

Executar: Posteriormente, o aplicativo associa os valores aos parâmetros e o banco de dados executa a consulta. O aplicativo pode executar a consulta quantas vezes quiser, com valores diferentes.


A operação UPDATE do CRUD é vulnerável a ataques de SQL Injection quando implementada por meio de concatenação direta de strings. Para modificá-la e utilizar Prepared Statements, a lógica de montagem da consulta é separada do envio dos dados fornecidos pelo usuário. 
