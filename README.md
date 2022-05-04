<p align="center">
  <img alt="logo" width="100%" title="logo" src=".github/images/capa.png" />
</p>

<h1 align="center">Teste W2O</h1>

## 🛸 Sobre

Esse projeto se trata de um teste para ingressar na empresa _W2O_.

---

## 🛰 Tecnologias e ferramentas utilizadas

### Backend
 - PHP
 - Mysqli

### Frontend
 - PHP
 - Semantic Ui

---

## 🚀 Instalação

### Comando para fazer o clone do repositório.

```bash
git clone https://github.com/William-Koerich/teste_w2o.git
```

### Instruções SQL para criação das tabelas.

- Criar tabela empresa.

```sql
CREATE TABLE empresa (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    cnpj VARCHAR(30) NOT NULL,
    telefone VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    endereco VARCHAR(100) NOT NULL
)
```

- Criar tabela funcionário.

```sql
CREATE TABLE funcionario (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    telefone VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    data_nascimento DATE NOT NULL
)
```
