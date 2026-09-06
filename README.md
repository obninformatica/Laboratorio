# Laboratório de Engenharia em Eletrônica
## Desenvolvimento e estudos acadêmicos
-----------------------------

Sistema para trabalhos e estudos em sistemas
que usam a eletrônica como base. Processo usado
tem base científica.

### "Engenharia, o uso intencional da ciência"

-----------------------------
Árvore de diretórios que compõe a estrutura
-----------------------------
Aplicativo PHP/PDO procedimento estilo MVC (Models / Viewers / Controllers)
- Model
- View
- Controller

Árvore do sistema de arquivos:
- APP
	- Classes
	- Controllers
	    - Admin
	    - Erro
	    - Site
	- Interfaces
	- Functions
	- Models
	    - Admin
	    - Site
	- Views
	    - Admin
	    - Site
- public
	- assets
		- css
		- js
		- images
	- bootstrap
- Vendor
	- Var-dumper
	- Twig
---------------------------
Este sistema usa o composer.
## Instalar o composer:

Em primeiro plano, instale o composer de acordo com o sistema operacional:
- https://getcomposer.org/

## Instalar Composer usando curl em seu Projeto:
use esta linha de comando no seu terminal:

`curl -sS https://getcomposer.org/installer | php`

## Site packagist:

O site packagist tem vários pacotes para uso, o site é:
- https://packagist.org/

## Usar o composer para instalar o var-dumper:

Após feito isso, instalar o var-dumper, usando o composer:
- `composer require symfony/var-dumper`

## Usar o composer para instalar o twig:

Para instalar o twig use o composer:
- `composer require twig/twig`
	

