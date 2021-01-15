## CONFIGURAÇÃO

Renomeie o arquivo `env.example.php` para `env.php` e preencha com as informações necessárias.

Rode no terminal `composer install` ou `php composer.phar install` dependendo de como você usa o composer.

Use os códigos no diretório `sql/` para criar o seu banco de dados trabalhando com o SGBD MySQL.


## ROTAS

Url Base:

```bash
> http://localhost/(Diretório)/index.php
```


<br>
<br>
<br>

## Mostrar lista de carros 

  Retorna dados Json sobre todos os carros disponíveis.

* Rota

```bash
/carro
```
  
* Método: 

  `GET`
  
* Parâmetros de URL
 
   Nenhum

* Parâmetros de dados 

  Nenhum


<br>
<br>
<br>

## Adicionar um veículo 
  
*  Rota 

```bash
/carro
```

*  Método: 

  `POST`
  
*  Parâmetros de URL 
 
   Nenhum

* Parâmetros de dados 

~~~Json
{
    "nome": "xxxx",
    "valor": "0000"
}
~~~

<br>
<br>
<br>

## Alterar um veículo 
  
*  Rota 

```bash
/carro
```

*  Método: 

  `PUT`
  
*  Parâmetros de URL 
 
   Nenhum

* Parâmetros de dados 

~~~Json
{
    "id": "0",
    "nome": "xxxxxx",
    "valor": "000"
}
~~~

<br>
<br>
<br>

## Removendo um veículo 
  
*  Rota 

```bash
/carro
```

*  Método: 

  `DELETE`
  
*  Parâmetros de URL 
 
   Nenhum

* Parâmetros de dados 

~~~Json
{
    "id": "0"
}
~~~

<br>
<br>
<br>

## Alugar um veículo 
  
*  Rota 

```bash
/alugar
```

*  Método: 

  `PUT`
  
*  Parâmetros de URL 
 
   Nenhum

* Parâmetros de dados 

~~~Json
{
    "id": "0",
    "nome": "xxxxxx",
	"telefone": "0000-00096"
}
~~~


<br>
<br>
<br>

## Devolver um veículo 
  
*  Rota 

```bash
/devolver
```

*  Método: 

  `PUT`
  
*  Parâmetros de URL 
 
   Nenhum

* Parâmetros de dados 

~~~Json
{
   "id": "0"
}
~~~
















