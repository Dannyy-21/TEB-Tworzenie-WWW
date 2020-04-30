# TEB-Tworzenie-WWW
Przykładowe repozytorium dla zajęć z Tworzenia WWW

## Zasady

1. Zadania domowe
1.1. Pod koniec każdych zajęć zostaną określone zadania, które należy wykonać w domu.
1.2. Zadania domowe należy wykonać do czasu rozpoczęcia następnych zajęć.
1.3. Każde zadanie domowe należy zakończyć poprzez uaktualnienie repozytorium na serwisie github.com.

 ## Zadania
 
 ### 1. Szkielet formularza do głosowania na przewodniczącego szkoły
 Stwórz szkielet strony oparty na bibliotece [Bootstrap](https://getbootstrap.com).
 Na stronie zamieść:
  - Tytuł formularza
  - Pole umożliwiające wprowadzenie identyfikatora głosującego
  - 5 opcji wyboru kandydata (jednokrotnego wyboru)
  
 #### Zadanie domowe
Do wykonania przed 14:10 03.02.2020r.:
 - Uzupełnij plik html o metadane zawierające twoje imię i nazwisko
 - Zaimplementuj responsywność oraz czytelność strony (przyjżyj się klasie ```container``` biblioteki Bootstrap)
 
 ####
Do wykonania przed 23.04.2020r.:
 - Ukończ szkielet formularza
 - Za pomocą Bootstrapa dodaj alerty, (np. czerwony oraz zielony) informujące o (nie)powodzeniu wysłania/wypełnienia formularza.

 ####
Do wykonania przed 30.04.2020r.:
 - Zaimplementuj funkcje PHP weryfikujące poprawność wypełnienia formularza:
    - Identyfikator głosującego musi być podany
      - Identyfikator składa się z 6 cyfr i jest podzielny przez 7 (przyjżyj się funkcjom is_numeric() oraz strlen()).
    - Głos musi być oddany
