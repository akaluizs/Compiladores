<?php

/*
 * Generated from grammar/Grammar.g4 by ANTLR 4.13.2
 */

namespace App\Generated;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see GrammarParser}.
 */
interface GrammarListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see GrammarParser::root()}.
	 * @param $context The parse tree.
	 */
	public function enterRoot(Context\RootContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::root()}.
	 * @param $context The parse tree.
	 */
	public function exitRoot(Context\RootContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::instrucciones()}.
	 * @param $context The parse tree.
	 */
	public function enterInstrucciones(Context\InstruccionesContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::instrucciones()}.
	 * @param $context The parse tree.
	 */
	public function exitInstrucciones(Context\InstruccionesContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::instruccion()}.
	 * @param $context The parse tree.
	 */
	public function enterInstruccion(Context\InstruccionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::instruccion()}.
	 * @param $context The parse tree.
	 */
	public function exitInstruccion(Context\InstruccionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::asignacion()}.
	 * @param $context The parse tree.
	 */
	public function enterAsignacion(Context\AsignacionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::asignacion()}.
	 * @param $context The parse tree.
	 */
	public function exitAsignacion(Context\AsignacionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::print_stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterPrint_stmt(Context\Print_stmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::print_stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitPrint_stmt(Context\Print_stmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::if_stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIf_stmt(Context\If_stmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::if_stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIf_stmt(Context\If_stmtContext $context): void;
	/**
	 * Enter a parse tree produced by the `agrupacion`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterAgrupacion(Context\AgrupacionContext $context): void;
	/**
	 * Exit a parse tree produced by the `agrupacion` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitAgrupacion(Context\AgrupacionContext $context): void;
	/**
	 * Enter a parse tree produced by the `opAritmetica`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterOpAritmetica(Context\OpAritmeticaContext $context): void;
	/**
	 * Exit a parse tree produced by the `opAritmetica` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitOpAritmetica(Context\OpAritmeticaContext $context): void;
	/**
	 * Enter a parse tree produced by the `atomo`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterAtomo(Context\AtomoContext $context): void;
	/**
	 * Exit a parse tree produced by the `atomo` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitAtomo(Context\AtomoContext $context): void;
	/**
	 * Enter a parse tree produced by the `opUnaria`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterOpUnaria(Context\OpUnariaContext $context): void;
	/**
	 * Exit a parse tree produced by the `opUnaria` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitOpUnaria(Context\OpUnariaContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::cond()}.
	 * @param $context The parse tree.
	 */
	public function enterCond(Context\CondContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::cond()}.
	 * @param $context The parse tree.
	 */
	public function exitCond(Context\CondContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::opRel()}.
	 * @param $context The parse tree.
	 */
	public function enterOpRel(Context\OpRelContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::opRel()}.
	 * @param $context The parse tree.
	 */
	public function exitOpRel(Context\OpRelContext $context): void;
}