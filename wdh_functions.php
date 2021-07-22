<?php

/** Einfache Wiederholungsaufgaben zu funktionen */




// Eine Funktionsdeklarierung beginnt mit dem Wort function. Ist function ein Key-Word, Schlagwort oder ein  Schlüsselwort?

// Key-Word
// Schlüsselwort

// Mit welchem Wort beschreiben wir den Namen einer Funktion oder einer Variablen?


// Bezeichner

// Wie nennen wir die Variablen in den runden Klammern (), welche im Funktions-Body verarbeitet werden?

// Parameter

// Welches Schlüsselwort wird verwendet, wenn eine Funktion ein Ergebnis, eine Variable oder ein Objekt zurückgibt?

// return


/** Eine Funktion soll die m2 eines Raums berechnen */

// function raum($l, $b) {
//       return $l * $b;
//   }
  
//   var_dump(raum(12,8));


/**
 * Ein Wirtschaftsprüfungsunternehmen benötigt einer Webapplikation einige Funktion um die
 * bilanzielle Zusammensetzung des Kapitals eines Unternehmens aufzuzeigen. 
 * 
 * Du wurdest beauftragt diese Funktionen zu entwickeln.
 * 
 * Entwickle eine Funktion, welche die Eigenkapitalquote berechnet. Die Eigenkapitalquote gibt an,
 * wie hoch der Anteil in Prozent des Eigenkapitals am Gesamtkapital ist. Sie wird zur Beurteilung der
 * Kapitalkraft des Unternehmens herangezogen.
 * 
 * Die Formel lautet: Eigenkapitalquote = Eigenkapital / Gesamtkapital x 100
 */
// function eKQ($e, $g) {
//   return ($e / $g) * 100;
// }
// $result = eKQ(10000,100000);
// echo "Die Eigenkapitalquote betraegt:  $result %";



 /**
  * Die Fremdkapitalquote gibt an, wie hoch der Anteil des Fremdkapitals am Gesamtkapital ist.
  * Diese Bonitätsgröße ist von Unternehmensart, Branche und der wirtschaftlichen Lage eines
  * Unternehmens abhängig.
  *
  * Die Formel lautet: Fremdkapitalquote (Anspannungskoeffizient) = Fremdkapital / Gesamtkapital x 100
  *
  * Entwickle eine Funktion, um die Fremdkapitalquote in Prozent zu bestimmen.
  */
  // function FKQ($f, $g) {
  //   return ($f / $g) * 100;
  // }
  // $result = FKQ(657812,1000000);
  // echo "Die Fremdkapitalquote betraegt: $result %";



/**
 * Der Verschuldungsgrad zeit das Verhältnis von Fremdkapital zu Eigenkapital. Je kleiner der Verschuldungsgrad,
 * desto kreditwürdiger ist das Unternehmen.
 * 
 * Formel: Verschuldungsgrad = Fremdkapital / Eigenkapital * 100
 * 
 * Entwickle eine Funktion, um den Verschuldungsgrad in Prozent zu bestimmen.
 */
// function VG($f, $e) {
//   return ($f / $e) * 100;
// }
// $result = VG(5463,10000);
// echo "Der Verschuldungsgrad betraegt: $result %";


