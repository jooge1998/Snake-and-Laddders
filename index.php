<?php
/* 

Tarea

Tu tarea es hacer una clase simple llamada SnakesLadders . Los casos de prueba llamarán al método play (die1, die2) independientemente del estado del juego o del turno del jugador. Las variables die1 y die2 son el dado que se lanza en un turno y son números enteros entre 1 y 6. El jugador moverá la suma de die1 y die2.
El tablero

Reglas

1. Hay dos jugadores y ambos parten del tablero en la casilla 0.

2. El jugador 1 comienza y se alterna con el jugador 2.

3. Sigue los números en el tablero en orden 1 => 100

4. Si el valor de ambos dados es el mismo, ese jugador tendrá otra oportunidad.

5. Sube escaleras. Las escaleras en el tablero de juego le permiten moverse hacia arriba y avanzar más rápido. Si aterrizas exactamente en un cuadrado que muestra una imagen de la parte inferior de una escalera, entonces puedes mover al jugador hasta el cuadrado en la parte superior de la escalera. (incluso si sacas un doble).

6. Deslícese hacia abajo de las serpientes. Las serpientes te hacen retroceder en el tablero porque tienes que deslizarte hacia abajo. Si aterrizas exactamente en la parte superior de una serpiente, desliza al jugador hasta el cuadrado en la parte inferior de la serpiente o paracaídas. (incluso si sacas un doble).

7. Aterriza exactamente en la última casilla para ganar. Gana la primera persona en llegar al cuadrado más alto del tablero. ¡Pero hay un giro! Si tira demasiado alto, su jugador "rebota" en el último cuadrado y retrocede. Solo puedes ganar tirando el número exacto necesario para aterrizar en el último cuadrado. Por ejemplo, si estás en la casilla 98 y sacas un cinco, mueve tu pieza de juego a 100 (dos movimientos), luego "rebota" de nuevo a 99, 98, 97 (tres, cuatro y luego cinco movimientos).

8. Si el jugador sacó un doble y aterriza en la casilla final "100" sin ningún movimiento restante, entonces el jugador gana el juego y no tiene que tirar de nuevo.
Devoluciones

Regresar

¡Devuelve el jugador n gana! . Donde n es el jugador ganador que ha aterrizado en la casilla 100 sin ningún movimiento restante.

¡ Juego terminado! si un jugador ha ganado y otro jugador intenta jugar.

De lo contrario, devuelva el jugador n está en la casilla x .Donde n es el jugador actual yx es el cuadrado en el que se encuentran actualmente.

 */

class SnakesLadders {

    private $player1;
    private $player2;
    private $turno;

    function __construct() {
        $this->player1 = 0;  
        $this->player2 = 0;  
        $this->turno = true;      
    
    }

    public function setP1($p1){
        $this->player1 = $p1;
    }

    public function getP1(){
        return $this->player1;
    }


    public function setP2($p2){
        $this->player2 = $p2;
    }

    public function getP2(){
        return $this->player2;
    }


    public function setTurno($tur){
        $this->turno = $tur;
    }

    public function getTurno(){
        return $this->turno;
    }
  

    public function play($die1, $die2) {
                 
        if ($this->getTurno()) {

            if ($this->getP2() == 100) {
                return "Game over!";
                }

            $this->setTurno(false);
            $this->setP1($this->getP1() + ($die1 + $die2));
            
            if ($this->getP1()== 100) {
                return "Player 1 Wins!";
            }
            
            if ($this->getP1()>100) {       
                $this->setP1($this->getP1() - (($this->getP1()-100)+($this->getP1()-100)));
            }else {
                # code...
                $this->escaleras($this->getP1(),"p1");
                $this->serpiente($this->getP1(),"p1");
                if ($die1 == $die2) {
                    $this->setTurno(true);
                    //echo "Player 1 saco doble ". $die1 . "<br>";
                }
                return "Player 1 is on square ". $this->getP1() ."<br>";
            } 
    

        }else{
            
            if ($this->getP1() == 100) {
                return "Game over!";
            }
            
            $this->setTurno(true);
            $this->setP2($this->getP2() + ($die1 + $die2));
            if ($this->getP2()== 100) {
                return "Player 2 Wins!";
            }
            
            if ($this->getP2()>100) {
                $this->setP2($this->getP2() - (($this->getP2()-100)+($this->getP2()-100)));
            }else {
                $this->escaleras($this->getP2(),"p2");
                $this->serpiente($this->getP2(),"p2");
                
                if ($die1 == $die2) {
                    $this->setTurno(false);
                    //echo "Player 2 saco doble ". $die1 . "<br>";
                }
            }
            return "Player 2 is on square ". $this->getP2() . "<br>";

        }
       
    }


    public function winner(){
        if ($this->getP1()== 100) {
            return "player 1 wins!";
        } else if ($this->getP2()== 100) {
            return "player 2 wins!";
        }
    }

