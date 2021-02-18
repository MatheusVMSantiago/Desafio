# Sistema de Cadastro de Perfis
O objetivo deste projeto é ser um controlador de perfis, onde o usuario cadastrara os nomes das pessoas e suas datas de nascimento.

## Requisitos
Para a utilização deste projeto é necessário a utilização de algumas aplicações:

### Slim Framework v.2
Documentação: http://www.slimframework.com/docs/v2/

#### Para a utilização de uma URL amigavel, o arquivo httpd-vhosts.conf está disponível no conteúdo do projeto, basta utilizar o código em seu arquivo vhosts de seu Apache

### Template Rain TPL
Desenvolvedor: https://github.com/feulf/raintpl3

### Composer 
Documentação e download: https://getcomposer.org/

### Json Composer para instalação + criação de namespace
Crie um arquivo composer.json na raiz do projeto, execute em terminal o comando para instalação: ```composer install``` dentro de ```xampp/htdocs/SEUDIRETORIO```.

Certificando-se que o autoload foi carregado de maneira correta, pode-se utilizar o comando ```composer dump-autoload```.
```
{
    "require": {
        "slim/slim": "2.0",
        "rain/raintpl": ">=3.0.0"
    },
    "autoload": {
        "psr-4": {
            "App\\": "App"
        }
    }
}
```
### Estrutura Inicial do Banco de Dados
```
CREATE TABLE tb_perfil(
idperfil INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_usu VARCHAR(64) NOT NULL,
data_nasc DATE NOT NULL
);
```

## Utilização do sistema
Realizada a criação do Banco de Dados, instalação do composer, slim framework, rain tpl e criação dos namespaces, realize a conexão com o banco de dados, na classe ```Connect``` basta alterar os dados de conexão.

Através da página Index você terá acesso ao cadastro de um novo Perfil. Após Criação de um Perfil, na página Home será apresentado o Perfil cadastrado e as funcionalidades de Exlusão, Edição e Json.

![Imagem Perfil](https://github.com/MatheusVMSantiago/Desafio/blob/master/App/Image_perfil/HomePerfil.JPG)

