# Deju gurū

Mājaslapa, kurā ir apkopota informācija par dejošanu.

## Uzstadīšana 🔧

> Lai uzstādītu šo majaslapu, ir vajadzīgas 3 lietas.

1. Git Bash
2. Majaslapas mape
3. Composer

-------------

- Git Bash var lejupielādēt [šeit](https://git-scm.com/downloads)
- Composer var lejupielādēt [šeit](https://getcomposer.org/download/)

-------------

### Kad viss ir lejupielādēts

1. Novietot majaslapas mapi, kur velās datorā.
2. Atrast šī faila (mapes) atrašanās vietu.
3. Uzpiest uz majaslapas mapes ar peles labo taustiņu un izveleties --> **Git Bash Here**
4. Lejupielādēt **Composer** majaslapas mapē caur **Git Bash** lietotni.

```bash
composer install
```

- Ja sanak problemas lejupieladejot composer majaslapas mapē

```bash
composer dump-autoload
```

Šī komanda attirīs visus compilētos failus un atrašanās vietas.

-------------

5. Ievadīt komandu, kas palaidīs majaslapu tiešsaistē.

```bash
php bin/console server:run
```

6. Uz ekrāna japaradās kautkas lidzigam šim.
```diff 
+ [OK] Server listening on http://127.0.0.1:8000
```

7. Nokopēt sakot ar *http://...* un ievadīt internetā pārlukā.

-------------

### Visam vajadzētu būt izdarītam un gatavam stradāt! ✅
Ja ir kādi jautajumi, par šo majaslapas uzstadīšanas instrukciju, droši varat rakstīt uz epastu - **nauris-putans@Inbox.lv** 