    public function escaleras($player,$n){

        if ($player == 2 && $n =="p1") {
             $this->setP1(38);
        }elseif ($player == 2 && $n =="p2") {
            $this->setP2(38);
        }

        if ($player == 7 && $n =="p1") {
            $this->setP1(14);
       }elseif ($player == 7 && $n =="p2") {
           $this->setP2(14);
       }

       if ($player == 8 && $n =="p1") {
        $this->setP1(31);
        }elseif ($player == 8 && $n =="p2") {
            $this->setP2(31);
        }

        if ($player == 15 && $n =="p1") {
            $this->setP1(26);
       }elseif ($player == 15 && $n =="p2") {
           $this->setP2(26);
       }

       if ($player == 28 && $n =="p1") {
        $this->setP1(84);
        }elseif ($player == 28 && $n =="p2") {
            $this->setP2(84);
        }

        if ($player == 21 && $n =="p1") {
            $this->setP1(42);
       }elseif ($player == 21 && $n =="p2") {
           $this->setP2(42);
       }

       if ($player == 36 && $n =="p1") {
        $this->setP1(44);
        }elseif ($player == 36 && $n =="p2") {
            $this->setP2(44);
        }

        if ($player == 51 && $n =="p1") {
            $this->setP1(67);
       }elseif ($player == 51 && $n =="p2") {
           $this->setP2(67);
       }

       if ($player == 78 && $n =="p1") {
        $this->setP1(98);
        }elseif ($player == 78 && $n =="p2") {
            $this->setP2(98);
        }

         if ($player == 71 && $n =="p1") {
        $this->setP1(91);
        }elseif ($player == 71 && $n =="p2") {
        $this->setP2(91);
        }

        if ($player == 87 && $n =="p1") {
            $this->setP1(94);
        }elseif ($player == 87 && $n =="p2") {
        $this->setP2(94);
        }




    }

    public function serpiente($player,$n){

        if ($player == 16 && $n =="p1") {
             $this->setP1(6);
        }elseif ($player == 16 && $n =="p2") {
            $this->setP2(6);
        }

        if ($player == 49 && $n =="p1") {
            $this->setP1(11);
       }elseif ($player == 49 && $n =="p2") {
           $this->setP2(11);
       }

       if ($player == 46 && $n =="p1") {
        $this->setP1(25);
        }elseif ($player == 46 && $n =="p2") {
            $this->setP2(25);
        }

        if ($player == 62 && $n =="p1") {
            $this->setP1(19);
       }elseif ($player == 62 && $n =="p2") {
           $this->setP2(19);
       }

       if ($player == 64 && $n =="p1") {
        $this->setP1(60);
        }elseif ($player == 64 && $n =="p2") {
            $this->setP2(60);
        }

        if ($player == 74 && $n =="p1") {
            $this->setP1(53);
       }elseif ($player == 74 && $n =="p2") {
           $this->setP2(53);
       }

       if ($player == 89 && $n =="p1") {
        $this->setP1(68);
        }elseif ($player == 89 && $n =="p2") {
            $this->setP2(68);
        }

        if ($player == 92 && $n =="p1") {
            $this->setP1(88);
       }elseif ($player == 92 && $n =="p2") {
           $this->setP2(88);
       }

       if ($player == 95 && $n =="p1") {
        $this->setP1(75);
        }elseif ($player == 95 && $n =="p2") {
            $this->setP2(75);
        }

         if ($player == 99 && $n =="p1") {
        $this->setP1(80);
        }elseif ($player == 99 && $n =="p2") {
        $this->setP2(80);
        }

    }
  
  }


  $obj = new SnakesLadders();


   echo $obj->play(1,1);
  echo $obj->play(1,5);
  echo $obj->play(6,2);
  echo $obj->play(1,1); 
 echo $obj->play(1,2);
 echo $obj->play(6,5);
 echo $obj->play(5,6);
  echo $obj->play(2,3);
  echo $obj->play(5,1);
  echo $obj->play(5,1);
    
 /*  class SnakesLadders {
    private $player = [1, 0, 0];
    private $tunnel = [ 2=>38,7=>14,8=>31,
                        15=>26,16=>6,
                        21=>42,28=>84,
                        36=>44,
                        46=>25,49=>11,
                        51=>67,
                        62=>19,64=>60,
                        71=>91,74=>53,78=>98,
                        87=>94,89=>68,
                        92=>88,95=>75,99=>80
                      ];
  
    public function play($die1, $die2) {
      if($this->player[1] == 100 || $this->player[2] == 100) return 'Game over!';
      
      $sum = $this->player[$this->player[0]] + $die1 + $die2;
      if($sum > 100) $sum -= ($sum - 100) * 2;
      if(isset($this->tunnel[$sum])) $sum = $this->tunnel[$sum];
      $this->player[$this->player[0]] = $sum;
      if($sum == 100) return 'Player '.$this->player[0].' Wins!';
  
      $ret = 'Player '.$this->player[0].' is on square '.$this->player[$this->player[0]];
      if($die1 != $die2 && ++$this->player[0] > 2) $this->player[0] = 1;
      return $ret;
    } */