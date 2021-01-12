# Snake and Ladders

Snakes and Ladders es un antiguo juego de mesa indio considerado hoy en día como un clásico mundial. Se juega entre dos o más jugadores en un tablero que tiene cuadrados numerados y en cuadrícula. En el tablero se muestran varias "escaleras" y "serpientes", cada una de las cuales conecta dos cuadrados específicos del tablero. [(Fuente Wikipedia)](http://https://en.wikipedia.org/wiki/Snakes_and_ladders "(Fuente Wikipedia)")

 ![alt text](https://raw.githubusercontent.com/adrianeyre/codewars/master/Ruby/Authored/snakesandladdersboard.jpg) 
 
###  Reglas
1. Hay dos jugadores y ambos comienzan en el tablero en la casilla 0. 

2. El jugador 1 comienza y se alterna con el jugador 2. 

3. Sigues los números en el tablero en orden 1 => 100 

4. Si el valor de ambos muere son los mismos, entonces ese jugador tendrá otra oportunidad. 

5. Sube escaleras. Las escaleras en el tablero de juego le permiten moverse hacia arriba y avanzar más rápido. Si aterrizas exactamente en un cuadrado que muestra una imagen de la parte inferior de una escalera, entonces puedes mover al jugador hasta el cuadrado en la parte superior de la escalera. (incluso si sacas un doble).

6. Deslícese hacia abajo de las serpientes. Las serpientes te hacen retroceder en el tablero porque tienes que deslizarte hacia abajo. Si aterrizas exactamente en la parte superior de una serpiente, desliza al jugador hasta el cuadrado en la parte inferior de la serpiente o paracaídas. (incluso si sacas un doble). 

7. Aterriza exactamente en la última casilla para ganar. Gana la primera persona en llegar al cuadrado más alto del tablero. ¡Pero hay un giro! Si tira demasiado alto, su jugador "rebota" en el último cuadrado y retrocede. Solo puedes ganar tirando el número exacto necesario para aterrizar en el último cuadrado. Por ejemplo, si estás en la casilla 98 y sacas un cinco, mueve tu pieza de juego a 100 (dos movimientos), luego "rebota" de nuevo a 99, 98, 97 (tres, cuatro y luego cinco movimientos).

8. Si el jugador sacó un doble y aterriza en la casilla final "100" sin ningún movimiento restante, entonces el jugador gana el juego y no tiene que tirar de nuevo.

### Devoluciones

¡Devuelve el jugador n gana! . Donde n es el jugador ganador que ha aterrizado en la casilla 100 sin ningún movimiento restante. 

Regresar ¡ Juego terminado! si un jugador ha ganado y otro jugador intenta jugar. 

De lo contrario, devuelva el jugador n está en la casilla x . Donde n es el jugador actual yx es el cuadrado en el que se encuentran actualmente.

**Link** [Autor del ejercicio (no del codigo)](http://https://www.codewars.com/kata/587136ba2eefcb92a9000027 "Autor del ejercicio (no del codigo)")
