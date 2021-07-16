# CRUD LARAVEL

Crud laravel com sqlite, controle de produtos e setores.

## Instalação

Comandos para a instalação dos pacotes e comandos para startar a API.

```bash
1. composer install

2. touch ./database/database.sqlite

3. php artisan migrate

4. php artisan serve
```

## Endpoints - produtos

localhost:8000/produtos - get # Irá buscar todos os produtos em conjunto com a tabela setores.

localhost:8000/produtos - post # Irá cadastrar um novo produto:

##### Segue a baixo o exemplo do body...
```
{
        "produto": "Pão"
        "id_setor": id de um setor existente.
}
```


localhost:8000/produtos - put # Irá ser feito o update do produto:

##### Segue a baixo o exemplo do body...

```
{
        "id": id do produto para fazer update.
        "produto": "Pão"
        "id_setor": id de um setor existente.
}
```


localhost:8000/produtos - delete # Irá ser feito a exclusão do produto.

##### Segue a baixo o exemplo do body...

```
{
        "id": id do produto a ser deletado.
}

```

## Endpoints - setores


localhost:8000/setores - get # Irá buscar todos os setores.

localhost:8000/setores - post # Irá cadastrar um novo setor.

##### Segue a baixo o exemplo do body...
```
{
        "setores": "Padaria"
}
```

localhost:8000/setores - put # Irá ser feito o update dos setores.

##### Segue a baixo o exemplo do body...
```
{
        "setores": "Padaria"
        "id": id do setor.
}
```

 localhost:8000/setores - delete # Irá ser feita a exclusão do setor.

##### Segue a baixo o exemplo do body...
```
 {
        "id": id do setor que será deletado.
 }
```


## Autor

Mateus Cibelli de Oliveira. Desenvolvedor da API de Gerenciamento de Produtos e Setores.
