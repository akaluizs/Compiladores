grammar Grammar;


// --- Reglas Sintácticas ---
root : instrucciones EOF;

instrucciones : instruccion+;

instruccion : asignacion ';'
            | if_stmt
            | print_stmt ';'
            ;

asignacion : '$' ID ':=' expr;
print_stmt : 'print' '(' ID ')';
if_stmt : 'if' cond '{' instrucciones '}' ( 'else' '{' instrucciones '}')?;

expr : <assoc=right> '-' expr           # opUnaria
     | expr op=('*'|'/') expr          # opAritmetica
     | expr op=('+'|'-') expr          # opAritmetica
     | '(' expr ')'                    # agrupacion
     | NUMBER                          # atomo
     | '$' ID                          # atomo
     ;

cond : expr opRel expr;

opRel : '>' | '<' | '>=' | '<=' | '==' | '!=';

// --- Reglas Lexicográficas ---
NUMBER : [0-9]+ ('.' [0-9]+)? ;
ID : [a-zA-Z_][a-zA-Z_0-9]*;
WS : [ \t\r\n]+ -> skip;
