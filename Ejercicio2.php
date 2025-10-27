<?php
class CuentaBancaria {
    private $saldo;

    public function __construct($saldoInicial = 0) {
        $this->saldo = $saldoInicial;
    }

    public function depositar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
        }
    }

    public function retirar($monto) {
        if ($monto > 0 && $this->saldo >= $monto) {
            $this->saldo -= $monto;
        } else {
            echo "Error: Fondos insuficientes.<br>";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}
?>
