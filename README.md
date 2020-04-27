# Pembelian Tiket Bus Malam Online

## How to contribute :question:

:heavy_exclamation_mark: **JANGAN LANGSUNG PUSH KE BRANCH MASTER** :heavy_exclamation_mark:

Cara push yang benar :

1. Buat branch baru contoh : sultan
2. Ganti file apapun yang dibutuhkan dibranch kamu jika sudah baru push branchmu dan jika sudah fix silahkan pull request ke master, nanti akan direview dan jika disetujui akan digabungkan ke branch master

## Commit Message Guideline

tujuan dari pesan commit memiliki semacam rules ini agar lebih mudah pembacaan pesan dan memahami perubahan apa yang terjadi

### Format

setiap pesan commit usahakan memiliki sebuah **Header, Body, Footer**, Header harus memiliki format spesial yang berisi **type, scope (optional), subject**

```txt
<type>(<optional scope>): <subject>
<BLANK LINE>
<optional body>
<BLANK LINE>
<optional footer>
```

setiap line pesan commit tidak boleh lebih dari 100 karakter agar pesan lebih mudah dibaca.

#### Type

beberapa type yang bisa digunakan

* feat: fitur baru
* fix: memperbaiki bug
* docs: perubahan dokumentasi
* style: formatting, kurang semi colons, dll
* refactor: mengubah code seperti mengganti nama variavel dll
* chorce: mengganti atau menambah library dll

#### Scope (Optional)

Scope dapat dikosongi bila perubahan yang dilakukan terlalu general, beberapa contoh scope

* config
* view
* model
* controller
* dll.

#### Subject

Kalimat rangkuman apa yang berubah

#### Body (Optional)

Body dapat dikosongi, biasanya berisi alasan kenapa melakukan perubahan tsb.

#### Footer (Optional)

Footer dapat dikosongi, biasanya berisi tentang **Breaking Changes** atau commit ini berkaitan dengan github issue

#### Contoh

```txt
fix(middleware): ensure Range headers adhere more closely to RFC 2616

Add one new dependency, use `range-parser` (Express dependency) to compute
range. It is more well-tested in the wild.

Closes #2310
```
