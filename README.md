# Ex PHP 8 OOP Movie

## Descrizione

Questo progetto si propone di allenarsi con la Programmazione Orientata agli Oggetti (OOP) in PHP. L'idea è di modellare delle classi pertinenti ai Film e ai Generi Cinematografici.

## Svolgimento

### 1. Creazione della Classe `Movie`

Nel file `index.php` è definita la classe `Movie`, che include:

- **Variabili d'istanza**: le proprietà per definire le caratteristiche di un film (es. titolo, anno, durata, ecc.).
- **Costruttore**: un metodo speciale per inizializzare un'istanza della classe con valori specifici.
- **Metodi**: almeno un metodo che permette di manipolare o visualizzare le informazioni di un film.

### 2. Creazione della Classe `Genre`

Nel file `index.php` è anche definita la classe `Genre`, che rappresenta il genere cinematografico di un film. La classe include:

- **Variabili d'istanza**: le proprietà per definire i dettagli di un genere (es. nome del genere).
- **Costruttore**: un metodo per inizializzare un'istanza della classe `Genre`.

Ogni film avrà almeno un genere associato.

### 3. Istanziamento di Oggetti

Nel file `index.php`:

- Vengono creati almeno due oggetti della classe `Movie`.
- Vengono stampati a schermo i valori delle relative proprietà.

### Bonus

#### Bonus 1: Più di un Genere

Modificare la classe `Movie` per accettare più di un genere per ciascun film.

#### Bonus 2: Aggiungere un Trait

Aggiungere un Trait alla classe `Movie`, che includa almeno:

- Una proprietà.
- Un metodo.

#### Bonus 3: Layout Completo per la Lista di Movies

Creare un layout completo per stampare a schermo una lista di film. Organizzare il codice in modo chiaro, separando le funzionalità in appositi file e cartelle.

## Organizzazione del Codice

L'architettura del progetto è organizzata nel seguente modo:

- **File `db.php`**: un file dedicato ai dati, contenente ad esempio gli array di oggetti `Movie` e `Genre`.
- **Cartella `Models/`**: ogni classe (`Movie`, `Genre`, ecc.) è contenuta in un file separato all'interno di questa cartella.
- **Struttura e Layout**: la struttura e i contenuti sono separati in file e parziali dedicati, per migliorare la leggibilità e la manutenzione del codice.



