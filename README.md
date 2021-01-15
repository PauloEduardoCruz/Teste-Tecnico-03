## CONFIGURAÇÃO

Renomeie o arquivo `env.example.php` para `env.php` e preencha com as informações necessárias.

Rode no terminal `composer install` ou `php composer.phar install` dependendo de como você usa o composer.

Use os códigos no diretório `sql/` para criar o seu banco de dados trabalhando com o SGBD MySQL.


## ROTAS

Url Base:

```bash
> http://localhost/(Diretório)/index.php
```




### Mostrar lista de carros 

  Retorna dados json sobre todos os carros disponíveis.

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




### Adicionar um veículo 
  
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
















