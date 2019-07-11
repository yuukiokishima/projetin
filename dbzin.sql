create table disciplina (
	id serial not null primary key,
	descricao varchar(255) not null
);

create table opcao (
	id serial not null primary key,
	descricao varchar(255) not null
);

create table prova (
	id serial not null primary key,
	descricao varchar(255) not null,
	status int default 0
);

create table questao (
	id serial not null primary key,
	descricao varchar(255) not null,
	tipo int not null,
	pontuacao float default 0,
	dificuldade int not null,
	tempo int default 0,
	disciplina int not null
);

create table resposta (
	id serial not null primary key,
	numerico int,
	texto varchar(255)
);

create table usuario (
	id serial not null primary key,
	rga varchar(255) not null,
	nome varchar(255) not null,
	senha varchar(255) not null,
	cpf varchar(255) not null,
	email varchar(255) not null,
	telefone varchar(255) not null,
	endereco varchar(255) not null,
	professor int default 0
);

create table aluno_prova (
	aluno_id int not null,
	prova_id int not null,
	primary key (aluno_id, prova_id)
);

create table aluno_resposta (
	aluno_id int not null,
	resposta_id int not null,
	primary key (aluno_id, resposta_id)
);

create table disciplina_professor (
	disciplina_id int not null,
	professor_id int not null,
	primary key (disciplina_id, professor_id)
);

create table disciplina_prova (
	disciplina_id int not null,
	prova_id int not null,
	primary key (disciplina_id, prova_id)
);

create table opcao_questao (
	opcao_id int not null,
	questao_id int not null,
	primary key (opcao_id, questao_id)
);

create table professor_prova (
	professor_id int not null,
	prova_id int not null,
	primary key (professor_id, prova_id)
);

create table prova_questao (
	prova_id int not null,
	questao_id int not null,
	primary key (prova_id, questao_id)
);

create table questao_resposta (
	questao_id int not null,
	resposta_id int not null,
	primary key (questao_id, resposta_id)
);

create table relacao_aluno_prova (
	aluno_id int not null,
	prova_id int not null,
	primary key (aluno_id, prova_id)
);


