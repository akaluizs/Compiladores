<?php
require_once "vendor/autoload.php";

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;
use App\Generated\GrammarLexer;
use App\Generated\GrammarParser;
use App\Visitor\C3DVisitor;

/**
 * Función para procesar la entrada y generar C3D
 */
function generarC3D($input, $titulo)
{
    echo "--- $titulo ---" . PHP_EOL;

    // 1. Crear el flujo de entrada
    $inputStream = InputStream::fromString($input);

    // 2. Inicializar Lexer y TokenStream
    $lexer = new GrammarLexer($inputStream);
    $tokens = new CommonTokenStream($lexer);

    // 3. Inicializar Parser y obtener el árbol (regla inicial: root)
    $parser = new GrammarParser($tokens);
    $tree = $parser->root();

    // 4. Ejecutar el Visitor
    $visitor = new C3DVisitor();
    $visitor->visit($tree);

    // 5. Retornar el código generado
    echo $visitor->getCode() . "end";
    echo str_repeat("-", 30) . PHP_EOL;
}

// CASO DE PRUEBA 1: Expresiones Aritméticas [cite: 35, 36]
$input1 = <<<'EOD'
$a := (2 + 2) * 3 / 1 - 2;
print(a);
EOD;

// CASO DE PRUEBA 2: Estructura If-Else [cite: 42-50]
$input2 = <<<'EOD'
$a := 8;
$b := 7;
$result := 0;
if $a > $b {
    $result := $a;
} else {
    $result := $b;
}
print(result);
EOD;

// Ejecución
generarC3D($input1, "PARTE 1: EXPRESIONES ARITMÉTICAS");
generarC3D($input2, "PARTE 2: ESTRUCTURA IF-ELSE");
