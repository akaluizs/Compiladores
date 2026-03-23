<?php

namespace App\Visitor;

use App\Generated\GrammarBaseVisitor;
use App\Generated\GrammarParser;

class C3DVisitor extends GrammarBaseVisitor
{
    private $tempCount = 0;
    private $labelCount = 0;
    private $output = "";

    // Generadores de ID's
    private function nextTemp()
    {
        return "t" . $this->tempCount++;
    }
    private function nextLabel()
    {
        return "L" . $this->labelCount++;
    }

    private function emit($code)
    {
        $this->output .= $code . "\n";
    }

    public function getCode()
    {
        return $this->output;
    }

    // Expresiones Aritméticas
    public function visitOpAritmetica($ctx)
    {
        $left = $this->visit($ctx->expr(0));
        $right = $this->visit($ctx->expr(1));
        $op = $ctx->op->getText();

        $target = $this->nextTemp();
        $this->emit("$target = $left $op $right");
        return $target;
    }

    public function visitOpUnaria($ctx)
    {
        $expr = $this->visit($ctx->expr());
        $target = $this->nextTemp();
        $this->emit("$target = - $expr");
        return $target;
    }

    public function visitAtomo($ctx)
    {
        if ($ctx->NUMBER()) {
            return $ctx->NUMBER()->getText();
        }
        if ($ctx->ID()) {
            return $ctx->ID()->getText();
        }
        return "";
    }

    public function visitAgrupacion($ctx)
    {
        return $this->visit($ctx->expr());
    }

    public function visitAsignacion($ctx)
    {
        $val = $this->visit($ctx->expr());
        $id = str_replace('$', "", $ctx->ID()->getText());
        $this->emit("$id = $val");
        return null;
    }

    public function visitPrint_stmt($ctx)
    {
        $id = str_replace('$', "", $ctx->ID()->getText());
        $this->emit("print $id");
        return null;
    }

    // --- Estructuras de Control ---

    public function visitIf_stmt($ctx)
    {
        $lTrue = $this->nextLabel();
        $lFalse = $this->nextLabel();
        $lExit = $this->nextLabel();

        // 1. Evaluación de la condición
        $left = $this->visit($ctx->cond()->expr(0));
        $right = $this->visit($ctx->cond()->expr(1));
        $op = $ctx->cond()->opRel()->getText();

        // Formato: if i > n goto End [Basado en tu ejemplo]
        $this->emit("if $left $op $right goto $lTrue");
        $this->emit("goto $lFalse");

        // 2. Bloque Verdadero
        $this->emit("$lTrue:");
        $this->visit($ctx->instrucciones(0));
        $this->emit("goto $lExit");

        // 3. Bloque Falso (Else)
        $this->emit("$lFalse:");
        if ($ctx->instrucciones(1)) {
            $this->visit($ctx->instrucciones(1));
        }

        // 4. Salida
        $this->emit("$lExit:");
        return null;
    }
}
