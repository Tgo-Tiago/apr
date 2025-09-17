# 📌 APR DIGITAL - Gerenciamento de Risco Crítico

Este projeto é uma aplicação para gerenciamento de risco crítico (APR Digital).  
Ele pode ser executado de forma dinâmica em um servidor PHP ou gerado como site estático.

---

## 🚀 Executando em servidor PHP (modo dinâmico)

Para rodar localmente com suporte a PHP:

```bash
php -S localhost:8080
```

Depois, acesse em [http://localhost:8080](http://localhost:8080).

---

## 🏗️ Gerando build estático (modo estático)

O build estático gera um `index.html` pronto e copia todos os assets necessários para a pasta `dist/`.

Para gerar:

```bash
php build.php
```

Estrutura final da pasta `dist/`:

```
dist/
├── index.html
├── formulary.json
└── src/
    ├── css/
    ├── js/
    └── assets/
```

---

## ✅ Requisitos

- PHP 7.4+
