# Документация к API
API для работы с пользователями, их постами и задачами (https://jsonplaceholder.typicode.com/) со следующей функциональностью:
+ Получение пользователей, их постов и заданий
+ Добавление, редактирование и удаление постов
  <br>

## Разделы документации
1. [Получение пользователей, их постов и заданий](#1-Получение-пользователей-их-постов-и-заданий)
2. [Добавление, редактирование и удаление постов](#2-Добавление-редактирование-и-удаление-постов)

## 1. Получение пользователей, их постов и заданий
### Получение всех пользователей:
***Метод запроса***
```console
GET
```
***URL***
```console
http://localhost:8000/api/users
```
***Тело запроса***
```
Нет
```

**Описание:**
<br>
Возвращает всех пользователей.
<br>

***Тело ответа***
```json
[
    {
        "id": 1,
        "name": "Leanne Graham",
        "username": "Bret",
        "email": "Sincere@april.biz",
        "address": {
            "street": "Kulas Light",
            "suite": "Apt. 556",
            "city": "Gwenborough",
            "zipcode": "92998-3874",
            "geo": {
                "lat": "-37.3159",
                "lng": "81.1496"
            }
        },
        "phone": "1-770-736-8031 x56442",
        "website": "hildegard.org",
        "company": {
            "name": "Romaguera-Crona",
            "catchPhrase": "Multi-layered client-server neural-net",
            "bs": "harness real-time e-markets"
        }
    },
    {
        "id": 2,
        "name": "Ervin Howell",
        "username": "Antonette",
        "email": "Shanna@melissa.tv",
        "address": {
            "street": "Victor Plains",
            "suite": "Suite 879",
            "city": "Wisokyburgh",
            "zipcode": "90566-7771",
            "geo": {
                "lat": "-43.9509",
                "lng": "-34.4618"
            }
        },
        "phone": "010-692-6593 x09125",
        "website": "anastasia.net",
        "company": {
            "name": "Deckow-Crist",
            "catchPhrase": "Proactive didactic contingency",
            "bs": "synergize scalable supply-chains"
        }
    },
    {
        "id": 3,
        "name": "Clementine Bauch",
        "username": "Samantha",
        "email": "Nathan@yesenia.net",
        "address": {
            "street": "Douglas Extension",
            "suite": "Suite 847",
            "city": "McKenziehaven",
            "zipcode": "59590-4157",
            "geo": {
                "lat": "-68.6102",
                "lng": "-47.0653"
            }
        },
        "phone": "1-463-123-4447",
        "website": "ramiro.info",
        "company": {
            "name": "Romaguera-Jacobson",
            "catchPhrase": "Face to face bifurcated interface",
            "bs": "e-enable strategic applications"
        }
    },
    {
        "id": 4,
        "name": "Patricia Lebsack",
        "username": "Karianne",
        "email": "Julianne.OConner@kory.org",
        "address": {
            "street": "Hoeger Mall",
            "suite": "Apt. 692",
            "city": "South Elvis",
            "zipcode": "53919-4257",
            "geo": {
                "lat": "29.4572",
                "lng": "-164.2990"
            }
        },
        "phone": "493-170-9623 x156",
        "website": "kale.biz",
        "company": {
            "name": "Robel-Corkery",
            "catchPhrase": "Multi-tiered zero tolerance productivity",
            "bs": "transition cutting-edge web services"
        }
    },
    {
        "id": 5,
        "name": "Chelsey Dietrich",
        "username": "Kamren",
        "email": "Lucio_Hettinger@annie.ca",
        "address": {
            "street": "Skiles Walks",
            "suite": "Suite 351",
            "city": "Roscoeview",
            "zipcode": "33263",
            "geo": {
                "lat": "-31.8129",
                "lng": "62.5342"
            }
        },
        "phone": "(254)954-1289",
        "website": "demarco.info",
        "company": {
            "name": "Keebler LLC",
            "catchPhrase": "User-centric fault-tolerant solution",
            "bs": "revolutionize end-to-end systems"
        }
    }
    ...
]
```

### Получение пользователя по идентификатору:
***Метод запроса***
```console
GET
```

***URL***
```console
http://localhost:8000/api/users/8
```
***Тело запроса***
```console
Нет
```

***Описание:***
<br>
Возвращает пользователя по идентификатору.
<br>

***Тело ответа***
```json
{
    "id": 8,
    "name": "Nicholas Runolfsdottir V",
    "username": "Maxime_Nienow",
    "email": "Sherwood@rosamond.me",
    "address": {
        "street": "Ellsworth Summit",
        "suite": "Suite 729",
        "city": "Aliyaview",
        "zipcode": "45169",
        "geo": {
            "lat": "-14.3990",
            "lng": "-120.7677"
        }
    },
    "phone": "586.493.6943 x140",
    "website": "jacynthe.com",
    "company": {
        "name": "Abernathy Group",
        "catchPhrase": "Implemented secondary concept",
        "bs": "e-enable extensible e-tailers"
    }
}
```

### Получение всех постов:
***Метод запроса***
```console
GET
```
***URL***
```console
http://localhost:8000/api/posts
```
***Тело запроса***
```
Нет
```

**Описание:**
<br>
Возвращает все посты.
<br>

***Тело ответа***
```json
[
    {
        "userId": 1,
        "id": 1,
        "title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
        "body": "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
    },
    {
        "userId": 1,
        "id": 2,
        "title": "qui est esse",
        "body": "est rerum tempore vitae\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla"
    },
    {
        "userId": 1,
        "id": 3,
        "title": "ea molestias quasi exercitationem repellat qui ipsa sit aut",
        "body": "et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut"
    },
    {
        "userId": 1,
        "id": 4,
        "title": "eum et est occaecati",
        "body": "ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit"
    },
    {
        "userId": 1,
        "id": 5,
        "title": "nesciunt quas odio",
        "body": "repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse voluptatibus quis\nest aut tenetur dolor neque"
    }
    ...
]
```

### Получение поста по идентификатору:
***Метод запроса***
```console
GET
```

***URL***
```console
http://localhost:8000/api/posts/3
```
***Тело запроса***
```console
Нет
```

***Описание:***
<br>
Возвращает пост по идентификатору.
<br>

***Тело ответа***
```json
{
    "userId": 1,
    "id": 3,
    "title": "ea molestias quasi exercitationem repellat qui ipsa sit aut",
    "body": "et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut"
}
```

### Получение всех постов для пользователя:
***Метод запроса***
```console
GET
```
***URL***
```console
http://localhost:8000/api/users/2/posts
```
***Тело запроса***
```
Нет
```

**Описание:**
<br>
Возвращает все посты для пользователя с заданным идентификатором.
<br>

***Тело ответа***
```json
[
    {
        "userId": 2,
        "id": 11,
        "title": "et ea vero quia laudantium autem",
        "body": "delectus reiciendis molestiae occaecati non minima eveniet qui voluptatibus\naccusamus in eum beatae sit\nvel qui neque voluptates ut commodi qui incidunt\nut animi commodi"
    },
    {
        "userId": 2,
        "id": 12,
        "title": "in quibusdam tempore odit est dolorem",
        "body": "itaque id aut magnam\npraesentium quia et ea odit et ea voluptas et\nsapiente quia nihil amet occaecati quia id voluptatem\nincidunt ea est distinctio odio"
    },
    {
        "userId": 2,
        "id": 13,
        "title": "dolorum ut in voluptas mollitia et saepe quo animi",
        "body": "aut dicta possimus sint mollitia voluptas commodi quo doloremque\niste corrupti reiciendis voluptatem eius rerum\nsit cumque quod eligendi laborum minima\nperferendis recusandae assumenda consectetur porro architecto ipsum ipsam"
    }
    ...
]
```

### Получение всех заданий:
***Метод запроса***
```console
GET
```
***URL***
```console
http://localhost:8000/api/todos
```
***Тело запроса***
```
Нет
```

**Описание:**
<br>
Возвращает все задания.
<br>

***Тело ответа***
```json
[
    {
        "userId": 1,
        "id": 1,
        "title": "delectus aut autem",
        "completed": false
    },
    {
        "userId": 1,
        "id": 2,
        "title": "quis ut nam facilis et officia qui",
        "completed": false
    },
    {
        "userId": 1,
        "id": 3,
        "title": "fugiat veniam minus",
        "completed": false
    },
    {
        "userId": 1,
        "id": 4,
        "title": "et porro tempora",
        "completed": true
    },
    {
        "userId": 1,
        "id": 5,
        "title": "laboriosam mollitia et enim quasi adipisci quia provident illum",
        "completed": false
    }
    ...
]
```

### Получение задания по идентификатору:
***Метод запроса***
```console
GET
```

***URL***
```console
http://localhost:8000/api/todos/4
```
***Тело запроса***
```console
Нет
```

***Описание:***
<br>
Возвращает задание по идентификатору.
<br>

***Тело ответа***
```json
{
    "userId": 1,
    "id": 4,
    "title": "et porro tempora",
    "completed": true
}
```

### Получение всех заданий для пользователя:
***Метод запроса***
```console
GET
```
***URL***
```console
http://localhost:8000/api/users/2/todos
```
***Тело запроса***
```
Нет
```

**Описание:**
<br>
Возвращает все задания для пользователя с заданным идентификатором.
<br>

***Тело ответа***
```json
[
    {
        "userId": 2,
        "id": 21,
        "title": "suscipit repellat esse quibusdam voluptatem incidunt",
        "completed": false
    },
    {
        "userId": 2,
        "id": 22,
        "title": "distinctio vitae autem nihil ut molestias quo",
        "completed": true
    },
    {
        "userId": 2,
        "id": 23,
        "title": "et itaque necessitatibus maxime molestiae qui quas velit",
        "completed": false
    }
    ...
]
```

## 2. Добавление, редактирование и удаление постов
### Создание поста:
***Метод запроса***
```console
POST
```
***URL***
```console
http://localhost:8000/api/posts
```
***Тело запроса***
```json
{
    "title": "foo",
    "body": "bar",
    "userId": 1
}
```

**Описание:**
<br>
Создает пост.
<br>

***Тело ответа***
```json
{
    "title": "foo",
    "body": "bar",
    "userId": 1,
    "id": 101
}
```

### Изменение поста:
***Метод запроса***
```console
PATCH
```

***URL***
```console
http://localhost:8000/api/posts/3
```

***Тело запроса***
```json
{
    "title": "new title"
}
```

***Описание:***
<br>
Изменяет пост.
<br>

***Тело ответа***
```json
{
    "userId": 1,
    "id": 3,
    "title": "new title",
    "body": "et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut"
}
```

### Удаление поста:
***Метод запроса***
```console
DELETE
```

***URL***
```console
http://localhost:8000/api/posts/2
```

***Тело запроса***
```console
Нет
```

***Описание:***
<br>
Удаляет пост.
<br>

***Тело ответа***
```json
[]
```
