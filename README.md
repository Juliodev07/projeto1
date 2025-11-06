# projeto1


comandos mysql para produtos

CREATE TABLE produtos(
id int AUTO_IMCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
preco DECIMA(10,2) NOT NULL
);

para cadastrar o produto, excluir ou alterar, entre no painel administrativo: http://localhost/projeto1/admin/;
para ver os produtos cadastrados entre, clique em produtos : http://localhost/projeto1/?pg=produtos;
