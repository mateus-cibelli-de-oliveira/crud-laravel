SQL:
SELECT  "produtos"."id" AS "id_produto"
       ,*
FROM "produtos"
INNER JOIN "produtos"
ON "produtos"."id_setor" = "setores"."id"