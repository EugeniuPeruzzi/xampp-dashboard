## Descrizione del progetto

Questo script PHP esegue la scansione della cartella corrente, recuperando tutte le sottocartelle, e le visualizza in una pagina HTML con un'interfaccia utente elegante.
Ogni cartella viene rappresentata come un elemento cliccabile che rimanda alla directory stessa.

## Funzionamento

1. Viene utilizzato `glob('*')` per ottenere tutte le sottocartelle.
2. Ogni cartella è visualizzata come un'icona di cartella con un link alla directory.
