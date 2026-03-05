# Laravel Controllers & REST API – cvičenie

---

# Controllers & REST API – Laravel

Projekt demonštruje rôzne typy controllerov v Laraveli:
- RPC controller
- Single Action Controller
- REST controller
- REST API controller

Endpointy boli testované pomocou nástroja Postman.

---

## 1. RPC Controller `BookRpcController`


### POST /rpc/books/{id}/borrow

**Popis:** Požičanie knihy podľa ID.

```
http://localhost:8000/api/rpc/books/1/borrow?user_id=5
```

![Borrow book](images/rpc_post_borrowBook.png)

---

### POST /rpc/books/{id}/return

**Popis:** Vrátenie knihy podľa ID.
```
http://localhost:8000/api/rpc/books/1/return?condition=dobrá
```
![Return book](images/rpc_post_returnBook.png)

---

## 2. SAC Controller `BookSacController`

### GET /sac/books/{id}

**Popis:** Zobrazenie knihy podľa ID pomocou Single Action Controller.

```
http://localhost:8000/api/sac/books/1?format=A4
```

![Invoke book](images/sac_get_invoke.png)

---

## 3. REST Controller `BookRestController`

### GET /rest/books

**Popis:** Získanie zoznamu všetkých kníh.

```
http://localhost:8000/api/rest/books
```

![REST index](images/rest_get_index.png)

---

### GET /rest/books/create

**Popis:** Zobrazenie formulára na vytvorenie novej knihy.

```
http://localhost:8000/api/rest/books/create
```

![REST create](images/rest_get_create.png)

---

### GET /rest/books/{id}

**Popis:** Zobrazenie detailu knihy podľa ID.

```
http://localhost:8000/api/rest/books/5
```

![REST show](images/rest_get_show.png)

---

### POST /rest/books

**Popis:** Vytvorenie novej knihy.

```
http://localhost:8000/api/rest/books?title=Dobrodružstvá
```

![REST store](images/rest_post_store.png)

---

### PUT /rest/books/{id}

**Popis:** Aktualizácia existujúcej knihy.

```
http://localhost:8000/api/rest/books/7?title=Piesne&author=Karol Pečienka
```

![REST update](images/rest_put_update.png)

---

### DELETE /rest/books/{id}

**Popis:** Zmazanie knihy podľa ID.

```
http://localhost:8000/api/rest/books/8
```

![REST delete](images/rest_delete_destroy.png)

---

### GET /rest/books/{id}/edit

**Popis:** Zobrazenie formulára na úpravu knihy.

```
http://localhost:8000/api/rest/books/2/edit
```

![REST edit](images/rest_get_edit.png)
---
## 4. REST API Controller `BookApiController`

### GET /restapi/books

**Popis:** Získanie zoznamu všetkých kníh vo formáte JSON.

```
http://localhost:8000/api/restapi/books
```

![REST API index](images/restapi_get_index.png)

---

### GET /restapi/books/{id}

**Popis:** Zobrazenie detailu knihy.

```
http://localhost:8000/api/restapi/books/2
```

![REST API show](images/restapi_get_show.png)

---

### POST /restapi/books

**Popis:** Vytvorenie novej knihy cez REST API.

```
http://localhost:8000/api/restapi/books?title=Dobrodružstvá&author=Karel Čapek
```

![REST API store](images/restapi_post_store.png)

---

### PUT /restapi/books/{id}

**Popis:** Aktualizácia existujúcej knihy.

```
http://localhost:8000/api/restapi/books/2?title=Ano&author=Milan Rúfus
```

![REST API update](images/restapi_put_update.png)

---

### DELETE /restapi/books/{id}

**Popis:** Zmazanie knihy podľa ID.

```
http://localhost:8000/api/restapi/books/2
```

![REST API delete](images/restapi_delete_destroy.png)

---

## Testovanie

Všetky endpointy boli testované pomocou nástroja **Postman**.

Screenshoty obsahujú:
- HTTP metódu
- URL endpointu
- telo požiadavky (ak existuje)
- odpoveď servera
- HTTP status kód

---

# Úloha – Koľko je hodín?

Cieľom úlohy bolo vytvoriť dva rôzne controllery, ktoré spracujú požiadavku na získanie aktuálneho času.

Použité boli:

- REST API Controller
- RPC Controller
- vlastná služba **TimeService**
- Dependency Injection

Aplikácia vracia aktuálny dátum a čas vo formáte: Y-m-d H:i:s

## 1. REST API Controller `TimeApiController`

### GET /restapi/time

**Popis:** Vracia aktuálny čas v JSON formáte.

```
http://localhost:8000/api/restapi/time
```

![REST API index](images/time_restapi_get_index.png)

---

## 2. RPC Controller `TimeRpcController`


### GET /rpc/time

**Popis:** Vracia aktuálny čas ako plaintext odpoveď.

```
http://localhost:8000/api/rpc/time
```

![Get_time](images/rpc_get_time.png)

---
